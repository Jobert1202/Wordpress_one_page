<?php get_header(); ?>

<?php
if ( have_posts() ) :
    while ( have_posts() ) : the_post(); 

    // --- Home ---
    $home_image = get_field('home_image');
    ?>
    <section id="Home" style="background-image: url('<?php echo esc_url($home_image); ?>');">
        <div class="home-wrapper">
            <h1><?php the_field('home_title'); ?></h1>
            <div class="button">
                <a href="<?php the_field('home_buy_link'); ?>"><button><?php the_field('home_buy_text'); ?></button></a>
                <a href="<?php the_field('home_trailer_link'); ?>"><button><?php the_field('home_trailer_text'); ?></button></a>
            </div>
        </div>
    </section>

    <?php
    // --- Section 1 ---
    $section1_image = get_field('section1_image');
    ?>
    <section id="Section_1" style="background-image: url('<?php echo esc_url($section1_image); ?>');">
        <div class="container">
            <div class="article">
                <div class="article-title"><h1><?php the_field('section1_title'); ?></h1></div>
                <div class="article-content"><p><?php the_field('section1_content'); ?></p></div>
            </div>
        </div>
    </section>

    <?php
    // --- Section 2 ---
    $section2_image = get_field('section2_image');
    ?>
    <section id="Section_2" style="background-image: url('<?php echo esc_url($section2_image); ?>');">
        <div class="container">
            <div class="article">
                <div class="article-title"><h1><?php the_field('section2_title'); ?></h1></div>
                <div class="article-content"><p><?php the_field('section2_content'); ?></p></div>
            </div>
        </div>
    </section>

    <?php
    // --- Section 3 ---
    $section3_image = get_field('section3_image');
    ?>
    <section id="Section_3" style="background-image: url('<?php echo esc_url($section3_image); ?>');">
        <div class="container">
            <div class="article">
                <div class="article-title"><h1><?php the_field('section3_title'); ?></h1></div>
                <div class="article-content"><p><?php the_field('section3_content'); ?></p></div>
            </div>
        </div>
    </section>

    <?php
    // --- Footer ---
    ?>
    <section id="Footer" class="footer-section">
        <footer class="site-footer">
            <div class="footer-content">
                <p><?php the_field('footer_text'); ?></p>
                <div class="footer-links">
                    <?php
                    if ( has_nav_menu('onepage_menu') ) {
                        wp_nav_menu([
                            'theme_location' => 'onepage_menu',
                            'container' => false,
                            'items_wrap' => '%3$s'
                        ]);
                    }
                    ?>
                </div>
            </div>
        </footer>
    </section>

    <?php endwhile;
endif; ?>

<?php get_footer(); ?>
