<?php
/*
 * Template Name: О продукции
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
                    <h1 class="pb-30">О продукции</h1>
                    <p class="pb-60">Электрические теплые полы и нагревательные приборы «Теплолюкс» производятся в России с 1994 года и пользуются заслуженной популярностью у тех, кто ценит комфорт, высокое качество, надежность и безопасность.
                        <br>
                        В 2010 году «Теплолюкс» был признан самым узнаваемым брендом теплых полов в России. Сегодня «Теплолюкс» – бренд, которому доверяют не только в России, но и во многих странах мира.
                        <br>
                        В 2016 году теплые полы и терморегуляторы «Теплолюкс» удостоены Премии «Лучшее для жизни» в номинации «Умный дом. Системы подогрева пола».</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12">
                    <div class="about-img">
                        <img class="img" src="<?= get_template_directory_uri(); ?>/assets/img/brand/teploluxe12.jpg" alt="about-us">
                    </div>
                </div>
                <div class="col-lg-5 col-md-12">
                    <div class="about-content">
                        <h3>Теплолюкс производит высококачественное оборудование для отопления теплым полом, под все поверхности:</h3>

                        <ul class="mt-20 about-content-list">
                            <li>Под ламинат</li>
                            <li>Под плитку</li>
                            <li>Под керамогранит</li>
                            <li>Обогрев ступеней и водостоков</li>
                            <li>Обогрев кровли</li>
                            <li>Теплолюкс гарантирует своим клиентам высокий уровень комфорта и качества</li>
                            <li>Гарантия на теплый пол Теплолюкс до 50 лет !</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
get_footer();