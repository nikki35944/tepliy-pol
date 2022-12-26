<?php
//Изменить заголовок продукта
remove_action( 'woocommerce_shop_loop_item_title','woocommerce_template_loop_product_title', 10 );
add_action('woocommerce_shop_loop_item_title', 'abChangeProductsTitle', 10 );
function abChangeProductsTitle() {
    echo '<h4 class="woocommerce-loop-product__title">' . get_the_title() . '</h4>';
}
//добавление классов в главном меню
function my_nav_menu_submenu_css_class( $classes ) {
    $classes[] = 'ht-dropdown dropdown-style-two';
    return $classes;
}
add_filter( 'nav_menu_submenu_css_class', 'my_nav_menu_submenu_css_class' );

//убрать размер шрифта тэг-кладов
add_filter('wp_generate_tag_cloud', 'myprefix_tag_cloud',10,1);
function myprefix_tag_cloud($tag_string){
    return preg_replace('/style=("|\')(.*?)("|\')/','',$tag_string);
}

/**
 * Количество символов в описинии на странице поиска
 */
add_filter( 'excerpt_length', function() {
    return 20;
} );

/**
 * Заменить текст ссылки для результатов поиска
 */
add_filter( 'excerpt_more', function ( $more ) {
    global $post;
    return '<a href="'. get_permalink($post) . '"> [Подробнее...]</a>';
} );

// удаляет H2 из шаблона пагинации
add_filter('navigation_markup_template', 'my_navigation_template', 10, 2 );
function my_navigation_template( $template, $class ){
    /*
    Вид базового шаблона:
    <nav class="navigation %1$s" role="navigation">
        <h2 class="screen-reader-text">%2$s</h2>
        <div class="nav-links">%3$s</div>
    </nav>
    */

    return '
<div class="pagination-box fix">
    <nav class="navigation %1$s" role="navigation">
		<div class="nav-links">%3$s</div>
	</nav> 
</div>
	   
	';
}

add_filter('woocommerce_variable_price_html', 'custom_variation_price', 10, 2);
function custom_variation_price( $price, $product ) {
    if ( ! empty($product->min_variation_price) && is_product_category() ) {
        $price = '<span class="from">' . _x('From', 'min_price', 'woocommerce') . ' </span>';
        $price .= woocommerce_price($product->get_price());
    }

    return $price;
}