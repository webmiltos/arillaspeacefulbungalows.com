<?php /* 404 */ ?>

<?php get_header(); ?>

<main class="site-content">

    <section class="error-page-wrapper">
        <?php
        $image = get_field('404_image', 'options');
        $size = 'full';
        ?>
        <?php echo wp_get_attachment_image($image['id'], $size); ?>
        <div class="error-page-content-wrap">
            <?php if (get_field('error_title', 'options')) : ?>
                <h1 class="hero-title white error">
                    <?php the_field('error_title', 'options'); ?>
                    404
                </h1> <?php else : ?>
                <h1 class="hero-title white error">
                    404 </h1>
            <?php endif; ?>

            <!-- <?php if (get_field('404_subtitle', 'options')) : ?>
                <span class="main-section-subtitle white error text large">
                    <?php the_field('404_subtitle', 'options'); ?>
                </span>
            <?php endif; ?> -->
            <?php if (get_field('404_content', 'options')) : ?>
                <span class="main-section-text white error">
                    <?php the_field('404_content', 'options'); ?>
                </span>
            <?php endif; ?>
            <?php if (get_field('error_button_link', 'options') && get_field('error_button_text', 'options')) : ?>
                <div class="button-wrapper">
                    <a class="button-wrap blue-btn" href="<?php the_field('error_button_link', 'options') ?>">
                        <span><?php the_field('error_button_text', 'options'); ?></span>
                    </a>
                </div>
            <?php endif; ?>
            <div class="border-btn-wrapper show-on-scroll slide-left" style="transition-delay: 0.4s;">
                <a class="button-circle white main-color-light gradient" href="/">
                    <?php if (get_field('intro_button_text')) : ?>
                        <?php the_field('intro_button_text') ?>
                    <?php else : ?>
                        <?php _e('Homepage', 'gocreations'); ?>
                    <?php endif; ?>
                </a>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>