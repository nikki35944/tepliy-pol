<?php

function tepliy_pol_custom_scripts() {
    wp_enqueue_script('tepliy-pol-modernizr', get_template_directory_uri() . '/assets/js/vendor/modernizr-2.8.3.min.js', array(), false, false);
    wp_enqueue_script('tepliy-pol-jquery-1.12.4', get_template_directory_uri() . '/assets/js/vendor/jquery-1.12.4.min.js', array(), false, true);
    wp_enqueue_script('tepliy-pol-jquery-meanmenu', get_template_directory_uri() . '/assets/js/jquery.meanmenu.min.js', array(), false, true);
    wp_enqueue_script('tepliy-pol-jquery-scrollUp', get_template_directory_uri() . '/assets/js/jquery.scrollUp.js', array(), false, true);
    wp_enqueue_script('tepliy-pol-jquery-scrollUp', get_template_directory_uri() . '/assets/js/jquery.scrollUp.js', array(), false, true);
    wp_enqueue_script('tepliy-pol-owl-carousel-js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), false, true);
    wp_enqueue_script('tepliy-pol-slick-min-js', get_template_directory_uri() . '/assets/js/slick.min.js', array(), false, true);
    wp_enqueue_script('tepliy-pol-wow', get_template_directory_uri() . '/assets/js/wow.min.js', array(), false, true);
    wp_enqueue_script('tepliy-pol-jquery-ui-min-js', get_template_directory_uri() . '/assets/js/jquery-ui.min.js', array(), false, true);
    wp_enqueue_script('tepliy-pol-jquery-countdown', get_template_directory_uri() . '/assets/js/jquery.countdown.min.js', array(), false, true);
    wp_enqueue_script('tepliy-pol-jquery-nivo-js', get_template_directory_uri() . '/assets/js/jquery.nivo.slider.js', array(), false, true);
    wp_enqueue_script('tepliy-pol-jquery-fancybox-js', get_template_directory_uri() . '/assets/js/jquery.fancybox.min.js', array(), false, true);
    wp_enqueue_script('tepliy-pol-bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), false, true);
    wp_enqueue_script('tepliy-pol-popper-js', get_template_directory_uri() . '/assets/js/popper.js', array(), false, true);
    wp_enqueue_script('tepliy-pol-plugins-js', get_template_directory_uri() . '/assets/js/plugins.js', array(), false, true);
    wp_enqueue_script('tepliy-pol-ajax-mini-cart-remove-js', get_template_directory_uri() . '/assets/js/ajax-mini-cart-remove-item.js', array(), false, true);
    wp_enqueue_script('tepliy-pol-main-js', get_template_directory_uri() . '/assets/js/main.js', array(), false, true);
}


add_action( 'wp_enqueue_scripts', 'tepliy_pol_custom_scripts' );