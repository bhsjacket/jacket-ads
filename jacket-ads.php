<?php
/*
Plugin Name: Jacket Ads
Plugin URI: https://github.com/bhsjacket/jacket-ads
Author: Jerome Paulos
Author URI: https://jeromepaulos.com
Description: An ad manager and injector for WordPress
Version: 1.4
*/

require_once('register.php');

function jacket_generateAdCode() {

    if( $ads = get_field('horizontal_ads', 'option') ) {

        if( get_post_type() !== 'page' || is_front_page() ) {

            $ad = $ads[array_rand($ads)];
            $adUrl = esc_url($ad['caption']);
            $adImage = esc_url($ad['url']);

            ?>

            <script>
            var ad_html = '<section class="align-full ad-container"><span class="ad-label">Advertisement</span><a href="<?php echo $adUrl; ?>?ref=bhsjacket" target="_blank"><img src="<?php echo $adImage ?>"></a></section>';
            </script>

            <script src="<?php echo plugin_dir_url(__FILE__); ?>content-injection.js"></script>

            <?

        }
    }


}

add_action('wp_head', 'jacket_generateAdCode');
