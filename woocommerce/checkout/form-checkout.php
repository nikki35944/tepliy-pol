<?php
/**
 * Checkout Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-checkout.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

do_action( 'woocommerce_before_checkout_form', $checkout );

// If checkout registration is disabled and not logged in, the user cannot checkout.
if ( ! $checkout->is_registration_enabled() && $checkout->is_registration_required() && ! is_user_logged_in() ) {
	echo esc_html( apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) ) );
	return;
}

?>
<div class="checkout-area pt-30 pb-60">
    <div class="container">
        <form name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">

            <?php if ( $checkout->get_checkout_fields() ) : ?>

                <?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="checkbox-form">
                            <div class="row">
                                <?php do_action( 'woocommerce_checkout_billing' ); ?>
                            </div>
                            <div class="row">
                                <div class="different-address">
                                    <?php do_action( 'woocommerce_checkout_shipping' ); ?>
                                    <?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <?php do_action( 'woocommerce_checkout_before_order_review_heading' ); ?>
                        <div class="your-order">
                            <h3><?php esc_html_e( 'Your order', 'woocommerce' ); ?></h3>
                            <div class="your-order-table table-responsive">
                                <?php do_action( 'woocommerce_checkout_before_order_review' ); ?>
                                <?php do_action( 'woocommerce_checkout_order_review' ); ?>
                            </div>
                        </div>
                    </div>
                </div>

            <?php endif; ?>

            <?php do_action( 'woocommerce_checkout_after_order_review' ); ?>

        </form>
    </div>
</div>


<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>
