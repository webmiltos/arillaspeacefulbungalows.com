<?php /* Template Name: Template - Facilities */ ?>

<?php get_header(); ?>

<main class="site-content facilities-page">

    <?php
    $image = get_field('intro_image');
    if (!empty($image)) : ?>
        <section class="intro-section" style="background-image: url(<?php echo $image['url']; ?>); background-size: cover;  background-repeat: no-repeat; background-position: center center;">
            <div class="container show-on-scroll slide-left">
                <h1 class="title white extra-large margin-bottom-small"><?php the_field('intro_title'); ?></h1>
                <p class="content white"><?php the_field('intro_text'); ?></p>
            </div>
        </section>
    <?php endif; ?>


    <?php if (get_field('amenities_repeater')) : ?>
        <section class="amenities-section container">
            <div class="amenities-section-wrapper">
                <?php while (the_repeater_field('amenities_repeater')) : ?>
                    <div class="single-item show-on-scroll slide-right" style="transition-delay: 0.3s;">
                        <div class="texts-wrap">
                            <p class="text medium uppercase show-on-scroll slide-down" style="transition-delay: 0.4s;">
                                <?php the_sub_field('text'); ?>
                            </p>
                            <?php if (get_sub_field('tooltip')) : ?>
                                <span class="tooltip">
                                    <span class="tooltip-text">i</span>
                                    <span class="text">
                                        <?php the_sub_field('tooltip'); ?>
                                    </span>
                                </span>
                            <?php endif; ?>
                        </div>
                        <?php $image = get_sub_field('image');
                        if (!empty($image)) : ?>
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
            </div>
        </section>
    <?php endif; ?>

    <section class="amenities-section container">
        <div class="content-top show-on-scroll slide-left" style=" transition-delay: 0.1s;">
            <h2 class="title extra-large white"><?php the_field('facilities_title'); ?></h2>
            <p class="text margin-bottom white"><?php the_field('facilities_text'); ?></p>
        </div>

        <div class="content-bottom">
            <div class="facilities-repeater-1">
                <?php if (get_field('facilities_repeater_1')) : ?>
                    <?php while (the_repeater_field('facilities_repeater_1')) : ?>
                        <div class="single-item show-on-scroll slide-right" style="transition-delay: 0.1s;">
                            <div class="texts-wrap">
                                <p class="text small show-on-scroll slide-down" style="transition-delay: 0.15s;"><?php the_sub_field('text'); ?></p>
                            </div>
                            <?php $image = get_sub_field('image');
                            if (!empty($image)) : ?>
                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                            <?php endif; ?>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="facilities-repeater-2">
                <?php if (get_field('facilities_repeater_2')) : ?>
                    <?php while (the_repeater_field('facilities_repeater_2')) : ?>
                        <div class="single-item show-on-scroll slide-right" style="transition-delay: 0.1s;">
                            <div class="texts-wrap">
                                <p class="title uppercase show-on-scroll slide-down" style="transition-delay: 0.15s;"><?php the_sub_field('title'); ?></p>
                                <p class="text medium show-on-scroll slide-down" style="transition-delay: 0.20s;"><?php the_sub_field('text'); ?></p>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>


    <section class="our-hall-section container flex">
        <div class="content-left gsap-item2">
            <div class="content-left-wrap">
                <?php
                $image = get_field('hall_image_left');
                $size = 'large';
                if ($image) : ?>
                    <?php echo wp_get_attachment_image($image['id'], $size); ?>
                <?php endif; ?>
                <h3 class="title medium uppercase main-color"><?php the_field('hall_title'); ?></h3>
                <p class="text medium main-color"><?php the_field('hall_text'); ?></p>
                <a class="text-button text uppercase main-color" href="<?php the_field('hall_link', 'options'); ?>">Learn More</a>
            </div>
        </div>
        <div class="content-right">
            <?php $image = get_field('hall_image_right');
            if (!empty($image)) : ?>
                <img src="<?php echo $image['sizes']['very_large']; ?>" alt="<?php echo $image['alt']; ?>" />
            <?php endif; ?>
        </div>
    </section>


    <section class="area-section container">
        <div class="content-top show-on-scroll slide-left" style=" transition-delay: 0.1s;">
            <h3 class="title extra-large white"><?php the_field('area_title'); ?></h3>
            <p class="text margin-bottom white"><?php the_field('area_text'); ?></p>
        </div>

        <div class="content-bottom">
            <div class="area-repeater">
                <?php if (get_field('area_repeater')) : ?>
                    <?php while (the_repeater_field('area_repeater')) : ?>
                        <div class="single-item show-on-scroll slide-right" style="transition-delay: 0.1s;">
                            <div class="texts-wrap">
                                <p class="title uppercase show-on-scroll slide-down" style="transition-delay: 0.15s;"><?php the_sub_field('title'); ?></p>
                                <p class="text medium show-on-scroll slide-down" style="transition-delay: 0.20s;"><?php the_sub_field('text'); ?></p>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>