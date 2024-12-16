<?php
/**
 * Help Panel.
 *
 * @package ecommerce_clothing
 */
?>

<div id="help-panel" class="panel-left visible">
    <div id="#help-panel" class="steps">  
        <h4>
            <?php esc_html_e( 'Quick Setup for Home Page', 'ecommerce-clothing' ); ?>
            <a href="<?php echo esc_url( 'https://demo.asterthemes.com/docs/ecommerce-clothing-free' ); ?>" class="button button-primary" style="margin-left: 5px; margin-right: 10px;" target="_blank"><?php esc_html_e( 'Free Documentation', 'ecommerce-clothing' ); ?></a>
        </h4>
        <hr class="quick-set">
        <p><?php esc_html_e( '1) Go to the Dashboard. navigate to pages, add a new one, and label it "home" or whatever else you like.The page has now been created.', 'ecommerce-clothing' ); ?></p>
        <p><?php esc_html_e( '2) Go back to the Dashboard and then select Settings.', 'ecommerce-clothing' ); ?></p>
        <p><?php esc_html_e( '3) Then Go to readings in the setting.', 'ecommerce-clothing' ); ?></p>
        <p><?php esc_html_e( '4) There are 2 options your latest post or static page.', 'ecommerce-clothing' ); ?></p>
        <p><?php esc_html_e( '5) Select static page and select from the dropdown you wish to use as your home page, save changes.', 'ecommerce-clothing' ); ?></p>
        <p><?php esc_html_e( '6) You can set the home page in this manner.', 'ecommerce-clothing' ); ?></p>
        <hr>
        <h4><?php esc_html_e( 'Setup Banner Section', 'ecommerce-clothing' ); ?></h4>
        <hr class="quick-set">
        <p><?php esc_html_e( '1) Go to Dashboard > Go to Appereance > then Go to Customizer.', 'ecommerce-clothing' ); ?></p>
        <p><?php esc_html_e( '2) In Customizer > Go to Front Page Options > Go to Banner Section.', 'ecommerce-clothing' ); ?></p>
        <p><?php esc_html_e( '3) For Setup Banner Section you have to create post in dashbord first.', 'ecommerce-clothing' ); ?></p>
        <p><?php esc_html_e( '4) In Banner Section > Enable the Toggle button > and fill the following details.', 'ecommerce-clothing' ); ?></p>
        <p><?php esc_html_e( '5) In this way you can set Banner Section.', 'ecommerce-clothing' ); ?></p>
        <hr>
        <h4><?php esc_html_e( 'Setup About Us Section', 'ecommerce-clothing' ); ?></h4>
        <hr class="quick-set">
        <p><?php esc_html_e( '1) Go to Dashboard > Go to Appereance > then Go to Customizer.', 'ecommerce-clothing' ); ?></p>
        <p><?php esc_html_e( '2) In Customizer > Go to Front Page Options > Go to About Us Section.', 'ecommerce-clothing' ); ?></p>
        <p><?php esc_html_e( '3) In About Us Section > Enable the Toggle button > and fill the following details which you want.', 'ecommerce-clothing' ); ?></p>
        <p><?php esc_html_e( '4) In this way you can set About Us Section.', 'ecommerce-clothing' ); ?></p>
    </div>
    <hr>
    <div class="custom-setting">
        <h4><?php esc_html_e( 'Quick Customizer Settings', 'ecommerce-clothing' ); ?></h4>
        <span><a href="<?php echo esc_url( admin_url( 'customize.php' ) ); ?>" target="_blank" class=""><?php esc_html_e( 'Customize', 'ecommerce-clothing' ); ?></a></span>
    </div>
    <hr>
   <div class="setting-box">
        <div class="custom-links">
            <div class="icon-box">
                <span class="dashicons dashicons-admin-site-alt3"></span>
            </div>
            <h5><?php esc_html_e( 'Site Logo', 'ecommerce-clothing' ); ?></h5>
            <a href="<?php echo esc_url( admin_url( 'customize.php?autofocus[control]=custom_logo' ) ); ?>" target="_blank" class=""><?php esc_html_e( 'Customize', 'ecommerce-clothing' ); ?></a>
            
        </div>
        <div class="custom-links">
            <div class="icon-box">
                <span class="dashicons dashicons-color-picker"></span>
            </div>
            <h5><?php esc_html_e( 'Color', 'ecommerce-clothing' ); ?></h5>
            <a href="<?php echo esc_url( admin_url( 'customize.php?autofocus[control]=primary_color' ) ); ?>" target="_blank" class=""><?php esc_html_e( 'Customize', 'ecommerce-clothing' ); ?></a>
            
        </div>
        <div class="custom-links">
            <div class="icon-box">
                <span class="dashicons dashicons-screenoptions"></span>
            </div>
            <h5><?php esc_html_e( 'Theme Options', 'ecommerce-clothing' ); ?></h5>
            <a href="<?php echo esc_url( admin_url( 'customize.php?autofocus[panel]=ecommerce_clothing_theme_options' ) ); ?>"target="_blank" class=""><?php esc_html_e( 'Customize', 'ecommerce-clothing' ); ?></a>
            
        </div>
    </div>
    <div class="setting-box">
        <div class="custom-links">
            <div class="icon-box">
                <span class="dashicons dashicons-format-image"></span>
            </div>
            <h5><?php esc_html_e( 'Header Image ', 'ecommerce-clothing' ); ?></h5>
            <a href="<?php echo esc_url( admin_url( 'customize.php?autofocus[control]=header_image' ) ); ?>" target="_blank" class=""><?php esc_html_e( 'Customize', 'ecommerce-clothing' ); ?></a>
            
        </div>
        <div class="custom-links">
            <div class="icon-box">
                <span class="dashicons dashicons-align-full-width"></span>
            </div>
            <h5><?php esc_html_e( 'Footer Options ', 'ecommerce-clothing' ); ?></h5>
            <a href="<?php echo esc_url( admin_url( 'customize.php?autofocus[control]=ecommerce_clothing_footer_copyright_text' ) ); ?>" target="_blank" class=""><?php esc_html_e( 'Customize', 'ecommerce-clothing' ); ?></a>
            
        </div>
        <div class="custom-links">
            <div class="icon-box">
                <span class="dashicons dashicons-admin-page"></span>
            </div>
            <h5><?php esc_html_e( 'Front Page Options', 'ecommerce-clothing' ); ?></h5>
            <a href="<?php echo esc_url( admin_url( 'customize.php?autofocus[panel]=ecommerce_clothing_front_page_options' ) ); ?>" target="_blank" class=""><?php esc_html_e( 'Customize', 'ecommerce-clothing' ); ?></a>
            
        </div>
    </div>
</div>


