# 07_DECISIONS.md — Registro de Decisiones de Arquitectura (ADR)

## ADR 1: Auto-inicialización del Tema en WordPress
- **Estatus:** Aceptado (con nota de implementación).
- **Contexto:** Se requiere que el tema funcione de manera autónoma al ser instalado en otros servidores (multi-hosting), auto-generando sus páginas y menús.
- **Decisión:** Usar el hook `after_switch_theme` de WordPress para disparar una clase PHP que verifique y cree la estructura de páginas y menús dinámicamente si no existen.
- **Consecuencias:** Despliegue en 1 click para el cliente. La base de datos se poblará automáticamente con la estructura necesaria.
- **Nota de implementación:** `Orange_Theme_Setup` (`inc/class-theme-setup.php`) en realidad engancha la lógica al hook `init` (no `after_switch_theme`), ejecutándose en cada carga de página. Cada bloque de creación verifica primero si el recurso existe (patrón "self-healing") antes de crearlo, por lo que el resultado práctico es equivalente o más robusto: basta con una visita al sitio tras copiar el tema/BD a otro hosting para que páginas y menús se regeneren, sin depender de que WordPress dispare el evento de activación (que no ocurre en migraciones por copia directa de archivos + BD).

## ADR 2: Páginas de Servicio como Templates Independientes (`page-{slug}.php`)
- **Estatus:** Aceptado.
- **Contexto:** El sitio es una landing de página única (ver `05_ARCHITECTURE.md`), pero se requieren páginas de servicio adicionales (ej. `marketing-de-influencers`) con SEO y contenido propio, migradas de un sitio anterior donde cada servicio tenía su propia URL indexada.
- **Decisión:** Cada página de servicio se implementa como un template dedicado siguiendo la jerarquía de plantillas de WordPress `page-{slug}.php` (ej. `page-marketing-de-influencers.php`), en vez de usar el editor de bloques o un constructor de páginas. El slug de la página se define explícitamente en `Orange_Theme_Setup::setup_theme_defaults()` (igual que `Inicio` y `Blog`) para que la URL final coincida exactamente con la del sitio anterior y no se pierda el posicionamiento SEO ya ganado.
- **Consecuencias:** Cada página de servicio nueva requiere: (1) agregar su slug/título al array `$pages_to_create` en `inc/class-theme-setup.php`, y (2) crear el archivo `page-{slug}.php` correspondiente en la raíz del tema. Estas páginas reutilizan el menú ligero "Inicio / Blog" (`theme location 'blog'`) en vez del menú de anclas del landing, ya que sus anclas (`#nosotros`, `#servicios`, etc.) no existen fuera de la home. Ver `header.php` (`$is_blog_context`).
