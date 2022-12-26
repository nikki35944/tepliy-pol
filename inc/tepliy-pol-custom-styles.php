<?php


function tepliy_pol_custom_styles() {
    wp_enqueue_style( 'tepliy-pol-meanmenu', get_template_directory_uri() . '/assets/css/meanmenu.min.css', array(), false, false);
    wp_enqueue_style( 'tepliy-pol-animate', get_template_directory_uri() . '/assets/css/animate.css', array(), false, false);
    wp_enqueue_style( 'tepliy-pol-nivo-slider', get_template_directory_uri() . '/assets/css/nivo-slider.css', array(), false, false);
    wp_enqueue_style( 'tepliy-pol-owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), false, false);
    wp_enqueue_style( 'tepliy-pol-slick', get_template_directory_uri() . '/assets/css/slick.css', array(), false, false);
    wp_enqueue_style( 'tepliy-pol-jquery-ui', get_template_directory_uri() . '/assets/css/jquery-ui.min.css', array(), false, false);
    wp_enqueue_style( 'tepliy-pol-font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), false, false);
    wp_enqueue_style( 'tepliy-pol-jquery-fancybox', get_template_directory_uri() . '/assets/css/jquery.fancybox.css', array(), false, false);
    wp_enqueue_style( 'tepliy-pol-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), false, false);
    wp_enqueue_style( 'tepliy-pol-default', get_template_directory_uri() . '/assets/css/default.css', array(), false, false);
    wp_enqueue_style( 'tepliy-pol-style-custom', get_template_directory_uri() . '/assets/css/style.css', array(), false, false);
    wp_enqueue_style( 'tepliy-pol-responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), false, false);
}


add_action( 'wp_enqueue_scripts', 'tepliy_pol_custom_styles' );