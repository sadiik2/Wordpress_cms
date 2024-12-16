<?php

/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package ecommerce_clothing
 */


// Output inline CSS based on Customizer setting
function ecommerce_clothing_customizer_css() {
    $enable_breadcrumb = get_theme_mod('ecommerce_clothing_enable_breadcrumb', true);
    ?>
    <style type="text/css">
        <?php if (!$enable_breadcrumb) : ?>
            nav.woocommerce-breadcrumb {
                display: none;
            }
        <?php endif; ?>
    </style>
    <?php
}
add_action('wp_head', 'ecommerce_clothing_customizer_css');

function ecommerce_clothing_customize_css() {
    ?>
    <style type="text/css">
        :root {
            --primary-color: <?php echo esc_html( get_theme_mod( 'primary_color', '#E30045' ) ); ?>;
        }
    </style>
    <?php
}
add_action( 'wp_head', 'ecommerce_clothing_customize_css' );

function ecommerce_clothing_enqueue_selected_fonts() {
    $ecommerce_clothing_fonts_url = ecommerce_clothing_get_fonts_url();
    if (!empty($ecommerce_clothing_fonts_url)) {
        wp_enqueue_style('ecommerce-clothing-google-fonts', $ecommerce_clothing_fonts_url, array(), null);
    }
}
add_action('wp_enqueue_scripts', 'ecommerce_clothing_enqueue_selected_fonts');

function ecommerce_clothing_layout_customizer_css() {
    $ecommerce_clothing_margin = get_theme_mod('ecommerce_clothing_layout_width_margin', 50);
    ?>
    <style type="text/css">
        body.site-boxed--layout #page  {
            margin: 0 <?php echo esc_attr($ecommerce_clothing_margin); ?>px;
        }
    </style>
    <?php
}
add_action('wp_head', 'ecommerce_clothing_layout_customizer_css');

function ecommerce_clothing_blog_layout_customizer_css() {
    // Retrieve the blog layout option
    $ecommerce_clothing_blog_layout_option = get_theme_mod('ecommerce_clothing_blog_layout_option_setting', 'Left');

    // Initialize custom CSS variable
    $ecommerce_clothing_custom_css = '';

    // Generate custom CSS based on the layout option
    if ($ecommerce_clothing_blog_layout_option === 'Default') {
        $ecommerce_clothing_custom_css .= '.mag-post-detail { text-align: center; }';
    } elseif ($ecommerce_clothing_blog_layout_option === 'Left') {
        $ecommerce_clothing_custom_css .= '.mag-post-detail { text-align: left; }';
    } elseif ($ecommerce_clothing_blog_layout_option === 'Right') {
        $ecommerce_clothing_custom_css .= '.mag-post-detail { text-align: right; }';
    }

    // Output the combined CSS
    ?>
    <style type="text/css">
        <?php echo wp_kses($ecommerce_clothing_custom_css, array( 'style' => array(), 'text-align' => array() )); ?>
    </style>
    <?php
}
add_action('wp_head', 'ecommerce_clothing_blog_layout_customizer_css');

function ecommerce_clothing_sidebar_width_customizer_css() {
    $ecommerce_clothing_sidebar_width = get_theme_mod('ecommerce_clothing_sidebar_width', '30');
    ?>
    <style type="text/css">
        .right-sidebar .asterthemes-wrapper .asterthemes-page {
            grid-template-columns: auto <?php echo esc_attr($ecommerce_clothing_sidebar_width); ?>%;
        }
        .left-sidebar .asterthemes-wrapper .asterthemes-page {
            grid-template-columns: <?php echo esc_attr($ecommerce_clothing_sidebar_width); ?>% auto;
        }
    </style>
    <?php
}
add_action('wp_head', 'ecommerce_clothing_sidebar_width_customizer_css');

if ( ! function_exists( 'ecommerce_clothing_get_page_title' ) ) {
    function ecommerce_clothing_get_page_title() {
        $ecommerce_clothing_title = '';

        if (is_404()) {
            $ecommerce_clothing_title = esc_html__('Page Not Found', 'ecommerce-clothing');
        } elseif (is_search()) {
            $ecommerce_clothing_title = esc_html__('Search Results for: ', 'ecommerce-clothing') . esc_html(get_search_query());
        } elseif (is_home() && !is_front_page()) {
            $ecommerce_clothing_title = esc_html__('Blogs', 'ecommerce-clothing');
        } elseif (function_exists('is_shop') && is_shop()) {
            $ecommerce_clothing_title = esc_html__('Shop', 'ecommerce-clothing');
        } elseif (is_page()) {
            $ecommerce_clothing_title = get_the_title();
        } elseif (is_single()) {
            $ecommerce_clothing_title = get_the_title();
        } elseif (is_archive()) {
            $ecommerce_clothing_title = get_the_archive_title();
        } else {
            $ecommerce_clothing_title = get_the_archive_title();
        }

        return apply_filters('ecommerce_clothing_page_title', $ecommerce_clothing_title);
    }
}

if ( ! function_exists( 'ecommerce_clothing_has_page_header' ) ) {
    function ecommerce_clothing_has_page_header() {
        // Default to true (display header)
        $ecommerce_clothing_return = true;

        // Custom conditions for disabling the header
        if ('hide-all-devices' === get_theme_mod('ecommerce_clothing_page_header_visibility', 'all-devices')) {
            $ecommerce_clothing_return = false;
        }

        // Apply filters and return
        return apply_filters('ecommerce_clothing_display_page_header', $ecommerce_clothing_return);
    }
}

if ( ! function_exists( 'ecommerce_clothing_page_header_style' ) ) {
    function ecommerce_clothing_page_header_style() {
        $ecommerce_clothing_style = get_theme_mod('ecommerce_clothing_page_header_style', 'default');
        return apply_filters('ecommerce_clothing_page_header_style', $ecommerce_clothing_style);
    }
}

function ecommerce_clothing_page_title_customizer_css() {
    $ecommerce_clothing_layout_option = get_theme_mod('ecommerce_clothing_page_header_layout', 'left');
    ?>
    <style type="text/css">
        .asterthemes-wrapper.page-header-inner {
            <?php if ($ecommerce_clothing_layout_option === 'flex') : ?>
                display: flex;
                justify-content: space-between;
                align-items: center;
            <?php else : ?>
                text-align: <?php echo esc_attr($ecommerce_clothing_layout_option); ?>;
            <?php endif; ?>
        }
    </style>
    <?php
}
add_action('wp_head', 'ecommerce_clothing_page_title_customizer_css');

function ecommerce_clothing_pagetitle_height_css() {
    $ecommerce_clothing_height = get_theme_mod('ecommerce_clothing_pagetitle_height', 50);
    ?>
    <style type="text/css">
        header.page-header {
            padding: <?php echo esc_attr($ecommerce_clothing_height); ?>px 0;
        }
    </style>
    <?php
}
add_action('wp_head', 'ecommerce_clothing_pagetitle_height_css');

function ecommerce_clothing_site_logo_width() {
    $ecommerce_clothing_site_logo_width = get_theme_mod('ecommerce_clothing_site_logo_width', 200);
    ?>
    <style type="text/css">
        .site-logo img {
            max-width: <?php echo esc_attr($ecommerce_clothing_site_logo_width); ?>px;
        }
    </style>
    <?php
}
add_action('wp_head', 'ecommerce_clothing_site_logo_width');

function ecommerce_clothing_menu_font_size_css() {
    $ecommerce_clothing_menu_font_size = get_theme_mod('ecommerce_clothing_menu_font_size', 15);
    ?>
    <style type="text/css">
        .main-navigation a {
            font-size: <?php echo esc_attr($ecommerce_clothing_menu_font_size); ?>px;
        }
    </style>
    <?php
}
add_action('wp_head', 'ecommerce_clothing_menu_font_size_css');

function ecommerce_clothing_sidebar_widget_font_size_css() {
    $ecommerce_clothing_sidebar_widget_font_size = get_theme_mod('ecommerce_clothing_sidebar_widget_font_size', 24);
    ?>
    <style type="text/css">
        h2.wp-block-heading, .widgettitle, .widget-title {
            font-size: <?php echo esc_attr($ecommerce_clothing_sidebar_widget_font_size); ?>px;
        }
    </style>
    <?php
}
add_action('wp_head', 'ecommerce_clothing_sidebar_widget_font_size_css');