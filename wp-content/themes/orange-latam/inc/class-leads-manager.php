<?php
/**
 * Leads & Contact Form Submissions Manager.
 * Handles database table creation, storing submissions, and WP Admin dashboard view with CSV export.
 *
 * @package Orange_Latam
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class Orange_Leads_Manager {

	const DB_VERSION = '1.0.0';
	const TABLE_NAME = 'orange_leads';

	/**
	 * Initialize class hooks.
	 */
	public static function init() {
		add_action( 'admin_init', array( __CLASS__, 'check_table_schema' ) );
		add_action( 'admin_menu', array( __CLASS__, 'register_admin_menu' ) );
		add_action( 'admin_post_export_orange_leads_csv', array( __CLASS__, 'export_leads_csv' ) );
		add_action( 'admin_post_delete_orange_lead', array( __CLASS__, 'delete_lead_action' ) );
		add_action( 'admin_post_update_orange_lead_status', array( __CLASS__, 'update_status_action' ) );
	}

	/**
	 * Neutraliza CSV/formula injection: si el valor empieza con un carácter
	 * que Excel/Sheets interpreta como inicio de fórmula (= + - @ tab CR),
	 * lo prefija con una comilla simple para que se trate como texto plano.
	 */
	public static function csv_safe( $value ) {
		$value = (string) $value;
		if ( preg_match( '/^[=+\-@\t\r]/', $value ) ) {
			return "'" . $value;
		}
		return $value;
	}

	/**
	 * Get full table name with prefix.
	 */
	public static function get_table_name() {
		global $wpdb;
		return $wpdb->prefix . self::TABLE_NAME;
	}

	/**
	 * Create or update custom database table using dbDelta.
	 */
	public static function check_table_schema() {
		$installed_ver = get_option( 'orange_leads_db_version', '' );
		if ( $installed_ver === self::DB_VERSION ) {
			return;
		}

		global $wpdb;
		$table_name = self::get_table_name();
		$charset_collate = $wpdb->get_charset_collate();

		$sql = "CREATE TABLE $table_name (
			id bigint(20) unsigned NOT NULL AUTO_INCREMENT,
			name varchar(255) NOT NULL,
			email varchar(255) NOT NULL,
			phone varchar(100) DEFAULT '' NOT NULL,
			company varchar(255) DEFAULT '' NOT NULL,
			service_origin varchar(255) DEFAULT '' NOT NULL,
			page_url text DEFAULT NULL,
			message text DEFAULT NULL,
			extra_data longtext DEFAULT NULL,
			ip_address varchar(100) DEFAULT '' NOT NULL,
			status varchar(50) DEFAULT 'new' NOT NULL,
			created_at datetime DEFAULT CURRENT_TIMESTAMP NOT NULL,
			PRIMARY KEY  (id),
			KEY email (email),
			KEY created_at (created_at)
		) $charset_collate;";

		require_once ABSPATH . 'wp-admin/includes/upgrade.php';
		dbDelta( $sql );

		update_option( 'orange_leads_db_version', self::DB_VERSION );
	}

	/**
	 * Save a new lead submission into the database.
	 *
	 * @param array $data Form submission data.
	 * @return int|false Insert ID or false on failure.
	 */
	public static function save_lead( $data ) {
		global $wpdb;
		self::check_table_schema();

		$table_name = self::get_table_name();

		// REMOTE_ADDR es la única IP que el cliente no puede falsificar (la
		// pone el servidor web, no un header). HTTP_CLIENT_IP y
		// HTTP_X_FORWARDED_FOR son controlados 100% por quien hace el
		// request salvo que haya un proxy de confianza reescribiéndolos —
		// no es el caso de este sitio hoy.
		$ip_address = ! empty( $_SERVER['REMOTE_ADDR'] ) ? sanitize_text_field( wp_unslash( $_SERVER['REMOTE_ADDR'] ) ) : '';

		$insert_data = array(
			'name'           => ! empty( $data['name'] ) ? sanitize_text_field( $data['name'] ) : 'Sin nombre',
			'email'          => ! empty( $data['email'] ) ? sanitize_email( $data['email'] ) : '',
			'phone'          => ! empty( $data['phone'] ) ? sanitize_text_field( $data['phone'] ) : '',
			'company'        => ! empty( $data['company'] ) ? sanitize_text_field( $data['company'] ) : '',
			'service_origin' => ! empty( $data['service_origin'] ) ? sanitize_text_field( $data['service_origin'] ) : 'Contacto General',
			'page_url'       => ! empty( $data['page_url'] ) ? esc_url_raw( $data['page_url'] ) : '',
			'message'        => ! empty( $data['message'] ) ? sanitize_textarea_field( $data['message'] ) : '',
			'extra_data'     => ! empty( $data['extra_data'] ) ? ( is_array( $data['extra_data'] ) ? wp_json_encode( $data['extra_data'] ) : $data['extra_data'] ) : null,
			'ip_address'     => $ip_address,
			'status'         => 'new',
			'created_at'     => current_time( 'mysql' ),
		);

		$format = array( '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s' );

		$result = $wpdb->insert( $table_name, $insert_data, $format );

		if ( $result ) {
			return $wpdb->insert_id;
		}

		return false;
	}

	/**
	 * Register Admin Menu for viewing leads.
	 */
	public static function register_admin_menu() {
		global $wpdb;
		$table_name = self::get_table_name();
		
		// Count unread / new leads
		$new_count = 0;
		if ( $wpdb->get_var( "SHOW TABLES LIKE '$table_name'" ) === $table_name ) {
			$new_count = (int) $wpdb->get_var( "SELECT COUNT(*) FROM $table_name WHERE status = 'new'" );
		}

		$menu_title = 'Leads Web';
		if ( $new_count > 0 ) {
			$menu_title .= sprintf( ' <span class="update-plugins count-%1$d"><span class="plugin-count">%1$d</span></span>', $new_count );
		}

		add_menu_page(
			'Leads y Contactos Web',
			$menu_title,
			'manage_options',
			'orange-leads',
			array( __CLASS__, 'render_admin_page' ),
			'dashicons-email-alt2',
			26
		);
	}

	/**
	 * Render Leads Admin Dashboard.
	 */
	public static function render_admin_page() {
		if ( ! current_user_can( 'manage_options' ) ) {
			wp_die( 'Acceso no autorizado.' );
		}

		global $wpdb;
		$table_name = self::get_table_name();
		self::check_table_schema();

		// Handle search query & pagination
		$search = isset( $_GET['s'] ) ? sanitize_text_field( wp_unslash( $_GET['s'] ) ) : '';
		$page   = isset( $_GET['paged'] ) ? max( 1, intval( $_GET['paged'] ) ) : 1;
		$limit  = 25;
		$offset = ( $page - 1 ) * $limit;

		$where = 'WHERE 1=1';
		if ( ! empty( $search ) ) {
			$like = '%' . $wpdb->esc_like( $search ) . '%';
			$where .= $wpdb->prepare( " AND (name LIKE %s OR email LIKE %s OR phone LIKE %s OR company LIKE %s OR service_origin LIKE %s OR message LIKE %s)", $like, $like, $like, $like, $like, $like );
		}

		$total_items = (int) $wpdb->get_var( "SELECT COUNT(*) FROM $table_name $where" );
		$total_pages = ceil( $total_items / $limit );

		$leads = $wpdb->get_results( "SELECT * FROM $table_name $where ORDER BY created_at DESC LIMIT $limit OFFSET $offset" );
		?>
		<div class="wrap">
			<h1 class="wp-heading-inline">Leads y Solicitudes de Contacto</h1>
			
			<a href="<?php echo esc_url( admin_url( 'admin-post.php?action=export_orange_leads_csv&_wpnonce=' . wp_create_nonce( 'orange_leads_export' ) ) ); ?>" class="page-title-action" style="background:#70B5E3;color:#0b0b0b;font-weight:700;border:none;">
				📥 Exportar a Excel (CSV)
			</a>

			<hr class="wp-header-end">

			<?php if ( isset( $_GET['message'] ) && 'deleted' === $_GET['message'] ) : ?>
				<div class="notice notice-success is-dismissible"><p>Lead eliminado con éxito.</p></div>
			<?php elseif ( isset( $_GET['message'] ) && 'status_updated' === $_GET['message'] ) : ?>
				<div class="notice notice-success is-dismissible"><p>Estado actualizado correctamente.</p></div>
			<?php endif; ?>

			<!-- Search box -->
			<form method="get" style="margin:16px 0;">
				<input type="hidden" name="page" value="orange-leads">
				<p class="search-box">
					<label class="screen-reader-text" for="lead-search-input">Buscar leads:</label>
					<input type="search" id="lead-search-input" name="s" value="<?php echo esc_attr( $search ); ?>" placeholder="Buscar por nombre, email, empresa...">
					<input type="submit" id="search-submit" class="button" value="Buscar Leads">
				</p>
			</form>

			<div class="tablenav top" style="clear:both;">
				<div class="alignleft actions bulkactions">
					<span class="displaying-num"><?php echo esc_html( number_format_i18n( $total_items ) ); ?> solicitudes en total</span>
				</div>
				<?php if ( $total_pages > 1 ) : ?>
					<div class="tablenav-pages">
						<span class="pagination-links">
							<?php for ( $i = 1; $i <= $total_pages; $i++ ) : ?>
								<a class="button <?php echo $i === $page ? 'button-primary' : ''; ?>" href="<?php echo esc_url( add_query_arg( array( 'paged' => $i, 's' => $search ), admin_url( 'admin.php?page=orange-leads' ) ) ); ?>">
									<?php echo esc_html( $i ); ?>
								</a>
							<?php endfor; ?>
						</span>
					</div>
				<?php endif; ?>
			</div>

			<table class="wp-list-table widefat fixed striped table-view-list posts" style="margin-top:10px;">
				<thead>
					<tr>
						<th style="width:130px;">Fecha</th>
						<th style="width:160px;">Nombre</th>
						<th style="width:180px;">Contacto</th>
						<th style="width:140px;">Empresa</th>
						<th style="width:180px;">Servicio / Origen</th>
						<th>Mensaje / Requerimientos</th>
						<th style="width:110px;">Estado</th>
						<th style="width:90px;">Acciones</th>
					</tr>
				</thead>
				<tbody>
					<?php if ( empty( $leads ) ) : ?>
						<tr>
							<td colspan="8" style="text-align:center;padding:24px;">No se encontraron registros de leads.</td>
						</tr>
					<?php else : ?>
						<?php foreach ( $leads as $lead ) : 
							$extra = ! empty( $lead->extra_data ) ? json_decode( $lead->extra_data, true ) : array();
						?>
							<tr style="<?php echo 'new' === $lead->status ? 'background-color:#f0f7fd;font-weight:500;' : ''; ?>">
								<td>
									<strong><?php echo esc_html( date_i18n( 'd/m/Y H:i', strtotime( $lead->created_at ) ) ); ?></strong>
								</td>
								<td>
									<strong><?php echo esc_html( $lead->name ); ?></strong>
								</td>
								<td>
									<div><a href="mailto:<?php echo esc_attr( $lead->email ); ?>" style="text-decoration:none;font-weight:600;"><?php echo esc_html( $lead->email ); ?></a></div>
									<?php if ( ! empty( $lead->phone ) ) : ?>
										<div style="font-size:12px;color:#555;margin-top:2px;">
											📞 <a href="https://wa.me/<?php echo esc_attr( preg_replace( '/[^0-9]/', '', $lead->phone ) ); ?>" target="_blank" style="color:#008a00;text-decoration:none;"><?php echo esc_html( $lead->phone ); ?></a>
										</div>
									<?php endif; ?>
								</td>
								<td>
									<?php echo esc_html( $lead->company ?: '—' ); ?>
								</td>
								<td>
									<span class="badge" style="display:inline-block;padding:3px 8px;border-radius:4px;font-size:11.5px;background:#e2e8f0;color:#1e293b;font-weight:700;">
										<?php echo esc_html( $lead->service_origin ); ?>
									</span>
									<?php if ( ! empty( $lead->page_url ) ) : ?>
										<div style="font-size:11px;color:#64748b;margin-top:4px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" title="<?php echo esc_attr( $lead->page_url ); ?>">
											<a href="<?php echo esc_url( $lead->page_url ); ?>" target="_blank" style="color:#64748b;">🔗 Ver página</a>
										</div>
									<?php endif; ?>
								</td>
								<td>
									<div style="max-height:100px;overflow-y:auto;line-height:1.45;font-size:12.5px;">
										<?php echo nl2br( esc_html( $lead->message ) ); ?>
									</div>
									<?php if ( ! empty( $extra ) ) : ?>
										<div style="margin-top:6px;padding:6px 8px;background:#ffffff;border:1px solid #cbd5e1;border-radius:4px;font-size:11.5px;">
											<strong>Detalles adicionales:</strong>
											<ul style="margin:2px 0 0 16px;list-style:disc;">
												<?php foreach ( $extra as $k => $v ) : ?>
													<?php if ( ! empty( $v ) ) : ?>
														<li><strong><?php echo esc_html( ucfirst( str_replace( '_', ' ', $k ) ) ); ?>:</strong> <?php echo esc_html( $v ); ?></li>
													<?php endif; ?>
												<?php endforeach; ?>
											</ul>
										</div>
									<?php endif; ?>
								</td>
								<td>
									<form method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>">
										<?php wp_nonce_field( 'orange_update_lead_status_' . $lead->id ); ?>
										<input type="hidden" name="action" value="update_orange_lead_status">
										<input type="hidden" name="lead_id" value="<?php echo esc_attr( $lead->id ); ?>">
										<select name="status" onchange="this.form.submit()" style="font-size:11.5px;padding:2px 6px;">
											<option value="new" <?php selected( $lead->status, 'new' ); ?>>Nuevo</option>
											<option value="contacted" <?php selected( $lead->status, 'contacted' ); ?>>Contactado</option>
											<option value="in_progress" <?php selected( $lead->status, 'in_progress' ); ?>>En Proceso</option>
											<option value="closed" <?php selected( $lead->status, 'closed' ); ?>>Cerrado</option>
										</select>
									</form>
								</td>
								<td>
									<a href="<?php echo esc_url( wp_nonce_url( admin_url( 'admin-post.php?action=delete_orange_lead&lead_id=' . $lead->id ), 'delete_orange_lead_' . $lead->id ) ); ?>" onclick="return confirm('¿Seguro que deseas eliminar este lead permanentemente?');" style="color:#b91c1c;text-decoration:none;font-size:12px;font-weight:600;">
										Eliminar
									</a>
								</td>
							</tr>
						<?php endforeach; ?>
					<?php endif; ?>
				</tbody>
			</table>
		</div>
		<?php
	}

	/**
	 * Action to update lead status.
	 */
	public static function update_status_action() {
		if ( ! current_user_can( 'manage_options' ) ) {
			wp_die( 'Acceso no autorizado.' );
		}

		$lead_id = isset( $_POST['lead_id'] ) ? intval( $_POST['lead_id'] ) : 0;
		check_admin_referer( 'orange_update_lead_status_' . $lead_id );

		$status = isset( $_POST['status'] ) ? sanitize_text_field( wp_unslash( $_POST['status'] ) ) : 'new';

		global $wpdb;
		$table_name = self::get_table_name();
		$wpdb->update( $table_name, array( 'status' => $status ), array( 'id' => $lead_id ), array( '%s' ), array( '%d' ) );

		wp_safe_redirect( admin_url( 'admin.php?page=orange-leads&message=status_updated' ) );
		exit;
	}

	/**
	 * Action to delete lead.
	 */
	public static function delete_lead_action() {
		if ( ! current_user_can( 'manage_options' ) ) {
			wp_die( 'Acceso no autorizado.' );
		}

		$lead_id = isset( $_GET['lead_id'] ) ? intval( $_GET['lead_id'] ) : 0;
		check_admin_referer( 'delete_orange_lead_' . $lead_id );

		global $wpdb;
		$table_name = self::get_table_name();
		$wpdb->delete( $table_name, array( 'id' => $lead_id ), array( '%d' ) );

		wp_safe_redirect( admin_url( 'admin.php?page=orange-leads&message=deleted' ) );
		exit;
	}

	/**
	 * Export all leads to CSV (UTF-8 BOM for Excel).
	 */
	public static function export_leads_csv() {
		if ( ! current_user_can( 'manage_options' ) ) {
			wp_die( 'Acceso no autorizado.' );
		}

		check_admin_referer( 'orange_leads_export' );

		global $wpdb;
		$table_name = self::get_table_name();
		$leads = $wpdb->get_results( "SELECT * FROM $table_name ORDER BY created_at DESC" );

		$filename = 'leads_orange_latam_' . date( 'Y-m-d_H-i' ) . '.csv';

		header( 'Content-Type: text/csv; charset=UTF-8' );
		header( 'Content-Disposition: attachment; filename="' . $filename . '"' );
		header( 'Pragma: no-cache' );
		header( 'Expires: 0' );

		$output = fopen( 'php://output', 'w' );
		// UTF-8 BOM for Microsoft Excel
		fprintf( $output, chr( 0xEF ) . chr( 0xBB ) . chr( 0xBF ) );

		fputcsv( $output, array( 'ID', 'Fecha', 'Nombre', 'Email', 'Teléfono', 'Empresa', 'Servicio / Origen', 'URL Página', 'Mensaje', 'Detalles Extra', 'Estado' ) );

		if ( ! empty( $leads ) ) {
			foreach ( $leads as $l ) {
				fputcsv( $output, array(
					$l->id,
					$l->created_at,
					self::csv_safe( $l->name ),
					self::csv_safe( $l->email ),
					self::csv_safe( $l->phone ),
					self::csv_safe( $l->company ),
					self::csv_safe( $l->service_origin ),
					self::csv_safe( $l->page_url ),
					self::csv_safe( $l->message ),
					self::csv_safe( $l->extra_data ),
					$l->status,
				) );
			}
		}

		fclose( $output );
		exit;
	}
}

Orange_Leads_Manager::init();
