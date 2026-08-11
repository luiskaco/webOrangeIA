<?php
/**
 * Template Name: Branding y Creatividad
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
      "serviceType": "Agencia de Branding, Naming, Identidad de Marca y Dirección de Arte",
      "provider": {
        "@type": "Organization",
        "name": "Orange Latam"
      },
      "areaServed": "PE",
      "url": "<?php echo esc_url( home_url( '/branding-creatividad/' ) ); ?>",
      "description": "Creamos, posicionamos y hacemos deseables las marcas: naming, identidad, dirección de arte y creatividad de alto impacto. Agencia de branding en Lima."
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "¿Cómo se integra la Inteligencia Artificial en el proceso de branding y naming?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Usamos IA para acelerar la investigación de mercado, el mapeo de territorios y el testing de conceptos, combinando velocidad algorítmica con criterio estratégico y dirección de arte humana."
          }
        },
        {
          "@type": "Question",
          "name": "Si la IA puede generar imágenes y logos, ¿por qué invertir en una agencia de branding?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "La IA genera imágenes aleatorias, no estrategia ni diferenciación real. En la era de la IA, el riesgo es volverse genérico. Una agencia construye propósito, narrativa y activos de marca protegibles."
          }
        },
        {
          "@type": "Question",
          "name": "¿Cómo aseguran la consistencia de marca en contenido producido con herramientas de IA?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Entregamos Brandbooks dinámicos y reglas de Prompt Engineering de marca para que tus equipos y modelos generativos mantengan la coherencia estética exacta en cada pieza."
          }
        },
        {
          "@type": "Question",
          "name": "¿Qué ocurre con la protección legal y derechos de autor en marcas creadas en la era de la IA?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Todo activo entregado es 100% original, refinado por diseñadores y verificado para su registro exclusivo en Indecopi sin riesgos legales."
          }
        }
      ]
    }
  ]
}
</script>

<main class="bc-page">

	<!-- ==========================================
	     1. HERO SECTION
	     ========================================== -->
	<section class="bc-hero">
		<div class="bc-hero__container">
			<div class="bc-hero__content" data-reveal="up">
				<h1 class="bc-hero__title">
					Branding y Creatividad que <span class="bc-hero__title-accent">Hacen Deseable</span> tu Marca
				</h1>

				<p class="bc-hero__lead">
					Como <strong>agencia de branding en Lima</strong>, creamos, posicionamos y hacemos deseables las marcas mediante estrategia, <strong>naming</strong>, <strong>diseño de identidad de marca</strong> y <strong>dirección de arte</strong> de alto impacto.
				</p>
			</div>

			<!-- Hero visual showcase cards inspired by reference layout -->
			<div class="bc-hero__visual" data-reveal="left">
				<div class="bc-hero__card-main">
					<div class="bc-hero__card-header">
						<span class="bc-hero__card-tag">Estrategia e Identidad</span>
						<span class="bc-hero__card-status">Plataforma Activa</span>
					</div>
					<h3 class="bc-hero__card-heading">Plataforma de Marca Orange™</h3>
					<p class="bc-hero__card-subtext">Estrategia, creatividad y dirección de arte para desarrollar marcas con propósito, personalidad y diferenciación real.</p>
					
					<div class="bc-hero__metrics">
						<div class="bc-hero__metric-item">
							<span class="bc-hero__metric-value">100%</span>
							<span class="bc-hero__metric-label">Identidad Única</span>
						</div>
						<div class="bc-hero__metric-item">
							<span class="bc-hero__metric-value">+80%</span>
							<span class="bc-hero__metric-label">Recordación de Marca</span>
						</div>
					</div>

					<div class="bc-hero__card-footer">
						<div class="bc-hero__avatars">
							<div class="bc-hero__avatar">O</div>
							<div class="bc-hero__avatar bc-hero__avatar--2">R</div>
							<div class="bc-hero__avatar bc-hero__avatar--3">G</div>
						</div>
						<span class="bc-hero__footer-note">Agencia de Branding en Lima</span>
					</div>
				</div>

				<!-- Floating sub-card elements -->
				<div class="bc-hero__float-badge bc-hero__float-badge--top">
					<div class="bc-hero__float-icon">
						<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
					</div>
					<div>
						<strong>Estrategia Integral</strong>
						<span>Propósito & Valor</span>
					</div>
				</div>

				<div class="bc-hero__float-badge bc-hero__float-badge--bottom">
					<div class="bc-hero__float-icon bc-hero__float-icon--neon">
						<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
					</div>
					<div>
						<strong>Posicionamiento</strong>
						<span>Diferenciación Real</span>
					</div>
				</div>
			</div>
		</div>

		<!-- Client / Partner Logos bar -->
		<div class="bc-hero__partners">
			<div class="bc-hero__partners-container">
				<span class="bc-hero__partners-title">Marcas que han confiado en nuestro enfoque creativo</span>
				<div class="bc-hero__partners-logos">
					<span class="bc-partner-tag">Retail & Fast Food</span>
					<span class="bc-partner-tag">Fintech & Banca</span>
					<span class="bc-partner-tag">HealthTech</span>
					<span class="bc-partner-tag">Corporativo & Real Estate</span>
					<span class="bc-partner-tag">Consumo Masivo</span>
				</div>
			</div>
		</div>
	</section>

	<!-- ==========================================
	     2. VALOR ESTRATÉGICO & PROPÓSITO
	     ========================================== -->
	<section class="bc-purpose">
		<div class="bc-container">
			<div class="bc-purpose__wrapper" data-reveal="up">
				<div class="bc-purpose__header">
					<span class="bc-section-tag">Enfoque Orange Latam</span>
					<h2 class="bc-section-title">Estrategia, creatividad y diseño con propósito</h2>
				</div>
				<div class="bc-purpose__body">
					<p class="bc-purpose__text">
						En Orange Latam combinamos estrategia, creatividad y diseño para construir plataformas de marca con propósito, personalidad y valor de negocio real.
					</p>
				</div>
			</div>

			<!-- 3 Core Pillars -->
			<div class="bc-pillars__grid" data-reveal="up">
				<div class="bc-pillar-card">
					<div class="bc-pillar-card__number">01</div>
					<h3 class="bc-pillar-card__title">Entender el Negocio</h3>
					<p class="bc-pillar-card__desc">Analizamos la categoría y los objetivos de negocio para cimentar la marca en bases sólidas.</p>
				</div>
				<div class="bc-pillar-card bc-pillar-card--highlight">
					<div class="bc-pillar-card__number">02</div>
					<h3 class="bc-pillar-card__title">Conectar con Audiencias</h3>
					<p class="bc-pillar-card__desc">Decodificamos drivers emocionales para definir una personalidad auténtica y memorable.</p>
				</div>
				<div class="bc-pillar-card">
					<div class="bc-pillar-card__number">03</div>
					<h3 class="bc-pillar-card__title">Generar Valor Sostenible</h3>
					<p class="bc-pillar-card__desc">Transformamos la identidad en sistemas gráficos flexibles para canales físicos y digitales.</p>
				</div>
			</div>
		</div>
	</section>

	<!-- ==========================================
	     3. NUESTRO SERVICIO DE BRANDING (LAYOUT INSPIRADO EN REFERENCIA)
	     ========================================== -->
	<section class="bc-services" id="servicios-branding">
		<div class="bc-container">
			
			<!-- Top Row: Header Block + 2 Cards -->
			<div class="bc-services__top-row">
				
				<!-- Left Header Block -->
				<div class="bc-services__header-block" data-reveal="up">
					<div class="bc-services__tag">
						<span class="bc-services__spark">✦</span>
						<span>Servicio Integral</span>
					</div>
					<h2 class="bc-services__title">Nuestro servicio de Branding: del naming al posicionamiento</h2>
					<p class="bc-services__desc">
						Unimos estrategia y creatividad para definir propuestas de valor sólidas y construir identidades de marca relevantes y sostenibles.
					</p>
					<a href="#contacto" class="bc-services__btn open-contact-modal">
						<span>Habla con un Especialista</span>
						<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
					</a>
				</div>

				<!-- Card 1: Estrategia de marca -->
				<div class="bc-cat-card bc-cat-card--purple" data-reveal="up">
					<div class="bc-cat-card__visual">
						<img class="bc-cat-card__img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/branding/strategy.png" alt="Estrategia de marca" loading="lazy">
					</div>
					<div class="bc-cat-card__content">
						<h3 class="bc-cat-card__title">Estrategia de marca</h3>
						<p class="bc-cat-card__text">Propósito, propuesta de valor y territorios de comunicación.</p>
					</div>
				</div>

				<!-- Card 2: Naming -->
				<div class="bc-cat-card bc-cat-card--pink" data-reveal="up">
					<div class="bc-cat-card__visual">
						<img class="bc-cat-card__img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/branding/naming.png" alt="Naming de marca" loading="lazy">
					</div>
					<div class="bc-cat-card__content">
						<h3 class="bc-cat-card__title">Naming</h3>
						<p class="bc-cat-card__text">Creación y evaluación de nombres memorables y registrables.</p>
					</div>
				</div>

			</div>

			<!-- Bottom Row: 4 Cards in 1 Single Line -->
			<div class="bc-services__bottom-row">

				<!-- Card 3: Creación de marca -->
				<div class="bc-cat-card bc-cat-card--blue" data-reveal="up">
					<div class="bc-cat-card__visual">
						<img class="bc-cat-card__img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/branding/creation.png" alt="Creación de marca" loading="lazy">
					</div>
					<div class="bc-cat-card__content">
						<h3 class="bc-cat-card__title">Creación de marca</h3>
						<p class="bc-cat-card__text">Desarrollo integral de elementos de identidad diferenciada.</p>
					</div>
				</div>

				<!-- Card 4: Diseño de identidad de marca -->
				<div class="bc-cat-card bc-cat-card--peach" data-reveal="up">
					<div class="bc-cat-card__visual">
						<img class="bc-cat-card__img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/branding/identity.png" alt="Diseño de identidad de marca" loading="lazy">
					</div>
					<div class="bc-cat-card__content">
						<h3 class="bc-cat-card__title">Diseño de identidad</h3>
						<p class="bc-cat-card__text">Códigos visuales, paletas, tipografía y manuales de marca.</p>
					</div>
				</div>

				<!-- Card 5: Arquitectura de marca -->
				<div class="bc-cat-card bc-cat-card--teal" data-reveal="up">
					<div class="bc-cat-card__visual">
						<img class="bc-cat-card__img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/branding/architecture.png" alt="Arquitectura de marca" loading="lazy">
					</div>
					<div class="bc-cat-card__content">
						<h3 class="bc-cat-card__title">Arquitectura de marca</h3>
						<p class="bc-cat-card__text">Organización estratégica de portafolios y submarcas.</p>
					</div>
				</div>

				<!-- Card 6: Posicionamiento -->
				<div class="bc-cat-card bc-cat-card--lavender" data-reveal="up">
					<div class="bc-cat-card__visual">
						<img class="bc-cat-card__img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/branding/positioning.png" alt="Posicionamiento de marca" loading="lazy">
					</div>
					<div class="bc-cat-card__content">
						<h3 class="bc-cat-card__title">Posicionamiento</h3>
						<p class="bc-cat-card__text">Espacio estratégico en la mente de tus audiencias.</p>
					</div>
				</div>

			</div>

			<!-- Highlight Callout Banner -->
			<div class="bc-callout-banner" data-reveal="up">
				<div class="bc-callout-banner__content">
					<div class="bc-callout-banner__icon">
						<svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
					</div>
					<div class="bc-callout-banner__text">
						<h3>¿Cómo crear una marca desde cero?</h3>
						<p>
							Conectamos el análisis del negocio con la creatividad. Como <strong>agencia de branding en Lima</strong>, diseñamos marcas preparadas para destacar, conectar con sus audiencias y liderar sus mercados.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ==========================================
	     4. CREATIVIDAD Y DIRECCIÓN DE ARTE
	     ========================================== -->
	<section class="bc-art-direction" id="creatividad-direccion-arte">
		<div class="bc-container">
			<div class="bc-art__split" data-reveal="up">
				<div class="bc-art__info">
					<span class="bc-section-tag bc-section-tag--neon">Expresión Visual & Motion</span>
					<h2 class="bc-art__title">Creatividad y Dirección de Arte</h2>
					<p class="bc-art__quote">
						«La estrategia define qué decir; la creatividad encuentra cómo hacerlo memorable.»
					</p>
					<p class="bc-art__desc">
						Traducimos la estrategia en sistemas visuales y <strong>dirección de arte</strong> de alto impacto, garantizando coherencia, flexibilidad y memorabilidad en cada punto de contacto.
					</p>

					<div class="bc-art__note-box">
						<p>Identidad visual consistente, adaptable a canales digitales y preparada para evolucionar.</p>
					</div>
				</div>

				<div class="bc-art__capabilities">
					<h3 class="bc-art__capabilities-title">Nuestras áreas de trabajo:</h3>
					
					<ul class="bc-art__list">
						<li class="bc-art__item">
							<span class="bc-art__check">✓</span>
							<div>
								<strong>Conceptualización y desarrollo de ideas creativas</strong>
								<span>Generación de conceptos paraguas para marcas y productos.</span>
							</div>
						</li>
						<li class="bc-art__item">
							<span class="bc-art__check">✓</span>
							<div>
								<strong>Dirección de arte para campañas y plataformas de comunicación</strong>
								<span>Supervisión estética integral en foto, video y digital.</span>
							</div>
						</li>
						<li class="bc-art__item">
							<span class="bc-art__check">✓</span>
							<div>
								<strong>Desarrollo de sistemas gráficos y visuales</strong>
								<span>Patrones, ilustraciones, grillas y lenguaje visual de marca.</span>
							</div>
						</li>
						<li class="bc-art__item">
							<span class="bc-art__check">✓</span>
							<div>
								<strong>Diseño de identidad de marca y lineamientos visuales</strong>
								<span>Sistemas de diseño dinámicos para equipos internos.</span>
							</div>
						</li>
						<li class="bc-art__item">
							<span class="bc-art__check">✓</span>
							<div>
								<strong>Diseño de piezas y aplicaciones de marca</strong>
								<span>Packaging, kits corporativos, señalética y plataformas web.</span>
							</div>
						</li>
						<li class="bc-art__item">
							<span class="bc-art__check">✓</span>
							<div>
								<strong>Adaptación de identidades a diferentes canales y formatos</strong>
								<span>Despliegue responsive para redes, eventos y vía pública.</span>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<!-- ==========================================
	<!-- ==========================================
	     5. CASOS Y RESULTADOS (SLIDER INTERACTIVO & MODAL UX)
	     ========================================== -->
	<section class="bc-cases" id="casos">
		<div class="bc-container">
			<div class="bc-cases__header-row" data-reveal="up">
				<div class="bc-cases__header">
					<span class="bc-section-tag">Portafolio en Acción</span>
					<h2 class="bc-section-title">Casos y resultados</h2>
					<p class="bc-cases__sub">
						Proyectos reales donde combinamos estrategia, naming, diseño de identidad y dirección de arte para generar impacto medible en el negocio.
					</p>
				</div>
				
				<!-- Slider Navigation Controls -->
				<div class="bc-slider-controls">
					<button type="button" class="bc-slider-btn bc-slider-btn--prev" aria-label="Caso anterior" id="bc-case-prev">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
					</button>
					<button type="button" class="bc-slider-btn bc-slider-btn--next" aria-label="Caso siguiente" id="bc-case-next">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
					</button>
				</div>
			</div>

			<!-- Interactive Cases Slider Track -->
			<div class="bc-cases__slider-wrapper" data-reveal="up">
				<div class="bc-cases__slider-track" id="bc-cases-track">
					
					<!-- Case 1 -->
					<article class="bc-case-card">
						<div class="bc-case-card__image-box">
							<div class="bc-case-card__placeholder bc-case-card__placeholder--1">
								<span class="bc-case-card__tag">Rebranding & Naming</span>
								<div class="bc-case-card__mockup-content">
									<span class="bc-case-card__brand-title">KREO FINTECH</span>
									<span class="bc-case-card__brand-subtitle">Plataforma Financiera Regional</span>
								</div>
							</div>
						</div>
						<div class="bc-case-card__info">
							<span class="bc-case-card__category">Banca & Fintech</span>
							<h3 class="bc-case-card__title">Rebranding integral para ecosistema financiero de inclusión</h3>
							<p class="bc-case-card__text">Estrategia de posicionamiento, naming y dirección de arte digital que impulsó la adopción de usuarios.</p>
							
							<div class="bc-case-card__footer">
								<div class="bc-case-card__metric">
									<strong>+180%</strong>
									<span>Engagement</span>
								</div>
								<button type="button" class="bc-case-card__btn-open bc-modal-trigger" data-case="1">
									<span>Ver caso completo</span>
									<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
								</button>
							</div>
						</div>
					</article>

					<!-- Case 2 -->
					<article class="bc-case-card">
						<div class="bc-case-card__image-box">
							<div class="bc-case-card__placeholder bc-case-card__placeholder--2">
								<span class="bc-case-card__tag">Identidad Visual & Packaging</span>
								<div class="bc-case-card__mockup-content">
									<span class="bc-case-card__brand-title">ORIX HEALTH</span>
									<span class="bc-case-card__brand-subtitle">Salud & Bienestar Omnicanal</span>
								</div>
							</div>
						</div>
						<div class="bc-case-card__info">
							<span class="bc-case-card__category">HealthTech & Retail</span>
							<h3 class="bc-case-card__title">Arquitectura de marca y diseño de experiencia de consumo</h3>
							<p class="bc-case-card__text">Construcción de identidad visual con códigos modernos, empaques ecológicos y sistema gráfico multiplataforma.</p>
							
							<div class="bc-case-card__footer">
								<div class="bc-case-card__metric">
									<strong>4.2x</strong>
									<span>Ventas E-commerce</span>
								</div>
								<button type="button" class="bc-case-card__btn-open bc-modal-trigger" data-case="2">
									<span>Ver caso completo</span>
									<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
								</button>
							</div>
						</div>
					</article>

					<!-- Case 3 -->
					<article class="bc-case-card">
						<div class="bc-case-card__image-box">
							<div class="bc-case-card__placeholder bc-case-card__placeholder--3">
								<span class="bc-case-card__tag">Estrategia & Dirección de Arte</span>
								<div class="bc-case-card__mockup-content">
									<span class="bc-case-card__brand-title">LUMEN REALTY</span>
									<span class="bc-case-card__brand-subtitle">Desarrollo Inmobiliario Premium</span>
								</div>
							</div>
						</div>
						<div class="bc-case-card__info">
							<span class="bc-case-card__category">Corporativo & Real Estate</span>
							<h3 class="bc-case-card__title">Posicionamiento de marca para proyectos urbanos sostenibles</h3>
							<p class="bc-case-card__text">Territorios de comunicación y campaña visual de lanzamiento que consolidaron la reputación de marca.</p>
							
							<div class="bc-case-card__footer">
								<div class="bc-case-card__metric">
									<strong>100%</strong>
									<span>Vendido en Lanzamiento</span>
								</div>
								<button type="button" class="bc-case-card__btn-open bc-modal-trigger" data-case="3">
									<span>Ver caso completo</span>
									<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
								</button>
							</div>
						</div>
					</article>

					<!-- Case 4 -->
					<article class="bc-case-card">
						<div class="bc-case-card__image-box">
							<div class="bc-case-card__placeholder bc-case-card__placeholder--4">
								<span class="bc-case-card__tag">Naming & Plataforma de Marca</span>
								<div class="bc-case-card__mockup-content">
									<span class="bc-case-card__brand-title">NOVA BIOTECH</span>
									<span class="bc-case-card__brand-subtitle">Innovación en Agrotecnología</span>
								</div>
							</div>
						</div>
						<div class="bc-case-card__info">
							<span class="bc-case-card__category">Agro & Tecnología</span>
							<h3 class="bc-case-card__title">Creación de marca global para startup de biotecnología</h3>
							<p class="bc-case-card__text">Desarrollo de naming internacional, estrategia de valor y manual de marca interactivo para inversores.</p>
							
							<div class="bc-case-card__footer">
								<div class="bc-case-card__metric">
									<strong>+$12M</strong>
									<span>Levantamiento de Capital</span>
								</div>
								<button type="button" class="bc-case-card__btn-open bc-modal-trigger" data-case="4">
									<span>Ver caso completo</span>
									<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
								</button>
							</div>
						</div>
					</article>

				</div>
			</div>

			<!-- Portfolio CTA button -->
			<div class="bc-cases__action" data-reveal="up">
				<a href="#contacto" class="bc-btn bc-btn--cases open-contact-modal">
					<span>[Conoce nuestros casos y proyectos →]</span>
				</a>
			</div>
		</div>
	</section>

	<!-- ==========================================
	     6. ENTREGABLES REALES EN LA ERA DE LA IA
	     ========================================== -->
	<section class="bc-deliverables" id="entregables">
		<div class="bc-container" data-reveal="up">
			<div class="bc-deliverables__header">
				<span class="bc-section-tag">Entregables & Tangibles</span>
				<h2 class="bc-section-title">Lo que recibes al finalizar tu proyecto de Branding</h2>
				<p class="bc-deliverables__sub">
					Entregables claros, estructurados y preparados para operar en la era digital e IA con máxima calidad y coherencia.
				</p>
			</div>

			<div class="bc-deliverables__grid">
				
				<!-- Item 1 -->
				<div class="bc-deliv-card">
					<div class="bc-deliv-card__icon">📘</div>
					<div class="bc-deliv-card__badge">Design System</div>
					<h3 class="bc-deliv-card__title">Brandbook Digital Interactivo</h3>
					<p class="bc-deliv-card__desc">Manual de marca en PDF interactivo y formato Web con guías cromáticas, tipografías, retículas y reglas de uso.</p>
				</div>

				<!-- Item 2 -->
				<div class="bc-deliv-card">
					<div class="bc-deliv-card__icon">🎨</div>
					<div class="bc-deliv-card__badge">Formatos Master</div>
					<h3 class="bc-deliv-card__title">Paquete Vectorial Completo</h3>
					<p class="bc-deliv-card__desc">Isotipos, logotipos primarios/secundarios y versiones de alto contraste en SVG, EPS, AI y PNG sin fondo.</p>
				</div>

				<!-- Item 3 -->
				<div class="bc-deliv-card bc-deliv-card--highlight">
					<div class="bc-deliv-card__icon">🤖</div>
					<div class="bc-deliv-card__badge">Innovación IA</div>
					<h3 class="bc-deliv-card__title">Manual de Prompts & IA de Marca</h3>
					<p class="bc-deliv-card__desc">Tokens estéticos e instrucciones de Prompt Engineering para que tu equipo genere piezas alineadas en herramientas de IA.</p>
				</div>

				<!-- Item 4 -->
				<div class="bc-deliv-card">
					<div class="bc-deliv-card__icon">⚖️</div>
					<div class="bc-deliv-card__badge">Protección Legal</div>
					<h3 class="bc-deliv-card__title">Reporte de Viabilidad & Naming</h3>
					<p class="bc-deliv-card__desc">Estudio de disponibilidad de marca, evaluación fonética y dossier preparado para inscripción exclusiva en Indecopi.</p>
				</div>

				<!-- Item 5 -->
				<div class="bc-deliv-card">
					<div class="bc-deliv-card__icon">📦</div>
					<div class="bc-deliv-card__badge">Kit Omnicanal</div>
					<h3 class="bc-deliv-card__title">Plantillas de Aplicación Real</h3>
					<p class="bc-deliv-card__desc">Kits editables para presentaciones corporativas, redes sociales, firmas de correo, papelería y empaques 3D.</p>
				</div>

				<!-- Item 6 -->
				<div class="bc-deliv-card">
					<div class="bc-deliv-card__icon">📊</div>
					<div class="bc-deliv-card__badge">Estrategia de Marca</div>
					<h3 class="bc-deliv-card__title">Plataforma & Nivelación de Marca</h3>
					<p class="bc-deliv-card__desc">Documento de arquitectura de marca, definición de propósito, tono de voz y territorios de comunicación.</p>
				</div>

			</div>
		</div>
	</section>

	<!-- ==========================================
	     7. PREGUNTAS FRECUENTES (FAQ ACCORDION DEDICADO)
	     ========================================== -->
	<section class="bc-faq" id="faq">
		<div class="bc-container" data-reveal="up">
			<div class="bc-faq__header">
				<span class="bc-section-tag">Dudas Frecuentes</span>
				<h2 class="bc-faq__title">Preguntas frecuentes sobre Branding en la era de la IA</h2>
			</div>

			<div class="bc-faq__wrapper">
				
				<div class="bc-faq__list">
					
					<details class="bc-faq__item" open>
						<summary class="bc-faq__question">
							<span>¿Cómo se integra la Inteligencia Artificial (IA) en el proceso de creación y estrategia de marca?</span>
							<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
						</summary>
						<div class="bc-faq__answer">
							<p>La IA acelera la investigación de mercado y el análisis competitivo. Combinamos modelos IA con dirección de arte humana para crear marcas precisas y ágiles.</p>
							
							<!-- Visual Example Box -->
							<div class="bc-faq__example-box">
								<div class="bc-faq__example-badge">Ejemplo de Metodología Hybrid-AI™</div>
								<div class="bc-faq__example-grid">
									<div class="bc-faq__example-chip">
										<strong>1. Exploración IA</strong>
										<span>Mapeo de +500 referencias en minutos</span>
									</div>
									<div class="bc-faq__example-chip bc-faq__example-chip--active">
										<strong>2. Filtro Estratégico</strong>
										<span>Validación de negocio y viabilidad</span>
									</div>
									<div class="bc-faq__example-chip">
										<strong>3. Dirección de Arte</strong>
										<span>Pulido y vectorización 100% humana</span>
									</div>
								</div>
							</div>
						</div>
					</details>

					<details class="bc-faq__item">
						<summary class="bc-faq__question">
							<span>Si cualquiera puede generar logos con IA, ¿por qué contratar una agencia de branding?</span>
							<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
						</summary>
						<div class="bc-faq__answer">
							<p>La IA genera imágenes inmediatas, pero no estrategia ni diferenciación real. El riesgo es caer en la homogeneidad visual ("clones de IA"). Una agencia construye narrativa, valor y activos de marca protegibles.</p>
							
							<!-- Comparison Example Box -->
							<div class="bc-faq__example-box">
								<div class="bc-faq__example-badge">Diferencia Real de Impacto</div>
								<div class="bc-faq__compare">
									<div class="bc-faq__compare-item bc-faq__compare-item--negative">
										<strong>Logo de IA Genérica</strong>
										<span>Sin estrategia, sin derechos de autor, idéntico a competidores.</span>
									</div>
									<div class="bc-faq__compare-item bc-faq__compare-item--positive">
										<strong>Plataforma de Marca Orange™</strong>
										<span>Estrategia de posicionamiento, activos vectoriales únicos e inscripción legal.</span>
									</div>
								</div>
							</div>
						</div>
					</details>

					<details class="bc-faq__item">
						<summary class="bc-faq__question">
							<span>¿Cómo garantizan la consistencia de marca en contenido producido con herramientas de IA?</span>
							<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
						</summary>
						<div class="bc-faq__answer">
							<p>Desarrollamos Brandbooks dinámicos con reglas de Prompt Engineering de marca. Entregamos tokens de estilo para que tus equipos o sistemas automatizados generen piezas respetando la estética de marca.</p>
							
							<!-- Prompt Engineering Example Box -->
							<div class="bc-faq__prompt-box">
								<span class="bc-faq__prompt-label">Ejemplo de Token de Marca para IA incluido en tu Brandbook:</span>
								<code>/prompt: [Subject] --style Brand-Orange-v4 --colors #091F34, #70B5E3, #EE894F --lighting Editorial Studio --no gradient-mesh, generic-stock</code>
							</div>
						</div>
					</details>

					<details class="bc-faq__item">
						<summary class="bc-faq__question">
							<span>¿Qué ocurre con la protección legal y derechos de autor de una marca creada en la era de la IA?</span>
							<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
						</summary>
						<div class="bc-faq__answer">
							<p>Garantizamos que todos los activos finales entregados sean 100% originales, pulidos por diseñadores sénior y verificados legalmente para su registro exclusivo en Indecopi sin contingencias.</p>
						</div>
					</details>

					<details class="bc-faq__item">
						<summary class="bc-faq__question">
							<span>¿Realizan rebranding para empresas consolidadas que necesitan adaptarse a la era digital e IA?</span>
							<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
						</summary>
						<div class="bc-faq__answer">
							<p>Absolutamente. Ayudamos a marcas tradicionales a modernizar su posicionamiento e identidad visual para que compitan con ventaja en ecosistemas digitales e impulsados por IA.</p>
						</div>
					</details>

				</div>

			</div>
		</div>
	</section>

	<!-- ==========================================
	     MODAL DE DETALLE DE CASO DE ÉXITO (UX ENHANCED)
	     ========================================== -->
	<div class="bc-modal" id="bc-case-modal" aria-hidden="true" role="dialog" aria-labelledby="bc-modal-title">
		<div class="bc-modal__overlay" id="bc-modal-overlay"></div>
		<div class="bc-modal__dialog">
			<button type="button" class="bc-modal__close" id="bc-modal-close" aria-label="Cerrar modal">
				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
			</button>

			<div class="bc-modal__header">
				<span class="bc-modal__category" id="bc-modal-cat">Categoría</span>
				<h3 class="bc-modal__title" id="bc-modal-title">Título del Caso</h3>
				<span class="bc-modal__subtitle" id="bc-modal-subtitle">Subtítulo o cliente</span>
			</div>

			<div class="bc-modal__body">
				<div class="bc-modal__metrics-bar" id="bc-modal-metrics">
					<!-- Dynamic metrics rendered by JS -->
				</div>

				<div class="bc-modal__section">
					<h4>Desafío Estratégico</h4>
					<p id="bc-modal-challenge">Descripción del reto inicial del cliente.</p>
				</div>

				<div class="bc-modal__section">
					<h4>Solución & Dirección de Arte</h4>
					<p id="bc-modal-solution">Estrategia, naming, sistema de diseño e identidad visual aplicada.</p>
				</div>

				<div class="bc-modal__section">
					<h4>Impacto & Resultados Medibles</h4>
					<p id="bc-modal-results">Resultados clave alcanzados con la nueva plataforma de marca.</p>
				</div>
			</div>

			<div class="bc-modal__footer">
				<a href="#contacto" class="bc-btn bc-btn--primary open-contact-modal" id="bc-modal-cta">
					<span>Solicitar propuesta similar</span>
					<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
				</a>
			</div>
		</div>
	</div>

</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
	// 1. Cases Slider Logic
	const track = document.getElementById('bc-cases-track');
	const prevBtn = document.getElementById('bc-case-prev');
	const nextBtn = document.getElementById('bc-case-next');

	if (track && prevBtn && nextBtn) {
		const cardWidth = 360; // Card width + gap
		
		prevBtn.addEventListener('click', () => {
			track.scrollBy({ left: -cardWidth, behavior: 'smooth' });
		});

		nextBtn.addEventListener('click', () => {
			track.scrollBy({ left: cardWidth, behavior: 'smooth' });
		});
	}

	// 2. Cases Modal Data & Logic
	const casesData = {
		"1": {
			category: "Banca & Fintech",
			title: "Rebranding integral para ecosistema financiero de inclusión",
			subtitle: "KREO FINTECH",
			metrics: [
				{ val: "+180%", label: "Engagement" },
				{ val: "3.5x", label: "Registro de usuarios" },
				{ val: "94%", label: "Aprobación de marca" }
			],
			challenge: "Kreo Fintech contaba con una identidad técnica desactualizada que no conectaba emocionalmente con jóvenes profesionales e independientes que buscaban acceso a servicios financieros ágiles.",
			solution: "Desarrollamos una nueva estrategia de posicionamiento con el territorio de marca 'Finanzas sin fricción', rediseñamos el naming de productos clave y creamos un sistema visual dinámico con motion design para la app móvil.",
			results: "El rebranding logró aumentar en 180% la tasa de retención de usuarios activos durante los primeros 90 días de lanzamiento y facilitó el cierre de rondas de inversión regional."
		},
		"2": {
			category: "HealthTech & Retail",
			title: "Arquitectura de marca y diseño de experiencia omnicanal",
			subtitle: "ORIX HEALTH",
			metrics: [
				{ val: "4.2x", label: "Ventas E-commerce" },
				{ val: "100%", label: "Empaques sostenibles" },
				{ val: "+65%", label: "Recompra directa" }
			],
			challenge: "La marca contaba con más de 15 productos dispersos sin una estructura visual clara, lo que generaba confusión en puntos de venta físicos y plataformas digitales.",
			solution: "Implementamos una arquitectura de marca monolítica, creamos códigos cromáticos limpios para cada línea de salud y diseñamos empaques ecológicos con dirección de arte minimalista.",
			results: "Unificó el catálogo de productos bajo una propuesta clara, multiplicando por 4.2x las ventas en el canal e-commerce y obteniendo reconocimiento en diseño sustentable."
		},
		"3": {
			category: "Corporativo & Real Estate",
			title: "Posicionamiento de marca para proyectos urbanos sostenibles",
			subtitle: "LUMEN REALTY",
			metrics: [
				{ val: "100%", label: "Vendido en Lanzamiento" },
				{ val: "4 Meses", label: "Tiempo récord" },
				{ val: "+200%", label: "Leads cualificados" }
			],
			challenge: "Posicionar una nueva línea de desarrollos urbanos de alto valor ambiental frente a competidores inmobiliarios tradicionales con presupuestos masivos.",
			solution: "Construimos la narrativa 'Espacios con Propósito', combinando renderizado 3D de alta gama, dirección de arte editorial y una campaña visual de lanzamiento centrada en estilo de vida consciente.",
			results: "Se comercializó el 100% de las unidades residenciales durante la fase de preventa, 4 meses antes de la proyección estimada del proyecto."
		},
		"4": {
			category: "Agro & Tecnología",
			title: "Creación de marca global para startup de biotecnología",
			subtitle: "NOVA BIOTECH",
			metrics: [
				{ val: "+$12M", label: "Levantamiento de Capital" },
				{ val: "Global", label: "Expansión en 4 países" },
				{ val: "1er Lugar", label: "Premio Innovación 2025" }
			],
			challenge: "Traducir biotecnología agrícola compleja en un nombre y sistema de marca atractivo para fondos de capital de riesgo internacionales y agricultores locales.",
			solution: "Creamos el naming 'Nova BioTech', diseñamos un logotipo sintético de alto impacto y estructuramos un manual de marca interactivo (Brandbook) para presentaciones de pitching.",
			results: "La startup logró levantar $12M en su ronda Serie A y expandir sus operaciones comerciales a 4 mercados de la región Latam."
		}
	};

	const modal = document.getElementById('bc-case-modal');
	const overlay = document.getElementById('bc-modal-overlay');
	const closeBtn = document.getElementById('bc-modal-close');
	const triggers = document.querySelectorAll('.bc-modal-trigger');

	function openModal(caseId) {
		const data = casesData[caseId];
		if (!data || !modal) return;

		document.getElementById('bc-modal-cat').textContent = data.category;
		document.getElementById('bc-modal-title').textContent = data.title;
		document.getElementById('bc-modal-subtitle').textContent = data.subtitle;
		document.getElementById('bc-modal-challenge').textContent = data.challenge;
		document.getElementById('bc-modal-solution').textContent = data.solution;
		document.getElementById('bc-modal-results').textContent = data.results;

		// Render metrics
		const metricsContainer = document.getElementById('bc-modal-metrics');
		metricsContainer.innerHTML = data.metrics.map(m => `
			<div class="bc-modal__metric-card">
				<strong>${m.val}</strong>
				<span>${m.label}</span>
			</div>
		`).join('');

		modal.setAttribute('aria-hidden', 'false');
		modal.classList.add('is-open');
		document.body.style.overflow = 'hidden';
	}

	function closeModal() {
		if (!modal) return;
		modal.setAttribute('aria-hidden', 'true');
		modal.classList.remove('is-open');
		document.body.style.overflow = '';
	}

	triggers.forEach(btn => {
		btn.addEventListener('click', (e) => {
			e.preventDefault();
			const caseId = btn.getAttribute('data-case');
			openModal(caseId);
		});
	});

	if (closeBtn) closeBtn.addEventListener('click', closeModal);
	if (overlay) overlay.addEventListener('click', closeModal);

	document.addEventListener('keydown', (e) => {
		if (e.key === 'Escape' && modal && modal.classList.contains('is-open')) {
			closeModal();
		}
	});
});
</script>

<?php
get_footer();

