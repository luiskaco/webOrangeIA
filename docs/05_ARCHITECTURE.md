# 05_ARCHITECTURE.md — Decisiones Arquitectónicas

## 1. Patrón Single Page Application (SPA) Híbrida en WordPress
Para el diseño de **Orange Latam** (que es una landing page de una sola página con secciones con anclaje como `#nosotros`, `#servicios`, etc.), la arquitectura se centra en cargar un único index de WordPress que encola todo el HTML estructurado en componentes (template parts).

## 2. Inicialización Automática Desploplada
En lugar de depender de que el administrador cree manualmente las páginas y menús, el tema asume la responsabilidad en su activación (`after_switch_theme`).
Esto garantiza que al mover el tema a un nuevo hosting o instalación limpia de WordPress, la web se visualice de inmediato idéntica al diseño provisto.

## 3. Lógica Reactiva Ligera en Vanilla JS
El diseño original de la carpeta `design/` incluye reactividad ligera (como cambiar entre corporativo y asuntos sensibles, sliders, etc.). Implementaremos un motor de reactividad nativo ultra-liviano o handlers de eventos directos en `main.js` para replicar el comportamiento interactivo sin cargar frameworks como React o Vue en producción.

## 4. Páginas de Servicio Independientes (fuera del SPA de anclas)
Además del landing de página única, el sitio soporta páginas de servicio con URL y SEO propios (migradas de un sitio anterior), como `/marketing-de-influencers/`. Estas páginas:
- Se auto-crean con slug fijo desde `Orange_Theme_Setup` (igual que `Inicio`/`Blog`), para preservar exactamente la URL indexada.
- Se renderizan con un template dedicado `page-{slug}.php` (jerarquía de plantillas nativa de WordPress), no con el editor de bloques.
- Usan el menú secundario "Inicio / Blog" (`header.php` → `$is_blog_context`) en vez de los anclajes del landing, ya que anclas como `#servicios` solo existen en la home.
- Ver ADR 2 en `07_DECISIONS.md` para el detalle de la decisión y sus consecuencias.
