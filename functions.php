<?php 
// Dans functions.php
function affiche_menu($menu_name) {

    $menu = get_term_by('name', $menu_name, 'nav_menu');

    if ($menu && !is_wp_error($menu)) {
        // Le menu a été trouvé, récupérez ses éléments
        $menu_items = wp_get_nav_menu_items($menu->term_id);

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
            echo 'Le menu "' . $menu_name . '" ne contient aucun élément.';
        }
    } else {
        echo 'Le menu "' . $menu_name . '" n\'a pas été trouvé.';
    }

}


function enqueue_font_awesome() {
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css');
}
add_action('wp_enqueue_scripts', 'enqueue_font_awesome');

?>