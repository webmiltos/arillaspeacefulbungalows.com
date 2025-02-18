<?php /* Template Name: Homepage-Template */ ?>

<?php get_header(); ?>

<?php
/*
$lang = 1;
$db_id = 314;
$cars_arr = getAllGcCarModels($lang, $db_id);
*/

// echo "<pre>";
// var_dump($_SERVER);
// echo "</pre>";
?>

<main class="site-content home-page">
    <section class="intro-wrapper">
        <div class="intro-wrap">
            <div class="single-slider-wrapper swiper-container heroSwiper">
                <div class="swiper-wrapper">
                    <?php
                    $images = get_field('intro_slider');
                    $size = 'full'; // (thumbnail, medium, large, full or custom size)
                    if ($images) : ?>
                        <?php foreach ($images as $image) : ?>
                            <div class="swiper-slide">
                                <?php echo wp_get_attachment_image($image['id'], $size); ?>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>

                    <?php $image = get_field('mobile_hero_image');
                    if (!empty($image)) : ?>
                        <img class="mobile-hero-image" src="<?php echo esc_url($image['sizes']['medium_large']); ?>" alt="<?php echo $image['alt']; ?>" />
                    <?php endif; ?>
                </div>
            </div>
            <div class="intro-content-wrapper container">
                <div class="content-left">

                    <h1 class="intro-title white show-on-scroll slide-up" style=" transition-delay: 0.3s;">
                        <?php the_field('intro_title'); ?>
                    </h1>
                    <p class="text large white subtitle show-on-scroll slide-up" style=" transition-delay: 0.35s;"><?php the_field('intro_subtitle'); ?></p>

                    <?php if (get_field('intro_button_link')) : ?> <div class="border-btn-wrapper">
                            <a class="border-btn-wrap white" href="<?php the_field('intro_button_link') ?>">
                                <?php if (get_field('intro_button_text')) : ?>
                                    <?php the_field('intro_button_text') ?>
                                <?php else : ?>
                                    <?php _e('Learn More', 'gocreations'); ?>
                                <?php endif; ?>
                            </a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="search-form-wrapper container full center show-on-scroll slide-up" style="transition-delay: 0.4s;">
                <?php // echo do_shortcode('[search_form id="655"]'); 
                ?>
                <form target="_blank" action="#" method="POST">
                    <input type="hidden" name="siteKey" value="">
                    <input type="hidden" name="lang" value="en">
                    <input type="hidden" name="ota" value="false">
                    <div class="fields-wrapper">
                        <div class="fields-column-wrapper">
                            <div class="single-field date-field">
                                <label for="your-check-in"><?php _e('Check-in', 'gocreations'); ?></label>
                                <input type="text" id="your-check-in" name="your-check-in" value="<?php echo isset($_GET['your-check-in']) ? htmlspecialchars($_GET['your-check-in']) : ''; ?>" placeholder="Select Date" required>
                            </div>
                            <div class="single-field date-field">
                                <label for="your-check-out"><?php _e('Check-Out', 'gocreations'); ?></label>
                                <input type="text" id="your-check-out" name="your-check-out" value="<?php echo isset($_GET['your-check-out']) ? htmlspecialchars($_GET['your-check-out']) : ''; ?>" placeholder="Select Date" required>
                            </div>
                            <div class="single-field dropdown">
                                <label for="adults"><?php _e('Adults', 'gocreations'); ?></label>
                                <select id="adults" name="adults" class="form-control" required>
                                    <option disabled selected value="">Select</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                </select>
                            </div>
                            <div class="single-field dropdown">
                                <label for="children"><?php _e('Kids', 'gocreations'); ?></label>
                                <select id="children" name="children" class="form-control">
                                    <option disabled selected value=""><?php _e('Select', 'gocreations'); ?></option>
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                            </div>
                        </div>
                        <div class="submit-wrap">
                            <button type="submit" id="submit">
                                <a class="submit-button" href="#"><?php _e('Check Availability', 'gocreations'); ?></a>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>


    <section class="welcome-section paddings container">
        <div class="content-main container flex">
            <div class="content-left">
                <div class="image-wrapper show-on-scroll slide-up" style=" transition-delay: 0.05s;">
                    <?php $image = get_field('welcome_image_left');
                    if (!empty($image)): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                    <p class="text main-color show-on-scroll slide-up" style=" transition-delay: 0.06s;"><?php the_field('welcome_text'); ?></p>
                </div>
            </div>
            <div class="content-right">
                <div class="image-wrapper show-on-scroll slide-up" style=" transition-delay: 0.07s;">
                    <?php $image = get_field('welcome_image_right');
                    if (!empty($image)): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                </div>
            </div>
            <div class="content-fixed container center gsap-item">
                <div class="text main-color pretitle show-on-scroll slide-up" style=" transition-delay: 0.08s;"><?php the_field('welcome_pretitle'); ?></div>
                <h2 class="title extra-large main-color margin-bottom-small show-on-scroll slide-up" style=" transition-delay: 0.09s;"><?php the_field('welcome_title'); ?></h2>
            </div>
        </div>
    </section>


    <section class="our-hall-section container flex">
        <div class="content-left gsap-item2">
            <div class="content-left-wrap show-on-scroll slide-up" style=" transition-delay: 0.01s;">
                <?php
                $image = get_field('hall_image_left', 352);
                $size = 'large';
                if ($image) : ?>
                    <?php echo wp_get_attachment_image($image['id'], $size); ?>
                <?php endif; ?>
                <p class="title medium uppercase main-color show-on-scroll slide-up" style=" transition-delay: 0.03s;"><?php the_field('hall_title', 352); ?></p>
                <p class="text medium main-color show-on-scroll slide-up" style=" transition-delay: 0.06s;"><?php the_field('hall_text', 352); ?></p>
                <a class="text-button text uppercase main-color show-on-scroll slide-up" style=" transition-delay: 0.09s;" href="<?php the_field('hall_link', 'options'); ?>">Learn More</a>
            </div>
        </div>
        <div class="content-right show-on-scroll slide-up" style=" transition-delay: 0.01s;">
            <?php $image = get_field('hall_image_right', 352);
            if (!empty($image)) : ?>
                <img src="<?php echo $image['sizes']['very_large']; ?>" alt="<?php echo $image['alt']; ?>" />
            <?php endif; ?>
        </div>
    </section>


    <section class="more-posts-section bg-color paddings">
        <div class="container center">
            <h3 class="title large main-color show-on-scroll slide-up" style=" transition-delay: 0.01s;"><?php _e('Our Bungalows'); ?></h3>
            <p class=" text main-color show-on-scroll slide-up" style=" transition-delay: 0.06s;"><?php the_field('facilities_text'); ?></p>
        </div>
        <div class="container full flex show-on-scroll slide-up" style=" transition-delay: 0.07s;">
            <?php $i = 1; ?>
            <?php

            $args = array(
                'post_type' => 'bungalows',
                'posts_per_page' => 3,
                'post_status' => 'publish',
                'post__not_in' => array(get_the_ID()),
                'orderby' => 'menu_order',
                'order'   => 'DESC',
            );

            $query = new WP_Query($args);

            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post(); ?>

                    <a href="<?php the_permalink(); ?>" class="post-item<?php echo $i % 2 === 0 ? ' reverse' : ''; ?> ">
                        <div class=" image-wrap">
                            <?php $image = get_field('about_image');
                            if (!empty($image)) : ?>
                                <img src="<?php echo esc_url($image['sizes']['very_large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?>
                            <p class="title medium uppercase white center show-on-scroll slide-up" style="transition-delay: 0.09s;"><?php the_title(''); ?></p>
                        </div>
                    </a>

            <?php   }
                wp_reset_postdata(); // Restore global post data
            } else {
                // No posts found
            }
            ?>
        </div>
        <a class="button-circle flex center show-on-scroll slide-up" style=" transition-delay: 0.01s;" href="<?php the_field('bungalows_link', 'options'); ?>"><?php _e('View All', 'gocreations'); ?></a>
    </section>

    <?php
    $image = get_field('facilities_image');
    if (!empty($image)) : ?>
        <section class="facilities-section bg-color container" style="background-image: url(<?php echo $image['url']; ?>); background-size: cover;  background-repeat: no-repeat; background-position: center center;">
            <div class="content-top">
                <h2 class="title extra-large white show-on-scroll slide-up" style=" transition-delay: 0.01s;"><?php the_field('facilities_title'); ?></h2>
                <p class="text margin-bottom white show-on-scroll slide-up" style=" transition-delay: 0.04s;"><?php the_field('facilities_text'); ?></p>
            </div>
            <div class="content-bottom">
                <div class="facilities-repeater-1">
                    <?php if (get_field('facilities_repeater')) : ?>
                        <?php while (the_repeater_field('facilities_repeater')) : ?>
                            <div class="single-item show-on-scroll slide-up" style="transition-delay: 0.1s;">
                                <div class="texts-wrap">
                                    <p class="text small show-on-scroll slide-down" style="transition-delay: 0.15s;"><?php the_sub_field('title'); ?></p>

                                    <?php if (get_sub_field('tooltip')) : ?>
                                        <span class="tooltip">
                                            <span class="tooltip-text">i</span>
                                            <span class="text">
                                                <?php the_sub_field('tooltip'); ?>
                                            </span>
                                        </span>
                                    <?php endif; ?>

                                </div>
                                <?php $image = get_sub_field('icon');
                                if (!empty($image)) : ?>
                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                <?php endif; ?>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <a class="button-circle white  flex center" href="<?php the_field('facilities_link', 'options'); ?>"><?php _e('View All', 'gocreations'); ?></a>
            </div>
        </section>
    <?php endif; ?>

    <section class="gallery-section dark-bg paddings">
        <div class="container flex reverse">
            <div class="content-left grid floating-labels-form">

                <h2 class="title extra-large main-color margin-bottom show-on-scroll slide-up" style=" transition-delay: 0.05s;"><?php the_field('gallery_title'); ?></h2>
                <p class="text main-color show-on-scroll slide-up" style=" transition-delay: 0.09s;">
                    <?php the_field('gallery_text'); ?>
                </p>
                <a class="button-circle hover-green" href="<?php the_field('gallery_link', 'options'); ?>"><?php _e('View All', 'gocreations'); ?></a>
            </div>
            <div class="content-right gsap-item2 show-on-scroll slide-up" style="transition-delay: 0.1s;">
                <div class="footer-image-wrap">
                    <?php
                    $image = get_field('gallery_image');
                    $size = 'large';
                    if ($image) : ?>
                        <?php echo wp_get_attachment_image($image['id'], $size); ?>
                    <?php endif; ?>
                </div>
            </div>
    </section>
</main>

<?php get_footer(); ?>