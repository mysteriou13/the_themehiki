
<?php wp_footer()?>
<footer class="text-light bg p-4">
        <div class="footer-section" id = "section_footer_search">
            <!-- Ajoutez ici votre code pour la barre de recherche de WordPress -->
            <!-- Utilisez la classe "form-control" pour styliser la barre de recherche -->
            <?php get_search_form(); ?>
        </div>

        <div class="footer-section">
            <!-- Ajoutez ici votre code pour les catégories -->
            
            <div class = "card_title_cat" id = "title_categorie">
            <h5 class = "title_categorie"  >Catégories</h5>
            </div>

            <ul class = "ulfooter"  id = "ulfooter">
            <?php
            // Affichez la liste des catégories
        $categories = get_categories();
        foreach ($categories as $category) {
        
            echo '
            <li class = "text-danger">
            <div class = "d-inline-block">
        
            <a  class = "link_categorie_footer" id = "link_cat" href="'.esc_url(get_category_link($category->term_id)) . '">
        
            ';
            
        
            
            echo esc_html($category->name); 
            
           

            
            echo '</a>';
            echo '
            <div  class = "barre_white" id = "barre_white_cat">
            <div class = "block_black"> </div>
        </div>';
            echo '</div>
            </li>
            ';
        }
        ?>
        </ul>
        </div>
        
        </div>

        <div class="footer-section">
    <!-- Ajoutez ici votre code pour les derniers articles -->

    <div class = "card_title_cat" id = "title_categorie1">
            <h5 class = "title_categorie"  >Article récent</h5>
            </div>
    <ul class = "ulfooter" id = "ulfooter2">

    <?php
    // Personnalisez la requête pour récupérer les derniers articles
    $args = array(
        'post_type'      => 'post',   // Type de publication : article
        'posts_per_page' => 5,        // Nombre d'articles à afficher
        'order'          => 'DESC',   // Ordre décroissant (du plus récent au plus ancien)
    );

    $query = new WP_Query($args);

    // Boucle while pour afficher les articles
    while ($query->have_posts()) : $query->the_post();
    ?>  

        <div>
            <li class = "text-danger">
        <div class = "d-inline-block">    
        <a href="<?php the_permalink(); ?>" id = "link_cat" class="link_post"> <?php the_title(); ?>  </a>
        
       
        <div  class = "barre_white" id = "barre_white_cat">
            <div class = "block_black"> </div>
        </div>

        </div>
</li>
    <?php
    endwhile;

    // Réinitialisez la requête après la boucle
    wp_reset_postdata();
    ?>
    </ul>
</div>

    </footer>


    <script>
    // Appel de la fonction après que le document est prêt
        barre_white('#link_post', '#barre_white_post');

        barre_white('#link_cat', "#barre_white_cat");
</script>

