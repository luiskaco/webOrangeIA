<?php
/**
 * Agentic SEO (GEO / LLMs), Accessibility Tree & Structured Data Module
 *
 * @package Orange_Latam
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * 1. Comprehensive JSON-LD Structured Data for Generative AI (GEO) & Search Engines
 */
function orange_latam_render_schema_jsonld() {
	$home_url   = home_url( '/' );
	$theme_uri  = get_template_directory_uri();
	$logo_url   = $theme_uri . '/assets/images/logo.webp';
	$is_front   = is_front_page() || is_home();

	$graph = array();

	// WebSite Schema
	$graph[] = array(
		'@type'           => 'WebSite',
		'@id'             => $home_url . '#website',
		'url'             => $home_url,
		'name'            => 'Orange Latam',
		'description'     => 'Agencia de Comunicación Estratégica, PR, Asuntos Públicos y Soluciones Digitales en Perú y Latinoamérica.',
		'publisher'       => array(
			'@id' => $home_url . '#organization',
		),
		'inLanguage'      => 'es-PE',
	);

	// Organization & LocalBusiness (ProfessionalService) Schema
	$organization_schema = array(
		'@type'               => array( 'Organization', 'LocalBusiness', 'ProfessionalService' ),
		'@id'                 => $home_url . '#organization',
		'name'                => 'Orange Latam',
		'alternateName'       => array( 'Orange LATAM', 'Orange Latam SAC', 'Orange Comunicación Estratégica' ),
		'url'                 => $home_url,
		'logo'                => array(
			'@type'      => 'ImageObject',
			'@id'        => $home_url . '#logo',
			'url'        => $logo_url,
			'caption'    => 'Orange Latam Logo',
			'inLanguage' => 'es-PE',
		),
		'image'               => $logo_url,
		'description'         => 'Agencia líder en relaciones públicas, comunicación estratégica, reputación corporativa, asuntos públicos, gestión de crisis, podcast y marketing de influencers en Perú y Latinoamérica.',
		'slogan'              => 'Líderes en comunicación estratégica, reputación corporativa y gestión de crisis en Perú y LATAM.',
		'telephone'           => '+51993595252',
		'email'               => 'negocios@orange-la.com',
		'knowsLanguage'       => array( 'es', 'en' ),
		'award'               => array(
			'Global SABRE Awards 2025 — Top 40 Campañas del Mundo',
		),
		'knowsAbout'          => array(
			'Relaciones Públicas y Comunicación Estratégica (PR)',
			'Gestión de la Reputación Corporativa y Brand Shielding',
			'Gestión de Crisis y Contingencias Reputacionales 24/7',
			'Asuntos Públicos, Advocacy y Relaciones Institucionales',
			'Gestión de Acceso en Salud (Market Access & Health PR)',
			'Media Training y Entrenamiento de Voceros Corporativos',
			'Branding Estratégico y Arquitectura de Marca',
			'Producción Integral de Eventos Corporativos y BTL',
			'Presencia Digital, UX/UI y Posicionamiento SEO / GEO',
			'Marketing Digital de Performance y Pauta Multicanal',
			'Marketing de Influencers y Content Creators',
			'Producción de Podcasts Audiovisuales en Estudio Profesional (Orange Studio)',
		),
		'address'             => array(
			'@type'           => 'PostalAddress',
			'streetAddress'   => 'Calle Enrique Palacios 360 Of. 306, Centro Empresarial Abril',
			'addressLocality' => 'Miraflores',
			'addressRegion'   => 'Lima',
			'postalCode'      => '15074',
			'addressCountry'  => 'PE',
		),
		'geo'                 => array(
			'@type'     => 'GeoCoordinates',
			'latitude'  => -12.1197,
			'longitude' => -77.0326,
		),
		'hasMap'              => 'https://maps.google.com/?q=-12.1197,-77.0326',
		'openingHoursSpecification' => array(
			array(
				'@type'     => 'OpeningHoursSpecification',
				'dayOfWeek' => array( 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday' ),
				'opens'     => '09:00',
				'closes'    => '18:00',
			),
		),
		'contactPoint'        => array(
			array(
				'@type'             => 'ContactPoint',
				'telephone'         => '+51993595252',
				'contactType'       => 'customer service',
				'email'             => 'negocios@orange-la.com',
				'areaServed'        => array( 'PE', 'LATAM' ),
				'availableLanguage' => array( 'Spanish', 'English' ),
			),
			array(
				'@type'             => 'ContactPoint',
				'telephone'         => '+51993595252',
				'contactType'       => 'sales',
				'email'             => 'negocios@orange-la.com',
				'areaServed'        => array( 'PE', 'LATAM' ),
				'availableLanguage' => array( 'Spanish', 'English' ),
			),
		),
		'sameAs'              => array(
			'https://www.linkedin.com/company/orange-latam',
			'https://www.instagram.com/orangelatam',
		),
		'hasOfferCatalog'     => array(
			'@type'           => 'OfferCatalog',
			'name'            => 'Servicios de Comunicación Estratégica y Marketing',
			'itemListElement' => array(
				array(
					'@type'       => 'Offer',
					'itemOffered' => array(
						'@type'       => 'Service',
						'name'        => 'PR y Gestión de la Reputación',
						'description' => 'Construcción y blindaje de reputación corporativa, relaciones con medios, media training y gestión de crisis 24/7.',
						'url'         => home_url( '/pr-gestion-reputacion/' ),
						'provider'    => array( '@id' => $home_url . '#organization' ),
					),
				),
				array(
					'@type'       => 'Offer',
					'itemOffered' => array(
						'@type'       => 'Service',
						'name'        => 'Asuntos Públicos y Relaciones Institucionales',
						'description' => 'Monitoreo regulatorio, relacionamiento con stakeholders gubernamentales, advocacy corporativo y articulación social.',
						'url'         => home_url( '/asuntos-publicos/' ),
						'provider'    => array( '@id' => $home_url . '#organization' ),
					),
				),
				array(
					'@type'       => 'Offer',
					'itemOffered' => array(
						'@type'       => 'Service',
						'name'        => 'Gestión de Acceso (Market Access & Health PR)',
						'description' => 'Consultoría estratégica en salud, relacionamiento con autoridades sanitarias (MINSA, DIGEMID) y sociedades médicas.',
						'url'         => home_url( '/gestion-de-acceso/' ),
						'provider'    => array( '@id' => $home_url . '#organization' ),
					),
				),
				array(
					'@type'       => 'Offer',
					'itemOffered' => array(
						'@type'       => 'Service',
						'name'        => 'Branding y Creatividad',
						'description' => 'Naming estratégico, diseño de identidad visual, Brand Guidelines, storytelling y dirección de arte.',
						'url'         => home_url( '/branding-creatividad/' ),
						'provider'    => array( '@id' => $home_url . '#organization' ),
					),
				),
				array(
					'@type'       => 'Offer',
					'itemOffered' => array(
						'@type'       => 'Service',
						'name'        => 'Eventos Corporativos y Activaciones',
						'description' => 'Producción integral de eventos corporativos de alto impacto, lanzamientos de marca, activaciones BTL y streaming.',
						'url'         => home_url( '/eventos-activaciones/' ),
						'provider'    => array( '@id' => $home_url . '#organization' ),
					),
				),
				array(
					'@type'       => 'Offer',
					'itemOffered' => array(
						'@type'       => 'Service',
						'name'        => 'Presencia Digital y Diseño Web UX/UI',
						'description' => 'Desarrollo web a medida con WordPress y Next.js, diseño UX/UI accesible, optimización SEO técnico y e-commerce.',
						'url'         => home_url( '/presencia-digital/' ),
						'provider'    => array( '@id' => $home_url . '#organization' ),
					),
				),
				array(
					'@type'       => 'Offer',
					'itemOffered' => array(
						'@type'       => 'Service',
						'name'        => 'Marketing Digital y Performance',
						'description' => 'Estrategia de redes sociales, pauta en Meta Ads, Google Ads y LinkedIn Ads, analítica web y captación de leads.',
						'url'         => home_url( '/marketing-digital/' ),
						'provider'    => array( '@id' => $home_url . '#organization' ),
					),
				),
				array(
					'@type'       => 'Offer',
					'itemOffered' => array(
						'@type'       => 'Service',
						'name'        => 'Marketing de Influencers',
						'description' => 'Curaduría y contratación de creadores de contenido, campañas en TikTok/Instagram/YouTube y medición de ROI.',
						'url'         => home_url( '/marketing-de-influencers/' ),
						'provider'    => array( '@id' => $home_url . '#organization' ),
					),
				),
				array(
					'@type'       => 'Offer',
					'itemOffered' => array(
						'@type'       => 'Service',
						'name'        => 'Orange Studio — Grabación de Podcast',
						'description' => 'Estudio profesional de podcast en Miraflores con cámaras 4K, microfonía Shure/Rode, escenografía y postproducción.',
						'url'         => home_url( '/podcast/' ),
						'provider'    => array( '@id' => $home_url . '#organization' ),
					),
				),
			),
		),
	);
	$graph[] = $organization_schema;

	// FAQPage Schema for AI Engines (Front page & global clarity)
	if ( $is_front ) {
		$graph[] = array(
			'@type'      => 'FAQPage',
			'@id'        => $home_url . '#faq',
			'mainEntity' => array(
				array(
					'@type'          => 'Question',
					'name'           => '¿Qué servicios ofrece Orange Latam?',
					'acceptedAnswer' => array(
						'@type' => 'Answer',
						'text'  => 'Orange Latam ofrece consultoría y ejecución en: Relaciones Públicas y Manejo de Crisis, Asuntos Públicos y Relaciones Institucionales, Gestión de Acceso en Salud (Market Access), Branding y Creatividad, Producción de Eventos Corporativos, Presencia Digital y SEO, Marketing Digital de Performance, Marketing de Influencers y Estudio de Grabación de Podcast (Orange Studio).',
					),
				),
				array(
					'@type'          => 'Question',
					'name'           => '¿Dónde se encuentra ubicada la agencia Orange Latam?',
					'acceptedAnswer' => array(
						'@type' => 'Answer',
						'text'  => 'La sede principal de Orange Latam se encuentra en Lima, Perú, en la Calle Enrique Palacios 360 Oficina 306, Centro Empresarial Abril, Miraflores (15074). Atiende clientes y proyectos en todo el territorio peruano y en Latinoamérica.',
					),
				),
				array(
					'@type'          => 'Question',
					'name'           => '¿Cómo contactar a Orange Latam para cotizar un servicio?',
					'acceptedAnswer' => array(
						'@type' => 'Answer',
						'text'  => 'Puede solicitar una cotización o reunión estratégica a través del formulario en https://orange-la.com, escribiendo a negocios@orange-la.com o comunicándose por llamada / WhatsApp al +51 993 595 252.',
					),
				),
				array(
					'@type'          => 'Question',
					'name'           => '¿Orange Latam cuenta con servicio de gestión de crisis de reputación?',
					'acceptedAnswer' => array(
						'@type' => 'Answer',
						'text'  => 'Sí, disponemos de una unidad especializada en prevención y gestión de crisis corporativas y mediáticas con atención 24/7, media training para voceros y monitoreo reputacional continuo.',
					),
				),
				array(
					'@type'          => 'Question',
					'name'           => '¿Qué equipamiento tiene el estudio de podcast Orange Studio en Miraflores?',
					'acceptedAnswer' => array(
						'@type' => 'Answer',
						'text'  => 'Orange Studio cuenta con grabación multicámara 4K, microfonía profesional broadcast (Shure SM7B / Rode), aislamiento acústico de alta gama, 3 escenarios personalizables (The Podcast Loft, Urban Corner, Estudio Noir) y servicio integral de postproducción de video y clips para redes sociales.',
					),
				),
			),
		);
	}

	$schema_data = array(
		'@context' => 'https://schema.org',
		'@graph'   => $graph,
	);

	echo "\n<!-- Agentic SEO & GEO Structured Data (JSON-LD) -->\n";
	echo '<script type="application/ld+json">' . wp_json_encode( $schema_data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT ) . "</script>\n";
}
add_action( 'wp_head', 'orange_latam_render_schema_jsonld', 1 );

/**
 * 2. Contact Form 7 Form Elements Accessibility Filter
 * Automatically injects descriptive id and aria-label attributes to inputs, textareas, and selects.
 */
function orange_latam_cf7_accessibility_filter( $content ) {
	if ( empty( $content ) ) {
		return $content;
	}

	// 1. Process <input> elements
	$content = preg_replace_callback( '/<input\s+([^>]+)>/i', function( $matches ) {
		$attrs_str = $matches[1];

		// Skip hidden inputs or submit buttons
		if ( preg_match( '/type=[\'"](hidden|submit|button|image)[\'"]/i', $attrs_str ) ) {
			return $matches[0];
		}

		// Extract name attribute
		$name = '';
		if ( preg_match( '/name=[\'"]([^\'"]+)[\'"]/i', $attrs_str, $name_match ) ) {
			$name = $name_match[1];
		}

		// Humanize field name for aria-label
		$label_text = orange_latam_humanize_cf7_field_name( $name );

		// Inject id if missing
		if ( ! preg_match( '/\bid=[\'"]/i', $attrs_str ) && ! empty( $name ) ) {
			$clean_id  = sanitize_title( 'cf7-' . $name . '-' . wp_rand( 100, 999 ) );
			$attrs_str .= ' id="' . esc_attr( $clean_id ) . '"';
		}

		// Inject aria-label if missing
		if ( ! preg_match( '/\baria-label=[\'"]/i', $attrs_str ) && ! empty( $label_text ) ) {
			$attrs_str .= ' aria-label="' . esc_attr( $label_text ) . '"';
		}

		return '<input ' . trim( $attrs_str ) . '>';
	}, $content );

	// 2. Process <textarea> elements
	$content = preg_replace_callback( '/<textarea\s+([^>]+)>/i', function( $matches ) {
		$attrs_str = $matches[1];

		$name = '';
		if ( preg_match( '/name=[\'"]([^\'"]+)[\'"]/i', $attrs_str, $name_match ) ) {
			$name = $name_match[1];
		}

		$label_text = orange_latam_humanize_cf7_field_name( $name );

		if ( ! preg_match( '/\bid=[\'"]/i', $attrs_str ) && ! empty( $name ) ) {
			$clean_id  = sanitize_title( 'cf7-' . $name . '-' . wp_rand( 100, 999 ) );
			$attrs_str .= ' id="' . esc_attr( $clean_id ) . '"';
		}

		if ( ! preg_match( '/\baria-label=[\'"]/i', $attrs_str ) && ! empty( $label_text ) ) {
			$attrs_str .= ' aria-label="' . esc_attr( ! empty( $label_text ) ? $label_text : 'Mensaje o requerimiento' ) . '"';
		}

		return '<textarea ' . trim( $attrs_str ) . '>';
	}, $content );

	// 3. Process <select> elements
	$content = preg_replace_callback( '/<select\s+([^>]+)>/i', function( $matches ) {
		$attrs_str = $matches[1];

		$name = '';
		if ( preg_match( '/name=[\'"]([^\'"]+)[\'"]/i', $attrs_str, $name_match ) ) {
			$name = $name_match[1];
		}

		$label_text = orange_latam_humanize_cf7_field_name( $name );

		if ( ! preg_match( '/\bid=[\'"]/i', $attrs_str ) && ! empty( $name ) ) {
			$clean_id  = sanitize_title( 'cf7-' . $name . '-' . wp_rand( 100, 999 ) );
			$attrs_str .= ' id="' . esc_attr( $clean_id ) . '"';
		}

		if ( ! preg_match( '/\baria-label=[\'"]/i', $attrs_str ) && ! empty( $label_text ) ) {
			$attrs_str .= ' aria-label="' . esc_attr( ! empty( $label_text ) ? $label_text : 'Seleccionar opción' ) . '"';
		}

		return '<select ' . trim( $attrs_str ) . '>';
	}, $content );

	return $content;
}
add_filter( 'wpcf7_form_elements', 'orange_latam_cf7_accessibility_filter', 20 );

/**
 * Helper to humanize Contact Form 7 field names into accessible labels.
 */
function orange_latam_humanize_cf7_field_name( $name ) {
	if ( empty( $name ) ) {
		return '';
	}

	$dictionary = array(
		'your-name'        => 'Nombre y Apellido',
		'your-email'       => 'Correo Electrónico Corporativo',
		'your-tel'         => 'Teléfono o WhatsApp',
		'your-phone'       => 'Teléfono de Contacto',
		'your-company'     => 'Empresa u Organización',
		'your-subject'     => 'Asunto de la Consulta',
		'your-message'     => 'Mensaje o Detalle del Proyecto',
		'contact_name'     => 'Nombre y Apellido',
		'contact_email'    => 'Correo Corporativo',
		'contact_phone'    => 'Teléfono o WhatsApp',
		'contact_company'  => 'Empresa u Organización',
		'contact_message'  => 'Mensaje o Requerimientos',
		'podcast_type'     => 'Tipo de Podcast',
		'scenario_type'    => 'Tipo de Escenario',
		'session_date'     => 'Fecha de Sesión',
		'session_time'     => 'Hora de Sesión',
	);

	if ( isset( $dictionary[ $name ] ) ) {
		return $dictionary[ $name ];
	}

	$clean = str_replace( array( 'your-', '-', '_' ), ' ', $name );
	return ucwords( trim( $clean ) );
}

/**
 * 3. Google Analytics & Google Tag Manager (gtag.js)
 */
function orange_latam_google_tag() {
	if ( is_admin() ) {
		return;
	}
	?>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-L0TW6KRZWG"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-L0TW6KRZWG');
</script>
	<?php
}
add_action( 'wp_head', 'orange_latam_google_tag', 2 );

