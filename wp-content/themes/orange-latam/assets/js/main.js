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
	// 3. SERVICES SECTION (Corp Services)
	// ==========================================
	const initServicesSection = () => {
		const corpBtn = document.querySelector( '.services-banner__btn--corp' );
		const sensBtn = document.querySelector( '.services-banner__btn--sensible' );
		const corpView = document.querySelector( '.services-corp' );
		
		if ( sensBtn ) {
			sensBtn.addEventListener( 'click', ( e ) => {
				e.preventDefault();
				const targetSection = document.getElementById( 'asuntos-sensibles' );
				if ( targetSection ) {
					targetSection.scrollIntoView( { behavior: 'smooth', block: 'start' } );
				}
			} );
		}

		if ( ! corpBtn || ! corpView ) return;

		// Interactive Service Rows (Helper function for both tabs)
		const setupServiceRows = ( rowSelector, activeClass, watermarkSel, labelSel, titleSel, descSel, linkSel, imgSel ) => {
			const rows = document.querySelectorAll( rowSelector );
			const watermark = document.querySelector( watermarkSel );
			const detailLabel = document.querySelector( labelSel );
			const detailTitle = document.querySelector( titleSel );
			const detailDesc = document.querySelector( descSel );
			const detailLink = document.querySelector( linkSel );
			const detailImg = document.querySelector( imgSel );

			rows.forEach( ( row ) => {
				row.addEventListener( 'click', ( e ) => {
					const link = row.getAttribute( 'data-link' );
					const isArrowClick = e.target.classList.contains( 'services-corp__row-arrow' ) || e.target.closest( '.services-corp__row-arrow' );
					const isActive = row.classList.contains( activeClass );

					if ( link && ( isArrowClick || isActive ) ) {
						window.location.href = link;
						return;
					}

					rows.forEach( ( r ) => r.classList.remove( activeClass ) );
					row.classList.add( activeClass );

					const num = row.getAttribute( 'data-num' );
					const name = row.getAttribute( 'data-name' );
					const desc = row.getAttribute( 'data-desc' );
					const img = row.getAttribute( 'data-img' );

					if ( watermark ) watermark.textContent = num;
					if ( detailLabel ) detailLabel.textContent = `${num} - SERVICIO`;
					const formattedTitle = name.toUpperCase();
					if ( detailTitle ) {
						detailTitle.textContent = '';
						if ( formattedTitle.includes( 'CREATIVIDAD Y DIRECCIÓN' ) ) {
							const [ before, after ] = formattedTitle.split( 'CREATIVIDAD Y DIRECCIÓN' );
							detailTitle.appendChild( document.createTextNode( before + 'CREATIVIDAD Y' ) );
							const br = document.createElement( 'br' );
							br.className = 'u-desktop-br';
							detailTitle.appendChild( br );
							detailTitle.appendChild( document.createTextNode( 'DIRECCIÓN' + after ) );
						} else {
							detailTitle.textContent = formattedTitle;
						}
					}
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
			} );
		};

		setupServiceRows(
			'.services-corp__list > .services-corp__row:not(.services-sens__row)',
			'services-corp__row--active',
			'.services-corp > .services-corp__grid .services-corp__detail-watermark',
			'.services-corp > .services-corp__grid .services-corp__detail-label',
			'.services-corp > .services-corp__grid .services-corp__detail-title',
			'.services-corp > .services-corp__grid .services-corp__detail-desc',
			'.services-corp > .services-corp__grid .services-corp__detail-link',
			'.services-corp > .services-corp__grid .services-corp__detail-img'
		);
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
					imgBox.textContent = '';
					if ( data.thumbnail ) {
						const img = document.createElement( 'img' );
						img.className = 'experts__card-img';
						img.src = data.thumbnail;
						img.alt = data.title;
						imgBox.appendChild( img );
					} else {
						const placeholder = document.createElement( 'div' );
						placeholder.className = 'experts__card-img-placeholder';
						placeholder.textContent = 'Foto de la nota';
						imgBox.appendChild( placeholder );
					}
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
			{ 
				label: 'Estrategias integrales de RRPP', 
				icon: 'M12 3a9 9 0 1 1-6.36 2.64L3 8 M3 3v5h5 M12 8v4l3 2' 
			},
			{ 
				label: 'Gestión con medios de comunicación', 
				icon: 'M4 4h14a2 2 0 0 1 2 2v14H4V4zm0 4h16 M8 12h8 M8 16h5' 
			},
			{ 
				label: 'Posicionamiento de líderes y voceros', 
				icon: 'M4 19v-1a3 3 0 0 1 3-3 M4 9a2 2 0 1 1 0-4 2 2 0 0 1 0 4 M20 19v-1a3 3 0 0 0-3-3 M20 9a2 2 0 1 0 0-4 2 2 0 0 0 0 4 M12 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6z M7 21v-2a5 5 0 0 1 10 0v2 M12 2l.6 1.3 1.4.2-1 1 .2 1.5-1.2-.7-1.2.7.2-1.5-1-1 1.4-.2z' 
			},
			{ 
				label: 'Desarrollo de contenidos corporativos', 
				icon: 'M12 19l7-7 3 3-7 7-5 1 2-4z M18 5l3 3 M2 21h20 M6 13L3 16v3h3l3-3' 
			},
			{ 
				label: 'Comunicación ejecutiva y thought leadership', 
				icon: 'M9 18h6 M10 22h4 M12 2a7 7 0 0 0-5 11.9c.7.7 1 1.6 1 2.6v.5h8v-.5c0-1 .3-1.9 1-2.6A7 7 0 0 0 12 2z M12 6v4 M10 8h4' 
			},
			{ 
				label: 'Gestión de reputación corporativa', 
				icon: 'M12 2l8 3.5v6c0 5.5-3.5 9.5-8 10.5-4.5-1-8-5-8-10.5v-6L12 2z M12 7.5l1.1 2.3 2.5.4-1.8 1.8.4 2.5-2.2-1.2-2.2 1.2.4-2.5-1.8-1.8 2.5-.4z' 
			},
			{ 
				label: 'Monitoreo y análisis de impacto mediático', 
				icon: 'M3 3v18h18 M6 15l4-5 4 3 6-7 M18 6h3v3 M14 13a3 3 0 1 0 0-6 3 3 0 0 0 0 6z' 
			},
			{ 
				label: 'Comunicación de lanzamientos y anuncios corporativos', 
				icon: 'M12 4a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z M6 12h12 M5 12l2 9h10l2-9 M9 8l-2-2 M15 8l2-2 M9 21h6 M9 12v-2a3 3 0 0 1 6 0v2' 
			}
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

				// Create node group (free of circle container)
				const g = document.createElementNS( 'http://www.w3.org/2000/svg', 'g' );
				g.setAttribute( 'class', 'pr-services__node-group' );
				g.setAttribute( 'tabindex', '0' );
				g.setAttribute( 'role', 'button' );
				g.setAttribute( 'aria-label', service.label );
				g.setAttribute( 'transform', `translate(${x}, ${y})` );

				// Invisible interactive hit area
				const hitArea = document.createElementNS( 'http://www.w3.org/2000/svg', 'circle' );
				hitArea.setAttribute( 'cx', '0' );
				hitArea.setAttribute( 'cy', '0' );
				hitArea.setAttribute( 'r', '28' );
				hitArea.setAttribute( 'class', 'pr-services__node-hit' );

				// Free-floating SVG Icon
				const iconGroup = document.createElementNS( 'http://www.w3.org/2000/svg', 'g' );
				iconGroup.setAttribute( 'class', 'pr-services__node-icon-wrap' );
				iconGroup.setAttribute( 'transform', 'translate(-16, -16) scale(1.33)' );

				const iconPath = document.createElementNS( 'http://www.w3.org/2000/svg', 'path' );
				iconPath.setAttribute( 'd', service.icon );
				iconPath.setAttribute( 'class', 'pr-services__node-icon' );

				iconGroup.appendChild( iconPath );
				g.appendChild( hitArea );
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

	/* --------------------------------------------------------------------------
	   22. PR WHY AWARDS MINI CAROUSEL
	   -------------------------------------------------------------------------- */
	const initPrAwardsCarousel = () => {
		const carousel = document.querySelector( '.js-pr-awards-carousel' );
		if ( ! carousel ) return;

		const track = carousel.querySelector( '.js-pr-carousel-track' );
		const prevBtn = carousel.querySelector( '.js-pr-carousel-prev' );
		const nextBtn = carousel.querySelector( '.js-pr-carousel-next' );
		const dotsContainer = carousel.querySelector( '.js-pr-carousel-dots' );
		const cards = carousel.querySelectorAll( '.pr-why__award-card' );
		if ( ! track || ! cards.length ) return;

		let currentIndex = 0;
		let autoplayTimer = null;

		const getVisibleCount = () => {
			if ( window.innerWidth <= 576 ) return 2;
			if ( window.innerWidth <= 992 ) return 3;
			return 4;
		};

		const getMaxIndex = () => {
			const visible = getVisibleCount();
			return Math.max( 0, cards.length - visible );
		};

		const renderDots = () => {
			if ( ! dotsContainer ) return;
			dotsContainer.innerHTML = '';
			const max = getMaxIndex();
			for ( let i = 0; i <= max; i++ ) {
				const dot = document.createElement( 'button' );
				dot.type = 'button';
				dot.className = `pr-why__carousel-dot ${ i === currentIndex ? 'is-active' : '' }`;
				dot.setAttribute( 'aria-label', `Ir a posición ${ i + 1 }` );
				dot.addEventListener( 'click', () => {
					goToSlide( i );
					resetAutoplay();
				} );
				dotsContainer.appendChild( dot );
			}
		};

		const updateSlider = () => {
			const card = cards[0];
			if ( ! card ) return;
			const gap = 14;
			const cardWidth = card.getBoundingClientRect().width;
			const offset = currentIndex * ( cardWidth + gap );
			track.style.transform = `translateX(-${offset}px)`;

			if ( dotsContainer ) {
				const dots = dotsContainer.querySelectorAll( '.pr-why__carousel-dot' );
				dots.forEach( ( dot, idx ) => {
					dot.classList.toggle( 'is-active', idx === currentIndex );
				} );
			}
		};

		const goToSlide = ( index ) => {
			const max = getMaxIndex();
			if ( index < 0 ) {
				currentIndex = max;
			} else if ( index > max ) {
				currentIndex = 0;
			} else {
				currentIndex = index;
			}
			updateSlider();
		};

		if ( prevBtn ) {
			prevBtn.addEventListener( 'click', () => {
				goToSlide( currentIndex - 1 );
				resetAutoplay();
			} );
		}

		if ( nextBtn ) {
			nextBtn.addEventListener( 'click', () => {
				goToSlide( currentIndex + 1 );
				resetAutoplay();
			} );
		}

		// Touch swipe
		let touchStartX = 0;
		track.addEventListener( 'touchstart', ( e ) => {
			touchStartX = e.touches[0].clientX;
			stopAutoplay();
		}, { passive: true } );

		track.addEventListener( 'touchend', ( e ) => {
			const diffX = touchStartX - e.changedTouches[0].clientX;
			if ( Math.abs( diffX ) > 40 ) {
				if ( diffX > 0 ) {
					goToSlide( currentIndex + 1 );
				} else {
					goToSlide( currentIndex - 1 );
				}
			}
			startAutoplay();
		}, { passive: true } );

		const startAutoplay = () => {
			stopAutoplay();
			autoplayTimer = setInterval( () => {
				goToSlide( currentIndex + 1 );
			}, 3200 );
		};

		const stopAutoplay = () => {
			if ( autoplayTimer ) {
				clearInterval( autoplayTimer );
				autoplayTimer = null;
			}
		};

		const resetAutoplay = () => {
			stopAutoplay();
			startAutoplay();
		};

		carousel.addEventListener( 'mouseenter', stopAutoplay );
		carousel.addEventListener( 'mouseleave', startAutoplay );

		window.addEventListener( 'resize', () => {
			if ( currentIndex > getMaxIndex() ) {
				currentIndex = getMaxIndex();
			}
			renderDots();
			updateSlider();
		} );

		renderDots();
		updateSlider();
		startAutoplay();
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
	initPrAwardsCarousel();
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

	// Generic AJAX Form Submitter Helper
	const setupAjaxForm = ( formEl, submitBtnEl, responseEl, onSuccessCallback ) => {
		if ( ! formEl ) return;

		formEl.addEventListener( 'submit', ( e ) => {
			e.preventDefault();
			if ( ! window.orange_ajax || ! window.orange_ajax.ajax_url ) {
				if ( responseEl ) {
					responseEl.style.display = 'block';
					responseEl.style.background = 'rgba(239, 68, 68, 0.12)';
					responseEl.style.border = '1px solid rgba(239, 68, 68, 0.3)';
					responseEl.style.color = '#ef4444';
					responseEl.textContent = 'Error de configuración AJAX en el sitio.';
				}
				return;
			}

			const originalBtnText = submitBtnEl ? submitBtnEl.innerHTML : '';
			if ( submitBtnEl ) {
				submitBtnEl.disabled = true;
				submitBtnEl.classList.add( 'is-loading' );
				submitBtnEl.style.opacity = '0.7';
			}

			if ( responseEl ) {
				responseEl.style.display = 'none';
				responseEl.textContent = '';
			}

			const formData = new FormData( formEl );

			fetch( window.orange_ajax.ajax_url, {
				method: 'POST',
				body: formData,
			} )
				.then( ( res ) => res.json() )
				.then( ( data ) => {
					if ( submitBtnEl ) {
						submitBtnEl.disabled = false;
						submitBtnEl.classList.remove( 'is-loading' );
						submitBtnEl.style.opacity = '';
						submitBtnEl.innerHTML = originalBtnText;
					}
					if ( responseEl ) {
						responseEl.style.display = 'block';
						if ( data.success ) {
							responseEl.className = ( responseEl.className || '' ) + ' g-modal__response--success';
							responseEl.style.background = 'rgba(34, 197, 94, 0.12)';
							responseEl.style.border = '1px solid rgba(34, 197, 94, 0.35)';
							responseEl.style.color = '#22c55e';
							responseEl.textContent = data.data.message || '¡Mensaje enviado con éxito!';
							formEl.reset();
							if ( typeof onSuccessCallback === 'function' ) {
								onSuccessCallback();
							}
						} else {
							responseEl.className = ( responseEl.className || '' ) + ' g-modal__response--error';
							responseEl.style.background = 'rgba(239, 68, 68, 0.12)';
							responseEl.style.border = '1px solid rgba(239, 68, 68, 0.35)';
							responseEl.style.color = '#ef4444';
							responseEl.textContent = data.data.message || 'Error al enviar el formulario.';
						}
					}
				} )
				.catch( () => {
					if ( submitBtnEl ) {
						submitBtnEl.disabled = false;
						submitBtnEl.classList.remove( 'is-loading' );
						submitBtnEl.style.opacity = '';
						submitBtnEl.innerHTML = originalBtnText;
					}
					if ( responseEl ) {
						responseEl.style.display = 'block';
						responseEl.style.background = 'rgba(239, 68, 68, 0.12)';
						responseEl.style.border = '1px solid rgba(239, 68, 68, 0.35)';
						responseEl.style.color = '#ef4444';
						responseEl.textContent = 'Ocurrió un error de conexión con el servidor. Inténtalo de nuevo.';
					}
				} );
		} );
	};

	// 1. Setup Global Modal Form
	setupAjaxForm( form, submitBtn, responseContainer, () => {
		setTimeout( closeModal, 3500 );
	} );

	// 2. Setup Home Contact Form
	const homeForm = document.getElementById( 'home-contact-form' );
	const homeSubmit = document.getElementById( 'home-contact-submit' );
	const homeResponse = document.getElementById( 'home-contact-response' );
	if ( homeForm ) {
		setupAjaxForm( homeForm, homeSubmit, homeResponse );
	}

	// 3. Setup Podcast Booking Form
	const podcastForm = document.getElementById( 'podcast-booking-form' );
	const podcastSubmit = document.getElementById( 'podcast-form-submit' );
	const podcastResponse = document.getElementById( 'podcast-form-response' );
	if ( podcastForm ) {
		setupAjaxForm( podcastForm, podcastSubmit, podcastResponse );
	}
};

