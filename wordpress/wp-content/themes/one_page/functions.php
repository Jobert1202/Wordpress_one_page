<?php
function witcher_setup() {
    // Přidá podporu pro <title> tag
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'witcher_setup');

function witcher_scripts() {
    // Načte style.css z kořene motivu
    wp_enqueue_style(
        'witcher-style',
        get_stylesheet_uri(),
        array(),
        filemtime(get_stylesheet_directory() . '/style.css')
    );

    // Načte script.js ze složky /script/
    $js_path = get_template_directory() . '/script/script.js';
    if ( file_exists( $js_path ) ) {
        wp_enqueue_script(
            'witcher-script',
            get_template_directory_uri() . '/script/script.js',
            array(), // můžeš přidat ['jquery'] pokud bys používal jQuery
            filemtime($js_path), // verze podle času poslední úpravy — eliminuje cache
            true // vloží script do footeru
        );
    }
}
add_action('wp_enqueue_scripts', 'witcher_scripts');
