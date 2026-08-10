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
	} else {
		orange_latam_enqueue_versioned_style( 'orange-latam-custom-style', '/assets/css/style.css', array( 'orange-latam-base-style' ) );
	}

	// Enqueue Vanilla JS (cache-busted with file modification time)
	$main_js_path = ORANGE_THEME_DIR . '/assets/js/main.js';
	wp_enqueue_script( 'orange-latam-main-js', ORANGE_THEME_URI . '/assets/js/main.js', array(), file_exists( $main_js_path ) ? filemtime( $main_js_path ) : ORANGE_THEME_VERSION, true );

	// Pass "Voz de Expertos" real post data to the carousel script (front page only)
	if ( is_front_page() ) {
		wp_localize_script( 'orange-latam-main-js', 'orangeLatamExperts', orange_latam_get_expert_posts() );
	}
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
// 4. AUTO-INITIALIZATION SETUP CLASS
// ==========================================
require_once ORANGE_THEME_DIR . '/inc/class-theme-setup.php';
