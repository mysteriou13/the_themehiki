<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php
        // La boucle WordPress pour afficher des extraits d'articles sur la page d'accueil
        while (have_posts()) :
            the_post();
        ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="entry-header">
                    <?php the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>'); ?>
             </div>

                <div class="entry-content">
                    <?php the_excerpt(); ?>
                </div>

                <div>
                   par <?php echo get_the_author() ?> le <?php the_time('j F Y')?>
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
            </article>
        <?php endwhile; ?>
    </main>
</div>   

<div class="comments-section">
                    <!-- Afficher les commentaires -->
                    <?php comments_template(); ?>
                </div>


<?php get_footer(); ?>
