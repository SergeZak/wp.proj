<?php

function site_resources(){
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'site_resources');
add_action('after_setup_theme', 'custom_theme_setup');

add_filter('excerpt_length', 'custom_excerpt_length');

// Theme setups
function custom_theme_setup(){

    // Nav menus
    register_nav_menus([
        'primary'=>__('Primary Menu'),
        'footer'=>__('Footer Menu')
    ]);

    //Add featured image support
    add_theme_support('post-thumbnails');
    add_image_size('small-thumbnail', 180,120, true);
    add_image_size('banner-image', 920,210, ['center', 'top']);

    //Add post format support
    add_theme_support('post-formats', ['aside', 'gallery', 'link']);
}

// Get top ancestor
// if we're viewing the parent page, function return its id,
// if we're viewing the child page, function returns the id of it's parent page
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

//Get specific title for archive page
function get_specific_archive_title(){
        if(is_category()){
            single_cat_title();
        }
        elseif(is_tag()){
            single_tag_title();
        }
        elseif(is_author()){
            the_post();
            echo "Author Archives: ".get_the_author();
            rewind_posts();
        }
        elseif(is_day()){
            echo 'Daily Archives: ' .get_the_date() ;
        }
        elseif(is_month()){
            echo 'Monthly Archive: ' .get_the_date('F Y');
        }
        else{
            echo "Archives: ";
        }
}

//Customize excerpt word count link
function custom_excerpt_length(){
    return 25;
}

//Add Widget Locations
function customWidgetInit(){
    register_sidebar([
        'name' => 'Sidebar',    //human-friendly name of the widget, that will be displayed in admin area
        'id' => 'sidebar1',     //registered id of the widget
        'before_widget' => '<div class="widget-item">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="my-h-class">',
        'after_title' => '</h4>'
    ]);
    register_sidebar([
        'name' => 'Footer Area 1',
        'id' => 'footer1',
    ]);
    register_sidebar([
        'name' => 'Footer Area 2',
        'id' => 'footer2',
    ]);
    register_sidebar([
        'name' => 'Footer Area 3',
        'id' => 'footer3',
    ]);
    register_sidebar([
        'name' => 'Footer Area 4',
        'id' => 'footer4',
    ]);
}

add_action('widgets_init', 'customWidgetInit');