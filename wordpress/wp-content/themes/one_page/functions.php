<?php
function witcher_setup() {
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'witcher_setup');

function witcher_scripts() {
    // Načteme style.css motivu
    wp_enqueue_style('witcher-style', get_stylesheet_uri());

    // Načteme script.js z podadresáře /script/
    wp_enqueue_script('witcher-script', get_template_directory_uri() . '/script/script.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'witcher_scripts');
?>
