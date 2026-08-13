<?php
/**
 * ============================================================
 * TEMPORAL — DEMO INTERNA DE SEO
 * ============================================================
 * Modal que se levanta en cada página pública mostrando Meta Title,
 * Meta Description y Focus Keywords (con % de peso y justificación)
 * para presentar la estrategia SEO a dirección.
 *
 * Cómo remover cuando termine la demo:
 *   1. Borrar este archivo.
 *   2. Borrar la línea require_once correspondiente en functions.php.
 * No toca ninguna otra parte del theme ni de la base de datos.
 * ============================================================
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Datos reales confirmados en SEMrush (base de datos Perú), consultados vía
 * Análisis Grupal de Palabras Clave sobre las 39 Focus Keywords que están
 * cargadas hoy en Rank Math en todo el sitio. 'volume' = búsquedas/mes exacto
 * de SEMrush (incluye 0 cuando SEMrush lo reporta así — no se oculta).
 * 'kd' = dificultad de keyword (0-100) cuando SEMrush la reporta, incluso si
 * el volumen exacto no está disponible ("n/d" en SEMrush). Todo lo que no
 * aparezca aquí no tiene ningún dato de SEMrush disponible todavía.
 */
function orange_latam_seo_demo_known_volumes() {
	return array(
		'agencia de relaciones públicas'         => array( 'volume' => 110, 'kd' => 14 ),
		'agencias de relaciones públicas'        => array( 'volume' => 110, 'kd' => 14 ),
		'agencia de medios'                      => array( 'volume' => 90, 'kd' => 30 ),
		'agencia'                                => array( 'volume' => 6600, 'kd' => 48 ),
		'relaciones públicas'                    => array( 'volume' => 1600, 'kd' => 30 ),
		'nota de prensa'                         => array( 'volume' => 1000, 'kd' => 25 ),
		'agencia de pr'                          => array( 'volume' => 10, 'kd' => null ),
		'gestión de reputación'                  => array( 'volume' => 20, 'kd' => null ),
		'agencia de pr lima'                     => array( 'volume' => 0, 'kd' => null ),
		'agencia de marketing de influencers'    => array( 'volume' => 20, 'kd' => null ),
		'agencia de branding'                    => array( 'volume' => 170, 'kd' => 37 ),
		'creación de marca'                      => array( 'volume' => 110, 'kd' => null ),
		'dirección de arte'                      => array( 'volume' => 390, 'kd' => null ),
		'agencia de marketing digital en lima'   => array( 'volume' => 390, 'kd' => 50 ),
		'gestion de redes sociales'               => array( 'volume' => 320, 'kd' => 16 ),
		'publicidad digital peru'                => array( 'volume' => 20, 'kd' => null ),
		'community management lima'              => array( 'volume' => 0, 'kd' => null ),
		'contenido estrategico redes sociales'   => array( 'volume' => null, 'kd' => 22 ),
		'alquiler de estudio de podcast'         => array( 'volume' => null, 'kd' => 8 ),
		'estudio de podcast profesional'         => array( 'volume' => null, 'kd' => 8 ),
		'asuntos públicos'                       => array( 'volume' => 1600, 'kd' => null ),
		'comunicación política'                  => array( 'volume' => 210, 'kd' => null ),
		'agencia de eventos corporativos'        => array( 'volume' => 10, 'kd' => null ),
		'activaciones de marca'                  => array( 'volume' => 170, 'kd' => 14 ),
		'gestión de acceso'                      => array( 'volume' => 20, 'kd' => null ),
		'comunicación en salud'                  => array( 'volume' => 210, 'kd' => null ),
		'acceso a medicamentos'                  => array( 'volume' => 40, 'kd' => null ),
		'agencia seo perú'                       => array( 'volume' => 20, 'kd' => null ),
		'diseño web lima'                        => array( 'volume' => 170, 'kd' => null ),
		'agencia ecommerce'                      => array( 'volume' => 20, 'kd' => null ),
		'agencia de comunicación política perú'  => array( 'volume' => null, 'kd' => 16 ),
		'comunicación gubernamental perú'        => array( 'volume' => null, 'kd' => 22 ),
		'cómo crear una marca desde cero'        => array( 'volume' => null, 'kd' => 30 ),
		'cómo manejar una crisis de reputación'  => array( 'volume' => null, 'kd' => 20 ),
		'diseño de identidad de marca'           => array( 'volume' => null, 'kd' => 26 ),
		'empresa de relaciones públicas perú'    => array( 'volume' => null, 'kd' => 14 ),
		'estudio de podcast en lima'             => array( 'volume' => null, 'kd' => 7 ),
		'eventos híbridos'                       => array( 'volume' => null, 'kd' => 24 ),
		'grabacion de podcast en miraflores'     => array( 'volume' => null, 'kd' => 10 ),
		'relacionamiento con stakeholders'       => array( 'volume' => null, 'kd' => 21 ),
		'organización de eventos empresariales perú'        => array( 'volume' => null, 'kd' => 8 ),
		'agencia de activaciones btl lima'                  => array( 'volume' => null, 'kd' => 9 ),
		'comunicación farmacéutica perú'                    => array( 'volume' => null, 'kd' => 17 ),
		'agencia de comunicación para el sector salud perú' => array( 'volume' => null, 'kd' => 8 ),
	);
}

/**
 * Reservado para keywords que en el futuro no tengan ningún dato de SEMrush
 * (ni volumen ni dificultad). Hoy las 39 Focus Keywords cargadas en el sitio
 * ya tienen al menos dato de dificultad — este array queda vacío a
 * propósito, listo para usarse si se agrega una keyword nueva sin consultar.
 */
function orange_latam_seo_demo_topical_reasons() {
	return array();
}

/**
 * Justificaciones reales documentadas para páginas ya auditadas a fondo
 * (Home y PR y Gestión de la Reputación), escritas en lenguaje simple para
 * alguien que no sabe de SEO. El resto de páginas recibe una justificación
 * genérica igual de simple, basada en su rol (primaria/secundaria).
 */
function orange_latam_seo_demo_known_reasons() {
	return array(
		7 => array( // Home
			'agencia de relaciones públicas' => 'Es la frase principal por la que queremos que nos encuentren en Google. Ahora mismo ya aparecemos en el puesto #2 de resultados para esta búsqueda — mejor que Trend.pe, nuestro competidor directo (ellos están en el puesto 5-6). Por eso la reforzamos aquí, en la home, y no la repetimos como principal en otra página: si dos páginas del mismo sitio compiten por la misma frase, Google no sabe cuál mostrar primero y ninguna de las dos sube bien. Mejor concentrar toda la fuerza en una sola.',
			'agencia de pr' => 'Versión corta agregada por pedido explícito de dirección. La palabra "PR" ya forma parte del nombre con el que nos identificamos ante Google ("Orange LATAM Agencia de PR y Comunicación"), así que esta frase refuerza esa asociación.',
		),
		91 => array( // PR y Gestión de la Reputación
			'gestión de reputación' => 'Pasó a ser la frase principal de esta página porque antes competía con la Home por la misma frase ("agencia de relaciones públicas"), y eso confundía a Google sobre cuál de las dos mostrar — perjudicando a ambas. Ahora cada página tiene su propia frase y ya no compiten entre sí.',
			'empresa de relaciones públicas perú' => 'La misma idea, pero agregando "Perú": sirve para aparecer también cuando alguien busca especificando el país.',
			'agencia de pr lima' => 'La misma idea, pero agregando "Lima": captura a alguien que ya busca algo más puntual y local, donde normalmente hay menos agencias compitiendo por esa frase exacta.',
			'cómo manejar una crisis de reputación' => 'Esta frase la busca alguien que todavía no sabe que necesita contratar una agencia — solo quiere entender el problema. Es una oportunidad de aparecer temprano, antes de que decida a quién contratar. Nuestro competidor Trend.pe ya está aprovechando este tipo de búsquedas y nosotros todavía no.',
			'agencia de relaciones públicas' => 'Ya no es la frase principal de esta página — se la dejamos a la Home porque ella ya tiene mejor posición en Google para esa búsqueda. La mantenemos aquí como frase de apoyo para no perder del todo la relación con el tema de la página.',
		),
	);
}

/**
 * Traduce el KD (0-100) de SEMrush a una etiqueta que cualquiera entiende,
 * sin exponer la sigla técnica.
 */
function orange_latam_seo_demo_difficulty_label( $kd ) {
	if ( $kd < 15 ) {
		return 'muy fácil de posicionar';
	} elseif ( $kd < 30 ) {
		return 'fácil de posicionar';
	} elseif ( $kd < 50 ) {
		return 'dificultad media para posicionar';
	} elseif ( $kd < 70 ) {
		return 'difícil de posicionar';
	}
	return 'muy difícil de posicionar';
}

function orange_latam_seo_demo_normalize( $text ) {
	return trim( mb_strtolower( $text, 'UTF-8' ) );
}

/**
 * Reemplaza las variables básicas de Rank Math (%title%, %sitename%, %sep%)
 * en el texto crudo guardado en post meta, para que se lea igual que en el
 * <head> real de la página.
 */
function orange_latam_seo_demo_resolve_variables( $raw, $post_id ) {
	if ( '' === trim( (string) $raw ) ) {
		return '';
	}
	$replacements = array(
		'%title%'    => get_the_title( $post_id ),
		'%sitename%' => get_bloginfo( 'name' ),
		'%sep%'      => '|',
	);
	return str_replace( array_keys( $replacements ), array_values( $replacements ), $raw );
}

function orange_latam_seo_demo_get_data( $post_id ) {
	$raw_title       = get_post_meta( $post_id, 'rank_math_title', true );
	$raw_description = get_post_meta( $post_id, 'rank_math_description', true );
	$raw_keywords    = get_post_meta( $post_id, 'rank_math_focus_keyword', true );

	$title       = orange_latam_seo_demo_resolve_variables( $raw_title, $post_id );
	$description = orange_latam_seo_demo_resolve_variables( $raw_description, $post_id );

	if ( '' === $title ) {
		$title = get_the_title( $post_id ) . ' | ' . get_bloginfo( 'name' );
	}
	if ( '' === $description ) {
		$description = '(No hay Meta Description configurada en Rank Math para esta página)';
	}

	$keywords_raw = array_filter( array_map( 'trim', explode( ',', (string) $raw_keywords ) ) );

	if ( empty( $keywords_raw ) ) {
		return array(
			'title'       => $title,
			'description' => $description,
			'keywords'    => array(),
		);
	}

	$known_volumes = orange_latam_seo_demo_known_volumes();
	$known_reasons = orange_latam_seo_demo_known_reasons();
	$page_reasons  = isset( $known_reasons[ $post_id ] ) ? $known_reasons[ $post_id ] : array();

	// Peso "proxy" por posición, usado solo para las pocas keywords sin
	// ningún dato de SEMrush todavía (ni volumen ni KD).
	$position_weights = array( 100, 55, 32, 18, 10 );

	$rows   = array();
	$weights = array();

	foreach ( $keywords_raw as $i => $kw ) {
		$norm  = orange_latam_seo_demo_normalize( $kw );
		$entry = isset( $known_volumes[ $norm ] ) ? $known_volumes[ $norm ] : null;

		$has_volume  = $entry && null !== $entry['volume'];
		$has_kd_only = $entry && ! $has_volume && null !== $entry['kd'];
		$volume      = $has_volume ? $entry['volume'] : null;
		$kd          = $entry ? $entry['kd'] : null;

		// Piso de 5 para que ningún volumen real (incluido 0) colapse la
		// barra a 0% — el % sigue reflejando la escala real entre keywords.
		if ( $has_volume ) {
			$weight = max( $volume, 5 );
		} elseif ( $has_kd_only ) {
			$weight = 8;
		} else {
			$weight = isset( $position_weights[ $i ] ) ? $position_weights[ $i ] : 6;
		}
		$weights[] = $weight;

		$reason = isset( $page_reasons[ $norm ] )
			? $page_reasons[ $norm ]
			: ( 0 === $i
				? 'Es la frase principal de esta página: la que más queremos que la gente busque en Google para llegar aquí. Todo el contenido de la página está enfocado en esa frase.'
				: 'Es una frase de apoyo: no es la principal, pero ayuda a que la página aparezca también en otras búsquedas relacionadas, sin competir con la frase principal.' );

		// Nota en lenguaje simple: solo se agrega cuando el volumen real es
		// bajo o nulo — explica, sin tecnicismos, por qué una frase así
		// sigue siendo una buena elección.
		$topical_reasons = orange_latam_seo_demo_topical_reasons();
		$strategy_note    = null;
		if ( $has_volume && $volume < 50 ) {
			$strategy_note = 'Poca gente busca esta frase exacta cada mes, pero eso también significa que casi ninguna otra agencia está compitiendo por ella — es fácil posicionarse ahí. Y quien la busca ya sabe exactamente qué necesita, así que son visitas de mejor calidad aunque sean pocas. Sumada a las demás frases de la página, ayuda a traer más tráfico en conjunto.';
		} elseif ( $has_kd_only ) {
			$strategy_note = 'Todavía no hay un número exacto de cuánta gente busca esta frase — es una búsqueda poco común. Pero sabemos que es ' . orange_latam_seo_demo_difficulty_label( $kd ) . ', así que igual ayuda a que la página aparezca en más variantes de búsqueda relacionadas con el tema.';
		} elseif ( ! $entry && isset( $topical_reasons[ $norm ] ) ) {
			// No hay dato de SEMrush todavía, pero sí hay una razón concreta
			// de por qué la frase es relevante para el contenido real de la
			// página — se usa esa en vez de admitir que falta verificar.
			$strategy_note = $topical_reasons[ $norm ];
		} elseif ( ! $entry ) {
			$strategy_note = 'Su función no es traer visitas por sí sola, sino reforzar el tema de la página para que Google la entienda mejor y la muestre también en búsquedas relacionadas.';
		}

		$rows[] = array(
			'text'          => $kw,
			'primary'       => 0 === $i,
			'weight'        => $weight,
			'has_volume'    => $has_volume,
			'has_kd_only'   => $has_kd_only,
			'volume'        => $volume,
			'kd'            => $kd,
			'reason'        => $reason,
			'strategy_note' => $strategy_note,
		);
	}

	$total = array_sum( $weights );
	foreach ( $rows as $i => $row ) {
		$rows[ $i ]['percent'] = $total > 0 ? round( ( $row['weight'] / $total ) * 100 ) : 0;
	}

	return array(
		'title'       => $title,
		'description' => $description,
		'keywords'    => $rows,
	);
}

function orange_latam_seo_demo_render_modal() {
	if ( ! is_singular() ) {
		return;
	}

	$post_id = get_queried_object_id();
	if ( ! $post_id ) {
		return;
	}

	$data = orange_latam_seo_demo_get_data( $post_id );
	if ( empty( $data['keywords'] ) ) {
		return; // Nada que mostrar si la página no tiene Focus Keyword configurada.
	}
	?>
	<div id="olSeoDemoOverlay" class="ol-seo-demo-overlay" aria-hidden="true">
		<div class="ol-seo-demo-modal" role="dialog" aria-modal="true" aria-labelledby="olSeoDemoTitle">
			<button type="button" class="ol-seo-demo-close" id="olSeoDemoClose" aria-label="Cerrar">&times;</button>
			<div class="ol-seo-demo-badge">DEMO INTERNA · SEO</div>
			<h2 id="olSeoDemoTitle" class="ol-seo-demo-heading">Estrategia SEO de esta página</h2>

			<div class="ol-seo-demo-block">
				<span class="ol-seo-demo-label">Título que ve Google (Meta Title)</span>
				<p class="ol-seo-demo-value"><?php echo esc_html( $data['title'] ); ?></p>
			</div>

			<div class="ol-seo-demo-block">
				<span class="ol-seo-demo-label">Descripción que ve Google (Meta Description)</span>
				<p class="ol-seo-demo-value"><?php echo esc_html( $data['description'] ); ?></p>
			</div>

			<div class="ol-seo-demo-block">
				<span class="ol-seo-demo-label">Palabras clave elegidas &mdash; cu&aacute;nto pesa cada una y por qu&eacute;</span>

				<?php foreach ( $data['keywords'] as $kw ) : ?>
					<div class="ol-seo-demo-kw">
						<div class="ol-seo-demo-kw-head">
							<span class="ol-seo-demo-kw-tag <?php echo $kw['primary'] ? 'is-primary' : ''; ?>">
								<?php echo $kw['primary'] ? 'PRIMARIA' : 'SECUNDARIA'; ?>
							</span>
							<span class="ol-seo-demo-kw-text"><?php echo esc_html( $kw['text'] ); ?></span>
							<span class="ol-seo-demo-kw-percent"><?php echo esc_html( $kw['percent'] ); ?>%</span>
						</div>
						<div class="ol-seo-demo-bar">
							<div class="ol-seo-demo-bar-fill" style="width: <?php echo esc_attr( $kw['percent'] ); ?>%"></div>
						</div>
						<div class="ol-seo-demo-kw-source">
							<?php if ( $kw['has_volume'] ) : ?>
								Dato real: <?php echo esc_html( number_format_i18n( $kw['volume'] ) ); ?> búsquedas al mes en Perú<?php echo null !== $kw['kd'] ? ' &middot; ' . esc_html( orange_latam_seo_demo_difficulty_label( $kw['kd'] ) ) : ''; ?>
							<?php elseif ( $kw['has_kd_only'] ) : ?>
								Búsqueda poco común (sin número exacto de mes) &middot; <?php echo esc_html( orange_latam_seo_demo_difficulty_label( $kw['kd'] ) ); ?>
							<?php else : ?>
								Elegida por el tema de la página, no por volumen de búsqueda
							<?php endif; ?>
						</div>
						<p class="ol-seo-demo-kw-reason"><?php echo esc_html( $kw['reason'] ); ?></p>
						<?php if ( $kw['strategy_note'] ) : ?>
							<p class="ol-seo-demo-kw-strategy"><?php echo esc_html( $kw['strategy_note'] ); ?></p>
						<?php endif; ?>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>

	<button type="button" id="olSeoDemoReopen" class="ol-seo-demo-reopen" aria-label="Ver SEO de esta página">SEO ⓘ</button>

	<style>
		.ol-seo-demo-overlay {
			position: fixed; inset: 0; z-index: 999999;
			background: rgba(11, 11, 11, 0.72);
			display: none; align-items: center; justify-content: center;
			padding: 24px;
			font-family: 'PP Neue Montreal', 'Plus Jakarta Sans', 'Inter', sans-serif;
		}
		.ol-seo-demo-overlay.is-open { display: flex; }
		.ol-seo-demo-modal {
			position: relative;
			background: #FCF5E9;
			color: #14120F;
			width: 100%; max-width: 640px;
			max-height: 86vh; overflow-y: auto;
			border-radius: 16px;
			padding: 32px 28px 28px;
			box-shadow: 0 24px 64px rgba(0,0,0,0.35);
		}
		.ol-seo-demo-badge {
			display: inline-block;
			background: #EE894F; color: #14120F;
			font-size: 11px; font-weight: 700; letter-spacing: 0.06em;
			padding: 4px 10px; border-radius: 999px; margin-bottom: 14px;
		}
		.ol-seo-demo-heading {
			font-family: 'PP Editorial New', 'Cormorant Garamond', serif;
			font-size: 24px; font-weight: 600; margin-bottom: 20px;
		}
		.ol-seo-demo-close {
			position: absolute; top: 16px; right: 16px;
			width: 32px; height: 32px; border-radius: 50%;
			border: none; background: rgba(20,18,15,0.08);
			font-size: 20px; line-height: 1; cursor: pointer; color: #14120F;
		}
		.ol-seo-demo-close:hover { background: rgba(20,18,15,0.16); }
		.ol-seo-demo-block { margin-bottom: 22px; }
		.ol-seo-demo-label {
			display: block; font-size: 11px; font-weight: 700;
			text-transform: uppercase; letter-spacing: 0.06em;
			color: #70B5E3; margin-bottom: 6px;
		}
		.ol-seo-demo-value { font-size: 15px; line-height: 1.5; }
		.ol-seo-demo-kw {
			border: 1px solid rgba(20,18,15,0.12);
			border-radius: 12px; padding: 14px 16px; margin-top: 10px;
		}
		.ol-seo-demo-kw-head {
			display: flex; align-items: center; gap: 8px; flex-wrap: wrap;
		}
		.ol-seo-demo-kw-tag {
			font-size: 10px; font-weight: 700; letter-spacing: 0.05em;
			padding: 3px 8px; border-radius: 999px;
			background: rgba(20,18,15,0.08); color: #14120F;
		}
		.ol-seo-demo-kw-tag.is-primary { background: #EE894F; color: #14120F; }
		.ol-seo-demo-kw-text { font-weight: 600; font-size: 14px; flex: 1; }
		.ol-seo-demo-kw-percent { font-weight: 700; font-size: 14px; color: #EE894F; }
		.ol-seo-demo-bar {
			height: 6px; border-radius: 999px; background: rgba(20,18,15,0.08);
			margin-top: 10px; overflow: hidden;
		}
		.ol-seo-demo-bar-fill { height: 100%; background: #70B5E3; border-radius: 999px; }
		.ol-seo-demo-kw-source {
			font-size: 11px; color: rgba(20,18,15,0.55); margin-top: 8px;
		}
		.ol-seo-demo-kw-reason {
			font-size: 13px; line-height: 1.5; margin-top: 8px; color: #14120F;
		}
		.ol-seo-demo-kw-strategy {
			font-size: 12px; line-height: 1.5; margin-top: 8px; padding-top: 8px;
			border-top: 1px dashed rgba(20,18,15,0.15); color: rgba(20,18,15,0.75);
			font-style: italic;
		}
		.ol-seo-demo-reopen {
			position: fixed; bottom: 20px; right: 20px; z-index: 999998;
			background: #14120F; color: #FCF5E9; border: none;
			padding: 10px 16px; border-radius: 999px;
			font-size: 12px; font-weight: 700; letter-spacing: 0.04em;
			cursor: pointer; box-shadow: 0 8px 24px rgba(0,0,0,0.25);
		}
		.ol-seo-demo-reopen:hover { background: #2a2620; }
		@media (max-width: 640px) {
			.ol-seo-demo-modal { padding: 26px 18px 22px; }
			.ol-seo-demo-heading { font-size: 20px; }
		}
	</style>

	<script>
	(function () {
		var overlay = document.getElementById('olSeoDemoOverlay');
		var closeBtn = document.getElementById('olSeoDemoClose');
		var reopenBtn = document.getElementById('olSeoDemoReopen');
		if (!overlay) return;

		function openModal() {
			overlay.classList.add('is-open');
			overlay.setAttribute('aria-hidden', 'false');
		}
		function closeModal() {
			overlay.classList.remove('is-open');
			overlay.setAttribute('aria-hidden', 'true');
		}

		window.setTimeout(openModal, 600);

		closeBtn.addEventListener('click', closeModal);
		reopenBtn.addEventListener('click', openModal);
		overlay.addEventListener('click', function (e) {
			if (e.target === overlay) closeModal();
		});
		document.addEventListener('keydown', function (e) {
			if (e.key === 'Escape') closeModal();
		});
	})();
	</script>
	<?php
}
add_action( 'wp_footer', 'orange_latam_seo_demo_render_modal' );
