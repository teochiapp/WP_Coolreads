<?php

function register_navwalker()
{
    require_once get_template_directory() . '/includes/class-wp-bootstrap-navwalker.php';
}
add_action('after_setup_theme', 'register_navwalker');

add_filter('nav_menu_link_attributes', 'prefix_bs5_dropdown_data_attribute', 20, 3);
/**
 * Use namespaced data attribute for Bootstrap's dropdown toggles.
 *
 * @param array    $atts HTML attributes applied to the item's `<a>` element.
 * @param WP_Post  $item The current menu item.
 * @param stdClass $args An object of wp_nav_menu() arguments.
 * @return array
 */
function prefix_bs5_dropdown_data_attribute($atts, $item, $args)
{
    if (is_a($args->walker, 'WP_Bootstrap_Navwalker')) {
        if (array_key_exists('data-toggle', $atts)) {
            unset($atts['data-toggle']);
            $atts['data-bs-toggle'] = 'dropdown';
        }
    }
    return $atts;
}

function clustertecnologico_setup()
{
    add_theme_support('post-thumbnails');

    // Logotipo personalizado
    $logo_defaults = [
        'header-text' => ['site-title', 'site-description'],
    ];
    add_theme_support('custom-logo', $logo_defaults);

    //TITULOS
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'clustertecnologico_setup');

function clustertecnologico_menus()
{
    register_nav_menus([
        'menu-principal' => __('Menu Principal', 'clustertecnologico')
    ]);
}

add_action('init', 'clustertecnologico_menus');


function clustertecnologico_scripts_styles()
{
    // ARCHIVO CSS
    wp_enqueue_style('main', get_template_directory_uri() . "/theme/assets/css/main.css", [], "");
    wp_enqueue_style('custom', get_template_directory_uri() . "/theme/assets/css/custom.css", [], "");

    // ARCHIVOS JS
    wp_enqueue_script("jquery", get_template_directory_uri() . "/theme/assets/js/vendors/jquery.min.js", [], "", true);
    wp_enqueue_script("popper", get_template_directory_uri() . "/theme/assets/js/vendors/popper.min.js", ['jquery'], "", true);
    wp_enqueue_script("bootstrap", get_template_directory_uri() . "/theme/assets/js/vendors/bootstrap.min.js", ['jquery'], "", true);
    wp_enqueue_script("easing", get_template_directory_uri() . "/theme/assets/js/vendors/easing.min.js", ['jquery'], "", true);
    wp_enqueue_script("swiper", get_template_directory_uri() . "/theme/assets/js/vendors/swiper.min.js", ['jquery'], "", true);
    wp_enqueue_script("massonry", get_template_directory_uri() . "/theme/assets/js/vendors/massonry.min.js", ['jquery'], "", true);
    wp_enqueue_script("bootstrap", get_template_directory_uri() . "/theme/assets/js/vendors/bootstrap-slider.js", ['jquery'], "", true);
    wp_enqueue_script("magnific", get_template_directory_uri() . "/theme/assets/js/vendors/magnific-popup.js", ['jquery'], "", true);
    wp_enqueue_script("waypoints", get_template_directory_uri() . "/theme/assets/js/vendors/waypoints.js", ['jquery'], "", true);
    wp_enqueue_script("counterup", get_template_directory_uri() . "/theme/assets/js/vendors/counterup.js", ['jquery'], "", true);
    wp_enqueue_script("isotop", get_template_directory_uri() . "/theme/assets/js/vendors/isotop.pkgd.min.js", ['jquery'], "", true);
    wp_enqueue_script("countdown", get_template_directory_uri() . "/theme/assets/js/vendors/countdown.min.js", ['jquery'], "", true);
    wp_enqueue_script("app", get_template_directory_uri() . "/theme/assets/js/app.js", ['jquery'], "", true);
}

add_action('wp_enqueue_scripts', 'clustertecnologico_scripts_styles');