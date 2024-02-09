
<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main liste_post">

      <div>
        <?php
      
      if(isset($_GET['page']) && !empty($_GET['page'])){

      $posts_per_page = htmlspecialchars($_GET['page']);

      }else{
        $posts_per_page = 1;
      }

// Définir la page à afficher directement
$my_page = 2;

// Définir les arguments de la requête
$args = array(
    'post_type'      => 'post',
    'posts_per_page' => $posts_per_page,
    'paged'          => $my_page
);


// Stocker le nombre total de pages dans une variable


        // Exécuter la requête
        $query = new WP_Query($args);
        

        ?>

         <div>
       
        </div>


        <div>

        <div>
          <?php require_once(get_template_directory()."/pagination.php")?>
            
          </div>
        <div   class = "box_front_page">
    
    <div>
      
    <?php require_once(get_template_directory()."/aside.php") ?>

    </div>
       
    <div>
    
    <div>
    <?php require_once(get_template_directory()."/liste_post.php") ?>
  </div>

    </div>

    
      </div>
        </div>      

        </div>

</div>
        

</div>
      



<div class="comments-section">
    <!-- Afficher les commentaires -->
    <?php comments_template(); ?>
</div>
</div>
</main>
<?php
wp_footer();
get_footer(); ?>
<script type="text/javascript" src="/opt/lampp/htdocs/wordpress/wp-content/themes/zentai-site/js/barre_white.js"></script>
