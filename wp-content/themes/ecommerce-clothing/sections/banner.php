<?php
if ( ! get_theme_mod( 'ecommerce_clothing_enable_banner_section', true ) ) {
	return;
}

$ecommerce_clothing_slider_content_ids  = array();
$ecommerce_clothing_slider_content_type = get_theme_mod( 'ecommerce_clothing_banner_slider_content_type', 'post' );

for ( $ecommerce_clothing_i = 1; $ecommerce_clothing_i <= 3; $ecommerce_clothing_i++ ) {
	$ecommerce_clothing_slider_content_ids[] = get_theme_mod( 'ecommerce_clothing_banner_slider_content_' . $ecommerce_clothing_slider_content_type . '_' . $ecommerce_clothing_i );
}
$ecommerce_clothing_banner_slider_args = array(
	'post_type'           => $ecommerce_clothing_slider_content_type,
	'post__in'            => array_filter( $ecommerce_clothing_slider_content_ids ),
	'orderby'             => 'post__in',
	'posts_per_page'      => absint( 3 ),
	'ignore_sticky_posts' => true,
);
$ecommerce_clothing_banner_slider_args = apply_filters( 'ecommerce_clothing_banner_section_args', $ecommerce_clothing_banner_slider_args );

ecommerce_clothing_render_banner_section( $ecommerce_clothing_banner_slider_args );

/**
 * Render Banner Section.
 */
function ecommerce_clothing_render_banner_section( $ecommerce_clothing_banner_slider_args ) {     ?>

	<section id="ecommerce_clothing_banner_section" class="banner-section banner-style-1">
		<?php
		if ( is_customize_preview() ) :
			ecommerce_clothing_section_link( 'ecommerce_clothing_banner_section' );
		endif;
		?>
		<div class="banner-section-wrapper">
			<?php
			$ecommerce_clothing_query = new WP_Query( $ecommerce_clothing_banner_slider_args );
			if ( $ecommerce_clothing_query->have_posts() ) :
				?>
				<div class="asterthemes-banner-wrapper banner-slider ecommerce-clothing-carousel-navigation" data-slick='{"autoplay": false }'>
					<?php
					$ecommerce_clothing_i = 1;
					while ( $ecommerce_clothing_query->have_posts() ) :
						$ecommerce_clothing_query->the_post();
						$ecommerce_clothing_button_label = get_theme_mod( 'ecommerce_clothing_banner_button_label_' . $ecommerce_clothing_i, '' );
						$ecommerce_clothing_button_link  = get_theme_mod( 'ecommerce_clothing_banner_button_link_' . $ecommerce_clothing_i, '' );
						$ecommerce_clothing_button_link  = ! empty( $ecommerce_clothing_button_link ) ? $ecommerce_clothing_button_link : get_the_permalink();
						?>
						<div class="banner-single-outer">
							<div class="banner-single">
								<div class="banner-img">

									<?php if ( has_post_thumbnail() ) : ?>
									    <?php the_post_thumbnail( 'full' ); ?>
									<?php else : ?>
									    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/resource/img/default.png" alt="Default Image" />=
									<?php endif; ?>

								</div>
								<div class="banner-caption">
									<div class="asterthemes-wrapper">
										<div class="banner-catption-wrapper">
											<h1 class="banner-caption-title">
											    <?php
											    $title = get_the_title();
											    echo $title;
											    ?>
											</h1>
											<?php if ( ! empty( $ecommerce_clothing_button_label ) ) { ?>
												<div class="banner-slider-btn">
													<a href="<?php echo esc_url( $ecommerce_clothing_button_link ); ?>" class="asterthemes-button"><?php echo esc_html( $ecommerce_clothing_button_label ); ?></a>
												</div>
											<?php } ?>
										</div>

									</div>
								</div>
							</div>
						</div>
						<?php
						$ecommerce_clothing_i++;
					endwhile;
					wp_reset_postdata();
					?>
				</div>
				<?php
			endif;
			?>
		</div>
	</section>

	<?php
}