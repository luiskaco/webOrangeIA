<?php
/**
 * Template Name: Eventos y Activaciones
 * Template Post Type: page
 *
 * @package Orange_Latam
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

$theme_uri = get_template_directory_uri();
?>

<!-- Schema JSON-LD -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Organization",
      "name": "Orange Latam",
      "url": "<?php echo esc_url( home_url( '/' ) ); ?>",
      "email": "negocios@orange-la.com",
      "telephone": "+51993595252",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Calle Enrique Palacios 360 Of. 306, Centro Empresarial Abril, Miraflores",
        "addressLocality": "Lima",
        "addressCountry": "PE"
      }
    },
    {
      "@type": "Service",
      "serviceType": "Agencia de Eventos Corporativos y Activaciones de Marca",
      "provider": {
        "@type": "Organization",
        "name": "Orange Latam"
      },
      "areaServed": "PE",
      "url": "<?php echo esc_url( home_url( '/eventos-activaciones/' ) ); ?>",
      "description": "Diseño y producción de eventos corporativos, activaciones de marca, eventos BTL e híbridos en Perú. Agencia de eventos corporativos y activaciones BTL en Lima."
    }
  ]
}
</script>

<main class="ea-page">

	<!-- ==========================================
	     1. HERO — DARK AURA & GLASSMORPHISM SHOWCASE
	     ========================================== -->
	<section class="ea-dark-hero" id="inicio">
		<!-- Background Glow Effects -->
		<div class="ea-dark-hero__glow ea-dark-hero__glow--purple"></div>
		<div class="ea-dark-hero__glow ea-dark-hero__glow--orange"></div>
		<div class="ea-dark-hero__glow ea-dark-hero__glow--teal"></div>

		<div class="ea-container">
			<div class="ea-dark-hero__grid">
				
				<!-- Left Column: Title, Subtitle & Metrics -->
				<div class="ea-dark-hero__content" data-reveal="up">
					<h1 class="ea-dark-hero__title">
						Eventos Corporativos <span class="ea-dark-hero__gradient-text">y Activaciones de Alto Impacto</span>
					</h1>

					<p class="ea-dark-hero__lead">
						Como <strong>agencia de eventos corporativos</strong>, convertimos los objetivos de tu marca en experiencias inmersivas: activaciones, eventos híbridos y producciones presenciales o remotas.
					</p>

					<!-- Stats Strip -->
					<div class="ea-dark-hero__stats">
						<div class="ea-dark-stat">
							<span class="ea-dark-stat__num">150+</span>
							<span class="ea-dark-stat__label">Eventos Producidos</span>
						</div>
						<div class="ea-dark-stat__divider"></div>
						<div class="ea-dark-stat">
							<span class="ea-dark-stat__num">10M+</span>
							<span class="ea-dark-stat__label">Asistentes Impactados</span>
						</div>
						<div class="ea-dark-stat__divider"></div>
						<div class="ea-dark-stat">
							<span class="ea-dark-stat__num">99%</span>
							<span class="ea-dark-stat__label">Satisfacción de Marca</span>
						</div>
					</div>
				</div>

				<!-- Right Column: Dual Card Showcase + Glass Badges -->
				<div class="ea-dark-hero__visual" data-reveal="up">
					
					<!-- Decorative Sparkles -->
					<div class="ea-dark-sparkle ea-dark-sparkle--top">✦</div>
					<div class="ea-dark-sparkle ea-dark-sparkle--bottom">✦</div>

					<div class="ea-dark-hero__cards-wrapper">
						
						<!-- Card 1: Main Photo Card (Powder Blue Frame) -->
						<div class="ea-dark-card ea-dark-card--main">
							<div class="ea-dark-card__img-wrap">
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/eventos/activaciones.png" alt="Activaciones BTL Orange Latam" class="ea-dark-card__img">
							</div>
							
							<!-- Floating Glass Instructor / Production Badge -->
							<div class="ea-dark-badge">
								<div class="ea-dark-badge__avatar">
									<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/eventos/corporativos.png" alt="Producción Orange Latam">
								</div>
								<div class="ea-dark-badge__info">
									<span class="ea-dark-badge__name">Producción 360°</span>
									<span class="ea-dark-badge__role">Líderes BTL en Perú</span>
									<div class="ea-dark-badge__stars">
										★★★★★
									</div>
								</div>
							</div>
						</div>

						<!-- Card 2: Secondary Card (Purple Overlay + Float Action Arrow) -->
						<div class="ea-dark-card ea-dark-card--secondary">
							<div class="ea-dark-card__img-wrap">
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/eventos/hibridos.png" alt="Eventos Híbridos" class="ea-dark-card__img">
							</div>
							
							<!-- Floating Glass Circle Arrow Button -->
							<div class="ea-dark-card__float-btn">
								<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M7 17L17 7M17 7H7M17 7V17"/></svg>
							</div>

							<!-- Floating Glass Overlay Label -->
							<div class="ea-dark-card__overlay-bar">
								<span>Experiencias Inmersivas</span>
							</div>
						</div>

					</div>
				</div>

			</div>

			<!-- Trusted By / Brand Strip -->
			<div class="ea-dark-hero__brands" data-reveal="up">
				<span class="ea-dark-hero__brands-title">Sectores que confían en nuestra experiencia</span>
				<div class="ea-dark-hero__brands-row">
					<span class="ea-dark-brand">BANCA</span>
					<span class="ea-dark-brand">FINANZAS</span>
					<span class="ea-dark-brand">SEGUROS</span>
					<span class="ea-dark-brand">AFP</span>
					<span class="ea-dark-brand">RETAIL</span>
					<span class="ea-dark-brand">TECNOLOGÍA</span>
					<span class="ea-dark-brand">CONSUMO MASIVO</span>
					<span class="ea-dark-brand">ENTRETENIMIENTO</span>
					<span class="ea-dark-brand">DEPORTES</span>
				</div>
			</div>

		</div>
	</section>

	<!-- ==========================================
	     2. TIPOS DE EVENTOS Y ACTIVACIONES QUE PRODUCIMOS
	     ========================================== -->
	<section class="ea-plus-types" id="tipos-eventos">
		<div class="ea-container">
			<div class="ea-plus-types__grid" data-reveal="up">
				
				<!-- Left: Text & SEO Callout -->
				<div class="ea-plus-types__content">
					<span class="ea-section-tag">Formatos & Soluciones</span>
					<h2 class="ea-plus-title">Nuestro Expertise</h2>
					<p class="ea-plus-sub">
						Especialistas en <strong>organización de eventos empresariales</strong>: cada audiencia y cada objetivo requieren una experiencia diferente, desde <strong>eventos corporativos híbridos</strong> hasta activaciones 360°, adaptada al propósito de la marca, al público y al contexto.
					</p>
					<div class="ea-plus-callout">
						<p>Como <strong>agencia de activaciones BTL en Lima</strong> y <strong>eventos corporativos en Perú y otros países</strong>, garantizamos una ejecución coordinada de extremo a extremo.</p>
					</div>
				</div>

				<!-- Right: 3 Tall Photo Cards -->
				<div class="ea-plus-types__cards">
					<div class="ea-plus-photo-card">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/eventos/corporativos.png" alt="Eventos Corporativos" class="ea-plus-photo-card__img" loading="lazy">
						<div class="ea-plus-photo-card__overlay">
							<span class="ea-plus-photo-card__badge">Corporativo</span>
							<h3 class="ea-plus-photo-card__title">Eventos Corporativos</h3>
						</div>
					</div>

					<div class="ea-plus-photo-card">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/eventos/activaciones.png" alt="Activaciones BTL" class="ea-plus-photo-card__img" loading="lazy">
						<div class="ea-plus-photo-card__overlay">
							<span class="ea-plus-photo-card__badge">BTL</span>
							<h3 class="ea-plus-photo-card__title">Activaciones de Marca</h3>
						</div>
					</div>

					<div class="ea-plus-photo-card">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/eventos/hibridos.png" alt="Eventos Híbridos" class="ea-plus-photo-card__img" loading="lazy">
						<div class="ea-plus-photo-card__overlay">
							<span class="ea-plus-photo-card__badge">Híbrido</span>
							<h3 class="ea-plus-photo-card__title">Eventos Híbridos</h3>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>

	<!-- ==========================================
	     3. CÓMO TRABAJAMOS: DEL CONCEPTO A LA EJECUCIÓN
	     ========================================== -->
	<section class="ea-cat-section" id="como-trabajamos">
		<div class="ea-container">
			
			<!-- Centered Header with Curved Accent -->
			<div class="ea-cat-header" data-reveal="up">
				<h2 class="ea-cat-header__title">
					Cómo trabajamos: del concepto a la ejecución
				</h2>
				<p class="ea-cat-header__sub">
					Un evento exitoso necesita una ejecución impecable, pero también una idea que le dé sentido. Nuestro proceso conecta estrategia, creatividad y producción.
				</p>
			</div>

			<!-- 3-Column x 2-Row Pastel Pill Cards Grid -->
			<div class="ea-cat-grid" data-reveal="up">

				<!-- Card 1: Teal Tint -->
				<div class="ea-cat-card ea-cat-card--teal">
					<div class="ea-cat-card__icon"><span class="ea-cat-card__num">1</span></div>
					<div class="ea-cat-card__text">
						<h3 class="ea-cat-card__title">Entendemos el desafío</h3>
						<p class="ea-cat-card__desc">Analizamos los objetivos, audiencia y resultados esperados.</p>
					</div>
				</div>

				<!-- Card 2: Rose Tint -->
				<div class="ea-cat-card ea-cat-card--rose">
					<div class="ea-cat-card__icon"><span class="ea-cat-card__num">2</span></div>
					<div class="ea-cat-card__text">
						<h3 class="ea-cat-card__title">Creamos el concepto</h3>
						<p class="ea-cat-card__desc">Desarrollamos una idea central relevante que guía la experiencia.</p>
					</div>
				</div>

				<!-- Card 3: Emerald Tint -->
				<div class="ea-cat-card ea-cat-card--emerald">
					<div class="ea-cat-card__icon"><span class="ea-cat-card__num">3</span></div>
					<div class="ea-cat-card__text">
						<h3 class="ea-cat-card__title">Diseñamos la experiencia</h3>
						<p class="ea-cat-card__desc">Recorrido del asistente, contenidos y tecnología interactiva.</p>
					</div>
				</div>

				<!-- Card 4: Amber Tint -->
				<div class="ea-cat-card ea-cat-card--amber">
					<div class="ea-cat-card__icon"><span class="ea-cat-card__num">4</span></div>
					<div class="ea-cat-card__text">
						<h3 class="ea-cat-card__title">Producimos y coordinamos</h3>
						<p class="ea-cat-card__desc">Logística, montaje y puesta en escena técnica integral 360°.</p>
					</div>
				</div>

				<!-- Card 5: Purple Tint -->
				<div class="ea-cat-card ea-cat-card--purple">
					<div class="ea-cat-card__icon"><span class="ea-cat-card__num">5</span></div>
					<div class="ea-cat-card__text">
						<h3 class="ea-cat-card__title">Ejecutamos y medimos</h3>
						<p class="ea-cat-card__desc">Acompañamiento en vivo y evaluación de resultados con KPIs.</p>
					</div>
				</div>

				<!-- Card 6: Ocean Blue Tint -->
				<div class="ea-cat-card ea-cat-card--blue">
					<div class="ea-cat-card__icon"><span class="ea-cat-card__num">6</span></div>
					<div class="ea-cat-card__text">
						<h3 class="ea-cat-card__title">Garantía Orange Latam</h3>
						<p class="ea-cat-card__desc">Ejecución impecable con altos estándares de calidad.</p>
					</div>
				</div>

			</div>
		</div>
	</section>

	<!-- ==========================================
	     4. RESUMEN DE BENEFICIOS & RESULTADOS (PREMIUM STRIP)
	     ========================================== -->
	<section class="ea-metrics-strip">
		<div class="ea-container">
			<div class="ea-metrics-strip__inner" data-reveal="up">
				<div class="ea-cases-footer-bar">
					
					<div class="ea-cases-footer-item">
						<div class="ea-cases-footer-icon">
							<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
						</div>
						<div class="ea-cases-footer-text">
							<strong>Alcance e Impresiones</strong>
							<span>Masivas en cada impacto</span>
						</div>
					</div>

					<div class="ea-cases-footer-item">
						<div class="ea-cases-footer-icon">
							<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
						</div>
						<div class="ea-cases-footer-text">
							<strong>Interacción</strong>
							<span>En tiempo real con audiencia</span>
						</div>
					</div>

					<div class="ea-cases-footer-item">
						<div class="ea-cases-footer-icon">
							<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="5.5"/><circle cx="12" cy="12" r="1" fill="currentColor"/></svg>
						</div>
						<div class="ea-cases-footer-text">
							<strong>Generación de Leads</strong>
							<span>Cualificados de alto valor</span>
						</div>
					</div>

					<div class="ea-cases-footer-item">
						<div class="ea-cases-footer-icon">
							<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg>
						</div>
						<div class="ea-cases-footer-text">
							<strong>Retorno de Inversión</strong>
							<span>ROI 100% medible</span>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>

	<!-- ==========================================
	     5. CONTÁCTANOS / TRABAJEMOS JUNTOS
	     ========================================== -->
	<section class="bc-cta" id="contacto">
		<div class="bc-cta__container" data-reveal="up">
			<h2 class="bc-cta__title">Trabajemos juntos</h2>
			<p class="bc-cta__desc">
				Cada evento es una oportunidad para hacer que una marca suceda en el mundo real. ¿Tienes un próximo evento, lanzamiento o activación? Conversemos y hagamos que tu audiencia sea parte de la experiencia.
			</p>
			<a href="#contacto" class="bc-cta__btn open-contact-modal" data-service="Eventos y Activaciones">
				<span>Contactar ahora</span>
				<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
			</a>
		</div>
	</section>

</main>

<?php
get_footer();
