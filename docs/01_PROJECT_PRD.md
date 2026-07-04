# 01_PROJECT_PRD.md — Requisitos de Producto

## 1. Visión General
Crear un tema de WordPress premium y auto-instalable/auto-configurable para **Orange Latam**. El tema debe estar optimizado para velocidad, utilizando HTML5 semántico, JavaScript nativo (Vanilla JS) y CSS puro (sin dependencias pesadas ni frameworks CSS externos como Tailwind, a menos que se configure/solicite expresamente).

## 2. Objetivos Principales
- **Fácil Despliegue (Auto-configurable):** Al activar el tema en cualquier instalación de WordPress, debe crear automáticamente las páginas necesarias, estructurar el menú de navegación y configurar las opciones básicas.
- **Rendimiento Excelente:** Carga rápida gracias al uso de JS y CSS nativos, minimizando peticiones HTTP.
- **Interactividad e Impacto Visual:** Implementar sliders, animaciones al hacer scroll (reveal), cambio de secciones dinámicas (corporativo vs. asuntos sensibles) y adaptabilidad total (mobile-first).

## 3. Requisitos de Producto (Features)
- **Home (Primera Vista):**
  - **Nav:** Barra de navegación sticky con logo y enlaces a secciones.
  - **Hero Slider:** Slider de imágenes interactivo y auto-reproducible con transiciones suaves.
  - **Stats Bar:** Barra con datos clave de la empresa.
  - **Sección Nosotros:** Misión, visión e información corporativa.
  - **Sección Servicios Interactivos:** Interruptor dinámico para alternar entre "Comunicación Estratégica" (Corporativo) y "Gestión de Asuntos Sensibles".
  - **Premios y Festivales:** Carrusel o visualizador interactivo de premios.
  - **Sectores:** Grid de sectores económicos atendidos.
  - **Voz de Expertos:** Artículos de opinión de líderes de la agencia con paginación/carrusel.
  - **Contacto:** Formulario de contacto nativo y datos de ubicación/redes sociales.
  - **Footer:** Derechos reservados y enlaces legales.

## 4. Auto-inicialización / Auto-actualización
- **Hooks de Activación:** Al activarse el tema (`after_switch_theme`), se verificará la existencia de:
  - Página de inicio (Landing Page). Si no existe, se creará programáticamente.
  - Menú de navegación asignado al theme location correspondiente con enlaces de tipo ancla (#inicio, #nosotros, etc.).
  - Configuración básica de WordPress (página de inicio estática).
