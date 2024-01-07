<?php get_header(); ?>



<div id="primary" class="content-area">
    <?php
    // La boucle WordPress principale
    while (have_posts()) : the_post();
    ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <div>

        <div class = "main_title_post">

        <div>

        <div class = "title_post" >
            <?php the_title()?>
        </div>

        <div>
                <?php
                // Récupérer la liste des catégories
                $categories = get_the_category();

                // Vérifier si des catégories existent
                if ($categories) {
                    echo '<p class="liste_cat">';
                    foreach ($categories as $category) {
                        // Ajouter la classe CSS à chaque lien de catégorie
                        echo '<a  class = "link_cat_post" href="' . esc_url(get_category_link($category->term_id)) . '" class="ma_classe">' . esc_html($category->name) . '</a>, ';
                    }
                    echo '</p>';
                }
                ?>
         </div>
        </div>

            </div>

            <div class = "main_post">

            <div class="thumbnail_single">
                <?php the_post_thumbnail('thumbnail', array('class' => 'img_thumbnail')); ?>
            </div>

            <div class="entry-content">
                <?php the_content(); ?>
            </div>

            <div>
                <?php 
                
                    comments_template();
                
                ?>
            </div>

            </div>

        </div>

        </article>
    <?php
    endwhile;
    ?>
</div>




