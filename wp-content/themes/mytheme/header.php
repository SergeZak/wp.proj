<!DOCTYPE html>
<html>
<head <?php language_attributes()?> >
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width">
    <title><?php bloginfo('name')?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class()?> >

<div class="container">

    <header class="site-header">

        <div class="hd-search">
            <?php get_search_form() ?>
        </div>

        <h1><a href="<?php echo home_url() ?>"><?php bloginfo('name')?></a></h1>
        <h5><?php bloginfo('description')?></h5>

        <?php if(is_page('portfolio')){ ?>
            <h5>This text will be shown only on /portfolio page</h5>
        <?php } ?>

        <nav class="site-nav">
            <?php
            $args = ['theme_location'=>'primary'];
            wp_nav_menu($args);
            ?>
        </nav>

    </header>