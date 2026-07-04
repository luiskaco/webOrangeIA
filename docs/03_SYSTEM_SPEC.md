# 03_SYSTEM_SPEC.md — Especificaciones Técnicas

## 1. Stack Tecnológico
- **WordPress:** Compatible con versión 6.0+ y PHP 8.0+.
- **Frontend:**
  - **JS:** Vanilla JS (ES6+), modularizado. Sin jQuery.
  - **CSS:** CSS Nativo. Variables CSS para el sistema de diseño, Flexbox/Grid para layouts, y tipografía responsiva (`clamp()`).
  - **HTML:** HTML5 semántico.

## 2. Convenciones de Código
- **CSS:**
  - Naming: BEM (Block Element Modifier). Ej: `.nav__link--active`.
  - Variables CSS para colores (`--color-orange`, `--color-dark`, `--color-light`) y fuentes.
  - Media queries Mobile-first (`min-width`).
- **JavaScript:**
  - Sin dependencias de terceros para slider ni animaciones.
  - Animaciones utilizando `IntersectionObserver` para reveal.
  - Uso de clases ES6 o módulos de JS.

## 3. Requisitos de Autoconfiguración (PHP)
- Uso de `wp_insert_post` para crear páginas programáticamente.
- Uso de `wp_create_nav_menu` y `wp_update_nav_menu_item` para el menú.
- Guardado seguro de estado para evitar duplicar páginas al reactivar.
