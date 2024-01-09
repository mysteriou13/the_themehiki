<?php get_header(); ?>


        <?php
        $category_slug = get_query_var('category_name');

        // Si la catégorie est définie, affiche les articles de cette catégorie
    
            $category = get_category_by_slug($category_slug);

            // Récupérer la page courante
            $my_page = get_query_var('page') ? absint(get_query_var('page')) : 1;

            // Définir les arguments de la requête
            $args = array(
                'post_type'      => 'post',
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
                   

                    <div class="front_page_liste_post" style = "
                    position: relative;
                     top: 2vh;
                    ">
                        <?php require_once(get_template_directory() . "/liste_post.php") ?>
                    </div>
                </div>
            </div>
        </div>


<?php
        
        ?>

    </main>
</div>

<?php 

get_footer();

?>


<script>
    document.addEventListener("DOMContentLoaded", function() {
    var headerElement = document.querySelector('.header');

    // Ajouter une classe pour indiquer que l'animation est terminée
    headerElement.classList.add('animation_header_finished');
});
    </script>