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
		const detailImg = document.querySelector( '.services-corp__detail-img' );

		corpRows.forEach( ( row ) => {
			row.addEventListener( 'click', ( e ) => {
				const link = row.getAttribute( 'data-link' );
				const isArrowClick = e.target.classList.contains( 'services-corp__row-arrow' ) || e.target.closest( '.services-corp__row-arrow' );
				const isActive = row.classList.contains( 'services-corp__row--active' );

				if ( link && ( isArrowClick || isActive ) ) {
					window.location.href = link;
					return;
				}

				corpRows.forEach( ( r ) => r.classList.remove( 'services-corp__row--active' ) );
				row.classList.add( 'services-corp__row--active' );

				const id = row.getAttribute( 'data-id' );
				const num = row.getAttribute( 'data-num' );
				const name = row.getAttribute( 'data-name' );
				const desc = row.getAttribute( 'data-desc' );
				const img = row.getAttribute( 'data-img' );

				if ( watermark ) watermark.textContent = num;
				if ( detailLabel ) detailLabel.textContent = `${num} - SERVICIO`;
				let formattedTitle = name.toUpperCase();
				if ( formattedTitle.includes( 'CREATIVIDAD Y DIRECCIÓN' ) ) {
					formattedTitle = formattedTitle.replace( 'CREATIVIDAD Y DIRECCIÓN', 'CREATIVIDAD Y<br class="u-desktop-br">DIRECCIÓN' );
				}
				if ( detailTitle ) detailTitle.innerHTML = formattedTitle;
				if ( detailDesc ) detailDesc.textContent = desc;
				if ( detailLink ) {
					const targetUrl = ( link && link.trim() !== '' ) ? link : detailLink.getAttribute( 'data-default-href' );
					detailLink.setAttribute( 'href', targetUrl );
				}

				if ( detailImg && img ) {
					detailImg.style.transition = 'opacity 0.25s ease-in-out';
					detailImg.style.opacity = '0';
					setTimeout( () => {
						detailImg.src = img;
						detailImg.alt = name;
						detailImg.style.opacity = '1';
					}, 250 );
				}
			} );
		});

		// Interactive Sensible Services Carousel
		const sensData = [
			{ name: 'GESTIÓN DE CRISIS Y PROBLEMAS', desc: 'El valor de marca es un activo muy importante para las empresas y protegerlo del impacto de crisis y problemas que impactan en la reputación es una de las especialidades de Orange Latam. Nuestro equipo de la unidad C&P se encuentra altamente capacitado para identificar, prevenir, gestionar y mitigar crisis y problemas, aplicando metodologías innovadoras, ágiles y eficaces.', link: '/pr-gestion-reputacion/#gestion-de-crisis' },
			{ name: 'GESTIÓN DE ACCESO', desc: 'Desbloqueamos barreras para que la sociedad acceda a avances médico-científicos de manera ética, oportuna y profesional, trabajando de la mano con reguladores y actores clave del sector salud.', link: '/gestion-de-acceso/' },
			{ name: 'COMUNICACIÓN POLÍTICA', desc: 'Estrategias de comunicación para candidatos e instituciones que generan legitimidad, confianza real y compromiso ciudadano en contextos de alta exposición pública.', link: '/asuntos-publicos/#comunicacion-politica' },
			{ name: 'ASUNTOS PÚBLICOS', desc: 'Relaciones estratégicas con administraciones y reguladores para anticipar cambios jurídicos y gestionar riesgos reputacionales antes de que escalen.', link: '/asuntos-publicos/' },
			{ name: 'RELACIONAMIENTO CON STAKEHOLDERS', desc: 'Mapping y planes de relacionamiento con comunidades de alta influencia para garantizar operatividad y sostenibilidad del negocio en el largo plazo.', link: '/asuntos-publicos/#stakeholders' },
			{ name: 'COMUNICACIÓN PARA ENTIDADES DEL ESTADO', desc: 'Estrategias para que instituciones públicas construyan confianza, respeto y credibilidad sólida ante la ciudadanía.', link: '/asuntos-publicos/' }
		];

		let activeSensIdx = 0;
		const sensCard = document.querySelector( '.services-sens__card' );
		const sensWatermark = document.querySelector( '.services-sens__watermark-text' );
		const sensCardTitle = document.querySelector( '.services-sens__card-title' );
		const sensCardDesc = document.querySelector( '.services-sens__card-desc' );
		const sensCardLink = document.querySelector( '.services-sens__card-link' );
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

			if ( sensCardLink ) {
				if ( data.link ) {
					sensCardLink.href = data.link;
					sensCardLink.style.display = '';
				} else {
					sensCardLink.style.display = 'none';
				}
			}

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

	// ==========================================
	// 7b. FAQ ACCORDION
	// ==========================================
	const initFaqAccordion = () => {
		const triggers = document.querySelectorAll( '.faq__trigger' );
		if ( triggers.length === 0 ) return;

		// Items start closed by default as requested

		triggers.forEach( ( trigger ) => {
			trigger.addEventListener( 'click', () => {
				const item = trigger.closest( '.faq__item' );
				const content = item.querySelector( '.faq__content' );
				const icon = item.querySelector( '.faq__icon' );
				const isExpanded = trigger.getAttribute( 'aria-expanded' ) === 'true';

				// Close other items
				triggers.forEach( ( otherTrigger ) => {
					if ( otherTrigger !== trigger ) {
						const otherItem = otherTrigger.closest( '.faq__item' );
						const otherContent = otherItem.querySelector( '.faq__content' );
						const otherIcon = otherItem.querySelector( '.faq__icon' );
						otherTrigger.setAttribute( 'aria-expanded', 'false' );
						if ( otherIcon ) otherIcon.textContent = '+';
						if ( otherContent ) otherContent.style.maxHeight = null;
					}
				} );

				// Toggle current item
				if ( isExpanded ) {
					trigger.setAttribute( 'aria-expanded', 'false' );
					if ( icon ) icon.textContent = '+';
					if ( content ) content.style.maxHeight = null;
				} else {
					trigger.setAttribute( 'aria-expanded', 'true' );
					if ( icon ) icon.textContent = '−';
					if ( content ) content.style.maxHeight = content.scrollHeight + 'px';
				}
			} );
		} );
	};

	// ==========================================
	// 7c. INFLUENCER ADVANTAGES CAROUSEL
	// ==========================================
	const initInfluencerAdvantagesCarousel = () => {
		const wrapper = document.querySelector( '.infl-advantages__slider-wrapper' );
		if ( ! wrapper ) return;

		const prevBtn = wrapper.querySelector( '.infl-advantages__arrow--prev' );
		const nextBtn = wrapper.querySelector( '.infl-advantages__arrow--next' );
		const track = wrapper.querySelector( '.infl-advantages__track' );
		const cards = wrapper.querySelectorAll( '.infl-advantages__card' );

		if ( ! track || cards.length === 0 ) return;

		let currentIndex = 0;

		const getVisibleCardsCount = () => {
			const width = window.innerWidth;
			if ( width <= 768 ) return 1;
			if ( width <= 992 ) return 2;
			return 3;
		};

		const updateSlider = () => {
			const visibleCards = getVisibleCardsCount();
			const maxIndex = Math.max( 0, cards.length - visibleCards );
			
			// Bound current index
			if ( currentIndex > maxIndex ) currentIndex = maxIndex;
			if ( currentIndex < 0 ) currentIndex = 0;

			// Calculate translation
			const card = cards[0];
			const cardWidth = card.getBoundingClientRect().width;
			const gap = 20; // from CSS gap: 20px
			const translation = currentIndex * ( cardWidth + gap );

			track.style.transform = `translateX(-${translation}px)`;

			// Update arrow highlights to match mockup
			if ( currentIndex === 0 ) {
				prevBtn.classList.remove( 'infl-advantages__arrow--active' );
			} else {
				prevBtn.classList.add( 'infl-advantages__arrow--active' );
			}

			if ( currentIndex === maxIndex ) {
				nextBtn.classList.remove( 'infl-advantages__arrow--active' );
			} else {
				nextBtn.classList.add( 'infl-advantages__arrow--active' );
			}
		};

		prevBtn.addEventListener( 'click', () => {
			if ( currentIndex > 0 ) {
				currentIndex--;
				updateSlider();
			}
		} );

		nextBtn.addEventListener( 'click', () => {
			const visibleCards = getVisibleCardsCount();
			const maxIndex = cards.length - visibleCards;
			if ( currentIndex < maxIndex ) {
				currentIndex++;
				updateSlider();
			}
		} );

		// Recalculate on resize
		window.addEventListener( 'resize', updateSlider );
		
		// Initial layout setup
		setTimeout( updateSlider, 100 );
	};

	// ==========================================
	// 7d. INFLUENCER SELECTION SLIDER
	// ==========================================
	const initInfluencerSelectionSlider = () => {
		const wrapper = document.querySelector( '.infl-selection__slider-wrapper' );
		if ( ! wrapper ) return;

		const prevBtn = wrapper.querySelector( '.infl-selection__arrow--prev' );
		const nextBtn = wrapper.querySelector( '.infl-selection__arrow--next' );
		const track = wrapper.querySelector( '.infl-selection__track' );
		const slides = wrapper.querySelectorAll( '.infl-selection__slide' );

		if ( ! track || slides.length === 0 ) return;

		let currentIndex = 0;

		const updateSlider = () => {
			const maxIndex = slides.length - 1;
			if ( currentIndex > maxIndex ) currentIndex = maxIndex;
			if ( currentIndex < 0 ) currentIndex = 0;

			// Slide width is 100%, so translate by index * 100 %
			track.style.transform = `translateX(-${currentIndex * 100}%)`;

			// Active arrow status
			if ( currentIndex === 0 ) {
				prevBtn.classList.remove( 'infl-selection__arrow--active' );
			} else {
				prevBtn.classList.add( 'infl-selection__arrow--active' );
			}

			if ( currentIndex === maxIndex ) {
				nextBtn.classList.remove( 'infl-selection__arrow--active' );
			} else {
				nextBtn.classList.add( 'infl-selection__arrow--active' );
			}
		};

		prevBtn.addEventListener( 'click', () => {
			if ( currentIndex > 0 ) {
				currentIndex--;
				updateSlider();
			}
		} );

		nextBtn.addEventListener( 'click', () => {
			if ( currentIndex < slides.length - 1 ) {
				currentIndex++;
				updateSlider();
			}
		} );

		updateSlider();
	};

	// ==========================================
	// 12. INFLUENCER INCLUDES SLIDER
	// ==========================================
	const initInfluencerIncludesSlider = () => {
		const slider = document.querySelector( '.infl-includes__slider' );
		if ( ! slider ) return;

		const slides = slider.querySelectorAll( '.infl-includes__slide' );
		const prevBtn = document.querySelector( '.infl-includes__arrow--prev' );
		const nextBtn = document.querySelector( '.infl-includes__arrow--next' );
		if ( slides.length === 0 ) return;

		let currentIndex = 0;

		const updateSlider = ( newIndex ) => {
			slides[ currentIndex ].classList.remove( 'active' );
			currentIndex = newIndex;
			slides[ currentIndex ].classList.add( 'active' );
		};

		if ( prevBtn ) {
			prevBtn.addEventListener( 'click', () => {
				const newIndex = ( currentIndex - 1 + slides.length ) % slides.length;
				updateSlider( newIndex );
			} );
		}

		if ( nextBtn ) {
			nextBtn.addEventListener( 'click', () => {
				const newIndex = ( currentIndex + 1 ) % slides.length;
				updateSlider( newIndex );
			} );
		}
	};

	// ==========================================
	// 13. INFLUENCER TYPES SLIDER
	// ==========================================
	const initInfluencerTypesSlider = () => {
		const slider = document.querySelector( '.infl-types__slider' );
		if ( ! slider ) return;

		const slides = slider.querySelectorAll( '.infl-types__slide' );
		const prevBtn = document.querySelector( '.infl-types__arrow--prev' );
		const nextBtn = document.querySelector( '.infl-types__arrow--next' );
		if ( slides.length === 0 ) return;

		let currentIndex = 0;

		const updateSlider = ( newIndex ) => {
			slides[ currentIndex ].classList.remove( 'active' );
			currentIndex = newIndex;
			slides[ currentIndex ].classList.add( 'active' );
		};

		if ( prevBtn ) {
			prevBtn.addEventListener( 'click', () => {
				const newIndex = ( currentIndex - 1 + slides.length ) % slides.length;
				updateSlider( newIndex );
			} );
		}

		if ( nextBtn ) {
			nextBtn.addEventListener( 'click', () => {
				const newIndex = ( currentIndex + 1 ) % slides.length;
				updateSlider( newIndex );
			} );
		}
	};

	// ==========================================
	// 14. INFLUENCER HORIZONTAL FAQ ACCORDION
	// ==========================================
	const initInfluencerFaqHAccordion = () => {
		const panels = document.querySelectorAll( '.infl-faq-h__panel' );
		if ( panels.length === 0 ) return;

		panels.forEach( ( panel ) => {
			panel.addEventListener( 'click', () => {
				const isActive = panel.classList.contains( 'active' );
				panels.forEach( ( p ) => p.classList.remove( 'active' ) );
				if ( ! isActive ) {
					panel.classList.add( 'active' );
				}
			} );
		} );
	};

	// ==========================================
	// 15. VIDEO MODAL (CASOS DE ÉXITO)
	// ==========================================
	const initVideoModal = () => {
		const modal = document.querySelector( '.js-video-modal' );
		const triggers = document.querySelectorAll( '.js-video-modal-trigger' );
		const closeBtns = document.querySelectorAll( '.js-video-modal-close' );
		const iframe = document.querySelector( '.js-video-modal-iframe' );

		if ( !modal || !iframe ) return;

		const getEmbedUrl = ( url ) => {
			let embedUrl = url;
			if ( url.includes( 'youtube.com/shorts/' ) ) {
				const id = url.split( 'shorts/' )[1].split( '?' )[0];
				embedUrl = `https://www.youtube.com/embed/${id}?autoplay=1`;
			} else if ( url.includes( 'youtu.be/' ) ) {
				const id = url.split( 'youtu.be/' )[1].split( '?' )[0];
				embedUrl = `https://www.youtube.com/embed/${id}?autoplay=1`;
			} else if ( url.includes( 'watch?v=' ) ) {
				const id = url.split( 'watch?v=' )[1].split( '&' )[0];
				embedUrl = `https://www.youtube.com/embed/${id}?autoplay=1`;
			}
			return embedUrl;
		};

		triggers.forEach( ( trigger ) => {
			trigger.addEventListener( 'click', ( e ) => {
				e.preventDefault();
				const videoUrl = trigger.getAttribute( 'data-video-url' );
				if ( videoUrl ) {
					iframe.src = getEmbedUrl( videoUrl );
					modal.classList.add( 'is-active' );
				}
			} );
		} );

		closeBtns.forEach( ( btn ) => {
			btn.addEventListener( 'click', () => {
				modal.classList.remove( 'is-active' );
				iframe.src = '';
			} );
		} );

		// Cierra el modal con la tecla ESC
		document.addEventListener( 'keydown', ( e ) => {
			if ( e.key === 'Escape' && modal.classList.contains( 'is-active' ) ) {
				modal.classList.remove( 'is-active' );
				iframe.src = '';
			}
		} );
	};

	// ==========================================
	// 15. DIFERENCIALES ACCORDION
	// ==========================================
	const initInflDiffAccordion = () => {
		const headers = document.querySelectorAll( '.js-infl-diff-header' );

		headers.forEach( header => {
			header.addEventListener( 'click', () => {
				const item = header.closest( '.js-infl-diff-item' );
				const icon = header.querySelector( '.infl-diff-item__icon' );
				
				if ( item.classList.contains( 'is-active' ) ) {
					item.classList.remove( 'is-active' );
					if (icon) icon.textContent = '+';
				} else {
					// Close others
					document.querySelectorAll( '.js-infl-diff-item.is-active' ).forEach( activeItem => {
						activeItem.classList.remove( 'is-active' );
						const activeIcon = activeItem.querySelector( '.infl-diff-item__icon' );
						if (activeIcon) activeIcon.textContent = '+';
					} );
					
					// Open this
					item.classList.add( 'is-active' );
					if (icon) icon.textContent = '-';
				}
			} );
		} );
	};

	// ==========================================
	// 16. DIGITAL ADS SLIDER
	// ==========================================
	const initDigAdsSlider = () => {
		const container = document.querySelector( '.dig-ads__slider-outer' );
		if ( !container ) return;

		const slides = container.querySelectorAll( '.dig-ads__slide' );
		const prevBtn = container.querySelector( '.dig-ads__arrow--prev' );
		const nextBtn = container.querySelector( '.dig-ads__arrow--next' );
		
		if ( !slides.length ) return;
		
		let currentIndex = 0;
		
		const showSlide = ( index ) => {
			slides.forEach( ( slide, i ) => {
				if ( i === index ) {
					slide.classList.add( 'active' );
				} else {
					slide.classList.remove( 'active' );
				}
			} );
		};

		if (prevBtn) {
			prevBtn.addEventListener( 'click', () => {
				currentIndex = ( currentIndex - 1 + slides.length ) % slides.length;
				showSlide( currentIndex );
			} );
		}

		if (nextBtn) {
			nextBtn.addEventListener( 'click', () => {
				currentIndex = ( currentIndex + 1 ) % slides.length;
				showSlide( currentIndex );
			} );
		}
	};

	// ==========================================
	// 17. SECTORS AUTOPLAY / AUTO-HOVER
	// ==========================================
	const initSectorsAutoplay = () => {
		const badges = document.querySelectorAll( '.sectors__badge' );
		if ( badges.length === 0 ) return;

		let currentIndex = 0;
		let intervalId = null;
		let resumeTimeoutId = null;

		const startAutoplay = () => {
			stopAutoplay();
			intervalId = setInterval( () => {
				// Quitar clase del actual
				badges[currentIndex].classList.remove( 'sectors__badge--active' );
				
				// Siguiente de forma circular
				currentIndex = ( currentIndex + 1 ) % badges.length;
				
				// Agregar clase al nuevo
				badges[currentIndex].classList.add( 'sectors__badge--active' );
			}, 1500 );
		};

		const stopAutoplay = () => {
			if ( intervalId ) {
				clearInterval( intervalId );
				intervalId = null;
			}
		};

		// Iniciar el primer badge
		badges[currentIndex].classList.add( 'sectors__badge--active' );

		// Eventos para interactividad manual
		badges.forEach( ( badge, idx ) => {
			badge.addEventListener( 'mouseenter', () => {
				stopAutoplay();
				if ( resumeTimeoutId ) {
					clearTimeout( resumeTimeoutId );
					resumeTimeoutId = null;
				}
				badges.forEach( b => b.classList.remove( 'sectors__badge--active' ) );
			} );

			badge.addEventListener( 'mouseleave', () => {
				if ( resumeTimeoutId ) clearTimeout( resumeTimeoutId );
				resumeTimeoutId = setTimeout( () => {
					currentIndex = idx;
					badges[currentIndex].classList.add( 'sectors__badge--active' );
					startAutoplay();
				}, 2500 );
			} );
		} );

		startAutoplay();
	};

	// ==========================================
	// 18. PODCAST PAGE SCENARIOS CAROUSEL
	// ==========================================
	const initPodcastCarousel = () => {
		const container = document.querySelector( '.podcast-carousel' );
		if ( ! container ) return;

		const slides = Array.from( container.querySelectorAll( '.podcast-carousel__slide' ) );
		const prevBtn = container.querySelector( '.podcast-carousel__arrow--prev' );
		const nextBtn = container.querySelector( '.podcast-carousel__arrow--next' );

		if ( slides.length < 3 ) return;

		let centerIndex = 0; // 0: The Podcast Loft, 1: Urban Corner, 2: Estudio Noir

		const updatePositions = () => {
			slides.forEach( ( slide, idx ) => {
				slide.classList.remove( 'podcast-carousel__slide--left', 'podcast-carousel__slide--center', 'podcast-carousel__slide--right' );
				
				const n = slides.length;
				const diff = ( idx - centerIndex + n ) % n;

				if ( diff === 0 ) {
					slide.classList.add( 'podcast-carousel__slide--center' );
				} else if ( diff === 1 ) {
					slide.classList.add( 'podcast-carousel__slide--right' );
				} else {
					slide.classList.add( 'podcast-carousel__slide--left' );
				}
			} );
		};

		if ( prevBtn ) {
			prevBtn.addEventListener( 'click', ( e ) => {
				e.preventDefault();
				centerIndex = ( centerIndex - 1 + slides.length ) % slides.length;
				updatePositions();
			} );
		}

		if ( nextBtn ) {
			nextBtn.addEventListener( 'click', ( e ) => {
				e.preventDefault();
				centerIndex = ( centerIndex + 1 ) % slides.length;
				updatePositions();
			} );
		}

		slides.forEach( ( slide, idx ) => {
			slide.addEventListener( 'click', () => {
				centerIndex = idx;
				updatePositions();
			} );
		} );

		updatePositions();
	};

	// ==========================================
	// 19. PODCAST PAGE INTERACTIVE TABS
	// ==========================================
	const initPodcastTabs = () => {
		const tabs = document.querySelectorAll( '.podcast-tabs__btn' );
		if ( ! tabs.length ) return;

		tabs.forEach( ( btn ) => {
			btn.addEventListener( 'click', () => {
				const targetTab = btn.getAttribute( 'data-tab' );
				if ( ! targetTab ) return;

				tabs.forEach( ( b ) => b.classList.remove( 'podcast-tabs__btn--active' ) );
				btn.classList.add( 'podcast-tabs__btn--active' );

				const panes = document.querySelectorAll( '.podcast-included__pane' );
				panes.forEach( ( pane ) => {
					pane.classList.remove( 'podcast-included__pane--active' );
					if ( pane.id === `tab-${targetTab}` ) {
						// Trigger reflow to restart slide-up keyframe animation
						void pane.offsetWidth;
						pane.classList.add( 'podcast-included__pane--active' );
					}
				} );
			} );
		} );
	};

	// ==========================================
	// 20. PODCAST PAGE SCENARIO MODAL
	// ==========================================
	const initPodcastScenarioModal = () => {
		const modal = document.querySelector( '.js-podcast-modal' );
		if ( ! modal ) return;

		const modalTitle = modal.querySelector( '.js-podcast-modal-title' );
		const modalDesc = modal.querySelector( '.js-podcast-modal-desc' );
		const modalBg = modal.querySelector( '.js-podcast-modal-bg' );
		const closeBtns = modal.querySelectorAll( '.js-podcast-modal-close' );
		const openBtns = document.querySelectorAll( '.js-scenario-modal-open' );
		const slides = document.querySelectorAll( '.podcast-carousel__slide' );

		const openModal = ( slide ) => {
			if ( ! slide ) return;
			const title = slide.getAttribute( 'data-scenario-title' ) || '';
			const desc = slide.getAttribute( 'data-scenario-desc' ) || '';
			const img = slide.getAttribute( 'data-scenario-img' ) || '';

			if ( modalTitle ) modalTitle.textContent = title;
			if ( modalDesc ) modalDesc.textContent = desc;
			if ( modalBg && img ) {
				modalBg.style.backgroundImage = `url('${img}')`;
			}

			modal.classList.add( 'is-active' );
			modal.setAttribute( 'aria-hidden', 'false' );
			document.body.style.overflow = 'hidden';
		};

		const closeModal = () => {
			modal.classList.remove( 'is-active' );
			modal.setAttribute( 'aria-hidden', 'true' );
			document.body.style.overflow = '';
		};

		openBtns.forEach( ( btn ) => {
			btn.addEventListener( 'click', ( e ) => {
				e.preventDefault();
				e.stopPropagation();
				const slide = btn.closest( '.podcast-carousel__slide' );
				openModal( slide );
			} );
		} );

		slides.forEach( ( slide ) => {
			slide.addEventListener( 'click', ( e ) => {
				// Open modal if user clicks on the center active slide card
				if ( slide.classList.contains( 'podcast-carousel__slide--center' ) && ! e.target.classList.contains( 'podcast-carousel__arrow' ) ) {
					openModal( slide );
				}
			} );
		} );

		closeBtns.forEach( ( btn ) => {
			btn.addEventListener( 'click', ( e ) => {
				e.preventDefault();
				closeModal();
			} );
		} );

		document.addEventListener( 'keydown', ( e ) => {
			if ( e.key === 'Escape' && modal.classList.contains( 'is-active' ) ) {
				closeModal();
			}
		} );
	};

	/* ==========================================================================
	   PR & REPUTACIÓN: DIAGRAMA RADIAL DE NODOS & ACCORDION
	   ========================================================================== */
	const initPrNodeDiagram = () => {
		const container = document.getElementById( 'js-pr-node-container' );
		if ( ! container ) return;

		const svgConnectors = document.getElementById( 'js-pr-connectors' );
		const svgNodes = document.getElementById( 'js-pr-nodes' );
		const tooltip = document.getElementById( 'js-pr-tooltip' );
		const tooltipText = document.getElementById( 'js-pr-tooltip-text' );
		const mobileRows = document.querySelectorAll( '.js-pr-node-row' );

		const prServices = [
			{ label: 'Estrategias integrales de RRPP', icon: 'M3 10v4h3l5 4V6l-5 4H3z M15.5 8.5c1.2 1.2 1.2 5.8 0 7 M18.5 6.5c2.5 2.5 2.5 8.5 0 11' },
			{ label: 'Gestión con medios de comunicación', icon: 'M4 4h13v16H4z M17 8h3v9a2 2 0 01-2 2h-1V8z M7 8h7 M7 11.5h7 M7 15h4' },
			{ label: 'Posicionamiento de líderes y voceros', icon: 'M12 3a3 3 0 013 3v6a3 3 0 01-6 0V6a3 3 0 013-3z M6 11a6 6 0 0012 0 M12 17v4 M9 21h6' },
			{ label: 'Desarrollo de contenidos corporativos', icon: 'M6 3h8l5 5v13H6z M14 3v5h5 M9 15l6-6 2 2-6 6H9v-2z' },
			{ label: 'Comunicación ejecutiva y thought leadership', icon: 'M4 21h16 M6 21V11h12v10 M9 11V7a3 3 0 016 0v4' },
			{ label: 'Gestión de reputación corporativa', icon: 'M12 3l7 3v6c0 5-3 8-7 9-4-1-7-4-7-9V6z M9 12l2 2 4-4' },
			{ label: 'Monitoreo y análisis de impacto mediático', icon: 'M3 20h18 M6 20v-6 M11 20v-9 M16 20v-4' },
			{ label: 'Comunicación de lanzamientos y anuncios corporativos', icon: 'M12 3a2 2 0 100 4 2 2 0 000-4z M8 10a4 4 0 018 0 M5 11h14 M7 11l1 10h8l1-10 M14 11v-3a1 1 0 00-2 0 M17 4.5a2.5 2.5 0 010 3.5' }
		];

		const cx = 450, cy = 310, rx = 340, ry = 220;
		const nodeElements = [];
		const connectorElements = [];
		let activeIndex = null;
		let autoplayTimer = null;
		let isUserHovering = false;
		let autoIndex = 0;

		const updateActiveState = ( index ) => {
			activeIndex = index;
			nodeElements.forEach( ( g, i ) => {
				const isSelected = i === activeIndex;
				const isDimmed = activeIndex !== null && ! isSelected;

				if ( isSelected ) {
					g.classList.add( 'is-active' );
					g.classList.remove( 'is-dimmed' );
					if ( connectorElements[i] ) connectorElements[i].classList.add( 'is-active' );
				} else {
					g.classList.remove( 'is-active' );
					if ( isDimmed ) {
						g.classList.add( 'is-dimmed' );
					} else {
						g.classList.remove( 'is-dimmed' );
					}
					if ( connectorElements[i] ) connectorElements[i].classList.remove( 'is-active' );
				}
			} );

			mobileRows.forEach( ( row, i ) => {
				if ( i === activeIndex ) {
					row.classList.add( 'is-active' );
				} else {
					row.classList.remove( 'is-active' );
				}
			} );

			if ( activeIndex !== null && prServices[activeIndex] && tooltip && tooltipText ) {
				const item = prServices[activeIndex];
				const angle = -Math.PI / 2 + activeIndex * ( ( 2 * Math.PI ) / prServices.length );
				const x = cx + rx * Math.cos( angle );
				const y = cy + ry * Math.sin( angle );

				tooltipText.textContent = item.label;
				tooltip.style.left = `${( x / 900 ) * 100}%`;
				tooltip.style.top = `${( ( y - 44 ) / 620 ) * 100}%`;
				tooltip.classList.add( 'is-visible' );
			} else if ( tooltip ) {
				tooltip.classList.remove( 'is-visible' );
			}
		};

		const startAutoplay = () => {
			stopAutoplay();
			autoplayTimer = setInterval( () => {
				if ( isUserHovering ) return;
				updateActiveState( autoIndex );
				autoIndex = ( autoIndex + 1 ) % prServices.length;
			}, 2500 );
		};

		const stopAutoplay = () => {
			if ( autoplayTimer ) {
				clearInterval( autoplayTimer );
				autoplayTimer = null;
			}
		};

		container.addEventListener( 'mouseenter', () => {
			isUserHovering = true;
			stopAutoplay();
		} );

		container.addEventListener( 'mouseleave', () => {
			isUserHovering = false;
			updateActiveState( null );
			startAutoplay();
		} );

		if ( svgConnectors && svgNodes ) {
			prServices.forEach( ( service, i ) => {
				const angle = -Math.PI / 2 + i * ( ( 2 * Math.PI ) / prServices.length );
				const x = cx + rx * Math.cos( angle );
				const y = cy + ry * Math.sin( angle );
				const ctrlX = cx + ( rx * 0.55 ) * Math.cos( angle );
				const ctrlY = cy + ( ry * 0.55 ) * Math.sin( angle ) - 20;

				// Create connector curve
				const path = document.createElementNS( 'http://www.w3.org/2000/svg', 'path' );
				path.setAttribute( 'd', `M ${cx} ${cy} Q ${ctrlX} ${ctrlY} ${x} ${y}` );
				path.setAttribute( 'class', 'pr-services__connector-path' );
				svgConnectors.appendChild( path );
				connectorElements.push( path );

				// Create node group
				const g = document.createElementNS( 'http://www.w3.org/2000/svg', 'g' );
				g.setAttribute( 'class', 'pr-services__node-group' );
				g.setAttribute( 'tabindex', '0' );
				g.setAttribute( 'role', 'button' );
				g.setAttribute( 'aria-label', service.label );

				const circle = document.createElementNS( 'http://www.w3.org/2000/svg', 'circle' );
				circle.setAttribute( 'cx', x );
				circle.setAttribute( 'cy', y );
				circle.setAttribute( 'r', '32' );
				circle.setAttribute( 'class', 'pr-services__node-circle' );

				const iconGroup = document.createElementNS( 'http://www.w3.org/2000/svg', 'g' );
				iconGroup.setAttribute( 'transform', `translate(${x - 12}, ${y - 12})` );

				const iconPath = document.createElementNS( 'http://www.w3.org/2000/svg', 'path' );
				iconPath.setAttribute( 'd', service.icon );
				iconPath.setAttribute( 'class', 'pr-services__node-icon' );

				iconGroup.appendChild( iconPath );
				g.appendChild( circle );
				g.appendChild( iconGroup );
				svgNodes.appendChild( g );
				nodeElements.push( g );

				g.addEventListener( 'mouseenter', () => {
					isUserHovering = true;
					stopAutoplay();
					updateActiveState( i );
				} );
				g.addEventListener( 'click', () => {
					isUserHovering = true;
					stopAutoplay();
					autoIndex = ( i + 1 ) % prServices.length;
					updateActiveState( i );
				} );
			} );
		}

		mobileRows.forEach( ( row ) => {
			row.addEventListener( 'click', () => {
				const idx = parseInt( row.getAttribute( 'data-node-index' ), 10 );
				isUserHovering = true;
				stopAutoplay();
				autoIndex = ( idx + 1 ) % prServices.length;
				updateActiveState( activeIndex === idx ? null : idx );
			} );
		} );

		if ( 'IntersectionObserver' in window ) {
			const observer = new IntersectionObserver( ( entries ) => {
				entries.forEach( ( entry ) => {
					if ( entry.isIntersecting ) {
						startAutoplay();
					} else {
						stopAutoplay();
					}
				} );
			}, { threshold: 0.15 } );
			observer.observe( container );
		} else {
			startAutoplay();
		}
	};

	const initPrFaqAccordion = () => {
		const toggles = document.querySelectorAll( '.js-pr-faq-toggle' );
		toggles.forEach( ( btn ) => {
			btn.addEventListener( 'click', ( e ) => {
				e.preventDefault();
				const item = btn.closest( '.js-pr-faq-item' );
				if ( ! item ) return;

				const isOpen = item.classList.contains( 'pr-faq__item--open' );
				
				// Close all other items
				document.querySelectorAll( '.js-pr-faq-item' ).forEach( ( other ) => {
					other.classList.remove( 'pr-faq__item--open' );
					const otherBtn = other.querySelector( '.js-pr-faq-toggle' );
					if ( otherBtn ) otherBtn.setAttribute( 'aria-expanded', 'false' );
				} );

				if ( ! isOpen ) {
					item.classList.add( 'pr-faq__item--open' );
					btn.setAttribute( 'aria-expanded', 'true' );
				}
			} );
		} );
	};

	const initAsuntosStakeholderNetwork = () => {
		const container = document.getElementById( 'js-asuntos-network-container' );
		if ( ! container ) return;

		const nodes = container.querySelectorAll( '.js-ap-node' );
		const lines = container.querySelectorAll( '.ap-network__line' );
		const tooltip = document.getElementById( 'js-ap-tooltip' );
		const tooltipText = document.getElementById( 'js-ap-tooltip-text' );

		nodes.forEach( ( node, index ) => {
			node.addEventListener( 'mouseenter', () => {
				nodes.forEach( ( n ) => n.classList.remove( 'is-active' ) );
				lines.forEach( ( l ) => l.classList.remove( 'is-active' ) );

				node.classList.add( 'is-active' );
				if ( lines[ index ] ) {
					lines[ index ].classList.add( 'is-active' );
				}

				const label = node.getAttribute( 'data-node-label' );
				if ( tooltipText && label ) {
					tooltipText.textContent = label;
				}
				if ( tooltip ) {
					tooltip.classList.add( 'is-visible' );
				}
			} );

			node.addEventListener( 'mouseleave', () => {
				node.classList.remove( 'is-active' );
				if ( lines[ index ] ) {
					lines[ index ].classList.remove( 'is-active' );
				}
				if ( tooltip ) {
					tooltip.classList.remove( 'is-visible' );
				}
			} );
		} );
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
	initFaqAccordion();
	initInflDiffAccordion();
	initInfluencerAdvantagesCarousel();
	initInfluencerSelectionSlider();
	initInfluencerIncludesSlider();
	initInfluencerTypesSlider();
	initInfluencerFaqHAccordion();
	initVideoModal();
	initDigAdsSlider();
	initSectorsAutoplay();
	initPodcastCarousel();
	initPodcastTabs();
	initPodcastScenarioModal();
	initPrNodeDiagram();
	initPrFaqAccordion();
	initAsuntosStakeholderNetwork();
	initGlobalContactModal();
} );

/* --------------------------------------------------------------------------
   GLOBAL SERVICE CONTACT MODAL (AJAX & DYNAMIC SUBJECT)
   -------------------------------------------------------------------------- */
const initGlobalContactModal = () => {
	const modal = document.getElementById( 'global-contact-modal' );
	if ( ! modal ) return;

	const form = document.getElementById( 'g-modal-form' );
	const serviceTag = document.getElementById( 'g-modal-service-tag' );
	const serviceOriginInput = document.getElementById( 'g-modal-service-origin' );
	const responseContainer = document.getElementById( 'g-modal-response' );
	const submitBtn = document.getElementById( 'g-modal-submit-btn' );

	const openModal = ( serviceName, customMessage ) => {
		if ( serviceName ) {
			if ( serviceTag ) serviceTag.textContent = `Cotización: ${serviceName}`;
			if ( serviceOriginInput ) serviceOriginInput.value = serviceName;
		}
		const messageInput = document.getElementById( 'contact_message' );
		if ( messageInput && typeof customMessage === 'string' ) {
			messageInput.value = customMessage;
		}
		modal.classList.add( 'is-open' );
		modal.setAttribute( 'aria-hidden', 'false' );
		document.body.style.overflow = 'hidden';
	};

	const closeModal = () => {
		modal.classList.remove( 'is-open' );
		modal.setAttribute( 'aria-hidden', 'true' );
		document.body.style.overflow = '';
		if ( responseContainer ) {
			responseContainer.className = 'g-modal__response';
			responseContainer.textContent = '';
		}
	};

	// Delegate open click ONLY on buttons explicitly designated with .open-contact-modal
	document.addEventListener( 'click', ( e ) => {
		const trigger = e.target.closest( '.open-contact-modal' );
		if ( trigger ) {
			e.preventDefault();
			const customService = trigger.getAttribute( 'data-service' ) || document.title.split( '|' )[0].trim();
			const customMessage = trigger.getAttribute( 'data-message' );
			openModal( customService, customMessage );
		}
	} );

	// Close handlers
	modal.querySelectorAll( '[data-close-modal]' ).forEach( ( btn ) => {
		btn.addEventListener( 'click', closeModal );
	} );

	document.addEventListener( 'keydown', ( e ) => {
		if ( e.key === 'Escape' && modal.classList.contains( 'is-open' ) ) {
			closeModal();
		}
	} );

	// AJAX Form Submission
	if ( form ) {
		form.addEventListener( 'submit', ( e ) => {
			e.preventDefault();
			if ( ! window.orange_ajax || ! window.orange_ajax.ajax_url ) {
				if ( responseContainer ) {
					responseContainer.className = 'g-modal__response g-modal__response--error';
					responseContainer.textContent = 'Error de configuración AJAX.';
				}
				return;
			}

			if ( submitBtn ) {
				submitBtn.disabled = true;
				submitBtn.classList.add( 'is-loading' );
			}

			const formData = new FormData( form );

			fetch( window.orange_ajax.ajax_url, {
				method: 'POST',
				body: formData,
			} )
				.then( ( res ) => res.json() )
				.then( ( data ) => {
					if ( submitBtn ) {
						submitBtn.disabled = false;
						submitBtn.classList.remove( 'is-loading' );
					}
					if ( responseContainer ) {
						if ( data.success ) {
							responseContainer.className = 'g-modal__response g-modal__response--success';
							responseContainer.textContent = data.data.message || '¡Mensaje enviado con éxito!';
							form.reset();
							setTimeout( closeModal, 3500 );
						} else {
							responseContainer.className = 'g-modal__response g-modal__response--error';
							responseContainer.textContent = data.data.message || 'Error al enviar el formulario.';
						}
					}
				} )
				.catch( () => {
					if ( submitBtn ) {
						submitBtn.disabled = false;
						submitBtn.classList.remove( 'is-loading' );
					}
					if ( responseContainer ) {
						responseContainer.className = 'g-modal__response g-modal__response--error';
						responseContainer.textContent = 'Ocurrió un error inesperado al conectar con el servidor.';
					}
				} );
		} );
	}
};
