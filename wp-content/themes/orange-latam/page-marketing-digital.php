<?php
/**
 * Template Name: Marketing Digital
 * Page template for the "Marketing Digital" service page.
 * Slug: marketing-digital
 *
 * @package Orange_Latam
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>

<main class="marketing-digital">

	<!-- ==========================================
	     1. HERO
	     ========================================== -->
	<section class="infl-hero" id="inicio">
		<video class="infl-hero__video-bg" autoplay muted loop playsinline preload="auto">
			<source src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/videos/marketing-digital-hero.mp4" type="video/mp4">
		</video>
		<div class="infl-hero__vignette"></div>
	</section>

	<!-- ==========================================
	     2. REDES SOCIALES
	     ========================================== -->
	<section class="dig-social" id="redes-sociales">
		<div class="dig-social__container">
			<div class="dig-social__content" data-reveal="left">
				<span class="dig-social__badge">CREAMOS VÍNCULOS AUTÉNTICOS</span>
				<h1 class="dig-social__title">ENTRE MARCAS Y PERSONAS</h1>
				<p class="dig-social__desc">
					En la era digital, la conexión real lo es todo. Diseñamos estrategias personalizadas en redes sociales que transforman a tu audiencia pasiva en una comunidad activa e identificada con el propósito de tu marca. A través de contenido relevante, interacción humana genuina y análisis constante, convertimos cada clic en una relación de confianza duradera.
				</p>
			</div>
			<div class="dig-social__media" data-reveal="right">
				<img class="dig-social__img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/marketing-digital/O1-1-768x828.webp" alt="Creamos Vínculos Auténticos">
			</div>
		</div>
	</section>

	<!-- ==========================================
	     2.1 SERVICIOS: GESTIÓN DE REDES SOCIALES
	     ========================================== -->
	<section class="dig-services" id="servicios-redes">
		<div class="dig-services__container">
			
			<div class="dig-services__top-bar" data-reveal="fade">
				<a href="#contacto" class="dig-services__propuesta-btn">SOLICITA TU PROPUESTA</a>
				<h2 class="dig-services__main-title">CONOCE NUESTROS SERVICIOS</h2>
			</div>

			<div class="dig-services__header-card" data-reveal="fade">
				<h3 class="dig-services__subtitle">GESTIÓN DE REDES SOCIALES</h3>
			</div>

			<p class="dig-services__intro-desc" data-reveal="fade">
				Creamos y gestionamos tu presencia en redes sociales de manera estratégica, con contenido relevante y visualmente atractivo que conecta con distintas audiencias y refleja la esencia de tu marca.
			</p>

			<div class="dig-services__objective-card" data-reveal="fade">
				<div class="dig-services__objective-icon-wrapper">
					<img class="dig-services__objective-icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/marketing-digital/promote.png" alt="Objetivo">
				</div>
				<p class="dig-services__objective-text">
					NUESTRO OBJETIVO ES AUMENTAR LA VISIBILIDAD, MEJORAR EL ENGAGEMENT, FIDELIZAR A TU COMUNIDAD Y GENERAR UNA PERCEPCIÓN DE MARCA PROFESIONAL Y COHERENTE PARA LO CUAL:
				</p>
			</div>

			<div class="dig-services__grid">
				
				<div class="dig-services__grid-item dig-services__grid-item--light" data-reveal="fade">
					<div class="dig-services__grid-icon-wrapper">
						<img class="dig-services__grid-icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/marketing-digital/lupa.svg" alt="Lupa">
					</div>
					<p class="dig-services__grid-text">ANALIZAMOS LA MARCA Y SU COMPETENCIA</p>
				</div>

				<div class="dig-services__grid-item dig-services__grid-item--blue" data-reveal="fade">
					<div class="dig-services__grid-icon-wrapper">
						<img class="dig-services__grid-icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/marketing-digital/like.svg" alt="Like">
					</div>
					<p class="dig-services__grid-text">DESARROLLAMOS ESTRATEGIAS</p>
				</div>

				<div class="dig-services__grid-item dig-services__grid-item--light" data-reveal="fade">
					<div class="dig-services__grid-icon-wrapper">
						<img class="dig-services__grid-icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/marketing-digital/cursor.svg" alt="Cursor">
					</div>
					<p class="dig-services__grid-text">ESTRUCTURAMOS CALENDARIO DE CONTENIDOS</p>
				</div>

				<div class="dig-services__grid-item dig-services__grid-item--blue" data-reveal="fade">
					<div class="dig-services__grid-icon-wrapper">
						<img class="dig-services__grid-icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/marketing-digital/porcentaje.svg" alt="Porcentaje">
					</div>
					<p class="dig-services__grid-text">CREAMOS PIEZAS VISUALES (REELS, CARRUSELES, STORIES)</p>
				</div>

				<div class="dig-services__grid-item dig-services__grid-item--light" data-reveal="fade">
					<div class="dig-services__grid-icon-wrapper">
						<img class="dig-services__grid-icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/marketing-digital/apilado.svg" alt="Apilado">
					</div>
					<p class="dig-services__grid-text">REDACTAMOS TEXTOS (COPYWRITING)</p>
				</div>

				<div class="dig-services__grid-item dig-services__grid-item--blue" data-reveal="fade">
					<div class="dig-services__grid-icon-wrapper">
						<img class="dig-services__grid-icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/marketing-digital/megafonito.svg" alt="Megafonito">
					</div>
					<p class="dig-services__grid-text">PROGRAMAMOS, PUBLICAMOS Y MONITOREAMOS</p>
				</div>

			</div>

			<div class="dig-services__footer" data-reveal="fade">
				<div class="dig-services__footer-icon-wrapper">
					<img class="dig-services__footer-icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/marketing-digital/megafonito.svg" alt="Megáfono">
				</div>
				<p class="dig-services__footer-text">
					Logramos un crecimiento orgánico sostenido, mayor interacción, posicionamiento claro de marca
				</p>
			</div>

		</div>
	</section>

	<!-- ==========================================
	     3. PUBLICIDAD DIGITAL
	     ========================================== -->
	<section class="dig-ads" id="publicidad-digital">
		<div class="dig-ads__container">
			
			<div class="dig-ads__header-card" data-reveal="fade">
				<h2 class="dig-ads__title">PUBLICIDAD DIGITAL</h2>
			</div>

			<p class="dig-ads__intro-desc" data-reveal="fade">
				Diseñamos, lanzamos y optimizamos campañas publicitarias enfocadas en conversiones reales para lograr más ventas, más leads, más visibilidad
			</p>

			<div class="dig-ads__objective-card" data-reveal="fade">
				<div class="dig-ads__objective-icon-wrapper">
					<img class="dig-ads__objective-icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/marketing-digital/promote.png" alt="Objetivo">
				</div>
				<p class="dig-ads__objective-text">
					NUESTRO OBJETIVO ES ALCANZAR AL PÚBLICO IDEAL CON MENSAJES CLAROS Y CREATIVOS, OPTIMIZANDO EL PRESUPUESTO PARA OBTENER EL MAYOR RETORNO POSSIBLE. PARA LOGRARLO:
				</p>
			</div>

			<!-- Slider Container -->
			<div class="dig-ads__slider-outer" data-reveal="fade">
				
				<button type="button" class="dig-ads__arrow dig-ads__arrow--prev" aria-label="Anterior">
					<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
				</button>

				<div class="dig-ads__slider-container">
					<div class="dig-ads__track">
						
						<!-- Slide 1 -->
						<div class="dig-ads__slide active" data-index="0">
							<div class="dig-ads__slide-media">
								<img class="dig-ads__slide-img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/marketing-digital/Definimos-objetivos-publicitarios-Marketing-Digital.webp" alt="Definimos objetivos publicitarios">
							</div>
							<div class="dig-ads__slide-card">
								<h3 class="dig-ads__slide-text">DEFINIMOS OBJETIVOS PUBLICITARIOS (VENTAS, LEADS, TRÁFICO)</h3>
							</div>
						</div>

						<!-- Slide 2 -->
						<div class="dig-ads__slide" data-index="1">
							<div class="dig-ads__slide-media">
								<img class="dig-ads__slide-img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/marketing-digital/Disenamos-anuncios-de-Marketing-Digital.webp" alt="Diseñamos anuncios">
							</div>
							<div class="dig-ads__slide-card">
								<h3 class="dig-ads__slide-text">DISEÑAMOS ANUNCIOS (COPY + VISUALES)</h3>
							</div>
						</div>

						<!-- Slide 3 -->
						<div class="dig-ads__slide" data-index="2">
							<div class="dig-ads__slide-media">
								<img class="dig-ads__slide-img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/marketing-digital/Instalamos-pixeles-para-Marketing-Digital.webp" alt="Instalamos píxeles">
							</div>
							<div class="dig-ads__slide-card">
								<h3 class="dig-ads__slide-text">INSTALAMOS PÍXELES (META, TIKTOK Y GOOGLE)</h3>
							</div>
						</div>

						<!-- Slide 4 -->
						<div class="dig-ads__slide" data-index="3">
							<div class="dig-ads__slide-media">
								<img class="dig-ads__slide-img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/marketing-digital/Segmentamos-y-configuramos-las-campanas-de-Marketing-Digital.webp" alt="Segmentamos y configuramos campañas">
							</div>
							<div class="dig-ads__slide-card">
								<h3 class="dig-ads__slide-text">SEGMENTAMOS Y CONFIGURAMOS LAS CAMPAÑAS</h3>
							</div>
						</div>

						<!-- Slide 5 -->
						<div class="dig-ads__slide" data-index="4">
							<div class="dig-ads__slide-media">
								<img class="dig-ads__slide-img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/marketing-digital/Monitoreamos-y-optimizamos-continuamente-dentro-de-Marketing-Digital.webp" alt="Monitoreamos y optimizamos">
							</div>
							<div class="dig-ads__slide-card">
								<h3 class="dig-ads__slide-text">MONITOREAMOS Y OPTIMIZAMOS CONTINUAMENTE</h3>
							</div>
						</div>

					</div>
				</div>

				<button type="button" class="dig-ads__arrow dig-ads__arrow--next" aria-label="Siguiente">
					<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
				</button>

			</div>

			<div class="dig-ads__footer" data-reveal="fade">
				<div class="dig-ads__footer-icon-wrapper">
					<img class="dig-ads__footer-icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/marketing-digital/megafonito.svg" alt="Megáfono">
				</div>
				<p class="dig-ads__footer-text">
					Logramos mayor tráfico web o visitas al perfil, incremento en ventas o captación de leads y reducción de costos por conversión
				</p>
			</div>

		</div>
	</section>

	<!-- ==========================================
	     4. CONTENIDO ESTRATÉGICO
	     ========================================== -->
	<section class="dig-content" id="contenido-estrategico">
		<div class="dig-content__container">
			
			<div class="dig-content__header-card" data-reveal="fade">
				<h2 class="dig-content__title">CONTENIDO ESTRATÉGICO</h2>
			</div>

			<p class="dig-content__intro-desc" data-reveal="fade">
				Creamos contenido para atraer, educar, emocionar y convertir. No se trata solo de "publicar bonito", sino de hablarle directamente a tu cliente ideal
			</p>

			<div class="dig-content__objective-card" data-reveal="fade">
				<div class="dig-content__objective-icon-wrapper">
					<img class="dig-content__objective-icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/marketing-digital/promote.png" alt="Objetivo">
				</div>
				<p class="dig-content__objective-text">
					NUESTRO OBJETIVO ES GENERAR AUTORIDAD, CONSTRUIR CONFIANZA, RESOLVER DUDAS FRECUENTES Y PROVOCAR INTERACCIÓN REAL PARA LO CUAL:
				</p>
			</div>

			<div class="dig-content__grid">
				
				<div class="dig-content__grid-item dig-content__grid-item--blue" data-reveal="fade">
					<div class="dig-content__grid-icon-wrapper">
						<img class="dig-content__grid-icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/bullseye-arrow.png" alt="Planes de Contenido">
					</div>
					<p class="dig-content__grid-text">Trabajamos planes de contenido alineados a objetivos de marca</p>
				</div>

				<div class="dig-content__grid-item dig-content__grid-item--light" data-reveal="fade">
					<div class="dig-content__grid-icon-wrapper">
						<img class="dig-content__grid-icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/videocamera-symbol.png" alt="Copy y Storytelling">
					</div>
					<p class="dig-content__grid-text">Redactamos textos persuasivos con técnicas de storytelling</p>
				</div>

				<div class="dig-content__grid-item dig-content__grid-item--blue" data-reveal="fade">
					<div class="dig-content__grid-icon-wrapper">
						<img class="dig-content__grid-icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/megaphone.png" alt="Diseño de Contenido">
					</div>
					<p class="dig-content__grid-text">Diseñamos contenidos y recursos para feed y stories</p>
				</div>

				<div class="dig-content__grid-item dig-content__grid-item--light" data-reveal="fade">
					<div class="dig-content__grid-icon-wrapper">
						<img class="dig-content__grid-icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/diagram.png" alt="Edición de Reels y TikToks">
					</div>
					<p class="dig-content__grid-text">Editamos reels / TikToks</p>
				</div>

			</div>

			<div class="dig-content__footer" data-reveal="fade">
				<div class="dig-content__footer-icon-wrapper">
					<img class="dig-content__footer-icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/marketing-digital/megafonito.svg" alt="Megáfono">
				</div>
				<p class="dig-content__footer-text">
					Logramos mayor tráfico web o visitas al perfil, incremento en ventas o captación de leads y reducción de costos por conversión
				</p>
			</div>

		</div>
	</section>

	<!-- ==========================================
	     5. CONSULTORÍA
	     ========================================== -->
	<section class="dig-consult" id="consultoria">
		<div class="dig-consult__container">
			
			<div class="dig-consult__header-card" data-reveal="fade">
				<h2 class="dig-consult__title">CONSULTORÍA ESTRATÉGICA DIGITAL</h2>
			</div>

			<p class="dig-consult__intro-desc" data-reveal="fade">
				Acompañamos a las marcas <strong>de manera personalizada</strong> para definir estrategias digitales claras, sostenibles y alineadas a objetivos reales
			</p>

			<div class="dig-consult__objective-card" data-reveal="fade">
				<div class="dig-consult__objective-icon-wrapper">
					<img class="dig-consult__objective-icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/marketing-digital/promote.png" alt="Objetivo">
				</div>
				<p class="dig-consult__objective-text">
					NUESTRO OBJETIVO ES GENERAR AUTORIDAD, CONSTRUIR CONFIANZA, RESOLVER DUDAS FRECUENTES Y PROVOCAR INTERACCIÓN REAL PARA LO CUAL:
				</p>
			</div>

			<div class="dig-consult__grid">
				
				<!-- Item 1 -->
				<div class="dig-consult__grid-item" data-reveal="fade">
					<span class="dig-consult__grid-number">01</span>
					<div class="dig-consult__grid-icon-wrapper">
						<svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#14120f" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="dig-consult__grid-icon">
							<circle cx="12" cy="12" r="10"></circle>
							<circle cx="12" cy="12" r="6"></circle>
							<circle cx="12" cy="12" r="2"></circle>
						</svg>
					</div>
					<h3 class="dig-consult__grid-title">Definimos objetivos y canales</h3>
				</div>

				<!-- Item 2 -->
				<div class="dig-consult__grid-item" data-reveal="fade">
					<span class="dig-consult__grid-number">02</span>
					<div class="dig-consult__grid-icon-wrapper">
						<svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#14120f" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="dig-consult__grid-icon">
							<circle cx="12" cy="12" r="10"></circle>
							<path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
							<path d="M2 12h20"></path>
						</svg>
					</div>
					<h3 class="dig-consult__grid-title">Realizamos una auditoría digital 360º (redes, web, embudos)</h3>
				</div>

				<!-- Item 3 -->
				<div class="dig-consult__grid-item" data-reveal="fade">
					<span class="dig-consult__grid-number">03</span>
					<div class="dig-consult__grid-icon-wrapper">
						<svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#14120f" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="dig-consult__grid-icon">
							<path d="M9 18l6-6-6-6"></path>
							<path d="M3 12h12"></path>
							<circle cx="19" cy="12" r="1"></circle>
						</svg>
					</div>
					<h3 class="dig-consult__grid-title">Elaboramos un roadmap de ejecución</h3>
				</div>

			</div>

			<div class="dig-consult__footer" data-reveal="fade">
				<div class="dig-consult__footer-icon-wrapper">
					<img class="dig-consult__footer-icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/marketing-digital/megafonito.svg" alt="Megáfono">
				</div>
				<p class="dig-consult__footer-text">
					Logramos una alineación de marca + objetivos, claridad en el uso de recursos y tiempo, además de una adecuada organización de procesos y canales
				</p>
			</div>

			<!-- Marcas con las que hemos trabajado -->
			<div class="dig-brands" data-reveal="fade">
				<h3 class="dig-brands__title">
					MARCAS CON LAS QUE <br>
					<span class="dig-brands__title--blue">HEMOS TRABAJADO</span>
				</h3>
				
				<div class="dig-brands__carousel">
					<!-- Row 1: moves left -->
					<div class="dig-brands__row">
						<div class="dig-brands__track">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/carousel/GG-3.png" alt="G&G" class="dig-brands__logo">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/carousel/Tiffany.png" alt="Tiffany" class="dig-brands__logo">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/carousel/abosult.png" alt="Absolut" class="dig-brands__logo">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/carousel/banco.png" alt="Banco de Alimentos" class="dig-brands__logo">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/carousel/chivas.png" alt="Chivas" class="dig-brands__logo">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/carousel/swissotel.png" alt="Swissôtel" class="dig-brands__logo">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/carousel/worldreader.png" alt="Worldreader" class="dig-brands__logo">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/carousel/bcp.png" alt="BCP" class="dig-brands__logo">
							
							<!-- Duplicate for loop -->
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/carousel/GG-3.png" alt="G&G" class="dig-brands__logo">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/carousel/Tiffany.png" alt="Tiffany" class="dig-brands__logo">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/carousel/abosult.png" alt="Absolut" class="dig-brands__logo">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/carousel/banco.png" alt="Banco de Alimentos" class="dig-brands__logo">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/carousel/chivas.png" alt="Chivas" class="dig-brands__logo">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/carousel/swissotel.png" alt="Swissôtel" class="dig-brands__logo">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/carousel/worldreader.png" alt="Worldreader" class="dig-brands__logo">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/carousel/bcp.png" alt="BCP" class="dig-brands__logo">
						</div>
					</div>
					
					<!-- Row 2: moves right -->
					<div class="dig-brands__row">
						<div class="dig-brands__track dig-brands__track--reverse">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/carousel/banco.png" alt="Banco de Alimentos" class="dig-brands__logo">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/carousel/chivas.png" alt="Chivas" class="dig-brands__logo">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/carousel/swissotel.png" alt="Swissôtel" class="dig-brands__logo">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/carousel/worldreader.png" alt="Worldreader" class="dig-brands__logo">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/carousel/GG-3.png" alt="G&G" class="dig-brands__logo">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/carousel/Tiffany.png" alt="Tiffany" class="dig-brands__logo">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/carousel/abosult.png" alt="Absolut" class="dig-brands__logo">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/carousel/bcp.png" alt="BCP" class="dig-brands__logo">
							
							<!-- Duplicate for loop -->
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/carousel/banco.png" alt="Banco de Alimentos" class="dig-brands__logo">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/carousel/chivas.png" alt="Chivas" class="dig-brands__logo">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/carousel/swissotel.png" alt="Swissôtel" class="dig-brands__logo">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/carousel/worldreader.png" alt="Worldreader" class="dig-brands__logo">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/carousel/GG-3.png" alt="G&G" class="dig-brands__logo">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/carousel/Tiffany.png" alt="Tiffany" class="dig-brands__logo">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/carousel/abosult.png" alt="Absolut" class="dig-brands__logo">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/carousel/bcp.png" alt="BCP" class="dig-brands__logo">
						</div>
					</div>
				</div>
			</div>

		</div>
	</section>

	<!-- ==========================================
	     6. CONTACTO (PRE-FOOTER)
	     ========================================== -->
	<section class="infl-prefooter" id="contacto">
		<div class="infl-prefooter__container">
			<div class="infl-prefooter__col infl-prefooter__col--slogan" data-reveal="fade">
				<h2 class="infl-prefooter__slogan">
					<span class="infl-prefooter__slogan-white">No hacemos ruido</span><br>
					<span class="infl-prefooter__slogan-blue">Hacemos conversiones</span>
				</h2>
			</div>
			
			<div class="infl-prefooter__col infl-prefooter__col--address" data-reveal="fade">
				<p>Centro Empresarial Abril</p>
				<p>Calle Enrique Palacios 360 Of. 306 Miraflores</p>
				<p class="infl-prefooter__email">
					<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
					<a href="mailto:negocios@orange-la.com">negocios@orange-la.com</a>
				</p>
			</div>

			<div class="infl-prefooter__col infl-prefooter__col--contact" data-reveal="fade">
				<p class="infl-prefooter__contact-label">Contacto:</p>
				<p class="infl-prefooter__phone">
					<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#38b6ff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
					<a href="tel:993595252">993-595-252</a>
				</p>
				<div class="infl-prefooter__social">
					<a href="#" class="infl-prefooter__social-link" aria-label="Instagram">
						<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
					</a>
					<a href="#" class="infl-prefooter__social-link" aria-label="Facebook">
						<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>
					</a>
					<a href="#" class="infl-prefooter__social-link" aria-label="TikTok">
						<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 12a4 4 0 1 0 4 4V4a5 5 0 0 0 5 5"></path></svg>
					</a>
					<a href="#" class="infl-prefooter__social-link" aria-label="LinkedIn">
						<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg>
					</a>
				</div>
			</div>
		</div>
	</section>

</main>

<?php
get_footer();
