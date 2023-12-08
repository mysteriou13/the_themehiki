<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">

        <?php
        // La boucle WordPress principale
        while (have_posts()) :

            echo '<div class="entry-header">';

             the_title('<h2 class="entry-title"><div href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</div></h2>'); 
        echo '</div>';

            echo "<div>";
            the_post();
            echo "</div>";
        
        ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
                
              

            </article>
            <div>
              par <?php  the_author()?> le <?php the_time('j F Y')?>
           </div>

        <?php
        endwhile;
        ?>

    </main>
</div>

<?php get_footer(); ?>
