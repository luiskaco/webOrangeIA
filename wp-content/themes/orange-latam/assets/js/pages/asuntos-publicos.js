/**
 * Asuntos Públicos — animaciones de scroll editoriales (GSAP + ScrollTrigger).
 *
 * Degradación progresiva: si GSAP no carga o el usuario prefiere movimiento
 * reducido, la página queda estática pero completa — las filas de stakeholders
 * abren el modal de contacto vía main.js (delegación en .open-contact-modal).
 *
 * @package Orange_Latam
 */
( function () {
	'use strict';

	document.addEventListener( 'DOMContentLoaded', function () {
		var reducedMotion = window.matchMedia( '(prefers-reduced-motion: reduce)' ).matches;
		var hasGsap = typeof window.gsap !== 'undefined' && typeof window.ScrollTrigger !== 'undefined';

		if ( ! hasGsap || reducedMotion ) {
			return;
		}

		window.gsap.registerPlugin( window.ScrollTrigger );
		initHeroTimeline();
		initScrollReveals();
		initImageReveals();
		initMosaicParallax();
		initQuoteCard();
	} );

	/* --------------------------------------------------------------------
	 * 1. HERO: entrada editorial + trazo caligráfico del título
	 * ------------------------------------------------------------------ */
	function initHeroTimeline() {
		var gsap = window.gsap;
		var tl = gsap.timeline( { defaults: { ease: 'power3.out' } } );

		tl.from( '[data-ap-hero-title]', { y: 36, opacity: 0, duration: 0.7 } )
			.from( '[data-ap-hero-item]', { y: 24, opacity: 0, duration: 0.55, stagger: 0.12 }, '-=0.4' )
			.from( '[data-ap-hero-media]', { y: 40, opacity: 0, duration: 0.8 }, '-=0.5' );

		// Trazo del subrayado: se dibuja de izquierda a derecha tras aparecer el título.
		var stroke = document.querySelector( '.ap-title-mark__stroke path' );
		if ( stroke ) {
			var length = stroke.getTotalLength();
			gsap.set( stroke, { strokeDasharray: length, strokeDashoffset: length } );
			tl.to( stroke, { strokeDashoffset: 0, duration: 0.8, ease: 'power2.inOut' }, '-=0.55' );
		}
	}

	/* --------------------------------------------------------------------
	 * 2. SCROLL REVEALS: headers, bloques y grids con stagger
	 * ------------------------------------------------------------------ */
	function initScrollReveals() {
		var gsap = window.gsap;

		document.querySelectorAll( '[data-ap-reveal]' ).forEach( function ( el ) {
			gsap.from( el, {
				y: 32,
				opacity: 0,
				duration: 0.7,
				ease: 'power3.out',
				scrollTrigger: { trigger: el, start: 'top 85%', once: true }
			} );
		} );

		document.querySelectorAll( '[data-ap-cards]' ).forEach( function ( grid ) {
			gsap.from( grid.children, {
				y: 30,
				opacity: 0,
				duration: 0.55,
				ease: 'power3.out',
				stagger: 0.08,
				scrollTrigger: { trigger: grid, start: 'top 82%', once: true }
			} );
		} );
	}

	/* --------------------------------------------------------------------
	 * 3. IMAGE REVEALS: cortina clip-path de abajo hacia arriba
	 * ------------------------------------------------------------------ */
	function initImageReveals() {
		var gsap = window.gsap;

		document.querySelectorAll( '[data-ap-img-reveal]' ).forEach( function ( el ) {
			gsap.from( el, {
				clipPath: 'inset(0 0 100% 0)',
				duration: 1,
				ease: 'power3.inOut',
				scrollTrigger: { trigger: el, start: 'top 80%', once: true }
			} );
		} );
	}

	/* --------------------------------------------------------------------
	 * 4. PARALLAX del mosaico: columnas a velocidades opuestas (desktop)
	 * ------------------------------------------------------------------ */
	function initMosaicParallax() {
		var gsap = window.gsap;

		gsap.matchMedia().add( '(min-width: 993px)', function () {
			document.querySelectorAll( '[data-ap-parallax]' ).forEach( function ( col ) {
				var amount = parseFloat( col.getAttribute( 'data-ap-parallax' ) ) || 0;
				gsap.to( col, {
					yPercent: amount,
					ease: 'none',
					scrollTrigger: {
						trigger: col.closest( '.ap-influence-hub' ) || col,
						start: 'top bottom',
						end: 'bottom top',
						scrub: 0.6
					}
				} );
			} );
		} );
	}

	/* --------------------------------------------------------------------
	 * 5. QUOTE CARD: entrada lateral con leve profundidad
	 * ------------------------------------------------------------------ */
	function initQuoteCard() {
		var gsap = window.gsap;
		var card = document.querySelector( '[data-ap-quote]' );

		if ( ! card ) {
			return;
		}

		gsap.from( card, {
			x: 48,
			opacity: 0,
			duration: 0.8,
			ease: 'power3.out',
			scrollTrigger: { trigger: card, start: 'top 82%', once: true }
		} );
	}
} )();
