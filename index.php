
<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main liste_post">

      <div>
        <?php
    


        ?>

         <div>
       
        </div>


        <div>

        <div>
          <?php require_once(get_template_directory()."/pagination.php")?>
            
          </div>
        <div   class = "box_front_page">
    
    <div>
      
    <?php require_once(get_template_directory()."/aside.php") ?>

    </div>
       
    <div>
    
    <div>
    <?php require_once(get_template_directory()."/liste_post.php") ?>
  </div>

    </div>

    
      </div>
        </div>      

        </div>

</div>
        

</div>
      



<div class="comments-section">
    <!-- Afficher les commentaires -->
    <?php comments_template(); ?>
</div>
</div>
</main>
<?php
wp_footer();
get_footer(); ?>

