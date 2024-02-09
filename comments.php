<?php
if (post_password_required()) {
    return;
}
?>

<div id="comments" class="comments-area">

    <?php if (have_comments()) : ?>
        <h2 class="comments-title">
            <?php
            $comments_number = get_comments_number();
            if ($comments_number === 1) {
                printf(_x('One Comment', 'comments title', 'textdomain'));
            } else {
                printf(
                    _nx(
                        '%1$s Comment',
                        '%1$s Comments',
                        $comments_number,
                        'comments title',
                        'textdomain'
                    ),
                    number_format_i18n($comments_number)
                );
            }
            ?>
        </h2>

        <ol class="comment-list">
            <?php
            wp_list_comments(array(
                'style'       => 'ol',
                'short_ping'  => true,
                'avatar_size' => 50,
            ));
            ?>
        </ol>

        <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : ?>
            <nav class="navigation comment-navigation" role="navigation">
                <div class="comment-nav-prev"><?php previous_comments_link(__('Older Comments', 'textdomain')); ?></div>
                <div class="comment-nav-next"><?php next_comments_link(__('Newer Comments', 'textdomain')); ?></div>
            </nav>
        <?php endif; ?>

    <?php endif; ?>

    <?php if (!comments_open() && get_comments_number() && post_type_supports(get_post_type(), 'comments')) : ?>
        <p class="no-comments"><?php _e('Comments are closed.', 'textdomain'); ?></p>
    <?php endif; ?>

    <?php comment_form(); ?>

</div>
