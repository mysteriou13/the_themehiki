<?php 
// Dans functions.php
function affiche_menu($location) {

$locations = get_nav_menu_locations();

if (isset($locations[$location])) {
    // Un menu est affecté à cet emplacement, alors récupérez ses éléments
    $menu_items = wp_get_nav_menu_items($locations[$location]);

    if ($menu_items) {
        // Affichez manuellement les liens du menu
        echo '<nav class="menu-container">';
        echo '<ul class="menu-class">';

        foreach ($menu_items as $menu_item) {
            echo '<li><a href="' . esc_url($menu_item->url) . '">' . esc_html($menu_item->title) . '</a></li>';
        }

        echo '</ul>';
        echo '</nav>';
    } else {
        echo 'Le menu "' . $location . '" ne contient aucun élément.';
    }
} else {
    echo 'Aucun menu n\'est affecté à l\'emplacement "' . $location . '".';
}

}


?>