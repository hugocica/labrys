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

// Remove category base
add_filter('category_link', 'no_category_parents',1000,2);
function no_category_parents($catlink, $category_id) {
    $category = &get_category( $category_id );
    if ( is_wp_error( $category ) )
        return $category;
    $category_nicename = $category->slug;

    $catlink = trailingslashit(get_option( 'home' )) . user_trailingslashit( $category_nicename, 'category' );
    return $catlink;
}

// Add our custom category rewrite rules
add_filter('category_rewrite_rules', 'no_category_parents_rewrite_rules');
function no_category_parents_rewrite_rules($category_rewrite) {
    //print_r($category_rewrite); // For Debugging

    $category_rewrite=array();
    $categories=get_categories(array('hide_empty'=>false));
    foreach($categories as $category) {
        $category_nicename = $category->slug;
        $category_rewrite['('.$category_nicename.')/(?:feed/)?(feed|rdf|rss|rss2|atom)/?$'] = 'index.php?category_name=$matches[1]&feed=$matches[2]';
        $category_rewrite['('.$category_nicename.')/page/?([0-9]{1,})/?$'] = 'index.php?category_name=$matches[1]&paged=$matches[2]';
        $category_rewrite['('.$category_nicename.')/?$'] = 'index.php?category_name=$matches[1]';
    }
    // Redirect support from Old Category Base
    global $wp_rewrite;
    $old_base = $wp_rewrite->get_category_permastruct();
    $old_base = str_replace( '%category%', '(.+)', $old_base );
    $old_base = trim($old_base, '/');
    $category_rewrite[$old_base.'$'] = 'index.php?category_redirect=$matches[1]';

    //print_r($category_rewrite); // For Debugging
    return $category_rewrite;
}

// include metabox files
include_once get_stylesheet_directory().'/metaboxes/setup.php';
include_once get_stylesheet_directory().'/metaboxes/labrys-spec.php';

remove_filter('the_content', 'wpautop');

?>