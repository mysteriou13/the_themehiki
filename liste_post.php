<div id="main_liste_post" class="post-grid">
    <?php

    // Définir la page à afficher directement
    $my_page = isset($_GET['page']) ? absint($_GET['page']) : 1;

    // Définir le nombre de posts par ligne via un paramètre ou utiliser une valeur par défaut
    $posts_per_row = 4;

    // Définir les arguments de la requête
    $args = array(
        'post_type'      => 'post',
        'posts_per_page' => 6,
        'paged'          => $my_page
    );

    // Exécuter la requête
    $query = new WP_Query($args);

    $count = 0;
    while ($query->have_posts()) : $query->the_post();
        if ($count % $posts_per_row == 0) : ?>
            <div class="post-row"> <!-- Ouvrir une nouvelle ligne -->
        <?php endif; ?>

        <div class="post-column">
            <div id="liste_article" class="liste_article article">
                <a href="<?php the_permalink(); ?>" class="read-more" style="text-decoration: none;">
                    <div>
                        <?php the_post_thumbnail('thumbnail', array('class' => 'custom-thumbnail')); ?>
                    </div>
                    <div class="entry-content position_text_liste_article">
                        <div>
                            <div class="titre_post">
                                <?php the_title(); ?>
                            </div>
                        </div>
                        <div>
                            le <?php the_time('j F Y'); ?>
                            <?php
                            $comments_number = get_comments_number();
                            echo '<span>' . $comments_number . ' commentaire' . ($comments_number > 1 ? 's' : '') . '</span>';
                            ?>
                        </div>
                        <div>
                            <?php the_excerpt(); ?>
                        </div>
                    </div>
                    <div class="footer_liste_article">
                        <div class="social-share-icons">
                            <a href="https://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>" target="_blank" rel="noopener noreferrer">
                                <i class="fab fa-facebook-square"></i> Partager sur Facebook
                            </a>
                            <a href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>" target="_blank" rel="noopener noreferrer">
                                <i class="fab fa-twitter"></i> Partager sur Twitter
                            </a>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <?php if ($count % $posts_per_row == $posts_per_row - 1) : ?>
            </div> <!-- Fermer la ligne après le dernier article de la ligne -->
        <?php endif; ?>

        <?php $count++; ?>
    <?php endwhile; ?>

    <?php
    // Fermer la dernière ligne si elle n'a pas été fermée
    if ($count % $posts_per_row != 0) {
        echo '</div>';
    }
    ?>
</div>

<div class="pagination">
    <?php
    // Pagination
    echo paginate_links(array(
        'total' => $query->max_num_pages,
        'current' => $my_page,
        'format' => '?paged=%#%',
        'show_all' => false,
        'end_size' => 2,
        'mid_size' => 1,
        'prev_next' => true,
        'prev_text' => __('&laquo; Previous'),
        'next_text' => __('Next &raquo;'),
        'type' => 'plain',
    ));
    ?>
</div>

<?php
// Restaurez les données de la requête principale après la boucle personnalisée.
wp_reset_postdata();
?>
