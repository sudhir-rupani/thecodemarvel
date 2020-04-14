<?php

/**
 * thecodemarvel functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package thecodemarvel
 */
if (!function_exists('thecodemarvel_setup')) :

    function thecodemarvel_setup() {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on thecodemarvel, use a find and replace
         * to change 'thecodemarvel' to the name of your theme in all the template files.
         */
        load_theme_textdomain('thecodemarvel', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        add_theme_support('title-tag');


        add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(array(
            'menu-1' => esc_html__('Primary', 'thecodemarvel'),
        ));


        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        // Set up the WordPress core custom background feature.
        add_theme_support('custom-background', apply_filters('thecodemarvel_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support('custom-logo', array(
            'height' => 250,
            'width' => 250,
            'flex-width' => true,
            'flex-height' => true,
        ));
    }

endif;
add_action('after_setup_theme', 'thecodemarvel_setup');

function admin_style() {
  wp_enqueue_style('admin-styles', get_template_directory_uri().'/admin/style.css');
}
add_action('admin_enqueue_scripts', 'admin_style');


function thecodemarvel_scripts() {
    wp_enqueue_style('thecodemarvel-style', get_stylesheet_uri());

    //wp_enqueue_script( 'thecodemarvel-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'thecodemarvel_scripts');

//add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
//function special_nav_class($classes, $item){
//     if( in_array('current-menu-item', $classes) ){
//         echo"<pre>";
//         print_r($classes);
//         print_r($item);
//         echo"</pre>";
//             $classes[] = 'active ';
//     }
//     return $classes;
//}
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
if (defined('JETPACK__VERSION')) {
    require get_template_directory() . '/inc/jetpack.php';
}

function arphabet_widgets_init() {

    register_sidebar( array(
        'name' => 'Home right sidebar',
        'id' => 'home_right_1',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="rounded">',
        'after_title' => '</h2>',
    ) );
}
add_action( 'widgets_init', 'arphabet_widgets_init' );
