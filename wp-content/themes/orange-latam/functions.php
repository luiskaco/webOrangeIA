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
function orange_latam_enqueue_assets() {
	// Enqueue Google Fonts
	wp_enqueue_style( 'orange-latam-fonts', 'https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;800;900&family=Inter:wght@400;500;600;700;800;900&family=Playball&family=Poppins:wght@400;500;600;700;800;900&display=swap', array(), null );

	// Enqueue main stylesheet (style.css metadata)
	wp_enqueue_style( 'orange-latam-style-meta', get_stylesheet_uri(), array(), ORANGE_THEME_VERSION );

	// Enqueue actual custom CSS style (cache-busted with file modification time)
	$custom_style_path = ORANGE_THEME_DIR . '/assets/css/style.css';
	wp_enqueue_style( 'orange-latam-custom-style', ORANGE_THEME_URI . '/assets/css/style.css', array(), file_exists( $custom_style_path ) ? filemtime( $custom_style_path ) : ORANGE_THEME_VERSION );

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
