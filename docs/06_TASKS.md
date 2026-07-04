# 06_TASKS.md — Backlog Activo

## Sprint 1: Cimiento del Tema & Auto-configuración
- [x] Documentar especificaciones del tema (PRD, SDD, SYSTEM_SPEC, ARCHITECTURE)
- [/] Diseñar e implementar plan de la primera vista (Home/Landing)
- [ ] Crear estructura base del tema `orange-latam` en `wp-content/themes/`
- [ ] Implementar metadatos en `style.css` de WordPress
- [ ] Implementar la clase de auto-inicialización en la activación del tema (`after_switch_theme`)

## Sprint 2: Maquetado y UI de la Home (Primera Vista)
- [ ] Crear cabecera (`header.php`) y pie de página (`footer.php`)
- [x] Implementar el Hero Slider con transiciones CSS y autoplay
- [ ] Implementar la barra de estadísticas (Stats Bar)
- [ ] Crear sección Nosotros (Misión/Visión)
- [ ] Implementar la sección Interactiva de Servicios (Corporativo vs Asuntos Sensibles) con Vanilla JS
- [ ] Integrar el slider de Premios/Festivales y el grid de Sectores
- [ ] Integrar la sección Voz de Expertos y Formulario de Contacto nativo

## Sprint 3: Optimización y Pruebas
- [x] Refinar animaciones de Scroll (Reveal) mediante `IntersectionObserver`
- [/] Auditar accesibilidad (A11y), responsive y tiempos de carga
- [ ] Documentar despliegue y cierre de sesión

## Sprint 4: Blog & Páginas de Servicio
- [x] Menú "Inicio / Blog" para navegación fuera del landing (blog index, artículo individual)
- [x] Botones de compartir artículo (WhatsApp, Facebook, Twitter, LinkedIn, Telegram, Email) en `single.php`
- [x] Menú responsive (hamburguesa) en `header.php`
- [x] Video en el Hero Slider (`assets/videos/`)
- [x] Sección "Voz de Expertos" del home conectada a posts reales (etiqueta `voz-de-expertos`)
- [x] Página `marketing-de-influencers`: creación automática de página + template dedicado (`page-marketing-de-influencers.php`), copia fiel del contenido de referencia (`design/asset/marketing-influencer.png`)
- [ ] Cargar recursos visuales reales (imágenes/fotos) de la página `marketing-de-influencers` — pendiente de que el cliente los provea (actualmente con placeholders `.infl-media-box`)
- [ ] Confirmar con el cliente si el menú "Inicio / Blog" debe incluir un tercer enlace a `marketing-de-influencers` u otras páginas de servicio futuras
- [ ] Página `marketing-digital` (pendiente, referencia: `design/asset/marketing-digital.png`) — página distinta, no mezclar contenido con `marketing-de-influencers`
- [x] Enlace de la fila "02 Marketing de Influencers" en `services-corp` (home) hacia `/marketing-de-influencers/`, wireado vía `data-link` + JS
- [x] Menú propio de `marketing-de-influencers` (theme location `influencers`), auto-creado/auto-asignado en `class-theme-setup.php` para activarse solo al desplegar el tema
- [x] Hero de `marketing-de-influencers` reconstruido como video full-bleed (`assets/videos/marketing-de-influencers-hero.mp4`) con título superpuesto, scrim de header y ajustes de legibilidad
- [x] Sección `infl-awards`: título + pill + ticker de premios en movimiento continuo (CSS puro, sin JS), con los 8 logos/textos reales descargados de `orange-la.com`
- [x] Sección `infl-stat-block`: píldoras de estadística "+28 Influencers" + imagen con burbuja de cita superpuesta
- [ ] Confirmar con el cliente los destinos reales de los ítems del menú `influencers` (hoy son anclas placeholder: `#servicios`, `#preguntas-frecuentes`, `#casos-de-exito`, `#por-que-nosotros`, `#contacto`)
- [x] Cargar foto real para `infl-stat-block` (creación de contenido con influencer) — `chica_foto.webp` de `design/marketingInfluencer/resource/`
