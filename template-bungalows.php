<?php /* Template Name: Template - Bungalows */ ?>

<?php get_header(); ?>

<main class="site-content bungalows-archive-page">

    <section class="intro-section">
        <div class="container center">
            <h1 class="title large main-color margin-bottom-small show-on-scroll slide-up" style="transition-delay: 0.1s;"><?php the_field('intro_title'); ?></h1>
            <h2 class="no-font title large bold uppercase show-on-scroll slide-up"><?php the_field('intro_title'); ?></h2>
            <p class="text subtext main-color margin-bottom show-on-scroll slide-up"><?php the_field('intro_text'); ?></p>
        </div>
    </section>

    <section class="bungalows-archive-section paddings">

        <?php $i = 1; ?>
        <?php

        $args = array(
            'post_type' => 'bungalows',
            'posts_per_page' => -1,
            'post_status' => 'publish',
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post(); ?>

                <div class="post-item<?php echo $i % 2 === 0 ? ' reverse' : ''; ?> show-on-scroll slide-right" style="transition-delay: 0.2s;">
                    <div class="content-left">
                        <div class="image-wrap">
                            <?php $image = get_field('about_image');
                            if (!empty($image)) : ?>
                                <a href="<?php the_permalink(''); ?>">
                                    <img src="<?php echo esc_url($image['sizes']['very_large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="content-right">
                        <div class="content-right-wrap">
                            <a href="<?php the_permalink(''); ?>">
                                <h3 class="title large main-color center">
                                    <?php the_title(''); ?>
                                </h3>
                            </a>
                            <div class="text main-color center show-on-scroll slide-up"><?php the_field('intro_text', false, false); ?></div>

                            <?php if (get_field('hard_facts_repeater')) : ?>
                                <div class="features">

                                    <?php while (the_repeater_field('hard_facts_repeater')) : ?>
                                        <div class="single-feature">
                                            <?php $image = get_sub_field('icon');
                                            if (!empty($image)) : ?>
                                                <img src="<?php echo $image['sizes']['small']; ?>" alt="<?php echo $image['alt']; ?>" />
                                            <?php endif; ?>

                                            <h4 class="text main-color"><?php the_sub_field('text'); ?></h4>
                                        </div>
                                    <?php endwhile; ?>
                                </div>
                            <?php endif; ?>

                            <a href="<?php the_permalink(''); ?>" class="text-button text uppercase main-color">
                                <?php _e('Learn More', 'gocreations'); ?>
                            </a>
                        </div>
                    </div>
                </div>

                <?php $i = $i + 1; ?>
        <?php   }
            wp_reset_postdata(); // Restore global post data
        } else {
            // No posts found
        }
        ?>
    </section>

</main>

<?php get_footer(); ?>