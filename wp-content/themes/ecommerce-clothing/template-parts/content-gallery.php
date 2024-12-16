<?php
/**
 * Template part for displaying Gallery Format
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ecommerce_clothing
 */
?>
<?php $ecommerce_clothing_readmore = get_theme_mod( 'ecommerce_clothing_readmore_button_text','Read More');?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="mag-post-single">
        <?php
		    // Check if there is a gallery embedded in the post content
		    $ecommerce_clothingpost_id = get_the_ID(); // Add this line to get the post ID
		    $ecommerce_clothing__gallery_shortcode = get_post_gallery();

		    if (!empty($ecommerce_clothing__gallery_shortcode)) {
		        // Display the gallery
		        echo '<div class="embedded-gallery">' . do_shortcode($ecommerce_clothing__gallery_shortcode) . '</div>';
		    }
		?>
		<div class="mag-post-detail">
			<div class="mag-post-category">
				<?php ecommerce_clothing_categories_list(); ?>
			</div>
			<?php
			if ( is_singular() ) :
				the_title( '<h1 class="entry-title mag-post-title">', '</h1>' );
			else :
				if ( !get_theme_mod( 'ecommerce_clothing_post_hide_post_heading', false ) ) { 
					the_title( '<h2 class="entry-title mag-post-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			    }
			endif;
			?>
			<div class="mag-post-meta">
				<?php
				ecommerce_clothing_posted_by();
				ecommerce_clothing_posted_on();
				?>
			</div>
			<?php if ( !get_theme_mod( 'ecommerce_clothing_post_hide_post_content', false ) ) { ?>
				<div class="mag-post-excerpt">
					<?php the_excerpt(); ?>
				</div>
		    <?php } ?>
			<?php if ( get_theme_mod( 'ecommerce_clothing_post_readmore_button', true ) === true ) : ?>
				<div class="mag-post-read-more">
					<a href="<?php the_permalink(); ?>" class="read-more-button">
						<?php if ( ! empty( $ecommerce_clothing_readmore ) ) { ?> <?php echo esc_html( $ecommerce_clothing_readmore ); ?> <?php } ?>
						<i class="<?php echo esc_attr( get_theme_mod( 'ecommerce_clothing_readmore_btn_icon', 'fas fa-chevron-right' ) ); ?>"></i>
					</a>
				</div>
			<?php endif; ?>
		</div>
	</div>

</article><!-- #post-<?php the_ID(); ?> -->