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
                   
                     <div>
                     
                    </div>

                    <div class="front_page_liste_post">

                    <div  class = "main_title" >
                   
                   <div class = "title_site" id  = "title_site">
                   Bienvenue sur Hikikomori-France
                      </div>

                      <div class = "sous_titre">
                      Site regroupant les hikikomori ainsi que les reclus sociaux, les asociaux, tout ceux qui ne s’intègrent pas dans la société
                      </div>

                    </div>

                   <div>
                   <?php require_once(get_template_directory() . "/liste_post.php") ?>
                   </div>


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
