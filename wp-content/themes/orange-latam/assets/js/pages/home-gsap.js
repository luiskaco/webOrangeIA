/**
 * Home Page — Animaciones de Scroll, Micro-interacciones y Mini Carousel (GSAP 3.15 + ScrollTrigger)
 *
 * Degradación progresiva: si GSAP no está disponible o el usuario tiene
 * prefers-reduced-motion activo, el sitio mantiene su visibilidad y funcionalidad nativa.
 *
 * @package Orange_Latam
 */
( function () {
	'use strict';

	function init() {
		var reducedMotion = window.matchMedia( '(prefers-reduced-motion: reduce)' ).matches;
		var hasGsap = typeof window.gsap !== 'undefined' && typeof window.ScrollTrigger !== 'undefined';

		if ( ! hasGsap || reducedMotion ) {
			initCarouselFallback();
			return;
		}

		window.gsap.registerPlugin( window.ScrollTrigger );

		initSensiblesGrid();
		initExpertsSection();
		initSectorsBadges();
		initAwardsReveal();

		// Refrescar ScrollTrigger tras cargar recursos (imágenes, fuentes)
		window.addEventListener( 'load', function () {
			window.ScrollTrigger.refresh();
		} );
	}

	/* --------------------------------------------------------------------
	 * 1. ASUNTOS SENSIBLES: Stagger de cajas tácticas y hover interactivo
	 * ------------------------------------------------------------------ */
	function initSensiblesGrid() {
		var gsap = window.gsap;
		var section = document.querySelector( '.sensibles-grid-section' );
		if ( ! section ) {
			return;
		}

		// Encabezado
		var headerLeft = section.querySelector( '.sensibles-grid-section__header-left' );
		var headerRight = section.querySelector( '.sensibles-grid-section__header-right' );
		if ( headerLeft && headerRight ) {
			gsap.from( [ headerLeft, headerRight ], {
				y: 35,
				opacity: 0,
				duration: 0.8,
				stagger: 0.15,
				ease: 'power3.out',
				clearProps: 'transform,opacity',
				scrollTrigger: {
					trigger: section,
					start: 'top 82%',
					once: true
				}
			} );
		}

		// Grilla de cajas tácticas con Stagger en cascada sin deformar proporciones
		var boxes = section.querySelectorAll( '.sensibles-box' );
		if ( boxes.length > 0 ) {
			gsap.from( boxes, {
				y: 45,
				opacity: 0,
				duration: 0.8,
				stagger: 0.1,
				ease: 'power3.out',
				clearProps: 'transform,opacity',
				scrollTrigger: {
					trigger: '.sensibles-box-grid',
					start: 'top 80%',
					once: true
				}
			} );

			// Micro-interacción Hover suave GSAP
			boxes.forEach( function ( box ) {
				box.addEventListener( 'mouseenter', function () {
					gsap.to( box, { y: -6, duration: 0.3, ease: 'power2.out', overwrite: 'auto' } );
				} );
				box.addEventListener( 'mouseleave', function () {
					gsap.to( box, { y: 0, duration: 0.3, ease: 'power2.out', overwrite: 'auto' } );
				} );
			} );
		}
	}

	/* --------------------------------------------------------------------
	 * 2. VOZ DE EXPERTOS: Mini Carousel minimalista y animaciones de entrada
	 * ------------------------------------------------------------------ */
	function initExpertsSection() {
		var gsap = window.gsap;
		var section = document.querySelector( '.experts' );
		if ( ! section ) {
			return;
		}

		// Intro izquierda (Título, Subtítulo, Acciones)
		var intro = section.querySelector( '.experts__intro' );
		if ( intro ) {
			gsap.from( intro.children, {
				x: -35,
				opacity: 0,
				duration: 0.75,
				stagger: 0.12,
				ease: 'power3.out',
				clearProps: 'transform,opacity',
				scrollTrigger: {
					trigger: section,
					start: 'top 78%',
					once: true
				}
			} );
		}

		// Tarjetas de noticias
		var cards = section.querySelectorAll( '.experts__card' );
		if ( cards.length > 0 ) {
			gsap.from( Array.prototype.slice.call( cards, 0, 3 ), {
				y: 45,
				opacity: 0,
				duration: 0.8,
				stagger: 0.12,
				ease: 'power3.out',
				clearProps: 'transform,opacity',
				scrollTrigger: {
					trigger: '.experts__carousel-viewport',
					start: 'top 80%',
					once: true
				}
			} );
		}

		// Lógica interactiva del Mini Carousel
		setupCarouselControls( section );
	}

	function setupCarouselControls( section ) {
		var viewport = section.querySelector( '.experts__carousel-viewport' );
		var track = section.querySelector( '.experts__cards-track' );
		var prevBtn = section.querySelector( '.experts__nav-arrow--prev' );
		var nextBtn = section.querySelector( '.experts__nav-arrow--next' );
		var currentEl = section.querySelector( '.experts__nav-counter-current' );
		var totalEl = section.querySelector( '.experts__nav-counter-total' );

		if ( ! viewport || ! track ) {
			return;
		}

		var cards = track.querySelectorAll( '.experts__card' );
		var totalCards = cards.length;

		if ( totalEl ) {
			totalEl.textContent = totalCards < 10 ? '0' + totalCards : totalCards;
		}

		function getScrollStep() {
			if ( cards.length === 0 ) {
				return 300;
			}
			var firstCard = cards[0];
			var style = window.getComputedStyle( track );
			var gap = parseFloat( style.gap ) || 16;
			return firstCard.offsetWidth + gap;
		}

		function updateNavState() {
			var scrollLeft = viewport.scrollLeft;
			var maxScroll = viewport.scrollWidth - viewport.clientWidth;
			var step = getScrollStep();
			var currentIdx = Math.round( scrollLeft / step ) + 1;
			if ( currentIdx < 1 ) currentIdx = 1;
			if ( currentIdx > totalCards ) currentIdx = totalCards;

			if ( currentEl ) {
				currentEl.textContent = currentIdx < 10 ? '0' + currentIdx : currentIdx;
			}

			if ( prevBtn ) {
				prevBtn.disabled = scrollLeft <= 4;
			}
			if ( nextBtn ) {
				nextBtn.disabled = scrollLeft >= ( maxScroll - 4 );
			}
		}

		if ( prevBtn ) {
			prevBtn.addEventListener( 'click', function () {
				viewport.scrollBy( {
					left: -getScrollStep(),
					behavior: 'smooth'
				} );
			} );
		}

		if ( nextBtn ) {
			nextBtn.addEventListener( 'click', function () {
				viewport.scrollBy( {
					left: getScrollStep(),
					behavior: 'smooth'
				} );
			} );
		}

		var ticking = false;
		viewport.addEventListener( 'scroll', function () {
			if ( ! ticking ) {
				window.requestAnimationFrame( function () {
					updateNavState();
					ticking = false;
				} );
				ticking = true;
			}
		}, { passive: true } );

		// Inicializar estado de botones
		updateNavState();
	}

	function initCarouselFallback() {
		var section = document.querySelector( '.experts' );
		if ( section ) {
			setupCarouselControls( section );
		}
	}

	/* --------------------------------------------------------------------
	 * 3. SECTORES: Entrada fluida de badges sin deformación de escala
	 * ------------------------------------------------------------------ */
	function initSectorsBadges() {
		var gsap = window.gsap;
		var grid = document.querySelector( '.sectors__grid' );
		if ( ! grid ) {
			return;
		}

		var badges = grid.querySelectorAll( '.sectors__badge' );
		if ( badges.length > 0 ) {
			gsap.from( badges, {
				y: 20,
				opacity: 0,
				duration: 0.6,
				stagger: 0.03,
				ease: 'power2.out',
				clearProps: 'all', // Remueve estilos en línea al terminar para dejar las cajas 100% simétricas
				scrollTrigger: {
					trigger: grid,
					start: 'top 85%',
					once: true
				}
			} );
		}
	}

	/* --------------------------------------------------------------------
	 * 4. PREMIOS Y FESTIVALES: Entrada fluida de títulos
	 * ------------------------------------------------------------------ */
	function initAwardsReveal() {
		var gsap = window.gsap;
		var awards = document.querySelector( '.home-awards' );
		if ( ! awards ) {
			return;
		}

		var title = awards.querySelector( '.home-awards__title' );
		if ( title ) {
			gsap.from( title, {
				y: 30,
				opacity: 0,
				duration: 0.75,
				ease: 'power3.out',
				clearProps: 'transform,opacity',
				scrollTrigger: {
					trigger: awards,
					start: 'top 82%',
					once: true
				}
			} );
		}
	}

	// Ejecución segura tanto si el DOM está cargando como si ya cargó
	if ( document.readyState === 'loading' ) {
		document.addEventListener( 'DOMContentLoaded', init );
	} else {
		init();
	}
} )();
