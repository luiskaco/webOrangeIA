<?php
/**
 * Template Name: PR y Gestión de la Reputación
 * Template Post Type: page
 *
 * @package Orange_Latam
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

$theme_uri = get_template_directory_uri();
$pr_img_uri = $theme_uri . '/assets/images/pr';
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
      "serviceType": "Agencia de Relaciones Públicas y Gestión de Reputación",
      "provider": {
        "@type": "Organization",
        "name": "Orange Latam"
      },
      "areaServed": "PE",
      "url": "<?php echo esc_url( home_url( '/pr-gestion-reputacion/' ) ); ?>",
      "description": "Construimos y protegemos la reputación de tu marca con estrategias de PR, manejo de crisis y entrenamiento de voceros."
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "¿Cuánto cuesta contratar una agencia de relaciones públicas en Perú?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "El costo varía según el alcance del proyecto, el sector y los objetivos de comunicación. En Orange Latam diseñamos propuestas personalizadas tras un diagnóstico inicial — contáctanos para recibir una cotización ajustada a tu organización."
          }
        },
        {
          "@type": "Question",
          "name": "¿Cómo se maneja una crisis de reputación empresarial?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Con protocolos claros y un equipo especializado que actúa con rapidez: diagnóstico de riesgos, protocolos de crisis, gestión de medios durante la contingencia y monitoreo constante — cubriendo el antes, durante y después de la crisis."
          }
        },
        {
          "@type": "Question",
          "name": "¿Qué hace un vocero entrenado en una entrevista con medios?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Comunica con seguridad, claridad y coherencia: maneja preguntas difíciles, transmite los mensajes clave de la organización, cuida su comunicación verbal y no verbal, y mantiene el control de la conversación incluso en escenarios de crisis."
          }
        }
      ]
    }
  ]
}
</script>

<main class="pr-page">

	<!-- ==========================================
	     1. HERO SECTION
	     ========================================== -->
	<section class="pr-hero" id="inicio">
		<div class="pr-hero__container">
			<div class="pr-hero__content" data-reveal="left">

				<h1 class="pr-hero__title">Agencia de Relaciones Públicas y Gestión de la Reputación</h1>

				<p class="pr-hero__desc">
					Construimos y protegemos la reputación de tu marca, empresa u organización, con estrategias efectivas de posicionamiento, manejo de crisis y entrenamiento de voceros, con un impacto robusto en los negocios.
				</p>


			</div>

			<div class="pr-hero__media" data-reveal="right">
				<div class="pr-hero__photo-wrapper">
					<img class="pr-hero__photo" 
						src="<?php echo esc_url( $theme_uri . '/assets/images/services/pr-reputacion.png' ); ?>" 
						alt="Vocero dando entrevista de prensa - Agencia de PR Orange Latam">
				</div>

			</div>
		</div>
	</section>

	<!-- ==========================================
	     1b. PILARES CLAVE DE PR & REPUTACIÓN (SECCIÓN FIJA)
	     ========================================== -->
	<section class="pr-pillars-bar" aria-label="Especialidades de PR y Reputación">
		<div class="pr-pillars-bar__container">
			<div class="pr-pillars-bar__list" data-reveal="up">
				<div class="pr-pillars-bar__item">
					<span class="pr-pillars-bar__text">Relaciones Públicas</span>
				</div>
				<span class="pr-pillars-bar__star" aria-hidden="true">✦</span>
				<div class="pr-pillars-bar__item">
					<span class="pr-pillars-bar__text">Reputación corporativa</span>
				</div>
				<span class="pr-pillars-bar__star" aria-hidden="true">✦</span>
				<div class="pr-pillars-bar__item">
					<span class="pr-pillars-bar__text">Gestión de crisis</span>
				</div>
				<span class="pr-pillars-bar__star" aria-hidden="true">✦</span>
				<div class="pr-pillars-bar__item">
					<span class="pr-pillars-bar__text">Entrenamiento de voceros</span>
				</div>
				<span class="pr-pillars-bar__star" aria-hidden="true">✦</span>
				<div class="pr-pillars-bar__item">
					<span class="pr-pillars-bar__text">Posicionamiento mediático</span>
				</div>
			</div>
		</div>
	</section>

	<!-- ==========================================
	     2. QUÉ ES LA GESTIÓN DE REPUTACIÓN
	     ========================================== -->
	<section class="pr-about" id="que-es">
		<div class="pr-about__container">
			<div class="pr-about__main-col" data-reveal="left">
				<span class="pr-section-tag">Qué es</span>
				<h2 class="pr-about__title">La gestión de la reputación</h2>
				<p class="pr-about__lead">
					La gestión de reputación es el proceso estratégico con el que una organización construye, fortalece y protege la percepción que generan su marca, sus líderes y sus acciones ante clientes, medios, inversionistas y colaboradores.
				</p>
			</div>

			<div class="pr-about__side-col" data-reveal="right">
				<div class="pr-about__box">
					<div class="pr-about__box-line"></div>
					<p class="pr-about__box-text">
						No depende solo de lo que la empresa comunica, sino de lo que hace y de la confianza que construye con el tiempo.
					</p>
					<p class="pr-about__box-text">
						En <strong>Orange Latam</strong> ayudamos a construir reputaciones sólidas, con estrategias adaptadas al contexto peruano y regional.
					</p>
					<p class="pr-about__box-text">
						Como <strong>empresa experta en relaciones públicas con presencia en el Perú y otros países</strong>, combinamos investigación, creatividad y disciplina de datos para sostener esa reputación en el tiempo.
					</p>
				</div>
			</div>
		</div>
	</section>

	<!-- ==========================================
	     3. NUESTRO SERVICIO DE PR (DIAGRAMA RADIAL INTERACTIVO)
	     ========================================== -->
	<section class="pr-services" id="servicio-pr">
		<div class="pr-services__header-container">
			<div class="pr-services__header-col" data-reveal="up">
				<span class="pr-section-tag">Nuestro servicio</span>
				<h2 class="pr-services__title">PR y posicionamiento reputacional</h2>
				<p class="pr-services__desc">
					Diseñamos programas de PR que fortalecen la visibilidad, consolidan la credibilidad y generan conversaciones relevantes con las audiencias clave.
				</p>
			</div>
		</div>

		<div class="pr-services__diagram-wrapper" data-reveal="scale" id="js-pr-node-container">
			<!-- Mobile Accordion List (Visible < 768px) -->
			<div class="pr-services__mobile-list">
				<div class="pr-services__mobile-center">
					<div class="pr-services__mobile-center-badge">Reputación</div>
				</div>

				<div class="pr-services__mobile-items">
					<button class="pr-services__mobile-row js-pr-node-row" data-node-index="0">
						<div class="pr-services__mobile-icon">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M12 3a9 9 0 1 1-6.36 2.64L3 8 M3 3v5h5 M12 8v4l3 2" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
						</div>
						<span class="pr-services__mobile-label">Estrategias integrales de RRPP</span>
					</button>

					<button class="pr-services__mobile-row js-pr-node-row" data-node-index="1">
						<div class="pr-services__mobile-icon">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M4 4h14a2 2 0 0 1 2 2v14H4V4zm0 4h16 M8 12h8 M8 16h5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
						</div>
						<span class="pr-services__mobile-label">Gestión con medios de comunicación</span>
					</button>

					<button class="pr-services__mobile-row js-pr-node-row" data-node-index="2">
						<div class="pr-services__mobile-icon">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M4 19v-1a3 3 0 0 1 3-3 M4 9a2 2 0 1 1 0-4 2 2 0 0 1 0 4 M20 19v-1a3 3 0 0 0-3-3 M20 9a2 2 0 1 0 0-4 2 2 0 0 0 0 4 M12 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6z M7 21v-2a5 5 0 0 1 10 0v2 M12 2l.6 1.3 1.4.2-1 1 .2 1.5-1.2-.7-1.2.7.2-1.5-1-1 1.4-.2z" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
						</div>
						<span class="pr-services__mobile-label">Posicionamiento de líderes y voceros</span>
					</button>

					<button class="pr-services__mobile-row js-pr-node-row" data-node-index="3">
						<div class="pr-services__mobile-icon">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M12 19l7-7 3 3-7 7-5 1 2-4z M18 5l3 3 M2 21h20 M6 13L3 16v3h3l3-3" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
						</div>
						<span class="pr-services__mobile-label">Desarrollo de contenidos corporativos</span>
					</button>

					<button class="pr-services__mobile-row js-pr-node-row" data-node-index="4">
						<div class="pr-services__mobile-icon">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M9 18h6 M10 22h4 M12 2a7 7 0 0 0-5 11.9c.7.7 1 1.6 1 2.6v.5h8v-.5c0-1 .3-1.9 1-2.6A7 7 0 0 0 12 2z M12 6v4 M10 8h4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
						</div>
						<span class="pr-services__mobile-label">Comunicación ejecutiva y thought leadership</span>
					</button>

					<button class="pr-services__mobile-row js-pr-node-row" data-node-index="5">
						<div class="pr-services__mobile-icon">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M12 2l8 3.5v6c0 5.5-3.5 9.5-8 10.5-4.5-1-8-5-8-10.5v-6L12 2z M12 7.5l1.1 2.3 2.5.4-1.8 1.8.4 2.5-2.2-1.2-2.2 1.2.4-2.5-1.8-1.8 2.5-.4z" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
						</div>
						<span class="pr-services__mobile-label">Gestión de reputación corporativa</span>
					</button>

					<button class="pr-services__mobile-row js-pr-node-row" data-node-index="6">
						<div class="pr-services__mobile-icon">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M3 3v18h18 M6 15l4-5 4 3 6-7 M18 6h3v3 M14 13a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
						</div>
						<span class="pr-services__mobile-label">Monitoreo y análisis de impacto mediático</span>
					</button>

					<button class="pr-services__mobile-row js-pr-node-row" data-node-index="7">
						<div class="pr-services__mobile-icon">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M12 4a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z M6 12h12 M5 12l2 9h10l2-9 M9 8l-2-2 M15 8l2-2 M9 21h6 M9 12v-2a3 3 0 0 1 6 0v2" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
						</div>
						<span class="pr-services__mobile-label">Comunicación de lanzamientos y anuncios corporativos</span>
					</button>
				</div>
			</div>

			<!-- Desktop Interactive SVG Orbital Node Diagram (Visible >= 768px) -->
			<div class="pr-services__desktop-diagram">
				<svg viewBox="0 0 900 620" class="pr-services__svg" id="js-pr-node-svg">
					<!-- Connector Paths generated dynamically in JS -->
					<g id="js-pr-connectors"></g>

					<!-- Central Hub Node -->
					<circle cx="450" cy="310" r="58" class="pr-services__center-node" />
					<text x="450" y="316" text-anchor="middle" class="pr-services__center-text">Reputación</text>

					<!-- Orbital Interactive Service Nodes -->
					<g id="js-pr-nodes"></g>
				</svg>

				<!-- Interactive Floating Tooltip -->
				<div class="pr-services__tooltip" id="js-pr-tooltip">
					<div class="pr-services__tooltip-card">
						<span id="js-pr-tooltip-text"></span>
						<div class="pr-services__tooltip-arrow"></div>
					</div>
				</div>

				<div class="pr-services__hint">
					<em>Pasa el cursor o selecciona un ícono para explorar el servicio</em>
				</div>
			</div>
		</div>
	</section>

	<!-- ==========================================
	     4. GESTIÓN DE CRISIS Y PROBLEMAS
	     ========================================== -->
	<section class="pr-crisis" id="gestion-de-crisis">
		<div class="pr-crisis__container">
			<div class="pr-crisis__header" data-reveal="up">
				<span class="pr-section-tag pr-section-tag--cyan">Gestión de Crisis y Problemas</span>
				<h2 class="pr-crisis__title">Preparación antes que reacción</h2>
				<p class="pr-crisis__desc">
					Toda organización puede enfrentar una crisis, pero la diferencia está en la preparación y la velocidad de respuesta. Anticipamos riesgos, reducimos el impacto reputacional y protegemos la confianza de los públicos clave.
				</p>
			</div>

			<div class="pr-crisis__grid" data-stagger>
				<!-- Phase 1: ANTES -->
				<div class="pr-crisis__col">
					<div class="pr-crisis__phase-header">
						<span class="pr-crisis__phase-num">01</span>
						<span class="pr-crisis__phase-name">Antes</span>
					</div>
					<div class="pr-crisis__item">
						<div class="pr-crisis__icon-box">
							<svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-1 6h2v6h-2V7zm0 8h2v2h-2v-2z"/></svg>
						</div>
						<span class="pr-crisis__item-label">Diagnóstico y evaluación de riesgos reputacionales</span>
					</div>
					<div class="pr-crisis__item">
						<div class="pr-crisis__icon-box">
							<svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M18 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zM6 4h5v8l-2.5-1.5L6 12V4zm12 16H6v-2h12v2zm0-4H6v-2h12v2zm0-4h-5V6h5v6z"/></svg>
						</div>
						<span class="pr-crisis__item-label">Manuales y protocolos de crisis</span>
					</div>
				</div>

				<!-- Phase 2: DURANTE -->
				<div class="pr-crisis__col">
					<div class="pr-crisis__phase-header">
						<span class="pr-crisis__phase-num">02</span>
						<span class="pr-crisis__phase-name">Durante</span>
					</div>
					<div class="pr-crisis__item">
						<div class="pr-crisis__icon-box">
							<svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M20 2H4c-1.1 0-2 .9-2 2v18l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zM7 9h10v2H7V9zm6 4H7v-2h6v2zm4-6H7V5h10v2z"/></svg>
						</div>
						<span class="pr-crisis__item-label">Diseño de mensajes estratégicos</span>
					</div>
					<div class="pr-crisis__item">
						<div class="pr-crisis__icon-box">
							<svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 14c1.66 0 3-1.34 3-3V5c0-1.66-1.34-3-3-3S9 3.34 9 5v6c0 1.66 1.34 3 3 3zm5.3-3c0 3-2.54 5.1-5.3 5.1S6.7 14 6.7 11H5c0 3.41 2.72 6.23 6 6.72V21h2v-3.28c3.28-.48 6-3.3 6-6.72h-1.7z"/></svg>
						</div>
						<span class="pr-crisis__item-label">Gestión de medios durante contingencias</span>
					</div>
				</div>

				<!-- Phase 3: DESPUÉS -->
				<div class="pr-crisis__col">
					<div class="pr-crisis__phase-header">
						<span class="pr-crisis__phase-num">03</span>
						<span class="pr-crisis__phase-name">Después</span>
					</div>
					<div class="pr-crisis__item">
						<div class="pr-crisis__icon-box">
							<svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-10 14H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z"/></svg>
						</div>
						<span class="pr-crisis__item-label">Monitoreo de medios y redes sociales</span>
					</div>
					<div class="pr-crisis__item">
						<div class="pr-crisis__icon-box">
							<svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/></svg>
						</div>
						<span class="pr-crisis__item-label">Comité de crisis y asesoría ejecutiva</span>
					</div>
				</div>
			</div>

			<!-- Tagline Quote Box -->
			<div class="pr-crisis__quote-box" data-reveal="up">
				<blockquote class="pr-crisis__quote-text">
					<span class="pr-crisis__quote-mark">&ldquo;</span>Una crisis bien gestionada puede ser una oportunidad para demostrar transparencia y liderazgo<span class="pr-crisis__quote-mark">&rdquo;</span>.
				</blockquote>
			</div>
		</div>
	</section>

	<!-- ==========================================
	     4b. TEAM PHOTO BAND
	     ========================================== -->
	<section class="pr-photo-band">
		<div class="pr-photo-band__wrapper">
			<img class="pr-photo-band__img" 
				src="<?php echo esc_url( $theme_uri . '/assets/images/services/entrenamiento-voceros.png' ); ?>" 
				alt="Equipo de comunicaciones Orange Latam en reunión estratégica de PR">
		</div>
	</section>

	<!-- ==========================================
	     5. ENTRENAMIENTO DE VOCEROS
	     ========================================== -->
	<section class="pr-voceros" id="entrenamiento-voceros">
		<div class="pr-voceros__container">
			<div class="pr-voceros__header" data-reveal="up">
				<span class="pr-section-tag">Entrenamiento de Voceros</span>
				<h2 class="pr-voceros__title">Comunicar con seguridad y control</h2>
				<p class="pr-voceros__desc">
					Preparamos a ejecutivos y especialistas para comunicar con seguridad, claridad y coherencia frente a periodistas, inversionistas y audiencias internas.
				</p>
			</div>

			<div class="pr-voceros__grid" data-stagger>
				<div class="pr-voceros__card" data-reveal="up">
					<div class="pr-voceros__card-top">
						<span class="pr-voceros__card-num">01</span>
					</div>
					<h3 class="pr-voceros__card-title">Simulaciones de entrevistas</h3>
					<p class="pr-voceros__card-desc">Prácticas intensivas frente a cámara simulando escenarios reales de prensa, televisión, radio y medios digitales.</p>
				</div>

				<div class="pr-voceros__card" data-reveal="up">
					<div class="pr-voceros__card-top">
						<span class="pr-voceros__card-num">02</span>
					</div>
					<h3 class="pr-voceros__card-title">Manejo de preguntas difíciles</h3>
					<p class="pr-voceros__card-desc">Técnicas de puenteo (bridging), control de agenda y neutralización efectiva de cuestionamientos complejos.</p>
				</div>

				<div class="pr-voceros__card" data-reveal="up">
					<div class="pr-voceros__card-top">
						<span class="pr-voceros__card-num">03</span>
					</div>
					<h3 class="pr-voceros__card-title">Desarrollo de mensajes clave</h3>
					<p class="pr-voceros__card-desc">Estructuración y jerarquización de ideas fuerza claras, memorables y alineadas a los objetivos de negocio.</p>
				</div>

				<div class="pr-voceros__card" data-reveal="up">
					<div class="pr-voceros__card-top">
						<span class="pr-voceros__card-num">04</span>
					</div>
					<h3 class="pr-voceros__card-title">Comunicación verbal y no verbal</h3>
					<p class="pr-voceros__card-desc">Dominio del lenguaje corporal, modulación de voz, contacto visual y proyección de autoridad ejecutiva.</p>
				</div>

				<div class="pr-voceros__card" data-reveal="up">
					<div class="pr-voceros__card-top">
						<span class="pr-voceros__card-num">05</span>
					</div>
					<h3 class="pr-voceros__card-title">Storytelling corporativo</h3>
					<p class="pr-voceros__card-desc">Construcción de narrativas persuasivas que transforman datos técnicos en historias de alto impacto e interés público.</p>
				</div>

				<div class="pr-voceros__card" data-reveal="up">
					<div class="pr-voceros__card-top">
						<span class="pr-voceros__card-num">06</span>
					</div>
					<h3 class="pr-voceros__card-title">Escenarios de crisis</h3>
					<p class="pr-voceros__card-desc">Entrenamiento bajo presión para emitir declaraciones oficiales, contención de contingencias y defensa reputacional.</p>
				</div>
			</div>
		</div>
	</section>

	<!-- ==========================================
	     6. POR QUÉ ELEGIR ORANGE LATAM
	     ========================================== -->
	<section class="pr-why" id="por-que-elegirnos">
		<div class="pr-why__container">
			<div class="pr-why__grid">
				<div class="pr-why__left-col" data-reveal="left">
					<span class="pr-section-tag">Por qué elegir Orange Latam</span>
					<h2 class="pr-why__title">Estrategias que generan resultados medibles y confianza a largo plazo.</h2>
					<p class="pr-why__intro">Brindamos los servicios de <strong>agencia de PR en Lima, Perú</strong> y a nivel internacional, acompañando a organizaciones de distintos sectores con un equipo especializado de alto nivel.</p>
				</div>

				<div class="pr-why__right-col" data-reveal="right">
					<div class="pr-why__list">
						<div class="pr-why__item">
							<span class="pr-why__bullet"></span>
							<p class="pr-why__text">Equipo con experiencia integral en PR, posicionamiento ejecutivo, gestión de reputación, gestión de crisis y comunicación digital</p>
						</div>
						<div class="pr-why__item">
							<span class="pr-why__bullet"></span>
							<p class="pr-why__text">Enfoque personalizado, basado en indicadores y mejora continua</p>
						</div>
						<div class="pr-why__item">
							<span class="pr-why__bullet"></span>
							<p class="pr-why__text">Conocimiento profundo del ecosistema mediático latinoamericano</p>
						</div>
						<div class="pr-why__item">
							<span class="pr-why__bullet"></span>
							<p class="pr-why__text">Acompañamiento a organizaciones de distintos sectores en Perú y la región</p>
						</div>
					</div>

					<!-- Awards & Recognition Mini Carousel -->
					<div class="pr-why__logos-box js-pr-awards-carousel" data-reveal="up">
						<div class="pr-why__logos-top">
							<p class="pr-why__logos-note">AGENCIA PREMIADA Y RESPALDADA POR MARCAS LÍDERES EN LATINOAMÉRICA</p>
							<div class="pr-why__carousel-nav">
								<button type="button" class="pr-why__carousel-btn pr-why__carousel-btn--prev js-pr-carousel-prev" aria-label="Premio anterior">
									<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"></polyline></svg>
								</button>
								<button type="button" class="pr-why__carousel-btn pr-why__carousel-btn--next js-pr-carousel-next" aria-label="Siguiente premio">
									<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>
								</button>
							</div>
						</div>
						
						<div class="pr-why__carousel-viewport">
							<div class="pr-why__carousel-track js-pr-carousel-track">
								<div class="pr-why__award-card">
									<div class="pr-why__award-logo-box">
										<img class="pr-why__award-logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/awards/purpose-awards.webp" alt="Purpose Awards" loading="lazy">
									</div>
									<span class="pr-why__award-title">PURPOSE AWARDS</span>
								</div>

								<div class="pr-why__award-card">
									<div class="pr-why__award-logo-box">
										<img class="pr-why__award-logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/awards/pr-week-global-awards.webp" alt="PR Week Global Awards" loading="lazy">
									</div>
									<span class="pr-why__award-title">PR WEEK GLOBAL</span>
								</div>

								<div class="pr-why__award-card">
									<div class="pr-why__award-logo-box">
										<img class="pr-why__award-logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/awards/ipra-golden-world-awards.png" alt="IPRA Golden World Awards" loading="lazy">
									</div>
									<span class="pr-why__award-title">IPRA GOLDEN WORLD</span>
								</div>

								<div class="pr-why__award-card">
									<div class="pr-why__award-logo-box">
										<img class="pr-why__award-logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/awards/sabre-global-world-awards.png" alt="Sabre Latin America Awards" loading="lazy">
									</div>
									<span class="pr-why__award-title">SABRE AWARDS</span>
								</div>

								<div class="pr-why__award-card">
									<div class="pr-why__award-logo-box">
										<img class="pr-why__award-logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/awards/effie-awards.png" alt="Effie Awards" loading="lazy">
									</div>
									<span class="pr-why__award-title">EFFIE AWARDS</span>
								</div>

								<div class="pr-why__award-card">
									<div class="pr-why__award-logo-box">
										<img class="pr-why__award-logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/awards/cannes-lions.webp" alt="Cannes Lions" loading="lazy">
									</div>
									<span class="pr-why__award-title">CANNES LIONS</span>
								</div>
							</div>
						</div>

						<div class="pr-why__carousel-dots js-pr-carousel-dots"></div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ==========================================
	     7. BLOQUE PREGUNTAS FRECUENTES (FAQ)
	     ========================================== -->
	<section class="pr-faq">
		<div class="pr-faq__container" data-reveal="up">
			<span class="pr-section-tag">Preguntas frecuentes</span>
			<h2 class="pr-faq__title">Resolvemos tus dudas</h2>

			<dl class="pr-faq__accordion">
				<!-- FAQ 1 -->
				<div class="pr-faq__item js-pr-faq-item">
					<dt class="pr-faq__dt">
						<button class="pr-faq__button js-pr-faq-toggle" aria-expanded="false">
							<span class="pr-faq__question">¿Cuánto cuesta contratar una agencia de relaciones públicas en Perú?</span>
							<span class="pr-faq__icon-wrapper">
								<svg width="12" height="12" viewBox="0 0 12 12" class="pr-faq__icon"><path d="M6 0v12M0 6h12" stroke="#29ABE2" stroke-width="1.6"/></svg>
							</span>
						</button>
					</dt>
					<dd class="pr-faq__dd">
						<div class="pr-faq__answer-box">
							<p class="pr-faq__answer">
								El costo varía según el alcance del proyecto, el sector y los objetivos de comunicación. En Orange Latam diseñamos propuestas personalizadas tras un diagnóstico inicial — contáctanos para recibir una cotización ajustada a tu organización.
							</p>
						</div>
					</dd>
				</div>

				<!-- FAQ 2 -->
				<div class="pr-faq__item js-pr-faq-item">
					<dt class="pr-faq__dt">
						<button class="pr-faq__button js-pr-faq-toggle" aria-expanded="false">
							<span class="pr-faq__question">¿Cómo se maneja una crisis de reputación empresarial?</span>
							<span class="pr-faq__icon-wrapper">
								<svg width="12" height="12" viewBox="0 0 12 12" class="pr-faq__icon"><path d="M6 0v12M0 6h12" stroke="#29ABE2" stroke-width="1.6"/></svg>
							</span>
						</button>
					</dt>
					<dd class="pr-faq__dd">
						<div class="pr-faq__answer-box">
							<p class="pr-faq__answer">
								Con protocolos claros y un equipo especializado que actúa con rapidez: diagnóstico de riesgos, protocolos de crisis, gestión de medios durante la contingencia y monitoreo constante — cubriendo el antes, durante y después de la crisis.
							</p>
						</div>
					</dd>
				</div>

				<!-- FAQ 3 -->
				<div class="pr-faq__item js-pr-faq-item">
					<dt class="pr-faq__dt">
						<button class="pr-faq__button js-pr-faq-toggle" aria-expanded="false">
							<span class="pr-faq__question">¿Qué hace un vocero entrenado en una entrevista con medios?</span>
							<span class="pr-faq__icon-wrapper">
								<svg width="12" height="12" viewBox="0 0 12 12" class="pr-faq__icon"><path d="M6 0v12M0 6h12" stroke="#29ABE2" stroke-width="1.6"/></svg>
							</span>
						</button>
					</dt>
					<dd class="pr-faq__dd">
						<div class="pr-faq__answer-box">
							<p class="pr-faq__answer">
								Comunica con seguridad, claridad y coherencia: maneja preguntas difíciles, transmite los mensajes clave de la organización, cuida su comunicación verbal y no verbal, y mantiene el control de la conversación incluso en escenarios de crisis.
							</p>
						</div>
					</dd>
				</div>
			</dl>
		</div>
	</section>

	<!-- ==========================================
	     8. BANNER CTA FINAL
	     ========================================== -->
	<section class="bc-cta" id="contacto">
		<div class="bc-cta__container" data-reveal="up">
			<h2 class="bc-cta__title">Trabajemos juntos</h2>
			<p class="bc-cta__desc">¿Listo para construir y proteger la reputación de tu marca? Conversemos sobre tu próximo proyecto.</p>
			<a href="#contacto" class="bc-cta__btn open-contact-modal" data-service="PR y Gestión de la Reputación">
				<span>Contactar ahora</span>
				<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
			</a>
		</div>
	</section>

</main>

<?php
get_footer();
