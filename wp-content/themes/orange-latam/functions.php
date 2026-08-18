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
define( 'ORANGE_THEME_VERSION', '1.0.0' );
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

	// GSAP + ScrollTrigger + script de página — solo en páginas con animaciones de scroll
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

	if ( isset( $gsap_pages[ $page_template ] ) ) {
		wp_enqueue_script( 'gsap', 'https://cdn.jsdelivr.net/npm/gsap@3.15.0/dist/gsap.min.js', array(), '3.15.0', true );
		wp_enqueue_script( 'gsap-scrolltrigger', 'https://cdn.jsdelivr.net/npm/gsap@3.15.0/dist/ScrollTrigger.min.js', array( 'gsap' ), '3.15.0', true );

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

	$posts = array();
	foreach ( $query->posts as $post ) {
		$posts[] = array(
			'id'        => $post->ID,
			'title'     => get_the_title( $post ),
			'permalink' => get_permalink( $post ),
			'author'    => get_the_author_meta( 'display_name', $post->post_author ),
			'date'      => get_the_date( '', $post ),
			'thumbnail' => get_the_post_thumbnail_url( $post, 'medium_large' ),
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
	if ( ! isset( $_POST['contact_security'] ) || ! wp_verify_nonce( $_POST['contact_security'], 'orange_contact_nonce' ) ) {
		wp_send_json_error( array( 'message' => 'Seguridad inválida. Por favor recarga la página e intenta de nuevo.' ) );
	}

	$name           = isset( $_POST['contact_name'] ) ? sanitize_text_field( $_POST['contact_name'] ) : '';
	$email          = isset( $_POST['contact_email'] ) ? sanitize_email( $_POST['contact_email'] ) : '';
	$phone          = isset( $_POST['contact_phone'] ) ? sanitize_text_field( $_POST['contact_phone'] ) : '';
	$company        = isset( $_POST['contact_company'] ) ? sanitize_text_field( $_POST['contact_company'] ) : '';
	$message        = isset( $_POST['contact_message'] ) ? sanitize_textarea_field( $_POST['contact_message'] ) : '';
	$service_origin = isset( $_POST['service_origin'] ) ? sanitize_text_field( $_POST['service_origin'] ) : 'Contacto General';
	$page_url       = isset( $_POST['page_url'] ) ? esc_url_raw( $_POST['page_url'] ) : '';

	if ( empty( $name ) || empty( $email ) || empty( $message ) ) {
		wp_send_json_error( array( 'message' => 'Por favor completa todos los campos requeridos.' ) );
	}

	if ( ! is_email( $email ) ) {
		wp_send_json_error( array( 'message' => 'El correo electrónico ingresado no es válido.' ) );
	}

	$to      = get_option( 'admin_email', 'negocios@orange-la.com' );
	$subject = sprintf( '[Cotización Web] %s — %s', $service_origin, $name );

	$body  = "Has recibido una nueva solicitud de contacto desde la web de Orange Latam:\n\n";
	$body .= "--------------------------------------------------\n";
	$body .= "Servicio / Origen: " . $service_origin . "\n";
	$body .= "Página URL: " . $page_url . "\n";
	$body .= "--------------------------------------------------\n";
	$body .= "Nombre: " . $name . "\n";
	$body .= "Correo: " . $email . "\n";
	$body .= "Teléfono: " . $phone . "\n";
	$body .= "Empresa: " . ( $company ? $company : 'No especificada' ) . "\n";
	$body .= "--------------------------------------------------\n";
	$body .= "Mensaje:\n" . $message . "\n";
	$body .= "--------------------------------------------------\n";

	$headers = array(
		'Content-Type: text/plain; charset=UTF-8',
		'From: Orange Latam Web <no-reply@orange-la.com>',
		'Reply-To: ' . $name . ' <' . $email . '>',
	);

	$sent = wp_mail( $to, $subject, $body, $headers );

	if ( $sent ) {
		wp_send_json_success( array( 'message' => '¡Muchas gracias! Tu mensaje ha sido enviado con éxito. Te contactaremos a la brevedad.' ) );
	} else {
		wp_send_json_error( array( 'message' => 'Ocurrió un inconveniente al enviar el correo. Por favor escríbenos a negocios@orange-la.com' ) );
	}
}

// ==========================================
// 4. AUTO-INITIALIZATION SETUP CLASS
// ==========================================
require_once ORANGE_THEME_DIR . '/inc/class-theme-setup.php';

// ==========================================
// TEMPORAL — DEMO INTERNA DE SEO (desactivado)
// ==========================================
// require_once ORANGE_THEME_DIR . '/inc/temp-seo-demo-modal.php';

// ==========================================
// 5. ON-PAGE SEO META & OPEN GRAPH GENERATOR
// ==========================================
function orange_latam_seo_meta_tags() {
	if ( is_admin() ) {
		return;
	}

	$title       = wp_get_document_title();
	$site_name   = get_bloginfo( 'name' );
	$description = 'Orange Latam — Agencia líder en comunicación estratégica, relaciones públicas, reputación corporativa, marketing de influencers y desarrollo web en Perú y Latam.';
	$url         = is_singular() ? get_permalink() : home_url( '/' );
	$og_image    = get_template_directory_uri() . '/assets/images/Orange-LAtam-dentro-de-las-40-mejores-campanas-del-mundo-en-Global-Sabre-Awards-2025-desktop.webp';

	if ( is_singular() ) {
		$post_id = get_the_ID();
		if ( has_excerpt( $post_id ) ) {
			$description = wp_strip_all_tags( get_the_excerpt( $post_id ) );
		} else {
			$content = wp_strip_all_tags( get_post_field( 'post_content', $post_id ) );
			if ( ! empty( $content ) ) {
				$description = mb_strimwidth( $content, 0, 155, '...' );
			}
		}
		if ( has_post_thumbnail( $post_id ) ) {
			$og_image = get_the_post_thumbnail_url( $post_id, 'full' );
		}
	}

	echo "\n<!-- On-Page SEO Meta Tags & Open Graph -->\n";
	echo '<meta name="description" content="' . esc_attr( $description ) . '">' . "\n";
	echo '<link rel="canonical" href="' . esc_url( $url ) . '">' . "\n";
	
	// Open Graph
	echo '<meta property="og:site_name" content="' . esc_attr( $site_name ) . '">' . "\n";
	echo '<meta property="og:title" content="' . esc_attr( $title ) . '">' . "\n";
	echo '<meta property="og:description" content="' . esc_attr( $description ) . '">' . "\n";
	echo '<meta property="og:url" content="' . esc_url( $url ) . '">' . "\n";
	echo '<meta property="og:type" content="' . ( is_single() ? 'article' : 'website' ) . '">' . "\n";
	echo '<meta property="og:locale" content="es_ES">' . "\n";
	echo '<meta property="og:image" content="' . esc_url( $og_image ) . '">' . "\n";
	echo '<meta property="og:image:width" content="1200">' . "\n";
	echo '<meta property="og:image:height" content="630">' . "\n";

	// Twitter Card
	echo '<meta name="twitter:card" content="summary_large_image">' . "\n";
	echo '<meta name="twitter:title" content="' . esc_attr( $title ) . '">' . "\n";
	echo '<meta name="twitter:description" content="' . esc_attr( $description ) . '">' . "\n";
	echo '<meta name="twitter:image" content="' . esc_url( $og_image ) . '">' . "\n";
}
add_action( 'wp_head', 'orange_latam_seo_meta_tags', 2 );

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

