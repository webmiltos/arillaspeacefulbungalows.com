<section class="locations-section blue-bg paddings">

    <div class="container flex top">
        <div class="content-left show-on-scroll slide-up" style="transition-delay: 0.2s;">
            <h2 class="title large margin-bottom bold white"><?php the_field('locations_title', 'options'); ?></h2>
            <p class="text white"><?php the_field('locations_text', 'options'); ?></p>
        </div>

        <div class="content-right justify-end">
            <a href="<?php the_field('locations_link', 'options'); ?>" class="button white">
                <?php _e('View All Locations', 'gocreations'); ?>
                <span class="icon-yellow-arrow blue"></span>
            </a>
        </div>
    </div>
    <div class="container grid bottom">


        <?php /* $i = 1; ?>
        <?php

        $args = array(
            'post_type' => 'locations',
            'posts_per_page' => -1,
            'post_status' => 'publish',
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post(); ?>

                <div class="location-item<?php echo $i > 6 ? ' hide' : ''; ?> show-on-scroll slide-right" style="transition-delay: 0.2s;">
                    <a href="<?php the_permalink(''); ?>">
                        <div class="image-wrap">
                            <?php $image = get_field('intro_image');
                            if (!empty($image)) : ?>
                                <img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?>
                        </div>
                        <h3 class="title medium white center"><?php the_title(''); ?></h3>

                        <a href="<?php the_permalink(''); ?>" class="desktop-btn button white">
                            <?php _e('Learn More', 'gocreations'); ?>
                            <span class="icon-yellow-arrow blue"></span>
                        </a>
                        <a href="<?php the_permalink(''); ?>" class="mobile-btn button white">
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




        <?php if (get_field('locations_repeater', 'options')) : ?>
            <?php while (the_repeater_field('locations_repeater', 'options')) : ?>
                <?php $linked_post = get_sub_field('location', 'options'); ?>
                <?php if ($linked_post) : ?>

                    <div class="location-item show-on-scroll slide-right" style="transition-delay: 0.2s;">
                        <a href="<?php echo esc_url(get_permalink($linked_post)); ?>">
                            <div class="image-wrap">
                                <?php $intro_image = get_field('intro_image', $linked_post->ID); ?>
                                <?php if ($intro_image) : ?>
                                    <img src="<?php echo esc_url($intro_image['url']); ?>" alt="<?php echo esc_attr($intro_image['alt']); ?>">
                                <?php endif; ?>
                            </div>

                            <h3 class="title medium white center">
                                <?php echo esc_html($linked_post->post_title); ?>
                            </h3>

                            <a href="<?php echo esc_url(get_permalink($linked_post)); ?>" class="desktop-btn button white">
                                <?php _e('Learn More', 'gocreations'); ?>
                                <span class="icon-yellow-arrow blue"></span>
                            </a>
                            <a href="<?php the_permalink(''); ?>" class="mobile-btn button white">
                                <span class="icon-yellow-arrow blue"></span>
                            </a>
                        </a>
                    </div>
                <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>

    </div>

</section>