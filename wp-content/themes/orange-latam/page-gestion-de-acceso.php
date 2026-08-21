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
					Ayudamos a que la sociedad acceda a avances médicos y tratamientos de forma ética y oportuna, con estrategias de comunicación farmacéutica y relacionamiento institucional para el sector salud y farma en Perú y Latinoamérica.
				</p>
			</div>

			<div class="ga-hero__media" data-reveal="right">
				<div class="ga-hero__photo-wrapper">
					<img class="ga-hero__photo" 
						src="<?php echo esc_url( $theme_uri . '/assets/images/gestion-de-acceso/hero.webp' ); ?>" 
						alt="Investigadora médica y consultora de market access en laboratorio de salud - Orange Latam">
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
				<div class="ga-about__avatar-composition">
					<!-- Avatar 1 (Top Left) -->
					<div class="ga-about__avatar-item ga-about__avatar-item--1">
						<div class="ga-about__circle">
							<img src="<?php echo esc_url( $theme_uri . '/assets/images/gestion-de-acceso/avatar-1.webp' ); ?>" alt="Paciente">
						</div>
						<div class="ga-about__pill-badge ga-about__pill-badge--left">
							<span class="ga-about__pill-icon">
								<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
							</span>
							<div class="ga-about__pill-text">
								<strong>Comunidad</strong>
								<span>Acceso a Salud</span>
							</div>
						</div>
					</div>

					<!-- Avatar 2 (Top Right Small) -->
					<div class="ga-about__avatar-item ga-about__avatar-item--2">
						<div class="ga-about__circle">
							<img src="<?php echo esc_url( $theme_uri . '/assets/images/gestion-de-acceso/avatar-2.webp' ); ?>" alt="Especialista Médica">
						</div>
					</div>

					<!-- Avatar 3 (Bottom Left Medium) -->
					<div class="ga-about__avatar-item ga-about__avatar-item--3">
						<div class="ga-about__circle">
							<img src="<?php echo esc_url( $theme_uri . '/assets/images/gestion-de-acceso/avatar-3.webp' ); ?>" alt="Usuario de Salud">
						</div>
					</div>

					<!-- Avatar 4 (Bottom Right Main) -->
					<div class="ga-about__avatar-item ga-about__avatar-item--4">
						<div class="ga-about__circle">
							<img src="<?php echo esc_url( $theme_uri . '/assets/images/gestion-de-acceso/avatar-4.webp' ); ?>" alt="Pacientes y Tratamientos">
						</div>
						<div class="ga-about__pill-badge ga-about__pill-badge--right">
							<span class="ga-about__pill-icon">
								<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg>
							</span>
							<div class="ga-about__pill-text">
								<strong>Soluciones</strong>
								<span>Innovación Médica</span>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="ga-about__content" data-reveal="right">
				<h2 class="ga-about__title">Las barreras de acceso a la salud</h2>
				
				<p class="ga-about__lead">
					El acceso a la salud no depende únicamente de que exista un tratamiento o una innovación disponible.
				</p>

				<p class="ga-about__text">
					Factores regulatorios, económicos, institucionales, sociales y de información dificultan que las soluciones sanitarias lleguen a quienes más las necesitan. La <strong>gestión de acceso o market access en salud</strong> busca comprender y superar estas barreras.
				</p>

				<p class="ga-about__text">
					En <strong>Orange Latam</strong> trabajamos la estrategia y comunicación en salud para ayudar a las organizaciones a comprender el ecosistema y comunicar el valor de sus soluciones con claridad y responsabilidad.
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
			<h2 class="ga-pillars__title">Cómo aperturamos el acceso de forma ética</h2>
			<p class="ga-pillars__desc">
				El acceso sostenible requiere confianza y conversaciones basadas en evidencia. Desarrollamos estrategias de comunicación que respetan los marcos regulatorios y principios éticos del sector.
			</p>
		</div>

		<div class="ga-pillars__grid" data-reveal="up">
			<!-- Pilar 1 -->
			<div class="ga-pillar-card">
				<h3 class="ga-pillar-card__title">Análisis del Ecosistema</h3>
				<p class="ga-pillar-card__desc">Comprendemos las dinámicas regulatorias, económicas e institucionales que influyen en el acceso a la salud.</p>
			</div>

			<!-- Pilar 2 -->
			<div class="ga-pillar-card">
				<h3 class="ga-pillar-card__title">Comunicación en Salud</h3>
				<p class="ga-pillar-card__desc">Traducimos información científica compleja en mensajes claros, relevantes y técnicamente responsables.</p>
			</div>

			<!-- Pilar 3 -->
			<div class="ga-pillar-card">
				<h3 class="ga-pillar-card__title">Relacionamiento Ético</h3>
				<p class="ga-pillar-card__desc">Facilitamos espacios de diálogo y confianza entre múltiples actores para desbloquear el acceso a medicamentos.</p>
			</div>
		</div>
	</section>

	<!-- ==========================================
	     5. PARA QUIÉN ES ESTE SERVICIO (AUDIENCIAS)
	     ========================================== -->
	<section class="ga-targets" id="para-quien">
		<div class="ga-targets__header" data-reveal="up">
			<h2 class="ga-targets__title">Para quién es este servicio</h2>
			<p class="ga-targets__desc">
				La gestión de acceso es clave para organizaciones que desarrollan, representan, financian o implementan soluciones para mejorar los resultados en salud.
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
