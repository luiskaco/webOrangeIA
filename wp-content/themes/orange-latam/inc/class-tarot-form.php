<?php
/**
 * Formulario "Lectura de Tarot" (/laferia/tarot) — migrado desde el sitio de
 * Empoderadas y Emprendedoras para servirse bajo este dominio.
 *
 * - Auto-crea las páginas laferia (contenedor) y laferia/tarot (formulario).
 * - El respaldo de cada envío usa Orange_Leads_Manager::save_lead() ya
 *   existente en este tema, en vez de una tabla/CPT propia — así el registro
 *   aparece directo en el dashboard "Leads Web" del admin.
 * - Sincroniza además con Google Sheets (Drive) vía cuenta de servicio
 *   (JWT + REST API v4, sin librerías externas).
 *
 * @package Orange_Latam
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class Orange_Tarot_Form {

	/**
	 * Initialize class hooks.
	 */
	public static function init() {
		add_action( 'init', array( __CLASS__, 'setup_pages' ) );
		add_action( 'wp_ajax_guardar_registro_tarot', array( __CLASS__, 'handle_submission' ) );
		add_action( 'wp_ajax_nopriv_guardar_registro_tarot', array( __CLASS__, 'handle_submission' ) );
		add_action( 'template_redirect', array( __CLASS__, 'redirect_laferia_parent' ) );
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
	 * Handler AJAX del formulario: valida, guarda en Leads Manager y
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

		$sync_result = self::google_sheets_append_row( array(
			$nombre,
			$celular,
			$correo,
			current_time( 'Y-m-d H:i:s' ),
		) );

		$sheets_status = is_wp_error( $sync_result )
			? 'Pendiente — ' . $sync_result->get_error_message()
			: 'Sincronizado';

		if ( is_wp_error( $sync_result ) ) {
			error_log( 'Tarot -> Google Sheets: ' . $sync_result->get_error_message() );
		}

		Orange_Leads_Manager::save_lead( array(
			'name'           => $nombre,
			'email'          => $correo,
			'phone'          => $celular,
			'service_origin' => 'Lectura de Tarot - La Feria',
			'page_url'       => home_url( '/laferia/tarot/' ),
			'extra_data'     => array( 'google_sheets' => $sheets_status ),
		) );

		wp_send_json_success( array( 'message' => '¡Listo! Tu registro para la lectura de tarot fue confirmado.' ) );
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
