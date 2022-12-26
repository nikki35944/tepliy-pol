<?php
/**
 * tepliy-pol functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package tepliy-pol
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'tepliy_pol_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function tepliy_pol_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on tepliy-pol, use a find and replace
		 * to change 'tepliy-pol' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'tepliy-pol', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'tepliy-pol' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'tepliy_pol_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
        add_theme_support( 'woocommerce' );
	}
endif;
add_action( 'after_setup_theme', 'tepliy_pol_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function tepliy_pol_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'tepliy_pol_content_width', 640 );
}
add_action( 'after_setup_theme', 'tepliy_pol_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function tepliy_pol_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'tepliy-pol' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'tepliy-pol' ),
			'before_widget' => '<div class="single-sidebar">',
			'after_widget'  => '</div>',
			'before_title'  => '<div class="group-title"><h2>',
			'after_title'   => '</h2></div>',
		)
	);
}
add_action( 'widgets_init', 'tepliy_pol_widgets_init' );


/**
 * Custom styles and scripts
 */
require get_template_directory() . '/inc/tepliy-pol-custom-styles.php';
require get_template_directory() . '/inc/tepliy-pol-custom-scripts.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
/**
 * Хлебные крошки
 */
require get_template_directory() . '/inc/custom-breadcrumbs.php';
/**
 * Страница товара
 */
require get_template_directory() . '/inc/custom-single-product.php';
/**
 * Корзина в шапке сайта
 */
require get_template_directory() . '/inc/header-cart.php';
/**
 * Инпуты на странице оформления заказа
 */
require get_template_directory() . '/inc/checkout-inputs.php';
/**
 * Форма поиска для сайта
 */
require get_template_directory() . '/inc/custom-search-form.php';
/**
 * Разные функции темы
 */
require get_template_directory() . '/inc/theme-different-functions.php';
