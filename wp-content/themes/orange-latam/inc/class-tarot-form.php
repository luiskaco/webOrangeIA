<?php
/**
 * Formulario "Lectura de Tarot" (/laferia/tarot) — migrado desde el sitio de
 * Empoderadas y Emprendedoras para servirse bajo este dominio.
 *
 * - Auto-crea las páginas laferia (contenedor) y laferia/tarot (formulario).
 * - CPT propio `registro_tarot` con su propio menú en el admin — deliberadamente
 *   separado de Orange_Leads_Manager: los registros de La Feria (un evento
 *   puntual) no son leads comerciales de Orange Latam, son datos de otro
 *   negocio y no deben mezclarse en el mismo dashboard.
 * - Sincroniza además con Google Sheets (Drive) vía cuenta de servicio
 *   (JWT + REST API v4, sin librerías externas).
 *
 * @package Orange_Latam
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class Orange_Tarot_Form {

	const POST_TYPE = 'registro_tarot';

	/**
	 * Initialize class hooks.
	 */
	public static function init() {
		add_action( 'init', array( __CLASS__, 'register_cpt' ) );
		add_action( 'init', array( __CLASS__, 'setup_pages' ) );
		add_action( 'template_redirect', array( __CLASS__, 'redirect_laferia_parent' ) );

		add_action( 'wp_ajax_guardar_registro_tarot', array( __CLASS__, 'handle_submission' ) );
		add_action( 'wp_ajax_nopriv_guardar_registro_tarot', array( __CLASS__, 'handle_submission' ) );

		add_filter( 'manage_' . self::POST_TYPE . '_posts_columns', array( __CLASS__, 'admin_columns' ) );
		add_action( 'manage_' . self::POST_TYPE . '_posts_custom_column', array( __CLASS__, 'render_admin_column' ), 10, 2 );
		add_action( 'add_meta_boxes', array( __CLASS__, 'add_meta_box' ) );

		add_filter( 'bulk_actions-edit-' . self::POST_TYPE, array( __CLASS__, 'register_bulk_action' ) );
		add_filter( 'handle_bulk_actions-edit-' . self::POST_TYPE, array( __CLASS__, 'handle_retry_bulk_action' ), 10, 3 );
		add_action( 'admin_notices', array( __CLASS__, 'retry_admin_notice' ) );

		add_action( 'manage_posts_extra_tablenav', array( __CLASS__, 'render_export_button' ) );
		add_action( 'wp_ajax_export_tarot_csv', array( __CLASS__, 'export_csv' ) );
	}

	/**
	 * CPT de respaldo, separado de los leads comerciales de Orange Latam.
	 */
	public static function register_cpt() {
		register_post_type( self::POST_TYPE, array(
			'labels' => array(
				'name'               => 'Registros Tarot',
				'singular_name'      => 'Registro Tarot',
				'menu_name'          => 'Registros Tarot (La Feria)',
				'all_items'          => 'Todos los Registros',
				'view_item'          => 'Ver Registro',
				'search_items'       => 'Buscar Registros',
				'not_found'          => 'No se encontraron registros',
			),
			'public'          => false,
			'show_ui'         => true,
			'show_in_menu'    => true,
			'query_var'       => false,
			'capability_type' => 'post',
			'has_archive'     => false,
			'hierarchical'    => false,
			'menu_position'   => 58,
			'menu_icon'       => 'dashicons-star-filled',
			'supports'        => array( 'title' ),
		) );
	}

	/**
	 * Crea las páginas laferia (padre, sin diseño propio) y laferia/tarot
	 * (hija, con el template page-tarot.php) si no existen todavía.
	 */
	public static function setup_pages() {
		$laferia_slug = 'laferia';
		$laferia_page = get_page_by_path( $laferia_slug );

		if ( ! isset( $laferia_page->ID ) ) {
			$laferia_id = wp_insert_post( array(
				'post_type'   => 'page',
				'post_title'  => 'La Feria',
				'post_status' => 'publish',
				'post_name'   => $laferia_slug,
			) );
		} else {
			$laferia_id = $laferia_page->ID;
		}

		if ( ! $laferia_id || is_wp_error( $laferia_id ) ) {
			return;
		}

		$tarot_page = get_page_by_path( $laferia_slug . '/tarot' );

		if ( ! isset( $tarot_page->ID ) ) {
			$tarot_id = wp_insert_post( array(
				'post_type'   => 'page',
				'post_title'  => 'Lectura de Tarot',
				'post_status' => 'publish',
				'post_parent' => $laferia_id,
				'post_name'   => 'tarot',
			) );
		} else {
			$tarot_id = $tarot_page->ID;
		}

		if ( $tarot_id && ! is_wp_error( $tarot_id ) ) {
			update_post_meta( $tarot_id, '_wp_page_template', 'page-tarot.php' );
		}
	}

	/**
	 * La página "laferia" es solo un contenedor jerárquico para que
	 * /laferia/tarot/ funcione como URL anidada; no tiene diseño propio.
	 */
	public static function redirect_laferia_parent() {
		if ( is_page( 'laferia' ) ) {
			wp_safe_redirect( home_url( '/' ), 301 );
			exit;
		}
	}

	/**
	 * Handler AJAX del formulario: valida, guarda en el CPT propio y
	 * sincroniza con Google Sheets.
	 */
	public static function handle_submission() {
		check_ajax_referer( 'orange_tarot_nonce', 'nonce' );

		// Honeypot anti-spam (campo oculto que un bot llenaría).
		if ( ! empty( $_POST['website'] ) ) {
			wp_send_json_success( array( 'message' => '¡Gracias! Te contactaremos pronto.' ) );
		}

		$nombre  = isset( $_POST['nombre'] ) ? sanitize_text_field( wp_unslash( $_POST['nombre'] ) ) : '';
		$celular = isset( $_POST['celular'] ) ? sanitize_text_field( wp_unslash( $_POST['celular'] ) ) : '';
		$correo  = isset( $_POST['correo'] ) ? sanitize_email( wp_unslash( $_POST['correo'] ) ) : '';

		if ( empty( $nombre ) || empty( $celular ) || empty( $correo ) ) {
			wp_send_json_error( array( 'message' => 'Por favor completa todos los campos.' ) );
		}

		if ( ! is_email( $correo ) ) {
			wp_send_json_error( array( 'message' => 'El correo ingresado no es válido.' ) );
		}

		$post_id = wp_insert_post( array(
			'post_title'  => $nombre,
			'post_type'   => self::POST_TYPE,
			'post_status' => 'publish',
		) );

		if ( ! $post_id || is_wp_error( $post_id ) ) {
			wp_send_json_error( array( 'message' => 'Error al procesar el formulario.' ) );
		}

		update_post_meta( $post_id, '_tarot_celular', $celular );
		update_post_meta( $post_id, '_tarot_correo', $correo );

		$sync_result = self::google_sheets_append_row( array(
			$nombre,
			$celular,
			$correo,
			current_time( 'Y-m-d H:i:s' ),
		) );

		if ( is_wp_error( $sync_result ) ) {
			update_post_meta( $post_id, '_tarot_synced_sheets', 0 );
			update_post_meta( $post_id, '_tarot_sheets_error', $sync_result->get_error_message() );
			error_log( 'Tarot -> Google Sheets: ' . $sync_result->get_error_message() );
		} else {
			update_post_meta( $post_id, '_tarot_synced_sheets', 1 );
			delete_post_meta( $post_id, '_tarot_sheets_error' );
		}

		wp_send_json_success( array( 'message' => '¡Listo! Tu registro para la lectura de tarot fue confirmado.' ) );
	}

	/**
	 * Columnas del listado de admin.
	 */
	public static function admin_columns( $columns ) {
		$columns['tarot_celular'] = 'Celular';
		$columns['tarot_correo']  = 'Correo';
		$columns['tarot_sheets']  = 'Google Sheets';
		return $columns;
	}

	public static function render_admin_column( $column, $post_id ) {
		if ( 'tarot_celular' === $column ) {
			echo esc_html( get_post_meta( $post_id, '_tarot_celular', true ) );
		}
		if ( 'tarot_correo' === $column ) {
			echo esc_html( get_post_meta( $post_id, '_tarot_correo', true ) );
		}
		if ( 'tarot_sheets' === $column ) {
			$synced = get_post_meta( $post_id, '_tarot_synced_sheets', true );
			if ( $synced ) {
				echo '<span style="color:#2a8f4a; font-weight:600;">&#10003; Sincronizado</span>';
			} else {
				$error = get_post_meta( $post_id, '_tarot_sheets_error', true );
				echo '<span style="color:#c0392b; font-weight:600;" title="' . esc_attr( $error ) . '">&#10007; Pendiente</span>';
			}
		}
	}

	/**
	 * Meta box con el detalle del registro.
	 */
	public static function add_meta_box() {
		add_meta_box( 'detalles_registro_tarot', 'Detalles del Registro', array( __CLASS__, 'render_meta_box' ), self::POST_TYPE, 'normal', 'high' );
	}

	public static function render_meta_box( $post ) {
		$cel    = get_post_meta( $post->ID, '_tarot_celular', true );
		$cor    = get_post_meta( $post->ID, '_tarot_correo', true );
		$synced = get_post_meta( $post->ID, '_tarot_synced_sheets', true );
		$error  = get_post_meta( $post->ID, '_tarot_sheets_error', true );
		?>
		<table class="form-table">
			<tr><th>Celular:</th><td><?php echo esc_html( $cel ); ?></td></tr>
			<tr><th>Correo:</th><td><?php echo esc_html( $cor ); ?></td></tr>
			<tr><th>Google Sheets:</th><td><?php echo $synced ? '&#10003; Sincronizado' : '&#10007; Pendiente' . ( $error ? ' — ' . esc_html( $error ) : '' ); ?></td></tr>
		</table>
		<?php
	}

	/**
	 * Bulk action: reintentar sincronización con Sheets para registros pendientes.
	 */
	public static function register_bulk_action( $actions ) {
		$actions['tarot_retry_sheets'] = 'Reintentar sincronización con Sheets';
		return $actions;
	}

	public static function handle_retry_bulk_action( $redirect_to, $action, $post_ids ) {
		if ( 'tarot_retry_sheets' !== $action ) {
			return $redirect_to;
		}

		$retried = 0;
		foreach ( $post_ids as $post_id ) {
			$post   = get_post( $post_id );
			$result = self::google_sheets_append_row( array(
				$post->post_title,
				get_post_meta( $post_id, '_tarot_celular', true ),
				get_post_meta( $post_id, '_tarot_correo', true ),
				get_the_date( 'Y-m-d H:i:s', $post_id ),
			) );

			if ( is_wp_error( $result ) ) {
				update_post_meta( $post_id, '_tarot_sheets_error', $result->get_error_message() );
			} else {
				update_post_meta( $post_id, '_tarot_synced_sheets', 1 );
				delete_post_meta( $post_id, '_tarot_sheets_error' );
				$retried++;
			}
		}

		return add_query_arg( 'tarot_retried', $retried, $redirect_to );
	}

	public static function retry_admin_notice() {
		if ( isset( $_GET['tarot_retried'] ) ) {
			printf( '<div class="notice notice-success is-dismissible"><p>%d registro(s) sincronizado(s) con Google Sheets.</p></div>', (int) $_GET['tarot_retried'] );
		}
	}

	/**
	 * Botón de exportación CSV en el listado de admin.
	 */
	public static function render_export_button( $which ) {
		global $typenow;
		if ( self::POST_TYPE === $typenow ) {
			$export_url = add_query_arg( array( 'action' => 'export_tarot_csv', 'noheader' => 'true' ), admin_url( 'admin-ajax.php' ) );
			echo '<a href="' . esc_url( $export_url ) . '" class="button button-primary" style="margin-left: 5px; margin-top: 1px;">Descargar CSV</a>';
		}
	}

	public static function export_csv() {
		if ( ! current_user_can( 'manage_options' ) ) {
			wp_die( 'Permiso denegado' );
		}

		header( 'Content-Type: text/csv; charset=utf-8' );
		header( 'Content-Disposition: attachment; filename=registros-tarot-' . date( 'Y-m-d' ) . '.csv' );

		$output = fopen( 'php://output', 'w' );
		fprintf( $output, chr( 0xEF ) . chr( 0xBB ) . chr( 0xBF ) );

		fputcsv( $output, array( 'Nombre y Apellidos', 'Celular', 'Correo electrónico', 'Fecha' ) );

		$query = new WP_Query( array(
			'post_type'      => self::POST_TYPE,
			'posts_per_page' => -1,
			'post_status'    => 'publish',
		) );

		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();
				$post_id = get_the_ID();
				fputcsv( $output, array(
					get_the_title(),
					get_post_meta( $post_id, '_tarot_celular', true ),
					get_post_meta( $post_id, '_tarot_correo', true ),
					get_the_date( 'Y-m-d H:i:s' ),
				) );
			}
			wp_reset_postdata();
		}
		fclose( $output );
		exit;
	}

	/**
	 * Codifica una cadena en Base64URL (formato requerido por JWT).
	 */
	private static function base64url_encode( $data ) {
		return rtrim( strtr( base64_encode( $data ), '+/', '-_' ), '=' );
	}

	/**
	 * Obtiene (y cachea en un transient) un access_token OAuth2 para la
	 * cuenta de servicio de Google, firmando un JWT con la private key
	 * configurada en wp-config.php.
	 *
	 * @return string|WP_Error
	 */
	private static function google_sheets_get_access_token() {
		if ( ! defined( 'EMPODERADAS_GOOGLE_SA_EMAIL' ) || ! defined( 'EMPODERADAS_GOOGLE_SA_PRIVATE_KEY' ) ) {
			return new WP_Error( 'tarot_sheets_no_credentials', 'Credenciales de Google Sheets no configuradas en wp-config.php.' );
		}

		$cached = get_transient( 'orange_tarot_google_access_token' );
		if ( $cached ) {
			return $cached;
		}

		$now    = time();
		$header = self::base64url_encode( wp_json_encode( array( 'alg' => 'RS256', 'typ' => 'JWT' ) ) );
		$claims = self::base64url_encode( wp_json_encode( array(
			'iss'   => EMPODERADAS_GOOGLE_SA_EMAIL,
			'scope' => 'https://www.googleapis.com/auth/spreadsheets',
			'aud'   => 'https://oauth2.googleapis.com/token',
			'iat'   => $now,
			'exp'   => $now + 3600,
		) ) );

		$unsigned_jwt = $header . '.' . $claims;
		$private_key  = str_replace( '\\n', "\n", EMPODERADAS_GOOGLE_SA_PRIVATE_KEY );
		$signature    = '';
		$signed       = openssl_sign( $unsigned_jwt, $signature, $private_key, 'sha256WithRSAEncryption' );

		if ( ! $signed ) {
			return new WP_Error( 'tarot_sheets_sign_failed', 'No se pudo firmar el JWT con la private key configurada.' );
		}

		$jwt = $unsigned_jwt . '.' . self::base64url_encode( $signature );

		$response = wp_remote_post( 'https://oauth2.googleapis.com/token', array(
			'timeout' => 15,
			'body'    => array(
				'grant_type' => 'urn:ietf:params:oauth:grant-type:jwt-bearer',
				'assertion'  => $jwt,
			),
		) );

		if ( is_wp_error( $response ) ) {
			return $response;
		}

		$body = json_decode( wp_remote_retrieve_body( $response ), true );

		if ( empty( $body['access_token'] ) ) {
			$error_desc = isset( $body['error_description'] ) ? $body['error_description'] : wp_remote_retrieve_body( $response );
			return new WP_Error( 'tarot_sheets_token_failed', 'Google no otorgó access_token: ' . $error_desc );
		}

		$expires_in = isset( $body['expires_in'] ) ? (int) $body['expires_in'] : 3600;
		set_transient( 'orange_tarot_google_access_token', $body['access_token'], max( 60, $expires_in - 60 ) );

		return $body['access_token'];
	}

	/**
	 * Agrega una fila al final de la Google Sheet configurada en
	 * wp-config.php (EMPODERADAS_GOOGLE_SHEET_ID / EMPODERADAS_GOOGLE_SHEET_TAB).
	 *
	 * @param array $values Valores de la fila, en orden de columnas.
	 * @return true|WP_Error
	 */
	private static function google_sheets_append_row( $values ) {
		if ( ! defined( 'EMPODERADAS_GOOGLE_SHEET_ID' ) ) {
			return new WP_Error( 'tarot_sheets_no_sheet_id', 'EMPODERADAS_GOOGLE_SHEET_ID no está definido en wp-config.php.' );
		}

		$token = self::google_sheets_get_access_token();
		if ( is_wp_error( $token ) ) {
			return $token;
		}

		$tab   = defined( 'EMPODERADAS_GOOGLE_SHEET_TAB' ) ? EMPODERADAS_GOOGLE_SHEET_TAB : 'Hoja 1';
		$range = rawurlencode( $tab . '!A:D' );
		$url   = 'https://sheets.googleapis.com/v4/spreadsheets/' . EMPODERADAS_GOOGLE_SHEET_ID . "/values/{$range}:append?valueInputOption=USER_ENTERED&insertDataOption=INSERT_ROWS";

		$response = wp_remote_post( $url, array(
			'timeout' => 15,
			'headers' => array(
				'Authorization' => 'Bearer ' . $token,
				'Content-Type'  => 'application/json',
			),
			'body' => wp_json_encode( array( 'values' => array( array_values( $values ) ) ) ),
		) );

		if ( is_wp_error( $response ) ) {
			return $response;
		}

		$code = wp_remote_retrieve_response_code( $response );
		if ( $code < 200 || $code >= 300 ) {
			$body = json_decode( wp_remote_retrieve_body( $response ), true );
			$msg  = isset( $body['error']['message'] ) ? $body['error']['message'] : wp_remote_retrieve_body( $response );
			return new WP_Error( 'tarot_sheets_append_failed', 'Google Sheets API: ' . $msg );
		}

		return true;
	}
}

Orange_Tarot_Form::init();
