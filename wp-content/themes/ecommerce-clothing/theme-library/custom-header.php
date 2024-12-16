<?php
/**
 * Sample implementation of the Custom Header feature
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * @package ecommerce_clothing
 */

function ecommerce_clothing_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'ecommerce_clothing_custom_header_args', array(
		'default-text-color'     => 'fff',
		'header-text' 			 =>	false,
		'width'                  => 1360,
		'height'                 => 110,
		'flex-width'         	=> true,
        'flex-height'        	=> true,
		'wp-head-callback'       => 'ecommerce_clothing_header_style',
	) ) );
}

add_action( 'after_setup_theme', 'ecommerce_clothing_custom_header_setup' );

if ( ! function_exists( 'ecommerce_clothing_header_style' ) ) :

add_action( 'wp_enqueue_scripts', 'ecommerce_clothing_header_style' );
function ecommerce_clothing_header_style() {
	if ( get_header_image() ) :
	$ecommerce_clothing_custom_css = "
        .home header.site-header .header-main-wrapper .bottom-header-outer-wrapper .bottom-header-part{
			background-image:url('".esc_url(get_header_image())."') !important;
			background-position: center top;
		}";
	   	wp_add_inline_style( 'ecommerce-clothing-style', $ecommerce_clothing_custom_css );
	endif;
}
endif;