<?php

// Consultas reutilizables
require get_template_directory() . '/inc/queries.php';

// Cuando el tema es activado
function gymfitness_setup()
{
    // Habilitar imagines destacadas
    add_theme_support('post-thumbnails');

    // Agregar imageens de tamaño personalizado
    add_image_size('square', 350, 350, true);
    add_image_size('portrait', 350, 724, true);
    add_image_size('cajas', 400, 375, true);
    add_image_size('mediano', 700, 400, true);
    add_image_size('blog', 966, 644, true);
}

add_action('after_setup_theme', 'gymfitness_setup');

// Menus de navegacion
function iiess_menus()
{
    register_nav_menus(array(
        'menu-principal' => __('Menu Principal', 'gymfitness')
    ));
}

add_action('init', 'iiess_menus');

// Scripts y Styles
function gymfitness_scripts_styles()
{
    // Normalize
    wp_enqueue_style('normalize', get_template_directory_uri() . "/css/normalize.css", array(), '1.0.0');
    // slicnnav
    wp_enqueue_style('slicknavCSS', get_template_directory_uri() . '/css/slicknav.min.css', [], '1.0.0');
    // Google fonts
    wp_enqueue_style('googlefonts', 'https://fonts.googleapis.com/css2?family=Open+Sans&family=Raleway:wght@400;700;900&family=Staatliches&display=swap', array(), '1.0.0');
    // Hoja de estilos principal
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize', 'googlefonts'), '1.0.0');

    // Scripts
    wp_enqueue_script('slicknavJS', get_template_directory_uri() . "/js/jquery.slicknav.min.js", array('jquery'), '1.0.0', true);

    // My own scripts
    wp_enqueue_script('scripts', get_template_directory_uri() . "/js/scripts.js", array('jquery', 'slicknavJS'), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'gymfitness_scripts_styles');
