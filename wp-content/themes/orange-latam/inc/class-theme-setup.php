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
	 * Contenido de la página de Política de Privacidad. Cubre los datos que
	 * el sitio realmente recolecta hoy (formularios de contacto: nombre,
	 * email, teléfono, empresa, mensaje, IP) — no incluye cláusulas de
	 * cookies de analítica/marketing porque el sitio no carga ninguna
	 * (verificado en la auditoría de seguridad de 2026-08-19). Redactado en
	 * lenguaje simple con referencia a la Ley N° 29733 de Protección de
	 * Datos Personales (Perú). Es un borrador funcional, no un documento
	 * validado por un abogado — recomendado revisión legal antes de
	 * considerarlo definitivo, especialmente el plazo de conservación y el
	 * procedimiento exacto de ejercicio de derechos ARCO.
	 */
	private static function get_privacy_policy_content() {
		return <<<'HTML'
<!-- wp:paragraph -->
<p><em>Última actualización: agosto de 2026.</em></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>En Orange Latam nos tomamos en serio la protección de tus datos personales. Esta política explica, en lenguaje simple, qué información recolectamos cuando visitas este sitio o completas alguno de nuestros formularios, para qué la usamos y qué derechos tienes sobre ella, conforme a la Ley N° 29733, Ley de Protección de Datos Personales del Perú, y su Reglamento.</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2>¿Quién es responsable de tus datos?</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Orange Latam, con domicilio en Calle Enrique Palacios 360 Of. 306, Centro Empresarial Abril, Miraflores, Lima, Perú. Puedes contactarnos para cualquier consulta sobre tus datos personales escribiendo a <a href="mailto:negocios@orange-la.com">negocios@orange-la.com</a>.</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2>¿Qué datos recolectamos?</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Solo recolectamos datos cuando completas voluntariamente alguno de nuestros formularios de contacto o cotización. Los campos que solicitamos son:</p>
<!-- /wp:paragraph -->

<!-- wp:list -->
<ul>
<li>Nombre y apellido</li>
<li>Correo electrónico</li>
<li>Teléfono / WhatsApp</li>
<li>Empresa u organización (opcional, según el formulario)</li>
<li>El mensaje o consulta que nos escribes</li>
</ul>
<!-- /wp:list -->

<!-- wp:paragraph -->
<p>Además, guardamos automáticamente la dirección IP desde la que se envía el formulario, como medida de seguridad para prevenir spam y abuso.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Este sitio no utiliza cookies de análisis (como Google Analytics) ni de publicidad (como Meta Pixel) al día de esta actualización. Si en el futuro incorporamos alguna, primero te lo pediremos explícitamente mediante un aviso de cookies, y podrás aceptar o rechazar cada tipo por separado.</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2>¿Para qué usamos tus datos?</h2>
<!-- /wp:heading -->

<!-- wp:list -->
<ul>
<li>Responder a tu consulta o solicitud de cotización</li>
<li>Contactarte por correo, teléfono o WhatsApp respecto al servicio que nos consultaste</li>
<li>Llevar un registro interno de nuestras oportunidades comerciales (leads)</li>
</ul>
<!-- /wp:list -->

<!-- wp:paragraph -->
<p>No vendemos, alquilamos ni compartimos tus datos con terceros para fines comerciales ajenos a Orange Latam.</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2>¿Cuál es la base legal para tratar tus datos?</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Tu consentimiento expreso, que otorgas al marcar la casilla correspondiente antes de enviar cualquiera de nuestros formularios. Enviar el formulario sin marcar esa casilla no es válido como consentimiento.</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2>¿Cuánto tiempo conservamos tus datos?</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Conservamos los datos de contacto hasta 24 meses desde tu último contacto con nosotros, o hasta que nos solicites su eliminación, lo que ocurra primero.</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2>¿Qué derechos tienes?</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Como titular de tus datos personales, tienes derecho a acceder, rectificar, cancelar (eliminar) u oponerte al uso de tus datos (derechos ARCO), así como a revocar tu consentimiento en cualquier momento. Para ejercer cualquiera de estos derechos, escríbenos a <a href="mailto:negocios@orange-la.com">negocios@orange-la.com</a> indicando tu nombre y el correo con el que nos contactaste — responderemos tu solicitud dentro de los plazos que establece la ley.</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2>¿Cómo protegemos tus datos?</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Aplicamos medidas técnicas razonables para proteger tu información contra accesos no autorizados, incluyendo conexión cifrada (HTTPS), controles de acceso a nuestros sistemas internos y protecciones contra envíos automatizados (spam) en nuestros formularios.</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2>Cambios a esta política</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Podemos actualizar esta política ocasionalmente. La fecha de la última actualización siempre estará indicada al inicio de esta página.</p>
<!-- /wp:paragraph -->
HTML;
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
			'podcast' => array(
				'title'   => 'Orange Studio Podcast',
				'content' => '',
			),
			'pr-gestion-reputacion' => array(
				'title'   => 'PR y Gestión de la Reputación',
				'content' => '',
			),
			'asuntos-publicos' => array(
				'title'   => 'Asuntos Públicos y Relaciones Institucionales',
				'content' => '',
			),
			'branding-creatividad' => array(
				'title'   => 'Branding y Creatividad',
				'content' => '',
			),
			'eventos-activaciones' => array(
				'title'   => 'Eventos y Activaciones',
				'content' => '',
			),
			'gestion-de-acceso' => array(
				'title'   => 'Gestión de Acceso',
				'content' => '',
			),
			'presencia-digital' => array(
				'title'   => 'Presencia Digital: Web, SEO y E-Commerce',
				'content' => '',
			),
			'politica-de-privacidad' => array(
				'title'   => 'Política de Privacidad',
				'content' => self::get_privacy_policy_content(),
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

		// 6. Create and Assign Podcast Navigation Menu (used on the Orange Studio Podcast page)
		$podcast_menu_name = 'Menú Podcast Orange';
		$podcast_menu_exists = wp_get_nav_menu_object( $podcast_menu_name );

		if ( ! $podcast_menu_exists ) {
			$podcast_menu_id = wp_create_nav_menu( $podcast_menu_name );

			if ( ! is_wp_error( $podcast_menu_id ) ) {
				$podcast_menu_items = array(
					'Inicio'     => '#inicio',
					'Servicio'   => '#servicios',
					'Escenarios' => '#escenarios',
					'Planes'     => '#planes',
					'Contacto'   => '#contacto-podcast',
				);

				foreach ( $podcast_menu_items as $title => $url ) {
					wp_update_nav_menu_item( $podcast_menu_id, 0, array(
						'menu-item-title'   => $title,
						'menu-item-url'     => $url,
						'menu-item-status'  => 'publish',
						'menu-item-type'    => 'custom',
					) );
				}

				$locations = get_theme_mod( 'nav_menu_locations' );
				$locations['podcast'] = $podcast_menu_id;
				set_theme_mod( 'nav_menu_locations', $locations );
			}
		}

		// 7. Create and Assign PR Navigation Menu
		$pr_menu_name = 'Menú PR Orange';
		$pr_menu_exists = wp_get_nav_menu_object( $pr_menu_name );

		if ( ! $pr_menu_exists ) {
			$pr_menu_id = wp_create_nav_menu( $pr_menu_name );

			if ( ! is_wp_error( $pr_menu_id ) ) {
				$pr_menu_items = array(
					'Qué es'             => '#que-es',
					'Servicio de PR'     => '#servicio-pr',
					'Gestión de Crisis'  => '#gestion-de-crisis',
					'Voceros'            => '#entrenamiento-voceros',
					'Por qué elegirnos' => '#por-que-elegirnos',
					'Contacto'           => '#contacto',
				);

				foreach ( $pr_menu_items as $title => $url ) {
					wp_update_nav_menu_item( $pr_menu_id, 0, array(
						'menu-item-title'   => $title,
						'menu-item-url'     => $url,
						'menu-item-status'  => 'publish',
						'menu-item-type'    => 'custom',
					) );
				}

				$locations = get_theme_mod( 'nav_menu_locations' );
				$locations['pr'] = $pr_menu_id;
				set_theme_mod( 'nav_menu_locations', $locations );
			}
		}

		// 8. Create and Assign Asuntos Públicos Navigation Menu
		$asuntos_menu_name = 'Menú Asuntos Públicos Orange';
		$asuntos_menu_exists = wp_get_nav_menu_object( $asuntos_menu_name );

		if ( ! $asuntos_menu_exists ) {
			$asuntos_menu_id = wp_create_nav_menu( $asuntos_menu_name );

			if ( ! is_wp_error( $asuntos_menu_id ) ) {
				$asuntos_menu_items = array(
					'Inicio'                     => '#inicio',
					'Reguladores'                => '#relacion-reguladores',
					'Comunicación Política'     => '#comunicacion-politica',
					'Stakeholders & Comunidades' => '#stakeholders',
					'Contacto'                   => '#contacto',
				);

				foreach ( $asuntos_menu_items as $title => $url ) {
					wp_update_nav_menu_item( $asuntos_menu_id, 0, array(
						'menu-item-title'   => $title,
						'menu-item-url'     => $url,
						'menu-item-status'  => 'publish',
						'menu-item-type'    => 'custom',
					) );
				}

				$locations = get_theme_mod( 'nav_menu_locations' );
				$locations['asuntos_publicos'] = $asuntos_menu_id;
				set_theme_mod( 'nav_menu_locations', $locations );
			}
		}

		// 9. Create and Assign Branding & Creatividad Navigation Menu
		$branding_menu_name = 'Menú Branding Orange';
		$branding_menu_exists = wp_get_nav_menu_object( $branding_menu_name );

		if ( ! $branding_menu_exists ) {
			$branding_menu_id = wp_create_nav_menu( $branding_menu_name );

			if ( ! is_wp_error( $branding_menu_id ) ) {
				$branding_menu_items = array(
					'Inicio'      => '#inicio',
					'Branding'    => '#servicios-branding',
					'Creatividad' => '#creatividad-direccion-arte',
					'Contacto'    => '#contacto',
				);

				foreach ( $branding_menu_items as $title => $url ) {
					wp_update_nav_menu_item( $branding_menu_id, 0, array(
						'menu-item-title'   => $title,
						'menu-item-url'     => $url,
						'menu-item-status'  => 'publish',
						'menu-item-type'    => 'custom',
					) );
				}

				$locations = get_theme_mod( 'nav_menu_locations' );
				$locations['branding'] = $branding_menu_id;
				set_theme_mod( 'nav_menu_locations', $locations );
			}
		}

		// 10. Create and Assign Eventos y Activaciones Navigation Menu
		$eventos_menu_name = 'Menú Eventos Orange';
		$eventos_menu_exists = wp_get_nav_menu_object( $eventos_menu_name );

		if ( ! $eventos_menu_exists ) {
			$eventos_menu_id = wp_create_nav_menu( $eventos_menu_name );

			if ( ! is_wp_error( $eventos_menu_id ) ) {
				$eventos_menu_items = array(
					'Inicio'            => '#inicio',
					'Tipos de Eventos'  => '#tipos-eventos',
					'Cómo Trabajamos'   => '#como-trabajamos',
					'Contacto'          => '#contacto',
				);

				foreach ( $eventos_menu_items as $title => $url ) {
					wp_update_nav_menu_item( $eventos_menu_id, 0, array(
						'menu-item-title'   => $title,
						'menu-item-url'     => $url,
						'menu-item-status'  => 'publish',
						'menu-item-type'    => 'custom',
					) );
				}

				$locations = get_theme_mod( 'nav_menu_locations' );
				$locations['eventos'] = $eventos_menu_id;
				set_theme_mod( 'nav_menu_locations', $locations );
			}
		}

		// 11. Create and Assign Gestión de Acceso Navigation Menu
		$ga_menu_name = 'Menú Gestión de Acceso Orange';
		$ga_menu_exists = wp_get_nav_menu_object( $ga_menu_name );

		if ( ! $ga_menu_exists ) {
			$ga_menu_id = wp_create_nav_menu( $ga_menu_name );

			if ( ! is_wp_error( $ga_menu_id ) ) {
				$ga_menu_items = array(
					'Inicio'          => '#inicio',
					'La Barrera'      => '#la-barrera',
					'Cómo Trabajamos' => '#como-trabajamos',
					'Para Quién'      => '#para-quien',
					'Contacto'        => '#contacto',
				);

				foreach ( $ga_menu_items as $title => $url ) {
					wp_update_nav_menu_item( $ga_menu_id, 0, array(
						'menu-item-title'   => $title,
						'menu-item-url'     => $url,
						'menu-item-status'  => 'publish',
						'menu-item-type'    => 'custom',
					) );
				}

				$locations = get_theme_mod( 'nav_menu_locations' );
				$locations['gestion_acceso'] = $ga_menu_id;
				set_theme_mod( 'nav_menu_locations', $locations );
			}
		}

		// 12. Create and Assign Presencia Digital Navigation Menu
		$pd_menu_name = 'Menú Presencia Digital Orange';
		$pd_menu_exists = wp_get_nav_menu_object( $pd_menu_name );

		if ( ! $pd_menu_exists ) {
			$pd_menu_id = wp_create_nav_menu( $pd_menu_name );

			if ( ! is_wp_error( $pd_menu_id ) ) {
				$pd_menu_items = array(
					'Inicio'          => '#inicio',
					'Diseño Web UX'   => '#web-ux',
					'SEO / SEM'       => '#seo-sem',
					'E-Commerce'      => '#ecommerce',
					'Resultados'      => '#resultados',
					'Contacto'        => '#contacto',
				);

				foreach ( $pd_menu_items as $title => $url ) {
					wp_update_nav_menu_item( $pd_menu_id, 0, array(
						'menu-item-title'   => $title,
						'menu-item-url'     => $url,
						'menu-item-status'  => 'publish',
						'menu-item-type'    => 'custom',
					) );
				}

				$locations = get_theme_mod( 'nav_menu_locations' );
				$locations['presencia_digital'] = $pd_menu_id;
				set_theme_mod( 'nav_menu_locations', $locations );
			}
		}

		// Set flag to initialized
		update_option( 'orange_theme_initialized', '1' );
	}
}

Orange_Theme_Setup::init();
