<?php
/*
 * Template Name: Доставка и оплата
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


    <div class="about-bottom pt-20 pb-80">
        <div class="container">
            <div class="row pb-30">
                <div class="col">
                    <h1>Доставка и оплата</h1>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="ht-single-about pb-sm-40">
                        <h3>Варианты доставки</h3>
                        <p><b>Доставка по Санкт-Петербургу:</b> (в пределах города) — бесплатно.  Стоимость доставки по России  уточняйте у менеджера. Доставка осуществляется до подъезда.
                            <br>
                            <b>Доставка по России:</b> осуществляется посредством транспортных компаний: СДЭК, Деловые Линии и др. (примерное время доставки 1-4 дня с момента заказа)
                            <br>
                            <b>Оплата:</b> Оплатить заказ можно наличным и безналичным расчетом
                            <br>
                            <b>Время работы:</b> Заказы принимаются круглосуточно</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="ht-single-about">
                        <h3>Оплатить покупку в интернет-магазине tepliy-pol-spb.ru возможно следующими способами:</h3>
                        <div class="ht-about-work">
                            <span>1</span>
                            <div class="ht-work-text">
                                <h5>Наличный расчёт</h5>
                                <p>Вы можете оплатить покупку наличными курьеру (при получении товара).</p>
                            </div>
                        </div>
                        <div class="ht-about-work">
                            <span>2</span>
                            <div class="ht-work-text">
                                <h5>Пластиковые карты</h5>
                                <p>Безналичная оплата банковской картой при получении. Принимаются карты следующих платёжных систем:
                                    «VISA», «MasterCard», «МИР».</p>
                            </div>
                        </div>
                        <div class="ht-about-work">
                            <span>3</span>
                            <div class="ht-work-text">
                                <h5>Безналичный расчет </h5>
                                <p>Доступен для юридических лиц (ООО, ИП и т.п.)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
get_footer();
