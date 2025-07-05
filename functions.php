<?php
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Theme Setup
 */
function sqa_landing_theme_setup() {
    // Add support for title tag
    add_theme_support('title-tag');

    // Add support for featured images
    add_theme_support('post-thumbnails');

    // Add support for custom logo
    add_theme_support('custom-logo');

    // Add support for HTML5 markup
    add_theme_support('html5', [
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script'
    ]);

    // Register navigation menus
    register_nav_menus([
        'primary_menu' => __('Primary Menu', 'sqa-landing'),
    ]);
}
add_action('after_setup_theme', 'sqa_landing_theme_setup');


function sqa_register_widget_areas() {
    register_sidebar([
        'name'          => __('Main Sidebar', 'sqa-landing'),
        'id'            => 'main-sidebar',
        'description'   => __('Widgets in this area will appear in the sidebar.', 'sqa-landing'),
        'before_widget' => '<div id="%1$s" class="widget %2$s mb-4">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title mb-3">',
        'after_title'   => '</h4>',
    ]);
}
add_action('widgets_init', 'sqa_register_widget_areas');


/**
 * Enqueue Styles and Scripts
 */
function sqa_landing_enqueue_assets() {
    // Bootstrap CSS
    wp_enqueue_style(
        'bootstrap',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css',
        [],
        '5.3.2'
    );

    // Font Awesome Base
    wp_enqueue_style(
        'fontawesome-core',
        'https://site-assets.fontawesome.com/releases/v6.7.2/css/all.css',
        [],
        '6.7.2'
    );

    // Font Awesome Variants
    $fa_base = 'https://site-assets.fontawesome.com/releases/v6.7.2/css/';
    $fa_styles = [
        'sharp-duotone-thin',
        'sharp-duotone-solid',
        'sharp-duotone-regular',
        'sharp-duotone-light',
        'sharp-thin',
        'sharp-solid',
        'sharp-regular',
        'sharp-light',
        'duotone-thin',
        'duotone-regular',
        'duotone-light',
    ];

    foreach ($fa_styles as $style) {
        wp_enqueue_style("fa-{$style}", $fa_base . $style . '.css', [], '6.7.2');
    }

    // Main style.css in theme root
    wp_enqueue_style(
        'sqa-theme-style',
        get_stylesheet_uri(),
        [],
        filemtime(get_template_directory() . '/style.css')
    );


        // Responsive CSS
    wp_enqueue_style(
        'sqa-responsive-style',
        get_template_directory_uri() . '/responsive.css',
        ['sqa-theme-style'], // Dependency on main style (optional)
        filemtime(get_template_directory() . '/responsive.css')
    );
}
add_action('wp_enqueue_scripts', 'sqa_landing_enqueue_assets');


// Disable Gutenberg editor for all post types
add_filter('use_block_editor_for_post_type', '__return_false', 100);

// Disable Gutenberg widgets block editor (WordPress 5.8+)
add_filter('use_widgets_block_editor', '__return_false');


// Remove block library CSS
function sqa_remove_wp_block_library_css() {
    wp_dequeue_style('wp-block-library');            // Frontend
    wp_dequeue_style('wp-block-library-theme');      // Theme support
    wp_dequeue_style('wc-block-style');              // WooCommerce blocks
}
add_action('wp_enqueue_scripts', 'sqa_remove_wp_block_library_css', 100);

//acf  integrate
add_action('acf/init', function() {
  if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title'    => 'IT Traning BD',
        'menu_title'    => 'IT Traning BD',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Header Settings',
        'menu_title'    => 'Header Settings',
        'parent_slug'   => 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Footer Settings',
        'menu_title'    => 'Footer Settings',
        'parent_slug'   => 'theme-general-settings',
    ));

      acf_add_options_sub_page(array(
        'page_title'    => 'Banner Settings',
        'menu_title'    => 'Banner Settings',
        'parent_slug'   => 'theme-general-settings',
    ));

       acf_add_options_sub_page(array(
        'page_title'    => 'Learning Plan',
        'menu_title'    => 'Learning Plan',
        'parent_slug'   => 'theme-general-settings',
    ));

       acf_add_options_sub_page(array(
        'page_title'    => 'Premium Settings',
        'menu_title'    => 'Premium Settings',
        'parent_slug'   => 'theme-general-settings',
    ));

       acf_add_options_sub_page(array(
        'page_title'    => 'Success Story',
        'menu_title'    => 'Success Story',
        'parent_slug'   => 'theme-general-settings',
    ));


       acf_add_options_sub_page(array(
        'page_title'    => 'Feedback',
        'menu_title'    => 'Feedback',
        'parent_slug'   => 'theme-general-settings',
    ));


       acf_add_options_sub_page(array(
        'page_title'    => 'Conpanies',
        'menu_title'    => 'Conpanies',
        'parent_slug'   => 'theme-general-settings',
    ));


        acf_add_options_sub_page(array(
        'page_title'    => 'Team',
        'menu_title'    => 'Team',
        'parent_slug'   => 'theme-general-settings',
    ));



  }
});






