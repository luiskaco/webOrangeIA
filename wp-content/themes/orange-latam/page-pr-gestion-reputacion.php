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
						src="<?php echo esc_url( $theme_uri . '/assets/images/services/pr-reputacion.webp' ); ?>" 
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
							<svg viewBox="0 0 36 36" width="30" height="30" fill="none">
								<circle cx="18" cy="18" r="10" fill="#29ABE2"/>
								<path d="M12 16c1-2 3-1 4-2.5 1-1 2-.5 2.5 1s-.8 2.5-2 3-3 0-4-1.5z" fill="#FFFFFF"/>
								<path d="M17 21c1.2 0 2.5 1 1.6 2.8-1.2 1.2-2.8.8-3.6 0-.4-1.2.4-2.8 2-2.8z" fill="#FFFFFF"/>
								<path d="M21 14.5c.8 0 2 .8 1.6 2s-1.6 1.2-2.4.8c-.4-.4 0-2.8.8-2.8z" fill="#FFFFFF"/>
								<path d="M6 18.5c0 6.5 5 11 11.5 11 7 0 12-4.5 12-10 0-3-1.8-5.5-5-7.2" fill="none" stroke="#29ABE2" stroke-width="2.5" stroke-linecap="round"/>
								<polygon points="26,6 26,12 21,9" fill="#29ABE2"/>
							</svg>
						</div>
						<span class="pr-services__mobile-label">Estrategias integrales de RRPP</span>
					</button>

					<button class="pr-services__mobile-row js-pr-node-row" data-node-index="1">
						<div class="pr-services__mobile-icon">
							<svg viewBox="0 0 36 36" width="30" height="30" fill="none">
								<path d="M6 5h24v24a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2V5z" fill="#29ABE2"/>
								<rect x="9" y="8" width="18" height="4.5" rx="1" fill="#FFFFFF"/>
								<rect x="9" y="15.5" width="8" height="7.5" rx="1" fill="#FFFFFF"/>
								<rect x="19" y="15.5" width="8" height="2" rx="1" fill="#FFFFFF"/>
								<rect x="19" y="19" width="8" height="2" rx="1" fill="#FFFFFF"/>
								<rect x="19" y="22.5" width="5" height="2" rx="1" fill="#FFFFFF"/>
								<rect x="9" y="25" width="18" height="2" rx="1" fill="#FFFFFF"/>
							</svg>
						</div>
						<span class="pr-services__mobile-label">Gestión con medios de comunicación</span>
					</button>

					<button class="pr-services__mobile-row js-pr-node-row" data-node-index="2">
						<div class="pr-services__mobile-icon">
							<svg viewBox="0 0 36 36" width="30" height="30" fill="none">
								<circle cx="18" cy="11.5" r="5" fill="#29ABE2"/>
								<path d="M7 28c0-5.5 5-8.5 11-8.5s11 3 11 8.5z" fill="#29ABE2"/>
								<polygon points="29,5 30.5,8.8 34.5,9 31.5,11.5 32.5,15.5 29,13.2 25.5,15.5 26.5,11.5 23.5,9 27.5,8.8" fill="#17130F"/>
							</svg>
						</div>
						<span class="pr-services__mobile-label">Posicionamiento de líderes y voceros</span>
					</button>

					<button class="pr-services__mobile-row js-pr-node-row" data-node-index="3">
						<div class="pr-services__mobile-icon">
							<svg viewBox="0 0 36 36" width="30" height="30" fill="none">
								<path d="M6 4h14l8 8v18a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2z" fill="#29ABE2"/>
								<polygon points="20,4 28,12 20,12" fill="#17130F"/>
								<rect x="9" y="14" width="8" height="2.5" rx="1" fill="#FFFFFF"/>
								<rect x="9" y="19" width="12" height="2.5" rx="1" fill="#FFFFFF"/>
								<rect x="9" y="24" width="7" height="2.5" rx="1" fill="#FFFFFF"/>
							</svg>
						</div>
						<span class="pr-services__mobile-label">Desarrollo de contenidos corporativos</span>
					</button>

					<button class="pr-services__mobile-row js-pr-node-row" data-node-index="4">
						<div class="pr-services__mobile-icon">
							<svg viewBox="0 0 36 36" width="30" height="30" fill="none">
								<path d="M12 21c-1.8-1.8-3.5-4.2-3.5-7.5a9.5 9.5 0 1 1 19 0c0 3.3-1.7 5.7-3.5 7.5z" fill="#29ABE2"/>
								<rect x="13" y="22" width="10" height="3" rx="1" fill="#17130F"/>
								<rect x="14.5" y="26" width="7" height="2.5" rx="1" fill="#17130F"/>
								<line x1="16" y1="29.5" x2="20" y2="29.5" stroke="#17130F" stroke-width="2" stroke-linecap="round"/>
								<line x1="18" y1="2" x2="18" y2="4.5" stroke="#29ABE2" stroke-width="2.5" stroke-linecap="round"/>
								<line x1="7" y1="7" x2="9" y2="9" stroke="#29ABE2" stroke-width="2.5" stroke-linecap="round"/>
								<line x1="29" y1="7" x2="27" y2="9" stroke="#29ABE2" stroke-width="2.5" stroke-linecap="round"/>
							</svg>
						</div>
						<span class="pr-services__mobile-label">Comunicación ejecutiva y thought leadership</span>
					</button>

					<button class="pr-services__mobile-row js-pr-node-row" data-node-index="5">
						<div class="pr-services__mobile-icon">
							<svg viewBox="0 0 36 36" width="30" height="30" fill="none">
								<path d="M9 7h18v7a9 9 0 0 1-18 0V7z" fill="#29ABE2"/>
								<path d="M9 10H5a4 4 0 0 0 4 4v-4zm18 0h4a4 4 0 0 1-4 4v-4z" fill="#29ABE2"/>
								<rect x="16" y="22" width="4" height="4" fill="#17130F"/>
								<path d="M11 26h14l1.5 4H9.5L11 26z" fill="#17130F"/>
								<polygon points="18,9.5 19,12 21.5,12.2 19.6,13.7 20.2,16 18,14.7 15.8,16 16.4,13.7 14.5,12.2 17,12" fill="#FFFFFF"/>
							</svg>
						</div>
						<span class="pr-services__mobile-label">Gestión de reputación corporativa</span>
					</button>

					<button class="pr-services__mobile-row js-pr-node-row" data-node-index="6">
						<div class="pr-services__mobile-icon">
							<svg viewBox="0 0 36 36" width="30" height="30" fill="none">
								<rect x="6" y="19" width="6" height="11" rx="1.5" fill="#29ABE2"/>
								<rect x="15" y="13" width="6" height="17" rx="1.5" fill="#29ABE2"/>
								<rect x="24" y="6" width="6" height="24" rx="1.5" fill="#29ABE2"/>
								<line x1="4" y1="30.5" x2="32" y2="30.5" stroke="#17130F" stroke-width="2" stroke-linecap="round"/>
							</svg>
						</div>
						<span class="pr-services__mobile-label">Monitoreo y análisis de impacto mediático</span>
					</button>

					<button class="pr-services__mobile-row js-pr-node-row" data-node-index="7">
						<div class="pr-services__mobile-icon">
							<svg viewBox="0 0 36 36" width="30" height="30" fill="none">
								<circle cx="18" cy="8.5" r="4" fill="#29ABE2"/>
								<path d="M12 17c0-3 2.5-4.5 6-4.5s6 1.5 6 4.5z" fill="#29ABE2"/>
								<rect x="8" y="17" width="20" height="4" rx="1" fill="#17130F"/>
								<polygon points="11.5,21 24.5,21 23,29.5 13,29.5" fill="#17130F"/>
								<line x1="9" y1="30" x2="27" y2="30" stroke="#17130F" stroke-width="2" stroke-linecap="round"/>
								<line x1="13.5" y1="17" x2="11.5" y2="13" stroke="#29ABE2" stroke-width="1.8" stroke-linecap="round"/>
								<circle cx="11" cy="12.5" r="1.8" fill="#29ABE2"/>
								<line x1="22.5" y1="17" x2="24.5" y2="13" stroke="#29ABE2" stroke-width="1.8" stroke-linecap="round"/>
								<circle cx="25" cy="12.5" r="1.8" fill="#29ABE2"/>
							</svg>
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
							<svg viewBox="0 0 36 36" width="28" height="28" fill="none">
								<path d="M18 3l12 5v10c0 7.5-5.5 13-12 15C11.5 31 6 25.5 6 18V8l12-5z" fill="#29ABE2"/>
								<path d="M13 18l3.5 3.5 7-7" stroke="#FFFFFF" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</div>
						<span class="pr-crisis__item-label">Diagnóstico y evaluación de riesgos reputacionales</span>
					</div>
					<div class="pr-crisis__item">
						<div class="pr-crisis__icon-box">
							<svg viewBox="0 0 36 36" width="28" height="28" fill="none">
								<path d="M5 8a2 2 0 0 1 2-2h8l3 3h11a2 2 0 0 1 2 2v17a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8z" fill="#29ABE2"/>
								<rect x="14" y="16" width="8" height="7" rx="1.5" fill="#FFFFFF"/>
								<path d="M16 16v-2.5a2 2 0 0 1 4 0v2.5" stroke="#FFFFFF" stroke-width="1.8" stroke-linecap="round"/>
							</svg>
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
							<svg viewBox="0 0 36 36" width="28" height="28" fill="none">
								<path d="M6 7h16a3 3 0 0 1 3 3v7a3 3 0 0 1-3 3h-4l-5 4v-4H6a3 3 0 0 1-3-3v-7a3 3 0 0 1 3-3z" fill="#29ABE2"/>
								<path d="M15 15h14a3 3 0 0 1 3 3v6a3 3 0 0 1-3 3h-2l-4 3v-3h-8a3 3 0 0 1-3-3v-6a3 3 0 0 1 3-3z" fill="#FFFFFF"/>
							</svg>
						</div>
						<span class="pr-crisis__item-label">Diseño de mensajes estratégicos</span>
					</div>
					<div class="pr-crisis__item">
						<div class="pr-crisis__icon-box">
							<svg viewBox="0 0 36 36" width="28" height="28" fill="none">
								<rect x="13" y="4" width="10" height="17" rx="5" fill="#29ABE2"/>
								<path d="M8 14.5v2a10 10 0 0 0 20 0v-2" stroke="#29ABE2" stroke-width="2.5" stroke-linecap="round"/>
								<line x1="18" y1="26.5" x2="18" y2="31" stroke="#29ABE2" stroke-width="2.5" stroke-linecap="round"/>
								<line x1="12" y1="31" x2="24" y2="31" stroke="#29ABE2" stroke-width="2.5" stroke-linecap="round"/>
							</svg>
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
							<svg viewBox="0 0 36 36" width="28" height="28" fill="none">
								<circle cx="18" cy="18" r="13" fill="#29ABE2"/>
								<circle cx="18" cy="18" r="8" fill="#17130F"/>
								<circle cx="18" cy="18" r="3.5" fill="#FFFFFF"/>
								<path d="M18 5v5M18 26v5M5 18h5M26 18h5" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round"/>
							</svg>
						</div>
						<span class="pr-crisis__item-label">Monitoreo de medios y redes sociales</span>
					</div>
					<div class="pr-crisis__item">
						<div class="pr-crisis__icon-box">
							<svg viewBox="0 0 36 36" width="28" height="28" fill="none">
								<rect x="4" y="10" width="28" height="20" rx="3" fill="#29ABE2"/>
								<path d="M13 10V7a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v3" stroke="#29ABE2" stroke-width="2.5" stroke-linecap="round"/>
								<rect x="15" y="17" width="6" height="6" rx="1" fill="#FFFFFF"/>
							</svg>
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
				src="<?php echo esc_url( $theme_uri . '/assets/images/services/entrenamiento-voceros.webp' ); ?>" 
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
						<div class="pr-voceros__card-icon">
							<svg viewBox="0 0 36 36" width="34" height="34" fill="none">
								<rect x="4" y="9" width="19" height="18" rx="3" fill="#29ABE2"/>
								<polygon points="23,14 32,8 32,28 23,22" fill="#29ABE2"/>
								<circle cx="13.5" cy="18" r="4.5" fill="#FFFFFF"/>
							</svg>
						</div>
						<span class="pr-voceros__card-num">01</span>
					</div>
					<h3 class="pr-voceros__card-title">Simulaciones de entrevistas</h3>
					<p class="pr-voceros__card-desc">Prácticas intensivas frente a cámara simulando escenarios reales de prensa, televisión, radio y medios digitales.</p>
				</div>

				<div class="pr-voceros__card" data-reveal="up">
					<div class="pr-voceros__card-top">
						<div class="pr-voceros__card-icon">
							<svg viewBox="0 0 36 36" width="34" height="34" fill="none">
								<circle cx="18" cy="18" r="14" fill="#29ABE2"/>
								<circle cx="18" cy="18" r="9" fill="#FFFFFF"/>
								<circle cx="18" cy="18" r="4.5" fill="#29ABE2"/>
								<polygon points="27,4 32,9 29,11 25,7" fill="#17130F"/>
								<line x1="28" y1="8" x2="19.5" y2="16.5" stroke="#17130F" stroke-width="2.5" stroke-linecap="round"/>
							</svg>
						</div>
						<span class="pr-voceros__card-num">02</span>
					</div>
					<h3 class="pr-voceros__card-title">Manejo de preguntas difíciles</h3>
					<p class="pr-voceros__card-desc">Técnicas de puenteo (bridging), control de agenda y neutralización efectiva de cuestionamientos complejos.</p>
				</div>

				<div class="pr-voceros__card" data-reveal="up">
					<div class="pr-voceros__card-top">
						<div class="pr-voceros__card-icon">
							<svg viewBox="0 0 36 36" width="34" height="34" fill="none">
								<path d="M5 8a2 2 0 0 1 2-2h22a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H14l-6 6v-6H7a2 2 0 0 1-2-2V8z" fill="#29ABE2"/>
								<polygon points="18,10 19.5,13.8 23.5,14 20.5,16.5 21.5,20.5 18,18.2 14.5,20.5 15.5,16.5 12.5,14 16.5,13.8" fill="#FFFFFF"/>
							</svg>
						</div>
						<span class="pr-voceros__card-num">03</span>
					</div>
					<h3 class="pr-voceros__card-title">Desarrollo de mensajes clave</h3>
					<p class="pr-voceros__card-desc">Estructuración y jerarquización de ideas fuerza claras, memorables y alineadas a los objetivos de negocio.</p>
				</div>

				<div class="pr-voceros__card" data-reveal="up">
					<div class="pr-voceros__card-top">
						<div class="pr-voceros__card-icon">
							<svg viewBox="0 0 36 36" width="34" height="34" fill="none">
								<path d="M7 19a11 11 0 0 1 22 0" stroke="#29ABE2" stroke-width="3" stroke-linecap="round"/>
								<rect x="4" y="16" width="7" height="12" rx="3.5" fill="#29ABE2"/>
								<rect x="25" y="16" width="7" height="12" rx="3.5" fill="#29ABE2"/>
								<path d="M28 26c0 4-3.5 6.5-7 6.5" stroke="#29ABE2" stroke-width="2.5" stroke-linecap="round"/>
								<circle cx="21" cy="32.5" r="2.5" fill="#17130F"/>
							</svg>
						</div>
						<span class="pr-voceros__card-num">04</span>
					</div>
					<h3 class="pr-voceros__card-title">Comunicación verbal y no verbal</h3>
					<p class="pr-voceros__card-desc">Dominio del lenguaje corporal, modulación de voz, contacto visual y proyección de autoridad ejecutiva.</p>
				</div>

				<div class="pr-voceros__card" data-reveal="up">
					<div class="pr-voceros__card-top">
						<div class="pr-voceros__card-icon">
							<svg viewBox="0 0 36 36" width="34" height="34" fill="none">
								<path d="M5 8c0-1.5 1-2.5 2.5-2.5H16v22H7.5A2.5 2.5 0 0 1 5 25V8z" fill="#29ABE2"/>
								<path d="M31 8c0-1.5-1-2.5-2.5-2.5H20v22h8.5A2.5 2.5 0 0 0 31 25V8z" fill="#29ABE2"/>
								<line x1="9" y1="11" x2="13" y2="11" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round"/>
								<line x1="9" y1="16" x2="13" y2="16" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round"/>
								<line x1="23" y1="11" x2="27" y2="11" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round"/>
								<line x1="23" y1="16" x2="27" y2="16" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round"/>
							</svg>
						</div>
						<span class="pr-voceros__card-num">05</span>
					</div>
					<h3 class="pr-voceros__card-title">Storytelling corporativo</h3>
					<p class="pr-voceros__card-desc">Construcción de narrativas persuasivas que transforman datos técnicos en historias de alto impacto e interés público.</p>
				</div>

				<div class="pr-voceros__card" data-reveal="up">
					<div class="pr-voceros__card-top">
						<div class="pr-voceros__card-icon">
							<svg viewBox="0 0 36 36" width="34" height="34" fill="none">
								<path d="M18 3l13 5.5v10.5c0 8-6 13.5-13 15.5-7-2-13-7.5-13-15.5V8.5L18 3z" fill="#29ABE2"/>
								<polygon points="19,10 12,20 18,20 17,27 24,17 18,17" fill="#FFFFFF"/>
							</svg>
						</div>
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
										<img class="pr-why__award-logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/awards/ipra-golden-world-awards.webp" alt="IPRA Golden World Awards" loading="lazy">
									</div>
									<span class="pr-why__award-title">IPRA GOLDEN WORLD</span>
								</div>

								<div class="pr-why__award-card">
									<div class="pr-why__award-logo-box">
										<img class="pr-why__award-logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/awards/sabre-global-world-awards.webp" alt="Sabre Latin America Awards" loading="lazy">
									</div>
									<span class="pr-why__award-title">SABRE AWARDS</span>
								</div>

								<div class="pr-why__award-card">
									<div class="pr-why__award-logo-box">
										<img class="pr-why__award-logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/awards/effie-awards.webp" alt="Effie Awards" loading="lazy">
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
