# 04_DATA_MODEL.md — Esquema y Entidades

## 1. Estructura de Páginas (Posts de tipo page)
El tema creará los siguientes IDs/slugs en la base de datos de WordPress (`wp_posts`):

| Título | Slug | Post Type | Propósito |
|---|---|---|---|
| Mejor agencia de comunicación y relaciones públicas en Perú | `mejor-agencia-de-comunicacion-y-relaciones-publicas-en-peru` | `page` | Landing page principal de página única (front page estática, renderizada por `index.php`) |
| Blog | `blog` | `page` | Página de posts (`page_for_posts`), renderizada por `home.php` |
| Marketing de Influencers | `marketing-de-influencers` | `page` | Página de servicio independiente, renderizada por `page-marketing-de-influencers.php`. Slug fijo intencional para preservar el SEO del contenido migrado desde el sitio anterior |

## 2. Opciones de WordPress (`wp_options`)
Durante la auto-configuración del tema se alteran o crean las siguientes opciones:

- `show_on_front`: Cambiado a `'page'` para usar una página estática.
- `page_on_front`: Seteado al ID del post de la página con slug `mejor-agencia-de-comunicacion-y-relaciones-publicas-en-peru`.
- `orange_theme_initialized`: Flag booleano (`'1'`) para evitar que se ejecute la lógica de creación de contenido en cada carga si el tema se desactiva y reactiva.

## 3. Menús de Navegación (`wp_terms` / taxonomy `nav_menu`)
- **Menú Principal Orange** (theme location `primary`): enlaces ancla (`#inicio`, `#nosotros`, `#servicios`, `#premios`, `#contacto`), usado en el landing (`index.php`).
- **Menú Blog Orange** (theme location `blog`): enlaces reales "Inicio" (`home_url('/')`) y "Blog" (permalink de la página `blog`). Usado en el índice del blog, en cada artículo individual, y en la página `marketing-de-influencers` (ver `header.php`).

## 4. Taxonomías
- `post_tag` → `voz-de-expertos` (slug): etiqueta usada para filtrar qué entradas (`post_type=post`) se muestran en la sección "Voz de Expertos" del landing (`orange_latam_get_expert_posts()` en `functions.php`). Solo los posts publicados con esta etiqueta aparecen ahí.
