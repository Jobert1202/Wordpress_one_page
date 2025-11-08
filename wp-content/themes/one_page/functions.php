<?php
function onepage_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails'); // pokud chceš obrázky
    register_nav_menus([
        'onepage_menu' => __('One Page Menu', 'onepage_theme')
    ]);
}
add_action('after_setup_theme', 'onepage_setup');

function onepage_scripts() {
    // hlavní styl
    wp_enqueue_style('onepage-style', get_stylesheet_uri(), array(), filemtime(get_template_directory() . '/style.css'));

    // hlavní JS
    wp_enqueue_script('onepage-script', get_template_directory_uri() . '/script/script.js', array(), filemtime(get_template_directory() . '/script/script.js'), true);
}
add_action('wp_enqueue_scripts', 'onepage_scripts');
?>
