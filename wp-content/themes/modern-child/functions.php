<?php

// Incluindo arquivos de estilo
add_action( 'wp_enqueue_scripts', 'labrys_enqueue_styles' );
function labrys_enqueue_styles() {
    $parent_style = 'modern-style';
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
    wp_enqueue_style( 'labrys-style', 
    	get_stylesheet_directory_uri() . '/css/labrys.css',
    	array( $parent_style ), 
    	wp_get_theme()->get('Version')
    );
    // wp_enqueue_style( 'labrys-1440', 
    // 	get_stylesheet_directory_uri() . '/css/labry-1440.css',
    // 	array( $parent_style ), 
    // 	wp_get_theme()->get('Version')
    // );
    // wp_enqueue_style( 'labrys-1024', 
    // 	get_stylesheet_directory_uri() . '/css/labry-1024.css',
    // 	array( $parent_style ), 
    // 	wp_get_theme()->get('Version')
    // );
    // wp_enqueue_style( 'labrys-mobile', 
    // 	get_stylesheet_directory_uri() . '/css/labry-mobile.css',
    // 	array( $parent_style ), 
    // 	wp_get_theme()->get('Version')
    // );
}
// Incluindo arquivos scripts js
add_action( 'wp_enqueue_scripts', 'labrys_enqueue_scripts' );
function labrys_enqueue_scripts() {
    wp_enqueue_script( 'labrys-scripts', 
        get_stylesheet_directory_uri() . '/js/functions.js', 
        array ( 'jquery' ), 
        wp_get_theme()->get('Version'), 
        true
    );
    wp_enqueue_script( 'imagesloaded', 
        get_stylesheet_directory_uri() . '/js/imagesloaded.pkgd.min.js', 
        array ( 'jquery' ), 
        wp_get_theme()->get('Version'), 
        true
    );
}


// Escondendo a barra de admin do front-end
show_admin_bar( false );

add_action( 'after_setup_theme', 'register_editorial_menu' );
function register_editorial_menu() {
  register_nav_menu( 'editorial', __( 'Editorial Menu', 'modern-child' ) );
}

?>