<?php
/**
 * Template Name: Asuntos Públicos y Relaciones Institucionales
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
      "serviceType": "Asuntos Públicos, Comunicación Política y Relaciones Institucionales",
      "provider": {
        "@type": "Organization",
        "name": "Orange Latam"
      },
      "areaServed": "PE",
      "url": "<?php echo esc_url( home_url( '/asuntos-publicos/' ) ); ?>",
      "description": "Estrategias de asuntos públicos, comunicación política y relacionamiento con stakeholders y comunidades. Anticipa riesgos regulatorios con Orange Latam."
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "¿Qué servicios de asuntos públicos ofrece Orange Latam en Perú?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Ofrecemos análisis del contexto regulatorio y político, relacionamiento estratégico con autoridades y administraciones, desarrollo de estrategias de comunicación política y gestión de relaciones con comunidades y stakeholders clave."
          }
        },
        {
          "@type": "Question",
          "name": "¿Cómo ayuda la comunicación política a una empresa o institución en Perú?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Permite gestionar percepciones, fortalecer el posicionamiento institucional y construir canales de diálogo legítimos en entornos cambiantes, integrando análisis contextual y estrategia previa al mensaje."
          }
        },
        {
          "@type": "Question",
          "name": "¿Cómo se aborda la gestión de relaciones con comunidades y stakeholders?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Identificamos los actores clave del ecosistema (autoridades, comunidades, gremios, medios), comprendemos sus expectativas y diseñamos canales de diálogo cercanos y sostenibles alineados a los objetivos de la organización."
          }
        }
      ]
    }
  ]
}
</script>

<main class="ap-page">

	<!-- ==========================================
	     1. HERO & INTRO
	     ========================================== -->
	<section class="ap-hero" id="inicio">
		<div class="ap-hero__container">
			<div class="ap-hero__content" data-reveal="left">
				<h1 class="ap-hero__title">Asuntos Públicos y Relaciones Institucionales</h1>
				<h2 class="ap-hero__subtitle">El rol de los asuntos públicos hoy</h2>

				<p class="ap-hero__lead">
					Estrategias de <strong>asuntos públicos</strong> para anticipar riesgos regulatorios, fortalecer el <strong>relacionamiento con stakeholders</strong> y gestionar escenarios complejos en Perú.
				</p>
			</div>

			<div class="ap-hero__media" data-reveal="right">
				<!-- Imagen Hero Real -->
				<div class="ap-hero-image-card">
					<?php
					$hero_img = $theme_uri . '/assets/images/asuntos-publicos/hero.png';
					?>
					<img src="<?php echo esc_url( $hero_img ); ?>" alt="Mesa de diálogo de Asuntos Públicos y Relaciones Institucionales en Perú" class="ap-hero-image-card__img">
					<div class="ap-hero-image-card__overlay">
						<span class="ap-hero-image-card__tag">Mesa Estratégica</span>
						<h4 class="ap-hero-image-card__title">Gestión de Escenarios Complejos</h4>
					</div>
				</div>
			</div>
		</div>

		<!-- MOSAICO DE TARJETAS FLOTANTES: RED DE RELACIONES E INFLUENCIA -->
		<div class="ap-influence-hub" id="red-influencia" data-reveal="up">
			<div class="ap-influence-hub__container">
				
				<!-- Lado Izquierdo: Mosaico Flotante de Tarjetas -->
				<div class="ap-influence-mosaic">
					
					<!-- Columna 1 (Elevada) -->
					<div class="ap-mosaic-col ap-mosaic-col--1">
						<!-- Card 1 -->
						<div class="ap-mosaic-card ap-mosaic-card--primary">
							<span class="ap-mosaic-card__tag">Regulación & Licencias</span>
							<div class="ap-mosaic-card__icon">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
							</div>
							<h4 class="ap-mosaic-card__title">Reguladores & Ministerios</h4>
							<p class="ap-mosaic-card__desc">Anticipación normativa y prevención de riesgos regulatorios.</p>
						</div>

						<!-- Card 2 -->
						<div class="ap-mosaic-card ap-mosaic-card--cyan">
							<span class="ap-mosaic-card__tag">Licencia Social</span>
							<div class="ap-mosaic-card__icon">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle></svg>
							</div>
							<h4 class="ap-mosaic-card__title">Comunidades Locales</h4>
							<p class="ap-mosaic-card__desc">Diálogo responsable y gestión de relaciones con comunidades.</p>
						</div>
					</div>

					<!-- Columna 2 (Desplazada hacia abajo) -->
					<div class="ap-mosaic-col ap-mosaic-col--2">
						<!-- Card 3 -->
						<div class="ap-mosaic-card ap-mosaic-card--dark">
							<span class="ap-mosaic-card__tag">Opinión Pública</span>
							<div class="ap-mosaic-card__icon">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#29ABE2" stroke-width="2"><path d="M4 11a9 9 0 0 1 9 9"></path><path d="M4 4a16 16 0 0 1 16 16"></path></svg>
							</div>
							<h4 class="ap-mosaic-card__title">Medios & Líderes</h4>
							<p class="ap-mosaic-card__desc">Posicionamiento y comunicación gubernamental transparente en Perú.</p>
						</div>

						<!-- Card 4 -->
						<div class="ap-mosaic-card ap-mosaic-card--orange">
							<span class="ap-mosaic-card__tag">Alianzas Sectoriales</span>
							<div class="ap-mosaic-card__icon">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg>
							</div>
							<h4 class="ap-mosaic-card__title">Gremios & Cámaras</h4>
							<p class="ap-mosaic-card__desc">Consenso institucional y articulación con el sector privado.</p>
						</div>
					</div>

				</div>

				<!-- Lado Derecho: Editorial Estratégico -->
				<div class="ap-influence-editorial">
					<span class="ap-section-tag">RED ESTRATÉGICA Y MAPAS DE PODER</span>
					<h3 class="ap-influence-editorial__title">Red de Relaciones e Influencia</h3>
					<p class="ap-influence-editorial__lead">
						Conectamos los nodos de decisión clave en Perú mediante mapas de poder y <strong>relacionamiento con stakeholders</strong> de alto nivel.
					</p>

					<div class="ap-influence-editorial__list">
						<div class="ap-inf-list-item">
							<div class="ap-inf-list-item__icon">✓</div>
							<p><strong>Mapeo de actores:</strong> Autoridades, reguladores, comunidades y sociedad civil.</p>
						</div>
						<div class="ap-inf-list-item">
							<div class="ap-inf-list-item__icon">✓</div>
							<p><strong>Diálogo técnico:</strong> Propuestas éticas con sustento técnico e institucional.</p>
						</div>
						<div class="ap-inf-list-item">
							<div class="ap-inf-list-item__icon">✓</div>
							<p><strong>Gestión de riesgos:</strong> Alertas tempranas ante cambios regulatorios y proyectos de ley.</p>
						</div>
					</div>

					<div class="ap-influence-editorial__actions">
						<a href="#contacto" class="ap-btn ap-btn--orange">Agendar consulta de mapa de actores</a>
					</div>
				</div>

			</div>
		</div>

	</section>

	<!-- ==========================================
	     BANNER DEDICADO DE PILARES DE VALOR (FUERA DEL HERO)
	     ========================================== -->
	<div class="ap-pillars-banner" data-reveal="up">
		<div class="ap-pillars-banner__container">
			<div class="ap-pillars-banner__item">
				<div class="ap-pillars-banner__icon">
					<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#ee894f" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
				</div>
				<div class="ap-pillars-banner__info">
					<h4 class="ap-pillars-banner__title">Anticipación de riesgos regulatorios</h4>
					<p class="ap-pillars-banner__desc">Prevención normativa y análisis de escenarios en Perú.</p>
				</div>
			</div>

			<div class="ap-pillars-banner__item">
				<div class="ap-pillars-banner__icon">
					<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#ee894f" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
				</div>
				<div class="ap-pillars-banner__info">
					<h4 class="ap-pillars-banner__title">Relacionamiento con stakeholders</h4>
					<p class="ap-pillars-banner__desc">Articulación con autoridades, comunidades y gremios.</p>
				</div>
			</div>

			<div class="ap-pillars-banner__item">
				<div class="ap-pillars-banner__icon">
					<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#ee894f" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
				</div>
				<div class="ap-pillars-banner__info">
					<h4 class="ap-pillars-banner__title">Comunicación política en Perú</h4>
					<p class="ap-pillars-banner__desc">Estrategias de opinión pública y gestión de percepciones.</p>
				</div>
			</div>
		</div>
	</div>

	<!-- ==========================================
	     2. REGULADORES Y ADMINISTRACIONES
	     ========================================== -->
	<section class="ap-section ap-section--light" id="relacion-reguladores">
		<div class="ap-section__container">
			<div class="ap-section__header-center" data-reveal="up">
				<span class="ap-section-tag">Relación Institucional</span>
				<h2 class="ap-section__title">Asuntos Públicos: relación con reguladores y administraciones</h2>
				<p class="ap-section__subtitle">
					Gestión de <strong>comunicación gubernamental en Perú</strong> ante autoridades y ministerios para facilitar el diálogo técnico.
				</p>
			</div>

			<!-- Split: Imagen + Grilla de Tarjetas -->
			<div class="ap-reguladores-split" data-reveal="up">
				<div class="ap-reguladores-image-box">
					<?php
					$reg_img = $theme_uri . '/assets/images/asuntos-publicos/reguladores.png';
					?>
					<img src="<?php echo esc_url( $reg_img ); ?>" alt="Fachada institucional de entidad gubernamental en Perú" class="ap-reguladores-image-box__img">
					<div class="ap-reguladores-image-box__caption">
						<span>Sede Institucional & Ministerios</span>
						<p>Facilitación de diálogo técnico ante entidades públicas</p>
					</div>
				</div>

				<div class="ap-services-grid ap-services-grid--split">
					<!-- Card 1 -->
					<div class="ap-service-card">
						<div class="ap-service-card__icon-box">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ee894f" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18"></path><path d="M9 8h1"></path><path d="M9 12h1"></path><path d="M9 16h1"></path><path d="M14 8h1"></path><path d="M14 12h1"></path><path d="M14 16h1"></path><path d="M5 21V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v16"></path></svg>
						</div>
						<span class="ap-service-card__step">01</span>
						<h3 class="ap-service-card__title">Análisis Regulativo</h3>
						<p class="ap-service-card__desc">
							Anticipamos cambios normativos e identificamos los intereses del regulador.
						</p>
					</div>

					<!-- Card 2 -->
					<div class="ap-service-card">
						<div class="ap-service-card__icon-box">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ee894f" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
						</div>
						<span class="ap-service-card__step">02</span>
						<h3 class="ap-service-card__title">Comunicación Gubernamental</h3>
						<p class="ap-service-card__desc">
							Estrategias de <strong>comunicación gubernamental Perú</strong> orientadas a un entendimiento transparente con el Estado.
						</p>
					</div>

					<!-- Card 3 -->
					<div class="ap-service-card">
						<div class="ap-service-card__icon-box">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ee894f" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
						</div>
						<span class="ap-service-card__step">03</span>
						<h3 class="ap-service-card__title">Construcción de Confianza</h3>
						<p class="ap-service-card__desc">
							Relaciones institucionales sostenibles sustentadas en propuestas técnicas sólidas.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ==========================================
	     3. COMUNICACIÓN POLÍTICA (BENTO EDITORIAL OSCURO)
	     ========================================== -->
	<section class="ap-section ap-section--dark" id="comunicacion-politica">
		<div class="ap-section__container">
			<div class="ap-dark-bento" data-reveal="up">
				<div class="ap-dark-bento__main">
					<span class="ap-section-tag ap-section-tag--cyan">Gestión de Percepciones</span>
					<h2 class="ap-section__title ap-section__title--white">Comunicación Política</h2>
					<p class="ap-dark-bento__lead">
						Como <strong>agencia de comunicación política en Perú</strong>, estructuramos estrategias basadas en el análisis contextual y la gestión de percepciones.
					</p>

					<!-- Pilares -->
					<div class="ap-dark-bento__pillars">
						<div class="ap-pillar-item">
							<div class="ap-pillar-item__badge">A</div>
							<div>
								<h4 class="ap-pillar-item__title">Análisis de Entorno</h4>
								<p class="ap-pillar-item__desc">Evaluamos el escenario político y los intereses de cada actor clave.</p>
							</div>
						</div>

						<div class="ap-pillar-item">
							<div class="ap-pillar-item__badge">B</div>
							<div>
								<h4 class="ap-pillar-item__title">Gestión de Percepciones</h4>
								<p class="ap-pillar-item__desc">Posicionamiento estratégico respaldado por narrativas legítimas.</p>
							</div>
						</div>
					</div>
				</div>

				<div class="ap-dark-bento__quote-card">
					<div class="ap-dark-bento__icon">
						<svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="#29ABE2" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21c3 0 7-1 7-8V5c0-1.25-.75-2-2-2H4c-1.25 0-2 .75-2 2v6c0 1.25.75 2 2 2h3c0 3-1 6-4 6z"></path><path d="M16 21c3 0 7-1 7-8V5c0-1.25-.75-2-2-2h-4c-1.25 0-2 .75-2 2v6c0 1.25.75 2 2 2h3c0 3-1 6-4 6z"></path></svg>
					</div>
					<h3 class="ap-dark-bento__quote-title">Agencia de Comunicación Política en Perú</h3>
					<p class="ap-dark-bento__quote-text">
						"Trabajamos sobre el contexto político y social para construir posicionamientos institucionales legítimos y duraderos."
					</p>
					<div class="ap-dark-bento__author">
						<span class="ap-dark-bento__author-name">Orange Latam</span>
						<span class="ap-dark-bento__author-role">Unidad de Asuntos Públicos</span>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ==========================================
	     4. RELACIONAMIENTO CON STAKEHOLDERS Y COMUNIDADES (LISTA EDITORIAL)
	     ========================================== -->
	<section class="ap-section ap-section--light" id="stakeholders">
		<div class="ap-section__container">
			<div class="ap-section__header-center" data-reveal="up">
				<span class="ap-section-tag">Comunidades y Gremios</span>
				<h2 class="ap-section__title">Relacionamiento con Stakeholders y Comunidades</h2>
				<p class="ap-section__subtitle">
					Especialistas en <strong>gestión de relaciones con comunidades</strong> y articulación responsable con el ecosistema de stakeholders.
				</p>
			</div>

			<!-- Split: Imagen + Filas Interactivas -->
			<div class="ap-stakeholders-fresh-layout" data-reveal="up">
				
				<!-- Columna Izquierda: Tarjeta Visual -->
				<div class="ap-stakeholders-visual">
					<?php
					$com_img = $theme_uri . '/assets/images/asuntos-publicos/comunidades.png';
					?>
					<div class="ap-stakeholders-visual__box">
						<img src="<?php echo esc_url( $com_img ); ?>" alt="Reunión de diálogo con comunidades en Perú" class="ap-stakeholders-visual__img">
						<div class="ap-stakeholders-visual__content">
							<span class="ap-stakeholders-visual__tag">Diálogo Social en Territorio</span>
							<h3 class="ap-stakeholders-visual__title">Gestión de Relaciones con Comunidades</h3>
							<p class="ap-stakeholders-visual__desc">Licencia social y proximidad territorial con planificación responsable.</p>
						</div>
					</div>
				</div>

				<!-- Columna Derecha: Filas Interactivas Ecosistema -->
				<div class="ap-stakeholder-list-rows">
					
					<!-- Row 01 -->
					<div class="ap-stake-row">
						<div class="ap-stake-row__num">01</div>
						<div class="ap-stake-row__icon-box">
							<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#ee894f" stroke-width="2"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path></svg>
						</div>
						<div class="ap-stake-row__info">
							<h4 class="ap-stake-row__title">Autoridades Reguladoras</h4>
							<p class="ap-stake-row__desc">Ministerios y organismos reguladores del Estado.</p>
						</div>
						<div class="ap-stake-row__arrow">
							<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7,7 17,7 17,17"></polyline></svg>
						</div>
					</div>

					<!-- Row 02 -->
					<div class="ap-stake-row">
						<div class="ap-stake-row__num">02</div>
						<div class="ap-stake-row__icon-box">
							<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#ee894f" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle></svg>
						</div>
						<div class="ap-stake-row__info">
							<h4 class="ap-stake-row__title">Comunidades Locales</h4>
							<p class="ap-stake-row__desc">Licencia social y entorno operativo directo.</p>
						</div>
						<div class="ap-stake-row__arrow">
							<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7,7 17,7 17,17"></polyline></svg>
						</div>
					</div>

					<!-- Row 03 -->
					<div class="ap-stake-row">
						<div class="ap-stake-row__num">03</div>
						<div class="ap-stake-row__icon-box">
							<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#ee894f" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
						</div>
						<div class="ap-stake-row__info">
							<h4 class="ap-stake-row__title">Organizaciones Sociales</h4>
							<p class="ap-stake-row__desc">ONGs y colectivos ciudadanos organizados.</p>
						</div>
						<div class="ap-stake-row__arrow">
							<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7,7 17,7 17,17"></polyline></svg>
						</div>
					</div>

					<!-- Row 04 -->
					<div class="ap-stake-row">
						<div class="ap-stake-row__num">04</div>
						<div class="ap-stake-row__icon-box">
							<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#ee894f" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg>
						</div>
						<div class="ap-stake-row__info">
							<h4 class="ap-stake-row__title">Gremios & Cámaras</h4>
							<p class="ap-stake-row__desc">Consenso sectorial y cámaras empresariales.</p>
						</div>
						<div class="ap-stake-row__arrow">
							<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7,7 17,7 17,17"></polyline></svg>
						</div>
					</div>

					<!-- Row 05 -->
					<div class="ap-stake-row">
						<div class="ap-stake-row__num">05</div>
						<div class="ap-stake-row__icon-box">
							<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#ee894f" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polygon points="12 8 8 12 12 16 16 12 12 8"></polygon></svg>
						</div>
						<div class="ap-stake-row__info">
							<h4 class="ap-stake-row__title">Líderes de Opinión</h4>
							<p class="ap-stake-row__desc">Voceros y analistas del debate público.</p>
						</div>
						<div class="ap-stake-row__arrow">
							<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7,7 17,7 17,17"></polyline></svg>
						</div>
					</div>

					<!-- Row 06 -->
					<div class="ap-stake-row">
						<div class="ap-stake-row__num">06</div>
						<div class="ap-stake-row__icon-box">
							<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#ee894f" stroke-width="2"><path d="M4 11a9 9 0 0 1 9 9"></path><path d="M4 4a16 16 0 0 1 16 16"></path><circle cx="5" cy="19" r="1"></circle></svg>
						</div>
						<div class="ap-stake-row__info">
							<h4 class="ap-stake-row__title">Medios de Comunicación</h4>
							<p class="ap-stake-row__desc">Prensa nacional y portales regionales.</p>
						</div>
						<div class="ap-stake-row__arrow">
							<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7,7 17,7 17,17"></polyline></svg>
						</div>
					</div>

				</div>
			</div>

			<!-- Bloque Destacado de Diferencial -->
			<div class="ap-diff-callout" data-reveal="up">
				<div class="ap-diff-callout__icon">✦</div>
				<p class="ap-diff-callout__text">
					<strong>Nuestro diferencial:</strong> Conectamos el <strong>relacionamiento con stakeholders</strong> con los objetivos estratégicos de la organización, construyendo una visión integral de cada ecosistema.
				</p>
			</div>
		</div>
	</section>

	<!-- ==========================================
	     5. BANNER CTA FINAL
	     ========================================== -->
	<section class="ap-cta" id="contacto">
		<div class="ap-cta__container" data-reveal="up">
			<span class="ap-cta__tag">Asuntos Públicos y Comunicación Institucional</span>
			<h2 class="ap-cta__title">Trabajemos juntos</h2>
			<p class="ap-cta__desc">¿Listo para anticipar escenarios regulatorios y fortalecer el <strong>relacionamiento con stakeholders</strong>? Conversemos sobre tu próximo proyecto en Perú.</p>
			<a href="mailto:negocios@orange-la.com" class="ap-cta__btn">Agendar conversación</a>
		</div>
	</section>

</main>

<?php
get_footer();
