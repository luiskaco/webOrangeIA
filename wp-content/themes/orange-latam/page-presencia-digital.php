<?php
/**
 * Template Name: Presencia Digital (Web, SEO y E-Commerce)
 *
 * Página de servicio: Web UX, SEO, SEM y E-Commerce
 * con diseño minimalista y vitrina de proyectos reales desarrollados.
 *
 * @package Orange_Latam
 */

get_header();
$theme_uri = get_template_directory_uri();
?>

<!-- SEO Structured Data (JSON-LD) for Digital Presence & Portfolio -->
<script type="application/ld+json">
{
	"@context": "https://schema.org",
	"@type": "ProfessionalService",
	"name": "Presencia Digital: Web, SEO y E-Commerce - Orange Latam",
	"description": "Desarrollamos ecosistemas digitales integrando diseño web UX, SEO, SEM y e-commerce para transformar tu presencia digital en un activo de crecimiento.",
	"provider": {
		"@type": "Organization",
		"name": "Orange Latam",
		"url": "<?php echo esc_url( home_url( '/' ) ); ?>"
	},
	"areaServed": ["PE", "LATAM"],
	"serviceType": [
		"Diseño Web UX/UI",
		"Agencia SEO Perú",
		"E-Commerce Lima",
		"Desarrollo de Apps Web PWA",
		"Campañas SEM Búsqueda"
	],
	"url": "<?php echo esc_url( home_url( '/presencia-digital/' ) ); ?>"
}
</script>

<main class="pd-page">

	<!-- ==========================================
	     1. HERO SECTION (#inicio)
	     ========================================== -->
	<section class="pd-hero" id="inicio">
		<div class="pd-hero__orb pd-hero__orb--cyan" aria-hidden="true"></div>
		<div class="pd-hero__orb pd-hero__orb--purple" aria-hidden="true"></div>
		<div class="pd-hero__grid-overlay" aria-hidden="true"></div>

		<div class="pd-hero__container">
			<div class="pd-hero__content">
				<h1 class="pd-hero__title" data-pd-hero-title>
					Posicionamiento SEO y presencia digital como <span>activo de valor</span>
				</h1>
				<p class="pd-hero__desc" data-pd-hero-item>
					Como <strong>agencia experta en diseño web</strong> y SEO en Perú y en otros países, sabemos que tu presencia digital es mucho más que una página web: es el activo de negocio donde tus clientes descubren tu marca, evalúan tu propuesta e interactúan para tomar la decisión de comprar o contactarte.
				</p>
			</div>

			<div class="pd-hero__visual" data-pd-hero-visual>
				<div class="pd-hero__window">
					<div class="pd-hero__window-bar">
						<div class="pd-hero__window-dots">
							<span></span><span></span><span></span>
						</div>
						<div class="pd-hero__window-url">https://orangelatam.com/presencia-digital/</div>
					</div>
					<div class="pd-hero__window-body">
						<div class="pd-hero__metrics-grid">
							<div class="pd-hero__metric-box" data-pd-metric>
								<div class="pd-hero__metric-value">UX / UI</div>
								<div class="pd-hero__metric-label">Diseño Criterio UX</div>
							</div>
							<div class="pd-hero__metric-box" data-pd-metric>
								<div class="pd-hero__metric-value">SEO 100%</div>
								<div class="pd-hero__metric-label">Tráfico & Autoridad</div>
							</div>
							<div class="pd-hero__metric-box" data-pd-metric>
								<div class="pd-hero__metric-value">E-Com</div>
								<div class="pd-hero__metric-label">Ventas sin Fricción</div>
							</div>
							<div class="pd-hero__metric-box" data-pd-metric>
								<div class="pd-hero__metric-value">+ROI</div>
								<div class="pd-hero__metric-label">Medición de Datos</div>
							</div>
						</div>

						<!-- Sparkline de tráfico orgánico (dibujado con GSAP al cargar) -->
						<div class="pd-hero__spark">
							<div class="pd-hero__spark-head">
								<span class="pd-hero__spark-label">Tráfico orgánico</span>
								<span class="pd-hero__spark-value">+215%</span>
							</div>
							<svg class="pd-hero__spark-svg" viewBox="0 0 320 72" preserveAspectRatio="none" aria-hidden="true">
								<defs>
									<linearGradient id="pdSparkFill" x1="0" y1="0" x2="0" y2="1">
										<stop offset="0" stop-color="#00F0FF" stop-opacity="0.32"/>
										<stop offset="1" stop-color="#00F0FF" stop-opacity="0"/>
									</linearGradient>
								</defs>
								<path class="pd-hero__spark-area" d="M0 60 L36 52 L72 56 L108 42 L144 46 L180 30 L216 34 L252 18 L288 22 L320 8 L320 72 L0 72 Z" fill="url(#pdSparkFill)"/>
								<path class="pd-hero__spark-line" d="M0 60 L36 52 L72 56 L108 42 L144 46 L180 30 L216 34 L252 18 L288 22 L320 8" fill="none" stroke="#00F0FF" stroke-width="2.5" stroke-linecap="round"/>
							</svg>
						</div>
					</div>
				</div>

				<div class="pd-hero__badge-floating" data-pd-hero-badge>
					<div class="pd-hero__badge-icon">✓</div>
					<div class="pd-hero__badge-text">
						<strong>Top #1 Google Perú</strong>
						<span>Estrategia SEO Auditada</span>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ==========================================
	     2. PORTFOLIO SHOWCASE: WEBS & APPS REALIZADAS (#portafolio)
	     ========================================== -->
	<section class="pd-portfolio" id="portafolio">
		<div class="pd-section-header" data-pd-reveal>
			<h2 class="pd-section-title pd-section-title--light">Lo que desarrollamos para tu marca</h2>
		</div>

		<div class="pd-portfolio__grid" data-pd-cards>
			<!-- Proyecto 1: Web B2B -->
			<div class="pd-portfolio-card" data-category="b2b" data-project-trigger data-project-title="Plataforma Web B2B" data-project-badge="Web B2B" data-project-stat="Performance 99/100" data-project-desc="Ecosistema web corporativo enfocado en arquitectura de información, generación de leads B2B y posicionamiento institucional de alta autoridad." data-project-techs="WordPress, React, SEO On-Page, GA4 Analytics" data-project-img="<?php echo esc_url( $theme_uri . '/assets/images/presencia-digital/project-b2b.webp' ); ?>" role="button" tabindex="0" aria-label="Ver detalles de Plataforma Web B2B">
				<img class="pd-portfolio-card__flat-img" src="<?php echo esc_url( $theme_uri . '/assets/images/presencia-digital/project-b2b.webp' ); ?>" alt="Plataforma Web B2B — Ecosistema web optimizado para generación de leads B2B" loading="lazy" width="800" height="640">
			</div>

			<!-- Proyecto 2: E-Commerce -->
			<div class="pd-portfolio-card pd-portfolio-card--featured" data-category="ecommerce" data-project-trigger data-project-title="Tienda E-Commerce Multi-Categoría" data-project-badge="E-Commerce Top" data-project-stat="Ventas +145%" data-project-desc="Plataforma de comercio electrónico de alta conversión con pasarelas de pago integradas, checkout optimizado en un solo paso y analítica avanzada." data-project-techs="WooCommerce, Shopify, Stripe, GA4 Analytics" data-project-img="<?php echo esc_url( $theme_uri . '/assets/images/presencia-digital/project-ecommerce.webp' ); ?>" role="button" tabindex="0" aria-label="Ver detalles de Tienda E-Commerce">
				<img class="pd-portfolio-card__flat-img" src="<?php echo esc_url( $theme_uri . '/assets/images/presencia-digital/project-ecommerce.webp' ); ?>" alt="Tienda E-Commerce — Plataforma de comercio electrónico con checkout fluido" loading="lazy" width="800" height="640">
			</div>

			<!-- Proyecto 3: App Web -->
			<div class="pd-portfolio-card" data-category="pwa" data-project-trigger data-project-title="App Web & Dashboard Interactivo" data-project-badge="App Web PWA" data-project-stat="Tiempo Carga 0.8s" data-project-desc="Aplicación web progresiva con experiencia móvil tipo app nativa, autenticación segura y panel de control de usuario en tiempo real." data-project-techs="React, Next.js, PWA, REST API" data-project-img="<?php echo esc_url( $theme_uri . '/assets/images/presencia-digital/project-pwa.webp' ); ?>" role="button" tabindex="0" aria-label="Ver detalles de App Web & Dashboard">
				<img class="pd-portfolio-card__flat-img" src="<?php echo esc_url( $theme_uri . '/assets/images/presencia-digital/project-pwa.webp' ); ?>" alt="App Web & Dashboard — Aplicación web progresiva con experiencia tipo app nativa" loading="lazy" width="800" height="640">
			</div>

			<!-- Proyecto 4: Landing SaaS -->
			<div class="pd-portfolio-card" data-category="b2b" data-project-trigger data-project-title="Landing Page & Portal SaaS" data-project-badge="Landing SaaS" data-project-stat="Captación +3.2x Leads" data-project-desc="Página de aterrizaje optimizada para campañas SEM de adquisición de usuarios con formularios dinámicos e integración directa a CRM." data-project-techs="Next.js, Google Ads, CRM Integration, Tailwind" data-project-img="<?php echo esc_url( $theme_uri . '/assets/images/presencia-digital/project-saas.webp' ); ?>" role="button" tabindex="0" aria-label="Ver detalles de Landing Page SaaS">
				<img class="pd-portfolio-card__flat-img" src="<?php echo esc_url( $theme_uri . '/assets/images/presencia-digital/project-saas.webp' ); ?>" alt="Landing Page SaaS — Página de aterrizaje enfocada en captación y conversión" loading="lazy" width="800" height="640">
			</div>
		</div>
	</section>

	<!-- ==========================================
	     3. DISEÑO WEB Y LANDINGS CON CRITERIO UX (#web-ux)
	     ========================================== -->
	<section class="pd-web" id="web-ux">
		<div class="pd-section-header" data-pd-reveal>
			<h2 class="pd-section-title">Diseño Web y Landings<br>UX Criteria</h2>
			<p class="pd-section-desc">
				Como <strong>agencia de diseño web para empresas</strong>, sabemos que un buen sitio debe responder a las necesidades de sus usuarios y cumplir los objetivos de la organización. Diseñamos experiencias donde la estética está respaldada por estrategia.
			</p>
		</div>

		<div class="pd-web__bento-grid" data-pd-cards>
			<div class="pd-card-clean">
				<h3 class="pd-card-clean__title">Arquitectura de Contenidos</h3>
				<p class="pd-card-clean__desc">Estructuración lógica de la información para guiar la navegación del usuario de forma intuitiva.</p>
			</div>

			<div class="pd-card-clean">
				<h3 class="pd-card-clean__title">Diseño UX / UI</h3>
				<p class="pd-card-clean__desc">Interfaces atractivas e interacciones centradas en la usabilidad y la experiencia del usuario.</p>
			</div>

			<div class="pd-card-clean">
				<h3 class="pd-card-clean__title">Sitios Corporativos</h3>
				<p class="pd-card-clean__desc">Desarrollo de plataformas web institucionales que proyectan solidez y autoridad de marca.</p>
			</div>

			<div class="pd-card-clean">
				<h3 class="pd-card-clean__title">Landing Pages de Conversión</h3>
				<p class="pd-card-clean__desc">Páginas de aterrizaje diseñadas con enfoque en captación de leads y generación de oportunidades.</p>
			</div>

			<div class="pd-card-clean">
				<h3 class="pd-card-clean__title">Diseño Responsive</h3>
				<p class="pd-card-clean__desc">Adaptación y rendimiento impecable en smartphones, tablets y pantallas de escritorio.</p>
			</div>

			<div class="pd-card-clean">
				<h3 class="pd-card-clean__title">Optimización & Integraciones</h3>
				<p class="pd-card-clean__desc">Mejora de puntos de conversión e integración fluida con herramientas y CRMs digitales.</p>
			</div>
		</div>
	</section>

	<!-- ==========================================
	     4. SEO / SEM: POSICIONAMIENTO Y TRÁFICO (#seo-sem)
	     ========================================== -->
	<section class="pd-seo" id="seo-sem">
		<div class="pd-section-header" data-pd-reveal>
			<h2 class="pd-section-title">SEO / SEM: Posicionamiento y Tráfico</h2>
			<p class="pd-section-desc">
				Tener un sitio web no garantiza que las personas lo encuentren. Combinamos SEO orgánico y campañas SEM de búsqueda para generar tráfico cualificado.
			</p>
		</div>

		<div class="pd-seo__grid" data-pd-cards>
			<div class="pd-card-dark">
				<h3 class="pd-card-dark__title">Investigación de Keywords</h3>
				<p class="pd-card-dark__desc">Identificación de oportunidades y términos de búsqueda con intención de contratación o compra.</p>
			</div>

			<div class="pd-card-dark">
				<h3 class="pd-card-dark__title">SEO Técnico & Arquitectura</h3>
				<p class="pd-card-dark__desc">Optimización de indexabilidad, velocidad de carga, estructura de URLs y Core Web Vitals.</p>
			</div>

			<div class="pd-card-dark">
				<h3 class="pd-card-dark__title">SEO On-Page & Contenidos</h3>
				<p class="pd-card-dark__desc">Optimización de meta tags, encabezados, imágenes y estrategia editorial orientada a búsquedas.</p>
			</div>

			<div class="pd-card-dark">
				<h3 class="pd-card-dark__title">Campañas SEM</h3>
				<p class="pd-card-dark__desc">Estrategias de adquisición pagada en Google Ads para acelerar la generación de oportunidades.</p>
			</div>

			<div class="pd-card-dark">
				<h3 class="pd-card-dark__title">Medición & Análisis</h3>
				<p class="pd-card-dark__desc">Monitoreo constante de posiciones, impresiones y fuentes de tráfico en Google Search Console.</p>
			</div>

			<div class="pd-card-dark">
				<h3 class="pd-card-dark__title">Optimización con Datos</h3>
				<p class="pd-card-dark__desc">Ajustes iterativos a partir del comportamiento real para elevar la autoridad del dominio.</p>
			</div>
		</div>
	</section>

	<!-- ==========================================
	     5. E-COMMERCE: PLATAFORMAS QUE VENDEN (#ecommerce)
	     ========================================== -->
	<section class="pd-ecommerce" id="ecommerce">
		<div class="pd-section-header" data-pd-reveal>
			<h2 class="pd-section-title">E-Commerce: Plataformas que venden</h2>
			<p class="pd-section-desc">
				Como <strong>agencia ecommerce en Lima y otras ciudades del Perú y el mundo</strong>, sabemos que una tienda online debe hacer mucho más que mostrar productos. Desarrollamos soluciones de comercio electrónico que facilitan la decisión de compra.
			</p>
		</div>

		<div class="pd-ecommerce__grid" data-pd-cards>
			<div class="pd-card-clean">
				<h3 class="pd-card-clean__title">Estrategia de Compra</h3>
				<p class="pd-card-clean__desc">Definición del flujo del cliente desde el descubrimiento hasta la conversión.</p>
			</div>

			<div class="pd-card-clean">
				<h3 class="pd-card-clean__title">Diseño de Tiendas Online</h3>
				<p class="pd-card-clean__desc">Estructuración y arquitectura visual para catálogos y vitrinas digitales.</p>
			</div>

			<div class="pd-card-clean">
				<h3 class="pd-card-clean__title">UX/UI para E-Commerce</h3>
				<p class="pd-card-clean__desc">Diseño intuitivo de páginas de producto, filtros y galerías de compra.</p>
			</div>

			<div class="pd-card-clean">
				<h3 class="pd-card-clean__title">Checkout Optimizado</h3>
				<p class="pd-card-clean__desc">Proceso de pago ágil y seguro orientado a reducir el abandono de carrito.</p>
			</div>
		</div>
	</section>

	<!-- ==========================================
	     6. CÓMO MEDIMOS RESULTADOS (#resultados)
	     ========================================== -->
	<section class="pd-metrics" id="resultados">
		<div class="pd-section-header" data-pd-reveal>
			<h2 class="pd-section-title">Cómo medimos resultados</h2>
			<p class="pd-section-desc">
				Definimos indicadores claros según los objetivos de tu organización para transformar visitas en oportunidades reales de negocio.
			</p>
		</div>

		<!-- Barra de contadores (count-up con GSAP al entrar en viewport) -->
		<div class="pd-metrics__stats-bar" data-pd-reveal>
			<div class="pd-stat-item">
				<div class="pd-stat-num" data-pd-counter data-target="150" data-prefix="+">+150</div>
				<div class="pd-stat-label">Webs & Apps Desarrolladas</div>
			</div>
			<div class="pd-stat-item">
				<div class="pd-stat-num" data-pd-counter data-target="2.5" data-decimals="1" data-prefix="+" data-suffix="K">+2.5K</div>
				<div class="pd-stat-label">Keywords en Top 10 Google</div>
			</div>
			<div class="pd-stat-item">
				<div class="pd-stat-num" data-pd-counter data-target="99" data-suffix="/100">99/100</div>
				<div class="pd-stat-label">Score Core Web Vitals</div>
			</div>
			<div class="pd-stat-item">
				<div class="pd-stat-num" data-pd-counter data-target="3.4" data-decimals="1" data-prefix="+" data-suffix="x">+3.4x</div>
				<div class="pd-stat-label">Retorno de Inversión (ROI)</div>
			</div>
		</div>

		<div class="pd-metrics__grid" data-pd-cards>
			<div class="pd-metric-card">
				<span class="pd-metric-card__category">Visibilidad</span>
				<h3 class="pd-metric-card__title">Impresiones & Alcance</h3>
				<p class="pd-metric-card__desc">Posiciones en motores de búsqueda y nivel de presencia de marca.</p>
			</div>

			<div class="pd-metric-card">
				<span class="pd-metric-card__category">Tráfico</span>
				<h3 class="pd-metric-card__title">Sesiones & Usuarios</h3>
				<p class="pd-metric-card__desc">Fuentes de adquisición y comportamiento dentro del ecosistema digital.</p>
			</div>

			<div class="pd-metric-card">
				<span class="pd-metric-card__category">Engagement</span>
				<h3 class="pd-metric-card__title">Permanencia & Interacción</h3>
				<p class="pd-metric-card__desc">Tiempo de navegación y profundidad de interacción con el contenido.</p>
			</div>

			<div class="pd-metric-card">
				<span class="pd-metric-card__category">Conversión</span>
				<h3 class="pd-metric-card__title">Leads & Contactos</h3>
				<p class="pd-metric-card__desc">Generación de registros, formularios completados y solicitudes comerciales.</p>
			</div>

			<div class="pd-metric-card">
				<span class="pd-metric-card__category">E-Commerce</span>
				<h3 class="pd-metric-card__title">Tasa de Venta & Ticket</h3>
				<p class="pd-metric-card__desc">Métricas de facturación, ticket promedio y recuperación de carrito.</p>
			</div>

			<div class="pd-metric-card">
				<span class="pd-metric-card__category">Negocio</span>
				<h3 class="pd-metric-card__title">Retorno de Inversión (ROI)</h3>
				<p class="pd-metric-card__desc">Contribución directa de los canales digitales a los resultados financieros.</p>
			</div>
		</div>

		<!-- Marquee infinito de tecnologías (CSS puro, pausa al hover) -->
		<div class="pd-tech-ticker" data-pd-reveal>
			<div class="pd-tech-ticker__title">Ecosistema Tecnológico & Plataformas</div>
			<div class="pd-tech-ticker__viewport">
				<div class="pd-tech-ticker__track">
					<div class="pd-tech-ticker__list">
						<span class="pd-tech-badge">WordPress</span>
						<span class="pd-tech-badge">WooCommerce</span>
						<span class="pd-tech-badge">Shopify</span>
						<span class="pd-tech-badge">React / Next.js</span>
						<span class="pd-tech-badge">Google Ads</span>
						<span class="pd-tech-badge">Search Console</span>
						<span class="pd-tech-badge">GA4 Analytics</span>
						<span class="pd-tech-badge">Core Web Vitals</span>
						<span class="pd-tech-badge">Tailwind CSS</span>
						<span class="pd-tech-badge">Node.js</span>
					</div>
					<div class="pd-tech-ticker__list" aria-hidden="true">
						<span class="pd-tech-badge">WordPress</span>
						<span class="pd-tech-badge">WooCommerce</span>
						<span class="pd-tech-badge">Shopify</span>
						<span class="pd-tech-badge">React / Next.js</span>
						<span class="pd-tech-badge">Google Ads</span>
						<span class="pd-tech-badge">Search Console</span>
						<span class="pd-tech-badge">GA4 Analytics</span>
						<span class="pd-tech-badge">Core Web Vitals</span>
						<span class="pd-tech-badge">Tailwind CSS</span>
						<span class="pd-tech-badge">Node.js</span>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ==========================================
	     7. CALCULADORA DE ALCANCE DIGITAL (#calculadora)
	     ========================================== -->
	<section class="pd-calc-section" id="calculadora">
		<div class="pd-section-header" data-pd-reveal>
			<h2 class="pd-section-title pd-section-title--light">Selecciona los componentes de tu presencia digital</h2>
			<p class="pd-section-desc">
				Diseñamos soluciones modulares adaptadas al momento y objetivos de tu organización.
			</p>
		</div>

		<div class="pd-calc-box" data-pd-reveal>
			<div class="pd-calc-grid" data-pd-calc>
				<button type="button" class="pd-calc-option selected" aria-pressed="true" data-component="Diseño Web & Landings UX">
					<span class="pd-calc-checkbox" aria-hidden="true">✓</span>
					<span class="pd-calc-text">
						<strong>Diseño Web & Landings UX</strong>
						<span>Sitio corporativo responsivo y enfocado en conversión</span>
					</span>
				</button>

				<button type="button" class="pd-calc-option selected" aria-pressed="true" data-component="Posicionamiento SEO Perú">
					<span class="pd-calc-checkbox" aria-hidden="true">✓</span>
					<span class="pd-calc-text">
						<strong>Posicionamiento SEO Perú</strong>
						<span>Optimización técnica y estrategia de contenidos orgánicos</span>
					</span>
				</button>

				<button type="button" class="pd-calc-option" aria-pressed="false" data-component="Tienda E-Commerce / WooCommerce">
					<span class="pd-calc-checkbox" aria-hidden="true">✓</span>
					<span class="pd-calc-text">
						<strong>Tienda E-Commerce / WooCommerce</strong>
						<span>Catálogo online con pasarela de pagos e integración</span>
					</span>
				</button>

				<button type="button" class="pd-calc-option" aria-pressed="false" data-component="Campañas SEM Google Ads">
					<span class="pd-calc-checkbox" aria-hidden="true">✓</span>
					<span class="pd-calc-text">
						<strong>Campañas SEM Google Ads</strong>
						<span>Aceleración de tráfico pagado y generación de leads</span>
					</span>
				</button>
			</div>

			<div class="pd-calc-footer">
				<p class="pd-calc-summary" data-pd-calc-summary aria-live="polite">2 componentes seleccionados</p>
				<a href="#contacto" class="pd-btn-primary open-contact-modal" data-pd-calc-cta data-service="Presencia Digital: Diseño Web & Landings UX + Posicionamiento SEO Perú">Solicitar Propuesta Personalizada →</a>
			</div>
		</div>
	</section>

	<!-- ==========================================
	     8. BANNER TRABAJEMOS JUNTOS (#contacto)
	     ========================================== -->
	<section class="bc-cta" id="contacto">
		<div class="bc-cta__container" data-pd-reveal>
			<h2 class="bc-cta__title">Trabajemos juntos</h2>
			<p class="bc-cta__desc">¿Tu presencia digital puede hacer más por tu marca? Conversemos sobre cómo transformarla en un activo de crecimiento.</p>
			<a href="#contacto" class="bc-cta__btn open-contact-modal" data-service="Presencia Digital (Web, SEO, E-Commerce)">
				<span>Contactar ahora</span>
				<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
			</a>
		</div>
	</section>

	<!-- ==========================================
	     MODAL DE CASO DE PROYECTO (PROJECT DETAIL MODAL)
	     ========================================== -->
	<div id="pd-project-modal" class="pd-modal" aria-hidden="true" role="dialog" aria-labelledby="pd-modal-title">
		<div class="pd-modal__overlay" tabindex="-1" data-pd-modal-close></div>
		<div class="pd-modal__dialog">
			<button type="button" class="pd-modal__close" aria-label="Cerrar modal" data-pd-modal-close>&times;</button>
			
			<div class="pd-modal__body">
				<div class="pd-modal__media">
					<img id="pd-modal-img" src="" alt="Previsualización del Proyecto" loading="lazy">
				</div>
				<div class="pd-modal__info">
					<div class="pd-modal__header-tags">
						<span class="pd-modal__badge" id="pd-modal-badge"></span>
						<span class="pd-modal__stat-pill" id="pd-modal-stat"></span>
					</div>
					<h3 class="pd-modal__title" id="pd-modal-title"></h3>
					<p class="pd-modal__desc" id="pd-modal-desc"></p>
					
					<div class="pd-modal__tech-box">
						<span class="pd-modal__tech-label">Tecnologías & Estrategias:</span>
						<p class="pd-modal__techs" id="pd-modal-techs"></p>
					</div>
					
					<div class="pd-modal__actions">
						<button type="button" class="pd-btn-primary open-contact-modal" id="pd-modal-cta">Cotizar Proyecto Similar →</button>
					</div>
				</div>
			</div>
		</div>
	</div>

</main>

<?php
get_footer();
