frontpage
<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main liste_post">

        <?php


      $category_slug = get_query_var('category_name');

      // Si la catégorie est définie, affiche les articles de cette catégorie
      if ($category_slug) {
            $posts_per_page = htmlspecialchars($_GET['page']);
      
    
          $category = get_category_by_slug($category_slug);

          $args = array(
              'post_type' => 'post',
              'cat' => $category->cat_ID, // Utilisez l'ID de la catégorie
              'posts_per_page' => -1, // Afficher tous les articles de la catégorie
          );


      }else{
        $posts_per_page = 1;
      }


// Définir la page à afficher directement
$my_page = 2;

// Définir les arguments de la requête

// Exécuter la requête
$query = new WP_Query($args);

// Stocker le nombre total de pages dans une variable
$total_pages = $query->max_num_pages;

        require_once(get_template_directory()."/liste_post.php");
   ?>

     
    </main>
</div>

<div class="comments-section">
    <!-- Afficher les commentaires -->
    <?php comments_template(); ?>
</div>

<?php get_footer(); ?>
