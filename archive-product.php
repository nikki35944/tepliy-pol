<?php
/**
 * The template for main shop page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tepliy-pol
 */

get_header();
?>

<!-- Shop Page Start -->
<div class="main-shop-page mt-30 pb-60">
    <div class="container">
        <!-- Row End -->
        <div class="row">
            <!-- Sidebar Shopping Option Start -->
            <div class="col-lg-3 order-2">
                <?php get_sidebar(); ?>
            </div>
            <!-- Sidebar Shopping Option End -->
            <div class="col-lg-9 order-lg-2">
                <?php if (!is_front_page()): ?>
                <div class="breadcrumb-area pb-60 pb-sm-30">
                    <div class="container">
                        <div class="breadcrumb">
                            <?= woocommerce_breadcrumb(); ?>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                <div class="woocommerce-products-header">
                    <?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
                        <h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
                    <?php endif; ?>

                    <?php
                    /**
                     * Hook: woocommerce_archive_description.
                     *
                     * @hooked woocommerce_taxonomy_archive_description - 10
                     * @hooked woocommerce_product_archive_description - 10
                     */
                    do_action( 'woocommerce_archive_description' );
                    ?>
                </div>

                <?php if ( is_front_page() ) : ?>
                   <div class="single-banner zoom mt-30 mt-sm-10 mb-30">
                    <a href="#"><img src="<?= get_template_directory_uri(); ?>/assets/img/menu/123.jpg" alt="slider-banner"></a>
                   </div>

                <?php endif; ?>

                <?php
                if ( woocommerce_product_loop() ) {

                    /**
                     * Hook: woocommerce_before_shop_loop.
                     *
                     * @hooked woocommerce_output_all_notices - 10
                     * @hooked woocommerce_result_count - 20
                     * @hooked woocommerce_catalog_ordering - 30
                     */
                    do_action( 'woocommerce_before_shop_loop' );

                    woocommerce_product_loop_start();

                    if ( wc_get_loop_prop( 'total' ) ) {
                        while ( have_posts() ) {
                            the_post();

                            /**
                             * Hook: woocommerce_shop_loop.
                             */
                            do_action( 'woocommerce_shop_loop' );

                            wc_get_template_part( 'content', 'product' );
                        }
                    }

                    woocommerce_product_loop_end();

                    /**
                     * Hook: woocommerce_after_shop_loop.
                     *
                     * @hooked woocommerce_pagination - 10
                     */
                    do_action( 'woocommerce_after_shop_loop' );
                } else {
                    /**
                     * Hook: woocommerce_no_products_found.
                     *
                     * @hooked wc_no_products_found - 10
                     */
                    do_action( 'woocommerce_no_products_found' );
                }

                /**
                 * Hook: woocommerce_after_main_content.
                 *
                 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
                 */
                do_action( 'woocommerce_after_main_content' );

                /**
                 * Hook: woocommerce_sidebar.
                 *
                 * @hooked woocommerce_get_sidebar - 10
                 */
                do_action( 'woocommerce_sidebar' );
                ?>

            </div>

        </div>
        <!-- Row End -->
    </div>
    <!-- Container End -->
</div>

<?php
get_footer();
