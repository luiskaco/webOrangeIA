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
							<svg viewBox="0 0 36 36" width="30" height="30" fill="none">
								<circle cx="18" cy="18" r="9.5" fill="#70B5E3" stroke="#17130F" stroke-width="1.8"/>
								<path d="M11 16.5c1-2.5 3-1.5 4-3 1-1 2.5-.5 3 1s-1 3-2.5 3.5-3.5 0-4.5-1.5z" fill="#48CFAD" stroke="#17130F" stroke-width="1.2" stroke-linejoin="round"/>
								<path d="M16.5 21.5c1.5 0 3 1.5 2 3.5-1.5 1.5-3.5 1-4.5 0-.5-1.5.5-3.5 2.5-3.5z" fill="#48CFAD" stroke="#17130F" stroke-width="1.2" stroke-linejoin="round"/>
								<path d="M22 14c1 0 2.5 1 2 2.5s-2 1.5-3 1c-.5-.5 0-3.5 1-3.5z" fill="#48CFAD" stroke="#17130F" stroke-width="1.2"/>
								<path d="M6 19c0 6 5.5 10.5 12 10.5 7.5 0 13-5 13-11 0-3.5-2-6.5-5.5-8.5" fill="none" stroke="#FC6E51" stroke-width="2" stroke-linecap="round"/>
								<polygon points="27,6 27,12 21.5,9.5" fill="#FC6E51" stroke="#17130F" stroke-width="1.4" stroke-linejoin="round"/>
								<path d="M9 13.5C11 10.5 14.5 8.5 18.5 8.5c1.5 0 3 .3 4.5.8" fill="none" stroke="#FC6E51" stroke-width="1.8" stroke-dasharray="2.5 2.5" stroke-linecap="round"/>
							</svg>
						</div>
						<span class="pr-services__mobile-label">Estrategias integrales de RRPP</span>
					</button>

					<button class="pr-services__mobile-row js-pr-node-row" data-node-index="1">
						<div class="pr-services__mobile-icon">
							<svg viewBox="0 0 36 36" width="30" height="30" fill="none">
								<path d="M7 6h22v24H7a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2z" fill="#FFFFFF" stroke="#17130F" stroke-width="1.8" stroke-linejoin="round"/>
								<rect x="8" y="9" width="20" height="4.5" rx="1" fill="#70B5E3" stroke="#17130F" stroke-width="1.5"/>
								<rect x="8" y="16" width="9" height="8" rx="1" fill="#FFE8D6" stroke="#17130F" stroke-width="1.5"/>
								<path d="M9 22l2.5-3 2 2.2 2-2.7 1.5 2" fill="none" stroke="#EE894F" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
								<line x1="19.5" y1="17.5" x2="27.5" y2="17.5" stroke="#17130F" stroke-width="1.5" stroke-linecap="round"/>
								<line x1="19.5" y1="20.5" x2="27.5" y2="20.5" stroke="#17130F" stroke-width="1.5" stroke-linecap="round"/>
								<line x1="19.5" y1="23.5" x2="25" y2="23.5" stroke="#17130F" stroke-width="1.5" stroke-linecap="round"/>
								<line x1="8" y1="27" x2="27.5" y2="27" stroke="#17130F" stroke-width="1.5" stroke-linecap="round"/>
							</svg>
						</div>
						<span class="pr-services__mobile-label">Gestión con medios de comunicación</span>
					</button>

					<button class="pr-services__mobile-row js-pr-node-row" data-node-index="2">
						<div class="pr-services__mobile-icon">
							<svg viewBox="0 0 36 36" width="30" height="30" fill="none">
								<circle cx="18" cy="18" r="13" fill="#D1F4E8" stroke="#17130F" stroke-width="1.8"/>
								<circle cx="18" cy="13.5" r="4.5" fill="#FFE8D6" stroke="#17130F" stroke-width="1.8"/>
								<path d="M9.5 27.5c0-4.5 3.8-7.5 8.5-7.5s8.5 3 8.5 7.5z" fill="#48CFAD" stroke="#17130F" stroke-width="1.8"/>
								<polygon points="18,20 19,24.5 18,26 17,24.5" fill="#17130F"/>
								<polygon points="28,4 29.7,8.2 34,8.5 30.7,11.3 31.7,15.5 28,13.2 24.3,15.5 25.3,11.3 22,8.5 26.3,8.2" fill="#FDBB42" stroke="#17130F" stroke-width="1.5" stroke-linejoin="round"/>
							</svg>
						</div>
						<span class="pr-services__mobile-label">Posicionamiento de líderes y voceros</span>
					</button>

					<button class="pr-services__mobile-row js-pr-node-row" data-node-index="3">
						<div class="pr-services__mobile-icon">
							<svg viewBox="0 0 36 36" width="30" height="30" fill="none">
								<path d="M5 6a2 2 0 0 1 2-2h11l7 7v19a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6z" fill="#FFFFFF" stroke="#17130F" stroke-width="1.8" stroke-linejoin="round"/>
								<path d="M18 4v7h7" fill="#E1F2FB" stroke="#17130F" stroke-width="1.8" stroke-linejoin="round"/>
								<line x1="9" y1="12" x2="14" y2="12" stroke="#70B5E3" stroke-width="1.8" stroke-linecap="round"/>
								<line x1="9" y1="17" x2="16" y2="17" stroke="#17130F" stroke-width="1.6" stroke-linecap="round"/>
								<line x1="9" y1="22" x2="14" y2="22" stroke="#17130F" stroke-width="1.6" stroke-linecap="round"/>
								<g transform="translate(17, 13) rotate(45)">
									<rect x="0" y="0" width="5.5" height="15" rx="1" fill="#FDBB42" stroke="#17130F" stroke-width="1.6"/>
									<rect x="0" y="0" width="5.5" height="3" fill="#FC6E51" stroke="#17130F" stroke-width="1.6"/>
									<polygon points="0,15 5.5,15 2.75,20" fill="#FFE8D6" stroke="#17130F" stroke-width="1.6" stroke-linejoin="round"/>
									<polygon points="1.5,18 4,18 2.75,20" fill="#17130F"/>
								</g>
							</svg>
						</div>
						<span class="pr-services__mobile-label">Desarrollo de contenidos corporativos</span>
					</button>

					<button class="pr-services__mobile-row js-pr-node-row" data-node-index="4">
						<div class="pr-services__mobile-icon">
							<svg viewBox="0 0 36 36" width="30" height="30" fill="none">
								<line x1="18" y1="2" x2="18" y2="4.5" stroke="#FDBB42" stroke-width="2" stroke-linecap="round"/>
								<line x1="6.5" y1="8" x2="8.5" y2="10" stroke="#FDBB42" stroke-width="2" stroke-linecap="round"/>
								<line x1="29.5" y1="8" x2="27.5" y2="10" stroke="#FDBB42" stroke-width="2" stroke-linecap="round"/>
								<line x1="4" y1="17" x2="6.5" y2="17" stroke="#FDBB42" stroke-width="2" stroke-linecap="round"/>
								<line x1="32" y1="17" x2="29.5" y2="17" stroke="#FDBB42" stroke-width="2" stroke-linecap="round"/>
								<path d="M12 23c-1.5-1.5-3.5-4-3.5-7a9.5 9.5 0 1 1 19 0c0 3-2 5.5-3.5 7h-12z" fill="#FDBB42" stroke="#17130F" stroke-width="1.8" stroke-linejoin="round"/>
								<path d="M13 12a5.5 5.5 0 0 1 5-4.5" stroke="#FFFFFF" stroke-width="1.6" stroke-linecap="round"/>
								<path d="M15 17l1.5-4h3l1.5 4" stroke="#17130F" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
								<rect x="13.5" y="24" width="9" height="3" rx="1" fill="#CCD1D9" stroke="#17130F" stroke-width="1.6"/>
								<rect x="14.5" y="27.5" width="7" height="2.5" rx="1" fill="#A0AAB5" stroke="#17130F" stroke-width="1.6"/>
								<path d="M16 30.5h4" stroke="#17130F" stroke-width="1.6" stroke-linecap="round"/>
							</svg>
						</div>
						<span class="pr-services__mobile-label">Comunicación ejecutiva y thought leadership</span>
					</button>

					<button class="pr-services__mobile-row js-pr-node-row" data-node-index="5">
						<div class="pr-services__mobile-icon">
							<svg viewBox="0 0 36 36" width="30" height="30" fill="none">
								<path d="M9 11H6a4 4 0 0 0 4 4h1" fill="none" stroke="#17130F" stroke-width="1.8" stroke-linecap="round"/>
								<path d="M27 11h3a4 4 0 0 1-4 4h-1" fill="none" stroke="#17130F" stroke-width="1.8" stroke-linecap="round"/>
								<path d="M9 6h18v7a9 9 0 0 1-18 0V6z" fill="#FDBB42" stroke="#17130F" stroke-width="1.8" stroke-linejoin="round"/>
								<path d="M16 22h4v3h-4z" fill="#EE894F" stroke="#17130F" stroke-width="1.8" stroke-linejoin="round"/>
								<path d="M12 25h12l1.5 4H10.5L12 25z" fill="#FC6E51" stroke="#17130F" stroke-width="1.8" stroke-linejoin="round"/>
								<line x1="8" y1="30" x2="28" y2="30" stroke="#17130F" stroke-width="1.8" stroke-linecap="round"/>
								<polygon points="18,9 19.2,11.8 22,12 19.8,13.8 20.5,16.5 18,15 15.5,16.5 16.2,13.8 14,12 16.8,11.8" fill="#FFFFFF" stroke="#17130F" stroke-width="1.2" stroke-linejoin="round"/>
							</svg>
						</div>
						<span class="pr-services__mobile-label">Gestión de reputación corporativa</span>
					</button>

					<button class="pr-services__mobile-row js-pr-node-row" data-node-index="6">
						<div class="pr-services__mobile-icon">
							<svg viewBox="0 0 36 36" width="30" height="30" fill="none">
								<line x1="5" y1="29" x2="31" y2="29" stroke="#17130F" stroke-width="1.8" stroke-linecap="round"/>
								<rect x="7" y="19" width="5.5" height="10" rx="1.5" fill="#70B5E3" stroke="#17130F" stroke-width="1.8"/>
								<rect x="15" y="13" width="5.5" height="16" rx="1.5" fill="#48CFAD" stroke="#17130F" stroke-width="1.8"/>
								<rect x="23" y="7" width="5.5" height="22" rx="1.5" fill="#AC92EC" stroke="#17130F" stroke-width="1.8"/>
								<polyline points="9.5,15 17.5,8.5 26,4" fill="none" stroke="#FC6E51" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
								<circle cx="9.5" cy="15" r="2.2" fill="#FFFFFF" stroke="#17130F" stroke-width="1.5"/>
								<circle cx="17.5" cy="8.5" r="2.2" fill="#FFFFFF" stroke="#17130F" stroke-width="1.5"/>
								<circle cx="26" cy="4" r="2.2" fill="#FFFFFF" stroke="#17130F" stroke-width="1.5"/>
							</svg>
						</div>
						<span class="pr-services__mobile-label">Monitoreo y análisis de impacto mediático</span>
					</button>

					<button class="pr-services__mobile-row js-pr-node-row" data-node-index="7">
						<div class="pr-services__mobile-icon">
							<svg viewBox="0 0 36 36" width="30" height="30" fill="none">
								<circle cx="18" cy="9.5" r="4" fill="#FFE8D6" stroke="#17130F" stroke-width="1.8"/>
								<path d="M11.5 19c0-3.5 2.8-5 6.5-5s6.5 1.5 6.5 5z" fill="#70B5E3" stroke="#17130F" stroke-width="1.8"/>
								<polygon points="18,14 19,18 18,19.5 17,18" fill="#17130F"/>
								<polygon points="8,18 28,18 26.5,21.5 9.5,21.5" fill="#FDBB42" stroke="#17130F" stroke-width="1.8" stroke-linejoin="round"/>
								<polygon points="11.5,21.5 24.5,21.5 23,29.5 13,29.5" fill="#EE894F" stroke="#17130F" stroke-width="1.8" stroke-linejoin="round"/>
								<rect x="15" y="23.5" width="6" height="4" rx="1" fill="#FFFFFF" stroke="#17130F" stroke-width="1.3"/>
								<line x1="9" y1="30" x2="27" y2="30" stroke="#17130F" stroke-width="2" stroke-linecap="round"/>
								<line x1="13" y1="18" x2="10.5" y2="14" stroke="#17130F" stroke-width="1.6" stroke-linecap="round"/>
								<circle cx="10" cy="13.5" r="1.6" fill="#FC6E51" stroke="#17130F" stroke-width="1.2"/>
								<line x1="23" y1="18" x2="25.5" y2="14" stroke="#17130F" stroke-width="1.6" stroke-linecap="round"/>
								<circle cx="26" cy="13.5" r="1.6" fill="#FC6E51" stroke="#17130F" stroke-width="1.2"/>
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
								<path d="M18 4l12 5v9c0 8-5.5 13-12 15C11.5 31 6 26 6 18V9l12-5z" fill="#E1F2FB" stroke="#17130F" stroke-width="1.8" stroke-linejoin="round"/>
								<circle cx="18" cy="18" r="6" fill="#70B5E3" stroke="#17130F" stroke-width="1.5"/>
								<line x1="18" y1="12" x2="18" y2="24" stroke="#17130F" stroke-width="1.2"/>
								<line x1="12" y1="18" x2="24" y2="18" stroke="#17130F" stroke-width="1.2"/>
								<circle cx="22" cy="22" r="3.5" fill="#FFE8D6" stroke="#17130F" stroke-width="1.5"/>
								<line x1="24.5" y1="24.5" x2="28" y2="28" stroke="#FC6E51" stroke-width="2.2" stroke-linecap="round"/>
							</svg>
						</div>
						<span class="pr-crisis__item-label">Diagnóstico y evaluación de riesgos reputacionales</span>
					</div>
					<div class="pr-crisis__item">
						<div class="pr-crisis__icon-box">
							<svg viewBox="0 0 36 36" width="28" height="28" fill="none">
								<path d="M5 10a2 2 0 0 1 2-2h8l3 3h11a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V10z" fill="#FDBB42" stroke="#17130F" stroke-width="1.8" stroke-linejoin="round"/>
								<path d="M5 14h24v13a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V14z" fill="#FFE8D6" stroke="#17130F" stroke-width="1.8" stroke-linejoin="round"/>
								<rect x="14" y="18" width="8" height="7" rx="1.5" fill="#EE894F" stroke="#17130F" stroke-width="1.4"/>
								<path d="M16 18v-2a2 2 0 0 1 4 0v2" stroke="#17130F" stroke-width="1.4"/>
								<circle cx="18" cy="21.5" r="0.8" fill="#17130F"/>
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
								<path d="M7 8h15a3 3 0 0 1 3 3v6a3 3 0 0 1-3 3h-4l-5 4v-4H7a3 3 0 0 1-3-3v-6a3 3 0 0 1 3-3z" fill="#70B5E3" stroke="#17130F" stroke-width="1.8" stroke-linejoin="round"/>
								<path d="M14 16h13a3 3 0 0 1 3 3v5a3 3 0 0 1-3 3h-2l-4 3v-3h-7a3 3 0 0 1-3-3v-5a3 3 0 0 1 3-3z" fill="#48CFAD" stroke="#17130F" stroke-width="1.8" stroke-linejoin="round"/>
								<line x1="8" y1="13" x2="16" y2="13" stroke="#FFFFFF" stroke-width="1.8" stroke-linecap="round"/>
								<line x1="17" y1="21" x2="25" y2="21" stroke="#FFFFFF" stroke-width="1.8" stroke-linecap="round"/>
							</svg>
						</div>
						<span class="pr-crisis__item-label">Diseño de mensajes estratégicos</span>
					</div>
					<div class="pr-crisis__item">
						<div class="pr-crisis__icon-box">
							<svg viewBox="0 0 36 36" width="28" height="28" fill="none">
								<rect x="13.5" y="5" width="9" height="15" rx="4.5" fill="#CCD1D9" stroke="#17130F" stroke-width="1.8"/>
								<path d="M9 13.5v2a9 9 0 0 0 18 0v-2" stroke="#17130F" stroke-width="1.8" stroke-linecap="round"/>
								<line x1="18" y1="24.5" x2="18" y2="30" stroke="#17130F" stroke-width="1.8"/>
								<line x1="12" y1="30" x2="24" y2="30" stroke="#17130F" stroke-width="2" stroke-linecap="round"/>
								<circle cx="18" cy="10" r="1.8" fill="#FC6E51"/>
								<line x1="14.5" y1="14" x2="21.5" y2="14" stroke="#17130F" stroke-width="1.4"/>
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
								<circle cx="18" cy="18" r="11" fill="#70B5E3" stroke="#17130F" stroke-width="1.8"/>
								<ellipse cx="18" cy="18" rx="5" ry="11" fill="#E1F2FB" stroke="#17130F" stroke-width="1.5"/>
								<line x1="7" y1="18" x2="29" y2="18" stroke="#17130F" stroke-width="1.5"/>
								<line x1="9" y1="12" x2="27" y2="12" stroke="#17130F" stroke-width="1.4"/>
								<line x1="9" y1="24" x2="27" y2="24" stroke="#17130F" stroke-width="1.4"/>
								<path d="M4 14a16 16 0 0 1 28 8" stroke="#FC6E51" stroke-width="1.8" stroke-dasharray="2 3" stroke-linecap="round"/>
								<circle cx="30" cy="20" r="2.2" fill="#FDBB42" stroke="#17130F" stroke-width="1.3"/>
							</svg>
						</div>
						<span class="pr-crisis__item-label">Monitoreo de medios y redes sociales</span>
					</div>
					<div class="pr-crisis__item">
						<div class="pr-crisis__icon-box">
							<svg viewBox="0 0 36 36" width="28" height="28" fill="none">
								<path d="M14 9h8v3h-8z" fill="#CCD1D9" stroke="#17130F" stroke-width="1.8" stroke-linejoin="round"/>
								<rect x="5" y="12" width="26" height="18" rx="3" fill="#FDBB42" stroke="#17130F" stroke-width="1.8"/>
								<path d="M5 19h26" stroke="#17130F" stroke-width="1.6"/>
								<rect x="15.5" y="17" width="5" height="4.5" rx="1" fill="#FFFFFF" stroke="#17130F" stroke-width="1.4"/>
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
						<div class="pr-voceros__card-icon">
							<svg viewBox="0 0 36 36" width="34" height="34" fill="none">
								<rect x="5" y="11" width="18" height="14" rx="2.5" fill="#EE894F" stroke="#17130F" stroke-width="1.8"/>
								<polygon points="23,15 31,10 31,26 23,21" fill="#CCD1D9" stroke="#17130F" stroke-width="1.8" stroke-linejoin="round"/>
								<circle cx="10" cy="18" r="3.5" fill="#FFE8D6" stroke="#17130F" stroke-width="1.5"/>
								<circle cx="8" cy="8" r="2.2" fill="#FC6E51" stroke="#17130F" stroke-width="1.4"/>
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
								<circle cx="18" cy="18" r="13" fill="#E1F2FB" stroke="#17130F" stroke-width="1.8"/>
								<circle cx="18" cy="18" r="8.5" fill="#70B5E3" stroke="#17130F" stroke-width="1.6"/>
								<circle cx="18" cy="18" r="4" fill="#FC6E51" stroke="#17130F" stroke-width="1.6"/>
								<line x1="28" y1="8" x2="19.5" y2="16.5" stroke="#17130F" stroke-width="2" stroke-linecap="round"/>
								<polygon points="27,5 31,9 29,11 25,7" fill="#FDBB42" stroke="#17130F" stroke-width="1.4"/>
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
								<circle cx="14" cy="16" r="8" fill="#FDBB42" stroke="#17130F" stroke-width="1.8"/>
								<circle cx="14" cy="16" r="3.5" fill="#FFFFFF" stroke="#17130F" stroke-width="1.6"/>
								<path d="M21 18l10 10-2.5 2.5-2.5-2.5-2 2-2.5-2.5 2-2z" fill="#EE894F" stroke="#17130F" stroke-width="1.6" stroke-linejoin="round"/>
								<polygon points="27,6 28.5,10 32.5,10 29.5,12.5 30.5,16.5 27,14 23.5,16.5 24.5,12.5 21.5,10 25.5,10" fill="#FC6E51" stroke="#17130F" stroke-width="1.2" stroke-linejoin="round"/>
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
								<path d="M8 19a10 10 0 0 1 20 0" stroke="#17130F" stroke-width="2.2" stroke-linecap="round"/>
								<rect x="5" y="17" width="6" height="11" rx="3" fill="#FC6E51" stroke="#17130F" stroke-width="1.8"/>
								<rect x="25" y="17" width="6" height="11" rx="3" fill="#70B5E3" stroke="#17130F" stroke-width="1.8"/>
								<path d="M28 26c0 4-3.5 6-7 6" stroke="#17130F" stroke-width="1.8" stroke-linecap="round"/>
								<circle cx="21" cy="32" r="2" fill="#FDBB42" stroke="#17130F" stroke-width="1.4"/>
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
								<path d="M7 18c0-7 6-12 13-12s11 4 11 9c0 6-4 8-7 8-2 0-3 1-3 2.5 0 2 1.5 2.5 1.5 4.5 0 2-2 4-5.5 4C9 34 7 27 7 18z" fill="#FFE8D6" stroke="#17130F" stroke-width="1.8" stroke-linejoin="round"/>
								<circle cx="13" cy="14" r="2.2" fill="#70B5E3"/>
								<circle cx="19" cy="11" r="2.2" fill="#FC6E51"/>
								<circle cx="25" cy="14" r="2.2" fill="#FDBB42"/>
								<circle cx="16" cy="28" r="2.5" fill="#48CFAD"/>
								<line x1="28" y1="22" x2="22" y2="28" stroke="#17130F" stroke-width="1.8" stroke-linecap="round"/>
								<path d="M20 30l2-2 1 1-2 2z" fill="#17130F"/>
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
								<circle cx="18" cy="18" r="13" fill="#FFFFFF" stroke="#17130F" stroke-width="1.8"/>
								<circle cx="18" cy="18" r="6" fill="#E1F2FB" stroke="#17130F" stroke-width="1.8"/>
								<path d="M18 5v7M18 24v7M5 18h7M24 18h7" stroke="#17130F" stroke-width="1.8"/>
								<path d="M14 5.5l2 6.5h4l2-6.5" fill="#FC6E51" stroke="#17130F" stroke-width="1.4"/>
								<path d="M14 30.5l2-6.5h4l2 6.5" fill="#FC6E51" stroke="#17130F" stroke-width="1.4"/>
								<path d="M5.5 14l6.5 2v4l-6.5 2" fill="#FC6E51" stroke="#17130F" stroke-width="1.4"/>
								<path d="M30.5 14l-6.5 2v4l6.5 2" fill="#FC6E51" stroke="#17130F" stroke-width="1.4"/>
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
