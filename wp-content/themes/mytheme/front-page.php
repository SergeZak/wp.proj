<?php

get_header();
?>

    <div class="site-content ">


            <?php
            if(have_posts()){
                while(have_posts()){
                    the_post();

                    the_content();
                }
            }
            else{ ?>
                <p>No content found</p>
            <?php }
            ?>

        <div class="home-columns">
            <div class="one-half">
                <?php
                // Opinion post loop

                $args = [
                    'category_name' => 'opinion',
                    'posts_per_page' => 2,
                ];
                $opinion_posts = new WP_Query($args);

                if($opinion_posts->have_posts()){
                    while ($opinion_posts->have_posts()){
                        $opinion_posts->the_post(); ?>
                        <h2><a href="<?php the_permalink()?>"><?php the_title()?></a></h2>
                        <p><?php the_excerpt() ?></p>
                    <?php }
                }
                wp_reset_postdata();
                ?>
            </div>
            <div class="one-half last">
                <?php
                // Coding post loop

                $args = [
                    'category_name' => 'coding',
                    'posts_per_page' => 2,
                ];
                $coding_posts = new WP_Query($args);

                if($coding_posts->have_posts()){
                    while ($coding_posts->have_posts()){
                        $coding_posts->the_post(); ?>
                        <h2><a href="<?php the_permalink()?>"><?php the_title()?></a></h2>
                        <p><?php the_excerpt() ?></p>
                    <?php }
                }
                wp_reset_postdata();
                ?>
            </div>
        </div>
        


        


    </div>
    <div class="clearfix"></div>

<?php
get_footer();