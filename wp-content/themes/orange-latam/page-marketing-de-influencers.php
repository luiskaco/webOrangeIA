<?php
/**
 * Template Name: Marketing de Influencers
 * Page template for the "Marketing de Influencers" service page.
 * Slug: marketing-de-influencers
 *
 * @package Orange_Latam
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>

<main class="infl">

	<!-- ==========================================
	     1. HERO
	     ========================================== -->
	<section class="infl-hero" id="inicio">
		<video class="infl-hero__video-bg" autoplay muted loop playsinline preload="auto">
			<source src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/videos/marketing-de-influencers-hero.mp4" type="video/mp4">
		</video>
		<div class="infl-hero__vignette"></div>
	</section>

	<!-- ==========================================
	     1b. AGENCIA + PREMIOS (CARRUSEL)
	     ========================================== -->
	<section class="infl-awards">
		<div class="infl-awards__container">
			<h2 class="infl-awards__title" data-reveal="up">
				Somos la mejor agencia de<br>
				<span class="infl-awards__title-accent">Marketing de Influencers del Perú</span>
			</h2>
			<div class="infl-awards__pill" data-reveal="up">Marketing de Influencers: agencia especializada en Perú</div>

			<div class="infl-awards__carousel" data-reveal="up">
				<div class="infl-awards__track">
					<?php
					$influencer_awards = array(
						array( 'name' => 'Sabre Global World Awards', 'image' => 'sabre-global-world-awards.png', 'line1' => 'Best Influencer', 'line2' => 'Marketing Campaign' ),
						array( 'name' => 'Sabre Latin America Awards', 'image' => 'sabre-global-world-awards.png', 'line1' => 'Diamond', 'line2' => 'Awards Category' ),
						array( 'name' => 'Sabre Latin America Awards', 'image' => 'sabre-global-world-awards.png', 'line1' => 'Best Influencer', 'line2' => 'Marketing Campaign' ),
						array( 'name' => 'Effie Awards', 'image' => 'effie-awards.png', 'line1' => 'Mejor Campaña de', 'line2' => 'Marketing de Influencers' ),
						array( 'name' => 'Purpose Awards', 'image' => 'purpose-awards.webp', 'line1' => 'Best Use of', 'line2' => 'Celebrity Campaign' ),
						array( 'name' => 'PR Week Global Awards', 'image' => 'pr-week-global-awards.webp', 'line1' => 'Best Influencers', 'line2' => 'Marketing Campaign' ),
						array( 'name' => 'IPRA Golden World Awards', 'image' => 'ipra-golden-world-awards.png', 'line1' => 'Best Influencers', 'line2' => 'Management Campaign' ),
						array( 'name' => 'Cannes Lions', 'image' => 'cannes-lions.webp', 'line1' => 'Best Social &', 'line2' => 'Influencer Campaign' ),
					);
					// Rendered twice back-to-back so the CSS animation can loop seamlessly at -50%.
					for ( $i = 0; $i < 2; $i++ ) :
						foreach ( $influencer_awards as $award ) :
							?>
							<div class="infl-awards__card" <?php echo 0 === $i ? '' : 'aria-hidden="true"'; ?>>
								<div class="infl-awards__logo-box">
									<img class="infl-awards__logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/awards/<?php echo esc_attr( $award['image'] ); ?>" alt="<?php echo esc_attr( $award['name'] ); ?>" loading="lazy">
								</div>
								<div class="infl-awards__name"><?php echo esc_html( strtoupper( $award['name'] ) ); ?></div>
								<div class="infl-awards__desc">
									<?php echo esc_html( strtoupper( $award['line1'] ) ); ?><br>
									<?php echo esc_html( strtoupper( $award['line2'] ) ); ?>
								</div>
							</div>
						<?php endforeach;
					endfor; ?>
				</div>
			</div>
		</div>
	</section>

	<!-- ==========================================
	     1c. ESTADÍSTICA + FOTO/CITA
	     ========================================== -->
	<section class="infl-stat-block">
		<div class="infl-stat-block__container">
			<div class="infl-stat-block__stats" data-reveal="up">
				<div class="infl-stat-block__label">
					Durante el <strong>2025</strong><br>
					trabajamos con
				</div>
				<div class="infl-stat-block__value">
					<span class="infl-stat-block__number" data-target="1800" data-prefix="+">+1,800</span>
					<span class="infl-stat-block__suffix">Influencers</span>
				</div>
			</div>

			<div class="infl-stat-block__media" data-reveal="scale">
				<img class="infl-stat-block__img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/marketing-de-influencers-contenido.webp" alt="Creación de contenido con influencer">
				<div class="infl-stat-block__bubble">
					El <strong>marketing de influencers</strong> se ha convertido en la estrategia de marketing digital más efectiva de 2025. Como agencia especializada en influencer marketing en Perú, transformamos la conexión entre marcas e influencers en resultados medibles, campañas exitosas y retorno de inversión comprobado.
				</div>
			</div>
		</div>
	</section>

	<!-- ==========================================
	     2. VENTAJAS DEL MARKETING DE INFLUENCERS
	     ========================================== -->
	<section class="infl-advantages">
		<div class="infl-advantages__container">
			<h2 class="infl-advantages__title" data-reveal="up">Ventajas del<br> <span class="infl-advantages__title-accent">Marketing de Influencers</span></h2>

			<div class="infl-advantages__slider-wrapper" data-reveal="up">
				<button type="button" class="infl-advantages__arrow infl-advantages__arrow--prev" aria-label="Anterior">
					<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
				</button>

				<div class="infl-advantages__slider-container">
					<div class="infl-advantages__track">
						<div class="infl-advantages__card infl-advantages__card--blue active" data-index="0">
							<h3 class="infl-advantages__card-title">Mayor<br>Credibilidad</h3>
							<p class="infl-advantages__card-desc">Los influencers han construido confianza con sus audiencias</p>
						</div>
						<div class="infl-advantages__card infl-advantages__card--grey" data-index="1">
							<h3 class="infl-advantages__card-title">Targeting<br>Preciso</h3>
							<p class="infl-advantages__card-desc">Acceso directo a nichos específicos y audiencias cualificadas</p>
						</div>
						<div class="infl-advantages__card infl-advantages__card--blue" data-index="2">
							<h3 class="infl-advantages__card-title">Contenido<br>Auténtico</h3>
							<p class="infl-advantages__card-desc">Mensajes que no se sienten como publicidad tradicional</p>
						</div>
						<div class="infl-advantages__card infl-advantages__card--grey" data-index="3">
							<h3 class="infl-advantages__card-title">Campañas<br>Escalables</h3>
							<p class="infl-advantages__card-desc">Capacidad para expandir tu alcance y engagement progresivamente</p>
						</div>
					</div>
				</div>

				<button type="button" class="infl-advantages__arrow infl-advantages__arrow--next" aria-label="Siguiente">
					<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
				</button>
			</div>

			<div class="infl-advantages__bottom-panel" data-reveal="up">
				<div class="infl-advantages__bottom-img-box">
					<img class="infl-advantages__bottom-img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/Beneficios-del-influencer-marketing-Estadisticas-Orange-LATAM.webp" alt="Beneficios del influencer marketing">
				</div>
				<p class="infl-advantages__bottom-text">
					A través de las campañas de influencer marketing se busca cubrir toda la pirámide, desde generar awareness en torno a la marca, hasta conectar con el consumidor.
				</p>
			</div>
		</div>
	</section>


	<!-- ==========================================
	     3. ESTRATEGIA DE MARCA CON INFLUENCERS
	     ========================================== -->
	<section class="infl-strategy" id="servicios">
		<div class="infl-strategy__container">
			
			<div class="infl-strategy__header" data-reveal="up">
				<h2 class="infl-strategy__top-title">
					<span class="infl-strategy__top-title-black">CONOCE</span><br>
					<span class="infl-strategy__top-title-blue">NUESTROS SERVICIOS</span>
				</h2>
				<div class="infl-strategy__pill">
					ESTRATEGIA DE MARCA CON INFLUENCERS
				</div>
			</div>

			<div class="infl-strategy__split">
				<div class="infl-strategy__text-col" data-reveal="left">
					<p class="infl-strategy__desc">
						Desarrollamos y creamos planes orientados a resultados en los que se define cómo los creadores de contenido (influencers) colaborarán con la marca para alcanzar objetivos de marketing específicos: cómo aumentar visibilidad, generar confianza, impulsar ventas o generar conversiones.
					</p>
				</div>
				<div class="infl-strategy__media-col" data-reveal="right">
					<!-- Keeping existing image reference, assuming it matches or will be updated by user -->
					<img class="infl-strategy__img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/Estrategia-de-Marca-de-Influencers-Servicios-Orange-LATAM-1012x1024.webp" alt="Estrategia de Marca con Influencers">
				</div>
			</div>

			<div class="infl-strategy__bottom-box" data-reveal="up">
				<p class="infl-strategy__bottom-text">
					UNA ADECUADA <span class="text-blue">ESTRATEGIA DE MARKETING DE INFLUENCERS</span> PERMITE ALINEAR LOS ESFUERZOS DE INFLUENCIA CON LOS OBJETIVOS DE LA MARCA <span class="text-blue">PARA ASEGURAR QUE HAYA UN IMPACTO PODEROSO</span>
				</p>
			</div>

		</div>
	</section>

	<!-- ==========================================
	     4. SELECCIÓN ESTRATÉGICA DE INFLUENCERS (SLIDER)
	     ========================================== -->
	<section class="infl-selection">
		<div class="infl-selection__container">
			<div class="infl-selection__pill-wrapper" data-reveal="up">
				<h2 class="infl-selection__pill">Selección Estratégica de Influencers</h2>
			</div>
			
			<div class="infl-selection__slider-wrapper" data-reveal="up">
				<div class="infl-selection__slider-container">
					<div class="infl-selection__track">
					<!-- Slide 1 -->
					<div class="infl-selection__slide active">
						<div class="infl-selection__card">
							<div class="infl-selection__text-col">
								<h3 class="infl-selection__card-title">Análisis<br><span class="infl-selection__title-accent">del Perfil</span></h3>
								<p class="infl-selection__card-desc">Con el uso de herramientas tecnológicas, investigamos comunidades, engagement, calidad de contenido, tono, estilo y autenticidad</p>
							</div>
							<div class="infl-selection__media-col">
								<img class="infl-selection__img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/1-2.webp" alt="Análisis del Perfil">
							</div>
						</div>
					</div>

					<!-- Slide 2 -->
					<div class="infl-selection__slide">
						<div class="infl-selection__card">
							<div class="infl-selection__text-col">
								<h3 class="infl-selection__card-title">Alineación<br><span class="infl-selection__title-accent">de Valores</span></h3>
								<p class="infl-selection__card-desc">Nos aseguramos de que el tono de voz, la filosofía y el estilo del creador estén perfectamente alineados con los pilares estratégicos y la identidad de tu marca.</p>
							</div>
							<div class="infl-selection__media-col">
								<img class="infl-selection__img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/2-1.webp" alt="Alineación de Valores">
							</div>
						</div>
					</div>

					<!-- Slide 3 -->
					<div class="infl-selection__slide">
						<div class="infl-selection__card">
							<div class="infl-selection__text-col">
								<h3 class="infl-selection__card-title">Filtro<br><span class="infl-selection__title-accent">de Fraude</span></h3>
								<p class="infl-selection__card-desc">Auditoría técnica de seguidores falsos, pods de engagement y bots para asegurar que tu inversión vaya dirigida únicamente a personas reales e interesadas.</p>
							</div>
							<div class="infl-selection__media-col">
								<img class="infl-selection__img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/3-1-1.webp" alt="Filtro de Fraude">
							</div>
						</div>
					</div>

					<!-- Slide 4 -->
					<div class="infl-selection__slide">
						<div class="infl-selection__card">
							<div class="infl-selection__text-col">
								<h3 class="infl-selection__card-title">Métricas<br><span class="infl-selection__title-accent">de Audiencia</span></h3>
								<p class="infl-selection__card-desc">Evaluación demográfica, geográfica y de intereses de la comunidad del influencer para hacer match con tu target ideal.</p>
							</div>
							<div class="infl-selection__media-col">
								<img class="infl-selection__img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/4-1-1.webp" alt="Métricas de Audiencia">
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="infl-selection__nav">
				<button type="button" class="infl-selection__arrow infl-selection__arrow--prev" aria-label="Anterior">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
					</button>
					<button type="button" class="infl-selection__arrow infl-selection__arrow--next" aria-label="Siguiente">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
					</button>
				</div>
			</div>
		</div>
	</section>

	<!-- ==========================================
	     5. SERVICIO DE GESTIÓN INTEGRAL DE INFLUENCERS
	     ========================================== -->
	<section class="infl-management">
		<div class="infl-management__container">
			<div class="infl-management__pill-wrapper" data-reveal="up">
				<h2 class="infl-management__pill">Servicio de Gestión Integral de Influencers</h2>
			</div>
			
			<div class="infl-management__grid" data-stagger>
				<!-- Col 1 -->
				<div class="infl-management__grid-col">
					<!-- Card 1 -->
					<div class="infl-management__card infl-management__card--grey">
						<h3 class="infl-management__card-title">Negociación<br>de Condiciones</h3>
						<div class="infl-management__icon-box">
							<img class="infl-management__icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/negociacion-condiciones.svg" alt="Negociación de Condiciones">
						</div>
						<p class="infl-management__card-desc">Establecemos tipos de contenido, objetivos, fechas, formatos, entregables y resguardamos tarifas</p>
					</div>
					<!-- Card 4 -->
					<div class="infl-management__card infl-management__card--grey">
						<h3 class="infl-management__card-title">Estrategia de<br>Publicaciones</h3>
						<div class="infl-management__icon-box">
							<img class="infl-management__icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/calendario-publicaciones.svg" alt="Estrategia de Publicaciones">
						</div>
						<p class="infl-management__card-desc">Brindamos soporte estratégico para construir el mejor plan y calendario de publicaciones, considerando coyunturas y otros factores</p>
					</div>
				</div>

				<!-- Col 2 (Shifted down) -->
				<div class="infl-management__grid-col infl-management__grid-col--shifted">
					<!-- Card 2 -->
					<div class="infl-management__card infl-management__card--blue">
						<h3 class="infl-management__card-title">Brief<br>Creativo</h3>
						<div class="infl-management__icon-box">
							<img class="infl-management__icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/brief-creativo.svg" alt="Brief Creativo">
						</div>
						<p class="infl-management__card-desc">Creamos y planificamos mensajes clave, tono, hashtags, etiquetas y restricciones</p>
					</div>
					<!-- Card 5 -->
					<div class="infl-management__card infl-management__card--blue">
						<h3 class="infl-management__card-title">Relación a<br>Largo Plazo</h3>
						<div class="infl-management__icon-box">
							<img class="infl-management__icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/relacion-largo-plazo.svg" alt="Relación a Largo Plazo">
						</div>
						<p class="infl-management__card-desc">Evaluamos la posibilidad de que si el influencer funciona bien, se pueda convertir en embajador de la marca</p>
					</div>
				</div>

				<!-- Col 3 -->
				<div class="infl-management__grid-col">
					<!-- Card 3 -->
					<div class="infl-management__card infl-management__card--grey">
						<h3 class="infl-management__card-title">Supervisión<br>del Contenido</h3>
						<div class="infl-management__icon-box">
							<img class="infl-management__icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/supervision-contenido.svg" alt="Supervisión del Contenido">
						</div>
						<p class="infl-management__card-desc">Revisamos el contenido antes de la publicación para asegurar alineación con la marca</p>
					</div>
					<!-- Card 6 -->
					<div class="infl-management__card infl-management__card--grey">
						<h3 class="infl-management__card-title">Seguimiento<br>de Resultados</h3>
						<div class="infl-management__icon-box">
							<img class="infl-management__icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/seguimiento-resultados.svg" alt="Seguimiento de Resultados">
						</div>
						<p class="infl-management__card-desc">Realizamos el monitoreo de data y cumplimiento de KPIs (engagement, clics, ventas, etc)</p>
					</div>
				</div>
			</div>

			<!-- Bottom highlighted panel -->
			<div class="infl-management__bottom-panel" data-reveal="up">
				<div class="infl-management__bottom-img-box">
					<img class="infl-management__bottom-img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/megafonito.svg" alt="Impulsa tu Marca">
				</div>
				<div class="infl-management__bottom-text-box">
					<h4 class="infl-management__bottom-title">¿CÓMO SELECCIONAMOS<br>Y GESTIONAMOS A LOS INFLUENCERS?</h4>
					<p class="infl-management__bottom-desc">Seleccionar y gestionar influencers no es solo contratar a alguien popular, sino es encontrar a quienes tienen la credibilidad y la audiencia adecuada y orquestar una colaboración efectiva y bien medida.</p>
				</div>
			</div>
		</div>
	</section>

	<!-- ==========================================
	     6. GESTIÓN INTEGRAL DE CAMPAÑAS
	     ========================================== -->
	<section class="infl-campaign-mgmt">
		<div class="infl-campaign-mgmt__container">
			<div class="infl-campaign-mgmt__pill-wrapper" data-reveal="up">
				<span class="infl-campaign-mgmt__pill">Gestión de Campañas</span>
			</div>

			<h2 class="infl-campaign-mgmt__title" data-reveal="up">Creación de Contenido Estratégico con Influencers</h2>

			<p class="infl-campaign-mgmt__desc" data-reveal="up">
				Creamos contenido auténtico, disruptivo y estratégico junto a influencers que saben conectar con sus audiencias. Nuestro equipo trabaja de la mano con cada creador para desarrollar piezas visuales y narrativas que inspiran y generan acción.
			</p>

			<div class="infl-campaign-mgmt__bottom-box" data-reveal="up">
				<p class="infl-campaign-mgmt__bottom-text">
					YA NO SE TRATA SOLO DE MOSTRAR TU MARCA, <span class="infl-campaign-mgmt__highlight">SINO DE CONTAR UNA HISTORIA QUE TU PÚBLICO QUIERA VER, COMPARTIR Y RECORDAR</span>
				</p>
			</div>
		</div>
	</section>

	<!-- ==========================================
	     10c. ¿QUÉ INCLUYE NUESTRO SERVICIO? (SLIDER)
	     ========================================== -->
	<section class="infl-includes">
		<div class="infl-includes__container">
			<h2 class="infl-includes__title" data-reveal="up">¿Qué Incluye Nuestro Servicio?</h2>

			<div class="infl-includes__slider-wrapper" data-reveal="up">
				<div class="infl-includes__slider">
					<!-- Slide 1 -->
					<div class="infl-includes__slide active">
						<div class="infl-includes__card">
							<div class="infl-includes__text-col">
								<p class="infl-includes__text">Derechos de uso para que puedas reutilizar el contenido en tus propios canales</p>
							</div>
							<div class="infl-includes__media-col">
								<img class="infl-includes__img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/derechos-de-uso.jpg" alt="Derechos de uso">
							</div>
						</div>
					</div>

					<!-- Slide 2 -->
					<div class="infl-includes__slide">
						<div class="infl-includes__card">
							<div class="infl-includes__text-col">
								<p class="infl-includes__text">Briefs estratégicos para asegurar coherencia con tu identidad de marca</p>
							</div>
							<div class="infl-includes__media-col">
								<img class="infl-includes__img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/briefs-estrategicos.jpg" alt="Briefs estratégicos">
							</div>
						</div>
					</div>

					<!-- Slide 3 -->
					<div class="infl-includes__slide">
						<div class="infl-includes__card">
							<div class="infl-includes__text-col">
								<p class="infl-includes__text">Diseño de campañas creativas personalizadas para cada red social</p>
							</div>
							<div class="infl-includes__media-col">
								<img class="infl-includes__img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/diseno-de-campanas.jpg" alt="Diseño de campañas">
							</div>
						</div>
					</div>

					<!-- Slide 4 -->
					<div class="infl-includes__slide">
						<div class="infl-includes__card">
							<div class="infl-includes__text-col">
								<p class="infl-includes__text">Contenido original: reels, TikToks, stories, fotos, lives y más</p>
							</div>
							<div class="infl-includes__media-col">
								<img class="infl-includes__img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/IMG_0520-1-1.webp" alt="Contenido original">
							</div>
						</div>
					</div>

					<!-- Slide 5 -->
					<div class="infl-includes__slide">
						<div class="infl-includes__card">
							<div class="infl-includes__text-col">
								<p class="infl-includes__text">Revisión y edición para asegurar calidad, autenticidad y resultados</p>
							</div>
							<div class="infl-includes__media-col">
								<img class="infl-includes__img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/revision-y-edicion.jpg" alt="Revisión y edición">
							</div>
						</div>
					</div>
				</div>

				<!-- Navigation arrows below the slide container -->
				<div class="infl-includes__nav">
					<button type="button" class="infl-includes__arrow infl-includes__arrow--prev" aria-label="Anterior">
						<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
					</button>
					<button type="button" class="infl-includes__arrow infl-includes__arrow--next" aria-label="Siguiente">
						<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
					</button>
				</div>
			</div>
		</div>
	</section>

	<!-- ==========================================
	     7. BENEFICIOS PARA TU MARCA
	     ========================================== -->
	<section class="infl-benefits">
		<div class="infl-benefits__container">
			<h2 class="infl-benefits__title" data-reveal="up">Beneficios para tu Marca</h2>

			<div class="infl-benefits__grid" data-stagger>
				<!-- Card 1 -->
				<div class="infl-benefits__card infl-benefits__card--blue">
					<div class="infl-benefits__icon-box">
						<img class="infl-benefits__icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/bullseye-arrow.png" alt="Contenido Adaptado">
					</div>
					<p class="infl-benefits__text">Contenido 100% adaptado a tu público y a tus objetivos</p>
				</div>

				<!-- Card 2 -->
				<div class="infl-benefits__card infl-benefits__card--grey">
					<div class="infl-benefits__icon-box">
						<img class="infl-benefits__icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/videocamera-symbol.png" alt="Producción Rápida">
					</div>
					<p class="infl-benefits__text">Producción rápida con estilo real y cercano</p>
				</div>

				<!-- Card 3 -->
				<div class="infl-benefits__card infl-benefits__card--blue">
					<div class="infl-benefits__icon-box">
						<img class="infl-benefits__icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/megaphone.png" alt="Mayor Engagement">
					</div>
					<p class="infl-benefits__text">Mayor engagement y confianza que los anuncios tradicionales</p>
				</div>

				<!-- Card 4 -->
				<div class="infl-benefits__card infl-benefits__card--grey">
					<div class="infl-benefits__icon-box">
						<img class="infl-benefits__icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/diagram.png" alt="Escalar Campañas">
					</div>
					<p class="infl-benefits__text">Posibilidad de escalar campañas sin producir en casa</p>
				</div>
			</div>
		</div>
	</section>

	<!-- ==========================================
	     8. TIPOS DE MARKETING DE INFLUENCERS (SLIDER)
	     ========================================== -->
	<section class="infl-types">
		<div class="infl-types__container">
			<h2 class="infl-types__title" data-reveal="up">Tipos de Marketing de Influencers</h2>
			<p class="infl-types__subtitle" data-reveal="up">Existen diferentes estrategias de marketing de influencers según tus objetivos</p>

			<div class="infl-types__slider-wrapper" data-reveal="up">
				<!-- Prev Button on Left Side -->
				<button type="button" class="infl-types__arrow infl-types__arrow--prev" aria-label="Anterior">
					<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
				</button>

				<div class="infl-types__slider">
					<!-- Slide 1 -->
					<div class="infl-types__slide active">
						<div class="infl-types__card">
							<div class="infl-types__img-box">
								<img class="infl-types__img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/Ejemplos-de-Marketing-de-Influencers-Exitoso-Orange-Latam.png" alt="Marketing Exitoso">
							</div>
							<div class="infl-types__text-box">
								<h3 class="infl-types__card-title">Ejemplos de Marketing de Influencers Exitoso</h3>
								<p class="infl-types__card-desc">Nuestras campañas han logrado incrementos promedio de 340% en awareness de marca y 180% en conversiones directas</p>
							</div>
						</div>
					</div>

					<!-- Slide 2 -->
					<div class="infl-types__slide">
						<div class="infl-types__card">
							<div class="infl-types__img-box">
								<img class="infl-types__img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/Micro-Influencers-vs-Macro-Influencers-Orange-Latam.png" alt="Micro vs Macro">
							</div>
							<div class="infl-types__text-box">
								<h3 class="infl-types__card-title">Micro-Influencers vs Macro-Influencers</h3>
								<p class="infl-types__card-desc">Seleccionamos el tipo de influencer según tu presupuesto y objetivos: micro-influencers para nichos específicos o macro-influencers para alcance masivo</p>
							</div>
						</div>
					</div>

					<!-- Slide 3 -->
					<div class="infl-types__slide">
						<div class="infl-types__card">
							<div class="infl-types__img-box">
								<img class="infl-types__img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/Marketing-de-Influencers-en-TikTok-Orange-Latam-768x768.webp" alt="TikTok">
							</div>
							<div class="infl-types__text-box">
								<h3 class="infl-types__card-title">Marketing de Influencers en TikTok</h3>
								<p class="infl-types__card-desc">Aprovechamos el formato vertical y las tendencias virales para maximizar alcance orgánico y engagement entre audiencias jóvenes</p>
							</div>
						</div>
					</div>

					<!-- Slide 4 -->
					<div class="infl-types__slide">
						<div class="infl-types__card">
							<div class="infl-types__img-box">
								<img class="infl-types__img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/Marketing-de-Influencers-en-Instagram-Orange-Latam.png" alt="Instagram">
							</div>
							<div class="infl-types__text-box">
								<h3 class="infl-types__card-title">Marketing de Influencers en Instagram</h3>
								<p class="infl-types__card-desc">Utilizamos Stories, Reels, IGTV y posts del feed para crear campañas multimedia que generen awareness y conversiones</p>
							</div>
						</div>
					</div>
				</div>

				<!-- Next Button on Right Side -->
				<button type="button" class="infl-types__arrow infl-types__arrow--next" aria-label="Siguiente">
					<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
				</button>
			</div>
		</div>
	</section>

	<!-- ==========================================
	     9. ANÁLISIS Y REPORTES DE CAMPAÑA
	     ========================================== -->
	<section class="infl-analysis">
		<div class="infl-analysis__container">
			<!-- Header Title Box -->
			<div class="infl-analysis__header-box" data-reveal="up">
				<h2 class="infl-analysis__main-title">Análisis y Reportes de Campaña:<br>Datos que Generan Decisiones</h2>
			</div>

			<!-- Split content -->
			<div class="infl-analysis__split">
				<div class="infl-analysis__text-col" data-reveal="left">
					<p class="infl-analysis__desc">
						Entregamos reportes detallados que muestran qué funcionó, cómo respondió la audiencia y cuál fue el retorno sobre la inversión. Cada campaña genera un análisis completo que incluye métricas clave, insights accionables y recomendaciones para optimizar las próximas estrategias.
					</p>
				</div>
				<div class="infl-analysis__media-col" data-reveal="right">
					<img class="infl-analysis__illustration" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/Analisis-y-Reportes-de-Campana-de-Marketing-de-Influencers-en-Orange-Latam-768x683.webp" alt="Análisis y Reportes de Campaña">
				</div>
			</div>

			<!-- Highlight Box -->
			<div class="infl-analysis__highlight-box" data-reveal="up">
				<p class="infl-analysis__highlight-text">
					REALIZAMOS CAMPAÑAS CON IMPACTO<br>
					<span class="infl-analysis__highlight-sub">Y MEDIMOS CADA RESULTADO</span>
				</p>
			</div>

			<!-- Subtitle -->
			<h3 class="infl-analysis__subtitle" data-reveal="up">¿Qué Medimos?</h3>

			<!-- Grid -->
			<div class="infl-analysis__grid" data-stagger>
				<!-- Column 1 -->
				<div class="infl-analysis__grid-col">
					<!-- Card 1 -->
					<div class="infl-analysis__card infl-analysis__card--grey">
						<div class="infl-analysis__icon-box">
							<img class="infl-analysis__icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/lupa.svg" alt="Alcance Real">
						</div>
						<h4 class="infl-analysis__card-title">Alcance Real y Visualizaciones</h4>
					</div>

					<!-- Card 4 -->
					<div class="infl-analysis__card infl-analysis__card--blue">
						<div class="infl-analysis__icon-box">
							<img class="infl-analysis__icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/porcentaje.svg" alt="Conversiones">
						</div>
						<h4 class="infl-analysis__card-title">Conversiones (Ventas, Registros, Descargas)</h4>
					</div>
				</div>

				<!-- Column 2 (Shifted) -->
				<div class="infl-analysis__grid-col infl-analysis__grid-col--shifted">
					<!-- Card 2 -->
					<div class="infl-analysis__card infl-analysis__card--blue">
						<div class="infl-analysis__icon-box">
							<img class="infl-analysis__icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/like.svg" alt="Engagement">
						</div>
						<h4 class="infl-analysis__card-title">Tasa de Engagement</h4>
					</div>

					<!-- Card 5 -->
					<div class="infl-analysis__card infl-analysis__card--grey">
						<div class="infl-analysis__icon-box">
							<img class="infl-analysis__icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/relacion-largo-plazo.svg" alt="Relación a Largo Plazo">
						</div>
						<h4 class="infl-analysis__card-title">Relación a Largo Plazo</h4>
					</div>
				</div>

				<!-- Column 3 -->
				<div class="infl-analysis__grid-col">
					<!-- Card 3 -->
					<div class="infl-analysis__card infl-analysis__card--grey">
						<div class="infl-analysis__icon-box">
							<img class="infl-analysis__icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/cursor.svg" alt="Clicks y Tráfico">
						</div>
						<h4 class="infl-analysis__card-title">Clicks y Tráfico Dirigido</h4>
					</div>

					<!-- Card 6 -->
					<div class="infl-analysis__card infl-analysis__card--blue">
						<div class="infl-analysis__icon-box">
							<img class="infl-analysis__icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/megafonito.svg" alt="ROI">
						</div>
						<h4 class="infl-analysis__card-title">ROI de la Campaña</h4>
					</div>
				</div>
			</div>

			<!-- Subtitle 2 -->
			<h3 class="infl-analysis__subtitle" data-reveal="up" style="margin-top: 90px;">¿Qué Entregamos?</h3>

			<!-- Grid 2 (What we deliver) -->
			<div class="infl-analysis__deliver-grid" data-stagger>
				<!-- Card 1 -->
				<div class="infl-analysis__deliver-card infl-analysis__deliver-card--blue">
					<p class="infl-analysis__deliver-text">Dashboard visual y entendible</p>
				</div>

				<!-- Card 2 -->
				<div class="infl-analysis__deliver-card infl-analysis__deliver-card--white">
					<p class="infl-analysis__deliver-text">Comparativos entre influencers y formatos</p>
				</div>

				<!-- Card 3 -->
				<div class="infl-analysis__deliver-card infl-analysis__deliver-card--blue">
					<p class="infl-analysis__deliver-text">Conclusiones y aprendizajes</p>
				</div>

				<!-- Card 4 -->
				<div class="infl-analysis__deliver-card infl-analysis__deliver-card--white">
					<p class="infl-analysis__deliver-text">Propuestas de mejora</p>
				</div>
			</div>
		</div>
	</section>

	<!-- ==========================================
	     11. PREGUNTAS FRECUENTES (ACCORDION HORIZONTAL)
	     ========================================== -->
	<section class="infl-faq-h" id="preguntas-frecuentes">
		<div class="infl-faq-h__container">
			<h2 class="infl-faq-h__title" data-reveal="up">
				Marketing de Influencers:<br>
				<span class="infl-faq-h__title-sub">Preguntas Frecuentes</span>
			</h2>

			<div class="infl-faq-h__accordion" data-reveal="up">
				<!-- Panel 1 -->
				<div class="infl-faq-h__panel" style="background-image: linear-gradient(rgba(0,0,0,0.55), rgba(0,0,0,0.85)), url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/que-es-marketing-influencers.webp');">
					<div class="infl-faq-h__content">
						<h3 class="infl-faq-h__panel-title">¿Qué es el Marketing de Influencers?</h3>
						<p class="infl-faq-h__panel-desc">Es una estrategia publicitaria que aprovecha la credibilidad, alcance y conexión emocional de creadores de contenido para promocionar productos o servicios de manera auténtica ante audiencias específicas y altamente segmentadas</p>
					</div>
				</div>

				<!-- Panel 2 -->
				<div class="infl-faq-h__panel" style="background-image: linear-gradient(rgba(0,0,0,0.55), rgba(0,0,0,0.85)), url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/como-hacer-un-marketing-exitoso.webp');">
					<div class="infl-faq-h__content">
						<h3 class="infl-faq-h__panel-title">¿Cómo hacer Marketing de Influencers Efectivo?</h3>
						<p class="infl-faq-h__panel-desc">El marketing de influencers efectivo requiere selección estratégica basada en audiencia real, brief creativo claro, supervisión de contenido y medición constante de KPIS. En ORANGE LATAM seguimos este proceso en cada campaña</p>
					</div>
				</div>

				<!-- Panel 3 -->
				<div class="infl-faq-h__panel" style="background-image: linear-gradient(rgba(0,0,0,0.55), rgba(0,0,0,0.85)), url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/ventajas-marketing-influencers.webp');">
					<div class="infl-faq-h__content">
						<h3 class="infl-faq-h__panel-title">¿Cómo tener una buena campaña de marketing con influencers?</h3>
						<p class="infl-faq-h__panel-desc">Una campaña exitosa necesita objetivos claros, selección de influencers alineados con la marca, contenido auténtico, calendario coordinado y análisis continuo. Nuestro equipo gestiona cada aspecto del proceso</p>
					</div>
				</div>

				<!-- Panel 4 -->
				<div class="infl-faq-h__panel" style="background-image: linear-gradient(rgba(0,0,0,0.55), rgba(0,0,0,0.85)), url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/redes-sociales-efectivas.webp');">
					<div class="infl-faq-h__content">
						<h3 class="infl-faq-h__panel-title">¿Qué incluye el servicio de una agencia de marketing de influencers?</h3>
						<p class="infl-faq-h__panel-desc">Incluye investigación y selección de influencers, negociación, brief creativo, supervisión de contenido, coordination de publicaciones, análisis de resultados y reportes detallados con recomendaciones</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ==========================================
	     12. CASOS DE ÉXITO (CAROUSEL VIDEO)
	     ========================================== -->
	<section class="infl-cases" id="casos-de-exito">
		<h2 class="infl-cases__title" data-reveal="up">
			CASOS DE ÉXITO<br>
			<span class="infl-cases__title-sub">EN MARKETING DE INFLUENCERS</span>
		</h2>
		
		<div class="infl-cases__carousel" data-reveal="up">
			<div class="infl-cases__track">
				<?php
				$personas = array(
					array( 'file' => 'carlos_alcántara.webp', 'video' => 'https://youtu.be/V9HdFIV2CQI' ),
					array( 'file' => 'christh_palomino.webp', 'video' => 'https://youtube.com/shorts/PVj9Ojj1DS0?feature=share' ),
					array( 'file' => 'edison_flores.webp', 'video' => 'https://youtu.be/XGOJksenISk' ),
					array( 'file' => 'maria-pia-slider.jpg', 'video' => 'https://youtu.be/abEee4gCBPA' ),
					array( 'file' => 'patricia_barreto.jpg', 'video' => 'https://youtu.be/n2l8czwGvwI' ),
					array( 'file' => 'yordana-slider.jpg', 'video' => 'https://youtube.com/shorts/NmyN8tEt2Ms?feature=share' )
				);
				
				// Duplicamos el array para el efecto infinito (marquee)
				$personas_infinitas = array_merge( $personas, $personas );
				
				foreach ( $personas_infinitas as $persona ) :
					$filename = $persona['file'];
					$video_url = $persona['video'];

					// Obtener el nombre limpio a partir del archivo
					$name = str_replace( array( '.webp', '.jpg', '_', '-', 'slider' ), array( '', '', ' ', ' ', '' ), $filename );
					$name = ucwords( trim( $name ) );
					if ( $name === 'Yordana' ) {
						$name = 'Yordana López';
					}
				?>
				<div class="infl-cases__item js-video-modal-trigger" data-video-url="<?php echo esc_url( $video_url ); ?>">
					<img class="infl-cases__img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/personas/<?php echo esc_attr( $filename ); ?>" alt="<?php echo esc_attr( $name ); ?>" loading="lazy">
					<div class="infl-cases__play"></div>
					<div class="infl-cases__name"><?php echo esc_html( $name ); ?></div>
				</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<!-- ==========================================
	     13. CLIENTES (DOBLE CAROUSEL)
	     ========================================== -->
	<section class="infl-clients" id="por-que-nosotros">
		<div class="infl-clients__container">
			<h2 class="infl-clients__title" data-reveal="up">
				GRACIAS<br>
				<span class="infl-clients__title-sub">POR CONFIAR EN NOSOTROS</span>
			</h2>
			
			<div class="infl-clients__carousel">
				<div class="infl-clients__track">
					<?php
					$clients_row1 = array( 'boss-1.png', 'GG-3.png', 'abosult.png', 'World-Vision.png', 'worldreader.png', 'pernord-1.png', 'Jet-smart.png' );
					$clients_row1_inf = array_merge( $clients_row1, $clients_row1 );
					foreach ( $clients_row1_inf as $logo ) :
					?>
					<div class="infl-clients__logo-box">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/carousel/<?php echo esc_attr( $logo ); ?>" alt="Client Logo" loading="lazy">
					</div>
					<?php endforeach; ?>
				</div>
			</div>

			<div class="infl-clients__carousel">
				<div class="infl-clients__track infl-clients__track--reverse">
					<?php
					$clients_row2 = array( 'Tiffany.png', 'banco.png', 'bcp.png', 'chivas.png', 'merck.png', 'omega-1.png', 'swissotel.png' );
					$clients_row2_inf = array_merge( $clients_row2, $clients_row2 );
					foreach ( $clients_row2_inf as $logo ) :
					?>
					<div class="infl-clients__logo-box">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/carousel/<?php echo esc_attr( $logo ); ?>" alt="Client Logo" loading="lazy">
					</div>
					<?php endforeach; ?>
				</div>
			</div>

			<div class="infl-clients__footer" data-reveal="up">
				<h3 class="infl-clients__footer-title">
					¿POR QUÉ ELEGIR ORANGE LATAM COMO<br>
					<span class="infl-clients__footer-title-sub">TU AGENCIA DE MARKETING DE INFLUENCERS?</span>
				</h3>
				<p class="infl-clients__footer-subtitle">HACEMOS EL MEJOR MARKETING DE INFLUENCERS</p>
				<a href="#" class="infl-clients__btn">LO QUE NOS HACE DIFERENTES</a>
			</div>
		</div>
	</section>

	<!-- ==========================================
	     14. DIFERENCIALES (VERTICAL ACCORDION)
	     ========================================== -->
	<section class="infl-diferenciales" data-reveal="up" id="por-que-nosotros">
		<div class="infl-diferenciales__container">
			<div class="infl-diferenciales__accordion js-infl-diff-accordion">
				<?php
				$diferenciales = array(
					array(
						'title' => 'ENFOQUE 100% EN RESULTADOS',
						'text'  => 'Conseguimos resultados reales e importantes para tu negocio, clicks, leads, conversiones, retos sobre inversión, otros'
					),
					array(
						'title' => 'SELECCIÓN ESTRATÉGICA',
						'text'  => 'Elegimos influencers que no solo tienen seguidores, sino credibilidad, conexión con su audiencia y afinidad real con tu marca'
					),
					array(
						'title' => 'CREATIVIDAD + DATOS',
						'text'  => 'Combinamos ideas frescas con análisis profundo. Lo visual y emocional se apoya en métricas claras y decisiones inteligentes'
					),
					array(
						'title' => 'ESPECIALISTAS X NICHO',
						'text'  => 'Conocemos el terreno. Moda, tech, belleza, salud, consumo masivo, etc. Hablamos el idioma de cada industria y su audiencia'
					)
				);
				
				foreach ( $diferenciales as $index => $diff ) :
				?>
				<div class="infl-diff-item js-infl-diff-item">
					<div class="infl-diff-item__header js-infl-diff-header">
						<span class="infl-diff-item__icon">+</span>
						<h4 class="infl-diff-item__title"><?php echo esc_html( $diff['title'] ); ?></h4>
					</div>
					<div class="infl-diff-item__body">
						<div class="infl-diff-item__content">
							<p><?php echo esc_html( $diff['text'] ); ?></p>
						</div>
					</div>
				</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<!-- ==========================================
	     VIDEO MODAL (CASOS DE ÉXITO)
	     ========================================== -->
	<div class="video-modal js-video-modal">
		<div class="video-modal__overlay js-video-modal-close"></div>
		<div class="video-modal__content">
			<button class="video-modal__close js-video-modal-close" aria-label="Cerrar">&times;</button>
			<div class="video-modal__iframe-wrapper">
				<iframe class="video-modal__iframe js-video-modal-iframe" src="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
		</div>
	</div>

	<!-- ==========================================
	     15. PRE-FOOTER (AÑADIDO)
	     ========================================== -->
	<section class="infl-prefooter" id="contacto">
		<div class="infl-prefooter__container">
			<div class="infl-prefooter__col infl-prefooter__col--slogan">
				<h2 class="infl-prefooter__slogan">
					<span class="infl-prefooter__slogan-white">No hacemos ruido</span><br>
					<span class="infl-prefooter__slogan-blue">Hacemos conversiones</span>
				</h2>
			</div>
			
			<div class="infl-prefooter__col infl-prefooter__col--address">
				<p>Centro Empresarial Abril</p>
				<p>Calle Enrique Palacios 360 Of. 306 Miraflores</p>
				<p class="infl-prefooter__email">
					<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
					<a href="mailto:negocios@orange-la.com">negocios@orange-la.com</a>
				</p>
			</div>

			<div class="infl-prefooter__col infl-prefooter__col--contact">
				<p class="infl-prefooter__contact-label">Contacto:</p>
				<p class="infl-prefooter__phone">
					<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#38b6ff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
					<a href="tel:993595252">993-595-252</a>
				</p>
				<div class="infl-prefooter__social">
					<a href="#" class="infl-prefooter__social-link" aria-label="Instagram">
						<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
					</a>
					<a href="#" class="infl-prefooter__social-link" aria-label="Facebook">
						<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>
					</a>
					<a href="#" class="infl-prefooter__social-link" aria-label="TikTok">
						<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 12a4 4 0 1 0 4 4V4a5 5 0 0 0 5 5"></path></svg>
					</a>
					<a href="#" class="infl-prefooter__social-link" aria-label="LinkedIn">
						<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg>
					</a>
				</div>
			</div>
		</div>
	</section>

</main>

<?php
get_footer();