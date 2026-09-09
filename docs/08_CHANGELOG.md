# 08_CHANGELOG.md — Historial de Versiones

## [1.2.1] - 2026-09-09
### Añadido
- **Seguridad Antispam Cloudflare Turnstile:** Integración del CAPTCHA inteligente e invisible de Cloudflare en formularios públicos (modal global, Home y Podcast) con validación server-side contra la API `siteverify` de Cloudflare y actualización de directivas CSP.
### Cambiado
- **Actualización de Títulos SEO y Keywords (Rank Math):** Estandarización de `rank_math_title` y ampliación de `rank_math_focus_keyword` (filtro nativo ampliado a 10) en BD bajo la nomenclatura de marca `Orange Latam: [Servicio]` en las páginas de servicios y legales.
- **Copy Hero Gestión de Acceso:** Actualización de la descripción en `page-gestion-de-acceso.php` e inclusión de espaciado entre párrafos en `gestion-de-acceso.css`.

## [1.2.0] - 2026-09-08
### Añadido
- **Bundle Open Knowledge Format (OKF) en Raíz (okf/):**
  - Creación de 13 documentos modulares de conocimiento para LLMs y motores generativos (index.md, 
osotros.md, elaciones-publicas.md, suntos-publicos.md, gestion-de-acceso.md, randing-creatividad.md, eventos-activaciones.md, presencia-digital.md, marketing-digital.md, marketing-de-influencers.md, podcast.md, contacto.md, aqs.md).
- **Seguimiento Git de Archivos SEO/GEO en Raíz:**
  - Actualización de .gitignore para versionar okf/, .well-known/, llms.txt, llms-full.txt, obots.txt y .htaccess.
- Bumping de versión del tema a 1.2.0.

## [1.1.9] - 2026-09-04
### Cambiado
- Bump de versiÃ³n para deploy a hosting â€” incluye la migraciÃ³n del formulario Lectura de Tarot y la correcciÃ³n que separÃ³ `registro_tarot` en su propio CPT (ver detalle en `1.1.8`).

## [1.1.8] - 2026-09-04
### AÃ±adido
- Formulario "Lectura de Tarot" migrado desde el sitio de Empoderadas y Emprendedoras â€” pÃ¡gina autoactivable `/laferia/tarot/` (`page-tarot.php`, standalone, sin depender del header/footer del tema) en `inc/class-tarot-form.php`.
- CPT propio `registro_tarot` con su propio menÃº, listado, meta box, bulk action de reintento y export CSV â€” deliberadamente separado de `Orange_Leads_Manager`: los registros de La Feria (evento puntual) no son leads comerciales de Orange Latam y no deben mezclarse en el mismo dashboard.
- SincronizaciÃ³n en vivo con la misma Google Sheet del formulario original, vÃ­a cuenta de servicio (JWT + REST API v4, sin librerÃ­as externas).
- Auto-creaciÃ³n de las pÃ¡ginas `laferia` (contenedor, redirige a Inicio) y `laferia/tarot` en un hook de `init` propio, para que la URL exista sin pasos manuales.
- Bumping de versiÃ³n del tema a `1.1.8` en `functions.php` y `style.css`.

### Corregido
- Revertido el uso inicial de `Orange_Leads_Manager::save_lead()` para el respaldo del tarot â€” por pedido explÃ­cito del cliente, se separÃ³ en su propio CPT al no ser el mismo tipo de dato que los leads comerciales.

## [1.1.3] - 2026-08-29
### Corregido (Responsive & Viewport Containment)
- **Fix de Desbordamiento Lateral en Presencia Digital (`presencia-digital.css`)**:
  - ImplementaciÃ³n de `minmax(0, 1fr)` y `min-width: 0` en `.pd-hero__container`, `.pd-hero__content`, `.pd-hero__visual`, `.pd-hero__metrics-grid` y `.pd-hero__metric-box` para erradicar el desbordamiento de CSS Grid en 320pxâ€“360px.
  - Escala tipogrÃ¡fica adaptada en mobile (`clamp(18.5px, 6.2vw, 22px)` para `< 360px` y `clamp(21px, 6.5vw, 27px)` para `< 480px`) con `overflow-wrap: break-word`.
- **OptimizaciÃ³n Responsive en Branding (`branding-creatividad.css`)**:
  - ContenciÃ³n de viewport (`overflow-x: clip`, `min-width: 0`), mÃ¡rgenes y tarjeta Showcase adaptativa (`16px 14px` en 480px y `14px 10px` en 360px).
- **Bumping de versiÃ³n del tema a `1.1.3`** en `functions.php` y `style.css`.

## [1.1.2] - 2026-08-29
### AÃ±adido y Optimizado (Responsive & AcordeÃ³n Mobile)
- **AcordeÃ³n Interactivo de Servicios en Mobile (`< 992px`)**:
  - ImplementaciÃ³n de acordeÃ³n colapsable por Ã­tem de servicio (`index.php`, `home.css`, `main.js`), preservando el layout de 2 columnas con panel lateral en desktop.
- **OptimizaciÃ³n Responsive y ContenciÃ³n de Viewport**:
  - ContenciÃ³n global de viewport (`overflow-x: clip`, `max-width: 100%`) y ajuste de `[data-reveal]` a desplazamiento vertical en mobile para prevenir desbordamientos laterales.
  - CorrecciÃ³n de desbordamiento en CSS Grid (`min-width: 0`, `minmax(0, 1fr)`) y ajuste de `clamp()` en **Presencia Digital** (`presencia-digital.css`) y **Branding** (`branding-creatividad.css`) para dispositivos compactos (320pxâ€“360px).
- **Bumping de versiÃ³n del tema a `1.1.2`** en `functions.php` y `style.css`.

## [1.1.1] - 2026-08-26
### Corregido (Accesibilidad WCAG / Lighthouse)
- **Fix `aria-hidden-focus` en MenÃº MÃ³vil**:
  - Aplicado `visibility: hidden` en el estado cerrado del menÃº mÃ³vil en `base.css` (`visibility: visible` al abrir) y atributo `inert` en `main.js`.
  - Eliminado `aria-hidden="true"` redundante del contenedor `#header-nav` que contenÃ­a enlaces interactivos focusables, cumpliendo con la regla WCAG 4.1.2 y la auditorÃ­a de Lighthouse Agentic Browsing.

## [1.1.0] - 2026-08-26
### AÃ±adido y Optimizado (Accesibilidad del Ãrbol de Agentes & GEO)
- **Accesibilidad en Formularios y CF7**:
  - AsociaciÃ³n estricta de `<label for="...">` con `id="..."` en todos los campos de formularios (`footer.php`, `index.php`, `page-podcast.php`).
  - CreaciÃ³n del filtro `orange_latam_cf7_accessibility_filter` sobre `wpcf7_form_elements` en `inc/seo.php` para inyectar automÃ¡ticamente identificadores `id` y descripciones `aria-label` en campos de Contact Form 7.
- **Ãrbol de Accesibilidad (Accessibility Tree)**:
  - SincronizaciÃ³n dinÃ¡mica de `aria-expanded` y `aria-hidden` en el menÃº hamburguesa mÃ³vil (`main.js` y `header.php`).
  - IncorporaciÃ³n de `role="dialog"`, `aria-modal="true"`, `aria-labelledby`/`aria-label` y `title` en iframes en todos los modales de la web (`page-marketing-de-influencers.php`, `page-podcast.php`, `page-presencia-digital.php` y `footer.php`).
- **Schema JSON-LD Enriquecido (SEO / GEO)**:
  - MÃ³dulo `inc/seo.php` conectado en `functions.php` con Schema `@graph` unificado: `Organization` & `LocalBusiness` (coordenadas `geo`, `hasMap`, `priceRange`, `openingHoursSpecification`, `sameAs`), catÃ¡logo completo de los 9 servicios (`hasOfferCatalog`) y bloque `FAQPage` para motores de bÃºsqueda generativa.
  - Eliminado bloque estÃ¡tico redundante en `index.php`.
- **Archivos EstÃ¡ndar de Entrada**:
  - Creado `.well-known/security.txt` bajo el estÃ¡ndar RFC 9116.
  - Consistencia de `llms.txt`, `llms-full.txt`, `.well-known/ai-plugin.json` y `robots.txt`.

## [1.0.8] - 2026-08-26
### AÃ±adido y Optimizado (SEO AgÃ©ntico & GEO)
- **Archivos para motores y agentes de IA (`llms.txt`, `llms-full.txt`, `.well-known/ai-plugin.json`)**:
  - `llms.txt` actualizado segÃºn especificaciÃ³n estÃ¡ndar con los 9 servicios y rutas canÃ³nicas.
  - `llms-full.txt` creado con base de conocimiento exhaustiva, perfil de liderazgo, capacidades y FAQs estructuradas para LLMs.
  - `.well-known/ai-plugin.json` creado como manifiesto de capacidades para agentes y plugins.
- **Rastreadores de IA en `robots.txt`**:
  - Reglas explÃ­citas para permitir el rastreo libre de `GPTBot`, `ClaudeBot`, `PerplexityBot`, `Google-Extended`, `Applebot-Extended`, `cohere-ai`, `Bytespider`, `DuckAssistBot`.
- **Auto-descubrimiento en `header.php`**:
  - InyecciÃ³n de tags `<link rel="alternate" type="text/markdown" ...>` en el `<head>` apuntando a `llms.txt` y `llms-full.txt`.
- **Bumping de versiÃ³n del tema a `1.0.8`** en `functions.php` y `style.css`.

## [Unreleased]
### Corregido
- **JerarquÃ­a de encabezados del Home** (`index.php`, `assets/css/pages/home.css`): un solo H1 en toda la pÃ¡gina â€” "LÃ­deres en ReputaciÃ³n" (sin keyword, slide del hero) pasa a texto visual sin etiqueta de encabezado; se promueve a H1 "Mejor Agencia de Relaciones PÃºblicas y GestiÃ³n de la ReputaciÃ³n" (ya existÃ­a como H2 en Premios). Verificado contra Rank Math antes de implementar: sin canibalizaciÃ³n real con la keyword primaria de `/pr-gestion-reputacion/`. `.about__title`/`.about__section-title` pasan de `<div>` a `<h2>`/`<h3>`. Quitado el `<br>` forzado en `.services-banner__title` y `.sensibles-grid-section__title` (se leÃ­an pegados tipo "COMUNICACIÃ“NESTRATÃ‰GICA") â€” el salto de lÃ­nea ahora es un `<span>` con `display:block`. Los 13 servicios del acordeÃ³n de Servicios ahora tienen su propio `<h3>` real en el listado (antes solo `<span>`, Ãºnico H3 real era el panel de detalle dinÃ¡mico). Sacado el ALL CAPS escrito a mano del HTML en 6 tÃ­tulos â€” ahora es 100% `text-transform: uppercase` en CSS, texto real en formato normal.

## [1.0.5] - 2026-08-21
### AÃ±adido y Optimizado
- **Nuevas imÃ¡genes de Branding (`assets/images/branding/`)**:
  - Incorporadas 6 nuevas imÃ¡genes de servicios (`architecture.webp`, `creation.webp`, `identity.webp`, `strategy.webp`, `naming.webp`, `positioning.webp`) convertidas a WebP con **-91.9% de reducciÃ³n de peso** (de 5.56 MB a 448 KB).
- **Estilos y Microinteracciones en Branding (`branding-creatividad.css`)**:
  - Borde celeste corporativo (`#29ABE2`, 1.5px) con sombra de resplandor.
  - MicrointeracciÃ³n de elevaciÃ³n sutil (`transform: translateY(-5px)`) sin zoom en las imÃ¡genes internas.
- **Ãconos de PR como Siluetas SÃ³lidas (`page-pr-gestion-reputacion.php`, `main.js`)**:
  - RediseÃ±o de todos los glifos de la pÃ¡gina de PR a estilo sÃ³lido plano en Cyan (`#29ABE2`) y Negro (`#17130F`) con calados en blanco (diagrama orbital, acordeÃ³n mÃ³vil, 3 fases de crisis y las 6 insignias de voceros).
- **Bumping de versiÃ³n del tema a `1.0.5`** en `functions.php` y `style.css`.

## [1.0.4] - 2026-08-21
### Seguridad
- **Incidente en producciÃ³n: `robots.txt` comprometido + sitemap roto** (ver `docs/06_TASKS.md`): un checklist de validaciÃ³n pasado por el cliente (reportado como ya resuelto por soporte del hosting) se verificÃ³ punto por punto directo contra `orange-la.com` â€” 2 de los 5 Ã­tems eran falsos. `robots.txt` seguÃ­a con 19 entradas `sitemap-hot-XXXXXXX.xml` inyectadas (firma de malware SEO en WP comprometido, archivo fÃ­sico en la raÃ­z del hosting, no lo genera WordPress); reemplazado por el cliente con contenido limpio, verificado. `sitemap_index.xml` de Rank Math daba 404 pese a reportarse 200 OK â€” causa: rewrite rules sin regenerar tras la migraciÃ³n a producciÃ³n; resuelto con un guardado en Ajustes â†’ Enlaces permanentes. Pendiente recomendado: revisiÃ³n de seguridad completa en el hosting (mu-plugins, usuarios admin, cron) ante evidencia de compromiso pasado, aunque ya inactivo.
- **AuditorÃ­a de seguridad completa** (ver `docs/06_TASKS.md`): regeneradas las 8 salts de autenticaciÃ³n de WordPress en `wp-config.php` (estaban todas duplicadas del mismo string â€” riesgo de forjar cookies de sesiÃ³n de admin). Corregido host header injection en `WP_SITEURL`/`WP_HOME` con allowlist de dominios vÃ¡lidos. Movido fuera del docroot un backup completo del sitio (127 MB, con hashes de password y datos de leads) que quedaba accesible por HTTP sin protecciÃ³n real. `wp-config.php` no estÃ¡ trackeado en git â€” estos cambios no viajan con `git push`, aplican solo al entorno donde se editÃ³ el archivo.
- **Anti-spam en el formulario de contacto** (`functions.php`, `footer.php`, `index.php`, `page-podcast.php`, `base.css`): honeypot invisible (`contact_website`), rechazo de envÃ­os a menos de 3 segundos de cargada la pÃ¡gina, y rate limiting de 3 envÃ­os por hora por IP vÃ­a transients â€” el endpoint AJAX `send_service_contact` no tenÃ­a ninguna protecciÃ³n contra spam automatizado.
- **Comentarios deshabilitados en todo el sitio** (`functions.php`): aunque ningÃºn template mostraba el formulario, WordPress seguÃ­a aceptando comentarios por POST directo a `wp-comments-post.php`. Bloqueado a nivel cÃ³digo (no solo config de base de datos) con filtros `comments_open`/`pings_open` y un handler que responde 403 a cualquier intento de submit â€” mÃ¡s limpieza del menÃº "Comentarios" en el admin.
- **PÃ¡gina de PolÃ­tica de Privacidad** (`/politica-de-privacidad/`): nueva pÃ¡gina con contenido real (quÃ© datos se recolectan, para quÃ©, base legal, retenciÃ³n, derechos ARCO, referencia a la Ley NÂ° 29733 de PerÃº) â€” antes el link del formulario apuntaba a `#` y no existÃ­a ninguna pÃ¡gina. Creado `page.php` como template genÃ©rico del theme (no existÃ­a; pÃ¡ginas sin template dedicado caÃ­an en el diseÃ±o del Home). Link agregado tambiÃ©n al footer global.
- **Resto de la auditorÃ­a de seguridad cerrado** (ver detalle en `docs/06_TASKS.md`): headers HTTP (CSP, X-Frame-Options, X-Content-Type-Options, Referrer-Policy, Permissions-Policy, HSTS) agregados en `functions.php`; CSV/formula injection en exportaciÃ³n de leads neutralizado; IP de leads ahora solo desde `REMOTE_ADDR` (antes aceptaba headers falsificables); XSS vÃ­a `innerHTML` en el carrusel de "Voz de Expertos" (`main.js`) reemplazado por construcciÃ³n DOM segura; `xmlrpc.php` bloqueado a nivel servidor y por filtro nativo; `DISALLOW_FILE_EDIT` en `wp-config.php`; usuario `admin` renombrado a `orangelatam_ops`.
- **`wp-config.php` de producciÃ³n corregido** (fuera del repo, cambio aplicado directo en el hosting): `define (WP_POST_REVISIONS, false);` sin comillas en el nombre de la constante â€” Error fatal en PHP 8+. Esa lÃ­nea y `DISALLOW_FILE_EDIT`/`DISABLE_WP_CRON` estaban ademÃ¡s ubicadas despuÃ©s de `require_once wp-settings.php`, por lo que no tenÃ­an efecto real. Reordenadas y corregidas.

### Corregido
- **H1 de Podcast y Marketing de Influencers**: iterado a un H1 visible superpuesto en el video del hero, centrado, con fondo oscuro semitransparente detrÃ¡s del texto para legibilidad garantizada sin importar el frame del video. Texto de Podcast acortado (la versiÃ³n larga repetÃ­a contenido de la Intro/Service Header de la misma pÃ¡gina).
- **Tabla de Leads en wp-admin** (`inc/class-leads-manager.php`): columna "Mensaje / Requerimientos" se veÃ­a colapsada (texto apilado letra por letra) por `table-layout:fixed` (clase `fixed` de WP) sin ancho propio en esa columna. Quitada la clase, agregado `table-layout:auto` y `min-width`.

### AÃ±adido
- **ConversiÃ³n Integral de ImÃ¡genes a Formato WebP (`assets/images/`, `wp-content/uploads/`)**:
  - ConversiÃ³n automatizada de 83 imÃ¡genes del tema (`assets/images/`) de PNG/JPG a WebP: reducciÃ³n de peso de **43.15 MB a 5.64 MB** (**-86.9% de ahorro**).
  - ConversiÃ³n de 29 imÃ¡genes de la biblioteca de medios (`wp-content/uploads/`) a WebP: reducciÃ³n de **10.44 MB a 1.42 MB** (**-86.4% de ahorro**).
  - Ahorro total global: **46.53 MB** de transferencia y ancho de banda eliminados.
  - Actualizadas al 100% las referencias de imÃ¡genes en todas las plantillas PHP (`index.php`, `page-asuntos-publicos.php`, `page-branding-creatividad.php`, `page-eventos-activaciones.php`, `page-gestion-de-acceso.php`, `page-marketing-de-influencers.php`, `page-marketing-digital.php`, `page-podcast.php`, `page-pr-gestion-reputacion.php`, `page-presencia-digital.php`).
- **RediseÃ±o de Layout en Asuntos PÃºblicos (`page-asuntos-publicos.php`, `asuntos-publicos.css`)**:
  - ReestructuraciÃ³n de la secciÃ³n *Red de Relaciones e Influencia*: se trasladÃ³ el bloque editorial y los puntos clave a la parte superior con un grid horizontal, y se reposicionaron las 4 tarjetas de stakeholders en una cuadrÃ­cula horizontal de 4 columnas en la parte inferior, optimizada para desktop (4 columnas), tablet (2 columnas) y mÃ³vil (1 columna).
- **Nuevos Ãconos Ilustrados (Flat Outline Color) en la pÃ¡gina de PR (`page-pr-gestion-reputacion.php`, `main.js`, `pr-gestion-reputacion.css`)**:
  - RediseÃ±o de los 8 Ã­conos del diagrama radial interactivo y acordeÃ³n mÃ³vil de servicios con trazo negro `#17130F` estructurado y rellenos multicolor (planeta Tierra con flecha envolvente 360Â° para estrategias integrales, periÃ³dico de prensa, avatar ejecutivo con estrella de liderazgo, documento con lÃ¡piz, bombilla con destellos, trofeo con estrella, grÃ¡fico de barras analÃ­ticas con lÃ­nea de tendencia, y persona/vocero en atril con micrÃ³fonos dando entrevista para lanzamientos y anuncios corporativos).
  - RenovaciÃ³n de los 6 Ã­conos temÃ¡ticos en el bloque oscuro de GestiÃ³n de Crisis (escudo con radar de diagnÃ³stico, carpeta de manuales, globos de mensajes, micrÃ³fono de contingencia, globo terrÃ¡queo de monitoreo y maletÃ­n de comitÃ© ejecutivo).
  - IncorporaciÃ³n de insignias de Ã­conos ilustrados en el encabezado de las 6 tarjetas de Entrenamiento de Voceros (cÃ¡mara de estudio, diana de preguntas difÃ­ciles, llave de mensajes maestros, audÃ­fonos con micrÃ³fono, paleta creativa de storytelling y salvavidas de contenciÃ³n).

- **GestiÃ³n de Leads en Base de Datos y Notificaciones Multi-Destinatario (`functions.php`, `inc/class-leads-manager.php`)**:
  - CreaciÃ³n automÃ¡tica de la tabla `wp_orange_leads` para registrar todos los envÃ­os de formularios de contacto (Modal Global, Home y Podcast).
  - Panel en wp-admin (**"Leads Web"**) con contador en tiempo real, cambio de estado, buscador y exportaciÃ³n directa a Excel en formato CSV con UTF-8 BOM.
  - Enrutamiento unificado de correos a la lista oficial (`gorellana@orange-la.com`, `mayllon@orange-la.com`, `negocios@orange-la.com` y admin) con sanitizaciÃ³n y nonces de seguridad.
- **Mini Carousel Minimalista y Animaciones GSAP en Home (`index.php`, `home.css`, `home-gsap.js`)**:
  - ImplementaciÃ³n de mini carousel minimalista en la secciÃ³n "Voz de Expertos" con navegaciÃ³n tÃ¡ctil/swipe, flechas circulares translÃºcidas y contador de posiciÃ³n dinÃ¡mico (`01 / 06`).
  - IntegraciÃ³n de GSAP 3.15 + ScrollTrigger en la Home (`home-gsap.js`): animaciÃ³n en cascada para las 6 cajas tÃ¡cticas de Asuntos Sensibles, entrada lateral en Voz de Expertos, conteo progresivo y tÃ­tulos de Premios.
  - CorrecciÃ³n y estandarizaciÃ³n de cajas/badges en la secciÃ³n Sectores (`.sectors__badge`), eliminando deformaciones por escala y garantizando alineaciÃ³n visual y padding uniforme.
- **Nueva pÃ¡gina "Presencia Digital" (`page-presencia-digital.php`, `/presencia-digital/`)**: hero con orbes flotantes, retÃ­cula tÃ©cnica y sparkline SVG animado por GSAP; vitrina de portafolio con filtros funcionales (`data-filter`/`data-category`) y 3 covers SVG artesanales propios (`assets/images/presencia-digital/`, referencia visual hasta que el cliente entregue casos reales); ticker de tecnologÃ­as como marquee infinito CSS; calculadora de componentes interactiva que compone el `data-service` del modal de contacto. Animaciones vÃ­a nuevo `assets/js/pages/presencia-digital.js` (GSAP 3.15 + ScrollTrigger, con degradaciÃ³n progresiva sin GSAP y con `prefers-reduced-motion`).
- **RediseÃ±o de "Asuntos PÃºblicos" (`page-asuntos-publicos.php`)**: mismo playbook GSAP que Presencia Digital adaptado al carÃ¡cter editorial â€” trazo caligrÃ¡fico SVG bajo el H1, parallax de columnas del mosaico, image reveals con `clip-path`, entrada lateral de la quote card (`assets/js/pages/asuntos-publicos.js`). Filas de stakeholders convertidas de `div` decorativos a `<button>` reales que abren el modal de contacto con el stakeholder preseleccionado. Enqueue de GSAP refactorizado a mapa `$gsap_pages` multi-pÃ¡gina en `functions.php`.
- **Sistema de citabilidad para IA (AEO/GEO)**: `llms.txt` en la raÃ­z del sitio (Ã­ndice curado de servicios para agentes de IA â€” no versionado en git, ver nota abajo) y reglas `Allow` explÃ­citas para bots de IA (GPTBot, ChatGPT-User, OAI-SearchBot, ClaudeBot, Claude-User, Claude-SearchBot, anthropic-ai, PerplexityBot, Perplexity-User, Google-Extended, CCBot) cargadas en el editor de robots.txt de Rank Math.
- JSON-LD (`Organization` + `Service`) agregado a `page-marketing-digital.php`, `page-podcast.php` y `page-marketing-de-influencers.php`; `CollectionPage` agregado a `home.php` (listado del blog). Completa la cobertura de datos estructurados en todas las pÃ¡ginas de servicio + blog.

### Corregido
- **AuditorÃ­a SEO de las 6 pÃ¡ginas de servicio nuevas** contra `Estructura_SEO_Servicios_Orange_Latam_1.docx`: identificada la causa raÃ­z de los scores bajos de Rank Math (4-49/100) â€” las plantillas PHP dedicadas hardcodean el contenido en HTML, dejando vacÃ­o el campo `post_content` que Rank Math analiza. DecisiÃ³n del cliente: descartar el score del plugin para estas plantillas en vez de poblar Gutenberg con copy espejo (genera contenido invisible/duplicado); lo que sÃ­ importa para Google (meta title/description, focus keyword, schema, H1/H2/keywords en el HTML real) se corrigiÃ³ a mano. H1 corregido para incluir el keyword principal en `page-pr-gestion-reputacion.php`, `page-eventos-activaciones.php` y `page-presencia-digital.php` (esta Ãºltima no tenÃ­a ningÃºn `<h1>`). Keywords secundarias/long-tail insertadas en el copy real de las mismas 3 pÃ¡ginas.
- **InvestigaciÃ³n de keywords para Marketing Digital y Podcast** (no tenÃ­an, a diferencia de las 6 pÃ¡ginas nuevas): datos reales confirmados en SEMrush (base PerÃº/PEN) â€” cargados en Rank Math (Focus Keyword + Title + Meta) y reflejados en el H1 real de ambas plantillas. `page-podcast.php` no tenÃ­a ningÃºn `<h1>` en toda la pÃ¡gina.
- **Modal interno "DEMO INTERNA Â· SEO" (temporal, `inc/temp-seo-demo-modal.php`)**: se levanta automÃ¡ticamente en cada pÃ¡gina pÃºblica del sitio mostrando Meta Title, Meta Description y las Focus Keywords configuradas en Rank Math, cada una con su % de peso, la fuente del dato (volumen o dificultad real de SEMrush, base PE) y una justificaciÃ³n en lenguaje simple de por quÃ© se eligiÃ³ â€” pensado para presentar la estrategia SEO a direcciÃ³n sin necesitar acceso a wp-admin. Consultadas en SEMrush las 39 Focus Keywords hoy activas en el sitio: las 39 tienen dato real (ninguna cifra estimada o inventada). Autocontenido en un Ãºnico archivo + 1 lÃ­nea `require_once` en `functions.php` para poder removerlo en un solo paso cuando termine la demo.
- **SEO de la Home (post 7) contra el informe `Analisis-SEO-Trend-vs-OrangeLatam.docx`** (competitivo Trend.pe vs Orange Latam, SEMrush base PE): agregado el Focus Keyword "agencia de PR" en Rank Math a pedido explÃ­cito de direcciÃ³n, manteniendo "agencia de relaciones pÃºblicas" como primaria (ya posiciona #2 en SEMrush, mejor que Trend.pe en #5-6). Corregida ademÃ¡s la canibalizaciÃ³n que el informe seÃ±alÃ³ como quick-win #1: la Home y `/pr-gestion-reputacion/` (post 91) competÃ­an por el mismo Focus Keyword primario "agencia de relaciones pÃºblicas". Post 91 pasÃ³ su primaria a "gestiÃ³n de reputaciÃ³n" (ya existÃ­a como secundaria) y bajÃ³ "agencia de relaciones pÃºblicas" a secundaria â€” sin redirects ni pÃ©rdida de contenido, solo reasignaciÃ³n de Focus Keyword.
- **AuditorÃ­a keyword-vs-contenido en las 10 pÃ¡ginas del sitio** (Focus Keywords de Rank Math contra el H1/copy real, vÃ­a `Grep`): confirmados 5 keywords configurados que no existÃ­an en ningÃºn texto visible de su pÃ¡gina â€” "agencia de PR" (Home, solo en JSON-LD invisible), "empresa de relaciones pÃºblicas PerÃº" y "agencia de PR Lima" (PR), "community management lima" (Marketing Digital) y "alquiler de estudio de podcast" (Podcast). Sin modificar el copy existente, se extrajeron frases equivalentes que sÃ­ estÃ¡n escritas palabra por palabra en cada pÃ¡gina y se cargaron como reemplazo en Rank Math: "gestiÃ³n de comunicaciÃ³n y relaciones pÃºblicas" (Home), "empresa experta en relaciones pÃºblicas" y "agencia de PR en Lima PerÃº" (PR), "presencia en redes sociales" (Marketing Digital), "grabaciÃ³n y ediciÃ³n profesional de podcast en Lima" (Podcast â€” guardada sin tildes en Rank Math por una limitaciÃ³n del campo Focus Keyword de Tagify al tipear acentos). Las 5 verificadas en SEMrush (base PE) y reflejadas con dato real en el modal de demo. Marketing de Influencers queda pendiente aparte: no tiene ningÃºn `<h1>` en toda la plantilla (hero solo con video), fuera de alcance de este reemplazo por ser un problema estructural, no de keyword ausente.
- **AuditorÃ­a SEO on-page completa (11 pÃ¡ginas) contra `.agents/rules/seo.md`**: eliminada funciÃ³n legacy `orange_latam_seo_meta_tags()` en `functions.php` (predataba Rank Math) que duplicaba meta description/OG/Twitter con valores genÃ©ricos incorrectos en cada pÃ¡gina. Recortados 5 Meta Titles que excedÃ­an el mÃ¡ximo de 60 caracteres (Asuntos PÃºblicos, GestiÃ³n de Acceso, Eventos, Branding, Presencia Digital). Detectado y corregido sitemap XML roto (`/sitemap_index.xml` en 404 pese a tener el mÃ³dulo de Rank Math activo â€” `rewrite_rules` cacheado sin las reglas del sitemap, arreglado forzando su regeneraciÃ³n). Agregado `<h1>` real (visualmente oculto, sin alterar el hero de video full-bleed) a Marketing de Influencers, Ãºnico template del sitio sin ningÃºn encabezado h1. Lighthouse (SEO + Accesibilidad) corrido contra el Home local: 2 hallazgos de accesibilidad corregidos â€” contraste insuficiente en `.stats__value` (3.66:1 â†’ 5.05:1) y Ã¡rea tÃ¡ctil insuficiente en `.hero__dot` (10Ã—3px â†’ 24Ã—24px de zona clickeable) â€” accesibilidad pasÃ³ de 91 a 100/100.
- Path SVG malformado del Ã­cono de telÃ©fono en `footer.php` (rompÃ­a la consola en todo el sitio).
- Fix responsive en `asuntos-publicos.css`: `min-height` + `aspect-ratio` combinados forzaban un ancho mÃ­nimo que desbordaba el grid en mÃ³vil (enmascarado por `overflow-x:hidden`).
- AuditorÃ­a de anti-patrones de diseÃ±o IA (skill `impeccable`) en `asuntos-publicos.css`: bordes side-tab eliminados, easings con rebote â†’ ease-out expo, transiciones de `width`/`height` â†’ `transform: scale`, CSS muerto (`.ap-cta`, ~60 lÃ­neas) eliminado.
- **Meta Titles a pedido de direcciÃ³n**: Home, Marketing de Influencers y Marketing Digital reformateados en Rank Math a "Orange Latam: [resto]" (prefijo primero, antes iba al final). Corregidos ademÃ¡s GestiÃ³n de Acceso (Meta Title mostraba "Orange Latam" duplicado â€” texto fijo mÃ¡s la variable `%sitename%`) y Asuntos PÃºblicos (no tenÃ­a Meta Title configurado, usaba el fallback de Rank Math).
- **AuditorÃ­a SEO on-page completa (11 pÃ¡ginas) contra `.agents/rules/seo.md`**: eliminada la funciÃ³n legacy `orange_latam_seo_meta_tags()` de `functions.php` â€” predataba la instalaciÃ³n de Rank Math y seguÃ­a enganchada en `wp_head` (prioridad 2), generando un segundo juego duplicado de `<meta name="description">`, Open Graph y Twitter Card en cada pÃ¡gina con valores genÃ©ricos incorrectos (ej. la Home mostraba "Bienvenidos a Orange Latam. Impulsamos tu marca." en vez de la descripciÃ³n real). Recortados 5 Meta Titles que excedÃ­an el mÃ¡ximo de 60 caracteres del spec: Asuntos PÃºblicos (74â†’50), GestiÃ³n de Acceso (72â†’56), Eventos y Activaciones (66â†’56, tambiÃ©n corregido un doble espacio), Branding (62â†’54), Presencia Digital (60â†’59, doble espacio corregido). Confirmado `noindex, nofollow` site-wide â€” intencional en este entorno local, pendiente que el cliente verifique que producciÃ³n lo tenga desactivado.

### Nota de infraestructura
- `llms.txt` y el fix de charset UTF-8 para `.txt` en `.htaccess` viven en la raÃ­z del sitio, **fuera** de `wp-content/themes/orange-latam/` â€” el `.gitignore` de este repo solo trackea el theme, `docs/`, `.agents/`, `.claude/` y `.md` de raÃ­z. No viajan con `git push` ni con deploys de theme-only; requieren copia manual al servidor.


- **PÃ¡gina Branding y Creatividad (`page-branding-creatividad.php`)**:
  - CreaciÃ³n de plantilla dedicada con paleta **Azul OcÃ©ano (`#091F34`)** e iluminaciones en azul `#70B5E3`, sustituyendo tonos verdes/teal.
  - ConfiguraciÃ³n exacta de etiquetas SEO (Title, Meta Description, H1, H2, anclas `#creatividad-direccion-arte`, `#entregables`, `#faq`) e inclusiÃ³n de datos estructurados Schema.org (`FAQPage`).
  - RediseÃ±o de la grilla de Servicio Integral a 4 columnas proporcionales en desktop (tarjetas superiores e inferiores al 25% de ancho).
  - Carrusel interactivo slider con navegaciÃ³n nativa y visor modal UX flotante (`#bc-case-modal`) para la inspecciÃ³n detallada de mÃ©tricas, desafÃ­os, soluciones y resultados de cada caso de Ã©xito.
  - ReestructuraciÃ³n de la secciÃ³n final en 2 bloques independientes de alto nivel: **Entregables Tangibles en la Era de la IA** (grilla 3x2 con tarjetas de Design System, Vectorial Master, Manual de Prompts IA, Naming Legal Indecopi, Kit Omnicanal y Plataforma de Marca) y **Preguntas Frecuentes (FAQ)** en formato acordeÃ³n 100% texto colapsado por defecto.
  - CreaciÃ³n y auto-asignaciÃ³n del menÃº `MenÃº Branding Orange` (theme location `branding`).
  - Enlace dinÃ¡mico de las filas 06 (*Creatividad y DirecciÃ³n de Arte*) y 07 (*Branding*) de la portada (`index.php`) mediante `get_permalink(get_page_by_path('branding-creatividad'))`.
- **Modal Flotante de Contacto Global (`#global-contact-modal`) & AJAXMailer**:
  - Modal flotante con efecto *glassmorphism*, responsive e interactivo implementado en `footer.php` y estilizado en `base.css`, habilitado para todas las pÃ¡ginas internas.
  - Captura dinÃ¡mica del servicio de origen a partir del tÃ­tulo de la pÃ¡gina activa e interacciÃ³n con botones `.open-contact-modal` y `#contacto`.
  - Procesamiento AJAX seguro en `functions.php` (`wp_ajax_send_service_contact`) con verificaciÃ³n de nonce `orange_contact_nonce`, sanitizaciÃ³n estricta de inputs y envÃ­o mediante `wp_mail()`.
  - **Asuntos de correo dinÃ¡micos por pÃ¡gina origen** (ej. `[CotizaciÃ³n Web] Branding y Creatividad â€” Juan PÃ©rez`, `[CotizaciÃ³n Web] PR y GestiÃ³n de la ReputaciÃ³n â€” Maria GÃ³mez`), facilitando el rastreo comercial inmediato de leads.
- CSS separado en padre/hijo por pÃ¡gina (ver ADR 3 en `07_DECISIONS.md`): `assets/css/base.css` (fonts, variables, animaciones reveal, header/nav, footer global â€” todas las pÃ¡ginas) + `assets/css/pages/{home,podcast,marketing-influencers,marketing-digital}.css` (exclusivo de cada pÃ¡gina, encolado condicionalmente por `is_front_page()` / `get_page_template()` en `functions.php`). `assets/css/style.css` quedÃ³ reducido a fallback genÃ©rico (~50 lÃ­neas, solo "Post Detail - Share Article") para `single.php`/`home.php` (blog). Helper `orange_latam_enqueue_versioned_style()` centraliza el cache-busting por `filemtime()`.
- Nueva plantilla dedicada `page-podcast.php` para la pÃ¡gina "Orange Studio Podcast" (`/podcast/`), maquetada fielmente a partir de la referencia de diseÃ±o `landing.png` y los 11 assets visuales cargados desde `postcash`: hero con video de YouTube embebido (`xkt_vSw_FK8`), grilla de 4 pilares, split block de entregables tÃ©cnicos, carrusel interactivo de 3 escenarios (The Podcast Loft, Urban Corner, Estudio Noir) y formulario de reservaciÃ³n de sesiÃ³n a 2 columnas.
- RediseÃ±o responsive mÃ³vil completo de la Home: cuadrÃ­cula 2x2 fluida para la barra de estadÃ­sticas (`.stats`), layout de 1 sola columna para la secciÃ³n interactiva de Servicios (`.services-corp`), paddings laterales optimizados (`20px`), texto de descripciÃ³n alineado a la izquierda sin espacios gigantes y grids de Voz de Expertos y Formulario adaptativos.
- AplicaciÃ³n estricta de las tipografÃ­as `PP Editorial New` (serif editorial) y `PP Neue Montreal` (sans-serif) a todas las secciones de la Home y subpÃ¡ginas segÃºn el PDF de especificaciones.
- Fallbacks tipogrÃ¡ficos web en Google Fonts (`Cormorant Garamond`, `Plus Jakarta Sans`) para garantizar renderizado inmediato en navegadores sin los archivos locales `.woff2`.
- CreaciÃ³n de la estructura de directorio `assets/fonts/` en el tema `orange-latam`.
- Enlace del servicio "Marketing de Influencers" (fila 02 del bloque `services-corp` en `index.php`) hacia `/marketing-de-influencers/`, wireado dinÃ¡micamente vÃ­a `data-link` en `main.js` (botÃ³n "MÃ¡s informaciÃ³n" cambia de destino segÃºn la fila activa).
- Nueva theme location de menÃº `influencers` (`functions.php`), con menÃº "MenÃº Influencers Orange" auto-creado y auto-asignado en `class-theme-setup.php` (mismo patrÃ³n que los menÃºs Principal y Blog), para que se active solo al desplegar el tema en el hosting sin pasos manuales. Ãtems actuales (Inicio, Servicios, Preguntas Frecuentas, Casos de Exito, Â¿Por quÃ© nosotros?, Contacto) son anclas placeholder pendientes de enlazar a sus secciones/pÃ¡ginas reales.
- `header.php` distingue el contexto de la pÃ¡gina `marketing-de-influencers` del contexto de blog, usando la nueva location `influencers` en vez de `blog`. El comportamiento del menÃº (hamburguesa, panel deslizable, `header--scrolled`) es compartido vÃ­a las mismas clases `.header`/`.header__nav`/`.header__burger`, por lo que ya coincide con el de la home sin cambios adicionales.
- Hero de `marketing-de-influencers` rediseÃ±ado como video de fondo full-bleed con viÃ±eta (mismo tratamiento visual que `.hero`/`.hero__video`/`.hero__vignette` de la home), reemplazando el placeholder en caja `.infl-hero__media`. Video real: `assets/videos/marketing-de-influencers-hero.mp4` (copiado desde `design/marketingInfluencer/resource/`).
- A pedido del cliente, se retirÃ³ el bloque de texto superpuesto del hero (badge "Moda & Belleza", tÃ­tulo, subtÃ­tulo y estadÃ­stica "+1,800"); el hero queda como video puro sin contenido textual encima.
- Vuelto a agregar tÃ­tulo al hero de `marketing-de-influencers` ("Somos la mejor agencia de Marketing de Influencers del PerÃº"), en blanco, tamaÃ±o grande y alineado a la izquierda sobre el video.
- Ajustes de legibilidad del hero tras feedback visual: quitado el salto de lÃ­nea forzado (ahora el texto hace wrap natural), agregado `text-shadow` al tÃ­tulo para que no se pierda sobre fotogramas claros del video, y scrim permanente detrÃ¡s del header (`.page-template-page-marketing-de-influencers-php .header`) para que el menÃº no se mezcle con el contenido del video al cargar la pÃ¡gina (antes solo oscurecÃ­a al hacer scroll).
- Nueva secciÃ³n `infl-awards` en `marketing-de-influencers` (fondo claro, segÃºn referencia de diseÃ±o): tÃ­tulo + pill "Marketing de Influencers: agencia especializada en PerÃº" + carrusel de premios. Carrusel implementado con scroll nativo + snap, flechas y dots sincronizados (`initInflAwardsCarousel()` en `main.js`).
- Carrusel de premios completado con los 8 logos y textos reales (Sabre Global World, Sabre Latin America x2, Effie, Purpose, PR Week Global, IPRA Golden World, Cannes Lions), descargados desde `orange-la.com` (sitio de referencia del cliente) a `assets/images/awards/`, reemplazando los placeholders de texto.
- Carrusel de premios convertido a ticker de movimiento continuo (igual al HTML de referencia del cliente): slides duplicadas una vez y animadas por CSS (`@keyframes infl-awards-scroll`, `translateX(0)` â†’ `translateX(-50%)`) para loop infinito sin salto, con mÃ¡scara de desvanecido en los bordes, pausa al hacer hover y respeto a `prefers-reduced-motion`. Se eliminÃ³ el control por flechas/dots y el JS asociado (`initInflAwardsCarousel` en `main.js`), ya no necesario al ser 100% CSS.
- Nueva secciÃ³n `infl-stat-block` en `marketing-de-influencers` (entre el carrusel de premios y la barra "Creamos vÃ­nculos autÃ©nticos..."): par de pÃ­ldoras con la estadÃ­stica "Durante el 2025 trabajamos con +28 Influencers", mÃ¡s una imagen grande con esquinas redondeadas y una burbuja de texto superpuesta describiendo el servicio. Imagen como placeholder (`.infl-stat-block__img-placeholder`): recurso grÃ¡fico pendiente de carga por el cliente, no existe en `design/marketingInfluencer/`.
- Ajuste de ancho: las pÃ­ldoras de estadÃ­stica ahora se estiran al 100% del ancho del contenedor (40%/60% en desktop), alineÃ¡ndose con el ancho de la imagen inferior en vez de quedar del tamaÃ±o de su contenido.
- Corregido el valor real de la estadÃ­stica (era "+28", debe ser "+1,800") y convertido en contador animado: `initStatsCounter()` (`main.js`) ahora tambiÃ©n observa `.infl-stat-block__number` (antes solo `.stats__value` del home), con formato de miles vÃ­a `toLocaleString('es-PE')`.
- TamaÃ±o de la caja de estadÃ­stica reducido y centrada (`width: fit-content; margin: 0 auto`) en vez de estirarse al 100% del ancho del contenedor â€” coincide con el tamaÃ±o real de la referencia del cliente.
- Foto real de `infl-stat-block` cargada (`design/marketingInfluencer/resource/chica_foto.webp` â†’ `assets/images/marketing-de-influencers-contenido.webp`), reemplazando el placeholder `.infl-stat-block__img-placeholder`.
- Caja de estadÃ­stica corregida: se veÃ­a desproporcionada respecto a la foto de abajo (nÃºmero gigante encimÃ¡ndose con "INFLUENCERS"). Se fijÃ³ `max-width: 380px` y tamaÃ±o de fuente fijo (28px nÃºmero / 10px sufijo, sin `vw`/`clamp` que crecÃ­a sin control en pantallas anchas), quedando pequeÃ±a y proporcional a la imagen, igual que la referencia del cliente.
- Retirado definitivamente el tÃ­tulo superpuesto del hero de `marketing-de-influencers` ("Somos la mejor agencia de Marketing de Influencers del PerÃº") â€” el hero queda como video puro con viÃ±eta, sin texto encima. CSS huÃ©rfano (`.infl-hero__content`, `.infl-hero__title`) eliminado.

## [0.2.0] - 2026-07-02
### AÃ±adido
- MenÃº secundario "Inicio / Blog" (theme location `blog`) para el Ã­ndice del blog, artÃ­culos individuales y pÃ¡ginas de servicio, con logo enlazando a la home real.
- Botones de compartir artÃ­culo (WhatsApp, Facebook, Twitter/X, LinkedIn, Telegram, Email) en `single.php`.
- MenÃº responsive (hamburguesa + panel deslizable + overlay) en `header.php` / `main.js`.
- Video como primer slide del Hero Slider (`assets/videos/`), con reproducciÃ³n/pausa automÃ¡tica segÃºn el slide activo.
- SecciÃ³n "Voz de Expertos" del home conectada a posts reales de WordPress, filtrados por la etiqueta `voz-de-expertos` (`orange_latam_get_expert_posts()`).
- Imagen destacada reordenada para aparecer encima del tÃ­tulo en la vista de artÃ­culo individual.
- PÃ¡gina de servicio `marketing-de-influencers`: auto-creaciÃ³n de pÃ¡gina + template dedicado `page-marketing-de-influencers.php`, con contenido copiado fielmente de la referencia de diseÃ±o para preservar el SEO existente. Recursos visuales (imÃ¡genes) pendientes de carga por el cliente.

### Corregido
- Cache-busting de `style.css`/`main.js` vÃ­a `filemtime()` en vez de una versiÃ³n estÃ¡tica, evitando que el navegador sirva CSS/JS desactualizado tras cada ediciÃ³n.
- Pesos de fuente Inter (800/900) agregados a la carga de Google Fonts â€” corrige texto renderizado con negrita falsa en `.awards-list__item`.
- `.header__overlay` sin `display:none` por defecto rompÃ­a el `justify-content: space-between` del header en desktop, descuadrando el menÃº.
- MenÃº mÃ³vil (hamburguesa) sin funcionar en la pÃ¡gina Podcast: el CSS del panel deslizable (`.header__nav` fijo, `--open`, `__overlay--visible`, `body.header-nav-open`) solo existÃ­a en un bloque de responsive mezclado de `style.css` y nunca se copiÃ³ a `base.css` durante el primer split de CSS por pÃ¡gina. Movido a `base.css`, ahora funciona en todas las pÃ¡ginas.
- Hero en video de `marketing-digital` (`.infl-hero`, `.infl-hero__video-bg`, `.infl-hero__vignette`) sin estilos tras el split de CSS por pÃ¡gina: el componente solo vivÃ­a en el hijo de Influencers. Duplicado en `marketing-digital.css`.

### Eliminado
- Todas las entradas de prueba/anteriores (`post_type=post`) y sus metadatos/comentarios asociados, previo a la carga de contenido real por el cliente.

## [0.1.0] - 2026-07-02
### AÃ±adido
- DocumentaciÃ³n inicial del proyecto (`docs/`): PRD, SDD, SYSTEM_SPEC, DATA_MODEL, ARCHITECTURE, TASKS, DECISIONS y CHANGELOG.
- DefiniciÃ³n de requisitos para el tema auto-actualizable/auto-configurable de Orange Latam.
