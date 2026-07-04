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

<!-- FOOTER -->
<footer class="footer">
	<span class="footer__text">Todos los Derechos Reservados <?php echo esc_html( date( 'Y' ) ); ?>© Orange Latam SAC</span>
</footer>

<?php wp_footer(); ?>
</body>
</html>
