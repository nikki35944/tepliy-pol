<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package tepliy-pol
 */

get_header();
?>
    <div class="breadcrumb-area ptb-60 ptb-sm-30">
        <div class="container">
            <div class="breadcrumb">
                <?= woocommerce_breadcrumb(); ?>
            </div>
        </div>
        <!-- Container End -->
    </div>

    <div class="error404-area pb-60 pt-20">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="error-wrapper text-center">
                        <div class="error-text">
                            <h1>404</h1>
                            <h2><?php esc_html_e( 'Страница не найдена.', 'tepliy-pol' ); ?></h2>
                            <p><?php esc_html_e( 'Похоже, в этом месте ничего не было найдено. Может быть, попробуйте одну из ссылок ниже или поиск?', 'tepliy-pol' ); ?></p>
                        </div>
                        <div class="search-error">
                            <?= get_search_form(); ?>
                        </div>
                        <div class="error-button">
                            <a href="<?= home_url(); ?>">Back to home page</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




<?php
get_footer();
