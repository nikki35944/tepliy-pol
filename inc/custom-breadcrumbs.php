<?php
/**
* открывающие и закрывающие теги для хлебных крошек в single product
*/
add_action('woocommerce_before_main_content', 'breadcrumbs_open_div', 19);

function breadcrumbs_open_div() {
    echo '<div class="breadcrumb-area ptb-60 ptb-sm-30">';
    echo '<div class="container">';
    echo '<div class="breadcrumb">';
}


add_action('woocommerce_before_main_content', 'breadcrumbs_close_div', 21);

function breadcrumbs_close_div() {
    echo '</div>';
    echo '</div>';
    echo '</div>';
}