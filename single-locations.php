<?php get_header(); ?>

<main class="site-content single-locations-page">


    <?php
    $image = get_field('intro_image');
    if (!empty($image)) : ?>
        <section class="intro-section" style="background-image: url(<?php echo $image['url']; ?>); background-size: cover;  background-repeat: no-repeat; background-position: 35% 75%;">
            <div class="container show-on-scroll slide-left">
                <h1 class="title white extra-large bold"><?php the_field('intro_title'); ?></h1>
                <p class="content white"><?php the_field('intro_text'); ?></p>
            </div>
        </section>
    <?php endif; ?>


    <section class="post-content-section container show-on-scroll slide-up" style="transition-delay: 0.6s;">
        <div class="content-left">
            <div id="h1-section" class="hide"></div>
            <span class="text"><?php the_field('content'); ?></span>
        </div>

        <div class="content-right sidebar">
            <div class="sidebar-box">
                <?php if (get_field('highlights_repeater')) : ?>
                    <p class="title">Highlights</p>
                    <?php while (the_repeater_field('highlights_repeater')) : ?>
                        <ul class="repeater-item">

                            <li class="text"> <?php the_sub_field('text'); ?></li>
                        </ul>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>

            <div class="sidebar-box">
                <p class="title">Related Locations</p>

                <div class="location-wrapper">
                    <?php /*

                    $args = array(
                        'post_type' => 'locations',
                        'posts_per_page' => 4,
                        'post_status' => 'publish',
                    );

                    $query = new WP_Query($args);

                    if ($query->have_posts()) {
                        while ($query->have_posts()) {
                            $query->the_post(); ?>

                            <div class="location-item show-on-scroll slide-right" style="transition-delay: 0.2s;">
                                <a href="<?php the_permalink(''); ?>">
                                    <div class="image-wrap">
                                        <?php $image = get_field('intro_image');
                                        if (!empty($image)) : ?>
                                            <img src="<?php echo esc_url($image['sizes']['regular']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                        <?php endif; ?>
                                    </div>
                                    <h3 class="title center"><?php the_title(''); ?></h3>

                                    <a href="<?php the_permalink(''); ?>" class="button white">
                                        <!-- <?php _e('Learn More', 'gocreations'); ?> -->
                                        <!-- <i class="gg-arrow-right-o"></i> -->
                                        <span class="icon-yellow-arrow blue"></span>
                                    </a>
                                </a>
                            </div>

                            <?php $i = $i + 1; ?>
                    <?php   }
                        wp_reset_postdata(); // Restore global post data
                    } else {
                        // No posts found
                    }
                   */ ?>


                    <?php if (get_field('related_repeater')) : ?>
                        <?php while (the_repeater_field('related_repeater')) : ?>
                            <?php $linked_post = get_sub_field('location'); ?>
                            <?php if ($linked_post) : ?>

                                <div class="location-item show-on-scroll slide-right" style="transition-delay: 0.2s;">
                                    <a href="<?php echo esc_url(get_permalink($linked_post)); ?>">
                                        <div class="image-wrap">
                                            <?php $intro_image = get_field('intro_image', $linked_post->ID); ?>
                                            <?php if ($intro_image) : ?>
                                                <img src="<?php echo esc_url($intro_image['url']); ?>" alt="<?php echo esc_attr($intro_image['alt']); ?>">
                                            <?php endif; ?>
                                        </div>
                                        <h3 class="title center"><?php echo esc_html($linked_post->post_title); ?></h3>

                                        <a href="<?php echo esc_url(get_permalink($linked_post)); ?>" class="button white">
                                            <!-- <?php _e('Learn More', 'gocreations'); ?> -->
                                            <!-- <i class="gg-arrow-right-o"></i> -->
                                            <span class="icon-yellow-arrow blue"></span>
                                        </a>
                                    </a>
                                </div>
                            <?php endif; ?>
                        <?php endwhile; ?>

                    <?php endif; ?>

                </div>
            </div>
        </div>
    </section>

    <?php get_template_part('template-parts/reviews-section'); ?>

    <?php get_template_part('template-parts/locations-section'); ?>
</main>










<?php get_footer(); ?>