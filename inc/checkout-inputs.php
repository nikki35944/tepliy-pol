<?php
/**
 * Убрать инпуты
 */
function wc_remove_checkout_fields( $fields ) {

    // Billing fields
    unset( $fields['billing']['billing_company'] );
    unset( $fields['billing']['billing_email'] );
//    unset( $fields['billing']['billing_phone'] );
    unset( $fields['billing']['billing_state'] );
//    unset( $fields['billing']['billing_first_name'] );
    unset( $fields['billing']['billing_last_name'] );
//    unset( $fields['billing']['billing_address_1'] );
    unset( $fields['billing']['billing_address_2'] );
    unset( $fields['billing']['billing_city'] );
    unset( $fields['billing']['billing_postcode'] );
    unset( $fields['billing']['billing_country'] );

    // Shipping fields
    unset( $fields['shipping']['shipping_company'] );
    unset( $fields['shipping']['shipping_phone'] );
    unset( $fields['shipping']['shipping_state'] );
    unset( $fields['shipping']['shipping_first_name'] );
    unset( $fields['shipping']['shipping_last_name'] );
    unset( $fields['shipping']['shipping_address_1'] );
    unset( $fields['shipping']['shipping_address_2'] );
    unset( $fields['shipping']['shipping_city'] );
    unset( $fields['shipping']['shipping_postcode'] );

    // Order fields
//    unset( $fields['order']['order_comments'] );

    return $fields;
}
add_filter( 'woocommerce_checkout_fields', 'wc_remove_checkout_fields' );

/**
 * Поменять позиции
 * billing_first_name	10
billing_last_name	20
billing_company	30
billing_country	40
billing_address_1	50
billing_address_2	60
billing_city	70
billing_state	80
billing_postcode	90
billing_phone	100
billing_email	110
shipping	shipping_first_name	10
shipping_last_name	20
shipping_company	30
shipping_country	40
shipping_address_1	50
shipping_address_2	60
shipping_city	70
shipping_state	80
shipping_postcode	90
 */
add_filter( 'woocommerce_checkout_fields', 'change_inputs_priority' );

function change_inputs_priority( $checkout_fields ) {
    $checkout_fields['billing']['billing_phone']['priority'] = 25;
    return $checkout_fields;
}

