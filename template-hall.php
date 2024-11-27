<?php /* Template Name: Template - Hall */ ?>

<?php get_header(); ?>

<main class="site-content about-us-page hall-page">

    <?php
    $image = get_field('intro_image');
    if (!empty($image)) : ?>
        <section class="intro-section" style="background-image: url(<?php echo $image['url']; ?>); background-size: cover;  background-repeat: no-repeat; filter: brightness(.9); background-position: 35% 75%;">
            <div class="container show-on-scroll slide-left">
                <h1 class="title white extra-large bold"><?php the_field('intro_title'); ?></h1>
                <p class="content white"><?php the_field('intro_text'); ?></p>
            </div>
        </section>
    <?php endif; ?>


    <section class="after-intro-section paddings">
        <div class="container flex">
            <div class="content-left show-on-scroll slide-right" style="transition-delay: 0.2s;">
                <?php
                $image = get_field('about_us_image');
                if (!empty($image)) : ?>
                    <img src="<?php echo esc_url($image['sizes']['large']); ?>" loading="lazy" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
            </div>
            <div class="content-right show-on-scroll slide-right" style="transition-delay: 0.3s;">
                <div class="content-wrap">
                    <span class="pretitle"><?php the_field('about_us_pretitle'); ?></span>
                    <h2 class="title large main-color margin-bottom"><?php the_field('about_us_title'); ?></h2>
                    <div class="text main-color"><?php the_field('about_us_text'); ?></div>
                </div>
            </div>
        </div>

        <div class="container flex reverse padding">
            <div class="content-left show-on-scroll slide-right" style="transition-delay: 0.2s;">
                <?php
                $image = get_field('about_image');
                if (!empty($image)) : ?>
                    <img src="<?php echo esc_url($image['sizes']['large']); ?>" loading="lazy" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
            </div>
            <div class="content-right show-on-scroll slide-right" style="transition-delay: 0.3s;">
                <div class="content-wrap">
                    <span class="pretitle"><?php the_field('about_pretitle'); ?></span>
                    <h2 class="title large main-color margin-bottom"><?php the_field('about_title'); ?></h2>
                    <div class="text main-color alt-font"><?php the_field('about_text'); ?></div>
                </div>
            </div>
        </div>
    </section>

    <section class="more-section">
        <div class="container paddings dark-bg">
            <div class="content-top show-on-scroll slide-right" style="transition-delay: 0.2s;">
                <?php
                $image = get_field('more_info_image');
                if (!empty($image)) : ?>
                    <img src="<?php echo esc_url($image['sizes']['large']); ?>" loading="lazy" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>

                <h2 class="title uppercase bold main-color margin-bottom"><?php the_field('more_info_title'); ?></h2>
                <p class="text medium main-color"><?php the_field('more_info_text'); ?></p>
            </div>
            <div class="content-bottom show-on-scroll slide-right" style="transition-delay: 0.3s;">
                <div class="more-repeater">
                    <?php if (get_field('more_info_repeater')) : ?>
                        <?php while (the_repeater_field('more_info_repeater')) : ?>
                            <div class="single-item show-on-scroll slide-right" style="transition-delay: 0.1s;">
                                <div class="texts-wrap">
                                    <p class="title uppercase main-color show-on-scroll slide-down" style="transition-delay: 0.15s;"><?php the_sub_field('title'); ?></p>
                                    <p class="text medium main-color show-on-scroll slide-down" style="transition-delay: 0.20s;"><?php the_sub_field('text'); ?></p>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <a class="button-circle white-hover  center" href="https://arillaspeacefulbungalows.gocreations.info/contact-us/" target="_blank">Contact Us</a>
            </div>
        </div>
    </section>



</main>

<?php get_footer(); ?>