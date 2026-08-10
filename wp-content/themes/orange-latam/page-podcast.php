<?php
/**
 * Template Name: Orange Studio Podcast
 * Template Post Type: page
 *
 * @package Orange_Latam
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

$theme_uri = get_template_directory_uri();
$podcast_img_uri = $theme_uri . '/assets/images/podcast';
?>

<main class="podcast-page">
	<!-- ==========================================
	     1. HERO SECTION (YouTube Video Background)
	     ========================================== -->
	<section class="podcast-hero">
		<div class="podcast-hero__video-container">
			<iframe class="podcast-hero__video" 
				src="https://www.youtube.com/embed/xkt_vSw_FK8?autoplay=1&mute=1&loop=1&playlist=xkt_vSw_FK8&controls=0&showinfo=0&autohide=1&modestbranding=1&playsinline=1&enablejsapi=1&disablekb=1&fs=0&iv_load_policy=3&rel=0" 
				title="Orange Studio Podcast Video"
				frameborder="0" 
				allow="autoplay; encrypted-media; picture-in-picture">
			</iframe>
		</div>
		<div class="podcast-hero__vignette"></div>
	</section>

	<!-- ==========================================
	     1b. SUB-BANNER SECTION (Gray Box Text)
	     ========================================== -->
	<section class="podcast-subbanner">
		<div class="podcast-subbanner__container" data-reveal="up">
			<h2 class="podcast-subbanner__text">
				Graba y edita tu Podcast en <strong>Orange Studio</strong>,<br>
				el espacio ideal en Lima para lograr calidad<br>
				de estudio con equipos de alto nivel
			</h2>
		</div>
	</section>

	<!-- ==========================================
	     2. INTRO & LOGO SECTION
	     ========================================== -->
	<section class="podcast-intro">
		<div class="podcast-intro__container" data-reveal="up">
			<div class="podcast-intro__logo-badge">
				<div class="podcast-intro__logo-wrapper">
					<div class="podcast-intro__logo-main">
						<span class="podcast-intro__logo-p">p</span>
						<svg class="podcast-intro__mic-svg" viewBox="0 0 100 130" width="60" height="78" fill="none">
							<rect x="22" y="10" width="56" height="74" rx="28" fill="#000000" />
							<line x1="22" y1="30" x2="78" y2="30" stroke="#ffffff" stroke-width="4" />
							<line x1="22" y1="50" x2="78" y2="50" stroke="#ffffff" stroke-width="4" />
							<line x1="50" y1="10" x2="50" y2="84" stroke="#ffffff" stroke-width="4" />
							<path d="M12 50 C 12 98, 88 98, 88 50" stroke="#000000" stroke-width="9" fill="none" stroke-linecap="round" />
							<line x1="50" y1="98" x2="50" y2="124" stroke="#000000" stroke-width="9" />
							<line x1="26" y1="124" x2="74" y2="124" stroke="#000000" stroke-width="9" stroke-linecap="round" />
						</svg>
						<span class="podcast-intro__logo-dcast">dcast</span>
					</div>
					<div class="podcast-intro__logo-sub">
						<span class="podcast-intro__logo-brand">ORANGE</span> 
						<mark class="podcast-intro__logo-box">STUDIO</mark>
					</div>
				</div>
			</div>

			<p class="podcast-intro__desc">
				En <strong>ORANGE STUDIO</strong> ponemos a tu disposición un estudio para podcast en Miraflores, moderno, cómodo y totalmente equipado, ideal para grabaciones individuales, entrevistas, programas conversacionales y contenido para redes. Contamos con sonido profesional, microfonía de alta gama, iluminación y producción técnica, además de asistencia experta durante toda la sesión.
			</p>

			<div class="podcast-intro__curved-badge">
				<img class="podcast-intro__curved-img" 
					src="<?php echo esc_url( $podcast_img_uri . '/Nuestro-estudio-esta-disenado-para-creadores-marcas-y-empresas-1536x328.webp' ); ?>" 
					alt="Nuestro estudio está diseñado para creadores, marcas y empresas que buscan producir podcasts con calidad profesional y equipos de alta gama">
			</div>
		</div>
	</section>

	<!-- ==========================================
	     3. 4 MAIN FEATURES GRID
	     ========================================== -->
	<section class="podcast-features">
		<div class="podcast-features__container" data-stagger>
			<!-- Card 1 -->
			<div class="podcast-features__card">
				<div class="podcast-features__img-box">
					<img class="podcast-features__img" src="<?php echo esc_url( $podcast_img_uri . '/DSC00737-1-1536x1307.webp' ); ?>" alt="Grabación en audio y video">
				</div>
				<h3 class="podcast-features__title">GRABACIÓN EN<br>AUDIO Y VIDEO</h3>
			</div>

			<!-- Card 2 -->
			<div class="podcast-features__card">
				<div class="podcast-features__img-box">
					<img class="podcast-features__img" src="<?php echo esc_url( $podcast_img_uri . '/DETRAS-DE-ESCENA.webp' ); ?>" alt="Asesoría durante la sesión">
				</div>
				<h3 class="podcast-features__title">ASESORÍA DURANTE<br>LA SESIÓN</h3>
			</div>

			<!-- Card 3 -->
			<div class="podcast-features__card">
				<div class="podcast-features__img-box">
					<img class="podcast-features__img" src="<?php echo esc_url( $podcast_img_uri . '/DSC00811-1-1536x1307.webp' ); ?>" alt="Edición Spotify, YouTube y Reels">
				</div>
				<h3 class="podcast-features__title">EDICIÓN SPOTIFY,<br>YOUTUBE Y REELS</h3>
			</div>

			<!-- Card 4 -->
			<div class="podcast-features__card">
				<div class="podcast-features__img-box">
					<img class="podcast-features__img" src="<?php echo esc_url( $podcast_img_uri . '/Espacio-Moderno-y-comodo-en-Orange-Latam-Podcast2.webp' ); ?>" alt="Espacios modernos y cómodos">
				</div>
				<h3 class="podcast-features__title">ESPACIOS MODERNOS<br>Y CÓMODOS</h3>
			</div>
		</div>
	</section>

	<!-- ==========================================
	     4. SERVICES HEADER & TABS
	     ========================================== -->
	<section class="podcast-service-header">
		<div class="podcast-service-header__container" data-reveal="up">
			<div class="podcast-pill">GRABACIÓN Y EDICIÓN PROFESIONAL DE PODCAST EN LIMA</div>

			<p class="podcast-service-header__desc">
				Si buscas un estudio de podcast profesional en Lima, <strong>ORANGE STUDIO</strong> es tu mejor opción. Ofrecemos servicios técnicos de grabación y edición con estándares de alta calidad para que solo te preocupes de tu contenido.
			</p>

			<div class="podcast-tabs">
				<button class="podcast-tabs__btn podcast-tabs__btn--active" data-tab="grabacion">GRABACIÓN DE PODCAST</button>
				<span class="podcast-tabs__separator">|</span>
				<button class="podcast-tabs__btn" data-tab="edicion">EDICIÓN DE PODCAST</button>
			</div>
		</div>
	</section>

	<!-- ==========================================
	     5. INCLUDED DELIVERABLES (SPLIT BLOCK)
	     ========================================== -->
	<section class="podcast-included">
		<div class="podcast-included__container">
			<div class="podcast-included__grid">
				<div class="podcast-included__img-col" data-reveal="left">
					<img class="podcast-included__img" src="<?php echo esc_url( $podcast_img_uri . '/Calidad-de-estudio-en-Orange-Latam-Podcast-1536x1536.webp' ); ?>" alt="Calidad de estudio con entregables">
				</div>

				<div class="podcast-included__info-col" data-reveal="right">
					<div class="podcast-card">
						<div class="podcast-card__header">CALIDAD DE ESTUDIO CON ENTREGABLES</div>
						<div class="podcast-card__body">
							<p class="podcast-card__text">
								Armamos el plan a la medida de tu proyecto, tanto si requieres solo el espacio o la producción completa. Nos adaptamos a diferentes formatos de grabación como entrevistas, conversatorios, mesas de debate, programas de negocios, estilo de vida y tecnología.
							</p>
							<h4 class="podcast-card__subtitle">INCLUYE:</h4>
							<ul class="podcast-card__list">
								<li>Asesoría técnica</li>
								<li>Grabación multitrack de audio y video</li>
								<li>Grabación 4K (ideal para redes sociales)</li>
								<li>Iluminación profesional y acústica</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ==========================================
	     6. SCENARIOS & SLIDER
	     ========================================== -->
	<section class="podcast-scenarios">
		<div class="podcast-scenarios__container" data-reveal="up">
			<div class="podcast-pill">NUESTRO ESTUDIO</div>

			<div class="podcast-scenarios__curved-badge">
				<img class="podcast-scenarios__curved-img" 
					src="<?php echo esc_url( $podcast_img_uri . '/Tu-Podcast-merece-el-mejor-de-los-escenarios-con-Orange-Latam-Podcast-1536x191.webp' ); ?>" 
					alt="Tu Podcast merece el mejor de los escenarios con Orange Latam Podcast">
			</div>

			<p class="podcast-scenarios__desc">
				En <strong>ORANGE STUDIO</strong> no solo grabas un podcast, creas una experiencia audiovisual. Contamos con diferentes ambientes de grabación diseñados para empresas del sector y personalidades de cada categoría, como contenido corporativo, formato entrevista y producción temática.
			</p>

			<div class="podcast-pill podcast-pill--cyan">NUESTROS ESCENARIOS</div>

			<!-- Interactive Scenarios Carousel -->
			<div class="podcast-carousel" data-reveal="up">
				<button class="podcast-carousel__arrow podcast-carousel__arrow--prev" aria-label="Escenario anterior">‹</button>
				
				<div class="podcast-carousel__track">
					<!-- Scenario 1 -->
					<div class="podcast-carousel__slide podcast-carousel__slide--active">
						<div class="podcast-carousel__card">
							<img class="podcast-carousel__img" src="<?php echo esc_url( $podcast_img_uri . '/The-Podcast-Loft-Orange-Latam-Podcast.webp' ); ?>" alt="The Podcast Loft">
							<div class="podcast-carousel__overlay">
								<h3 class="podcast-carousel__title">THE PODCAST LOFT</h3>
								<button class="podcast-carousel__btn">Ver más</button>
							</div>
						</div>
					</div>

					<!-- Scenario 2 -->
					<div class="podcast-carousel__slide">
						<div class="podcast-carousel__card">
							<img class="podcast-carousel__img" src="<?php echo esc_url( $podcast_img_uri . '/Urban-Corner-Orange-Latam-Podcast.webp' ); ?>" alt="Urban Corner">
							<div class="podcast-carousel__overlay">
								<h3 class="podcast-carousel__title">URBAN CORNER</h3>
								<button class="podcast-carousel__btn">Ver más</button>
							</div>
						</div>
					</div>

					<!-- Scenario 3 -->
					<div class="podcast-carousel__slide">
						<div class="podcast-carousel__card">
							<img class="podcast-carousel__img" src="<?php echo esc_url( $podcast_img_uri . '/ESTUDIO-NOIR-Orange-Latam-Podcast-1.webp' ); ?>" alt="Estudio Noir">
							<div class="podcast-carousel__overlay">
								<h3 class="podcast-carousel__title">ESTUDIO NOIR</h3>
								<button class="podcast-carousel__btn">Ver más</button>
							</div>
						</div>
					</div>
				</div>

				<button class="podcast-carousel__arrow podcast-carousel__arrow--next" aria-label="Escenario siguiente">›</button>
			</div>

			<p class="podcast-scenarios__footer-note">
				Sea cual sea el estilo de tu podcast, en <strong>ORANGE STUDIO</strong> encontrarás el escenario perfecto para grabar tu contenido profesional en Lima, a la medida de tu presupuesto y necesidades.
			</p>
		</div>
	</section>

	<!-- ==========================================
	     7. CONTACT & RESERVATION FORM
	     ========================================== -->
	<section class="podcast-booking" id="contacto-podcast">
		<div class="podcast-booking__container" data-reveal="up">
			<div class="podcast-pill">CONTACTO</div>

			<div class="podcast-booking__badge">
				¡Listo para grabar tu podcast con calidad profesional!
			</div>

			<p class="podcast-booking__desc">
				Completa el formulario o contáctanos por WhatsApp y reserva tu escenario de acuerdo a tu propuesta, o solicita tu paquete más completo de Lima.
			</p>

			<div class="podcast-form-card">
				<form action="#" method="post" class="podcast-form">
					<div class="podcast-form__row">
						<div class="podcast-form__group">
							<label for="pod-name" class="podcast-form__label">NOMBRE</label>
							<input type="text" id="pod-name" name="name" class="podcast-form__input" required>
						</div>
						<div class="podcast-form__group">
							<label for="pod-email" class="podcast-form__label">EMAIL</label>
							<input type="email" id="pod-email" name="email" class="podcast-form__input" required>
						</div>
					</div>

					<div class="podcast-form__row">
						<div class="podcast-form__group">
							<label for="pod-type" class="podcast-form__label">TIPO DE PODCAST</label>
							<select id="pod-type" name="podcast_type" class="podcast-form__select">
								<option value="">Selecciona un tipo</option>
								<option value="entrevista">Entrevista / Conversatorio</option>
								<option value="corporativo">Corporativo / Negocios</option>
								<option value="estilo-de-vida">Estilo de Vida / Entretenimiento</option>
								<option value="educativo">Educativo / Formativo</option>
							</select>
						</div>
						<div class="podcast-form__group">
							<label for="pod-scenario" class="podcast-form__label">TIPO DE ESCENARIO</label>
							<select id="pod-scenario" name="scenario_type" class="podcast-form__select">
								<option value="">Selecciona un escenario</option>
								<option value="loft">The Podcast Loft</option>
								<option value="urban">Urban Corner</option>
								<option value="noir">Estudio Noir</option>
							</select>
						</div>
					</div>

					<div class="podcast-form__row">
						<div class="podcast-form__group">
							<label for="pod-date" class="podcast-form__label">FECHA DE SESIÓN</label>
							<input type="date" id="pod-date" name="session_date" class="podcast-form__input">
						</div>
						<div class="podcast-form__group">
							<label for="pod-time" class="podcast-form__label">HORA</label>
							<select id="pod-time" name="session_time" class="podcast-form__select">
								<option value="">Selecciona la hora</option>
								<option value="09:00">09:00 AM</option>
								<option value="11:00">11:00 AM</option>
								<option value="14:00">02:00 PM</option>
								<option value="16:00">04:00 PM</option>
								<option value="18:00">06:00 PM</option>
							</select>
						</div>
					</div>

					<div class="podcast-form__group podcast-form__group--full">
						<label for="pod-message" class="podcast-form__label">MENSAJE</label>
						<textarea id="pod-message" name="message" rows="4" class="podcast-form__textarea"></textarea>
					</div>

					<div class="podcast-form__submit-row">
						<button type="submit" class="podcast-form__submit-btn">RESERVAR SESIÓN</button>
					</div>
				</form>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
