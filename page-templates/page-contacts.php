<?php
/*
 * Template Name: Контакты
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

    <div class="contact-email-area pb-60">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3>Связаться с нами</h3>
                    <p><b>Телефон:</b> <a href="tel:+7 (900) 631-72-87">+7 (900) 631-72-87</a></p>
                    <p><b>Почта:</b> <a href="mailto:admin@tepliy-pol-spb.ru">admin@tepliy-pol-spb.ru</a></p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    
                    <h4 class="mb-30 mt-50">Напишите нам через форму обратной связи</h4>
                    <?= do_shortcode('[contact-form-7 id="10" title="Contacts page"]'); ?>
                </div>
            </div>
        </div>
    </div>

<?php
get_footer();

