<?php
/**
 * Title: Header
 * Slug: clothing-store-blocks/header
 * Categories: clothing-store-blocks, header
 */
?>

<!-- wp:group {"className":"top-head wow fadeInDown","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"backgroundColor":"top-bg-color","layout":{"type":"constrained","contentSize":"70%"}} -->
<div class="wp-block-group top-head wow fadeInDown has-top-bg-color-background-color has-background" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"30%","className":"top-info"} -->
<div class="wp-block-column is-vertically-aligned-center top-info" style="flex-basis:30%"><!-- wp:group {"className":"info-row","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group info-row"><!-- wp:group {"className":"icon-img","style":{"border":{"radius":"50%","width":"1px"}},"borderColor":"white","layout":{"type":"default"}} -->
<div class="wp-block-group icon-img has-border-color has-white-border-color" style="border-width:1px;border-radius:50%"><!-- wp:image {"id":204,"scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/top-call.png'); ?>" alt="" class="wp-image-204" style="object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}},"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","fontSize":"extra-small"} -->
<p class="has-white-color has-text-color has-link-color has-extra-small-font-size" style="margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0;font-style:normal;font-weight:500"><?php esc_html_e('HOT LINE +91 18020 12130','clothing-store-blocks'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"30%","className":"top-sale"} -->
<div class="wp-block-column is-vertically-aligned-center top-sale" style="flex-basis:30%"><!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"white","fontSize":"extra-small"} -->
<p class="has-text-align-left has-white-color has-text-color has-link-color has-extra-small-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('SUMMER SALE DISCOUNT OFF 50%!','clothing-store-blocks'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"20%","className":"top-social"} -->
<div class="wp-block-column is-vertically-aligned-center top-social" style="flex-basis:20%"><!-- wp:social-links {"iconColor":"white","iconColorValue":"#ffffff","size":"has-small-icon-size","className":"is-style-logos-only","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|30"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"x"} /-->

<!-- wp:social-link {"url":"#","service":"youtube"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"20%","className":"top-login"} -->
<div class="wp-block-column is-vertically-aligned-center top-login" style="flex-basis:20%"><!-- wp:group {"className":"info-row","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
<div class="wp-block-group info-row"><!-- wp:image {"id":96,"scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/login.png'); ?>" alt="" class="wp-image-96" style="object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}},"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","fontSize":"extra-small"} -->
<p class="has-white-color has-text-color has-link-color has-extra-small-font-size" style="margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0;font-style:normal;font-weight:500"><a href="#"><?php esc_html_e('LOGIN','clothing-store-blocks'); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}},"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","fontSize":"extra-small"} -->
<p class="has-white-color has-text-color has-link-color has-extra-small-font-size" style="margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0;font-style:normal;font-weight:500"><a href="#"><?php esc_html_e('REGISTER','clothing-store-blocks'); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"middle-header","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"0","right":"0"}}},"layout":{"type":"constrained","contentSize":"70%"}} -->
<div class="wp-block-group middle-header" style="padding-top:var(--wp--preset--spacing--20);padding-right:0;padding-bottom:var(--wp--preset--spacing--20);padding-left:0"><!-- wp:columns {"className":"inner-middle-header"} -->
<div class="wp-block-columns inner-middle-header"><!-- wp:column {"verticalAlignment":"center","width":"30%","className":"logo-block"} -->
<div class="wp-block-column is-vertically-aligned-center logo-block" style="flex-basis:30%"><!-- wp:group {"className":"logo-box","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"left"}} -->
<div class="wp-block-group logo-box"><!-- wp:site-title {"textAlign":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}},"textColor":"heading","fontSize":"regular"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"40%","className":"search-block"} -->
<div class="wp-block-column is-vertically-aligned-center search-block" style="flex-basis:40%"><!-- wp:search {"label":"Search","showLabel":false,"placeholder":"SEARCH PRODUCTS","width":100,"widthUnit":"%","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true,"query":{"post_type":"product"},"style":{"elements":{"link":{"color":{"text":"var:preset|color|top-bg-color"}}},"border":{"width":"0px","style":"none","radius":"5px"},"typography":{"fontSize":"12px"}},"textColor":"top-bg-color"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"20%","className":"dummy-block"} -->
<div class="wp-block-column is-vertically-aligned-center dummy-block" style="flex-basis:20%"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"10%","className":"cart-block","layout":{"type":"default"}} -->
<div class="wp-block-column is-vertically-aligned-center cart-block" style="flex-basis:10%"><!-- wp:woocommerce/mini-cart {"priceColor":{"color":"#3A4357","name":"Headings","slug":"heading","class":"has-heading-product-count-color"},"iconColor":{"color":"#3A4357","name":"Headings","slug":"heading","class":"has-heading-product-count-color"},"productCountColor":{"color":"#3A4357","name":"Headings","slug":"heading","class":"has-heading-product-count-color"}} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"menu-header","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"0","right":"0"}},"border":{"top":{"color":"#e5e2dd","width":"1px"}}},"layout":{"type":"constrained","contentSize":"70%"}} -->
<div class="wp-block-group menu-header" style="border-top-color:#e5e2dd;border-top-width:1px;padding-top:var(--wp--preset--spacing--40);padding-right:0;padding-bottom:var(--wp--preset--spacing--40);padding-left:0"><!-- wp:columns {"verticalAlignment":"center","className":"inner-menu-header"} -->
<div class="wp-block-columns are-vertically-aligned-center inner-menu-header"><!-- wp:column {"verticalAlignment":"center","width":"30%","className":"mega-menu"} -->
<div class="wp-block-column is-vertically-aligned-center mega-menu" style="flex-basis:30%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"12px"}},"textColor":"heading"} -->
<p class="has-heading-color has-text-color has-link-color" style="font-size:12px;font-style:normal;font-weight:500"><?php esc_html_e('MEGA MENU','clothing-store-blocks'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:navigation {"textColor":"heading","overlayMenu":"always","icon":"menu","overlayBackgroundColor":"background","overlayTextColor":"heading","metadata":{"ignoredHookedBlocks":["woocommerce/customer-account"]}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"70%","className":"nav-block "} -->
<div class="wp-block-column is-vertically-aligned-center nav-block" style="flex-basis:70%"><!-- wp:navigation {"textColor":"heading","icon":"menu","overlayBackgroundColor":"background","overlayTextColor":"heading","metadata":{"ignoredHookedBlocks":["woocommerce/customer-account"]},"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"500"}},"fontSize":"extra-small","layout":{"type":"flex","justifyContent":"right"}} -->
<!-- wp:navigation-link {"label":"shop","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Categories","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Look Book","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Blog","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"BUY NOW","type":"link","opensInNewTab":true,"url":"https://www.ovationthemes.com/products/clothing-store-wordpress-theme","kind":"custom","className":"buynow"} /-->
<!-- /wp:navigation --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->