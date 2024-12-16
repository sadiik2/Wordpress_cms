<?php

/**
 * The header for our theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ecommerce_clothing
 */
$ecommerce_clothing_menu_text_transform = get_theme_mod( 'ecommerce_clothing_menu_text_transform', 'capitalize' );
$ecommerce_clothing_menu_text_transform_css = ( $ecommerce_clothing_menu_text_transform !== 'capitalize' ) ? 'text-transform: ' . $ecommerce_clothing_menu_text_transform . ';' : '';
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(get_theme_mod('ecommerce_clothing_website_layout', false) ? 'site-boxed--layout' : ''); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site asterthemes-site-wrapper">
<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'ecommerce-clothing' ); ?></a>
    <?php if (get_theme_mod('ecommerce_clothing_enable_preloader', false)) : ?>
        <div id="loader" class="<?php echo esc_attr(get_theme_mod('ecommerce_clothing_preloader_style', 'style1')); ?>">
            <div class="loader-container">
                <div id="preloader">
                    <?php 
                    $preloader_style = get_theme_mod('ecommerce_clothing_preloader_style', 'style1');
                    if ($preloader_style === 'style1') : ?>
                        <!-- STYLE 1 -->
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/resource/loader.gif'); ?>" alt="<?php esc_attr_e('Loading...', 'ecommerce-clothing'); ?>">
                    <?php elseif ($preloader_style === 'style2') : ?>
                        <!-- STYLE 2 -->
                        <div class="dot"></div>
                    <?php elseif ($preloader_style === 'style3') : ?>
                        <!-- STYLE 3 -->
                        <div class="bars">
                            <div class="bar"></div>
                            <div class="bar"></div>
                            <div class="bar"></div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    <?php endif; ?>
<header id="masthead" class="site-header">
    <div class="header-main-wrapper">
        <?php if ( get_theme_mod( 'ecommerce_clothing_enable_topbar', true ) === true ) {
            $ecommerce_clothing_discount_topbar_text = get_theme_mod( 'ecommerce_clothing_discount_topbar_text', '' );
            ?>
            <div class="top-header-part">
                <div class="asterthemes-wrapper">
                    <div class="top-header-part-wrapper">
                        <div class="bottom-top-header-left-part">
                            <div class="socail-search">
                                <div class="social-icons">
                                    <?php
                                    if ( has_nav_menu( 'social' ) ) {
                                        wp_nav_menu(
                                            array(
                                                'menu_class'     => 'menu social-links',
                                                'link_before'    => '<span class="screen-reader-text">',
                                                'link_after'     => '</span>',
                                                'theme_location' => 'social',
                                            )
                                        );
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <?php if ( ! empty( $ecommerce_clothing_discount_topbar_text ) ) { ?>
                            <div class="header-contact-inner">
                                <p><?php echo esc_html( $ecommerce_clothing_discount_topbar_text ); ?></p>
                            </div>
                        <?php } ?>
                        <div class="bottom-top-header-right-part">
                            <div class="translate-btn">
                                <?php if(class_exists('GTranslate')){ ?>
                                    <?php echo esc_html('LANG - ','ecommerce-clothing'); ?> <?php echo do_shortcode('[gtranslate]', 'ecommerce-clothing');?>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
        <div class="bottom-header-outer-wrapper">
            <div class="bottom-header-part">
                <div class="asterthemes-wrapper">
                    <div class="bottom-header-part-wrapper hello <?php echo esc_attr( get_theme_mod( 'ecommerce_clothing_enable_sticky_header', false ) ? 'sticky-header' : '' ); ?>">
                        <div class="bottom-header-left-part">
                            <div class="navigation-part">
                                <nav id="site-navigation" class="main-navigation">
                                    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </button>
                                    <div class="main-navigation-links" style="<?php echo esc_attr( $ecommerce_clothing_menu_text_transform_css ); ?>">
                                        <?php
                                            wp_nav_menu(
                                                array(
                                                    'theme_location' => 'primary',
                                                )
                                            );
                                        ?>
                                    </div>
                                </nav>
                            </div>
                        </div>
                        <div class="bottom-header-middle-part">
                            <div class="site-branding">
                                <?php if ( has_custom_logo() ) { ?>
                                <div class="site-logo">
                                    <?php the_custom_logo(); ?>
                                </div>
                                <?php } ?>
                                <div class="site-identity">
                                        <?php
                                            if ( get_theme_mod( 'ecommerce_clothing_enable_site_title_setting', true ) ) {
                                                // Get the site title
                                                $site_title = get_bloginfo( 'name' );
                                                
                                                // Explode the title into words and extract the last one
                                                $title_parts = explode(' ', $site_title);
                                                $last_word = array_pop($title_parts);
                                                $title_without_last_word = implode(' ', $title_parts);

                                                if ( is_front_page() && is_home() ) :
                                                    ?>
                                                    <h1 class="site-title">
                                                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                                                            <?php echo $title_without_last_word . ' <span class="yellow-text">' . $last_word . '</span>'; ?>
                                                        </a>
                                                    </h1>
                                                    <?php
                                                else :
                                                    ?>
                                                    <p class="site-title">
                                                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                                                            <?php echo $title_without_last_word . ' <span class="yellow-text">' . $last_word . '</span>'; ?>
                                                        </a>
                                                    </p>
                                                    <?php
                                                endif;
                                            }

                                        if ( get_theme_mod( 'ecommerce_clothing_enable_tagline_setting', false ) ) :
                                            $ecommerce_clothing_description = get_bloginfo( 'description', 'display' );

                                            if ( $ecommerce_clothing_description || is_customize_preview() ) :
                                                ?>
                                            <p class="site-description">
                                                <?php
                                                echo esc_html( $ecommerce_clothing_description ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
                                                ?>
                                            </p>
                                                <?php
                                            endif;
                                                ?>
                                        <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="bottom-header-right-part">
                            <?php if(class_exists('woocommerce')){ ?>
                                <form method="get" class="woocommerce-product-search woo-pro-search" action="<?php echo esc_url(home_url('/')); ?>">
                                    <label class="screen-reader-text" for="woocommerce-product-search-field"><?php esc_html_e('Search for:', 'ecommerce-clothing'); ?></label>
                                    <input type="search" id="woocommerce-product-search-field" class="search-field " placeholder="<?php echo esc_attr('Search Here','ecommerce-clothing'); ?>" value="<?php echo get_search_query(); ?>" name="s"/>
                                    <button type="submit" class="search-button"><i class="fas fa-search"></i></button>
                                    <input type="hidden" name="post_type" value="product"/>
                                </form>
                            <?php }?>
                            <?php if(class_exists('woocommerce')){ ?>
                                <div class="user-account">
                                    <?php if ( is_user_logged_in() ) { ?>
                                        <a href="<?php echo esc_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?>" title="<?php esc_attr_e('My Account','ecommerce-clothing'); ?>"><i class="fas fa-sign-out-alt"></i></a>
                                    <?php } 
                                    else { ?>
                                        <a href="<?php echo esc_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?>" title="<?php esc_attr_e('Login / Register','ecommerce-clothing'); ?>"><i class="fas fa-user"></i></a>
                                    <?php } ?>
                                </div>
                            <?php }?>
                            <?php if ( class_exists( 'woocommerce' ) ) {?>
                                <a class="cart-customlocation" href="<?php if(function_exists('wc_get_cart_url')){ echo esc_url(wc_get_cart_url()); } ?>" title="<?php esc_attr_e( 'View Shopping Cart','ecommerce-clothing' ); ?>"><i class="fas fa-shopping-basket mr-2"></i></a>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<?php
if ( ! is_front_page() || is_home() ) {
	if ( is_front_page() ) {
		require get_template_directory() . '/sections/sections.php';
		ecommerce_clothing_homepage_sections();
	}
	?>
    <?php
        if (!is_front_page() || is_home()) {
            get_template_part('page-header');
        }
    ?>
	<div id="content" class="site-content">
		<div class="asterthemes-wrapper">
			<div class="asterthemes-page">
			<?php } ?>
