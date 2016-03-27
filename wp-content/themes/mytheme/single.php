<?php

get_header();

if(have_posts()){
    while(have_posts()){
        the_post(); ?>
        <article class="post">
            <h2><a href="<?php the_permalink()?>"><?php the_title() ?></a></h2>

            <p class="post-info">
                <?php the_time('F jS, Y g:i a') ?> |
                <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" ><?php the_author() ?></a> |
                posted in posted in <?php print_categories() ?>
            </p>

            <?php the_content('Continue reading &raquo;') ?>
        </article>
    <?php }
}
else{ ?>
    <p>No content found</p>
<?php }

get_footer();