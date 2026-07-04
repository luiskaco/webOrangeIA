/**
	* Orange Latam Theme - Main JS File
	*
	* Implements hero slider, scroll reveals, service switching, and carousels.
	*/

document.addEventListener( 'DOMContentLoaded', () => {
	
	// ==========================================
	// 1. SCROLL REVEALS & STAGGER ANIMATIONS
	// ==========================================
	const initScrollReveals = () => {
		const revealItems = document.querySelectorAll( '[data-reveal]' );
		const staggerParents = document.querySelectorAll( '[data-stagger]' );

		if ( 'IntersectionObserver' in window ) {
			const revealObserver = new IntersectionObserver( ( entries ) => {
				entries.forEach( ( entry ) => {
					if ( entry.isIntersecting ) {
						entry.target.classList.add( 'revealed' );
						revealObserver.unobserve( entry.target );
					}
				} );
			}, { threshold: 0.08 } );

			revealItems.forEach( ( item ) => {
				revealObserver.observe( item );
			} );

			const staggerObserver = new IntersectionObserver( ( entries ) => {
				entries.forEach( ( entry ) => {
					if ( entry.isIntersecting ) {
						const children = Array.from( entry.target.children );
						children.forEach( ( child, index ) => {
							child.style.opacity = '0';
							child.style.transform = 'translateY(20px)';
							child.style.transition = `opacity 0.6s ease ${index * 70}ms, transform 0.6s ease ${index * 70}ms`;
							setTimeout( () => {
								child.style.opacity = '1';
								child.style.transform = 'none';
							}, 50 );
						} );
						staggerObserver.unobserve( entry.target );
					}
				} );
			}, { threshold: 0.05 } );

			staggerParents.forEach( ( parent ) => {
				staggerObserver.observe( parent );
			} );
		} else {
			// Fallback: show everything if IntersectionObserver is not supported
			revealItems.forEach( ( item ) => item.classList.add( 'revealed' ) );
			staggerParents.forEach( ( parent ) => {
				Array.from( parent.children ).forEach( ( child ) => {
					child.style.opacity = '1';
					child.style.transform = 'none';
				} );
			} );
		}
	};

	// ==========================================
	// 2. HERO SLIDER
	// ==========================================
	const initHeroSlider = () => {
		const slides = document.querySelectorAll( '.hero__slide' );
		const dots = document.querySelectorAll( '.hero__dot' );
		const prevBtn = document.querySelector( '.hero__arrow--prev' );
		const nextBtn = document.querySelector( '.hero__arrow--next' );
		
		if ( slides.length === 0 ) return;

		let currentSlide = 0;
		let autoplayTimer = null;

		const showSlide = ( index ) => {
			slides.forEach( ( s, i ) => {
				const isActive = i === index;
				s.classList.toggle( 'hero__slide--active', isActive );

				const video = s.querySelector( '.hero__video' );
				if ( video ) {
					if ( isActive ) {
						video.currentTime = 0;
						video.play().catch( () => {} );
					} else {
						video.pause();
					}
				}
			} );
			dots.forEach( ( d, i ) => {
				d.classList.toggle( 'hero__dot--active', i === index );
			} );
			currentSlide = index;
		};

		const nextSlide = () => {
			const index = ( currentSlide + 1 ) % slides.length;
			showSlide( index );
		};

		const prevSlide = () => {
			const index = ( currentSlide - 1 + slides.length ) % slides.length;
			showSlide( index );
		};

		const startAutoplay = () => {
			stopAutoplay();
			autoplayTimer = setInterval( nextSlide, 5500 );
		};

		const stopAutoplay = () => {
			if ( autoplayTimer ) {
				clearInterval( autoplayTimer );
			}
		};

		if ( prevBtn && nextBtn ) {
			prevBtn.addEventListener( 'click', () => {
				prevSlide();
				startAutoplay();
			} );
			nextBtn.addEventListener( 'click', () => {
				nextSlide();
				startAutoplay();
			} );
		}

		dots.forEach( ( dot, index ) => {
			dot.addEventListener( 'click', () => {
				showSlide( index );
				startAutoplay();
			} );
		} );

		// Start slider
		showSlide( 0 );
		startAutoplay();
	};

	// ==========================================
	// 3. SERVICES SECTION SWITCHER (Corp vs Sensible)
	// ==========================================
	const initServicesSection = () => {
		const corpBtn = document.querySelector( '.services-banner__btn--corp' );
		const sensBtn = document.querySelector( '.services-banner__btn--sensible' );
		const corpView = document.querySelector( '.services-corp' );
		const sensView = document.querySelector( '.services-sens' );
		const awardSection = document.querySelector( '.award-teaser' );
		const festivalSection = document.querySelector( '.awards-list' );
		
		if ( ! corpBtn || ! sensBtn ) return;

		const setCategory = ( category ) => {
			if ( category === 'corporativa' ) {
				corpBtn.classList.add( 'services-banner__btn--active' );
				sensBtn.classList.remove( 'services-banner__btn--active' );
				corpView.classList.add( 'services-corp--active' );
				sensView.classList.remove( 'services-sens--active' );
				
				if ( awardSection ) awardSection.style.display = 'block';
				if ( festivalSection ) festivalSection.style.display = 'block';
			} else {
				sensBtn.classList.add( 'services-banner__btn--active' );
				corpBtn.classList.remove( 'services-banner__btn--active' );
				sensView.classList.add( 'services-sens--active' );
				corpView.classList.remove( 'services-corp--active' );

				if ( awardSection ) awardSection.style.display = 'none';
				if ( festivalSection ) festivalSection.style.display = 'none';
			}
		};

		corpBtn.addEventListener( 'click', () => setCategory( 'corporativa' ) );
		sensBtn.addEventListener( 'click', () => setCategory( 'sensible' ) );

		// Interactive Corp Service Rows
		const corpRows = document.querySelectorAll( '.services-corp__row' );
		const watermark = document.querySelector( '.services-corp__detail-watermark' );
		const detailLabel = document.querySelector( '.services-corp__detail-label' );
		const detailTitle = document.querySelector( '.services-corp__detail-title' );
		const detailDesc = document.querySelector( '.services-corp__detail-desc' );
		const detailLink = document.querySelector( '.services-corp__detail-link' );

		corpRows.forEach( ( row ) => {
			row.addEventListener( 'click', () => {
				corpRows.forEach( ( r ) => r.classList.remove( 'services-corp__row--active' ) );
				row.classList.add( 'services-corp__row--active' );

				const id = row.getAttribute( 'data-id' );
				const num = row.getAttribute( 'data-num' );
				const name = row.getAttribute( 'data-name' );
				const desc = row.getAttribute( 'data-desc' );
				const link = row.getAttribute( 'data-link' );

				if ( watermark ) watermark.textContent = num;
				if ( detailLabel ) detailLabel.textContent = `${num} - SERVICIO`;
				if ( detailTitle ) detailTitle.textContent = name.toUpperCase();
				if ( detailDesc ) detailDesc.textContent = desc;
				if ( detailLink ) detailLink.href = link ? link : detailLink.getAttribute( 'data-default-href' );
			} );
		});

		// Interactive Sensible Services Carousel
		const sensData = [
			{ name: 'GESTIÓN DE CRISIS Y PROBLEMAS', desc: 'El valor de marca es un activo muy importante para las empresas y protegerlo del impacto de crisis y problemas que impactan en la reputación es una de las especialidades de Orange Latam. Nuestro equipo de la unidad C&P se encuentra altamente capacitado para identificar, prevenir, gestionar y mitigar crisis y problemas, aplicando metodologías innovadoras, ágiles y eficaces.' },
			{ name: 'GESTIÓN DE ACCESO', desc: 'Desbloqueamos barreras para que la sociedad acceda a avances médico-científicos de manera ética, oportuna y profesional, trabajando de la mano con reguladores y actores clave del sector salud.' },
			{ name: 'COMUNICACIÓN POLÍTICA', desc: 'Estrategias de comunicación para candidatos e instituciones que generan legitimidad, confianza real y compromiso ciudadano en contextos de alta exposición pública.' },
			{ name: 'ASUNTOS PÚBLICOS', desc: 'Relaciones estratégicas con administraciones y reguladores para anticipar cambios jurídicos y gestionar riesgos reputacionales antes de que escalen.' },
			{ name: 'RELACIONAMIENTO CON STAKEHOLDERS', desc: 'Mapping y planes de relacionamiento con comunidades de alta influencia para garantizar operatividad y sostenibilidad del negocio en el largo plazo.' },
			{ name: 'COMUNICACIÓN PARA ENTIDADES DEL ESTADO', desc: 'Estrategias para que instituciones públicas construyan confianza, respeto y credibilidad sólida ante la ciudadanía.' }
		];

		let activeSensIdx = 0;
		const sensCard = document.querySelector( '.services-sens__card' );
		const sensWatermark = document.querySelector( '.services-sens__watermark-text' );
		const sensCardTitle = document.querySelector( '.services-sens__card-title' );
		const sensCardDesc = document.querySelector( '.services-sens__card-desc' );
		const sensDotsContainer = document.querySelector( '.services-sens__dots' );
		const sensPrevBtn = document.querySelector( '.services-sens__arrow--prev' );
		const sensNextBtn = document.querySelector( '.services-sens__arrow--next' );

		const updateSensCard = ( index ) => {
			activeSensIdx = ( index + sensData.length ) % sensData.length;
			const data = sensData[activeSensIdx];

			// Pulse animation effect
			if ( sensCard ) {
				sensCard.classList.add( 'services-sens__card--pulse' );
				setTimeout( () => sensCard.classList.remove( 'services-sens__card--pulse' ), 220 );
			}

			if ( sensWatermark ) sensWatermark.textContent = data.name;
			if ( sensCardTitle ) sensCardTitle.textContent = data.name;
			if ( sensCardDesc ) sensCardDesc.textContent = data.desc;

			// Update Dots
			const dots = document.querySelectorAll( '.services-sens__dot' );
			dots.forEach( ( d, i ) => {
				d.classList.toggle( 'services-sens__dot--active', i === activeSensIdx );
			} );
		};

		if ( sensDotsContainer ) {
			sensDotsContainer.innerHTML = '';
			sensData.forEach( ( _, i ) => {
				const dot = document.createElement( 'span' );
				dot.className = `services-sens__dot ${ i === 0 ? 'services-sens__dot--active' : '' }`;
				dot.addEventListener( 'click', () => updateSensCard( i ) );
				sensDotsContainer.appendChild( dot );
			} );
		}

		if ( sensPrevBtn && sensNextBtn ) {
			sensPrevBtn.addEventListener( 'click', () => updateSensCard( activeSensIdx - 1 ) );
			sensNextBtn.addEventListener( 'click', () => updateSensCard( activeSensIdx + 1 ) );
		}
	};

	// ==========================================
	// 4. AWARDS SPOTLIGHT SWITCHER
	// ==========================================
	const initAwardsSection = () => {
		const awardsItems = document.querySelectorAll( '.awards-list__item' );
		const spotlightTitle = document.querySelector( '.award-teaser__title' );
		const spotlightCategory = document.querySelector( '.award-teaser__category' );

		awardsItems.forEach( ( item ) => {
			item.addEventListener( 'click', () => {
				awardsItems.forEach( ( i ) => i.classList.remove( 'awards-list__item--active' ) );
				item.classList.add( 'awards-list__item--active' );

				const title = item.getAttribute( 'data-title' );
				const category = item.getAttribute( 'data-category' );

				if ( spotlightTitle ) spotlightTitle.textContent = title;
				if ( spotlightCategory ) spotlightCategory.textContent = category;
			} );
		} );
	};

	// ==========================================
	// 5. VOZ DE EXPERTOS CAROUSEL / PAGINATION
	// ==========================================
	const initExpertsSection = () => {
		const articlesData = ( typeof orangeLatamExperts !== 'undefined' && orangeLatamExperts.length ) ? orangeLatamExperts : [];

		let windowStart = 0;
		const cards = document.querySelectorAll( '.experts__grid > .experts__card' );
		const prevBtn = document.querySelector( '.experts__arrow--prev' );
		const nextBtn = document.querySelector( '.experts__arrow--next' );
		const dotsContainer = document.querySelector( '.experts__dots' );

		// Nothing to rotate: either no posts, or not enough posts to cycle beyond what's already rendered.
		if ( cards.length === 0 || articlesData.length <= cards.length ) return;

		const updateVisibleArticles = ( start ) => {
			windowStart = ( start + articlesData.length ) % articlesData.length;

			cards.forEach( ( card, offset ) => {
				const dataIdx = ( windowStart + offset ) % articlesData.length;
				const data = articlesData[dataIdx];

				const authorEl = card.querySelector( '.experts__card-author' );
				const roleEl = card.querySelector( '.experts__card-role' );
				const imgBox = card.querySelector( '.experts__card-img-box' );

				card.href = data.permalink;
				if ( authorEl ) authorEl.textContent = data.title;
				if ( roleEl ) roleEl.textContent = `${data.date} · Por ${data.author}`;
				if ( imgBox ) {
					imgBox.innerHTML = data.thumbnail
						? `<img class="experts__card-img" src="${data.thumbnail}" alt="${data.title}">`
						: `<div class="experts__card-img-placeholder">Foto de la nota</div>`;
				}
			} );

			// Update dots
			const dots = document.querySelectorAll( '.experts__dot' );
			dots.forEach( ( dot, i ) => {
				dot.classList.toggle( 'experts__dot--active', i === windowStart );
			} );
		};

		if ( dotsContainer ) {
			dotsContainer.innerHTML = '';
			articlesData.forEach( ( _, i ) => {
				const dot = document.createElement( 'span' );
				dot.className = `experts__dot ${ i === 0 ? 'experts__dot--active' : '' }`;
				dot.addEventListener( 'click', () => updateVisibleArticles( i ) );
				dotsContainer.appendChild( dot );
			} );
		}

		if ( prevBtn && nextBtn ) {
			prevBtn.addEventListener( 'click', () => updateVisibleArticles( windowStart - 1 ) );
			nextBtn.addEventListener( 'click', () => updateVisibleArticles( windowStart + 1 ) );
		}
	};

	// ==========================================
	// 6b. RESPONSIVE NAV (BURGER MENU)
	// ==========================================
	const initResponsiveNav = () => {
		const burger = document.querySelector( '.header__burger' );
		const nav = document.querySelector( '.header__nav' );
		const overlay = document.querySelector( '.header__overlay' );

		if ( ! burger || ! nav ) return;

		const closeNav = () => {
			burger.setAttribute( 'aria-expanded', 'false' );
			nav.classList.remove( 'header__nav--open' );
			if ( overlay ) overlay.classList.remove( 'header__overlay--visible' );
			document.body.classList.remove( 'header-nav-open' );
		};

		const openNav = () => {
			burger.setAttribute( 'aria-expanded', 'true' );
			nav.classList.add( 'header__nav--open' );
			if ( overlay ) overlay.classList.add( 'header__overlay--visible' );
			document.body.classList.add( 'header-nav-open' );
		};

		burger.addEventListener( 'click', () => {
			const isOpen = burger.getAttribute( 'aria-expanded' ) === 'true';
			isOpen ? closeNav() : openNav();
		} );

		if ( overlay ) {
			overlay.addEventListener( 'click', closeNav );
		}

		nav.querySelectorAll( '.header__link' ).forEach( ( link ) => {
			link.addEventListener( 'click', closeNav );
		} );

		document.addEventListener( 'keydown', ( e ) => {
			if ( e.key === 'Escape' ) closeNav();
		} );

		window.addEventListener( 'resize', () => {
			if ( window.innerWidth > 768 ) closeNav();
		} );
	};

	// ==========================================
	// 6. SCROLL DETECTOR FOR FIXED HEADER
	// ==========================================
	const initHeaderScroll = () => {
		const header = document.querySelector( '.header' );
		if ( ! header ) return;

		const checkScroll = () => {
			if ( window.scrollY > 50 ) {
				header.classList.add( 'header--scrolled' );
			} else {
				header.classList.remove( 'header--scrolled' );
			}
		};

		window.addEventListener( 'scroll', checkScroll );
		checkScroll(); // Initial check
	};

	// ==========================================
	// 7. COUNTER UP FOR STATS
	// ==========================================
	const initStatsCounter = () => {
		const statsElements = document.querySelectorAll( '.stats__value, .infl-stat-block__number' );
		if ( statsElements.length === 0 ) return;

		const startCounter = ( el ) => {
			const target = parseInt( el.getAttribute( 'data-target' ), 10 );
			const prefix = el.getAttribute( 'data-prefix' ) || '';
			const suffix = el.getAttribute( 'data-suffix' ) || '';
			const duration = 2000; // ms
			const startTime = performance.now();

			const updateCount = ( timestamp ) => {
				const elapsed = timestamp - startTime;
				const progress = Math.min( elapsed / duration, 1 );

				// Ease out quad formula
				const easeProgress = progress * ( 2 - progress );
				const currentVal = Math.floor( easeProgress * target );

				el.textContent = `${prefix}${currentVal.toLocaleString( 'es-PE' )}${suffix}`;

				if ( progress < 1 ) {
					requestAnimationFrame( updateCount );
				} else {
					el.textContent = `${prefix}${target.toLocaleString( 'es-PE' )}${suffix}`;
				}
			};

			requestAnimationFrame( updateCount );
		};

		const observer = new IntersectionObserver( ( entries ) => {
			entries.forEach( ( entry ) => {
				if ( entry.isIntersecting ) {
					const el = entry.target;
					if ( ! el.classList.contains( 'counted' ) ) {
						el.classList.add( 'counted' );
						startCounter( el );
					}
				}
			} );
		}, { threshold: 0.2 } );

		statsElements.forEach( ( el ) => observer.observe( el ) );
	};

	// Initialize all components
	initScrollReveals();
	initHeroSlider();
	initServicesSection();
	initAwardsSection();
	initExpertsSection();
	initResponsiveNav();
	initHeaderScroll();
	initStatsCounter();
} );
