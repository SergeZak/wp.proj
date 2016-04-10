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

        


    </div>
    <div class="clearfix"></div>

<?php
get_footer();