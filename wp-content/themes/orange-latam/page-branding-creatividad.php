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
	     6. ENTREGABLES REALES EN LA ERA DE LA IA
	     ========================================== -->
	<section class="bc-deliverables" id="entregables">
		<div class="bc-container" data-reveal="up">
			<div class="bc-deliverables__header">
				<span class="bc-section-tag">Entregables & Tangibles</span>
				<h2 class="bc-section-title">Lo que recibes al finalizar tu proyecto de Branding</h2>
				<p class="bc-deliverables__sub">
					Entregables claros, estructurados y preparados para operar con máxima calidad, originalidad y coherencia en todos los canales.
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
				<div class="bc-deliv-card">
					<div class="bc-deliv-card__icon">✨</div>
					<div class="bc-deliv-card__badge">Escalabilidad de Marca</div>
					<h3 class="bc-deliv-card__title">Guía de Consistencia & Manual de Estilo</h3>
					<p class="bc-deliv-card__desc">Reglas de aplicación gráfica, parámetros de estilo y guías de producción para que tu equipo interno genere piezas respetando el 100% de la identidad original.</p>
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
	     8. BANNER TRABAJEMOS JUNTOS (CONTACTO)
	     ========================================== -->
	<section class="bc-cta" id="contacto">
		<div class="bc-cta__container" data-reveal="up">
			<span class="bc-cta__tag">Branding & Dirección de Arte</span>
			<h2 class="bc-cta__title">Trabajemos juntos</h2>
			<p class="bc-cta__desc">¿Listo para construir una marca memorable con estrategia, creatividad e IA? Conversemos sobre tu próximo proyecto.</p>
			<a href="#contacto" class="bc-cta__btn open-contact-modal" data-service="Branding y Creatividad">
				<span>Contactar ahora</span>
				<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
			</a>
		</div>
	</section>



<?php
get_footer();

