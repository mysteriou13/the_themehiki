<?php get_header(); ?>


        <?php
        $category_slug = get_query_var('category_name');

        // Si la catégorie est définie, affiche les articles de cette catégorie
        if ($category_slug) {
            $category = get_category_by_slug($category_slug);

            // Récupérer la page courante
            $my_page = get_query_var('page') ? absint(get_query_var('page')) : 1;

            // Définir les arguments de la requête
            $args = array(
                'post_type'      => 'post',
                'cat'            => $category->cat_ID,
                'posts_per_page' => 5,
                'paged'          => $my_page,
            );

            // Exécuter la requête
            $query = new WP_Query($args);

            // Stocker le nombre total de pages dans une variable
            $total_pages = $query->max_num_pages;

            require_once(get_template_directory() . "/pagination.php");

            // Boucle WordPress
         
           ?>


<div class="box_front_page">
            <div>
                <?php require_once(get_template_directory() . "/aside.php") ?>
            </div>

            <div>
                <div>
                <ul class="text-light">
    <?php
    // Affichez la liste des articles récents avec une classe CSS ajoutée au lien
    wp_get_archives(array(
        'type'        => 'postbypost',
        'limit'       => 5,
        'format'      => 'custom',
        'before'      => '<li><a class="votre-classe-css text-white" href="#">', // Ajoutez "text-white" pour que le texte soit blanc
        'after'       => '</a></li>',
        'echo'        => 1
    ));
    ?>
</ul>


                    <div class="front_page_liste_post" style = "
                    position: relative;
                     top: 2vh;
                    "><ul class="text-light">
    <?php
    // Affichez la liste des articles récents avec une classe CSS ajoutée au lien
    wp_get_archives(array(
        'type'        => 'postbypost',
        'limit'       => 5,
        'format'      => 'custom',
        'before'      => '<li><a class="votre-classe-css text-white" href="#">', // Ajoutez "text-white" pour que le texte soit blanc
        'after'       => '</a></li>',
        'echo'        => 1
    ));
    ?>
</ul>

                        <?php require_once(get_template_directory() . "/liste_post.php") ?>
                    </div>
                </div>
            </div>
        </div>


<?php
        }
        ?>

    </main>
</div>

<div class="comments-section">
    <!-- Afficher les commentaires -->
    <?php comments_template(); ?>
</div>


<?php 


get_footer()

?>