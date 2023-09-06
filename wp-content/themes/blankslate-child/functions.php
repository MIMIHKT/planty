<?php

function ajouter_page_menu_connecte( $items, $args ) {
    if ( is_user_logged_in() && $args->theme_location == "main-menu") {
        $lien_admin = '<li class="menu-item"><a href="'.get_admin_url().'">Admin</a></li>';
        
        $position = strpos( $items, '</li>', strpos( $items, '<li' ) + 1 ); // Trouve la position de la deuxième balise </li>
        
        if ( false !== $position ) {
            $items = substr_replace( $items, $lien_admin, $position, 0 ); // Insère le lien à la position trouvée
        }
    }
    return $items;
}
add_filter( 'wp_nav_menu_items', 'ajouter_page_menu_connecte', 10, 2 );
