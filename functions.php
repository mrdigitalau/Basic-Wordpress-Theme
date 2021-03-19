<?php

// Enqueue styles and scripts
function add_theme_scripts()
{   
    wp_enqueue_style('boostrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/app.css');
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), 1, true);
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/app.js', array('jquery'), 1, true);

}
add_action('wp_enqueue_scripts', 'add_theme_scripts');



// Register menu location
register_nav_menus(array(
    'top-menu' => __('Top Menu', 'mrdigital_theme'),
    //'mobile-menu' => __( 'Mobile Menu', 'mrdigital_theme' ),
));



// Image sizes
//add_image_size('custom_image', 800, 800, false);

// Theme support
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');


// Register sidebars

// function my_sidebars()
// {

//             register_sidebar(

//                 [
//                   'name' => 'Footer',
//                   'id' => 'footer',
//                   'before_title' => '<h4 class="widget-title">',
//                   'after_title' => '</h4>',
//                 ]

//             );

// }
// add_action('widgets_init', 'my_sidebars');

// Declare WooCommerce support
// add_theme_support('woocommerce');
// add_theme_support( 'wc-product-gallery-zoom' );
// add_theme_support( 'wc-product-gallery-lightbox' );
// add_theme_support( 'wc-product-gallery-slider' );


// Remove WordPress version meta in header scripts
remove_action('wp_head', 'wp_generator');


// Remove WordPress Emojicons
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');


// Remove classes and widths from images in content editor
function remove_width_attribute($html)
{
    $html = preg_replace('/(width|height)="\d*"\s/', "", $html);
    return $html;
}
add_filter('get_image_tag_class', '__return_empty_string');
add_filter('post_thumbnail_html', 'remove_width_attribute', 10);
add_filter('image_send_to_editor', 'remove_width_attribute', 10);



// // Custom Post Type
// function custom_post_type()
// {

//     $args = array(
        
//         'public' => true,
//         'has_archive' => true,
//         'supports' => array('title','editor','thumbnail','revisions'),
//         //'rewrite' => array('slug' => 'news'),
//         'hierarchical' => true,
//         'labels' => array(
//             'name' => 'News',
//             'singular_name' => 'News Item',
//             //'add_new_item' => 'Add News item',
//             //..'not_found' => 'No news found'
//         ),
//         'menu_icon' => 'dashicons-format-aside',

//     );

//     register_post_type('news', $args);

// }
// add_action('init', 'custom_post_type');





// // Custom Taxonomy
// function custom_taxonomy()
// {


//     $args = array(
        
      
//         'labels' => array(
//             'name' => 'News Categories',
//             'singular_name' => 'News Category',
//             //'add_new_item' => 'Add News item',
//             //..'not_found' => 'No news found'
//         ),
//         'hierarchical' => true,
//         'menu_icon' => 'dashicons-format-aside',

//     );

//     register_taxonomy('news-category', array('news'), $args);

// }
// add_action('init', 'custom_taxonomy');
