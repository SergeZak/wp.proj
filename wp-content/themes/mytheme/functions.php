<?php

function site_resources(){
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'site_resources');

// Nav menus
register_nav_menus([
    'primary'=>__('Primary Menu'),
    'footer'=>__('Footer Menu')
]);

// Get top ancestor
function get_top_ancestor_id(){
    global $post;
    if($post->post_parent){
        $ancestor = array_reverse(get_post_ancestors($post->ID));
        return $ancestor[0];
    }

    return $post->ID;
}

// Does page has children?
function has_children(){
    global $post;
    $pages = get_pages('child_of='.$post->ID);
    return count($pages);
}

//Print categories that belongs to post
function print_categories(){
    $categories = get_the_category();
    $separator = ", ";
    $output = '';
    if(!empty($categories)){
        foreach ($categories as $category) {
            $output .=  '<a href="'. get_category_link($category->term_id) .'">'. $category->cat_name . '</a>' . $separator;
        }
    }
    echo trim($output, ', ');
}