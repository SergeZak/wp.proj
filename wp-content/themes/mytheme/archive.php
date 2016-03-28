<?php

get_header();

if(have_posts()){ ?>

    <h2><?php get_specific_archive_title() ?></h2>

    <?php
    while(have_posts()){
        the_post();
    
        get_template_part('content');
        
    }
}
else{ ?>
    <p>No content found</p>
<?php }

get_footer();