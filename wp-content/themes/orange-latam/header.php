<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
$is_blog_context        = is_home() || is_singular( 'post' );
$is_influencers_context = is_page( 'marketing-de-influencers' );
$nav_location           = $is_influencers_context ? 'influencers' : ( $is_blog_context ? 'blog' : 'primary' );
$logo_url               = ( $is_blog_context || $is_influencers_context ) ? home_url( '/' ) : '#inicio';
?>
<header class="header">
	<div class="header__container">
		<a href="<?php echo esc_url( $logo_url ); ?>" class="header__logo">
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo.webp" alt="Orange Latam Logo" class="header__logo-img" style="height: 30px; width: auto; display: block;">
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
