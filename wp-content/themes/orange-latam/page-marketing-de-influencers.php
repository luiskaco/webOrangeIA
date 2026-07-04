<?php
/**
 * Template Name: Marketing de Influencers
 * Page template for the "Marketing de Influencers" service page.
 * Slug: marketing-de-influencers
 *
 * @package Orange_Latam
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>

<main class="infl">

	<!-- ==========================================
	     1. HERO
	     ========================================== -->
	<section class="infl-hero">
		<video class="infl-hero__video-bg" autoplay muted loop playsinline preload="auto">
			<source src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/videos/marketing-de-influencers-hero.mp4" type="video/mp4">
		</video>
		<div class="infl-hero__vignette"></div>
	</section>

	<!-- ==========================================
	     1b. AGENCIA + PREMIOS (CARRUSEL)
	     ========================================== -->
	<section class="infl-awards">
		<div class="infl-awards__container">
			<h2 class="infl-awards__title" data-reveal="up">
				Somos la mejor agencia de<br>
				<span class="infl-awards__title-accent">Marketing de Influencers del Perú</span>
			</h2>
			<div class="infl-awards__pill" data-reveal="up">Marketing de Influencers: agencia especializada en Perú</div>

			<div class="infl-awards__carousel" data-reveal="up">
				<div class="infl-awards__track">
					<?php
					$influencer_awards = array(
						array( 'name' => 'Sabre Global World Awards', 'image' => 'sabre-global-world-awards.png', 'line1' => 'Best Influencer', 'line2' => 'Marketing Campaign' ),
						array( 'name' => 'Sabre Latin America Awards', 'image' => 'sabre-global-world-awards.png', 'line1' => 'Diamond', 'line2' => 'Awards Category' ),
						array( 'name' => 'Sabre Latin America Awards', 'image' => 'sabre-global-world-awards.png', 'line1' => 'Best Influencer', 'line2' => 'Marketing Campaign' ),
						array( 'name' => 'Effie Awards', 'image' => 'effie-awards.png', 'line1' => 'Mejor Campaña de', 'line2' => 'Marketing de Influencers' ),
						array( 'name' => 'Purpose Awards', 'image' => 'purpose-awards.webp', 'line1' => 'Best Use of', 'line2' => 'Celebrity Campaign' ),
						array( 'name' => 'PR Week Global Awards', 'image' => 'pr-week-global-awards.webp', 'line1' => 'Best Influencers', 'line2' => 'Marketing Campaign' ),
						array( 'name' => 'IPRA Golden World Awards', 'image' => 'ipra-golden-world-awards.png', 'line1' => 'Best Influencers', 'line2' => 'Management Campaign' ),
						array( 'name' => 'Cannes Lions', 'image' => 'cannes-lions.webp', 'line1' => 'Best Social &', 'line2' => 'Influencer Campaign' ),
					);
					// Rendered twice back-to-back so the CSS animation can loop seamlessly at -50%.
					for ( $i = 0; $i < 2; $i++ ) :
						foreach ( $influencer_awards as $award ) :
							?>
							<div class="infl-awards__card" <?php echo 0 === $i ? '' : 'aria-hidden="true"'; ?>>
								<div class="infl-awards__logo-box">
									<img class="infl-awards__logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/awards/<?php echo esc_attr( $award['image'] ); ?>" alt="<?php echo esc_attr( $award['name'] ); ?>" loading="lazy">
								</div>
								<div class="infl-awards__name"><?php echo esc_html( strtoupper( $award['name'] ) ); ?></div>
								<div class="infl-awards__desc">
									<?php echo esc_html( strtoupper( $award['line1'] ) ); ?><br>
									<?php echo esc_html( strtoupper( $award['line2'] ) ); ?>
								</div>
							</div>
						<?php endforeach;
					endfor; ?>
				</div>
			</div>
		</div>
	</section>

	<!-- ==========================================
	     1c. ESTADÍSTICA + FOTO/CITA
	     ========================================== -->
	<section class="infl-stat-block">
		<div class="infl-stat-block__container">
			<div class="infl-stat-block__stats" data-reveal="up">
				<div class="infl-stat-block__label">
					Durante el <strong>2025</strong><br>
					trabajamos con
				</div>
				<div class="infl-stat-block__value">
					<span class="infl-stat-block__number" data-target="1800" data-prefix="+">+1,800</span>
					<span class="infl-stat-block__suffix">Influencers</span>
				</div>
			</div>

			<div class="infl-stat-block__media" data-reveal="scale">
				<img class="infl-stat-block__img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/marketing-de-influencers-contenido.webp" alt="Creación de contenido con influencer">
				<div class="infl-stat-block__bubble">
					El <strong>marketing de influencers</strong> se ha convertido en la estrategia de marketing digital más efectiva de 2025. Como agencia especializada en influencer marketing en Perú, transformamos la conexión entre marcas e influencers en resultados medibles, campañas exitosas y retorno de inversión comprobado.
				</div>
			</div>
		</div>
	</section>

	<div class="infl-bar">
		<span class="infl-bar__text">Creamos vínculos auténticos entre marcas y personas</span>
	</div>

	<!-- ==========================================
	     2. VENTAJAS DEL MARKETING DE INFLUENCERS
	     ========================================== -->
	<section class="infl-section">
		<div class="infl-section__container">
			<h2 class="infl-section__title" data-reveal="up">Ventajas del <span>Marketing de Influencers</span></h2>
			<p class="infl-section__intro" data-reveal="up">
				A través de las campañas de Influencer marketing es posible crear una conexión genuina y cercana con la audiencia, llegando a nuevos públicos y generando un mayor impacto en la marca y en la comunidad.
			</p>
			<div class="infl-cards" data-stagger>
				<div class="infl-card">
					<div class="infl-card__icon">1</div>
					<h3 class="infl-card__title">Mejor Conversión</h3>
					<p class="infl-card__desc">Campañas orientadas a resultados reales: más ventas, más leads, más visibilidad para tu marca.</p>
				</div>
				<div class="infl-card">
					<div class="infl-card__icon">2</div>
					<h3 class="infl-card__title">Targeting Preciso</h3>
					<p class="infl-card__desc">Seleccionamos influencers cuya audiencia coincide exactamente con el público objetivo de tu marca.</p>
				</div>
				<div class="infl-card">
					<div class="infl-card__icon">3</div>
					<h3 class="infl-card__title">Contenido Auténtico</h3>
					<p class="infl-card__desc">Historias reales y cercanas que generan confianza y credibilidad frente a la publicidad tradicional.</p>
				</div>
			</div>
		</div>
	</section>

	<div class="infl-bar">
		<span class="infl-bar__text">Conoce Nuestros Servicios</span>
	</div>

	<!-- ==========================================
	     3. ESTRATEGIA DE MARCA CON INFLUENCERS
	     ========================================== -->
	<section class="infl-section">
		<div class="infl-section__container">
			<h2 class="infl-section__title" data-reveal="up">Estrategia de Marca con Influencers</h2>
			<p class="infl-section__intro" data-reveal="up">
				Identificamos y creamos alianzas estratégicas con influencers para desarrollar contenido auténtico y relevante que conecte con los objetivos de marca de nuestros clientes y sus públicos objetivo.
			</p>
		</div>
	</section>

	<!-- ==========================================
	     4. SELECCIÓN ESTRATÉGICA DE INFLUENCERS
	     ========================================== -->
	<section class="infl-section" style="background: #14120f;">
		<div class="infl-section__container">
			<h2 class="infl-section__title" data-reveal="up">Selección Estratégica de Influencers</h2>
			<div class="infl-split">
				<div class="infl-media-box" data-reveal="left">Imagen: análisis del perfil</div>
				<div data-reveal="right">
					<h3 class="infl-card__title" style="margin-bottom: 14px;">Análisis del Perfil</h3>
					<p class="infl-card__desc" style="font-size: 14.5px;">
						Realizamos un análisis exhaustivo de cada perfil: audiencia, engagement real, coherencia de contenido y alineación con los valores de marca, para garantizar que cada alianza aporte valor genuino a nuestros clientes.
					</p>
				</div>
			</div>
		</div>
	</section>

	<!-- ==========================================
	     5. SERVICIO DE GESTIÓN INTEGRAL DE CAMPAÑAS
	     ========================================== -->
	<section class="infl-section">
		<div class="infl-section__container">
			<h2 class="infl-section__title" data-reveal="up">Servicio de Gestión Integral de Campañas</h2>
			<div class="infl-cards" data-stagger>
				<div class="infl-card">
					<h3 class="infl-card__title">Negociación de Condiciones</h3>
					<p class="infl-card__desc">Gestionamos acuerdos claros y justos entre marca e influencer, cuidando los intereses de ambas partes.</p>
				</div>
				<div class="infl-card">
					<h3 class="infl-card__title">Brief Creativo</h3>
					<p class="infl-card__desc">Elaboramos lineamientos creativos claros que guían al influencer sin perder su voz auténtica.</p>
				</div>
				<div class="infl-card">
					<h3 class="infl-card__title">Supervisión del Contenido</h3>
					<p class="infl-card__desc">Revisamos cada pieza de contenido antes de su publicación para asegurar coherencia con la marca.</p>
				</div>
				<div class="infl-card">
					<h3 class="infl-card__title">Estrategia de Publicaciones</h3>
					<p class="infl-card__desc">Definimos el calendario y formato óptimo para maximizar alcance e impacto de cada campaña.</p>
				</div>
				<div class="infl-card">
					<h3 class="infl-card__title">Relación a Largo Plazo</h3>
					<p class="infl-card__desc">Construimos relaciones sostenibles entre marcas e influencers más allá de una sola campaña.</p>
				</div>
				<div class="infl-card">
					<h3 class="infl-card__title">Seguimiento de Resultados</h3>
					<p class="infl-card__desc">Medimos el desempeño de cada campaña para optimizar futuras estrategias con datos reales.</p>
				</div>
			</div>
		</div>
	</section>

	<div class="infl-bar">
		<span class="infl-bar__text">¿Cómo seleccionamos y gestionamos a los influencers?</span>
	</div>

	<!-- ==========================================
	     6. GESTIÓN INTEGRAL DE CAMPAÑAS
	     ========================================== -->
	<section class="infl-section" style="background: #14120f;">
		<div class="infl-section__container">
			<h2 class="infl-section__title" data-reveal="up">Creación de Contenido Estratégico con Influencers</h2>
			<div class="infl-split">
				<div data-reveal="left">
					<p class="infl-card__desc" style="font-size: 14.5px; margin-bottom: 24px;">
						Ya no se trata de solo mostrar tu marca, sino de contar una historia con la que tu audiencia se identifique y recuerde. Diseñamos campañas personalizadas para cada objetivo de marca.
					</p>
					<h3 class="infl-card__title" style="margin-bottom: 12px;">¿Qué incluye nuestro servicio?</h3>
					<ul class="infl-card__desc" style="font-size: 14.5px; padding-left: 18px;">
						<li>Diseño de campañas personalizadas por objetivo</li>
						<li>Coordinación integral con cada influencer</li>
						<li>Producción y supervisión de contenido</li>
					</ul>
				</div>
				<div class="infl-media-box" data-reveal="right">Imagen: creación de contenido</div>
			</div>
		</div>
	</section>

	<!-- ==========================================
	     7. BENEFICIOS PARA TU MARCA
	     ========================================== -->
	<section class="infl-section">
		<div class="infl-section__container">
			<h2 class="infl-section__title" data-reveal="up">Beneficios para tu Marca</h2>
			<div class="infl-stat-row" data-stagger>
				<div>
					<div class="infl-stat-row__icon">1</div>
					<p class="infl-stat-row__label">Mayor tráfico web y visitas al perfil</p>
				</div>
				<div>
					<div class="infl-stat-row__icon">2</div>
					<p class="infl-stat-row__label">Incremento en ventas o captación de leads</p>
				</div>
				<div>
					<div class="infl-stat-row__icon">3</div>
					<p class="infl-stat-row__label">Reducción de costos por conversión</p>
				</div>
				<div>
					<div class="infl-stat-row__icon">4</div>
					<p class="infl-stat-row__label">Mayor reconocimiento y posicionamiento de marca</p>
				</div>
			</div>
		</div>
	</section>

	<!-- ==========================================
	     8. TIPOS DE MARKETING DE INFLUENCERS (TIKTOK)
	     ========================================== -->
	<section class="infl-section" style="background: #14120f;">
		<div class="infl-section__container">
			<h2 class="infl-section__title" data-reveal="up">Tipos de Marketing de Influencers</h2>
			<p class="infl-section__intro" data-reveal="up">
				Lideramos estrategias de marketing de influencers según objetivos de marca, adaptando el formato al canal de mayor impacto para cada campaña.
			</p>
			<div class="infl-split">
				<div class="infl-media-box" data-reveal="left">Imagen: campaña en TikTok</div>
				<div data-reveal="right">
					<h3 class="infl-card__title" style="margin-bottom: 14px;">Marketing de Influencers en TikTok</h3>
					<p class="infl-card__desc" style="font-size: 14.5px;">
						Diseñamos campañas nativas de la plataforma que aprovechan tendencias, retos y formatos cortos para lograr un alcance orgánico y viral con creadores especializados.
					</p>
				</div>
			</div>
		</div>
	</section>

	<!-- ==========================================
	     9. ANÁLISIS Y REPORTES DE CAMPAÑA
	     ========================================== -->
	<section class="infl-section">
		<div class="infl-section__container">
			<h2 class="infl-section__title" data-reveal="up">Análisis y Reportes de Campaña: <span>Datos que Generan Decisiones</span></h2>
			<p class="infl-section__intro" data-reveal="up">
				Entregamos reportes detallados que muestran el impacto real de cada campaña, verificando cada resultado con datos concretos.
			</p>
			<h3 class="infl-card__title" style="text-align: center; margin-bottom: 24px;">¿Qué medimos?</h3>
			<div class="infl-stat-row" data-stagger>
				<div class="infl-card">
					<p class="infl-stat-row__label">Alcance real y visualizaciones</p>
				</div>
				<div class="infl-card">
					<p class="infl-stat-row__label">Conversiones directas: tienda, registro, descargas</p>
				</div>
				<div class="infl-card">
					<p class="infl-stat-row__label">Relación a largo plazo</p>
				</div>
				<div class="infl-card">
					<p class="infl-stat-row__label">ROI de la campaña</p>
				</div>
			</div>
		</div>
	</section>

	<!-- ==========================================
	     10. ¿QUÉ ENTREGAMOS?
	     ========================================== -->
	<section class="infl-section" style="background: #14120f;">
		<div class="infl-section__container">
			<h2 class="infl-section__title" data-reveal="up">¿Qué Entregamos?</h2>
			<div class="infl-cards" data-stagger>
				<div class="infl-card">
					<h3 class="infl-card__title">Reporte de Campaña</h3>
					<p class="infl-card__desc">Informe completo con métricas, aprendizajes y recomendaciones para próximas activaciones.</p>
				</div>
				<div class="infl-card">
					<h3 class="infl-card__title">Contenido Producido</h3>
					<p class="infl-card__desc">Todas las piezas creativas desarrolladas durante la campaña, listas para reutilizar.</p>
				</div>
				<div class="infl-card">
					<h3 class="infl-card__title">Recomendaciones Estratégicas</h3>
					<p class="infl-card__desc">Próximos pasos y oportunidades identificadas para escalar resultados futuros.</p>
				</div>
			</div>
		</div>
	</section>

	<!-- ==========================================
	     11. PREGUNTAS FRECUENTES
	     ========================================== -->
	<section class="infl-section">
		<div class="infl-section__container">
			<h2 class="infl-section__title" data-reveal="up">Marketing de Influencers: <span>Preguntas Frecuentes</span></h2>
			<div class="infl-faq" data-reveal="up">
				<details class="infl-faq__item">
					<summary>¿Cómo eligen a los influencers para mi marca?</summary>
					<p>Analizamos audiencia, engagement real, valores y coherencia de contenido para asegurar una alianza genuina con los objetivos de tu marca.</p>
				</details>
				<details class="infl-faq__item">
					<summary>¿Cuánto tiempo toma ver resultados?</summary>
					<p>Depende del objetivo de campaña; entregamos reportes de seguimiento durante todo el proceso para verificar avances en tiempo real.</p>
				</details>
				<details class="infl-faq__item">
					<summary>¿Trabajan con influencers de todos los tamaños?</summary>
					<p>Sí, desde microinfluencers de nicho hasta macroinfluencers, según el alcance y precisión que requiera tu campaña.</p>
				</details>
				<details class="infl-faq__item">
					<summary>¿Qué reportes entregan al finalizar la campaña?</summary>
					<p>Un informe con métricas de alcance, engagement, conversiones y recomendaciones estratégicas para futuras campañas.</p>
				</details>
			</div>
		</div>
	</section>

	<!-- ==========================================
	     12. CASOS DE ÉXITO
	     ========================================== -->
	<section class="infl-section" style="background: #14120f;">
		<div class="infl-section__container">
			<h2 class="infl-section__title" data-reveal="up">Casos de Éxito en Marketing de Influencers</h2>
			<div class="infl-cards" data-stagger>
				<div class="infl-media-box">Imagen: caso de éxito 1</div>
				<div class="infl-media-box">Imagen: caso de éxito 2</div>
				<div class="infl-media-box">Imagen: caso de éxito 3</div>
			</div>
		</div>
	</section>

	<!-- ==========================================
	     13. MARCAS CON LAS QUE HEMOS TRABAJADO
	     ========================================== -->
	<section class="infl-section">
		<div class="infl-section__container">
			<h2 class="infl-section__title" data-reveal="up">Gracias por Confiar en Nosotros</h2>
			<div class="infl-logos" data-stagger>
				<span class="infl-logos__item">Absolut</span>
				<span class="infl-logos__item">Banco de Alimentos Perú</span>
				<span class="infl-logos__item">BCP</span>
				<span class="infl-logos__item">Merck</span>
				<span class="infl-logos__item">Swissôtel</span>
				<span class="infl-logos__item">Tiffany &amp; Co.</span>
			</div>
		</div>
	</section>

	<!-- ==========================================
	     14. ¿POR QUÉ ELEGIR ORANGE LATAM?
	     ========================================== -->
	<section class="infl-section" style="background: #14120f;">
		<div class="infl-section__container">
			<h2 class="infl-section__title" data-reveal="up">¿Por Qué Elegir Orange Latam Tu Agencia de Influencer Marketing?</h2>
			<p class="infl-section__intro" data-reveal="up">Lo que nos hace diferentes</p>
			<div class="infl-diff" data-stagger>
				<div class="infl-diff__item">
					<div class="infl-diff__title">Enfoque 100% en Resultados</div>
					<p class="infl-diff__desc">Cada campaña se diseña y mide en función de objetivos de negocio reales.</p>
				</div>
				<div class="infl-diff__item">
					<div class="infl-diff__title">Selección Estratégica</div>
					<p class="infl-diff__desc">Elegimos influencers por afinidad de audiencia, no solo por número de seguidores.</p>
				</div>
				<div class="infl-diff__item">
					<div class="infl-diff__title">Creatividad y Datos</div>
					<p class="infl-diff__desc">Combinamos narrativa auténtica con análisis constante de desempeño.</p>
				</div>
				<div class="infl-diff__item">
					<div class="infl-diff__title">Especialistas en Nicho</div>
					<p class="infl-diff__desc">Conocemos a fondo verticales como moda, belleza y estilo de vida.</p>
				</div>
			</div>
		</div>
	</section>

	<!-- ==========================================
	     15. CTA FINAL (enlaza a la sección de contacto de la home)
	     ========================================== -->
	<section class="infl-cta">
		<h2 class="infl-cta__title">Contacta con Nuestra Agencia de Influencer Marketing</h2>
		<a href="<?php echo esc_url( home_url( '/#contacto' ) ); ?>" class="infl-cta__link">Escríbenos</a>
	</section>

</main>

<?php
get_footer();