  # 06_TASKS.md — Backlog Activo

## Sprint 1: Cimiento del Tema & Auto-configuración
- [x] Documentar especificaciones del tema (PRD, SDD, SYSTEM_SPEC, ARCHITECTURE)
- [/] Diseñar e implementar plan de la primera vista (Home/Landing)
- [x] Crear estructura base del tema `orange-latam` en `wp-content/themes/`
- [x] Implementar metadatos en `style.css` de WordPress
- [x] Implementar la clase de auto-inicialización en la activación del tema (`after_switch_theme`)
- [x] Añadir favicon (`favico.webp`) al core del tema


## Sprint 2: Maquetado y UI de la Home (Primera Vista)
- [x] Aplicar tipografías del PDF (PP Editorial New y PP Neue Montreal) a todas las secciones del sitio
- [x] Crear cabecera (`header.php`) y pie de página (`footer.php`)
- [x] Implementar el Hero Slider con transiciones CSS y autoplay
- [ ] Implementar la barra de estadísticas (Stats Bar)
- [ ] Crear sección Nosotros (Misión/Visión)
- [x] Implementar la sección Interactiva de Servicios (Corporativo vs Asuntos Sensibles) con Vanilla JS
  - [x] Crear una imagen única e ilustrativa en el core del tema para cada uno de los 12 servicios corporativos
  - [x] Adaptar index.php y main.js para cargar y alternar dinámicamente las imágenes de servicios corporativos
- [ ] Integrar el slider de Premios/Festivales y el grid de Sectores
- [ ] Integrar la sección Voz de Expertos y Formulario de Contacto nativo
- [x] Crear sección de Preguntas Frecuentes (FAQ) después de Voz de Expertos (basado en diseño de acordeón)


## Sprint 3: Optimización y Pruebas
- [x] Refinar animaciones de Scroll (Reveal) mediante `IntersectionObserver`
- [x] Optimizar diseño responsive en móviles (Header, Stats 2x2 grid, Servicios 1-col layout, Sectores pills, Voz de Expertos grid, Formulario)
- [x] Auditar accesibilidad (A11y), responsive y tiempos de carga
- [ ] Documentar despliegue y cierre de sesión

## Sprint 4: Blog & Páginas de Servicio
- [x] Menú "Inicio / Blog" para navegación fuera del landing (blog index, artículo individual)
- [x] Botones de compartir artículo (WhatsApp, Facebook, Twitter, LinkedIn, Telegram, Email) en `single.php`
- [x] Menú responsive (hamburguesa) en `header.php`
- [x] Video en el Hero Slider (`assets/videos/`)
- [x] Sección "Voz de Expertos" del home conectada a posts reales (etiqueta `voz-de-expertos`)
- [x] Página `marketing-de-influencers`: creación automática de página + template dedicado (`page-marketing-de-influencers.php`), copia fiel del contenido de referencia (`design/asset/marketing-influencer.png`)
- [x] Cargar recursos visuales reales (imágenes/fotos) de la página `marketing-de-influencers` (cargados favicon, chica_foto, beneficios, estrategia, y los 4 pilares de selección)
- [ ] Confirmar con el cliente si el menú "Inicio / Blog" debe incluir un tercer enlace a `marketing-de-influencers` u otras páginas de servicio futuras
- [x] Página `marketing-digital` (completada, referencia: `design/asset/marketing-digital.png`) — página distinta, no mezclar contenido con `marketing-de-influencers`
- [x] Enlace de la fila "02 Marketing de Influencers" en `services-corp` (home) hacia `/marketing-de-influencers/`, wireado vía `data-link` + JS
- [x] Menú propio de `marketing-de-influencers` (theme location `influencers`), auto-creado/auto-asignado en `class-theme-setup.php` para activarse solo al desplegar el tema
- [x] Hero de `marketing-de-influencers` reconstruido como video full-bleed (`assets/videos/marketing-de-influencers-hero.mp4`) with título superpuesto, scrim de header y ajustes de legibilidad
- [x] Crear plantilla dedicada `page-podcast.php` para Orange Studio Podcast con hero video de YouTube (`xkt_vSw_FK8`), grilla de 4 características, bloque de entregables, slider interactivo de escenarios (The Podcast Loft, Urban Corner, Estudio Noir) y formulario de reservación.
- [x] Crear página `pr-gestion-reputacion` y plantilla `page-pr-gestion-reputacion.php` con grilla de premios oficiales, diagrama orbital SVG y acordión interactivo FAQ.
- [x] Crear página `asuntos-publicos` y plantilla `page-asuntos-publicos.php` con 5 secciones exactas, metadatos SEO/Schema, paleta oficial (acento Naranja #ee894f) y elemento de firma visual SVG (Red de Relaciones e Influencia).
- [x] Crear página `branding-creatividad` y plantilla `page-branding-creatividad.php` con paleta Azul Océano (`#091F34`) inspirada en `#70B5E3`, grilla asimétrica de 6 módulos (25% ancho proporcional), carrusel slider interactivo con visor modal UX para casos de éxito y FAQ adaptado a la era de la IA.
- [x] Crear y vincular el Menú Branding Orange (`branding` nav location) y unificar el Pre-footer oficial de contacto en `footer.php`.
- [x] Sección `infl-awards`: título + pill + ticker de premios en movimiento continuo (CSS puro, sin JS), con los 8 logos/textos reales descargados de `orange-la.com`
- [x] Sección `infl-stat-block`: píldoras de estadística "+28 Influencers" + imagen con burbuja de cita superpuesta
- [ ] Confirmar con el cliente los destinos reales de los ítems del menú `influencers` (hoy son anclas placeholder: `#servicios`, `#preguntas-frecuentes`, `#casos-de-exito`, `#por-que-nosotros`, `#contacto`)
- [x] Cargar foto real para `infl-stat-block` (creación de contenido con influencer) — `chica_foto.webp` de `design/marketingInfluencer/resource/`
- [x] Rediseñar la sección de Ventajas en `page-marketing-de-influencers.php` con carrusel de tarjetas interactivo e ilustración inferior
- [x] Rediseñar la sección de Estrategia ("Conoce Nuestros Servicios") con split layout e ilustración técnica
- [x] Rediseñar la sección de Selección Estratégica en `page-marketing-de-influencers.php` con slider interactivo de cuatro pilares e ilustraciones
- [x] Rediseñar la sección de Gestión Integral en `page-marketing-de-influencers.php` con grid interactivo de 6 bloques, animación al hacer hover e ilustración inferior
- [x] Rediseñar la sección de Gestión de Campañas con estructura centrada de una sola columna y bloque destacado bicolor
- [x] Implementar la sección interactiva "¿Qué Incluye Nuestro Servicio?" con slider de tarjetas a dos columnas, controles circulares inferiores y adaptabilidad móvil
- [x] Rediseñar la sección "Beneficios para tu Marca" con grid interactivo de 4 bloques de colores alternos
- [x] Rediseñar la sección "Tipos de Marketing de Influencers" con slider interactivo y controles de flechas a los costados
- [x] Implementar la sección "Análisis y Reportes de Campaña" con grid asimétrico de 6 tarjetas y micro-animaciones hover
- [x] Diseñar e implementar la sección interactiva "Marketing de Influencers: Preguntas Frecuentes" con Acordeón Horizontal Premium adaptativo
- [x] Eliminar las secciones de Casos de Éxito, Marcas, Diferenciales y CTA Final a solicitud del cliente para simplificar la página de Marketing de Influencers
- [x] fix: modales de escenarios en podcast, UX de flechas de slider, colores de botón Ver Más y proporción del Hero 1920x1080
- [x] Crear menú de navegación dedicado para podcast (`Inicio`, `Servicio`, `Escenarios`, `Planes`, `Contacto`) y reemplazar badge de reserva por imagen gráfica `Listo-para-grabar-tu-podcast-con-calidad-profesional-en-Orange-Latam.png`
- [x] Sincronizar footer y pre-footer (`infl-prefooter`) estándar de las páginas internas en la vista de podcast (`footer.php`)
- [x] Corregir estiramiento y recorte excesivo del video Hero de podcast (`scale(1.05)`, `min-height: 85vh` y header transparente edge-to-edge)
- [x] Añadir animaciones Scroll Reveal direccionales y escaladas (`data-reveal="up"`, `left`, `right`, `scale`) en todas las secciones de `page-podcast.php`
- [x] Crear e integrar la nueva página "PR y Gestión de la Reputación" (slug: `pr-gestion-reputacion`, template: `page-pr-gestion-reputacion.php`) con menú ancla dedicado, diagrama radial SVG interactivante de nodos, acordeón FAQ con Schema JSON-LD y stylesheet modular `assets/css/pages/pr-gestion-reputacion.css` heredando de `base.css`
- [x] Reemplazar el recuadro gris de marcas/premios por una grilla interactiva responsive con los 6 galardones de la agencia (Purpose Awards, PR Week Global, IPRA Golden World, Sabre Awards, Effie Awards y Cannes Lions) en `page-pr-gestion-reputacion.php` y `pr-gestion-reputacion.css`
- [x] Separar CSS en padre/hijo: `assets/css/base.css` (fonts, variables, reveal animations, header/nav, footer global — se carga en todas las páginas) + `assets/css/pages/podcast.css` (estilos exclusivos de Orange Studio Podcast). `style.css` conserva Home/Influencers/Marketing Digital sin cambios. Enqueue condicional en `functions.php` vía `get_page_template()` — la página `podcast` ya no descarga las ~5900 líneas de `style.css` que no le corresponden.
- [x] Extender el split de CSS al resto de páginas: `assets/css/pages/home.css` (front page, `is_front_page()`), `marketing-influencers.css` y `marketing-digital.css` (por `page-*.php` template). `assets/css/style.css` queda reducido a solo el bloque "Post Detail - Share Article" (fallback para `single.php`/`home.php` blog). Helper `orange_latam_enqueue_versioned_style()` en `functions.php` centraliza el enqueue cache-busted por `filemtime()`.
  - Bug encontrado y corregido durante el split: el CSS del menú hamburguesa móvil (`.header__nav` panel fijo, `--open`, `__overlay--visible`, `body.header-nav-open`) vivía únicamente en el bloque de responsive mezclado de `style.css` — faltaba en `base.css`, rompiendo el nav móvil en Podcast desde el split anterior. Movido a `base.css`.
  - Bug encontrado y corregido: `page-marketing-digital.php` reutiliza el componente de hero en video `.infl-hero`/`.infl-hero__video-bg`/`.infl-hero__vignette` definido originalmente solo en el bloque de Influencers — duplicado en `marketing-digital.css` para evitar dependencia cruzada entre páginas.
  - Verificado por cobertura real de clases (`grep` cruzado HTML↔CSS por template) y por HTTP (`curl`) que cada ruta carga exactamente `base.css` + su hijo correspondiente.

