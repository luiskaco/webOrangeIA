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
					<h1 style="font-family: var(--font-display); font-size: clamp(32px, 5vw, 64px); font-weight: 900; margin-bottom: 12px; color: var(--color-bg-light);">
						Líderes en Reputación
					</h1>
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
					<h1 style="font-family: var(--font-display); font-size: clamp(32px, 5vw, 64px); font-weight: 900; margin-bottom: 12px; color: var(--color-bg-light);">
						Impulsamos tu Marca
					</h1>
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
					<h1 style="font-family: var(--font-display); font-size: clamp(32px, 5vw, 64px); font-weight: 900; margin-bottom: 12px; color: var(--color-bg-light);">
						Excelencia y Creatividad
					</h1>
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
			<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#FCF5E9" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="15,18 9,12 15,6"></polyline></svg>
		</button>
		<button class="hero__arrow hero__arrow--next" aria-label="Siguiente slide">
			<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#FCF5E9" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="9,18 15,12 9,6"></polyline></svg>
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
			<div class="about__title" data-reveal="up">Nosotros</div>
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
						<div class="about__section-title">Misión</div>
						<p class="about__section-text">
							Somos el partner estratégico que ayuda a las empresas a <strong>lograr el mayor crecimiento</strong> mediante planes de comunicación creativos e innovadores, que aportan alto valor a todo tipo de negocios, organizaciones e instituciones, privadas y públicas.
						</p>
					</div>
					<div class="about__section">
						<div class="about__section-title">Visión</div>
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
						COMUNICACIÓN<br>ESTRATÉGICA
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
					$corp_services = array(
						array( 'id' => 1, 'num' => '01', 'name' => 'PR y Gestión de la reputación', 'desc' => 'Planificar y ejecutar estrategias de Relaciones Públicas (PR) y gestión de la reputación permite a marcas y empresas influir de manera poderosa en la percepción de distintos públicos. En Orange Latam nos especializamos en la creación de planes que permiten construir una reputación sólida a empresas, productos y/o servicios, a partir de una interacción asertiva con públicos diversos, a todo nivel.', 'img' => get_stylesheet_directory_uri() . '/assets/images/services/pr-reputacion.png' ),
						array( 'id' => 2, 'num' => '02', 'name' => 'Marketing de Influencers', 'desc' => 'Conectamos marcas con líderes de opinión altamente relevantes para campañas de máximo alcance, impacto y retorno de inversión medible en cada plataforma digital.', 'link' => home_url( '/marketing-de-influencers/' ), 'img' => get_stylesheet_directory_uri() . '/assets/images/services/marketing-influencers.png' ),
						array( 'id' => 3, 'num' => '03', 'name' => 'Digital y Social Media', 'desc' => 'Gestión estratégica de presencia digital, comunidades online y creación de contenido en todos los canales relevantes para tu audiencia.', 'link' => home_url( '/marketing-digital/' ), 'img' => get_stylesheet_directory_uri() . '/assets/images/services/digital-social-media.png' ),
						array( 'id' => 4, 'num' => '04', 'name' => 'Producción Audiovisual Orange Studio', 'desc' => 'Producción de video, fotografía y animación de primer nivel para todas las plataformas y formatos del ecosistema digital y tradicional.', 'img' => get_stylesheet_directory_uri() . '/assets/images/services/produccion-audiovisual.png' ),
						array( 'id' => 5, 'num' => '05', 'name' => 'Creatividad y Dirección de Arte', 'desc' => 'El diferencial creativo que hace que tu comunicación se destaque y genere el impacto deseado en el público objetivo.', 'img' => get_stylesheet_directory_uri() . '/assets/images/services/creatividad-arte.png' ),
						array( 'id' => 6, 'num' => '06', 'name' => 'Branding', 'desc' => 'De naming a consolidación: creamos y posicionamos marcas memorables y deseadas en mercados nacionales e internacionales.', 'img' => get_stylesheet_directory_uri() . '/assets/images/services/branding.png' ),
						array( 'id' => 7, 'num' => '07', 'name' => 'Estratégias ATL', 'desc' => 'Campañas de alto alcance con planificación de medios, segmentación de audiencias y ejecución integrada con el mejor ROI del mercado.', 'img' => get_stylesheet_directory_uri() . '/assets/images/services/estrategias-atl.png' ),
						array( 'id' => 8, 'num' => '08', 'name' => 'Eventos y Activaciones Presenciales', 'desc' => 'Experiencias presenciales, remotas e híbridas de primer nivel que conectan con el público de manera poderosa y memorable.', 'img' => get_stylesheet_directory_uri() . '/assets/images/services/eventos-presenciales.png' ),
						array( 'id' => 9, 'num' => '09', 'name' => 'Entrenamiento de Voceros', 'desc' => 'Preparamos líderes para comunicar con autoridad y credibilidad ante medios, inversores y audiencias clave en cualquier escenario.', 'img' => get_stylesheet_directory_uri() . '/assets/images/services/entrenamiento-voceros.png' ),
						array( 'id' => 10, 'num' => '10', 'name' => 'SEO / SEM', 'desc' => 'Optimizamos la presencia digital con estrategias de búsqueda integradas a los objetivos comerciales e institucionales de la marca.', 'img' => get_stylesheet_directory_uri() . '/assets/images/services/seo-sem.png' ),
						array( 'id' => 11, 'num' => '11', 'name' => 'Web site / Landing UX Criteria', 'desc' => 'Diseñamos experiencias digitales que convierten, con navegación intuitiva, visual atractivo y arquitectura de información óptima.', 'img' => get_stylesheet_directory_uri() . '/assets/images/services/website-ux.png' ),
						array( 'id' => 12, 'num' => '12', 'name' => 'E-Commerce', 'desc' => 'Plataformas y estrategias digitales completas para potenciar ventas, captación de leads y fidelización de clientes.', 'img' => get_stylesheet_directory_uri() . '/assets/images/services/ecommerce.png' ),
					);

					foreach ( $corp_services as $svc ) {
						$active_class = $svc['id'] === 1 ? 'services-corp__row--active' : '';
						echo '<div class="services-corp__row ' . esc_attr( $active_class ) . '" data-id="' . esc_attr( $svc['id'] ) . '" data-num="' . esc_attr( $svc['num'] ) . '" data-name="' . esc_attr( $svc['name'] ) . '" data-desc="' . esc_attr( $svc['desc'] ) . '" data-link="' . esc_attr( isset( $svc['link'] ) ? $svc['link'] : '' ) . '" data-img="' . esc_url( $svc['img'] ) . '">';
						echo '<span class="services-corp__row-num">' . esc_html( $svc['num'] ) . '</span>';
						echo '<span class="services-corp__row-name">' . esc_html( $svc['name'] ) . '</span>';
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
						<h3 class="services-corp__detail-title">PR Y GESTIÓN DE LA REPUTACIÓN</h3>
						<p class="services-corp__detail-desc">
							Planificar y ejecutar estrategias de Relaciones Públicas (PR) y gestión de la reputación permite a marcas y empresas influir de manera poderosa en la percepción de distintos públicos. En Orange Latam nos especializamos en la creación de planes que permiten construir una reputación sólida a empresas, productos y/o servicios, a partir de una interacción asertiva con públicos diversos, a todo nivel.
						</p>
						<a href="#contacto" class="services-corp__detail-link" data-default-href="#contacto">Más información <span>→</span></a>
						<div class="services-corp__detail-img-box">
							<img class="services-corp__detail-img" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/services/pr-reputacion.png' ); ?>" alt="PR y Gestión de la reputación" style="width: 100%; height: 324px; object-fit: cover; display: block;">
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Asuntos Sensibles Subsections -->
		<div class="services-sens">
			<div class="services-sens__watermark">
				<span class="services-sens__watermark-text">ASUNTOS<br>SENSIBLES</span>
			</div>
			<div class="services-sens__card-container" data-reveal="scale">
				<div class="services-sens__card">
					<div class="services-sens__card-header">
						<span class="services-sens__card-header-tag">Trabajemos Juntos</span>
						<span class="services-sens__card-header-year">2026</span>
					</div>
					<div class="services-sens__card-body">
						<h3 class="services-sens__card-title">GESTIÓN DE CRISIS Y PROBLEMAS</h3>
						<p class="services-sens__card-desc">
							El valor de marca es un activo muy importante para las empresas y protegerlo del impacto de crisis y problemas que impactan en la reputación es una de las especialidades de Orange Latam. Nuestro equipo de la unidad C&P se encuentra altamente capacitado para identificar, prevenir, gestionar y mitigar crisis y problemas, aplicando metodologías innovadoras, ágiles y eficaces.
						</p>
					</div>
				</div>
			</div>
			<div class="services-sens__controls">
				<button class="services-sens__arrow services-sens__arrow--prev" aria-label="Servicio sensible anterior">‹</button>
				<div class="services-sens__dots"></div>
				<button class="services-sens__arrow services-sens__arrow--next" aria-label="Servicio sensible siguiente">›</button>
			</div>
		</div>
	</section>

	<!-- ==========================================
	     5. PREMIOS Y FESTIVALES SECTION
	     ========================================== -->
	<section id="premios" class="home-awards">
		<div class="home-awards__container">
			<h2 class="home-awards__title" data-reveal="up">
				MEJOR AGENCIA DE RELACIONES PÚBLICAS<br>
				<span class="home-awards__title-accent">Y GESTIÓN DE LA REPUTACIÓN</span>
			</h2>

			<div class="home-awards__carousel" data-reveal="up">
				<div class="home-awards__track">
					<?php
					$home_awards = array(
						array( 'name' => 'Purpose Awards', 'image' => 'Purpose-Awards.webp', 'line1' => 'Purpose Awards', 'line2' => 'Best Use of', 'line3' => 'Celebrity Campaign' ),
						array( 'name' => 'PR Week Global Awards', 'image' => 'PR-Week-Global-Awards.webp', 'line1' => 'PR Week Global Awards', 'line2' => 'Best Influencers', 'line3' => 'Marketing Campaign' ),
						array( 'name' => 'IPRA Golden World Awards', 'image' => 'IPRA-Golden-World-Awards.png', 'line1' => 'IPRA Golden World Awards', 'line2' => 'Best Influencers', 'line3' => 'Management Campaign' ),
						array( 'name' => 'Sabre Latin America Awards', 'image' => 'Sabre-Global-World-Awards.png', 'line1' => 'Sabre Latin America Awards', 'line2' => 'Diamond', 'line3' => 'Awards Category' ),
						array( 'name' => 'Sabre Latin America Awards', 'image' => 'Sabre-Global-World-Awards.png', 'line1' => 'Sabre Latin America Awards', 'line2' => 'Best Influencer', 'line3' => 'Marketing Campaign' ),
						array( 'name' => 'Effie Awards', 'image' => 'Effie-Awards.png', 'line1' => 'Effie Awards', 'line2' => 'Mejor Campaña de', 'line3' => 'Marketing de Influencers' ),
						array( 'name' => 'Cannes Lions', 'image' => 'Cannes-Lions-.webp', 'line1' => 'Cannes Lions', 'line2' => 'Best Social &', 'line3' => 'Influencer Campaign' ),
						array( 'name' => 'Sabre Global World Awards', 'image' => 'Sabre-Global-World-Awards.png', 'line1' => 'Sabre Global World Awards', 'line2' => 'Best Influencer', 'line3' => 'Marketing Campaign' ),
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
				<span class="sectors__title-accent">SECTORES</span> QUE ATENDEMOS
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
	     7. VOZ DE EXPERTOS SECTION
	     ========================================== -->
	<section class="experts">
		<div class="experts__container">
			<h2 class="experts__title" data-reveal="up">VOZ DE EXPERTOS</h2>
			<p class="experts__subtitle" data-reveal="up">
				Conoce la opinión de nuestros líderes sobre los principales temas que están dando que hablar en la sociedad y en la industria.
			</p>
			<?php $expert_posts = orange_latam_get_expert_posts(); ?>
			<div class="experts__grid" data-stagger>
				<?php if ( ! empty( $expert_posts ) ) : ?>
					<?php foreach ( array_slice( $expert_posts, 0, 3 ) as $ep ) : ?>
						<a href="<?php echo esc_url( $ep['permalink'] ); ?>" class="experts__card" data-id="<?php echo esc_attr( $ep['id'] ); ?>">
							<div class="experts__card-img-box">
								<?php if ( $ep['thumbnail'] ) : ?>
									<img class="experts__card-img" src="<?php echo esc_url( $ep['thumbnail'] ); ?>" alt="<?php echo esc_attr( $ep['title'] ); ?>">
								<?php else : ?>
									<div class="experts__card-img-placeholder">Foto de la nota</div>
								<?php endif; ?>
							</div>
							<div class="experts__card-footer">
								<div class="experts__card-author"><?php echo esc_html( $ep['title'] ); ?></div>
								<div class="experts__card-role"><?php echo esc_html( $ep['date'] ); ?> · Por <?php echo esc_html( $ep['author'] ); ?></div>
							</div>
						</a>
					<?php endforeach; ?>
				<?php else : ?>
					<div class="experts__card-empty">Aún no hay publicaciones. ¡Vuelve pronto!</div>
				<?php endif; ?>
				<!-- Special Link Card -->
				<a href="<?php echo esc_url( get_permalink( get_option( 'page_for_posts' ) ) ); ?>" class="experts__special-card">
					<span class="experts__special-arrow">→</span>
					<span class="experts__special-title">Ver todas las noticias<br>y opiniones</span>
					<span class="experts__special-label">BLOG DE ORANGE LATAM</span>
				</a>
			</div>
			<!-- Carousel controls -->
			<div class="experts__controls">
				<button class="experts__arrow experts__arrow--prev" aria-label="Notas anteriores">‹</button>
				<div class="experts__dots"></div>
				<button class="experts__arrow experts__arrow--next" aria-label="Notas siguientes">›</button>
			</div>
		</div>
	</section>

	<!-- ==========================================
	     7b. PREGUNTAS FRECUENTES (FAQ) SECTION
	     ========================================== -->
	<section class="faq" id="preguntas-frecuentes">
		<div class="faq__container">
			<h2 class="faq__title" data-reveal="up">PREGUNTAS FRECUENTES</h2>
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
				<p class="contact__subtitle">Descubre cómo podemos hacer tu marca aún más grande</p>
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
					<a href="https://www.facebook.com" target="_blank" class="contact__social-link" aria-label="Facebook">
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
				</div>
				<a href="#" class="contact__privacy-link">Política de privacidad y cookies</a>
			</div>

			<!-- Contact Form Card -->
			<div class="contact__form-card" data-reveal="right">
				<div class="contact__form-accent-bar"></div>
				<form action="#" method="post" class="contact__form-body">
					<div class="contact__form-row">
						<div class="contact__form-group">
							<label for="contact-name" class="contact__form-label">Nombres</label>
							<input type="text" id="contact-name" name="name" placeholder="Tu nombre" class="contact__form-input" required>
						</div>
						<div class="contact__form-group">
							<label for="contact-lastname" class="contact__form-label">Apellidos</label>
							<input type="text" id="contact-lastname" name="lastname" placeholder="Tu apellido" class="contact__form-input" required>
						</div>
					</div>
					<div class="contact__form-row">
						<div class="contact__form-group">
							<label for="contact-email" class="contact__form-label">Email</label>
							<input type="email" id="contact-email" name="email" placeholder="Tu email" class="contact__form-input" required>
						</div>
						<div class="contact__form-group">
							<label for="contact-phone" class="contact__form-label">Teléfono</label>
							<input type="tel" id="contact-phone" name="phone" placeholder="Tu teléfono" class="contact__form-input">
						</div>
					</div>
					<div style="margin-bottom: 24px;">
						<label for="contact-message" class="contact__form-label">Mensaje</label>
						<textarea id="contact-message" name="message" rows="4" placeholder="Tu mensaje" class="contact__form-textarea" required></textarea>
					</div>
					<button type="submit" class="contact__form-submit">Enviar mensaje</button>
				</form>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
