
<?php
while ($query->have_posts()) : $query->the_post();
        ?>

      <div>

   <?php 
   
require_once(get_template_directory()."/pagination.php");
 
   ?>

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

      </div>
        <?php endwhile; ?>
