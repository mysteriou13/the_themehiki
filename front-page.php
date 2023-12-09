frontpage
<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main liste_post">

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

// Exécuter la requête
$query = new WP_Query($args);

// Stocker le nombre total de pages dans une variable
$total_pages = $query->max_num_pages;

        // Exécuter la requête
        $query = new WP_Query($args);
        
        // La boucle WordPress pour afficher des extraits d'articles sur la page d'accueil
        while ($query->have_posts()) : $query->the_post();
        ?>

      <div>

        <div class = "box_pagination">
            <?php 
            $debut = home_url()."?page=1";
           $fin = home_url()."?page=".$total_pages-1;

            ?>

            <a href = "<?php echo $debut ?>"> debut </a>

            <?php 
            
            for ($a = 1; $a < $total_pages; $a++) {
                $link = home_url() . "/?page=" . $a;
                echo "<div> <a href='$link'>$a</a> </div>";
            }


            ?>


            <a  href = "<?php echo $fin;?>"> fin</a>

        </div>

        <div>
            <article id="post-<?php the_ID(); ?>" class="liste_article">

                <div class="entry-content position_text_liste_article">

                    <div>
                        <?php the_title() ?>
                        <?php the_excerpt(); ?>
                    </div>

                </div>

                <div class="footer_liste_article">

                    <div>
                        par <?php echo get_the_author() ?> le <?php the_time('j F Y') ?>
                    </div>

                    <div>
                        <a href="<?php the_permalink(); ?>" class="read-more">Lire la suite &rarr;</a>
                    </div>

                    <div class="social-share-icons">
                        <!-- Ajoutez vos liens de partage ici avec des icônes Font Awesome -->
                        <a href="https://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>" target="_blank" rel="noopener noreferrer">
                            <i class="fab fa-facebook-square"></i> Partager sur Facebook
                        </a>
                        <a href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>" target="_blank" rel="noopener noreferrer">
                            <i class="fab fa-twitter"></i> Partager sur Twitter
                        </a>
                        <!-- Ajoutez d'autres liens pour d'autres réseaux sociaux avec les icônes appropriées -->
                    </div>
                </div>

            </article>
        </div>

      </div>
        <?php endwhile; ?>

        <div class="pagination" style = "color:white">
            <?php
            // Afficher la pagination

           
            ?>
        </div>

        <?php
        // Réinitialiser la requête principale
        wp_reset_postdata();
        ?>
    </main>
</div>

<div class="comments-section">
    <!-- Afficher les commentaires -->
    <?php comments_template(); ?>
</div>

<?php get_footer(); ?>
