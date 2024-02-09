<?php
get_header(); // Inclure l'en-tête standard de WordPress

// Récupérer le slug de la page actuelle
$slug = get_post_field('post_name', get_post());

// Récupérer les informations de la page en fonction du slug
$page = get_page_by_path($slug);

// Vérifier si la page existe
if ($page) {
    $page_id = $page->ID;
    $page_title = $page->post_title;
    $page_content = get_post_field('post_content', $page_id);

    // Afficher le titre de la page
    echo '<h1>' . esc_html($page_title) . '</h1>';

    // Afficher le contenu de la page
    echo apply_filters('the_content', $page_content);
} else {
    // Si la page n'existe pas, afficher un message d'erreur
    echo '<p>Page not found</p>';
}

get_footer(); // Inclure le pied de page standard de WordPress
?>
