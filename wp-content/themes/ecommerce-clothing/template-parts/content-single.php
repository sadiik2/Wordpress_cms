<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ecommerce_clothing
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="mag-post-single">
		<div class="mag-post-detail">
			<div class="mag-post-category">
				<?php ecommerce_clothing_categories_single_list(); ?>
			</div>
			<header class="entry-header">
				<?php

				if ( 'post' === get_post_type() ) :
					?>
					<div class="mag-post-meta">
						<?php
						ecommerce_clothing_posted_by_single();
						ecommerce_clothing_posted_on_single();
						?>
					</div>
				<?php endif; ?>
			</header>
		</div>
		<?php ecommerce_clothing_post_thumbnail(); ?>
		<?php if ( !get_theme_mod( 'ecommerce_clothing_single_post_hide_post_content', false ) ) { ?>
			<div class="entry-content">
				<?php
				the_content(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'ecommerce-clothing' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						wp_kses_post( get_the_title() )
					)
				);

				wp_link_pages(
					array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'ecommerce-clothing' ),
						'after'  => '</div>',
					)
				);
				?>
			</div><!-- .entry-content -->
		<?php } ?>
	</div>

	<footer class="entry-footer">
		<?php ecommerce_clothing_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->