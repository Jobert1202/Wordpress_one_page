<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
    <div class="wrapper">
        <div class="wrapper-logo">
            <a href="<?php echo esc_url(home_url('/')); ?>">
                <img src="https://www.thewitcher.com/build/images/tw3-logo-light-en@2x-e2333fc8..png" alt="<?php bloginfo('name'); ?>">
            </a>
        </div>
        <div class="wrapper-hamburger" id="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <nav id="main-nav">
            <a href="#Home">Home</a>
            <a href="#Section_1">Open world</a>
            <a href="#Section_2">Monster hunter</a>
            <a href="#Section_3">Story</a>
        </nav>
    </div>
</header>
<main>
