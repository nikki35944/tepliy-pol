<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tepliy-pol
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(82562026, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/82562026" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
    
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<!--[if lt IE 8]>
<p class="browserupgrade">Вы используете <strong>старый</strong> браузер. Пожалуйста <a href="https://www.google.com/chrome/">обновите ваш браузер</a> </p>
<![endif]-->
<!-- Wrapper Start -->
<div class="wrapper homepage">

<!-- Header Area Start -->
<header>
    <!-- Header Top Start -->
    <div class="header-top">
        <div class="container">
            <div class="row">
                <!-- Header Top left Start -->
                <div class="col-lg-4 col-md-6 d-center">
                    <div class="header-top-left">
                        <img src="<?= get_template_directory_uri(); ?>/assets/img/icon/call.png" alt=""><a href="tel:+7 900 631 7287">Позвоните нам : +7 (900) 631-72-87</a>
                    </div>
                </div>
                <!-- Header Top left End -->
                <!-- Search Box Start -->
                <div class="col-lg-8 col-md-6 mb-2">
                    <div class="search-box-view ">
                        <?= get_search_form(); ?>
                    </div>
                </div>
                <!-- Search Box End -->
            </div>
        </div>
        <!-- Container End -->
    </div>
    <!-- Header Top End -->
    <!-- Header Bottom Start -->
    <div class="header-bottom header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-2 col-sm-5 col-4">
                    <div class="logo">
                        <a href="/"><img src="<?= get_template_directory_uri(); ?>/assets/img/logo/logo.png" alt="logo-image"></a>
                    </div>
                </div>
                <!-- Primary Vertical-Menu End -->
                <!-- Search Box Start -->
                <div class="col-xl-5 col-lg-6 d-none d-lg-block">
                    <div class="middle-menu pull-left">
                        <nav>
                            <?php
                            wp_nav_menu( [
                                'theme_location'  => '',
                                'menu'            => 'Glavnoe menu',
                                'container'       => 'ul',
                                'menu_class'      => 'middle-menu-list',
                                'menu_id'         => '',
                                'echo'            => true,
                                'fallback_cb'     => 'wp_page_menu',
                                'before'          => '',
                                'after'           => '',
                                'link_before'     => '',
                                'link_after'      => '',
                                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                'depth'           => 0,
                            ] );
                            ?>
                        </nav>
                    </div>
                </div>
                <!-- Search Box End -->
                <!-- Cartt Box Start -->
                <div class="col-lg-4 col-sm-7 col-8">
                    <div class="cart-box text-right">
                        <ul class="d-flex justify-content-end align-items-center">
                            <li class="top-menu-manager-phone"><a href="tel:+7 900 631 7287"><i class="fa fa-phone mr-2"></i>+7 (900) 631-72-87</a></li>
                            <li><a class="cart-link" href="/cart/"><i class="fa fa-shopping-basket"></i><span class="cart-counter"><?php
                            global $woocommerce;
                            $items_count = $woocommerce->cart->get_cart_contents_count;
                            echo '<div id="mini-cart-count">';
                            echo $items_count ? $items_count : 0;
                            echo '</div>';
                        ?></span></a>

                                <ul class="ht-dropdown main-cart-box">
                                    <?php woocommerce_mini_cart(); ?>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Cartt Box End -->
                <div class="col-sm-12 d-lg-none">
                    <div class="mobile-menu">
                        <nav>
                            <ul>
                                <li><a href="/">Каталог</a>
                                </li>
                                <li><a href="/kontakty/">Контакты</a>
                                </li>
                                <li><a href="/o-produkczii/">О продукции</a>
                                    <!-- Mobile Menu Dropdown Start -->
                                    <ul>
                                        <li><a href="/o-produkczii/garantiya/">Гарантия</a></li>
                                        <li><a href="/o-produkczii/primenenie/">Применение</a></li>
                                        <li><a href="/o-produkczii/akczii/">Акции</a></li>
                                    </ul>
                                    <!-- Mobile Menu Dropdown End -->
                                </li>
                                <li><a href="/dostavka-i-oplata/">Доставка и оплата</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- Mobile Menu  End -->
            </div>
            <!-- Row End -->
        </div>
        <!-- Container End -->
    </div>
    <!-- Header Bottom End -->
</header>
<!-- Header Area End -->
