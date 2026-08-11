<?php
/**
 * Template Name: Gestión de Acceso (Market Access)
 *
 * Página de servicio dedicada a la Gestión de Acceso / Market Access y Comunicación Estratégica en Salud.
 *
 * @package Orange_Latam
 */

get_header();
$theme_uri = get_template_directory_uri();
?>

<!-- SEO Structured Data (JSON-LD) for Health & Market Access Service -->
<script type="application/ld+json">
{
	"@context": "https://schema.org",
	"@type": "ProfessionalService",
	"name": "Gestión de Acceso (Market Access) - Orange Latam",
	"description": "Ayudamos a que la sociedad acceda a avances médicos y tratamientos de forma ética y oportuna. Comunicación estratégica para el sector salud y farma.",
	"provider": {
		"@type": "Organization",
		"name": "Orange Latam",
		"url": "<?php echo esc_url( home_url( '/' ) ); ?>"
	},
	"areaServed": ["PE", "LATAM"],
	"serviceType": [
		"Market Access Salud",
		"Comunicación en Salud",
		"Comunicación Farmacéutica",
		"Acceso a Medicamentos",
		"Relacionamiento con Stakeholders de Salud"
	],
	"url": "<?php echo esc_url( home_url( '/gestion-de-acceso/' ) ); ?>"
}
</script>

<main class="ga-page">

	<!-- ==========================================
	     1. HERO SECTION
	     ========================================== -->
	<section class="ga-hero" id="inicio">
		<div class="ga-hero__bg-glow"></div>
		<div class="ga-hero__container">
			<div class="ga-hero__content" data-reveal="left">
				<h1 class="ga-hero__title">
					Gestión de Acceso: <span>Comunicación Estratégica en Salud</span>
				</h1>

				<p class="ga-hero__desc">
					Ayudamos a que la sociedad acceda a avances médicos y tratamientos de forma ética y oportuna. Desarrollamos estrategias integrales de comunicación farmacéutica y relacionamiento institucional para el sector salud y farma en Perú y Latinoamérica.
				</p>
			</div>

			<div class="ga-hero__media" data-reveal="right">
				<div class="ga-hero__photo-wrapper">
					<img class="ga-hero__photo" 
						src="<?php echo esc_url( $theme_uri . '/assets/images/gestion-de-acceso/hero.png' ); ?>" 
						alt="Investigadora médica y consultora de market access en laboratorio de salud - Orange Latam">
				</div>

				<!-- Floating Stat Badge -->
				<div class="ga-hero__badge-float">
					<div class="ga-hero__badge-icon">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg>
					</div>
					<div>
						<div class="ga-hero__badge-num">100% Ético</div>
						<div class="ga-hero__badge-label">Riguroso & Regulatorio</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ==========================================
	     2. FLOATING HIGHLIGHTS BAR (3 CARDS)
	     ========================================== -->
	<section class="ga-highlights">
		<div class="ga-highlights__container">
			<div class="ga-highlights__grid">
				<!-- Highlight Card 1 -->
				<div class="ga-highlight-card" data-reveal="up">
					<div class="ga-highlight-card__icon">
						<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><path d="M21 21l-4.35-4.35"/><path d="M11 8v6M8 11h6"/></svg>
					</div>
					<h3 class="ga-highlight-card__title">Análisis del Ecosistema</h3>
					<p class="ga-highlight-card__desc">
						Comprendemos las dinámicas regulatorias, económicas e institucionales que influyen en el acceso a la salud.
					</p>
				</div>

				<!-- Highlight Card 2 -->
				<div class="ga-highlight-card" data-reveal="up" data-reveal-delay="100">
					<div class="ga-highlight-card__icon">
						<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/><path d="M9 8h6M9 12h4"/></svg>
					</div>
					<h3 class="ga-highlight-card__title">Comunicación en Salud</h3>
					<p class="ga-highlight-card__desc">
						Traducimos información científica compleja en mensajes claros, relevantes y con sustento técnico responsable.
					</p>
				</div>

				<!-- Highlight Card 3 -->
				<div class="ga-highlight-card" data-reveal="up" data-reveal-delay="200">
					<div class="ga-highlight-card__icon">
						<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
					</div>
					<h3 class="ga-highlight-card__title">Relacionamiento Ético</h3>
					<p class="ga-highlight-card__desc">
						Facilitamos espacios de diálogo y confianza entre múltiples actores para desbloquear el acceso a medicamentos.
					</p>
				</div>
			</div>
		</div>
	</section>

	<!-- ==========================================
	     3. LA BARRERA DE ACCESO A LA SALUD
	     ========================================== -->
	<section class="ga-about" id="la-barrera">
		<div class="ga-about__container">
			<div class="ga-about__media" data-reveal="left">
				<div class="ga-about__img-wrapper">
					<img class="ga-about__img" 
						src="<?php echo esc_url( $theme_uri . '/assets/images/gestion-de-acceso/barrera.png' ); ?>" 
						alt="Equipo de salud analizando barreras de acceso a tratamientos médicos en Perú">
				</div>
			</div>

			<div class="ga-about__content" data-reveal="right">
				<span class="ga-section-tag">Desafío Sanitario</span>
				<h2 class="ga-about__title">La barrera de acceso a la salud</h2>
				
				<p class="ga-about__lead">
					El acceso a la salud no depende únicamente de que exista un tratamiento o una innovación disponible.
				</p>

				<p class="ga-about__text">
					Intervienen factores regulatorios, económicos, institucionales, sociales y de información que dificultan que las soluciones sanitarias lleguen a quienes más las necesitan. En este contexto, la <strong>gestión de acceso o market access en salud</strong> busca comprender y abordar estas barreras.
				</p>

				<p class="ga-about__text">
					En <strong>Orange Latam</strong> trabajamos desde la estrategia y la comunicación en salud para ayudar a las organizaciones a comprender el ecosistema y comunicar el valor de sus soluciones de manera clara, responsable y sustentada.
				</p>

				<div class="ga-about__features">
					<div class="ga-about__feature-item">
						<div class="ga-about__feature-check">✓</div>
						<div class="ga-about__feature-text">Factores regulatorios e institucionales</div>
					</div>
					<div class="ga-about__feature-item">
						<div class="ga-about__feature-check">✓</div>
						<div class="ga-about__feature-text">Disponibilidad de medicamentos</div>
					</div>
					<div class="ga-about__feature-item">
						<div class="ga-about__feature-check">✓</div>
						<div class="ga-about__feature-text">Relacionamiento multipropósito</div>
					</div>
					<div class="ga-about__feature-item">
						<div class="ga-about__feature-check">✓</div>
						<div class="ga-about__feature-text">Comprensión del ecosistema local</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ==========================================
	     4. CÓMO DESBLOQUEAMOS EL ACCESO DE FORMA ÉTICA (6 PILARES)
	     ========================================== -->
	<section class="ga-pillars" id="como-trabajamos">
		<div class="ga-pillars__header" data-reveal="up">
			<span class="ga-section-tag">Nuestras Soluciones</span>
			<h2 class="ga-pillars__title">Cómo desbloqueamos el acceso de forma ética</h2>
			<p class="ga-pillars__desc">
				El acceso sostenible requiere construir confianza y generar conversaciones basadas en evidencia. Desarrollamos estrategias de comunicación respetando los marcos regulatorios y principios éticos del sector.
			</p>
		</div>

		<div class="ga-pillars__grid">
			<!-- Pilar 1 -->
			<div class="ga-pillar-card" data-reveal="up">
				<div class="ga-pillar-card__icon-wrapper">
					<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/><polyline points="3.27 6.96 12 12.01 20.73 6.96"/><line x1="12" y1="22.08" x2="12" y2="12"/></svg>
				</div>
				<h3 class="ga-pillar-card__title">Análisis del Ecosistema de Salud</h3>
				<p class="ga-pillar-card__text">
					Identificamos actores, dinámicas, barreras y oportunidades que influyen en el acceso a una solución o innovación sanitaria.
				</p>
			</div>

			<!-- Pilar 2 -->
			<div class="ga-pillar-card" data-reveal="up" data-reveal-delay="100">
				<div class="ga-pillar-card__icon-wrapper">
					<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>
				</div>
				<h3 class="ga-pillar-card__title">Estrategia de Comunicación en Salud</h3>
				<p class="ga-pillar-card__text">
					Traducimos información técnica y científica en mensajes claros y relevantes para diferentes audiencias del sector salud.
				</p>
			</div>

			<!-- Pilar 3 -->
			<div class="ga-pillar-card" data-reveal="up" data-reveal-delay="200">
				<div class="ga-pillar-card__icon-wrapper">
					<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
				</div>
				<h3 class="ga-pillar-card__title">Relacionamiento con Stakeholders</h3>
				<p class="ga-pillar-card__text">
					Generamos espacios de diálogo directo con actores relevantes del sistema de salud de acuerdo con las metas de cada proyecto.
				</p>
			</div>

			<!-- Pilar 4 -->
			<div class="ga-pillar-card" data-reveal="up">
				<div class="ga-pillar-card__icon-wrapper">
					<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M10.5 20.5L3 13l3-3 7.5 7.5z"/><path d="M13.5 17.5L21 10l-3-3-7.5 7.5z"/><circle cx="17.5" cy="6.5" r="2.5"/></svg>
				</div>
				<h3 class="ga-pillar-card__title">Comunicación Farmacéutica</h3>
				<p class="ga-pillar-card__text">
					Desarrollamos contenidos orientados a explicar la propuesta de valor de tratamientos e innovaciones a públicos especializados y generales.
				</p>
			</div>

			<!-- Pilar 5 -->
			<div class="ga-pillar-card" data-reveal="up" data-reveal-delay="100">
				<div class="ga-pillar-card__icon-wrapper">
					<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/></svg>
				</div>
				<h3 class="ga-pillar-card__title">Acceso a Medicamentos</h3>
				<p class="ga-pillar-card__text">
					Acompañamos la comunicación alrededor de la incorporación y disponibilidad de medicamentos en el mercado local e institucional.
				</p>
			</div>

			<!-- Pilar 6 -->
			<div class="ga-pillar-card" data-reveal="up" data-reveal-delay="200">
				<div class="ga-pillar-card__icon-wrapper">
					<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 21h18"/><path d="M9 8h6"/><path d="M9 12h6"/><path d="M9 16h6"/><path d="M6 21V4a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v17"/></svg>
				</div>
				<h3 class="ga-pillar-card__title">Gestión de Asuntos Públicos en Salud</h3>
				<p class="ga-pillar-card__text">
					Integramos el análisis del entorno institucional y regulatorio para abordar desafíos complejos del sector con legitimidad.
				</p>
			</div>
		</div>
	</section>

	<!-- ==========================================
	     5. PARA QUIÉN ES ESTE SERVICIO (AUDIENCIAS)
	     ========================================== -->
	<section class="ga-targets" id="para-quien">
		<div class="ga-targets__header" data-reveal="up">
			<span class="ga-section-tag">Especialización por Sector</span>
			<h2 class="ga-targets__title">Para quién es este servicio</h2>
			<p class="ga-targets__desc">
				La gestión de acceso es relevante para organizaciones que desarrollan, representan, financian o implementan soluciones destinadas a mejorar los resultados en salud.
			</p>
		</div>

		<div class="ga-targets__grid">
			<!-- Sector 1 -->
			<div class="ga-target-card" data-reveal="up">
				<span class="ga-target-card__badge">Farma & Labs</span>
				<h3 class="ga-target-card__title">Industria Farmacéutica</h3>
				<p class="ga-target-card__desc">
					Compañías que buscan comunicar el valor de sus medicamentos, tratamientos e innovaciones y comprender dinámicas de acceso.
				</p>
			</div>

			<!-- Sector 2 -->
			<div class="ga-target-card" data-reveal="up" data-reveal-delay="100">
				<span class="ga-target-card__badge">Health Tech</span>
				<h3 class="ga-target-card__title">Empresas de Salud y Tecnología</h3>
				<p class="ga-target-card__desc">
					Desarrolladores de dispositivos médicos, tecnologías y servicios que requieren posicionamiento estratégico en el sistema sanitario.
				</p>
			</div>

			<!-- Sector 3 -->
			<div class="ga-target-card" data-reveal="up" data-reveal-delay="200">
				<span class="ga-target-card__badge">Organizaciones</span>
				<h3 class="ga-target-card__title">ONG y Organizaciones Sociales</h3>
				<p class="ga-target-card__desc">
					Entidades que trabajan por mejorar el acceso a servicios e información en salud y necesitan fortalecer su relacionamiento.
				</p>
			</div>

			<!-- Sector 4 -->
			<div class="ga-target-card" data-reveal="up" data-reveal-delay="300">
				<span class="ga-target-card__badge">Instituciones</span>
				<h3 class="ga-target-card__title">Instituciones y Proyectos de Salud</h3>
				<p class="ga-target-card__desc">
					Iniciativas que requieren articular perspectivas, explicar propuestas de valor y generar espacios de diálogo técnico.
				</p>
			</div>
		</div>
	</section>

	<!-- ==========================================
	     6. BANNER TRABAJEMOS JUNTOS (CONTACTO)
	     ========================================== -->
	<section class="bc-cta" id="contacto">
		<div class="bc-cta__container" data-reveal="up">
			<span class="bc-cta__tag">Market Access & Salud</span>
			<h2 class="bc-cta__title">Trabajemos juntos</h2>
			<p class="bc-cta__desc">¿Tienes un desafío de acceso, comunicación o posicionamiento en salud? Conversemos sobre tu próximo proyecto.</p>
			<a href="#contacto" class="bc-cta__btn open-contact-modal" data-service="Gestión de Acceso (Market Access)">
				<span>Contactar ahora</span>
				<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
			</a>
		</div>
	</section>

</main>

<?php
get_footer();
