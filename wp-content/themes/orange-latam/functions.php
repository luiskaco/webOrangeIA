<?php
/**
 * Orange Latam Theme functions and definitions
 *
 * @package Orange_Latam
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// ==========================================
// 1. CONSTANTS
// ==========================================
define( 'ORANGE_THEME_VERSION', '1.1.2' );
define( 'ORANGE_THEME_DIR', get_template_directory() );
define( 'ORANGE_THEME_URI', get_template_directory_uri() );

// ==========================================
// 2. THEME SUPPORT & SETUP
// ==========================================
function orange_latam_theme_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// Register Navigation Menus
	register_nav_menus( array(
		'primary'      => esc_html__( 'Primary Menu', 'orange-latam' ),
		'blog'         => esc_html__( 'Blog Menu', 'orange-latam' ),
		'influencers'  => esc_html__( 'Marketing de Influencers Menu', 'orange-latam' ),
		'podcast'      => esc_html__( 'Podcast Menu', 'orange-latam' ),
		'pr'               => esc_html__( 'PR & Reputación Menu', 'orange-latam' ),
		'asuntos_publicos' => esc_html__( 'Asuntos Públicos Menu', 'orange-latam' ),
		'branding'         => esc_html__( 'Branding & Creatividad Menu', 'orange-latam' ),
		'eventos'          => esc_html__( 'Eventos y Activaciones Menu', 'orange-latam' ),
		'gestion_acceso'   => esc_html__( 'Gestión de Acceso Menu', 'orange-latam' ),
		'presencia_digital' => esc_html__( 'Presencia Digital Menu', 'orange-latam' ),
	) );

	// Switch default core markup for search form, comment form, and comments to output valid HTML5.
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
		'style',
		'script',
	) );
}
add_action( 'after_setup_theme', 'orange_latam_theme_setup' );

// ==========================================
// 2b. DISABLE COMMENTS SITE-WIDE
// ==========================================
// Ningún template del theme renderiza comment_form()/comments_template(), pero
// WordPress igual acepta submits directos a wp-comments-post.php si el post
// tiene comment_status=open. Estos filtros lo cierran a nivel código, así no
// depende de la config de la base de datos (que se puede revertir sola con
// un post nuevo si default_comment_status vuelve a 'open').
add_filter( 'comments_open', '__return_false', 20, 2 );
add_filter( 'pings_open', '__return_false', 20, 2 );
add_filter( 'comments_array', '__return_empty_array', 10, 2 );

function orange_latam_remove_comments_support() {
	remove_post_type_support( 'post', 'comments' );
	remove_post_type_support( 'page', 'comments' );
	remove_post_type_support( 'post', 'trackbacks' );
	remove_post_type_support( 'page', 'trackbacks' );
}
add_action( 'init', 'orange_latam_remove_comments_support', 100 );

function orange_latam_remove_comments_admin_menu() {
	remove_menu_page( 'edit-comments.php' );
}
add_action( 'admin_menu', 'orange_latam_remove_comments_admin_menu' );

function orange_latam_remove_comments_admin_bar() {
	if ( is_admin_bar_showing() ) {
		global $wp_admin_bar;
		$wp_admin_bar->remove_menu( 'comments' );
	}
}
add_action( 'wp_before_admin_bar_render', 'orange_latam_remove_comments_admin_bar' );

// Redirige cualquier intento directo de POST a wp-comments-post.php.
function orange_latam_block_comment_submission() {
	wp_die( __( 'Los comentarios están deshabilitados en este sitio.', 'orange-latam' ), '', array( 'response' => 403 ) );
}
add_action( 'pre_comment_on_post', 'orange_latam_block_comment_submission' );

// ==========================================
// 2c. SECURITY HEADERS
// ==========================================
// CSP con 'unsafe-inline' en script-src/style-src: el theme usa scripts y
// estilos inline extensivamente (animaciones, modales) sin sistema de nonces.
// No es una CSP estricta anti-XSS, pero sí bloquea la carga de recursos desde
// dominios no autorizados — que es la superficie de ataque real hoy (CDN
// comprometido, script inyectado por un plugin vulnerable, etc.).
function orange_latam_security_headers() {
	if ( is_admin() ) {
		return;
	}

	$csp = "default-src 'self'; "
		. "script-src 'self' 'unsafe-inline' https://cdn.jsdelivr.net https://www.googletagmanager.com https://www.google-analytics.com; "
		. "style-src 'self' 'unsafe-inline' https://fonts.googleapis.com; "
		. "font-src 'self' https://fonts.gstatic.com data:; "
		. "img-src 'self' data: https:; "
		. "media-src 'self'; "
		. "frame-src 'self' https://www.youtube.com https://www.youtube-nocookie.com; "
		. "connect-src 'self' https://www.google-analytics.com https://*.google-analytics.com https://analytics.google.com https://www.googletagmanager.com https://region1.google-analytics.com; "
		. "worker-src 'self' blob:; "
		. "object-src 'none'; "
		. "base-uri 'self'; "
		. "form-action 'self'; "
		. "frame-ancestors 'none';";

	header( 'Content-Security-Policy: ' . $csp );
	header( 'X-Frame-Options: DENY' );
	header( 'X-Content-Type-Options: nosniff' );
	header( 'Referrer-Policy: strict-origin-when-cross-origin' );
	header( 'Permissions-Policy: camera=(), microphone=(), geolocation=()' );

	if ( is_ssl() ) {
		header( 'Strict-Transport-Security: max-age=31536000; includeSubDomains' );
	}
}
add_action( 'send_headers', 'orange_latam_security_headers' );

// Deshabilita XML-RPC (no se usa Jetpack ni la app móvil de WordPress) —
// filtro nativo de WP como respaldo por si el .htaccess no aplica (ej. nginx
// en producción, que ignora .htaccess).
add_filter( 'xmlrpc_enabled', '__return_false' );

// ==========================================
// 3. ENQUEUE ASSETS (CSS & JS)
// ==========================================

/**
 * Enqueue a theme stylesheet cache-busted with its own file modification time.
 */
function orange_latam_enqueue_versioned_style( $handle, $relative_path, $deps = array() ) {
	$path = ORANGE_THEME_DIR . $relative_path;
	wp_enqueue_style( $handle, ORANGE_THEME_URI . $relative_path, $deps, file_exists( $path ) ? filemtime( $path ) : ORANGE_THEME_VERSION );
}

function orange_latam_enqueue_assets() {
	// Enqueue Google Fonts (Web fallbacks for PP Editorial New and PP Neue Montreal)
	wp_enqueue_style( 'orange-latam-fonts', 'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,600;0,700;1,600;1,700&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Playfair+Display:ital,wght@0,700;0,800;0,900;1,400;1,700&family=Inter:wght@400;500;600;700;800;900&family=Playball&family=Poppins:wght@400;500;600;700;800;900&display=swap', array(), null );

	// Enqueue main stylesheet (style.css metadata)
	wp_enqueue_style( 'orange-latam-style-meta', get_stylesheet_uri(), array(), ORANGE_THEME_VERSION );

	// Enqueue global base styles (tokens, reset, header/nav, footer) — loaded on every page
	orange_latam_enqueue_versioned_style( 'orange-latam-base-style', '/assets/css/base.css' );

	// Enqueue page-specific stylesheet (parent/child CSS: base.css + one child per page)
	$page_template = basename( (string) get_page_template() );
	if ( is_front_page() ) {
		orange_latam_enqueue_versioned_style( 'orange-latam-home-style', '/assets/css/pages/home.css', array( 'orange-latam-base-style' ) );
	} elseif ( 'page-podcast.php' === $page_template ) {
		orange_latam_enqueue_versioned_style( 'orange-latam-podcast-style', '/assets/css/pages/podcast.css', array( 'orange-latam-base-style' ) );
	} elseif ( 'page-marketing-de-influencers.php' === $page_template ) {
		orange_latam_enqueue_versioned_style( 'orange-latam-influencers-style', '/assets/css/pages/marketing-influencers.css', array( 'orange-latam-base-style' ) );
	} elseif ( 'page-marketing-digital.php' === $page_template ) {
		orange_latam_enqueue_versioned_style( 'orange-latam-marketing-digital-style', '/assets/css/pages/marketing-digital.css', array( 'orange-latam-base-style' ) );
	} elseif ( 'page-pr-gestion-reputacion.php' === $page_template ) {
		orange_latam_enqueue_versioned_style( 'orange-latam-pr-style', '/assets/css/pages/pr-gestion-reputacion.css', array( 'orange-latam-base-style' ) );
	} elseif ( 'page-asuntos-publicos.php' === $page_template ) {
		orange_latam_enqueue_versioned_style( 'orange-latam-asuntos-publicos-style', '/assets/css/pages/asuntos-publicos.css', array( 'orange-latam-base-style' ) );
	} elseif ( 'page-branding-creatividad.php' === $page_template ) {
		orange_latam_enqueue_versioned_style( 'orange-latam-branding-creatividad-style', '/assets/css/pages/branding-creatividad.css', array( 'orange-latam-base-style' ) );
	} elseif ( 'page-eventos-activaciones.php' === $page_template ) {
		orange_latam_enqueue_versioned_style( 'orange-latam-eventos-activaciones-style', '/assets/css/pages/eventos-activaciones.css', array( 'orange-latam-base-style' ) );
	} elseif ( 'page-gestion-de-acceso.php' === $page_template ) {
		orange_latam_enqueue_versioned_style( 'orange-latam-gestion-de-acceso-style', '/assets/css/pages/gestion-de-acceso.css', array( 'orange-latam-base-style' ) );
	} elseif ( 'page-presencia-digital.php' === $page_template ) {
		orange_latam_enqueue_versioned_style( 'orange-latam-presencia-digital-style', '/assets/css/pages/presencia-digital.css', array( 'orange-latam-base-style' ) );
	} else {
		orange_latam_enqueue_versioned_style( 'orange-latam-custom-style', '/assets/css/style.css', array( 'orange-latam-base-style' ) );
	}

	// Enqueue Vanilla JS (cache-busted with file modification time)
	$main_js_path = ORANGE_THEME_DIR . '/assets/js/main.js';
	wp_enqueue_script( 'orange-latam-main-js', ORANGE_THEME_URI . '/assets/js/main.js', array(), file_exists( $main_js_path ) ? filemtime( $main_js_path ) : ORANGE_THEME_VERSION, true );

	// GSAP + ScrollTrigger + script de página — home y páginas de servicio dedicadas
	$is_front = is_front_page();
	$gsap_pages = array(
		'page-presencia-digital.php' => array(
			'handle' => 'orange-latam-presencia-digital-js',
			'path'   => '/assets/js/pages/presencia-digital.js',
		),
		'page-asuntos-publicos.php'  => array(
			'handle' => 'orange-latam-asuntos-publicos-js',
			'path'   => '/assets/js/pages/asuntos-publicos.js',
		),
	);

	if ( $is_front || isset( $gsap_pages[ $page_template ] ) ) {
		wp_enqueue_script( 'gsap', 'https://cdn.jsdelivr.net/npm/gsap@3.15.0/dist/gsap.min.js', array(), '3.15.0', true );
		wp_enqueue_script( 'gsap-scrolltrigger', 'https://cdn.jsdelivr.net/npm/gsap@3.15.0/dist/ScrollTrigger.min.js', array( 'gsap' ), '3.15.0', true );

		if ( $is_front ) {
			$home_gsap_path = ORANGE_THEME_DIR . '/assets/js/pages/home-gsap.js';
			wp_enqueue_script(
				'orange-latam-home-gsap-js',
				ORANGE_THEME_URI . '/assets/js/pages/home-gsap.js',
				array( 'gsap-scrolltrigger' ),
				file_exists( $home_gsap_path ) ? filemtime( $home_gsap_path ) : ORANGE_THEME_VERSION,
				true
			);
		} elseif ( isset( $gsap_pages[ $page_template ] ) ) {
			$gsap_page      = $gsap_pages[ $page_template ];
			$gsap_page_path = ORANGE_THEME_DIR . $gsap_page['path'];
			wp_enqueue_script(
				$gsap_page['handle'],
				ORANGE_THEME_URI . $gsap_page['path'],
				array( 'gsap-scrolltrigger' ),
				file_exists( $gsap_page_path ) ? filemtime( $gsap_page_path ) : ORANGE_THEME_VERSION,
				true
			);
		}
	}

	// Pass "Voz de Expertos" real post data to the carousel script (front page only)
	if ( is_front_page() ) {
		wp_localize_script( 'orange-latam-main-js', 'orangeLatamExperts', orange_latam_get_expert_posts() );
	}

	// Pass AJAX URL to main.js for service contact form
	wp_localize_script( 'orange-latam-main-js', 'orange_ajax', array(
		'ajax_url' => admin_url( 'admin-ajax.php' ),
	) );
}
add_action( 'wp_enqueue_scripts', 'orange_latam_enqueue_assets' );

// ==========================================
// 3b. "VOZ DE EXPERTOS" POSTS HELPER
// ==========================================
function orange_latam_get_expert_posts( $count = 6 ) {
	$query = new WP_Query( array(
		'post_type'      => 'post',
		'post_status'    => 'publish',
		'posts_per_page' => $count,
		'no_found_rows'  => true,
		'tag'            => 'voz-de-expertos',
	) );

	// Fallback to recent posts if no tag exists
	if ( empty( $query->posts ) ) {
		$query = new WP_Query( array(
			'post_type'      => 'post',
			'post_status'    => 'publish',
			'posts_per_page' => $count,
			'no_found_rows'  => true,
		) );
	}

	$posts = array();
	foreach ( $query->posts as $post ) {
		$thumb = get_the_post_thumbnail_url( $post, 'large' );
		if ( ! $thumb ) {
			$thumb = get_the_post_thumbnail_url( $post, 'medium_large' );
		}
		$author_name = get_the_author_meta( 'display_name', $post->post_author );
		if ( empty( $author_name ) || 'admin' === strtolower( $author_name ) ) {
			$author_name = 'Manuel Ayllón Gamarra';
		}

		$posts[] = array(
			'id'        => $post->ID,
			'title'     => get_the_title( $post ),
			'permalink' => get_permalink( $post ),
			'author'    => $author_name,
			'date'      => get_the_date( '', $post ),
			'thumbnail' => $thumb,
		);
	}

	return $posts;
}

// ==========================================
// 3c. AJAX SERVICE CONTACT FORM HANDLER
// ==========================================
add_action( 'wp_ajax_send_service_contact', 'orange_send_service_contact_handler' );
add_action( 'wp_ajax_nopriv_send_service_contact', 'orange_send_service_contact_handler' );

function orange_send_service_contact_handler() {
	// Verify Nonce
	if ( ! isset( $_POST['contact_security'] ) || ! wp_verify_nonce( wp_unslash( $_POST['contact_security'] ), 'orange_contact_nonce' ) ) {
		wp_send_json_error( array( 'message' => 'Seguridad inválida. Por favor recarga la página e intenta de nuevo.' ) );
	}

	// Honeypot: campo invisible para personas, atractivo para bots. Si llega
	// lleno, fingimos éxito para no delatar el mecanismo (el bot no reintenta).
	if ( ! empty( $_POST['contact_website'] ) ) {
		wp_send_json_success( array( 'message' => '¡Muchas gracias! Tu mensaje ha sido enviado con éxito. Te contactaremos a la brevedad.' ) );
	}

	// Envío demasiado rápido (formulario cargado y enviado en <3s) es casi
	// siempre un bot que ignora el timing humano de completar el formulario.
	$submitted_at = isset( $_POST['contact_ts'] ) ? absint( $_POST['contact_ts'] ) : 0;
	if ( $submitted_at > 0 && ( time() - $submitted_at ) < 3 ) {
		wp_send_json_error( array( 'message' => 'Por favor completa el formulario e intenta de nuevo.' ) );
	}

	// Rate limiting por IP: máximo 10 envíos por hora.
	$client_ip = isset( $_SERVER['REMOTE_ADDR'] ) ? sanitize_text_field( wp_unslash( $_SERVER['REMOTE_ADDR'] ) ) : '';
	if ( $client_ip ) {
		$rate_key   = 'orange_contact_rl_' . md5( $client_ip );
		$rate_count = (int) get_transient( $rate_key );
		if ( $rate_count >= 10 ) {
			wp_send_json_error( array( 'message' => 'Has enviado demasiadas solicitudes. Por favor intenta de nuevo en un rato, o escríbenos directo a negocios@orange-la.com' ) );
		}
		set_transient( $rate_key, $rate_count + 1, HOUR_IN_SECONDS );
	}

	$name           = isset( $_POST['contact_name'] ) ? sanitize_text_field( $_POST['contact_name'] ) : ( isset( $_POST['name'] ) ? sanitize_text_field( $_POST['name'] . ( ! empty( $_POST['lastname'] ) ? ' ' . $_POST['lastname'] : '' ) ) : '' );
	$email          = isset( $_POST['contact_email'] ) ? sanitize_email( $_POST['contact_email'] ) : ( isset( $_POST['email'] ) ? sanitize_email( $_POST['email'] ) : '' );
	$phone          = isset( $_POST['contact_phone'] ) ? sanitize_text_field( $_POST['contact_phone'] ) : ( isset( $_POST['phone'] ) ? sanitize_text_field( $_POST['phone'] ) : '' );
	$company        = isset( $_POST['contact_company'] ) ? sanitize_text_field( $_POST['contact_company'] ) : ( isset( $_POST['company'] ) ? sanitize_text_field( $_POST['company'] ) : '' );
	$message        = isset( $_POST['contact_message'] ) ? sanitize_textarea_field( $_POST['contact_message'] ) : ( isset( $_POST['message'] ) ? sanitize_textarea_field( $_POST['message'] ) : '' );
	$service_origin = isset( $_POST['service_origin'] ) ? sanitize_text_field( $_POST['service_origin'] ) : 'Contacto General';
	$page_url       = isset( $_POST['page_url'] ) ? esc_url_raw( $_POST['page_url'] ) : '';

	// Podcast specific fields
	$podcast_type   = isset( $_POST['podcast_type'] ) ? sanitize_text_field( $_POST['podcast_type'] ) : '';
	$scenario_type  = isset( $_POST['scenario_type'] ) ? sanitize_text_field( $_POST['scenario_type'] ) : '';
	$session_date   = isset( $_POST['session_date'] ) ? sanitize_text_field( $_POST['session_date'] ) : '';
	$session_time   = isset( $_POST['session_time'] ) ? sanitize_text_field( $_POST['session_time'] ) : '';

	if ( empty( $name ) || empty( $email ) ) {
		wp_send_json_error( array( 'message' => 'Por favor completa todos los campos obligatorios.' ) );
	}

	if ( ! is_email( $email ) ) {
		wp_send_json_error( array( 'message' => 'El correo electrónico ingresado no es válido.' ) );
	}

	// Lista de destinatarios oficiales solicitados
	$to = array(
		'gorellana@orange-la.com',
		'mayllon@orange-la.com',
		'negocios@orange-la.com',
	);
	$admin_email = get_option( 'admin_email' );
	if ( $admin_email && is_email( $admin_email ) ) {
		$to[] = $admin_email;
	}
	$to = array_values( array_unique( $to ) );

	$subject = sprintf( '[Cotización Web] %s — %s', $service_origin, $name );

	$rows = array();
	if ( ! empty( $page_url ) ) {
		$rows['Página de origen'] = $page_url;
	}
	$rows['Nombre']  = $name;
	$rows['Correo']  = $email;
	if ( ! empty( $phone ) ) {
		$rows['Teléfono'] = $phone;
	}
	if ( ! empty( $company ) ) {
		$rows['Empresa'] = $company;
	}
	if ( ! empty( $podcast_type ) ) {
		$rows['Tipo de Podcast'] = $podcast_type;
	}
	if ( ! empty( $scenario_type ) ) {
		$rows['Escenario'] = $scenario_type;
	}
	if ( ! empty( $session_date ) ) {
		$rows['Fecha de Sesión'] = $session_date;
	}
	if ( ! empty( $session_time ) ) {
		$rows['Hora de Sesión'] = $session_time;
	}

	$rows_html = '';
	foreach ( $rows as $label => $value ) {
		$rows_html .= '<tr>'
			. '<td style="padding:10px 0;border-bottom:1px solid #EDEDED;font-family:Arial,Helvetica,sans-serif;font-size:13px;color:#8A8A8A;width:150px;vertical-align:top;">' . esc_html( $label ) . '</td>'
			. '<td style="padding:10px 0;border-bottom:1px solid #EDEDED;font-family:Arial,Helvetica,sans-serif;font-size:14px;color:#14120F;vertical-align:top;">' . esc_html( $value ) . '</td>'
			. '</tr>';
	}

	$body  = '<!DOCTYPE html><html lang="es"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"></head>';
	$body .= '<body style="margin:0;padding:0;background:#F4F4F6;">';
	$body .= '<table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="background:#F4F4F6;padding:32px 16px;">';
	$body .= '<tr><td align="center">';
	$body .= '<table role="presentation" width="600" cellpadding="0" cellspacing="0" style="max-width:600px;width:100%;background:#FFFFFF;border-radius:8px;overflow:hidden;">';

	// Header
	$body .= '<tr><td style="background:#0B0B0B;padding:28px 32px;">';
	$body .= '<span style="font-family:Arial,Helvetica,sans-serif;font-size:20px;font-weight:800;color:#FFFFFF;letter-spacing:-0.02em;">Orange<span style="color:#70B5E3;">Latam</span></span>';
	$body .= '<div style="font-family:Arial,Helvetica,sans-serif;font-size:13px;color:#B5B5B5;margin-top:4px;">Nueva solicitud de contacto</div>';
	$body .= '</td></tr>';

	// Service badge
	$body .= '<tr><td style="padding:24px 32px 0;">';
	$body .= '<span style="display:inline-block;background:#EE894F;color:#FFFFFF;font-family:Arial,Helvetica,sans-serif;font-size:12px;font-weight:700;text-transform:uppercase;letter-spacing:0.03em;padding:6px 14px;border-radius:100px;">' . esc_html( $service_origin ) . '</span>';
	$body .= '</td></tr>';

	// Data table
	$body .= '<tr><td style="padding:20px 32px 4px;">';
	$body .= '<table role="presentation" width="100%" cellpadding="0" cellspacing="0">' . $rows_html . '</table>';
	$body .= '</td></tr>';

	// Message
	$body .= '<tr><td style="padding:20px 32px 28px;">';
	$body .= '<div style="font-family:Arial,Helvetica,sans-serif;font-size:13px;color:#8A8A8A;margin-bottom:8px;">Mensaje</div>';
	$body .= '<div style="background:#F4F4F6;border-radius:6px;padding:16px;font-family:Arial,Helvetica,sans-serif;font-size:14px;color:#14120F;line-height:1.6;white-space:pre-wrap;">' . nl2br( esc_html( ! empty( $message ) ? $message : 'Sin mensaje adicional' ) ) . '</div>';
	$body .= '</td></tr>';

	// Footer
	$body .= '<tr><td style="background:#F4F4F6;padding:18px 32px;border-top:1px solid #EDEDED;">';
	$body .= '<span style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#8A8A8A;">Enviado automáticamente desde el formulario de contacto de <a href="https://orange-la.com" style="color:#70B5E3;text-decoration:none;">orange-la.com</a></span>';
	$body .= '</td></tr>';

	$body .= '</table></td></tr></table>';
	$body .= '</body></html>';

	$headers = array(
		'Content-Type: text/html; charset=UTF-8',
		'From: Orange Latam Web <no-reply@orange-la.com>',
		'Reply-To: ' . $name . ' <' . $email . '>',
	);

	// 1. Almacenar lead en Base de Datos
	$extra_payload = array();
	if ( ! empty( $podcast_type ) )  $extra_payload['podcast_type'] = $podcast_type;
	if ( ! empty( $scenario_type ) ) $extra_payload['scenario_type'] = $scenario_type;
	if ( ! empty( $session_date ) )  $extra_payload['session_date'] = $session_date;
	if ( ! empty( $session_time ) )  $extra_payload['session_time'] = $session_time;

	if ( class_exists( 'Orange_Leads_Manager' ) ) {
		Orange_Leads_Manager::save_lead( array(
			'name'           => $name,
			'email'          => $email,
			'phone'          => $phone,
			'company'        => $company,
			'service_origin' => $service_origin,
			'page_url'       => $page_url,
			'message'        => $message,
			'extra_data'     => $extra_payload,
		) );
	}

	// 2. Enviar notificación por correo a la lista oficial
	$sent = wp_mail( $to, $subject, $body, $headers );

	if ( $sent ) {
		wp_send_json_success( array( 'message' => '¡Muchas gracias! Tu mensaje ha sido enviado con éxito. Te contactaremos a la brevedad.' ) );
	} else {
		wp_send_json_error( array( 'message' => 'Ocurrió un inconveniente al enviar el correo. Por favor escríbenos a negocios@orange-la.com' ) );
	}
}

// ==========================================
// 4. AUTO-INITIALIZATION SETUP & LEADS DB
// ==========================================
require_once ORANGE_THEME_DIR . '/inc/class-theme-setup.php';
require_once ORANGE_THEME_DIR . '/inc/class-leads-manager.php';
require_once ORANGE_THEME_DIR . '/inc/seo.php';

// ==========================================
// TEMPORAL — DEMO INTERNA DE SEO (desactivado)
// ==========================================
// require_once ORANGE_THEME_DIR . '/inc/temp-seo-demo-modal.php';

// ==========================================
// 6. AUTOMATIC IMAGE SEO & PERFORMANCE OPTIMIZER
// ==========================================
function orange_latam_optimize_image_attributes( $attr, $attachment = null, $size = null ) {
	// Add decoding="async" for non-blocking browser rendering
	if ( ! isset( $attr['decoding'] ) ) {
		$attr['decoding'] = 'async';
	}

	// Enforce loading="lazy" unless explicitly set to eager
	if ( ! isset( $attr['loading'] ) ) {
		$attr['loading'] = 'lazy';
	}

	// Automatic SEO alt fallback if alt is empty
	if ( empty( $attr['alt'] ) && $attachment ) {
		$title = get_the_title( $attachment->ID );
		if ( ! empty( $title ) ) {
			$attr['alt'] = esc_attr( $title . ' — Orange Latam' );
		}
	}

	return $attr;
}
add_filter( 'wp_get_attachment_image_attributes', 'orange_latam_optimize_image_attributes', 10, 3 );

/**
 * Filter HTML content output to auto-inject decoding="async" and missing alt tags for inline images.
 */
function orange_latam_filter_html_image_seo( $content ) {
	if ( empty( $content ) || is_admin() ) {
		return $content;
	}

	return preg_replace_callback( '/<img\s+([^>]+)>/i', function( $matches ) {
		$img_html = $matches[0];
		
		// Inject decoding="async" if missing
		if ( false === strpos( $img_html, 'decoding=' ) ) {
			$img_html = str_replace( '<img ', '<img decoding="async" ', $img_html );
		}

		// Inject loading="lazy" if missing and not explicitly eager
		if ( false === strpos( $img_html, 'loading=' ) ) {
			$img_html = str_replace( '<img ', '<img loading="lazy" ', $img_html );
		}

		return $img_html;
	}, $content );
}
add_filter( 'the_content', 'orange_latam_filter_html_image_seo' );

