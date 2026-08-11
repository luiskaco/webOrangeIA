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

				<h1 class="pr-hero__title">Gestión de la Reputación</h1>

				<p class="pr-hero__desc">
					Construimos y protegemos la reputación de tu marca con estrategias de relaciones públicas, manejo de crisis y entrenamiento de voceros — para las organizaciones que no pueden darse el lujo de improvisar.
				</p>


			</div>

			<div class="pr-hero__media" data-reveal="right">
				<div class="pr-hero__photo-wrapper">
					<img class="pr-hero__photo" 
						src="<?php echo esc_url( $theme_uri . '/assets/images/services/pr-reputacion.png' ); ?>" 
						alt="Vocero dando entrevista de prensa - Agencia de PR Orange Latam">
				</div>

				<!-- Pulse Ring SVG Shield Badge -->
				<div class="pr-hero__badge-pulse">
					<svg viewBox="0 0 200 200" width="100%" height="100%" class="pr-hero__pulse-svg">
						<circle cx="100" cy="100" r="70" class="pr-hero__pulse-ring pr-hero__pulse-ring--1" />
						<circle cx="100" cy="100" r="70" class="pr-hero__pulse-ring pr-hero__pulse-ring--2" />
						<circle cx="100" cy="100" r="94" class="pr-hero__pulse-dashed" />
						<circle cx="100" cy="100" r="60" class="pr-hero__pulse-center" />
						<path d="M100 44 L146 62 V100 C146 134 126 156 100 168 C74 156 54 134 54 100 V62 Z" class="pr-hero__shield" />
						<path d="M80 104 L94 118 L124 84" class="pr-hero__checkmark" />
					</svg>
				</div>
			</div>
		</div>
	</section>

	<!-- ==========================================
	     1b. TICKER MARQUEE INFINITO
	     ========================================== -->
	<div class="pr-ticker">
		<div class="pr-ticker__track">
			<span class="pr-ticker__item">Relaciones Públicas <span class="pr-ticker__star">✦</span></span>
			<span class="pr-ticker__item">Reputación corporativa <span class="pr-ticker__star">✦</span></span>
			<span class="pr-ticker__item">Gestión de crisis <span class="pr-ticker__star">✦</span></span>
			<span class="pr-ticker__item">Entrenamiento de voceros <span class="pr-ticker__star">✦</span></span>
			<span class="pr-ticker__item">Posicionamiento mediático <span class="pr-ticker__star">✦</span></span>
			<span class="pr-ticker__item">Relaciones Públicas <span class="pr-ticker__star">✦</span></span>
			<span class="pr-ticker__item">Reputación corporativa <span class="pr-ticker__star">✦</span></span>
			<span class="pr-ticker__item">Gestión de crisis <span class="pr-ticker__star">✦</span></span>
			<span class="pr-ticker__item">Entrenamiento de voceros <span class="pr-ticker__star">✦</span></span>
			<span class="pr-ticker__item">Posicionamiento mediático <span class="pr-ticker__star">✦</span></span>
		</div>
	</div>

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
							<svg width="22" height="22" viewBox="0 0 24 24" fill="none"><path d="M3 10v4h3l5 4V6l-5 4H3z M15.5 8.5c1.2 1.2 1.2 5.8 0 7 M18.5 6.5c2.5 2.5 2.5 8.5 0 11" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
						</div>
						<span class="pr-services__mobile-label">Estrategias integrales de RRPP</span>
					</button>

					<button class="pr-services__mobile-row js-pr-node-row" data-node-index="1">
						<div class="pr-services__mobile-icon">
							<svg width="22" height="22" viewBox="0 0 24 24" fill="none"><path d="M4 4h13v16H4z M17 8h3v9a2 2 0 01-2 2h-1V8z M7 8h7 M7 11.5h7 M7 15h4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
						</div>
						<span class="pr-services__mobile-label">Gestión de medios de comunicación</span>
					</button>

					<button class="pr-services__mobile-row js-pr-node-row" data-node-index="2">
						<div class="pr-services__mobile-icon">
							<svg width="22" height="22" viewBox="0 0 24 24" fill="none"><path d="M12 3a3 3 0 013 3v6a3 3 0 01-6 0V6a3 3 0 013-3z M6 11a6 6 0 0012 0 M12 17v4 M9 21h6" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
						</div>
						<span class="pr-services__mobile-label">Posicionamiento de líderes y voceros</span>
					</button>

					<button class="pr-services__mobile-row js-pr-node-row" data-node-index="3">
						<div class="pr-services__mobile-icon">
							<svg width="22" height="22" viewBox="0 0 24 24" fill="none"><path d="M6 3h8l5 5v13H6z M14 3v5h5 M9 15l6-6 2 2-6 6H9v-2z" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
						</div>
						<span class="pr-services__mobile-label">Desarrollo de contenidos corporativos</span>
					</button>

					<button class="pr-services__mobile-row js-pr-node-row" data-node-index="4">
						<div class="pr-services__mobile-icon">
							<svg width="22" height="22" viewBox="0 0 24 24" fill="none"><path d="M4 21h16 M6 21V11h12v10 M9 11V7a3 3 0 016 0v4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
						</div>
						<span class="pr-services__mobile-label">Comunicación ejecutiva y thought leadership</span>
					</button>

					<button class="pr-services__mobile-row js-pr-node-row" data-node-index="5">
						<div class="pr-services__mobile-icon">
							<svg width="22" height="22" viewBox="0 0 24 24" fill="none"><path d="M12 3l7 3v6c0 5-3 8-7 9-4-1-7-4-7-9V6z M9 12l2 2 4-4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
						</div>
						<span class="pr-services__mobile-label">Gestión de reputación corporativa</span>
					</button>

					<button class="pr-services__mobile-row js-pr-node-row" data-node-index="6">
						<div class="pr-services__mobile-icon">
							<svg width="22" height="22" viewBox="0 0 24 24" fill="none"><path d="M3 20h18 M6 20v-6 M11 20v-9 M16 20v-4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
						</div>
						<span class="pr-services__mobile-label">Monitoreo y análisis de impacto mediático</span>
					</button>

					<button class="pr-services__mobile-row js-pr-node-row" data-node-index="7">
						<div class="pr-services__mobile-icon">
							<svg width="22" height="22" viewBox="0 0 24 24" fill="none"><path d="M12 2c3 3 4 7 3 12l-3 3-3-3c-1-5 0-9 3-12z M9 14l-3 3v3l3-1 M15 14l3 3v3l-3-1 M12 9.2a1 1 0 100 2 1 1 0 000-2z" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
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
					Toda organización puede enfrentar una crisis — la diferencia está en la preparación y la velocidad de respuesta. Anticipamos riesgos, reducimos el impacto reputacional y protegemos la confianza de los públicos clave.
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
						<svg width="22" height="22" viewBox="0 0 24 24" fill="none" class="pr-crisis__item-icon"><path d="M12 3l10 18H2z M12 9v5 M12 17h.01" stroke="#29ABE2" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
						<span class="pr-crisis__item-label">Diagnóstico y evaluación de riesgos reputacionales</span>
					</div>
					<div class="pr-crisis__item">
						<svg width="22" height="22" viewBox="0 0 24 24" fill="none" class="pr-crisis__item-icon"><path d="M12 6c-1.5-1-4-2-8-2v14c4 0 6.5 1 8 2 1.5-1 4-2 8-2V4c-4 0-6.5 1-8 2z" stroke="#29ABE2" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
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
						<svg width="22" height="22" viewBox="0 0 24 24" fill="none" class="pr-crisis__item-icon"><path d="M4 4h16v11H8l-4 4z" stroke="#29ABE2" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
						<span class="pr-crisis__item-label">Diseño de mensajes estratégicos</span>
					</div>
					<div class="pr-crisis__item">
						<svg width="22" height="22" viewBox="0 0 24 24" fill="none" class="pr-crisis__item-icon"><path d="M4 8h3l2-3h6l2 3h3v11H4z M12 18a4 4 0 100-8 4 4 0 000 8z" stroke="#29ABE2" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
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
						<svg width="22" height="22" viewBox="0 0 24 24" fill="none" class="pr-crisis__item-icon"><path d="M12 3a9 9 0 100 18 9 9 0 000-18z M12 7a5 5 0 100 10 5 5 0 000-10z M12 11a1 1 0 100 2 1 1 0 000-2z" stroke="#29ABE2" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
						<span class="pr-crisis__item-label">Monitoreo de medios y redes sociales</span>
					</div>
					<div class="pr-crisis__item">
						<svg width="22" height="22" viewBox="0 0 24 24" fill="none" class="pr-crisis__item-icon"><path d="M8 11a3 3 0 100-6 3 3 0 000 6z M2 21v-2a4 4 0 014-4h4a4 4 0 014 4v2 M17 11a3 3 0 100-6 M23 21v-2a4 4 0 00-3-3.87" stroke="#29ABE2" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
						<span class="pr-crisis__item-label">Comité de crisis y asesoría ejecutiva</span>
					</div>
				</div>
			</div>

			<!-- Tagline Quote Box -->
			<div class="pr-crisis__quote-box" data-reveal="up">
				<span class="pr-crisis__quote-mark">&ldquo;</span>
				<p class="pr-crisis__quote-text">
					Una crisis bien gestionada puede ser una oportunidad para demostrar transparencia y liderazgo.
				</p>
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

			<div class="pr-voceros__pills" data-stagger>
				<div class="pr-voceros__pill">
					<span class="pr-voceros__pill-num">1</span>
					<span class="pr-voceros__pill-label">Simulaciones de entrevistas</span>
				</div>
				<div class="pr-voceros__pill">
					<span class="pr-voceros__pill-num">2</span>
					<span class="pr-voceros__pill-label">Manejo de preguntas difíciles</span>
				</div>
				<div class="pr-voceros__pill">
					<span class="pr-voceros__pill-num">3</span>
					<span class="pr-voceros__pill-label">Desarrollo de mensajes clave</span>
				</div>
				<div class="pr-voceros__pill">
					<span class="pr-voceros__pill-num">4</span>
					<span class="pr-voceros__pill-label">Comunicación verbal y no verbal</span>
				</div>
				<div class="pr-voceros__pill">
					<span class="pr-voceros__pill-num">5</span>
					<span class="pr-voceros__pill-label">Storytelling</span>
				</div>
				<div class="pr-voceros__pill">
					<span class="pr-voceros__pill-num">6</span>
					<span class="pr-voceros__pill-label">Entrenamiento para escenarios de crisis</span>
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

					<!-- Awards & Recognition Grid -->
					<div class="pr-why__logos-box" data-reveal="up">
						<p class="pr-why__logos-note">AGENCIA PREMIADA Y RESPALDADA POR MARCAS LÍDERES EN LATINOAMÉRICA</p>
						
						<div class="pr-why__awards-grid">
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
