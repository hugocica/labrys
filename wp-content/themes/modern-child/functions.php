<?php

// Incluindo arquivos de estilo
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    $parent_style = 'modern-style';
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
    wp_enqueue_style( 'labrys', 
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

// Escondendo a barra de admin do front-end
show_admin_bar( false );

add_action( 'after_setup_theme', 'register_editorial_menu' );
function register_editorial_menu() {
  register_nav_menu( 'editorial', __( 'Editorial Menu', 'modern-child' ) );
}

?>