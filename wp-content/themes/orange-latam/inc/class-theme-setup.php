<?php
/**
 * Auto-configuration setup class on theme activation.
 *
 * @package Orange_Latam
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class Orange_Theme_Setup {

	/**
	 * Initialize class hooks.
	 */
	public static function init() {
		add_action( 'init', array( __CLASS__, 'setup_theme_defaults' ) );
	}

	/**
	 * Setup pages, static home page, and menu programmatically.
	 */
	public static function setup_theme_defaults() {
		// 1. Create Pages
		$pages_to_create = array(
			'mejor-agencia-de-comunicacion-y-relaciones-publicas-en-peru' => array(
				'title'   => 'Mejor agencia de comunicación y relaciones públicas en Perú',
				'content' => '<!-- wp:paragraph --><p>Bienvenidos a Orange Latam. Impulsamos tu marca.</p><!-- /wp:paragraph -->',
			),
			'blog' => array(
				'title'   => 'Blog',
				'content' => '',
			),
			'marketing-de-influencers' => array(
				'title'   => 'Marketing de Influencers',
				'content' => '',
			),
		);

		$page_ids = array();
		foreach ( $pages_to_create as $slug => $data ) {
			// Check if page already exists by slug
			$existing_page = get_page_by_path( $slug, OBJECT, 'page' );
			if ( ! $existing_page ) {
				$post_id = wp_insert_post( array(
					'post_title'   => $data['title'],
					'post_content' => $data['content'],
					'post_status'  => 'publish',
					'post_type'    => 'page',
					'post_name'    => $slug,
				) );
				if ( ! is_wp_error( $post_id ) ) {
					$page_ids[$slug] = $post_id;
				}
			} else {
				$page_ids[$slug] = $existing_page->ID;
			}
		}

		// 2. Set static Front Page & Posts Page
		if ( isset( $page_ids['mejor-agencia-de-comunicacion-y-relaciones-publicas-en-peru'] ) ) {
			update_option( 'show_on_front', 'page' );
			update_option( 'page_on_front', $page_ids['mejor-agencia-de-comunicacion-y-relaciones-publicas-en-peru'] );
		}
		if ( isset( $page_ids['blog'] ) ) {
			update_option( 'page_for_posts', $page_ids['blog'] );
		}

		// 3. Create and Assign Navigation Menu
		$menu_name = 'Menú Principal Orange';
		$menu_exists = wp_get_nav_menu_object( $menu_name );

		if ( ! $menu_exists ) {
			$menu_id = wp_create_nav_menu( $menu_name );

			if ( ! is_wp_error( $menu_id ) ) {
				// Anchor items for single page navigation
				$menu_items = array(
					'Inicio'    => '#inicio',
					'Nosotros'  => '#nosotros',
					'Servicios' => '#servicios',
					'Premios'   => '#premios',
					'Contacto'  => '#contacto',
				);

				foreach ( $menu_items as $title => $url ) {
					wp_update_nav_menu_item( $menu_id, 0, array(
						'menu-item-title'   =>  $title,
						'menu-item-url'     => $url,
						'menu-item-status'  => 'publish',
						'menu-item-type'    => 'custom',
					) );
				}

				// Assign menu to the primary location
				$locations = get_theme_mod( 'nav_menu_locations' );
				$locations['primary'] = $menu_id;
				set_theme_mod( 'nav_menu_locations', $locations );
			}
		}

		// 4. Create and Assign Blog Navigation Menu (used on blog index & single post views)
		$blog_menu_name = 'Menú Blog Orange';
		$blog_menu_exists = wp_get_nav_menu_object( $blog_menu_name );

		if ( ! $blog_menu_exists ) {
			$blog_menu_id = wp_create_nav_menu( $blog_menu_name );

			if ( ! is_wp_error( $blog_menu_id ) ) {
				$blog_menu_items = array(
					'Inicio' => home_url( '/' ),
				);
				if ( isset( $page_ids['blog'] ) ) {
					$blog_menu_items['Blog'] = get_permalink( $page_ids['blog'] );
				}

				foreach ( $blog_menu_items as $title => $url ) {
					wp_update_nav_menu_item( $blog_menu_id, 0, array(
						'menu-item-title'   => $title,
						'menu-item-url'     => $url,
						'menu-item-status'  => 'publish',
						'menu-item-type'    => 'custom',
					) );
				}

				$locations = get_theme_mod( 'nav_menu_locations' );
				$locations['blog'] = $blog_menu_id;
				set_theme_mod( 'nav_menu_locations', $locations );
			}
		}

		// 5. Create and Assign Influencers Navigation Menu (used on the Marketing de Influencers page)
		$infl_menu_name = 'Menú Influencers Orange';
		$infl_menu_exists = wp_get_nav_menu_object( $infl_menu_name );

		if ( ! $infl_menu_exists ) {
			$infl_menu_id = wp_create_nav_menu( $infl_menu_name );

			if ( ! is_wp_error( $infl_menu_id ) ) {
				// Anchor items for single page navigation; to be linked once
				// the corresponding sections/pages are finalized.
				$infl_menu_items = array(
					'Inicio'                  => '#inicio',
					'Servicios'               => '#servicios',
					'Preguntas Frecuentas'    => '#preguntas-frecuentes',
					'Casos de Exito'          => '#casos-de-exito',
					'¿Por qué nosotros?'      => '#por-que-nosotros',
					'Contacto'                => '#contacto',
				);

				foreach ( $infl_menu_items as $title => $url ) {
					wp_update_nav_menu_item( $infl_menu_id, 0, array(
						'menu-item-title'   => $title,
						'menu-item-url'     => $url,
						'menu-item-status'  => 'publish',
						'menu-item-type'    => 'custom',
					) );
				}

				$locations = get_theme_mod( 'nav_menu_locations' );
				$locations['influencers'] = $infl_menu_id;
				set_theme_mod( 'nav_menu_locations', $locations );
			}
		}

		// Set flag to initialized
		update_option( 'orange_theme_initialized', '1' );
	}
}

Orange_Theme_Setup::init();
