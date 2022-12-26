<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package tepliy-pol
 */

get_header();
?>

    <div class="main-shop-page pb-60">
        <div class="container">
    <!-- Row End -->
            <div class="row">





                <div class="col-lg-3 order-2">
                    <?php get_sidebar(); ?>
                </div>
                <div class="col-lg-9 order-lg-2">
                    <?php if ( have_posts() ) : ?>

                    <div class="breadcrumb-area pb-45 pb-sm-30">
                        <div class="container">
                            <div class="breadcrumb">
                                <?= woocommerce_breadcrumb(); ?>
                            </div>
                        </div>
                    </div>
                        <header class="page-header">
                            <h1 class="page-title">
                                <?php
                                /* translators: %s: search query. */
                                printf( esc_html__( 'Результаты поиска по запросу: %s', 'tepliy-pol' ), '<span>' . get_search_query() . '</span>' );
                                ?>
                            </h1>
                        </header><!-- .page-header -->
                    <div class="main-categorie mb-60">
                            <div class="row">
                                <?php
                                /* Start the Loop */
                                while ( have_posts() ) :
                                    the_post();

                                    /**
                                     * Run the loop for the search to output the results.
                                     * If you want to overload this in a child theme then include a file
                                     * called content-search.php and that will be used instead.
                                     */
                                    get_template_part( 'template-parts/content', 'search' );

                                endwhile;



                                else :

                                    get_template_part( 'template-parts/content', 'none' );

                                endif;
                                ?>
                            </div>
                        </div>

                        <?= the_posts_pagination(); ?>


                </div>
            </div>
        </div>
    </div>

<?php

get_footer();
