<?php
/**
 * The template for displaying the blog posts index.
 *
 * @package Orange_Latam
 */

get_header();
?>

<main class="blog-index" style="background: var(--color-bg-dark); color: var(--color-bg-light); padding: 120px 48px 96px; min-height: 80vh;">
	<div class="blog-index__container" style="max-width: 1320px; margin: 0 auto;">
		<header class="blog-index__header" style="margin-bottom: 64px;" data-reveal="up">
			<span style="font-size: 11px; font-weight: 700; color: var(--color-orange); letter-spacing: 0.1em; text-transform: uppercase; display: block; margin-bottom: 12px;">Novedades y Opinión</span>
			<h1 style="font-family: var(--font-display); font-weight: 900; font-size: clamp(38px, 5vw, 64px); line-height: 1.05; letter-spacing: -0.01em; margin: 0; color: var(--color-bg-light);">
				BLOG & NOTICIAS
			</h1>
		</header>

		<?php if ( have_posts() ) : ?>
			<div class="blog-index__grid" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 36px 24px;">
				<?php while ( have_posts() ) : the_post(); ?>
					<article class="blog-card" style="display: flex; flex-direction: column;">
						<a href="<?php the_permalink(); ?>" class="blog-card__img-link" style="display: block; margin-bottom: 20px; overflow: hidden; background: #14120f; border: 1px solid rgba(252, 245, 233, 0.1);">
							<?php if ( has_post_thumbnail() ) : ?>
								<?php the_post_thumbnail('medium_large', array('style' => 'width: 100%; height: 240px; object-fit: cover; display: block; transition: transform 0.3s;')); ?>
							<?php else : ?>
								<div style="width: 100%; height: 240px; background: #14120f; color: rgba(252, 245, 233, 0.4); display: flex; align-items: center; justify-content: center; font-weight: 600; font-size: 14px;">
									ORANGE STUDIO
								</div>
							<?php endif; ?>
						</a>
						<div class="blog-card__meta" style="font-size: 11px; font-weight: 700; color: var(--color-orange); margin-bottom: 12px; text-transform: uppercase; letter-spacing: 0.05em;">
							<?php echo get_the_date(); ?>
						</div>
						<h2 class="blog-card__title" style="margin: 0 0 14px; font-family: var(--font-display); font-weight: 700; font-size: clamp(20px, 2.2vw, 26px); line-height: 1.25;">
							<a href="<?php the_permalink(); ?>" style="color: var(--color-bg-light); text-decoration: none; transition: color 0.2s;"><?php the_title(); ?></a>
						</h2>
						<div class="blog-card__excerpt" style="font-size: 13.5px; line-height: 1.65; color: rgba(252, 245, 233, 0.6); margin-bottom: 20px;">
							<?php echo wp_trim_words( get_the_excerpt(), 18, '...' ); ?>
						</div>
						<a href="<?php the_permalink(); ?>" style="font-size: 11px; font-weight: 700; color: var(--color-blue); text-decoration: none; text-transform: uppercase; letter-spacing: 0.05em; display: inline-flex; align-items: center; gap: 6px;">
							Leer nota <span style="font-size: 14px;">→</span>
						</a>
					</article>
				<?php endwhile; ?>
			</div>

			<!-- Pagination -->
			<div class="blog-pagination" style="margin-top: 64px; display: flex; gap: 12px; justify-content: center;">
				<?php
				echo paginate_links( array(
					'prev_text' => '← Anterior',
					'next_text' => 'Siguiente →',
				) );
				?>
			</div>
		<?php else : ?>
			<p>No se encontraron publicaciones por el momento.</p>
		<?php endif; ?>
	</div>
</main>

<?php
get_footer();
