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
		<div class="ap-hero__pattern" aria-hidden="true"></div>
		<div class="ap-hero__container">
			<div class="ap-hero__content">
				<h1 class="ap-hero__title" data-ap-hero-title>
					Asuntos Públicos y
					<span class="ap-title-mark">Relaciones Institucionales</span>
				</h1>


				<p class="ap-hero__lead" data-ap-hero-item>
					Estrategias de <strong>asuntos públicos</strong> para anticipar riesgos regulatorios, fortalecer el <strong>relacionamiento con stakeholders</strong> y gestionar escenarios complejos en Perú y en otros países.
				</p>

			</div>

			<div class="ap-hero__media" data-ap-hero-media>
				<!-- Imagen Hero Real -->
				<div class="ap-hero-image-card">
					<?php
					$hero_img = $theme_uri . '/assets/images/asuntos-publicos/hero.png';
					?>
					<img src="<?php echo esc_url( $hero_img ); ?>" alt="Mesa de diálogo de Asuntos Públicos y Relaciones Institucionales en Perú" class="ap-hero-image-card__img">
				</div>
			</div>
		</div>

		<!-- RED DE RELACIONES E INFLUENCIA -->
		<div class="ap-influence-hub" id="red-influencia" data-ap-reveal>
			<div class="ap-influence-hub__container">

				<!-- Parte Superior: Editorial Estratégico -->
				<div class="ap-influence-editorial">
					<span class="ap-section-tag ap-section-tag--cyan">RED ESTRATÉGICA Y MAPAS DE PODER</span>
					<h3 class="ap-influence-editorial__title">Red de Relaciones e Influencia</h3>
					<p class="ap-influence-editorial__lead">
						Conectamos los nodos de decisión clave en Perú y en otros países mediante mapas de poder y <strong>relacionamiento con stakeholders</strong> de alto nivel.
					</p>

					<div class="ap-influence-editorial__list">
						<div class="ap-inf-list-item">
							<div class="ap-inf-list-item__icon ap-inf-list-item__icon--cyan">✓</div>
							<p><strong>Mapeo de actores:</strong> Autoridades, reguladores, comunidades y sociedad civil.</p>
						</div>
						<div class="ap-inf-list-item">
							<div class="ap-inf-list-item__icon ap-inf-list-item__icon--cyan">✓</div>
							<p><strong>Diálogo técnico:</strong> Propuestas éticas con sustento técnico e institucional.</p>
						</div>
						<div class="ap-inf-list-item">
							<div class="ap-inf-list-item__icon ap-inf-list-item__icon--cyan">✓</div>
							<p><strong>Gestión de riesgos:</strong> Alertas tempranas ante cambios regulatorios y proyectos de ley.</p>
						</div>
					</div>
				</div>

				<!-- Parte Inferior: Cuadrícula de 4 Tarjetas de Stakeholders -->
				<div class="ap-influence-mosaic">
					<!-- Card 1 (Celeste) -->
					<div class="ap-mosaic-card ap-mosaic-card--cyan">
						<span class="ap-mosaic-card__tag">Regulación & Licencias</span>
						<h4 class="ap-mosaic-card__title">Reguladores & Ministerios</h4>
						<p class="ap-mosaic-card__desc">Anticipación normativa y prevención de riesgos regulatorios.</p>
					</div>

					<!-- Card 2 (Blanca) -->
					<div class="ap-mosaic-card ap-mosaic-card--white">
						<span class="ap-mosaic-card__tag">Opinión Pública</span>
						<h4 class="ap-mosaic-card__title">Medios & Líderes</h4>
						<p class="ap-mosaic-card__desc">Posicionamiento y comunicación gubernamental transparente.</p>
					</div>

					<!-- Card 3 (Blanca) -->
					<div class="ap-mosaic-card ap-mosaic-card--white">
						<span class="ap-mosaic-card__tag">Licencia Social</span>
						<h4 class="ap-mosaic-card__title">Comunidades Locales</h4>
						<p class="ap-mosaic-card__desc">Diálogo responsable y gestión de relaciones con comunidades.</p>
					</div>

					<!-- Card 4 (Celeste) -->
					<div class="ap-mosaic-card ap-mosaic-card--cyan">
						<span class="ap-mosaic-card__tag">Alianzas Sectoriales</span>
						<h4 class="ap-mosaic-card__title">Gremios & Cámaras</h4>
						<p class="ap-mosaic-card__desc">Consenso institucional y articulación con el sector privado.</p>
					</div>
				</div>

			</div>
		</div>

	</section>



	<!-- ==========================================
	     2. REGULADORES Y ADMINISTRACIONES
	     ========================================== -->
	<section class="ap-section ap-section--light" id="relacion-reguladores">
		<div class="ap-section__container">
			<div class="ap-section__header-center" data-ap-reveal>
				<span class="ap-section-tag ap-section-tag--cyan">Relación Institucional</span>
				<h2 class="ap-section__title">Asuntos Públicos: relación con reguladores y administraciones</h2>
				<p class="ap-section__subtitle">
					Gestión de <strong>comunicación gubernamental en Perú</strong> ante autoridades y ministerios para facilitar el diálogo técnico.
				</p>
			</div>

			<!-- Split: Imagen + Grilla de Tarjetas -->
			<div class="ap-reguladores-split">
				<div class="ap-reguladores-image-box" data-ap-img-reveal>
					<?php
					$reg_img = $theme_uri . '/assets/images/asuntos-publicos/reguladores.png';
					?>
					<img src="<?php echo esc_url( $reg_img ); ?>" alt="Fachada institucional de entidad gubernamental en Perú" class="ap-reguladores-image-box__img">

				</div>

				<div class="ap-services-grid ap-services-grid--split" data-ap-cards>
					<!-- Card 1 -->
					<div class="ap-service-card">
						<span class="ap-service-card__step">01</span>
						<h3 class="ap-service-card__title">Análisis Regulativo</h3>
						<p class="ap-service-card__desc">
							Anticipamos cambios normativos e identificamos los intereses del regulador.
						</p>
					</div>

					<!-- Card 2 -->
					<div class="ap-service-card">
						<span class="ap-service-card__step">02</span>
						<h3 class="ap-service-card__title">Comunicación Gubernamental</h3>
						<p class="ap-service-card__desc">
							Estrategias de <strong>comunicación gubernamental Perú</strong> orientadas a un entendimiento transparente con el Estado.
						</p>
					</div>

					<!-- Card 3 -->
					<div class="ap-service-card">
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
			<div class="ap-dark-bento">
				<div class="ap-dark-bento__main" data-ap-reveal>
					<span class="ap-section-tag ap-section-tag--cyan">Gestión de Percepciones</span>
					<h2 class="ap-section__title ap-section__title--white">Comunicación Política</h2>
					<p class="ap-dark-bento__lead">
						Como <strong>agencia experta en comunicación política en Perú y otros países</strong>, estructuramos estrategias basadas en el análisis contextual y la gestión de percepciones.
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

				<div class="ap-dark-bento__quote-card" data-ap-quote>
					<p class="ap-dark-bento__quote-text">
						Trabajamos sobre el contexto político y social para construir posicionamientos institucionales legítimos y duraderos.
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
			<div class="ap-section__header-center" data-ap-reveal>
				<span class="ap-section-tag ap-section-tag--cyan">Comunidades y Gremios</span>
				<h2 class="ap-section__title">Relacionamiento con Stakeholders y Comunidades</h2>
				<p class="ap-section__subtitle">
					Especialistas en <strong>gestión de relaciones con comunidades</strong> y articulación responsable con el ecosistema de stakeholders.
				</p>
			</div>

			<!-- Split: Imagen + Filas Interactivas -->
			<div class="ap-stakeholders-fresh-layout">

				<!-- Columna Izquierda: Tarjeta Visual -->
				<div class="ap-stakeholders-visual">
					<?php
					$com_img = $theme_uri . '/assets/images/asuntos-publicos/comunidades.png';
					?>
					<div class="ap-stakeholders-visual__box" data-ap-img-reveal>
						<img src="<?php echo esc_url( $com_img ); ?>" alt="Reunión de diálogo con comunidades en Perú" class="ap-stakeholders-visual__img">

					</div>
				</div>

				<!-- Columna Derecha: Filas Interactivas Ecosistema
				     Cada fila abre el modal de contacto con el stakeholder preseleccionado -->
				<div class="ap-stakeholder-list-rows" data-ap-cards>

					<!-- Row 01 -->
					<button type="button" class="ap-stake-row open-contact-modal" data-service="Asuntos Públicos — Autoridades Reguladoras">
						<span class="ap-stake-row__num">01</span>
						<span class="ap-stake-row__info">
							<span class="ap-stake-row__title">Autoridades Reguladoras</span>
							<span class="ap-stake-row__desc">Ministerios y organismos reguladores del Estado.</span>
						</span>
						<span class="ap-stake-row__arrow">
							<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7,7 17,7 17,17"></polyline></svg>
						</span>
					</button>

					<!-- Row 02 -->
					<button type="button" class="ap-stake-row open-contact-modal" data-service="Asuntos Públicos — Comunidades Locales">
						<span class="ap-stake-row__num">02</span>
						<span class="ap-stake-row__info">
							<span class="ap-stake-row__title">Comunidades Locales</span>
							<span class="ap-stake-row__desc">Licencia social y entorno operativo directo.</span>
						</span>
						<span class="ap-stake-row__arrow">
							<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7,7 17,7 17,17"></polyline></svg>
						</span>
					</button>

					<!-- Row 03 -->
					<button type="button" class="ap-stake-row open-contact-modal" data-service="Asuntos Públicos — Organizaciones Sociales">
						<span class="ap-stake-row__num">03</span>
						<span class="ap-stake-row__info">
							<span class="ap-stake-row__title">Organizaciones Sociales</span>
							<span class="ap-stake-row__desc">ONGs y colectivos ciudadanos organizados.</span>
						</span>
						<span class="ap-stake-row__arrow">
							<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7,7 17,7 17,17"></polyline></svg>
						</span>
					</button>

					<!-- Row 04 -->
					<button type="button" class="ap-stake-row open-contact-modal" data-service="Asuntos Públicos — Gremios & Cámaras">
						<span class="ap-stake-row__num">04</span>
						<span class="ap-stake-row__info">
							<span class="ap-stake-row__title">Gremios & Cámaras</span>
							<span class="ap-stake-row__desc">Consenso sectorial y cámaras empresariales.</span>
						</span>
						<span class="ap-stake-row__arrow">
							<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7,7 17,7 17,17"></polyline></svg>
						</span>
					</button>

					<!-- Row 05 -->
					<button type="button" class="ap-stake-row open-contact-modal" data-service="Asuntos Públicos — Líderes de Opinión">
						<span class="ap-stake-row__num">05</span>
						<span class="ap-stake-row__info">
							<span class="ap-stake-row__title">Líderes de Opinión</span>
							<span class="ap-stake-row__desc">Voceros y analistas del debate público.</span>
						</span>
						<span class="ap-stake-row__arrow">
							<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7,7 17,7 17,17"></polyline></svg>
						</span>
					</button>

					<!-- Row 06 -->
					<button type="button" class="ap-stake-row open-contact-modal" data-service="Asuntos Públicos — Medios de Comunicación">
						<span class="ap-stake-row__num">06</span>
						<span class="ap-stake-row__info">
							<span class="ap-stake-row__title">Medios de Comunicación</span>
							<span class="ap-stake-row__desc">Prensa nacional y portales regionales.</span>
						</span>
						<span class="ap-stake-row__arrow">
							<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7,7 17,7 17,17"></polyline></svg>
						</span>
					</button>

				</div>
			</div>

			<!-- Bloque Destacado de Diferencial -->
			<div class="ap-diff-callout" data-ap-reveal>
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
	<section class="bc-cta" id="contacto">
		<div class="bc-cta__container" data-ap-reveal>
			<h2 class="bc-cta__title">Trabajemos juntos</h2>
			<p class="bc-cta__desc">¿Listo para anticipar escenarios regulatorios y fortalecer el <strong>relacionamiento con stakeholders</strong>? Conversemos sobre tu próximo proyecto en Perú.</p>
			<a href="#contacto" class="bc-cta__btn open-contact-modal" data-service="Asuntos Públicos y Relaciones Institucionales">
				<span>Contactar ahora</span>
				<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
			</a>
		</div>
	</section>

</main>

<?php
get_footer();
