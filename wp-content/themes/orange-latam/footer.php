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
if ( is_home() || is_singular( 'post' ) || is_page( 'marketing-de-influencers' ) || is_page( 'marketing-digital' ) || is_page( 'podcast' ) || is_page_template( 'page-podcast.php' ) || is_page( 'pr-gestion-reputacion' ) || is_page_template( 'page-pr-gestion-reputacion.php' ) || is_page( 'asuntos-publicos' ) || is_page_template( 'page-asuntos-publicos.php' ) ) :
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
					<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#38b6ff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
					<a href="tel:51993595232">(+51) 993 595 232</a>
				</p>
				<div class="infl-prefooter__social">
					<a href="#" class="infl-prefooter__social-link" aria-label="Instagram">
						<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
					</a>
					<a href="#" class="infl-prefooter__social-link" aria-label="Facebook">
						<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>
					</a>
					<a href="#" class="infl-prefooter__social-link" aria-label="TikTok">
						<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 12a4 4 0 1 0 4 4V4a5 5 0 0 0 5 5"></path></svg>
					</a>
					<a href="#" class="infl-prefooter__social-link" aria-label="LinkedIn">
						<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg>
					</a>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>

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
