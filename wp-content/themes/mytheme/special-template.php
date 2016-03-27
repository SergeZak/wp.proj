<?php

/**
 * Template Name: Special Layout
 *
 */

get_header();

if(have_posts()){
    while(have_posts()){
        the_post(); ?>
        <article class="post">
            <h2><a href="<?php the_permalink()?>"><?php the_title() ?></a></h2>

            <div class="info-box">
                <h4>Disclaimer Title</h4>
                <p>Phasellus egestas ex quis neque efficitur, suscipit posuere metus laoreet. Fusce viverra diam sit amet lectus bibendum tincidunt. Integer sed sollicitudin nisi. Maecenas posuere eleifend risus in semper. Integer maximus erat enim. Proin egestas ipsum efficitur interdum finibus.</p>
            </div>

            <?php the_content() ?>
        </article>
    <?php }
}
else{ ?>
    <p>No content found</p>
<?php }

get_footer();