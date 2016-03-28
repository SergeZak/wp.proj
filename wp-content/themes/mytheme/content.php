<article class="post <?php echo has_post_thumbnail()?'has-thumbnail' : '' ?>">
    <div class="post-thumbnail">
        <a href="<?php the_permalink();?>"><?php the_post_thumbnail('small-thumbnail') ?></a>
    </div>

    <h2><a href="<?php the_permalink()?>"><?php the_title() ?></a></h2>

    <p class="post-info">
        <?php the_time('F jS, Y g:i a') ?> |
        <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" ><?php the_author() ?></a> |
        posted in posted in <?php print_categories() ?>
    </p>

    <?php
    if(is_search() || is_archive()){ ?>
        <p>
            <?php echo get_the_excerpt() ?>
            <a href="<?php the_permalink()?>">Read more&raquo;</a>
        </p>
    <?php
    }
    else{
        if($post->post_excerpt){ ?>
            <p>
                <?php echo get_the_excerpt() ?>
                <a href="<?php the_permalink()?>">Read more&raquo;</a>
            </p>
        <?php }else{
            the_content();
        }
    }?>

</article>