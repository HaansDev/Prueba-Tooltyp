<?php

function createTableNewsletter() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'newsletter';

    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE IF NOT EXISTS $table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        email varchar(100) NOT NULL,
        PRIMARY KEY (id)
    ) $charset_collate;";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}

function estilosCustom() {
    wp_enqueue_style('custom-style', get_stylesheet_directory_uri() . '/css/styles.css', array(), wp_get_theme()->get('Version'));
}

function validacionNewsletter() {
    wp_register_script('validacion-newsletter', get_template_directory_uri() . '/js/validation.js', array('jquery'), '1.0', true );
    wp_enqueue_script('validacion-newsletter');
}
function animacionSli() {
    wp_register_script('animacion-noticias', get_template_directory_uri() . '/js/sliderNoticias.js', array('jquery'), '1.0', true );
    wp_enqueue_script('animacion-noticias');
}

function agregarMenuSubs() {
    add_menu_page(
        'Suscriptores', 
        'Suscriptores', 
        'manage_options', 
        'gestion-suscriptores', 
        'paginaSubs',
        'dashicons-buddicons-pm',
        25
    );
}

function enqueue_swiper_scripts() {
    wp_enqueue_script( 'swiper', 'https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.js', array(), '6.8.4', true );
    wp_enqueue_style( 'swiper', 'https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.css', array(), '6.8.4' );
}

function deshabilitar_editor_wordpress() {
    remove_post_type_support('post', 'editor');
}

add_action('after_setup_theme', 'createTableNewsletter');

add_action('init', 'deshabilitar_editor_wordpress');
add_action( 'wp_enqueue_scripts', 'enqueue_swiper_scripts' );
add_action('wp_enqueue_scripts', 'estilosCustom');
add_action('wp_enqueue_scripts', 'validacionNewsletter');
add_action('wp_enqueue_scripts', 'animacionSli');
add_action('admin_menu', 'agregarMenuSubs');
require_once dirname(__FILE__) . '/gestion-suscriptores/gestion-suscriptores.php';