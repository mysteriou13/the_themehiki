<div id="main_liste_post" class="post-grid">
    <?php

// Définir la page à afficher directement
$my_page = 0;

// Définir les arguments de la requête
$args = array(
    'post_type'      => 'post',
    'posts_per_page' => '6',
    'paged'          => $my_page
);


// Stocker le nombre total de pages dans une variable


        // Exécuter la requête
        $query = new WP_Query($args);
        

    $count = 0;
    while ($query->have_posts()) : $query->the_post();
    ?>
        <?php if ($count % 5 == 0) : ?>
            <div class="post-row">
        <?php endif; ?>

        <div class="post-column">
            
            <div id="liste_article" class="liste_article article">

            <a href="<?php the_permalink(); ?>" class="read-more" style = "
             text-decoration: none;
            ">         
                      <div>
                            <?php the_post_thumbnail('thumbnail', array('class' => 'custom-thumbnail')); ?>
                        </div>

                <div class="entry-content position_text_liste_article">

                    <div>
                        

                        <div  class = "titre_post">
                            <?php the_title() ?>
                        </div>
               </a>

                        <div>
                        le <?php the_time('j F Y') ?>
    <?php
    $comments_number = get_comments_number();
  
        echo '<span>' . $comments_number . ' commentaire</span>';
  
    ?>
                        </div>

                        <div>
                            <?php the_excerpt(); ?>
                        </div>
                    </div>

                    <div class="footer_liste_article">

                      

                        <div>
                            
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

                </div>
            </div>
        </div>

        <?php if ($count % 4 == 3 || $count == $query->post_count - 1) : ?>
            </div>
        <?php endif; ?>

        <?php $count++; ?>
    <?php endwhile; ?>
</div>

