<?php
/**
 * mr banner
 * Plugin Name: mr banner fixed
 * Description:plugin for create fixed banner adv
 * Author: Mahdi Rezaei
 */

 define('MR_IMAGES_URL', plugin_dir_url( __FILE__ ).'assets/img/');

 function mr_show_banner (){
    $banner_url  = MR_IMAGES_URL . 'gip2.gif';
    $banner_link = 'https://smartson.ir';
    ?>
    <style>
        a.mr-banner {
        display : block;
        position : fixed;
        left: 10px;
        bottom : 10px;
        z-index : 9;
        box-shadow:0 3px 6px #00000030;
    }
    </style>
    <a href ="<?php echo $banner_link; ?>" class="mr-banner" target="_blank">
    <img src="<?php echo $banner_url;  ?>" alt="advertise" width = "250px" height= "250px">
    </a>
    <?php
 }

 add_action( 'wp_footer', 'mr_show_banner');
