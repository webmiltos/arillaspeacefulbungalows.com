<?php get_header(); ?>

<main class="site-content single-bungalow-page">

    <section class="hero-slider-row show-on-scroll slide-up" style="transition-delay: 0.2s;">
        <div class="gallery-outside-wrap">
            <div class="gallery-section">
                <div class="gallery-wrapper singlePropertySwiper">
                    <div class="swiper-wrapper">
                        <?php
                        $images = get_field('gallery');
                        $size = 'very_large';
                        if ($images) : ?>
                            <?php foreach ($images as $image) : ?>
                                <div class="swiper-slide">
                                    <?php echo wp_get_attachment_image($image['id'], $size, false, array('loading' => 'lazy')); ?> </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                    <div class="swiper-button-prev">PREVIOUS</div>
                    <div class="swiper-button-next">NEXT</div>
                </div>
            </div>
        </div>
        <div class="hero-slider-content">
            <div class="content-wrap container">
                <h1 class="title extra-large white"><?php the_title(); ?></h1>
                <p class="text white"><?php the_field('intro_text', false, false); ?></p>
                <a href="#gallery" class="button border border-white circle-left flex center">
                    <span class="circle-left"></span>
                    View Gallery
                </a>
            </div>
        </div>
    </section>






    <section class="welcome-section paddings container bg-color">
        <div class="content-top">
            <h2 class="title large main-color margin-bottom-small"><?php the_field('welcome_title'); ?></h2>
            <p class="text main-color"><?php the_field('welcome_text'); ?></p>
        </div>

        <div class="content-bottom container flex">
            <?php if (get_field('hard_facts_repeater')) : ?>
                <?php while (the_repeater_field('hard_facts_repeater')) : ?>
                    <div class="single-item show-on-scroll slide-right" style="transition-delay: 0.1s;">
                        <?php
                        $image = get_sub_field('icon');
                        $size = 'icon';
                        if ($image) : ?>
                            <?php echo wp_get_attachment_image($image['id'], $size); ?>
                        <?php endif; ?>
                        <div class="texts-wrap">
                            <p class="text medium-large semi-bold main-color show-on-scroll slide-down" style="transition-delay: 0.15s;"><?php the_sub_field('text'); ?></p>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </section>


    <section class="after-intro-section paddings">
        <div class="container flex">
            <div class="content-left show-on-scroll slide-right" style="transition-delay: 0.2s;">
                <?php
                $image = get_field('about_image');
                if (!empty($image)) : ?>
                    <img src="<?php echo esc_url($image['sizes']['large']); ?>" loading="lazy" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
            </div>
            <div class="content-right show-on-scroll slide-right" style="transition-delay: 0.3s;">
                <div class="content-wrap">
                    <h2 class="title large main-color margin-bottom"><?php the_field('about_title'); ?></h2>
                    <div class="text"><?php the_field('about_text'); ?></div>
                </div>
            </div>
        </div>
    </section>

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

    <section id="gallery" class="section-gallery">
        <div class="container full">
            <?php $images = get_field('gallery'); ?>
            <?php if (!empty($images)) : ?>
                <!-- Display the first image as full-width -->
                <div class="gallery-hero" style="background-image: url('<?php echo esc_url($images[0]['url']); ?>'); background-size: cover; background-position: center;">
                    <!-- Button to trigger the Fancybox gallery -->
                    <div class="gallery-wrapper">
                        <div class="title large white center margin-bottom">Gallery</div>
                        <p class="text white"><?php the_field('gallery_text'); ?></p>
                        <button class="button-circle flex center" data-fancybox-trigger="gallery">View Gallery</button>

                        <!-- Hidden Fancybox Gallery -->
                        <div style="display: none;">
                            <?php foreach ($images as $key => $image) : ?>
                                <a href="<?php echo esc_url($image['url']); ?>" class="single-gallery-image-fancy" data-fancybox="gallery">
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>

    <section class="more-posts-section bg-color paddings">
        <div class="container center">
            <h3 class="title large main-color"><?php _e('More Bungalows'); ?></h3>
            <p class="text main-color"><?php the_field('more_bungalows_section_text', 'options'); ?></p>
        </div>
        <div class="container full flex">
            <?php $i = 1; ?>
            <?php

            $args = array(
                'post_type' => 'bungalows',
                'posts_per_page' => 3,
                'post_status' => 'publish',
                'post__not_in' => array(get_the_ID()),
                'orderby' => 'rand',
            );

            $query = new WP_Query($args);

            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post(); ?>

                    <a href="<?php the_permalink(); ?>" class="post-item<?php echo $i % 2 === 0 ? ' reverse' : ''; ?> show-on-scroll slide-right" style="transition-delay: 0.2s;">
                        <div class="image-wrap">
                            <?php $image = get_field('about_image');
                            if (!empty($image)) : ?>
                                <img src="<?php echo esc_url($image['sizes']['very_large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?>
                            <p class="title medium uppercase white center"><?php the_title(''); ?></p>
                        </div>
                    </a>

            <?php   }
                wp_reset_postdata(); // Restore global post data
            } else {
                // No posts found
            }
            ?>
        </div>

        <a class="button-circle flex center" href="<?php the_field('bungalows_link', 'options'); ?>" target="_blank">View All</a>
    </section>


</main>



<?php get_footer(); ?>


<script type="text/javascript">
    // copy link functionality
    function copyLink() {
        var copiedText = document.getElementById("copied-text");
        var pageUrl = window.location.href;

        navigator.clipboard.writeText(pageUrl)
            .then(function() {
                copiedText.style.display = "block";
                setTimeout(function() {
                    copiedText.style.display = "none";
                }, 2000);
            })
            .catch(function() {
                console.error("Unable to copy text");
            });
    }
</script>