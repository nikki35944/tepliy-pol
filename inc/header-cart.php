<?php

/**
 * счетчик товаров корзины аякс
 */
add_filter( 'woocommerce_add_to_cart_fragments', 'wc_refresh_mini_cart_count');
function wc_refresh_mini_cart_count($fragments) {
    ob_start();
    $items_count = WC()->cart->get_cart_contents_count();
    ?>
    <div id="mini-cart-count"><?php echo $items_count ? $items_count : 0; ?></div>
    <?php
    $fragments['#mini-cart-count'] = ob_get_clean();
    return $fragments;
}

/**
 * Обновление мини-корзины аякс
 */
add_filter( 'woocommerce_add_to_cart_fragments', function($fragments) {

    ob_start();
    ?>

    <ul class="ht-dropdown main-cart-box">
        <?php woocommerce_mini_cart(); ?>
    </ul>

    <?php $fragments['ul.ht-dropdown.main-cart-box'] = ob_get_clean();

    return $fragments;

} );

//Аякс удаление продукта из корзины
function warp_ajax_product_remove()
{

    ob_start();

    foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item)
    {
        if($cart_item['product_id'] == $_POST['product_id'] && $cart_item_key == $_POST['cart_item_key'] )
        {
            WC()->cart->remove_cart_item($cart_item_key);
        }
    }

    WC()->cart->calculate_totals();
    WC()->cart->maybe_set_cart_cookies();

    woocommerce_mini_cart();

    $mini_cart = ob_get_clean();

    $data = array(
        'fragments' => apply_filters( 'woocommerce_add_to_cart_fragments', array(
                'div.widget_shopping_cart_content' => '<div class="widget_shopping_cart_content">' . $mini_cart . '</div>'
            )
        ),
        'cart_hash' => apply_filters( 'woocommerce_add_to_cart_hash', WC()->cart->get_cart_for_session() ? md5( json_encode( WC()->cart->get_cart_for_session() ) ) : '', WC()->cart->get_cart_for_session() )
    );

    wp_send_json( $data );

    die();
}

add_action( 'wp_ajax_product_remove', 'warp_ajax_product_remove' );
add_action( 'wp_ajax_nopriv_product_remove', 'warp_ajax_product_remove' );