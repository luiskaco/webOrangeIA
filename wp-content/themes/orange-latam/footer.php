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
if ( is_home() || is_singular( 'post' ) || is_page( 'marketing-de-influencers' ) || is_page( 'marketing-digital' ) ) :
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
					<a href="tel:993595252">993-595-252</a>
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

<?php wp_footer(); ?>
</body>
</html>
