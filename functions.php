<?php 
// Dans functions.php

function enqueue_font_awesome() {
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css');

    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css');

    // Enqueue Bootstrap JS

}
add_action('wp_enqueue_scripts', 'enqueue_font_awesome');

?>