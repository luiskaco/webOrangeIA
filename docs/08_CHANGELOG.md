# 08_CHANGELOG.md — Historial de Versiones

## [Unreleased]
### Añadido
- Enlace del servicio "Marketing de Influencers" (fila 02 del bloque `services-corp` en `index.php`) hacia `/marketing-de-influencers/`, wireado dinámicamente vía `data-link` en `main.js` (botón "Más información" cambia de destino según la fila activa).
- Nueva theme location de menú `influencers` (`functions.php`), con menú "Menú Influencers Orange" auto-creado y auto-asignado en `class-theme-setup.php` (mismo patrón que los menús Principal y Blog), para que se active solo al desplegar el tema en el hosting sin pasos manuales. Ítems actuales (Inicio, Servicios, Preguntas Frecuentas, Casos de Exito, ¿Por qué nosotros?, Contacto) son anclas placeholder pendientes de enlazar a sus secciones/páginas reales.
- `header.php` distingue el contexto de la página `marketing-de-influencers` del contexto de blog, usando la nueva location `influencers` en vez de `blog`. El comportamiento del menú (hamburguesa, panel deslizable, `header--scrolled`) es compartido vía las mismas clases `.header`/`.header__nav`/`.header__burger`, por lo que ya coincide con el de la home sin cambios adicionales.
- Hero de `marketing-de-influencers` rediseñado como video de fondo full-bleed con viñeta (mismo tratamiento visual que `.hero`/`.hero__video`/`.hero__vignette` de la home), reemplazando el placeholder en caja `.infl-hero__media`. Video real: `assets/videos/marketing-de-influencers-hero.mp4` (copiado desde `design/marketingInfluencer/resource/`).
- A pedido del cliente, se retiró el bloque de texto superpuesto del hero (badge "Moda & Belleza", título, subtítulo y estadística "+1,800"); el hero queda como video puro sin contenido textual encima.
- Vuelto a agregar título al hero de `marketing-de-influencers` ("Somos la mejor agencia de Marketing de Influencers del Perú"), en blanco, tamaño grande y alineado a la izquierda sobre el video.
- Ajustes de legibilidad del hero tras feedback visual: quitado el salto de línea forzado (ahora el texto hace wrap natural), agregado `text-shadow` al título para que no se pierda sobre fotogramas claros del video, y scrim permanente detrás del header (`.page-template-page-marketing-de-influencers-php .header`) para que el menú no se mezcle con el contenido del video al cargar la página (antes solo oscurecía al hacer scroll).
- Nueva sección `infl-awards` en `marketing-de-influencers` (fondo claro, según referencia de diseño): título + pill "Marketing de Influencers: agencia especializada en Perú" + carrusel de premios. Carrusel implementado con scroll nativo + snap, flechas y dots sincronizados (`initInflAwardsCarousel()` en `main.js`).
- Carrusel de premios completado con los 8 logos y textos reales (Sabre Global World, Sabre Latin America x2, Effie, Purpose, PR Week Global, IPRA Golden World, Cannes Lions), descargados desde `orange-la.com` (sitio de referencia del cliente) a `assets/images/awards/`, reemplazando los placeholders de texto.
- Carrusel de premios convertido a ticker de movimiento continuo (igual al HTML de referencia del cliente): slides duplicadas una vez y animadas por CSS (`@keyframes infl-awards-scroll`, `translateX(0)` → `translateX(-50%)`) para loop infinito sin salto, con máscara de desvanecido en los bordes, pausa al hacer hover y respeto a `prefers-reduced-motion`. Se eliminó el control por flechas/dots y el JS asociado (`initInflAwardsCarousel` en `main.js`), ya no necesario al ser 100% CSS.
- Nueva sección `infl-stat-block` en `marketing-de-influencers` (entre el carrusel de premios y la barra "Creamos vínculos auténticos..."): par de píldoras con la estadística "Durante el 2025 trabajamos con +28 Influencers", más una imagen grande con esquinas redondeadas y una burbuja de texto superpuesta describiendo el servicio. Imagen como placeholder (`.infl-stat-block__img-placeholder`): recurso gráfico pendiente de carga por el cliente, no existe en `design/marketingInfluencer/`.
- Ajuste de ancho: las píldoras de estadística ahora se estiran al 100% del ancho del contenedor (40%/60% en desktop), alineándose con el ancho de la imagen inferior en vez de quedar del tamaño de su contenido.
- Corregido el valor real de la estadística (era "+28", debe ser "+1,800") y convertido en contador animado: `initStatsCounter()` (`main.js`) ahora también observa `.infl-stat-block__number` (antes solo `.stats__value` del home), con formato de miles vía `toLocaleString('es-PE')`.
- Tamaño de la caja de estadística reducido y centrada (`width: fit-content; margin: 0 auto`) en vez de estirarse al 100% del ancho del contenedor — coincide con el tamaño real de la referencia del cliente.
- Foto real de `infl-stat-block` cargada (`design/marketingInfluencer/resource/chica_foto.webp` → `assets/images/marketing-de-influencers-contenido.webp`), reemplazando el placeholder `.infl-stat-block__img-placeholder`.
- Caja de estadística corregida: se veía desproporcionada respecto a la foto de abajo (número gigante encimándose con "INFLUENCERS"). Se fijó `max-width: 380px` y tamaño de fuente fijo (28px número / 10px sufijo, sin `vw`/`clamp` que crecía sin control en pantallas anchas), quedando pequeña y proporcional a la imagen, igual que la referencia del cliente.
- Retirado definitivamente el título superpuesto del hero de `marketing-de-influencers` ("Somos la mejor agencia de Marketing de Influencers del Perú") — el hero queda como video puro con viñeta, sin texto encima. CSS huérfano (`.infl-hero__content`, `.infl-hero__title`) eliminado.

## [0.2.0] - 2026-07-02
### Añadido
- Menú secundario "Inicio / Blog" (theme location `blog`) para el índice del blog, artículos individuales y páginas de servicio, con logo enlazando a la home real.
- Botones de compartir artículo (WhatsApp, Facebook, Twitter/X, LinkedIn, Telegram, Email) en `single.php`.
- Menú responsive (hamburguesa + panel deslizable + overlay) en `header.php` / `main.js`.
- Video como primer slide del Hero Slider (`assets/videos/`), con reproducción/pausa automática según el slide activo.
- Sección "Voz de Expertos" del home conectada a posts reales de WordPress, filtrados por la etiqueta `voz-de-expertos` (`orange_latam_get_expert_posts()`).
- Imagen destacada reordenada para aparecer encima del título en la vista de artículo individual.
- Página de servicio `marketing-de-influencers`: auto-creación de página + template dedicado `page-marketing-de-influencers.php`, con contenido copiado fielmente de la referencia de diseño para preservar el SEO existente. Recursos visuales (imágenes) pendientes de carga por el cliente.

### Corregido
- Cache-busting de `style.css`/`main.js` vía `filemtime()` en vez de una versión estática, evitando que el navegador sirva CSS/JS desactualizado tras cada edición.
- Pesos de fuente Inter (800/900) agregados a la carga de Google Fonts — corrige texto renderizado con negrita falsa en `.awards-list__item`.
- `.header__overlay` sin `display:none` por defecto rompía el `justify-content: space-between` del header en desktop, descuadrando el menú.

### Eliminado
- Todas las entradas de prueba/anteriores (`post_type=post`) y sus metadatos/comentarios asociados, previo a la carga de contenido real por el cliente.

## [0.1.0] - 2026-07-02
### Añadido
- Documentación inicial del proyecto (`docs/`): PRD, SDD, SYSTEM_SPEC, DATA_MODEL, ARCHITECTURE, TASKS, DECISIONS y CHANGELOG.
- Definición de requisitos para el tema auto-actualizable/auto-configurable de Orange Latam.
