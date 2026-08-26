<?php
/**
 * The main template file
 *
 * @package Orange_Latam
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>

<!-- SEO Structured Data (JSON-LD Organization Schema) -->
<script type="application/ld+json">
{
	"@context": "https://schema.org",
	"@type": "Organization",
	"name": "Orange Latam",
	"alternateName": "Orange LATAM Agencia de PR y Comunicación",
	"url": "<?php echo esc_url( home_url( '/' ) ); ?>",
	"logo": "<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo.webp' ); ?>",
	"description": "Agencia líder en relaciones públicas, reputación corporativa, marketing de influencers y soluciones digitales en Perú y Latinoamérica.",
	"address": {
		"@type": "PostalAddress",
		"streetAddress": "Calle Enrique Palacios 360 Of. 306, Miraflores",
		"addressLocality": "Lima",
		"addressCountry": "PE"
	},
	"contactPoint": {
		"@type": "ContactPoint",
		"telephone": "+51-993-595-232",
		"contactType": "customer service",
		"email": "negocios@orange-la.com",
		"areaServed": ["PE", "LATAM"]
	}
}
</script>

<main>
	<!-- ==========================================
	     1. HERO SLIDER SECTION
	     ========================================== -->
	<section id="inicio" class="hero">
		<!-- Slides container -->
		<div class="hero__slides">
			<!-- Slide 1 (Video) -->
			<div class="hero__slide hero__slide--active">
				<video class="hero__video" autoplay muted loop playsinline preload="auto" poster="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/Orange-LAtam-dentro-de-las-40-mejores-campanas-del-mundo-en-Global-Sabre-Awards-2025-desktop.webp">
					<source src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/videos/orange-latam-lideres-reputacion-comunicacion-pr.mp4" type="video/mp4">
				</video>
				<div class="hero__content">
					<p style="font-family: var(--font-sans); font-size: clamp(32px, 5vw, 64px); font-weight: 900; margin-bottom: 12px; color: var(--color-bg-light);">
						Líderes en Reputación
					</p>
					<p style="font-size: clamp(14px, 2vw, 18px); color: rgba(252, 245, 233, 0.7); max-width: 600px; margin: 0 auto;">
						Premiados en los principales escenarios del mundo por nuestra gestión de comunicación y relaciones públicas.
					</p>
				</div>
			</div>
			<!-- Slide 2 -->
			<div class="hero__slide">
				<picture class="hero__picture">
					<source media="(max-width: 768px)" srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/Orange-LAtam-dentro-de-las-40-mejores-campanas-del-mundo-en-Global-Sabre-Awards-2025-mobil.webp">
					<img class="hero__img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/Orange-LAtam-dentro-de-las-40-mejores-campanas-del-mundo-en-Global-Sabre-Awards-2025-desktop.webp" alt="Global Sabre Awards 2025">
				</picture>
				<div class="hero__content">
					<h2 style="font-family: var(--font-sans); font-size: clamp(32px, 5vw, 64px); font-weight: 900; margin-bottom: 12px; color: var(--color-bg-light);">
						Impulsamos tu Marca
					</h2>
					<p style="font-size: clamp(14px, 2vw, 18px); color: rgba(252, 245, 233, 0.7); max-width: 600px; margin: 0 auto;">
						Somos expertos en gestión de reputación, relaciones públicas y estrategias de influencers de alto valor.
					</p>
				</div>
			</div>
			<!-- Slide 3 -->
			<div class="hero__slide">
				<picture class="hero__picture">
					<source media="(max-width: 768px)" srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/Orange-Latam-denro-de-las-15-mejores-agencias-de-Latinoamerica-por-PRovoke-Media-mobil.webp">
					<img class="hero__img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/Orange-Latam-denro-de-las-15-mejores-agencias-de-Latinoamerica-por-PRovoke-Media-desktop.webp" alt="PRovoke Media Top 15 Latam">
				</picture>
				<div class="hero__content">
					<h2 style="font-family: var(--font-sans); font-size: clamp(32px, 5vw, 64px); font-weight: 900; margin-bottom: 12px; color: var(--color-bg-light);">
						Excelencia y Creatividad
					</h2>
					<p style="font-size: clamp(14px, 2vw, 18px); color: rgba(252, 245, 233, 0.7); max-width: 600px; margin: 0 auto;">
						Reconocidos como la mejor agencia del Perú y Top 5 de Iberoamérica.
					</p>
				</div>
			</div>
			<!-- Vignette -->
			<div class="hero__vignette"></div>
		</div>

		<!-- Navigation Arrows -->
		<button class="hero__arrow hero__arrow--prev" aria-label="Anterior slide">
			<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="15,18 9,12 15,6"></polyline></svg>
		</button>
		<button class="hero__arrow hero__arrow--next" aria-label="Siguiente slide">
			<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="9,18 15,12 9,6"></polyline></svg>
		</button>

		<!-- Slider Dots -->
		<div class="hero__dots">
			<button class="hero__dot hero__dot--active" aria-label="Slide 1"></button>
			<button class="hero__dot" aria-label="Slide 2"></button>
			<button class="hero__dot" aria-label="Slide 3"></button>
		</div>
	</section>

	<!-- ==========================================
	     2. STATS BAR SECTION
	     ========================================== -->
	<section class="stats">
		<div class="stats__container" data-reveal="up">
			<div class="stats__item">
				<span class="stats__value" data-target="100" data-suffix="+">0+</span>
				<span class="stats__label">PREMIOS INT'L</span>
			</div>
			<div class="stats__item">
				<span class="stats__value" data-prefix="TOP " data-target="5">TOP 0</span>
				<span class="stats__label">IBEROAMÉRICA</span>
			</div>
			<div class="stats__item">
				<span class="stats__value" data-target="6">0</span>
				<span class="stats__label">PAÍSES</span>
			</div>
			<div class="stats__item">
				<span class="stats__value" data-prefix="#" data-target="1">#0</span>
				<span class="stats__label">AGENCIA EN PERÚ</span>
			</div>
		</div>
	</section>

	<!-- ==========================================
	     3. NOSOTROS SECTION
	     ========================================== -->
	<section id="nosotros" class="about">
		<div class="about__container">
			<h2 class="about__title" data-reveal="up">Nosotros</h2>
			<p class="about__desc" data-reveal="up">
				Somos una empresa experta en gestión de la reputación, relaciones públicas, manejo de crisis y marketing de influencers. Contamos con un equipo altamente calificado para la creación y ejecución de planes que aportan un alto valor a las marcas, a los negocios y a la sociedad. Somos una agencia especializada en ofrecer soluciones integrales para marcas de renombre en Perú y a nivel internacional. Por quinto año consecutivo, el Top Fice Iberoamérica nos considera como la Mejor Agencia de Comunicación y relaciones públicas del Perú y nos ubica en el TOP 5 de las mejores compañías de comunicación en el país.
			</p>

			<div class="about__grid">
				<div class="about__hero-text" data-reveal="left">
					<div class="about__heading">
						Impulsamos<br>tu <span class="about__heading-accent">marca</span>
					</div>
					<div class="about__heading-line"></div>
				</div>

				<div class="about__info" data-reveal="right">
					<div class="about__section">
						<h3 class="about__section-title">Misión</h3>
						<p class="about__section-text">
							Somos el partner estratégico que ayuda a las empresas a <strong>lograr el mayor crecimiento</strong> mediante planes de comunicación creativos e innovadores, que aportan alto valor a todo tipo de negocios, organizaciones e instituciones, privadas y públicas.
						</p>
					</div>
					<div class="about__section">
						<h3 class="about__section-title">Visión</h3>
						<p class="about__section-text">
							Convertirnos en la agencia líder mundial en transformación de la comunicación, <strong>reconocida por su gran creatividad y excelencia</strong> para lograr que cada una de sus intervenciones aporte significativamente a los negocios de sus clientes y a un cambio positivo de la sociedad.
						</p>
					</div>
					<div class="about__cities">
						<span class="about__city">LIMA</span>
						<span class="about__city">BOGOTÁ</span>
						<span class="about__city">QUITO</span>
						<span class="about__city">CIUDAD DE MÉXICO</span>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ==========================================
	     4. SERVICIOS SECTION
	     ========================================== -->
	<section id="servicios">
		<!-- Dynamic Category Banner -->
		<div class="services-banner">
			<div class="services-banner__container" data-reveal="up">
				<div class="services-banner__label">Servicios</div>
				<div class="services-banner__flex">
					<h2 class="services-banner__title">
						<span class="services-banner__title-line">Comunicación</span> Estratégica
					</h2>
					<div class="services-banner__switcher">
						<button class="services-banner__btn services-banner__btn--corp services-banner__btn--active">
							Corporativo
						</button>
						<button class="services-banner__btn services-banner__btn--sensible">
							Asuntos Sensibles
						</button>
					</div>
				</div>
			</div>
		</div>

		<!-- Corporativo Subsections -->
		<div class="services-corp services-corp--active">
			<div class="services-corp__grid">
				<div class="services-corp__list" data-reveal="left">
					<?php
					$branding_page = get_page_by_path( 'branding-creatividad' );
					$branding_url  = $branding_page ? get_permalink( $branding_page ) : home_url( '/branding-creatividad/' );

					$services_data = array(
						array( 'id' => 1, 'num' => '01', 'name' => 'PR y Gestión de la reputación', 'desc' => 'Planificar y ejecutar estrategias de Relaciones Públicas (PR) y gestión de la reputación permite a marcas y empresas influir de manera poderosa en la percepción de distintos públicos. En Orange Latam nos especializamos en la creación de planes que permiten construir una reputación sólida a empresas, productos y/o servicios, a partir de una interacción asertiva con públicos diversos, a todo nivel.', 'link' => home_url( '/pr-gestion-reputacion/' ), 'file' => 'pr-reputacion.webp' ),
						array( 'id' => 2, 'num' => '02', 'name' => 'Asuntos Públicos y Relaciones Institucionales', 'desc' => 'Estrategias de asuntos públicos, comunicación política y relacionamiento responsable con autoridades, ministerios, comunidades y stakeholders clave en Perú y la región.', 'link' => home_url( '/asuntos-publicos/' ), 'file' => 'asuntos-publicos.webp' ),
						array( 'id' => 3, 'num' => '03', 'name' => 'Marketing de Influencers', 'desc' => 'Conectamos marcas con líderes de opinión altamente relevantes para campañas de máximo alcance, impacto y retorno de inversión medible en cada plataforma digital.', 'link' => home_url( '/marketing-de-influencers/' ), 'file' => 'marketing-influencers.webp' ),
						array( 'id' => 4, 'num' => '04', 'name' => 'Digital y Social Media', 'desc' => 'Gestión estratégica de presencia digital, comunidades online y creación de contenido en todos los canales relevantes para tu audiencia.', 'link' => home_url( '/marketing-digital/' ), 'file' => 'digital-social-media.webp' ),
						array( 'id' => 5, 'num' => '05', 'name' => 'Producción Audiovisual Orange Studio', 'desc' => 'Producción de video, fotografía y animación de primer nivel para todas las plataformas y formatos del ecosistema digital y tradicional.', 'link' => 'https://orangelatamstudio.com/', 'file' => 'produccion-audiovisual.webp' ),
						array( 'id' => 6, 'num' => '06', 'name' => 'Creatividad y Dirección de Arte', 'desc' => 'El diferencial creativo que hace que tu comunicación se destaque y genere el impacto deseado en el público objetivo.', 'link' => $branding_url . '#creatividad-direccion-arte', 'file' => 'creatividad-arte.webp' ),
						array( 'id' => 7, 'num' => '07', 'name' => 'Branding', 'desc' => 'De naming a consolidación: creamos y posicionamos marcas memorables y deseadas en mercados nacionales e internacionales.', 'link' => $branding_url, 'file' => 'branding.webp' ),
						array( 'id' => 8, 'num' => '08', 'name' => 'Estratégias ATL', 'desc' => 'Campañas de alto alcance con planificación de medios, segmentación de audiencias y ejecución integrada con el mejor ROI del mercado.', 'link' => home_url( '/eventos-activaciones/' ), 'file' => 'estrategias-atl.webp' ),
						array( 'id' => 9, 'num' => '09', 'name' => 'Eventos y Activaciones Presenciales', 'desc' => 'Experiencias presenciales, remotas e híbridas de primer nivel que conectan con el público de manera poderosa y memorable.', 'link' => home_url( '/eventos-activaciones/' ), 'file' => 'eventos-presenciales.webp' ),
						array( 'id' => 10, 'num' => '10', 'name' => 'Entrenamiento de Voceros', 'desc' => 'Preparamos líderes para comunicar con autoridad y credibilidad ante medios, inversores y audiencias clave en cualquier escenario.', 'link' => home_url( '/pr-gestion-reputacion/#entrenamiento-voceros' ), 'file' => 'entrenamiento-voceros.webp' ),
						array( 'id' => 11, 'num' => '11', 'name' => 'SEO / SEM', 'desc' => 'Optimizamos la presencia digital con estrategias de búsqueda integradas a los objetivos comerciales e institucionales de la marca.', 'link' => home_url( '/presencia-digital/#seo-sem' ), 'file' => 'seo-sem.webp' ),
						array( 'id' => 12, 'num' => '12', 'name' => 'Web site / Landing UX Criteria', 'desc' => 'Diseñamos experiencias digitales que convierten, con navegación intuitiva, visual atractivo y arquitectura de información óptima.', 'link' => home_url( '/presencia-digital/#web-ux' ), 'file' => 'website-ux.webp' ),
						array( 'id' => 13, 'num' => '13', 'name' => 'E-Commerce', 'desc' => 'Plataformas y estrategias digitales completas para potenciar ventas, captación de leads y fidelización de clientes.', 'link' => home_url( '/presencia-digital/#ecommerce' ), 'file' => 'ecommerce.webp' ),
					);

					$corp_services = array();
					foreach ( $services_data as $svc ) {
						$file_path = get_template_directory() . '/assets/images/services/' . $svc['file'];
						$ver = file_exists( $file_path ) ? filemtime( $file_path ) : '1.0.0';
						$svc['img'] = get_stylesheet_directory_uri() . '/assets/images/services/' . $svc['file'] . '?v=' . $ver;
						$corp_services[] = $svc;
					}

					foreach ( $corp_services as $svc ) {
						$active_class = $svc['id'] === 1 ? 'services-corp__row--active' : '';
						echo '<div class="services-corp__row ' . esc_attr( $active_class ) . '" data-id="' . esc_attr( $svc['id'] ) . '" data-num="' . esc_attr( $svc['num'] ) . '" data-name="' . esc_attr( $svc['name'] ) . '" data-desc="' . esc_attr( $svc['desc'] ) . '" data-link="' . esc_attr( isset( $svc['link'] ) ? $svc['link'] : '' ) . '" data-img="' . esc_url( $svc['img'] ) . '">';
						echo '<span class="services-corp__row-num">' . esc_html( $svc['num'] ) . '</span>';
						echo '<h3 class="services-corp__row-name">' . wp_kses_post( $svc['name'] ) . '</h3>';
						echo '<span class="services-corp__row-arrow"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7,7 17,7 17,17"></polyline></svg></span>';
						echo '</div>';
					}
					?>
				</div>
				<!-- Detail Panel -->
				<div class="services-corp__detail" data-reveal="right">
					<div class="services-corp__detail-watermark">01</div>
					<div class="services-corp__detail-container">
						<div class="services-corp__detail-label">01 - SERVICIO</div>
						<h3 class="services-corp__detail-title">PR y Gestión de la reputación</h3>
						<p class="services-corp__detail-desc">
							Planificar y ejecutar estrategias de Relaciones Públicas (PR) y gestión de la reputación permite a marcas y empresas influir de manera poderosa en la percepción de distintos públicos. En Orange Latam nos especializamos en la creación de planes que permiten construir una reputación sólida a empresas, productos y/o servicios, a partir de una interacción asertiva con públicos diversos, a todo nivel.
						</p>
						<a href="<?php echo esc_url( home_url( '/pr-gestion-reputacion/' ) ); ?>" class="services-corp__detail-link" data-default-href="<?php echo esc_url( home_url( '/pr-gestion-reputacion/' ) ); ?>">Más información <span>→</span></a>
						<?php
						$default_img_path = get_template_directory() . '/assets/images/services/pr-reputacion.webp';
						$default_img_ver = file_exists( $default_img_path ) ? filemtime( $default_img_path ) : '1.0.0';
						$default_img_url = get_stylesheet_directory_uri() . '/assets/images/services/pr-reputacion.webp?v=' . $default_img_ver;
						?>
						<div class="services-corp__detail-img-box">
							<img class="services-corp__detail-img" src="<?php echo esc_url( $default_img_url ); ?>" alt="PR y Gestión de la reputación" style="width: 100%; height: 324px; object-fit: cover; display: block;">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ==========================================
	     4b. ASUNTOS SENSIBLES BOX GRID SECTION
	     ========================================== -->
	<?php
	$sensible_boxes_data = array(
		array(
			'tag'   => 'Prevención & Contingencia',
			'title' => 'Gestión de Crisis y Problemas',
			'desc'  => 'Metodologías ágiles para identificar, prevenir, contener y mitigar riesgos reputacionales que puedan impactar el valor de marca ante contingencias críticas.',
			'link'  => home_url( '/pr-gestion-reputacion/#gestion-de-crisis' ),
			'theme' => 'sensibles-box--blue',
		),
		array(
			'tag'   => 'Sector Salud & Farma',
			'title' => 'Gestión de Acceso',
			'desc'  => 'Desbloqueo de barreras para que la sociedad acceda a avances médico-científicos de forma ética y oportuna, articulando con reguladores y actores clave.',
			'link'  => home_url( '/gestion-de-acceso/' ),
			'theme' => 'sensibles-box--white',
		),
		array(
			'tag'   => 'Liderazgo & Opinión',
			'title' => 'Comunicación Política',
			'desc'  => 'Estrategias de comunicación y posicionamiento para candidatos, líderes e instituciones públicas que generan legitimidad y respaldo ciudadano real.',
			'link'  => home_url( '/asuntos-publicos/#comunicacion-politica' ),
			'theme' => 'sensibles-box--dark',
		),
		array(
			'tag'   => 'Entorno Regulatorio',
			'title' => 'Asuntos Públicos y Relaciones Institucionales',
			'desc'  => 'Relacionamiento estratégico con administraciones y entes reguladores para anticipar marcos normativos, alinear intereses y mitigar riesgos antes de que escalen.',
			'link'  => home_url( '/asuntos-publicos/' ),
			'theme' => 'sensibles-box--dark',
		),
		array(
			'tag'   => 'Licencia Social',
			'title' => 'Relacionamiento con Stakeholders y Comunidades',
			'desc'  => 'Mapping y planes de relacionamiento de alta influencia con comunidades para garantizar viabilidad operativa, licencia social y sostenibilidad a largo plazo.',
			'link'  => home_url( '/asuntos-publicos/#stakeholders' ),
			'theme' => 'sensibles-box--blue',
		),
		array(
			'tag'   => 'Sector Público',
			'title' => 'Comunicación para Entidades del Estado',
			'desc'  => 'Estrategias de comunicación pública orientadas a construir cercanía, transparencia, respeto y credibilidad sólida de las instituciones ante la ciudadanía.',
			'link'  => home_url( '/asuntos-publicos/' ),
			'theme' => 'sensibles-box--white',
		),
	);
	?>

	<section id="asuntos-sensibles" class="sensibles-grid-section">
		<div class="sensibles-grid-section__container">
			<div class="sensibles-grid-section__header">
				<div class="sensibles-grid-section__header-left">
					<h2 class="sensibles-grid-section__title">
						<span class="sensibles-grid-section__title-line">Asuntos</span> Sensibles
					</h2>
				</div>
				<div class="sensibles-grid-section__header-right">
					<p class="sensibles-grid-section__subtitle">
						Gestión estratégica de situaciones de alta complejidad, reputación crítica, entorno regulatorio y relacionamiento con actores clave en Perú y el mundo.
					</p>
				</div>
			</div>

			<!-- Square Boxes Grid (3x2 Layout with Staggered Scroll Reveal) -->
			<div class="sensibles-box-grid">
				<?php foreach ( $sensible_boxes_data as $index => $box ) : ?>
					<a href="<?php echo esc_url( $box['link'] ); ?>" class="sensibles-box <?php echo esc_attr( $box['theme'] ); ?>">
						<div class="sensibles-box__inner">
							<!-- Top Header Bar with category -->
							<div class="sensibles-box__top">
								<span class="sensibles-box__tag"><?php echo esc_html( $box['tag'] ); ?></span>
							</div>

							<!-- Center Title & Body Content -->
							<div class="sensibles-box__content">
								<h3 class="sensibles-box__title"><?php echo esc_html( $box['title'] ); ?></h3>
								<p class="sensibles-box__desc"><?php echo esc_html( $box['desc'] ); ?></p>
							</div>

							<!-- Bottom Footer Bar with Action -->
							<div class="sensibles-box__bottom">
								<span class="sensibles-box__cta">Conoce más</span>
							</div>
						</div>
					</a>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<!-- ==========================================
	     5. PREMIOS Y FESTIVALES SECTION
	     ========================================== -->
	<section id="premios" class="home-awards">
		<div class="home-awards__container">
			<h1 class="home-awards__title" data-reveal="up">
				Mejor Agencia de Relaciones Públicas<br>
				<span class="home-awards__title-accent">y Gestión de la Reputación</span>
			</h1>

			<div class="home-awards__carousel" data-reveal="up">
				<div class="home-awards__track">
					<?php
					$home_awards = array(
						array( 'name' => 'Purpose Awards', 'image' => 'purpose-awards.webp', 'line1' => 'Purpose Awards', 'line2' => 'Best Use of', 'line3' => 'Celebrity Campaign' ),
						array( 'name' => 'PR Week Global Awards', 'image' => 'pr-week-global-awards.webp', 'line1' => 'PR Week Global Awards', 'line2' => 'Best Influencers', 'line3' => 'Marketing Campaign' ),
						array( 'name' => 'IPRA Golden World Awards', 'image' => 'ipra-golden-world-awards.webp', 'line1' => 'IPRA Golden World Awards', 'line2' => 'Best Influencers', 'line3' => 'Management Campaign' ),
						array( 'name' => 'Sabre Latin America Awards', 'image' => 'sabre-global-world-awards.webp', 'line1' => 'Sabre Latin America Awards', 'line2' => 'Diamond', 'line3' => 'Awards Category' ),
						array( 'name' => 'Sabre Latin America Awards', 'image' => 'sabre-global-world-awards.webp', 'line1' => 'Sabre Latin America Awards', 'line2' => 'Best Influencer', 'line3' => 'Marketing Campaign' ),
						array( 'name' => 'Effie Awards', 'image' => 'effie-awards.webp', 'line1' => 'Effie Awards', 'line2' => 'Mejor Campaña de', 'line3' => 'Marketing de Influencers' ),
						array( 'name' => 'Cannes Lions', 'image' => 'Cannes-Lions-.webp', 'line1' => 'Cannes Lions', 'line2' => 'Best Social &', 'line3' => 'Influencer Campaign' ),
						array( 'name' => 'Sabre Global World Awards', 'image' => 'sabre-global-world-awards.webp', 'line1' => 'Sabre Global World Awards', 'line2' => 'Best Influencer', 'line3' => 'Marketing Campaign' ),
					);
					// Render twice for continuous loop
					for ( $i = 0; $i < 2; $i++ ) :
						foreach ( $home_awards as $award ) :
							?>
							<div class="home-awards__card" <?php echo 0 === $i ? '' : 'aria-hidden="true"'; ?>>
								<div class="home-awards__logo-box">
									<img class="home-awards__logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/awards/<?php echo esc_attr( $award['image'] ); ?>" alt="<?php echo esc_attr( $award['name'] ); ?>" loading="lazy">
								</div>
								<div class="home-awards__name"><?php echo esc_html( strtoupper( $award['line1'] ) ); ?></div>
								<div class="home-awards__desc">
									<?php echo esc_html( strtoupper( $award['line2'] ) ); ?><br>
									<?php echo esc_html( strtoupper( $award['line3'] ) ); ?>
								</div>
							</div>
						<?php endforeach;
					endfor; ?>
				</div>
			</div>
		</div>
	</section>



	<!-- ==========================================
	     6. SECTORES SECTION
	     ========================================== -->
	<section id="sectores" class="sectors">
		<div class="sectors__container">
			<h2 class="sectors__title" data-reveal="up">
				<span class="sectors__title-accent">Sectores</span> que atendemos
			</h2>
			<p class="sectors__subtitle" data-reveal="up">
				Tenemos amplia experiencia atendiendo requerimientos de comunicación para todos los sectores de la actividad económica.
			</p>
			<div class="sectors__grid" data-reveal="up">
				<?php
				$sectors = array(
					'Farmacia y Salud', 'Telcos', 'Retail y Consumo Masivo', 'Infraestructura e Inmobiliaria', 
					'Educación', 'Tecnología', 'Hotelería y Turismo', 'Entretenimiento', 
					'Moda y el Lujo', 'Minería, Energía e Hidrocarburos', 'Gastronomía', 'Maquinaria Pesada', 
					'Asesoría y Consultoría', 'Productos e Insumos Industriales', 'Banca, Finanzas, Seguros', 'Automotriz y Transporte'
				);
				foreach ( $sectors as $sector ) {
					echo '<span class="sectors__badge">' . esc_html( $sector ) . '</span>';
				}
				?>
			</div>
		</div>
	</section>

	<!-- ==========================================
	     7. VOZ DE EXPERTOS SECTION (Split Editorial Layout)
	     ========================================== -->
	<section class="experts" id="noticias">
		<div class="experts__container">
			<div class="experts__layout">
				
				<!-- LADO IZQUIERDO: Encabezado, Descripción, Botón Pill y Controles Minimalistas -->
				<div class="experts__intro">
					<h2 class="experts__title">
						Voz de <span class="experts__title-accent">Expertos</span>
					</h2>
					<p class="experts__subtitle">
						Conoce la opinión de nuestros líderes sobre los principales temas que están dando que hablar en la sociedad y en la industria.
					</p>
					
					<div class="experts__intro-actions">
						<a href="<?php echo esc_url( get_permalink( get_option( 'page_for_posts' ) ) ?: home_url( '/blog/' ) ); ?>" class="experts__cta-pill">
							<span>Ver todas las noticias y opiniones &rarr;</span>
						</a>

						<!-- Minimalist Carousel Controls -->
						<div class="experts__carousel-nav" aria-label="Navegación de noticias">
							<button type="button" class="experts__nav-arrow experts__nav-arrow--prev" aria-label="Noticia anterior">
								<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"></polyline></svg>
							</button>
							<span class="experts__nav-counter" aria-live="polite">
								<span class="experts__nav-counter-current">01</span><span class="experts__nav-counter-sep">/</span><span class="experts__nav-counter-total">06</span>
							</span>
							<button type="button" class="experts__nav-arrow experts__nav-arrow--next" aria-label="Noticia siguiente">
								<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>
							</button>
						</div>
					</div>
				</div>

				<!-- LADO DERECHO: Mini Carousel de Fotos Verticales en Alta Fidelidad -->
				<div class="experts__gallery">
					<?php 
					$expert_posts = orange_latam_get_expert_posts( 6 );
					$fallback_demo_cards = array(
						array(
							'title'     => 'El impacto de la reputación digital en la percepción de marca',
							'permalink' => get_permalink( get_option( 'page_for_posts' ) ) ?: home_url( '/blog/' ),
							'thumbnail' => content_url( '/uploads/2024/11/istockphoto-1906606079-2048x2048_png-1024x717.webp' ),
						),
						array(
							'title'     => 'Gestión de crisis y conflictos sociales en el sector minero',
							'permalink' => get_permalink( get_option( 'page_for_posts' ) ) ?: home_url( '/blog/' ),
							'thumbnail' => content_url( '/uploads/2026/06/protesta-comunidades-mineria-peru-conflicto-social-1024x538.webp' ),
						),
						array(
							'title'     => 'Compliance y transparencia empresarial ante investigaciones',
							'permalink' => get_permalink( get_option( 'page_for_posts' ) ) ?: home_url( '/blog/' ),
							'thumbnail' => content_url( '/uploads/2026/06/Crisis-Empresarial-Reputacion-Corporativa-Corrupcion-Compliance-Transparencia-1024x683.webp' ),
						),
						array(
							'title'     => 'Estrategias de comunicación política en la era de la hiperpolarización',
							'permalink' => get_permalink( get_option( 'page_for_posts' ) ) ?: home_url( '/blog/' ),
							'thumbnail' => content_url( '/uploads/2024/03/Comunicacion-politica-en-panales-1024x577.webp' ),
						),
						array(
							'title'     => 'Relacionamiento con comunidades: construyendo puentes y confianza mutua',
							'permalink' => get_permalink( get_option( 'page_for_posts' ) ) ?: home_url( '/blog/' ),
							'thumbnail' => content_url( '/uploads/2026/06/protesta-comunidades-mineria-peru-conflicto-social-1024x538.webp' ),
						),
						array(
							'title'     => 'Liderazgo y comunicación institucional ante escenarios de incertidumbre',
							'permalink' => get_permalink( get_option( 'page_for_posts' ) ) ?: home_url( '/blog/' ),
							'thumbnail' => content_url( '/uploads/2024/11/istockphoto-1906606079-2048x2048_png-1024x717.webp' ),
						),
					);
					$cards_to_show = ! empty( $expert_posts ) ? $expert_posts : $fallback_demo_cards;
					?>
					
					<div class="experts__carousel-viewport">
						<div class="experts__cards-track">
							<?php foreach ( $cards_to_show as $idx => $card ) : 
								$card_link = ! empty( $card['permalink'] ) ? $card['permalink'] : ( get_permalink( get_option( 'page_for_posts' ) ) ?: home_url( '/blog/' ) );
								$card_thumb = ! empty( $card['thumbnail'] ) ? $card['thumbnail'] : ( isset( $fallback_demo_cards[$idx] ) ? $fallback_demo_cards[$idx]['thumbnail'] : '' );
								$card_title = ! empty( $card['title'] ) ? $card['title'] : ( isset( $fallback_demo_cards[$idx] ) ? $fallback_demo_cards[$idx]['title'] : 'Noticia destacada' );
							?>
								<article class="experts__card" data-card-idx="<?php echo esc_attr( $idx ); ?>">
									<a href="<?php echo esc_url( $card_link ); ?>" class="experts__card-link">
										<div class="experts__card-media">
											<?php if ( ! empty( $card_thumb ) ) : ?>
												<img src="<?php echo esc_url( $card_thumb ); ?>" alt="<?php echo esc_attr( $card_title ); ?>" class="experts__card-img" loading="lazy">
											<?php else : ?>
												<div class="experts__card-placeholder">
													<span>Orange Latam</span>
												</div>
											<?php endif; ?>
											<div class="experts__card-overlay">
												<h3 class="experts__card-news-title"><?php echo esc_html( $card_title ); ?></h3>
											</div>
										</div>
									</a>
								</article>
							<?php endforeach; ?>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>

	<!-- ==========================================
	     7b. PREGUNTAS FRECUENTES (FAQ) SECTION
	     ========================================== -->
	<section class="faq" id="preguntas-frecuentes">
		<div class="faq__container">
			<h2 class="faq__title" data-reveal="up">Preguntas frecuentes</h2>
			<div class="faq__accordion" data-reveal="up">
				<div class="faq__item">
					<button class="faq__trigger" aria-expanded="false">
						<span class="faq__icon">+</span>
						<span class="faq__question">¿Qué es una agencia de relaciones públicas?</span>
					</button>
					<div class="faq__content">
						<div class="faq__inner">
							<p>Una agencia de relaciones públicas es una empresa especializada en la gestión de la comunicación y la imagen de una organización o marca ante sus diferentes públicos, como clientes, medios de comunicación, empleados, inversores y la sociedad en general. Su objetivo principal es construir, mantener y fortalecer la reputación de la entidad que representa, así como gestionar eficazmente la percepción pública de sus productos, servicios y acciones.</p>
						</div>
					</div>
				</div>
				<div class="faq__item">
					<button class="faq__trigger" aria-expanded="false">
						<span class="faq__icon">+</span>
						<span class="faq__question">¿Qué hace una agencia de relaciones públicas?</span>
					</button>
					<div class="faq__content">
						<div class="faq__inner">
							<p>Las agencias de relaciones públicas ofrecen una amplia gama de servicios que pueden incluir estrategias de comunicación, relaciones con los medios, gestión de crisis, organización de eventos, creación de contenido, monitoreo de medios, análisis de la percepción de la marca y relaciones con los stakeholders clave. Utilizan diversas herramientas y técnicas para difundir mensajes positivos, gestionar situaciones adversas y promover la interacción positiva entre la organización y su entorno.</p>
						</div>
					</div>
				</div>
				<div class="faq__item">
					<button class="faq__trigger" aria-expanded="false">
						<span class="faq__icon">+</span>
						<span class="faq__question">¿Qué es una agencia de comunicación?</span>
					</button>
					<div class="faq__content">
						<div class="faq__inner">
							<p>Una agencia de comunicación es una empresa especializada en proporcionar servicios integrales de comunicación para sus clientes, con el fin de ayudarles a establecer, mantener y fortalecer su presencia y reputación en el mercado. Estas agencias se dedican a planificar, desarrollar y ejecutar estrategias de comunicación efectivas que abarcan diversos canales y medios para alcanzar los objetivos de sus clientes.</p>
							<p>Las agencias de comunicación ofrecen una amplia gama de servicios que pueden incluir relaciones públicas, marketing digital, gestión de redes sociales, publicidad, creación de contenido, branding, organización de eventos, diseño gráfico y desarrollo web, entre otros. Su objetivo es garantizar una comunicación coherente y efectiva que resuene con la audiencia de sus clientes y contribuya al éxito de sus negocios.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ==========================================
	     8. CONTACTO SECTION
	     ========================================== -->
	<section id="contacto" class="contact">
		<div class="contact__grid">
			<div data-reveal="left">
				<h2 class="contact__title">CONTÁCTANOS</h2>
				<p class="contact__subtitle">Descubre cómo podemos hacer que tu marca sea aún más grande</p>
				<div class="contact__info-list">
					<div class="contact__info-item">
						<span class="contact__info-bullet"></span>
						<span class="contact__info-text">Centro Empresarial Abril</span>
					</div>
					<div class="contact__info-item">
						<span class="contact__info-bullet"></span>
						<span class="contact__info-text">Calle Enrique Palacios 360 Of. 301 Lima 18 - Perú</span>
					</div>
					<div class="contact__info-item">
						<span class="contact__info-bullet"></span>
						<span class="contact__info-text">
							<a href="tel:+51993595232">(+51) 993 595 232</a>
						</span>
					</div>
					<div class="contact__info-item">
						<span class="contact__info-bullet"></span>
						<span class="contact__info-text">
							<a href="mailto:negocios@orange-la.com">negocios@orange-la.com</a>
						</span>
					</div>
				</div>
				
				<div class="contact__socials">
					<a href="https://www.facebook.com/Orange360Latam?locale=es_LA" target="_blank" class="contact__social-link" aria-label="Facebook">
						<svg viewBox="0 0 24 24"><path d="M22 12a10 10 0 1 0-11.6 9.9v-7H7.9V12h2.5V9.8c0-2.5 1.5-3.9 3.8-3.9 1.1 0 2.2.2 2.2.2v2.5h-1.2c-1.2 0-1.6.8-1.6 1.6V12h2.8l-.4 2.9h-2.4v7A10 10 0 0 0 22 12z"></path></svg>
					</a>
					<a href="https://www.youtube.com/@orange_latam" target="_blank" class="contact__social-link" aria-label="Youtube">
						<svg viewBox="0 0 24 24"><path d="M23.5 6.2s-.2-1.6-.9-2.4c-.9-1-1.9-1-2.4-1.1C16.9 2.5 12 2.5 12 2.5s-4.9 0-8.2.2c-.5 0-1.5.1-2.4 1-.7.8-.9 2.4-.9 2.4S.3 8.1.3 10v1.9c0 1.9.2 3.8.2 3.8s.2 1.6.9 2.4c.9 1 2.1.9 2.6 1 1.9.2 8 .2 8 .2s4.9 0 8.2-.2c.5-.1 1.5-.1 2.4-1 .7-.8.9-2.4.9-2.4s.2-1.9.2-3.8V10c0-1.9-.2-3.8-.2-3.8zM9.6 14.4V7.6l6.5 3.4-6.5 3.4z"></path></svg>
					</a>
					<a href="https://pe.linkedin.com/company/orangelatam" target="_blank" class="contact__social-link" aria-label="LinkedIn">
						<svg viewBox="0 0 24 24"><path d="M4.98 3.5C4.98 4.9 3.87 6 2.5 6S0 4.9 0 3.5 1.12 1 2.5 1s2.48 1.1 2.48 2.5zM.2 8.24h4.6V23H.2V8.24zM8.4 8.24h4.4v2h.06c.6-1.1 2.1-2.3 4.3-2.3 4.6 0 5.5 3 5.5 6.9V23h-4.6v-6.9c0-1.6 0-3.7-2.3-3.7-2.3 0-2.6 1.8-2.6 3.6V23H8.4V8.24z"></path></svg>
					</a>
					<a href="https://www.instagram.com/orange_latam/" target="_blank" class="contact__social-link" aria-label="Instagram">
						<svg viewBox="0 0 24 24"><path d="M12 2.2c3.2 0 3.6 0 4.9.07 3.3.15 4.8 1.7 5 5 .06 1.3.07 1.6.07 4.8s0 3.5-.07 4.8c-.15 3.3-1.7 4.8-5 5-1.3.06-1.6.07-4.9.07s-3.6 0-4.9-.07c-3.3-.15-4.8-1.7-5-5C2.04 15.6 2 15.3 2 12s0-3.5.07-4.8c.15-3.3 1.7-4.85 5-5C8.4 2.24 8.8 2.2 12 2.2zm0 1.8c-3.1 0-3.5 0-4.7.07-2.4.1-3.6 1.3-3.7 3.7C3.5 8.9 3.5 9.3 3.5 12s0 3.1.07 4.3c.1 2.4 1.3 3.6 3.7 3.7 1.2.06 1.6.07 4.7.07s3.5 0 4.7-.07c2.4-.1 3.6-1.3 3.7-3.7.06-1.2.07-1.6.07-4.3s0-3.1-.07-4.3c-.1-2.4-1.3-3.6-3.7-3.7C15.5 4 15.1 4 12 4zm0 3.4a4.6 4.6 0 1 1 0 9.2 4.6 4.6 0 0 1 0-9.2zm0 1.8a2.8 2.8 0 1 0 0 5.6 2.8 2.8 0 0 0 0-5.6zm5.9-2a1.08 1.08 0 1 1-2.15 0 1.08 1.08 0 0 1 2.15 0z"></path></svg>
					</a>
					<a href="https://www.tiktok.com/@orange_latam_studio" target="_blank" class="contact__social-link" aria-label="TikTok">
						<svg viewBox="0 0 24 24"><path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-2.88 2.89 2.89 2.89 0 0 1-2.89-2.89 2.89 2.89 0 0 1 2.89-2.89c.32 0 .62.05.91.13v-3.52a6.37 6.37 0 0 0-.91-.07 6.34 6.34 0 0 0-6.34 6.34 6.34 6.34 0 0 0 6.34-6.34V8.75a8.16 8.16 0 0 0 4.76 1.5V6.8a4.86 4.86 0 0 1-1-.11z"></path></svg>
					</a>
				</div>
				<a href="<?php echo esc_url( home_url( '/politica-de-privacidad/' ) ); ?>" target="_blank" rel="noopener" class="contact__privacy-link">Política de privacidad y cookies</a>
			</div>

			<!-- Contact Form Card -->
			<div class="contact__form-card" data-reveal="right">
				<div class="contact__form-accent-bar"></div>
				<form action="#" method="post" class="contact__form-body" id="home-contact-form">
					<?php wp_nonce_field( 'orange_contact_nonce', 'contact_security' ); ?>
					<input type="hidden" name="action" value="send_service_contact">
					<input type="hidden" name="service_origin" value="Home — Contacto General">
					<input type="hidden" name="page_url" value="<?php echo esc_url( home_url( '/' ) ); ?>">
					<input type="hidden" name="contact_ts" value="<?php echo esc_attr( time() ); ?>">
					<div class="orange-hp-field" aria-hidden="true">
						<label for="home-contact-website">Website</label>
						<input type="text" id="home-contact-website" name="contact_website" tabindex="-1" autocomplete="off">
					</div>
					<div class="contact__form-row">
						<div class="contact__form-group">
							<label for="contact-name" class="contact__form-label">Nombre y Apellido *</label>
							<input type="text" id="contact-name" name="contact_name" placeholder="Ej. Carlos Mendoza" class="contact__form-input" required>
						</div>
						<div class="contact__form-group">
							<label for="contact-email" class="contact__form-label">Correo Corporativo *</label>
							<input type="email" id="contact-email" name="contact_email" placeholder="ejemplo@empresa.com" class="contact__form-input" required>
						</div>
					</div>
					<div class="contact__form-row">
						<div class="contact__form-group">
							<label for="contact-phone" class="contact__form-label">Teléfono / WhatsApp *</label>
							<input type="tel" id="contact-phone" name="contact_phone" placeholder="+51 987 654 321" class="contact__form-input" required>
						</div>
						<div class="contact__form-group">
							<label for="contact-company" class="contact__form-label">Empresa / Organización</label>
							<input type="text" id="contact-company" name="contact_company" placeholder="Nombre de tu empresa" class="contact__form-input">
						</div>
					</div>
					<div class="contact__form-group contact__form-group--textarea">
						<label for="contact-message" class="contact__form-label">¿En qué podemos ayudarte? *</label>
						<textarea id="contact-message" name="contact_message" rows="4" class="contact__form-textarea" placeholder="Describe brevemente tus objetivos, tiempos o necesidades del proyecto..." required></textarea>
					</div>
					<div class="contact__form-response" id="home-contact-response" style="display:none;margin-bottom:14px;font-size:13.5px;font-weight:600;padding:10px 14px;border-radius:4px;"></div>
					<button type="submit" class="contact__form-submit" id="home-contact-submit">Enviar mensaje</button>
				</form>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
