
<?php
 get_header();

// Récupérer l'URL actuelle
$current_url = $_SERVER['REQUEST_URI'];

// Utiliser parse_url pour extraire les parties de l'URL
$url_parts = parse_url($current_url);

$cleaned_path = str_replace('/', '', $url_parts['path']);


$tab = ['login','registration'];

$path = false;

for($a = 0; $a < count($tab); $a++){

if ($cleaned_path ===  $tab[$a] && isset($url_parts['path'])) {

    //echo  $tab[$a];
    
    include_once(get_template_directory()."/template/".$tab[$a].".php");

    $path = true;
    break;

}

}

if(!$path){
?>

<div class="box_front_page text-light">
<div id="primary" class="content-area">

    <?php while (have_posts()) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

          <h1 class="entry-title"><?php the_title(); ?></h1>

        <div class="entry-content">
          <?php the_content(); ?>
        </div>
      </article>
    <?php endwhile; ?>

</div>
        </div>


<?php
        
        ?>

    </main>
</div>


<?php
}

?>

</div>   

<?php
wp_footer();
get_footer(); ?>