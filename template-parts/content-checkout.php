<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tepliy-pol
 */

?>

<div class="col-md-12">

    <div class="breadcrumb-area pb-45 pb-sm-30">
        <div class="container">
            <div class="breadcrumb">
                <?= woocommerce_breadcrumb(); ?>
            </div>
        </div>
    </div>

    <header class="entry-header">
        <?php
        if ( is_singular() ) :
            the_title( '<h1 class="entry-title">', '</h1>' );
        else :
            the_title( '<h1 class="entry-title">', '</h1>' );
        endif;

        if ( 'post' === get_post_type() ) :
            ?>
            <div class="entry-meta">
                <?php
                tepliy_pol_posted_on();
                tepliy_pol_posted_by();
                ?>
            </div><!-- .entry-meta -->
        <?php endif; ?>
    </header><!-- .entry-header -->

    <?php tepliy_pol_post_thumbnail(); ?>

    <div class="entry-content main-categorie">
        <?php
        the_content(
            sprintf(
                wp_kses(
                /* translators: %s: Name of current post. Only visible to screen readers */
                    __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'tepliy-pol' ),
                    array(
                        'span' => array(
                            'class' => array(),
                        ),
                    )
                ),
                wp_kses_post( get_the_title() )
            )
        );

        wp_link_pages(
            array(
                'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'tepliy-pol' ),
                'after'  => '</div>',
            )
        );
        ?>
    </div><!-- .entry-content -->

    <!-- #post-<?php the_ID(); ?> -->
</div>


