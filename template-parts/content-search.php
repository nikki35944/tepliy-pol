<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tepliy-pol
 */

?>

<div class="col-lg-4 col-md-6 col-sm-6">
    <div class="single-search-result">
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="pro-img">
                <?php tepliy_pol_post_thumbnail(); ?>
            </div>
            <div class="pro-content">
                <header class="entry-header">
                    <?php the_title( sprintf( '<h4 class="woocommerce-loop-category__title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h4>' ); ?>

                </header><!-- .entry-header -->

                <div class="entry-summary">
                    <?php the_excerpt(); ?>
                    <?php $product = wc_get_product( get_the_ID() ); /* get the WC_Product Object */ ?>
                    <p class="search-price"><?php echo $product->get_price_html(); ?></p>
                </div><!-- .entry-summary -->
            </div>


        </article><!-- #post-<?php the_ID(); ?> -->
    </div>
</div>


