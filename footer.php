<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tepliy-pol
 */

?>

<footer class="off-white-bg">
    <!-- Footer Top Start -->
    <div class="footer-top pt-50 pb-60">
        <div class="container">
            <div class="row">

            </div>
            <div class="row">
                <!-- Single Footer Start -->
                <div class="col-lg-4 col-md-12 ">
                    <div class="single-footer">
                        <h3>Контакты</h3>
                        <div class="footer-content">
                            <div class="loc-address">
                                <span><a href="mailto:admin@tepliy-pol-spb.ru"><i class="fa fa-envelope-o"></i>Почта : admin@tepliy-pol-spb.ru</a></span>
                                <span style="font-weight: bold;"><a href="tel:+7 900 631 7287"><i class="fa fa-phone"></i>Телефон: +7 (900) 631-72-87</a></span>
                            </div>
                            <div class="payment-mth"><img class="img" src="<?= get_template_directory_uri(); ?>/assets/img/footer/2.png" alt="payment-image"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 mr-auto ml-auto">
                    <div class="newsletter text-center">
                        <div class="main-news-desc">
                            <div class="news-desc">
                                <h3>Поиск по сайту</h3>
                                <p>Введите запрос.</p>
                            </div>
                        </div>
                        <div class="search-box-view ">
                            <?= get_search_form(); ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Row End -->
        </div>
        <!-- Container End -->
    </div>
    <!-- Footer Top End -->
</footer>
<?php wp_footer(); ?>

</body>
</html>
