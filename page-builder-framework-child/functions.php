<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'wpbf-icon-font','wpbf-style','wpbf-style','wpbf-responsive' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );

// END ENQUEUE PARENT ACTION


/*RAJOUTE LES MENUS */
function register_my_menu(){
    register_nav_menus( array(
        'header-menu' => __( 'Menu De Tete')
        
    ) );
}
add_action( 'init', 'register_my_menu', 0 );


/* LOGO DYNAMIQUE    */
add_theme_support('custom-logo');

/* IMAGE DYNAMIQUE  */

// add_theme_support( 'post-thumbnails' );

add_theme_support( 'custom-header' );

// add_theme_support( 'title-tag' );


 /*  CHARGER JAVA SCRIPT ET CSS   */

function igexpo_scripts_styles() {   

    $parent_style = 'parent-style';
    $parent_script='parent-script';
   
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );

	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/css/style_responsive.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri(). '/css/style_responsive.css', array($parent_style));
    
    wp_enqueue_script( $parent_script, get_template_directory_uri(). '/script/script_index.js', ); 
    wp_enqueue_script( 'child-script', get_stylesheet_directory_uri(). '/script/script_index.js', array($parent_script));
	
}

add_action( 'wp_enqueue_scripts', 'igexpo_scripts_styles' ); 



/* pour le script charge après html css ( pour que java script fonctionne comme il faut )   */

add_filter ('script_loader_tag','ig_add_defer_attribute', 10, 2);

function ig_add_defer_attribute ($tag, $handle){
    $scripts_to_defer = array ('child-script');
    foreach( $scripts_to_defer as $defer_script) {
        if ($defer_script === $handle){
            return str_replace (' src', ' defer="defer" src', $tag);

        }
    }
    return $tag;
}