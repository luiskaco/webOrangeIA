<?php
/**
 * Template for the Política de Privacidad page.
 *
 * @package Orange_Latam
 */

get_header();
?>

<main class="post-detail" style="background: var(--color-bg-dark); color: var(--color-bg-light); padding: 120px 48px 96px; min-height: 60vh;">
	<article class="post-detail__container" style="max-width: 800px; margin: 0 auto;">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<header class="post-detail__header" style="margin-bottom: 48px;">
				<h1 style="font-family: var(--font-display); font-weight: 900; font-size: clamp(32px, 4vw, 54px); line-height: 1.15; letter-spacing: -0.01em; margin: 0; color: var(--color-bg-light);">
					<?php the_title(); ?>
				</h1>
			</header>

			<div class="post-detail__content" style="font-size: 16px; line-height: 1.8; color: rgba(252, 245, 233, 0.8);">
				<?php the_content(); ?>
			</div>

		<?php endwhile; endif; ?>
	</article>
</main>

<?php
get_footer();
