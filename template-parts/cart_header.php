
<li>
    <!-- Cart Box Start -->
    <?php
    if ($woocommerce->cart->cart_contents_count > 0) {
        foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
            $_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
            $product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

            if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
                $product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
                ?>
                <div class="single-cart-box">
                    <div class="cart-img">
                        <?php
                        $thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );

                        if ( ! $product_permalink ) {
                            echo $thumbnail; // PHPCS: XSS ok.
                        } else {
                            printf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $thumbnail ); // PHPCS: XSS ok.
                        }
                        ?>
                    </div>
                    <div class="cart-content">
                        <?php
                        if ( ! $product_permalink ) {
                            echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key ) . '&nbsp;' );
                        } else {
                            echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', sprintf( '<h6><a href="%s">%s</a></h6>', esc_url( $product_permalink ), $_product->get_name() ), $cart_item, $cart_item_key ) );
                        }

                        do_action( 'woocommerce_after_cart_item_name', $cart_item, $cart_item_key );

                        // Meta data.
                        echo wc_get_formatted_cart_item_data( $cart_item ); // PHPCS: XSS ok.

                        // Backorder notification.
                        if ( $_product->backorders_require_notification() && $_product->is_on_backorder( $cart_item['quantity'] ) ) {
                            echo wp_kses_post( apply_filters( 'woocommerce_cart_item_backorder_notification', '<p class="backorder_notification">' . esc_html__( 'Available on backorder', 'woocommerce' ) . '</p>', $product_id ) );
                        }
                        ?>
                        <span>
                    <?php
                    if ( $_product->is_sold_individually() ) {
                        $product_quantity = sprintf( '1 <input type="hidden" name="cart[%s][qty]" value="1" />', $cart_item_key );
                    } else {
                        $product_quantity = woocommerce_quantity_input(
                            array(
                                'input_name'   => "cart[{$cart_item_key}][qty]",
                                'input_value'  => $cart_item['quantity'],
                                'max_value'    => $_product->get_max_purchase_quantity(),
                                'min_value'    => '0',
                                'product_name' => $_product->get_name(),
                            ),
                            $_product,
                            false
                        );
                    }

                    echo apply_filters( 'woocommerce_cart_item_quantity', $cart_item['quantity'], $cart_item_key, $cart_item ); // PHPCS: XSS ok.
                    ?> ×
                <?php
                echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
                ?></span>
                    </div>
                    <?php
                    echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                        'woocommerce_cart_item_remove_link',
                        sprintf(
                            '<a href="%s" class="del-icone" aria-label="%s" data-product_id="%s" data-product_sku="%s"><i class="fa fa-window-close-o"></i></a>',
                            esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
                            esc_html__( 'Remove this item', 'woocommerce' ),
                            esc_attr( $product_id ),
                            esc_attr( $_product->get_sku() )
                        ),
                        $cart_item_key
                    );
                    ?>
                </div>
                <?php
            }
        }
        ?>
        <!-- Cart Box End -->

        <!-- Cart Footer Inner Start -->
        <div class="cart-footer fix">
            <h5>итого :<span class="f-right">
                    <?php
                    echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
                    ?>
                </span></h5>
            <div class="cart-actions">
                <a class="checkout" href="/checkout/">Оформить заказ</a>
            </div>
        </div>
        <!-- Cart Footer Inner End -->
        <?php
    } elseif ($woocommerce->cart->cart_contents_count == 0) {
        ?>
        <h4>Товары в корзине отстутствуют</h4>
        <?php
    }
    ?>
</li>