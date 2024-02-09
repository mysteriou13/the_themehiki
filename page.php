<?php get_header(); ?>




<?php
get_header(); // Inclure l'en-tête standard de WordPress



// Récupérer l'URL actuelle
$current_url = $_SERVER['REQUEST_URI'];

// Utiliser parse_url pour extraire les parties de l'URL
$url_parts = parse_url($current_url);

$cleaned_path = str_replace('/', '', $url_parts['path']);


$tab = ['login','registration'];

for($a = 0; $a < count($tab); $a++){

if ($cleaned_path ===  $tab[$a] && isset($url_parts['path'])) {

    //echo  $tab[$a];
    
    include_once(get_template_directory()."/template/".$tab[$a].".php");

}

}

?>

    </main>
</div>



<?php 

get_footer();

?>
