<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tepliy-pol
 */

get_header();
?>


<!-- Shop Page Start -->
<div class="main-shop-page pb-60">
    <div class="container">
        <!-- Row End -->
        <div class="row">
            <?php
            if ( is_page( 'cart' ) || is_cart() ) {
                get_template_part( 'template-parts/content', 'cart' );
            } elseif ( is_page( 'checkout' ) || is_checkout() ) {
                get_template_part( 'template-parts/content', 'checkout' );
            } else {
                ?>
                <!-- Sidebar Shopping Option Start -->
                <div class="col-lg-3 order-2">
                    <?php get_sidebar(); ?>
                </div>
                <!-- Sidebar Shopping Option End -->
                <div class="col-lg-9 order-lg-2">

                    <?php
                    /* Start the Loop */
                    while ( have_posts() ) :
                        the_post();
                        get_template_part( 'template-parts/content' );

                        // If comments are open or there is at least one comment, load up the comment template.
                        if ( comments_open() || get_comments_number() ) {
                            comments_template();
                        }
                    endwhile; // End of the loop.
                    ?>

                </div>
                <?php
            }
            ?>

        </div>
        <!-- Row End -->
    </div>
    <!-- Container End -->
</div>
<!-- Shop Page End -->
<!-- Brand Logo Start -->
<div class="brand-area pb-60">
    <div class="container">
        <!-- Brand Banner Start -->
        <div class="brand-banner owl-carousel">
            <div class="single-brand">
               <img class="img" src="<?= get_template_directory_uri(); ?>/assets/img/brand/1.png" alt="brand-image">
            </div>
            <div class="single-brand">
               <img class="img" src="<?= get_template_directory_uri(); ?>/assets/img/brand/2.png" alt="brand-image">
            </div>
            <div class="single-brand">
               <img class="img" src="<?= get_template_directory_uri(); ?>/assets/img/brand/3.png" alt="brand-image">
            </div>
            <div class="single-brand">
               <img class="img" src="<?= get_template_directory_uri(); ?>/assets/img/brand/4.png" alt="brand-image">
            </div>
            <div class="single-brand">
               <img class="img" src="<?= get_template_directory_uri(); ?>/assets/img/brand/5.png" alt="brand-image">
            </div>
            <div class="single-brand">
               <img class="img" src="<?= get_template_directory_uri(); ?>/assets/img/brand/1.png" alt="brand-image">
            </div>
            <div class="single-brand">
               <img class="img" src="<?= get_template_directory_uri(); ?>/assets/img/brand/2.png" alt="brand-image">
            </div>
            <div class="single-brand">
               <img class="img" src="<?= get_template_directory_uri(); ?>/assets/img/brand/3.png" alt="brand-image">
            </div>
            <div class="single-brand">
               <img class="img" src="<?= get_template_directory_uri(); ?>/assets/img/brand/4.png" alt="brand-image">
            </div>
            <div class="single-brand">
               <img class="img" src="<?= get_template_directory_uri(); ?>/assets/img/brand/5.png" alt="brand-image">
            </div>
        </div>
        <!-- Brand Banner End -->
    </div>
</div>
<!-- Brand Logo End -->


<?php
get_footer();
