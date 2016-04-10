<?php

get_header();
?>

    <div class="site-content ">

        <div class="main-column">
            <?php
            if(have_posts()){
                while(have_posts()){
                    the_post();

                    get_template_part('content', get_post_format());

                }
            }
            else{ ?>
                <p>No content found</p>
            <?php }
            ?>
        </div>

        <?php get_sidebar() ?>


    </div>
    <div class="clearfix"></div>

<?php
get_footer();