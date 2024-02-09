<?php
/**
 * Proper way to enqueue scripts and styles
 */
function ajouter_bootstrap() {
    // Ajouter le fichier CSS Bootstrap depuis le CDN
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css');

    wp_enqueue_style('style-css',  get_theme_file_uri("/style.css"));

    wp_enqueue_style("pangolin", "https://fonts.googleapis.com/css2?family=Pangolin&display=swap");

    wp_enqueue_style("Federant", "https://fonts.googleapis.com/css2?family=Federant&display=swap");
    

    wp_enqueue_style("Gafata", "https://fonts.googleapis.com/css2?family=Gafata&display=swap");


    wp_enqueue_script('barre_white', get_template_directory_uri() . '/js/barre_white.js');

    wp_enqueue_script('footer', get_template_directory_uri() . '/js/footer.js');

    wp_enqueue_script('font-page', get_template_directory_uri() . '/js/front-page.js');


}

add_action('wp_enqueue_scripts', 'ajouter_bootstrap');

?>