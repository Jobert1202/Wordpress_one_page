<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
    <div class="wrapper">
        <div class="wrapper-logo">
            <a href="#Home">
                <img src="<?php echo get_field('logo_image', 'option'); ?>" alt="Logo">
            </a>
        </div>
        <div class="wrapper-hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <nav>
        <?php
        if ( has_nav_menu('onepage_menu') ) {
            wp_nav_menu([
                'theme_location' => 'onepage_menu',
                'container' => false,
                'items_wrap' => '%3$s'
            ]);
        } else {
            echo '<a href="#Home">Home</a>';
        }
        ?>
    </nav>
</header>
