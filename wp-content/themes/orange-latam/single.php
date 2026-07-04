<?php
/**
 * The template for displaying all single posts.
 *
 * @package Orange_Latam
 */

get_header();
?>

<main class="post-detail" style="background: var(--color-bg-dark); color: var(--color-bg-light); padding: 120px 48px 96px; min-height: 80vh;">
	<article class="post-detail__container" style="max-width: 800px; margin: 0 auto;">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			
			<a href="<?php echo esc_url( get_post_type_archive_link( 'post' ) ? get_post_type_archive_link( 'post' ) : home_url( '/blog/' ) ); ?>" style="font-size: 11px; font-weight: 700; color: var(--color-blue); text-decoration: none; text-transform: uppercase; letter-spacing: 0.05em; display: inline-flex; align-items: center; gap: 6px; margin-bottom: 24px;">
				<span>←</span> Volver al blog
			</a>

			<?php if ( has_post_thumbnail() ) : ?>
				<div class="post-detail__thumbnail" style="margin-bottom: 32px; border: 1px solid rgba(252, 245, 233, 0.1);">
					<?php the_post_thumbnail( 'large', array( 'style' => 'width: 100%; height: auto; display: block;' ) ); ?>
				</div>
			<?php endif; ?>

			<header class="post-detail__header" style="margin-bottom: 48px;">
				<div class="post-detail__meta" style="font-size: 11px; font-weight: 700; color: var(--color-orange); margin-bottom: 16px; text-transform: uppercase; letter-spacing: 0.05em;">
					<?php echo get_the_date(); ?> • Por <?php the_author(); ?>
				</div>
				<h1 style="font-family: var(--font-display); font-weight: 900; font-size: clamp(32px, 4vw, 54px); line-height: 1.15; letter-spacing: -0.01em; margin: 0; color: var(--color-bg-light);">
					<?php the_title(); ?>
				</h1>
			</header>

			<div class="post-detail__content" style="font-size: 16px; line-height: 1.8; color: rgba(252, 245, 233, 0.8);">
				<?php the_content(); ?>
			</div>

			<?php
			$share_url   = urlencode( get_permalink() );
			$share_title = urlencode( get_the_title() );
			?>
			<div class="share">
				<div class="share__title">Compartir Artículo</div>
				<div class="share__list">
					<a href="https://wa.me/?text=<?php echo $share_title; ?>%20<?php echo $share_url; ?>" target="_blank" rel="noopener" class="share__link" aria-label="Compartir en WhatsApp">
						<svg viewBox="0 0 24 24"><path d="M17.5 14.4c-.3-.1-1.7-.8-1.9-.9-.3-.1-.4-.1-.6.1-.2.3-.7.9-.8 1-.2.2-.3.2-.5.1-.3-.1-1.2-.4-2.2-1.4-.8-.7-1.4-1.6-1.5-1.9-.2-.3 0-.4.1-.6.1-.1.3-.3.4-.5.1-.1.2-.3.2-.4.1-.2 0-.4 0-.5S10.2 8 10 7.5c-.2-.4-.4-.4-.6-.4h-.5c-.2 0-.5.1-.7.3-.3.3-1 1-1 2.4s1 2.8 1.2 3c.1.2 2 3 4.8 4.3.7.3 1.2.5 1.6.6.7.2 1.3.2 1.8.1.5-.1 1.7-.7 2-1.4.2-.7.2-1.2.1-1.4-.1-.1-.2-.2-.5-.3zM12 2.2C6.6 2.2 2.2 6.6 2.2 12c0 1.9.5 3.6 1.5 5.2L2.2 21.8l4.7-1.5c1.5.8 3.2 1.3 5 1.3 5.4 0 9.8-4.4 9.8-9.8S17.4 2.2 12 2.2zm0 17.7c-1.6 0-3.1-.4-4.5-1.2l-.3-.2-3.3 1 1-3.3-.2-.3c-.9-1.4-1.4-3-1.4-4.7 0-4.5 3.7-8.2 8.2-8.2s8.2 3.7 8.2 8.2-3.7 8.2-8.2 8.2z"></path></svg>
					</a>
					<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $share_url; ?>" target="_blank" rel="noopener" class="share__link" aria-label="Compartir en Facebook">
						<svg viewBox="0 0 24 24"><path d="M22 12a10 10 0 1 0-11.6 9.9v-7H7.9V12h2.5V9.8c0-2.5 1.5-3.9 3.8-3.9 1.1 0 2.2.2 2.2.2v2.5h-1.2c-1.2 0-1.6.8-1.6 1.6V12h2.8l-.4 2.9h-2.4v7A10 10 0 0 0 22 12z"></path></svg>
					</a>
					<a href="https://twitter.com/intent/tweet?url=<?php echo $share_url; ?>&text=<?php echo $share_title; ?>" target="_blank" rel="noopener" class="share__link" aria-label="Compartir en Twitter">
						<svg viewBox="0 0 24 24"><path d="M23.5 4.6c-.8.4-1.7.7-2.6.8.9-.6 1.6-1.5 2-2.5-.9.5-1.9.9-2.9 1.1-.8-.9-2-1.5-3.3-1.5-2.5 0-4.5 2-4.5 4.5 0 .4 0 .7.1 1-3.7-.2-7-2-9.2-4.7-.4.7-.6 1.5-.6 2.3 0 1.6.8 3 2 3.8-.7 0-1.4-.2-2-.6v.1c0 2.2 1.6 4 3.6 4.5-.4.1-.8.1-1.2.1-.3 0-.6 0-.8-.1.6 1.8 2.3 3.1 4.3 3.1-1.6 1.2-3.6 2-5.7 2-.4 0-.7 0-1.1-.1 2 1.3 4.4 2 7 2 8.4 0 13-7 13-13v-.6c.9-.6 1.7-1.4 2.3-2.4z"></path></svg>
					</a>
					<a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo $share_url; ?>" target="_blank" rel="noopener" class="share__link" aria-label="Compartir en LinkedIn">
						<svg viewBox="0 0 24 24"><path d="M4.98 3.5C4.98 4.9 3.87 6 2.5 6S0 4.9 0 3.5 1.12 1 2.5 1s2.48 1.1 2.48 2.5zM.2 8.24h4.6V23H.2V8.24zM8.4 8.24h4.4v2h.06c.6-1.1 2.1-2.3 4.3-2.3 4.6 0 5.5 3 5.5 6.9V23h-4.6v-6.9c0-1.6 0-3.7-2.3-3.7-2.3 0-2.6 1.8-2.6 3.6V23H8.4V8.24z"></path></svg>
					</a>
					<a href="https://t.me/share/url?url=<?php echo $share_url; ?>&text=<?php echo $share_title; ?>" target="_blank" rel="noopener" class="share__link" aria-label="Compartir en Telegram">
						<svg viewBox="0 0 24 24"><path d="M23.9 3.1 20.3 20.5c-.3 1.2-1 1.5-2.1.9l-5.7-4.2-2.8 2.6c-.3.3-.6.6-1.2.6l.4-6 10.9-9.8c.5-.4-.1-.6-.7-.2L6.3 12.6.8 10.9c-1.2-.4-1.2-1.2.3-1.7l21.6-8.3c1-.4 1.9.2 1.2 2.2z"></path></svg>
					</a>
					<a href="mailto:?subject=<?php echo $share_title; ?>&body=<?php echo $share_url; ?>" class="share__link" aria-label="Compartir por Email">
						<svg viewBox="0 0 24 24"><path d="M2 4h20a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1zm18.4 2H3.6L12 12.5 20.4 6zM2 7.4V19h20V7.4l-9.4 7.2a1 1 0 0 1-1.2 0L2 7.4z"></path></svg>
					</a>
				</div>
			</div>

		<?php endwhile; endif; ?>
	</article>
</main>

<?php
get_footer();
