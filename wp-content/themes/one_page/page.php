<!DOCTYPE html>
<?php $theme_url = get_template_directory_uri(); ?>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

         <script src="<?= $theme_url?>/script/script.js" defer></script>
         <link rel="stylesheet" href="<?php $theme_url ?>/style.css">
         <?php wp_head(); ?>
    </head>
    <body>
        <?php
            echo  $theme_url. "/script/script.js"; // Výpis cesty k šabloně pro kontrolu
            get_header();
        ?>

        <main id="primary" class="site-main">
            <?php
                the_content();
            ?>
        </main>

        <?php
            get_footer();
        ?>
    </body>
</html>