<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

function wpdocs_theme_name_scripts() {
    wp_enqueue_style( 'fancy-style', get_stylesheet_directory_uri() . '/assets/js/fancybox/jquery.fancybox-1.3.4.css' );
    wp_enqueue_style( 'style-app', get_stylesheet_directory_uri() . '/assets/css/app.css' );
    wp_enqueue_script( 'fancy_script', get_stylesheet_directory_uri() . '/assets/js/fancybox/jquery.fancybox-1.3.4.pack.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'iso_script', 'https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js', array('jquery'), true );
    wp_enqueue_script( 'app_script', get_stylesheet_directory_uri() . '/assets/js/app.js', array('jquery'), '1.0.0', true );
    wp_localize_script( 'app_script', 'ajax_url', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );

add_image_size('horizontal-thumbnail', '468','313',true);
add_image_size('vertical-thumbnail', '235','312', true);