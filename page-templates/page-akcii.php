<?php
/*
 * Template Name: Акции
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

    <div class="about-main-area pb-80">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="pb-60">Акции</h1>
                    <h3 class="pb-30">Почему стоит обратиться именно к нам?</h3>
                    <ul>
                        <li>Скидка на заказы от 10.000 от указанных цен на сайте</li>
                        <li>Скидка в зависимости от стоимости</li>
                        <li>Расчет стоимости заказа со скидкой в корзине</li>
                        <li>Всеми доставками занимается менеджер магазина и при получении заказа показывает комплектацию и отвечает на любые вопросы</li>
                        <li>Бесплатная доставка по Санкт-Петербургу</li>
                        <li>Нашли дешевле? Позвоните нам и мы снимзим цену!</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

<?php
get_footer();
