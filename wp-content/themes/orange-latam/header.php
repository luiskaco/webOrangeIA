<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/favico.webp" type="image/webp">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- HEADER / NAV -->
<?php
// Blog index, single posts, and standalone service pages (like Marketing de
// Influencers) get the lightweight "Inicio / Blog" menu so visitors can
// navigate back to the article list or the landing page instead of anchors
// that only exist on the front page.
$is_blog_context              = is_home() || is_singular( 'post' );
$is_influencers_context       = is_page( 'marketing-de-influencers' );
$is_marketing_digital_context = is_page( 'marketing-digital' );
$is_podcast_context           = is_page( 'podcast' ) || is_page_template( 'page-podcast.php' );
$is_pr_context                = is_page( 'pr-gestion-reputacion' ) || is_page_template( 'page-pr-gestion-reputacion.php' );
$is_asuntos_publicos_context  = is_page( 'asuntos-publicos' ) || is_page_template( 'page-asuntos-publicos.php' );
$is_branding_context          = is_page( 'branding-creatividad' ) || is_page_template( 'page-branding-creatividad.php' );
$is_eventos_context           = is_page( 'eventos-activaciones' ) || is_page_template( 'page-eventos-activaciones.php' );
$is_gestion_acceso_context    = is_page( 'gestion-de-acceso' ) || is_page_template( 'page-gestion-de-acceso.php' );
$is_presencia_digital_context = is_page( 'presencia-digital' ) || is_page_template( 'page-presencia-digital.php' );
$nav_location                 = $is_presencia_digital_context ? 'presencia_digital' : ( $is_gestion_acceso_context ? 'gestion_acceso' : ( $is_eventos_context ? 'eventos' : ( $is_branding_context ? 'branding' : ( $is_asuntos_publicos_context ? 'asuntos_publicos' : ( $is_pr_context ? 'pr' : ( $is_podcast_context ? 'podcast' : ( $is_marketing_digital_context ? 'marketing_digital' : ( $is_influencers_context ? 'influencers' : ( $is_blog_context ? 'blog' : 'primary' ) ) ) ) ) ) ) ) );
$logo_url                     = ( $is_blog_context || $is_influencers_context || $is_marketing_digital_context || $is_podcast_context || $is_pr_context || $is_asuntos_publicos_context || $is_branding_context || $is_eventos_context || $is_gestion_acceso_context || $is_presencia_digital_context ) ? home_url( '/' ) : '#inicio';
?>
<header class="header<?php echo ( $is_pr_context || $is_asuntos_publicos_context || $is_branding_context || $is_eventos_context || $is_gestion_acceso_context || $is_presencia_digital_context ) ? ' header--pr' : ''; ?>">
	<div class="header__container">
		<a href="<?php echo esc_url( $logo_url ); ?>" class="header__logo">
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo.webp" alt="Orange Latam — Agencia de Comunicación Estratégica, PR y Soluciones Digitales" class="header__logo-img" loading="eager" decoding="async" fetchpriority="high" width="160" height="30" style="height: 30px; width: auto; display: block;">
		</a>

		<button type="button" class="header__burger" aria-label="Abrir menú" aria-expanded="false" aria-controls="header-nav">
			<span class="header__burger-line"></span>
			<span class="header__burger-line"></span>
			<span class="header__burger-line"></span>
		</button>

		<nav class="header__nav" id="header-nav">
			<?php
			$locations = get_nav_menu_locations();
			$menu_id = isset( $locations[ $nav_location ] ) ? $locations[ $nav_location ] : null;
			$menu_items = $menu_id ? wp_get_nav_menu_items( $menu_id ) : array();

			if ( ! empty( $menu_items ) ) {
				foreach ( $menu_items as $item ) {
					echo '<a href="' . esc_url( $item->url ) . '" class="header__link">' . esc_html( $item->title ) . '</a>';
				}
			} elseif ( $is_presencia_digital_context ) {
				// Fallback if the Presencia Digital menu hasn't been generated yet.
				?>
				<a href="#inicio" class="header__link">Inicio</a>
				<a href="#web-ux" class="header__link">Diseño Web UX</a>
				<a href="#seo-sem" class="header__link">SEO / SEM</a>
				<a href="#ecommerce" class="header__link">E-Commerce</a>
				<a href="#resultados" class="header__link">Resultados</a>
				<a href="#contacto" class="header__link">Contacto</a>
				<?php
			} elseif ( $is_gestion_acceso_context ) {
				// Fallback if the Gestión de Acceso menu hasn't been generated yet.
				?>
				<a href="#inicio" class="header__link">Inicio</a>
				<a href="#la-barrera" class="header__link">La Barrera</a>
				<a href="#como-trabajamos" class="header__link">Cómo Trabajamos</a>
				<a href="#para-quien" class="header__link">Para Quién</a>
				<a href="#contacto" class="header__link">Contacto</a>
				<?php
			} elseif ( $is_eventos_context ) {
				// Fallback if the Eventos menu hasn't been generated yet.
				?>
				<a href="#inicio" class="header__link">Inicio</a>
				<a href="#tipos-eventos" class="header__link">Tipos de Eventos</a>
				<a href="#como-trabajamos" class="header__link">Cómo Trabajamos</a>
				<a href="#contacto" class="header__link">Contacto</a>
				<?php
			} elseif ( $is_branding_context ) {
				// Fallback if the Branding menu hasn't been generated yet.
				?>
				<a href="#inicio" class="header__link">Inicio</a>
				<a href="#servicios-branding" class="header__link">Branding</a>
				<a href="#creatividad-direccion-arte" class="header__link">Creatividad</a>
				<a href="#contacto" class="header__link">Contacto</a>
				<?php
			} elseif ( $is_asuntos_publicos_context ) {
				// Fallback if the Asuntos Públicos menu hasn't been generated yet.
				?>
				<a href="#inicio" class="header__link">Inicio</a>
				<a href="#relacion-reguladores" class="header__link">Reguladores</a>
				<a href="#comunicacion-politica" class="header__link">Comunicación Política</a>
				<a href="#stakeholders" class="header__link">Stakeholders & Comunidades</a>
				<a href="#contacto" class="header__link">Contacto</a>
				<?php
			} elseif ( $is_pr_context ) {
				// Fallback if the PR menu hasn't been generated yet.
				?>
				<a href="#que-es" class="header__link">Qué es</a>
				<a href="#servicio-pr" class="header__link">Servicio de PR</a>
				<a href="#gestion-de-crisis" class="header__link">Gestión de Crisis</a>
				<a href="<?php echo esc_url( home_url( '/eventos-activaciones/' ) ); ?>" class="header__link">Eventos y Voceros</a>
				<a href="#por-que-elegirnos" class="header__link">Por qué elegirnos</a>
				<a href="#contacto" class="header__link">Contacto</a>
				<?php
			} elseif ( $is_podcast_context ) {
				// Fallback if the podcast menu hasn't been generated yet.
				?>
				<a href="#inicio" class="header__link">Inicio</a>
				<a href="#servicios" class="header__link">Servicio</a>
				<a href="#escenarios" class="header__link">Escenarios</a>
				<a href="#planes" class="header__link">Planes</a>
				<a href="#contacto-podcast" class="header__link">Contacto</a>
				<?php
			} elseif ( $is_marketing_digital_context ) {
				// Fallback if the marketing digital menu hasn't been generated yet.
				?>
				<a href="#inicio" class="header__link">Inicio</a>
				<a href="#redes-sociales" class="header__link">Redes sociales</a>
				<a href="#publicidad-digital" class="header__link">Publicidad digital</a>
				<a href="#contenido-estrategico" class="header__link">Contenido estratégico</a>
				<a href="#consultoria" class="header__link">Consultoría</a>
				<a href="#contacto" class="header__link">Contacto</a>
				<?php
			} elseif ( $is_influencers_context ) {
				// Fallback if the influencers menu hasn't been generated yet.
				// Section anchors are placeholders — to be linked once the
				// corresponding sections/pages are finalized.
				?>
				<a href="#inicio" class="header__link">Inicio</a>
				<a href="#servicios" class="header__link">Servicios</a>
				<a href="#preguntas-frecuentes" class="header__link">Preguntas Frecuentas</a>
				<a href="#casos-de-exito" class="header__link">Casos de Exito</a>
				<a href="#por-que-nosotros" class="header__link">¿Por qué nosotros?</a>
				<a href="#contacto" class="header__link">Contacto</a>
				<?php
			} elseif ( $is_blog_context ) {
				// Fallback if the blog menu hasn't been generated yet
				?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header__link">Inicio</a>
				<a href="<?php echo esc_url( get_permalink( get_option( 'page_for_posts' ) ) ); ?>" class="header__link">Blog</a>
				<?php
			} else {
				// Fallback to default anchors if menu not configured yet
				?>
				<a href="#inicio" class="header__link">Inicio</a>
				<a href="#nosotros" class="header__link">Nosotros</a>
				<a href="#servicios" class="header__link">Servicios</a>
				<a href="#premios" class="header__link">Premios</a>
				<a href="#contacto" class="header__link">Contacto</a>
				<?php
			}
			?>
		</nav>
		<div class="header__overlay"></div>
	</div>
</header>
