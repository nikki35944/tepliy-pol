<?php
/**
 * Обертка для продукта целиком
 */
add_action('woocommerce_before_single_product_summary', 'single_product_main_wrapper_open');
function single_product_main_wrapper_open() {
    echo '<div class="main-product-thumbnail pb-30">';
    echo '<div class="container">';
    echo '<div class="row">';
}
add_action('woocommerce_after_single_product_summary', 'single_product_main_wrapper_close', 3);
function single_product_main_wrapper_close() {
    echo '</div>';
    echo '</div>';
    echo '</div>';
}
/**
 * Обертка для заголовка и добавления в корзину
 */
add_action('woocommerce_single_product_summary', 'single_product_summary_wrapper_open', 3);
function single_product_summary_wrapper_open() {
    echo '<div class="thubnail-desc fix">';
}
add_action('woocommerce_product_meta_end', 'single_product_summary_wrapper_close');
function single_product_summary_wrapper_close() {
    echo '</div>';
}
//переместить краткое описание
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
add_action('woocommerce_product_meta_end', 'woocommerce_template_single_excerpt', 20);

/**
 * оборачивающие теги для похожих товаров
 */
add_action('woocommerce_after_single_product_summary', 'single_product_related_products_wrapper_open', 15);
function single_product_related_products_wrapper_open() {
    echo '<div class="related-product">';
    echo '<div class="container">';
    echo '<div class="related-box">';
}
add_action('woocommerce_after_single_product_summary', 'single_product_related_products_wrapper_close', 25);
function single_product_related_products_wrapper_close() {
    echo '</div>';
    echo '</div>';
    echo '</div>';
}