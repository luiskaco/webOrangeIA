<?php
/**
 * The template for displaying the footer
 *
 * @package Orange_Latam
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<?php
// Mostrar el prefooter de contacto solo en las vistas del Blog y las páginas de Servicio específicas.
if ( is_home() || is_singular( 'post' ) || is_page( 'marketing-de-influencers' ) || is_page( 'marketing-digital' ) || is_page( 'eventos-activaciones' ) || is_page_template( 'page-eventos-activaciones.php' ) || is_page( 'podcast' ) || is_page_template( 'page-podcast.php' ) || is_page( 'pr-gestion-reputacion' ) || is_page_template( 'page-pr-gestion-reputacion.php' ) || is_page( 'asuntos-publicos' ) || is_page_template( 'page-asuntos-publicos.php' ) || is_page( 'branding-creatividad' ) || is_page_template( 'page-branding-creatividad.php' ) || is_page( 'gestion-de-acceso' ) || is_page_template( 'page-gestion-de-acceso.php' ) || is_page( 'presencia-digital' ) || is_page_template( 'page-presencia-digital.php' ) ) :
?>
	<!-- ==========================================
	     CONTACTO (PRE-FOOTER)
	     ========================================== -->
	<section class="infl-prefooter" id="contacto">
		<div class="infl-prefooter__container">
			<div class="infl-prefooter__col infl-prefooter__col--slogan" data-reveal="fade">
				<h2 class="infl-prefooter__slogan">
					<span class="infl-prefooter__slogan-white">No hacemos ruido</span><br>
					<span class="infl-prefooter__slogan-blue">Hacemos conversiones</span>
				</h2>
			</div>
			
			<div class="infl-prefooter__col infl-prefooter__col--address" data-reveal="fade">
				<p>Centro Empresarial Abril</p>
				<p>Calle Enrique Palacios 360 Of. 306 Miraflores</p>
				<p class="infl-prefooter__email">
					<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
					<a href="mailto:negocios@orange-la.com">negocios@orange-la.com</a>
				</p>
			</div>

			<div class="infl-prefooter__col infl-prefooter__col--contact" data-reveal="fade">
				<p class="infl-prefooter__contact-label">Contacto:</p>
				<p class="infl-prefooter__phone">
					<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#38b6ff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
					<a href="tel:51993595232">(+51) 993 595 232</a>
				</p>
				<div class="infl-prefooter__social">
					<a href="https://www.facebook.com/Orange360Latam?locale=es_LA" target="_blank" rel="noopener noreferrer" class="infl-prefooter__social-link" aria-label="Facebook">
						<svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M22 12a10 10 0 1 0-11.6 9.9v-7H7.9V12h2.5V9.8c0-2.5 1.5-3.9 3.8-3.9 1.1 0 2.2.2 2.2.2v2.5h-1.2c-1.2 0-1.6.8-1.6 1.6V12h2.8l-.4 2.9h-2.4v7A10 10 0 0 0 22 12z"></path></svg>
					</a>
					<a href="https://www.instagram.com/orange_latam/" target="_blank" rel="noopener noreferrer" class="infl-prefooter__social-link" aria-label="Instagram">
						<svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.2c3.2 0 3.6 0 4.9.07 3.3.15 4.8 1.7 5 5 .06 1.3.07 1.6.07 4.8s0 3.5-.07 4.8c-.15 3.3-1.7 4.8-5 5-1.3.06-1.6.07-4.9.07s-3.6 0-4.9-.07c-3.3-.15-4.8-1.7-5-5C2.04 15.6 2 15.3 2 12s0-3.5.07-4.8c.15-3.3 1.7-4.85 5-5C8.4 2.24 8.8 2.2 12 2.2zm0 1.8c-3.1 0-3.5 0-4.7.07-2.4.1-3.6 1.3-3.7 3.7C3.5 8.9 3.5 9.3 3.5 12s0 3.1.07 4.3c.1 2.4 1.3 3.6 3.7 3.7 1.2.06 1.6.07 4.7.07s3.5 0 4.7-.07c2.4-.1 3.6-1.3 3.7-3.7.06-1.2.07-1.6.07-4.3s0-3.1-.07-4.3c-.1-2.4-1.3-3.6-3.7-3.7C15.5 4 15.1 4 12 4zm0 3.4a4.6 4.6 0 1 1 0 9.2 4.6 4.6 0 0 1 0-9.2zm0 1.8a2.8 2.8 0 1 0 0 5.6 2.8 2.8 0 0 0 0-5.6zm5.9-2a1.08 1.08 0 1 1-2.15 0 1.08 1.08 0 0 1 2.15 0z"></path></svg>
					</a>
					<a href="https://pe.linkedin.com/company/orangelatam" target="_blank" rel="noopener noreferrer" class="infl-prefooter__social-link" aria-label="LinkedIn">
						<svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M4.98 3.5C4.98 4.9 3.87 6 2.5 6S0 4.9 0 3.5 1.12 1 2.5 1s2.48 1.1 2.48 2.5zM.2 8.24h4.6V23H.2V8.24zM8.4 8.24h4.4v2h.06c.6-1.1 2.1-2.3 4.3-2.3 4.6 0 5.5 3 5.5 6.9V23h-4.6v-6.9c0-1.6 0-3.7-2.3-3.7-2.3 0-2.6 1.8-2.6 3.6V23H8.4V8.24z"></path></svg>
					</a>
					<a href="https://www.tiktok.com/@orange_latam_studio" target="_blank" rel="noopener noreferrer" class="infl-prefooter__social-link" aria-label="TikTok">
						<svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-2.88 2.89 2.89 2.89 0 0 1-2.89-2.89 2.89 2.89 0 0 1 2.89-2.89c.32 0 .62.05.91.13v-3.52a6.37 6.37 0 0 0-.91-.07 6.34 6.34 0 0 0-6.34 6.34 6.34 6.34 0 0 0 6.34 6.34 6.34 6.34 0 0 0 6.34-6.34V8.75a8.16 8.16 0 0 0 4.76 1.5V6.8a4.86 4.86 0 0 1-1-.11z"></path></svg>
					</a>
					<a href="https://www.youtube.com/@orange_latam" target="_blank" rel="noopener noreferrer" class="infl-prefooter__social-link" aria-label="YouTube">
						<svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M23.5 6.2s-.2-1.6-.9-2.4c-.9-1-1.9-1-2.4-1.1C16.9 2.5 12 2.5 12 2.5s-4.9 0-8.2.2c-.5 0-1.5.1-2.4 1-.7.8-.9 2.4-.9 2.4S.3 8.1.3 10v1.9c0 1.9.2 3.8.2 3.8s.2 1.6.9 2.4c.9 1 2.1.9 2.6 1 1.9.2 8 .2 8 .2s4.9 0 8.2-.2c.5-.1 1.5-.1 2.4-1 .7-.8.9-2.4.9-2.4s.2-1.9.2-3.8V10c0-1.9-.2-3.8-.2-3.8zM9.6 14.4V7.6l6.5 3.4-6.5 3.4z"></path></svg>
					</a>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>

<!-- GLOBAL SERVICE CONTACT MODAL -->
<div id="global-contact-modal" class="g-modal" aria-hidden="true" role="dialog" aria-labelledby="g-modal-title">
	<div class="g-modal__overlay" tabindex="-1" data-close-modal></div>
	<div class="g-modal__dialog">
		<button type="button" class="g-modal__close" aria-label="Cerrar modal" data-close-modal>&times;</button>
		
		<div class="g-modal__header">
			<span class="g-modal__tag" id="g-modal-service-tag">Cotización de Servicio</span>
			<h2 class="g-modal__title" id="g-modal-title">Trabajemos juntos en tu proyecto</h2>
			<p class="g-modal__subtitle">Déjanos tus datos y un especialista senior de nuestro equipo se pondrá en contacto en menos de 24 horas.</p>
		</div>

		<form id="g-modal-form" class="g-modal__form" method="POST">
			<?php wp_nonce_field( 'orange_contact_nonce', 'contact_security' ); ?>
			<input type="hidden" name="action" value="send_service_contact">
			<input type="hidden" name="service_origin" id="g-modal-service-origin" value="<?php echo esc_attr( is_singular() ? get_the_title() : 'Contacto General' ); ?>">
			<input type="hidden" name="page_url" value="<?php echo esc_url( is_singular() ? get_permalink() : home_url( '/' ) ); ?>">
			<input type="hidden" name="contact_ts" value="<?php echo esc_attr( time() ); ?>">
			<div class="orange-hp-field" aria-hidden="true">
				<label for="g-modal-website">Website</label>
				<input type="text" id="g-modal-website" name="contact_website" tabindex="-1" autocomplete="off">
			</div>

			<div class="g-modal__field-group">
				<div class="g-modal__field">
					<label for="contact_name">Nombre y Apellido *</label>
					<input type="text" id="contact_name" name="contact_name" placeholder="Ej. Carlos Mendoza" required>
				</div>
				<div class="g-modal__field">
					<label for="contact_email">Correo Corporativo *</label>
					<input type="email" id="contact_email" name="contact_email" placeholder="ejemplo@empresa.com" required>
				</div>
			</div>

			<div class="g-modal__field-group">
				<div class="g-modal__field">
					<label for="contact_phone">Teléfono / WhatsApp *</label>
					<input type="tel" id="contact_phone" name="contact_phone" placeholder="+51 987 654 321" required>
				</div>
				<div class="g-modal__field">
					<label for="contact_company">Empresa / Organización</label>
					<input type="text" id="contact_company" name="contact_company" placeholder="Nombre de tu empresa">
				</div>
			</div>

			<div class="g-modal__field">
				<label for="contact_message">¿En qué podemos ayudarte? *</label>
				<textarea id="contact_message" name="contact_message" rows="4" placeholder="Describe brevemente tus objetivos, tiempos o necesidades del proyecto..." required></textarea>
			</div>

			<div class="g-modal__response" id="g-modal-response"></div>

			<div class="g-modal__actions">
				<button type="submit" class="g-modal__btn-submit" id="g-modal-submit-btn">
					<span>Enviar Solicitud</span>
					<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
				</button>
			</div>
		</form>
	</div>
</div>

<!-- FOOTER -->
<footer class="footer">
	<span class="footer__text">Todos los Derechos Reservados <?php echo esc_html( date( 'Y' ) ); ?>© Orange Latam SAC</span>
</footer>

<!-- Acciones Flotantes: WhatsApp y Volver Arriba -->
<div class="floating-actions">
	<!-- Botón Flotante de WhatsApp -->
	<a href="https://wa.me/51993595252?text=Hola%20Orange%20Latam%2C%20quisiera%20m%C3%A1s%20informaci%C3%B3n." class="floating-btn floating-btn--whatsapp" target="_blank" rel="noopener noreferrer" aria-label="Contactar por WhatsApp">
		<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
			<path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path>
		</svg>
		<span class="floating-btn__tooltip">¿Conversamos por WhatsApp?</span>
	</a>

	<!-- Botón Flotante Volver Arriba -->
	<button id="scroll-to-top" class="floating-btn floating-btn--top" aria-label="Volver arriba">
		<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
			<line x1="12" y1="19" x2="12" y2="5"></line>
			<polyline points="5 12 12 5 19 12"></polyline>
		</svg>
	</button>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
	var scrollTopBtn = document.getElementById('scroll-to-top');
	if (scrollTopBtn) {
		window.addEventListener('scroll', function() {
			if (window.scrollY > 300) {
				scrollTopBtn.classList.add('is-visible');
			} else {
				scrollTopBtn.classList.remove('is-visible');
			}
		});

		scrollTopBtn.addEventListener('click', function() {
			window.scrollTo({
				top: 0,
				behavior: 'smooth'
			});
		});
	}
});
</script>

<?php wp_footer(); ?>
</body>
</html>
