/**
 * Presencia Digital — interacciones y animaciones de scroll (GSAP + ScrollTrigger).
 *
 * Degradación progresiva: si GSAP no carga (CDN caído) o el usuario prefiere
 * movimiento reducido, la página queda estática pero 100% funcional —
 * los filtros del portafolio y la calculadora se wirean en vanilla JS.
 *
 * @package Orange_Latam
 */
( function () {
	'use strict';

	document.addEventListener( 'DOMContentLoaded', function () {
		var reducedMotion = window.matchMedia( '(prefers-reduced-motion: reduce)' ).matches;
		var hasGsap = typeof window.gsap !== 'undefined' && typeof window.ScrollTrigger !== 'undefined';

		initPortfolioFilter( hasGsap && ! reducedMotion );
		initCalculator();
		initProjectModal();

		if ( ! hasGsap || reducedMotion ) {
			return;
		}

		window.gsap.registerPlugin( window.ScrollTrigger );
		initHeroTimeline();
		initScrollReveals();
		initCounters();
		initHeroParallax();
	} );

	/* --------------------------------------------------------------------
	 * 1. HERO: timeline de entrada + dibujo del sparkline
	 * ------------------------------------------------------------------ */
	function initHeroTimeline() {
		var gsap = window.gsap;
		var tl = gsap.timeline( { defaults: { ease: 'power3.out' } } );

		tl.from( '[data-pd-hero-title]', { y: 36, opacity: 0, duration: 0.7 } )
			.from( '[data-pd-hero-item]', { y: 24, opacity: 0, duration: 0.6 }, '-=0.4' )
			.from( '[data-pd-hero-visual]', { y: 40, opacity: 0, scale: 0.96, duration: 0.8 }, '-=0.35' )
			.from( '[data-pd-metric]', { y: 16, opacity: 0, duration: 0.4, stagger: 0.07 }, '-=0.4' )
			.from( '[data-pd-hero-badge]', { scale: 0.9, opacity: 0, duration: 0.45, ease: 'back.out(1.6)' }, '-=0.2' );

		// Sparkline: la línea se dibuja y el área aparece detrás.
		var line = document.querySelector( '.pd-hero__spark-line' );
		var area = document.querySelector( '.pd-hero__spark-area' );
		if ( line ) {
			var length = line.getTotalLength();
			gsap.set( line, { strokeDasharray: length, strokeDashoffset: length } );
			tl.to( line, { strokeDashoffset: 0, duration: 1.1, ease: 'power2.inOut' }, '-=0.5' );
		}
		if ( area ) {
			tl.from( area, { opacity: 0, duration: 0.6 }, '-=0.5' );
		}
	}

	/* --------------------------------------------------------------------
	 * 2. SCROLL REVEALS: headers y grids con stagger
	 * ------------------------------------------------------------------ */
	function initScrollReveals() {
		var gsap = window.gsap;

		document.querySelectorAll( '[data-pd-reveal]' ).forEach( function ( el ) {
			gsap.from( el, {
				y: 32,
				opacity: 0,
				duration: 0.7,
				ease: 'power3.out',
				scrollTrigger: { trigger: el, start: 'top 85%', once: true }
			} );
		} );

		document.querySelectorAll( '[data-pd-cards]' ).forEach( function ( grid ) {
			gsap.from( grid.children, {
				y: 36,
				opacity: 0,
				duration: 0.6,
				ease: 'power3.out',
				stagger: 0.08,
				scrollTrigger: { trigger: grid, start: 'top 82%', once: true }
			} );
		} );
	}

	/* --------------------------------------------------------------------
	 * 3. CONTADORES: count-up al entrar en viewport
	 * ------------------------------------------------------------------ */
	function initCounters() {
		var gsap = window.gsap;

		document.querySelectorAll( '[data-pd-counter]' ).forEach( function ( el ) {
			var target = parseFloat( el.getAttribute( 'data-target' ) );
			var decimals = parseInt( el.getAttribute( 'data-decimals' ) || '0', 10 );
			var prefix = el.getAttribute( 'data-prefix' ) || '';
			var suffix = el.getAttribute( 'data-suffix' ) || '';

			if ( isNaN( target ) ) {
				return;
			}

			var state = { val: 0 };
			gsap.to( state, {
				val: target,
				duration: 1.6,
				ease: 'power2.out',
				scrollTrigger: { trigger: el, start: 'top 88%', once: true },
				onUpdate: function () {
					el.textContent = prefix + state.val.toFixed( decimals ) + suffix;
				},
				onComplete: function () {
					el.textContent = prefix + target.toFixed( decimals ) + suffix;
				}
			} );
		} );
	}

	/* --------------------------------------------------------------------
	 * 4. PARALLAX SUTIL del visual del hero (solo desktop)
	 * ------------------------------------------------------------------ */
	function initHeroParallax() {
		var gsap = window.gsap;

		gsap.matchMedia().add( '(min-width: 1025px)', function () {
			gsap.to( '[data-pd-hero-visual]', {
				yPercent: 8,
				ease: 'none',
				scrollTrigger: {
					trigger: '.pd-hero',
					start: 'top top',
					end: 'bottom top',
					scrub: 0.6
				}
			} );
		} );
	}

	/* --------------------------------------------------------------------
	 * 5. FILTRO DEL PORTAFOLIO (funciona con o sin GSAP)
	 * ------------------------------------------------------------------ */
	function initPortfolioFilter( animate ) {
		var buttons = document.querySelectorAll( '.pd-filter-btn[data-filter]' );
		var cards = document.querySelectorAll( '.pd-portfolio-card[data-category]' );

		if ( ! buttons.length || ! cards.length ) {
			return;
		}

		buttons.forEach( function ( btn ) {
			btn.addEventListener( 'click', function () {
				var filter = btn.getAttribute( 'data-filter' );

				buttons.forEach( function ( b ) {
					b.classList.toggle( 'active', b === btn );
					b.setAttribute( 'aria-pressed', b === btn ? 'true' : 'false' );
				} );

				var visible = [];
				cards.forEach( function ( card ) {
					var show = 'all' === filter || card.getAttribute( 'data-category' ) === filter;
					card.classList.toggle( 'is-hidden', ! show );
					if ( show ) {
						visible.push( card );
					}
				} );

				if ( animate && visible.length ) {
					window.gsap.fromTo( visible,
						{ y: 20, opacity: 0 },
						{ y: 0, opacity: 1, duration: 0.45, ease: 'power3.out', stagger: 0.06, overwrite: 'auto' }
					);
				}
			} );
		} );
	}

	/* --------------------------------------------------------------------
	 * 6. CALCULADORA DE COMPONENTES
	 *    Toggle real + resumen accesible + data-service dinámico para el
	 *    modal de contacto global (main.js lee data-service del trigger).
	 * ------------------------------------------------------------------ */
	function initCalculator() {
		var options = document.querySelectorAll( '[data-pd-calc] .pd-calc-option' );
		var summary = document.querySelector( '[data-pd-calc-summary]' );
		var cta = document.querySelector( '[data-pd-calc-cta]' );

		if ( ! options.length ) {
			return;
		}

		function sync() {
			var selectedTitles = [];
			var selectedDetails = [];

			options.forEach( function ( opt ) {
				if ( opt.classList.contains( 'selected' ) ) {
					var title = opt.getAttribute( 'data-component' ) || '';
					var spanText = opt.querySelector( '.pd-calc-text span' );
					var desc = spanText ? spanText.textContent.trim() : '';

					selectedTitles.push( title );
					selectedDetails.push( '• ' + title + ( desc ? ': ' + desc : '' ) );
				}
			} );

			if ( summary ) {
				summary.textContent = selectedTitles.length
					? selectedTitles.length + ( 1 === selectedTitles.length ? ' componente seleccionado' : ' componentes seleccionados' )
					: 'Selecciona al menos un componente';
			}

			if ( cta ) {
				cta.setAttribute( 'data-service', selectedTitles.length
					? 'Presencia Digital: ' + selectedTitles.join( ' + ' )
					: 'Presencia Digital (Web, SEO, E-Commerce)' );

				var autoMessage = selectedDetails.length
					? 'Hola, deseo solicitar una propuesta personalizada para mi presencia digital con los siguientes componentes seleccionados:\n\n' + selectedDetails.join( '\n' )
					: '';
				cta.setAttribute( 'data-message', autoMessage );
			}
		}

		options.forEach( function ( opt ) {
			opt.addEventListener( 'click', function () {
				opt.classList.toggle( 'selected' );
				opt.setAttribute( 'aria-pressed', opt.classList.contains( 'selected' ) ? 'true' : 'false' );
				sync();
			} );
		} );

		sync();
	}

	/* --------------------------------------------------------------------
	 * 7. MODAL DE CASO DE PROYECTO
	 * ------------------------------------------------------------------ */
	function initProjectModal() {
		var modal = document.getElementById( 'pd-project-modal' );
		var triggers = document.querySelectorAll( '[data-project-trigger]' );
		if ( ! modal || ! triggers.length ) {
			return;
		}

		var imgEl = document.getElementById( 'pd-modal-img' );
		var badgeEl = document.getElementById( 'pd-modal-badge' );
		var statEl = document.getElementById( 'pd-modal-stat' );
		var titleEl = document.getElementById( 'pd-modal-title' );
		var descEl = document.getElementById( 'pd-modal-desc' );
		var techsEl = document.getElementById( 'pd-modal-techs' );
		var ctaEl = document.getElementById( 'pd-modal-cta' );

		function openModal( card ) {
			var title = card.getAttribute( 'data-project-title' ) || '';
			var badge = card.getAttribute( 'data-project-badge' ) || '';
			var stat = card.getAttribute( 'data-project-stat' ) || '';
			var desc = card.getAttribute( 'data-project-desc' ) || '';
			var techs = card.getAttribute( 'data-project-techs' ) || '';
			var img = card.getAttribute( 'data-project-img' ) || '';

			if ( imgEl ) imgEl.src = img;
			if ( badgeEl ) badgeEl.textContent = badge;
			if ( statEl ) statEl.textContent = stat;
			if ( titleEl ) titleEl.textContent = title;
			if ( descEl ) descEl.textContent = desc;
			if ( techsEl ) techsEl.textContent = techs;
			if ( ctaEl ) {
				ctaEl.setAttribute( 'data-service', 'Caso de Éxito: ' + title );
				ctaEl.setAttribute( 'data-message', 'Hola, me interesa cotizar una plataforma web o app similar al proyecto "' + title + '" (' + badge + ').' );
			}

			modal.classList.add( 'active' );
			modal.setAttribute( 'aria-hidden', 'false' );
			document.body.style.overflow = 'hidden';
		}

		function closeModal() {
			modal.classList.remove( 'active' );
			modal.setAttribute( 'aria-hidden', 'true' );
			document.body.style.overflow = '';
		}

		triggers.forEach( function ( card ) {
			card.addEventListener( 'click', function () {
				openModal( card );
			} );
			card.addEventListener( 'keydown', function ( e ) {
				if ( e.key === 'Enter' || e.key === ' ' ) {
					e.preventDefault();
					openModal( card );
				}
			} );
		} );

		modal.querySelectorAll( '[data-pd-modal-close]' ).forEach( function ( el ) {
			el.addEventListener( 'click', closeModal );
		} );

		document.addEventListener( 'keydown', function ( e ) {
			if ( e.key === 'Escape' && modal.classList.contains( 'active' ) ) {
				closeModal();
			}
		} );
	}
} )();
