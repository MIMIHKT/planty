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
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'hello-elementor','hello-elementor','hello-elementor-theme-style' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );

function ajouter_page_menu_connecte( $items, $args ) {
    if ( is_user_logged_in() && $args->theme_location == 'menu-principal' ) {
        $page_id = 123; // Remplacez 123 par l'ID de la page que vous souhaitez ajouter.
        $page_link = get_permalink( $page_id );
        $page_title = get_the_title( $page_id );
        $items .= '<li class="menu-item"><a href="' . $page_link . '">' . $page_title . '</a></li>';
    }
    return $items;
}
add_filter( 'wp_nav_menu_items', 'ajouter_page_menu_connecte', 10, 2 );


// END ENQUEUE PARENT ACTION
