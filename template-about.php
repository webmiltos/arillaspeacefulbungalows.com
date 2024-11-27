<?php /* Template Name: Template - About Us */ ?>

<?php get_header(); ?>

<main class="site-content about-us-page">

    <?php
    $image = get_field('intro_image');
    if (!empty($image)) : ?>
        <section class="intro-section" style="background-image: url(<?php echo $image['url']; ?>); background-size: cover;  background-repeat: no-repeat; filter: brightness(.9); background-position: 35% 75%;">
            <div class="container show-on-scroll slide-left">
                <span class="pretitle">About Us</span>
                <h1 class="title white extra-large bold"><?php the_field('intro_title'); ?></h1>
                <p class="content white"><?php the_field('intro_text'); ?></p>
            </div>
        </section>
    <?php endif; ?>

    <section class="features-section container">
        <div class="content-top show-on-scroll slide-left" style=" transition-delay: 0.1s;">
            <span class="pretitle margin-bottom"><?php the_field('why_pretitle', 8); ?></span>
            <h2 class="title large bold white margin-bottom"><?php the_field('why_title', 8); ?></h2>
            <p class="text margin-bottom white "><?php the_field('why_text', 8); ?></p>
            <a href="<?php the_field('about_link', 'options') ?>" class="button border">
                About Us
                <!-- <i class="gg-arrow-right-o"></i> -->
                <!-- <span class="icon-yellow-arrow"></span> -->
                <span class="white-arrow"></span>
            </a>
        </div>
        <div class="content-bottom">

            <div class="features-desktop">
                <?php if (get_field('features_repeater', 'options')) : ?>
                    <?php while (the_repeater_field('features_repeater', 'options')) : ?>
                        <div class="features-single-item show-on-scroll slide-right" style="transition-delay: 0.3s;">
                            <?php $image = get_sub_field('icon', 'options');
                            if (!empty($image)) : ?>
                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                            <?php endif; ?>
                            <div class="texts-wrap">
                                <h4 class="title show-on-scroll slide-down" style="transition-delay: 0.3s;"><?php the_sub_field('title', 'options'); ?></h4>
                                <p class="text small show-on-scroll slide-down" style="transition-delay: 0.4s;"><?php the_sub_field('text', 'options'); ?></p>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="features-mobile">
                <!-- <div class="nav-btns show-on-scroll slide-up" style="transition-delay: 0.2s;">
                <div class="features-btns-wrapper">
                    <span class="arrow-btn prev-btn"></span>
                    <span class="arrow-btn next-btn"></span>
                </div>
            </div> -->



                <div class="swiper features-slider">
                    <div class="swiper-wrapper">
                        <?php if (get_field('features_repeater', 'options')) : ?>
                            <?php while (the_repeater_field('features_repeater', 'options')) : ?>
                                <div class="features-single-item swiper-slide show-on-scroll slide-right" style="transition-delay: 0.3s;">
                                    <?php $image = get_sub_field('icon', 'options');
                                    if (!empty($image)) : ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>
                                    <div class="texts-wrap">
                                        <h4 class="title show-on-scroll slide-down" style="transition-delay: 0.3s;"><?php the_sub_field('title', 'options'); ?></h4>
                                        <p class="text small show-on-scroll slide-down" style="transition-delay: 0.4s;"><?php the_sub_field('text', 'options'); ?></p>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <div class="swiper-scrollbar"></div>
                </div>

                <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
                <script>
                    var featuresSwiper = new Swiper(".features-slider", {
                        slidesPerView: 1.2,
                        spaceBetween: 15,
                        freeMode: true,
                        scrollbar: {
                            el: ".swiper-scrollbar",
                            // hide: true,
                        },
                    });
                </script>
            </div>
        </div>
    </section>


    <section class="fleet-section paddings">
        <div class="container flex top center show-on-scroll slide-left" style=" transition-delay: 0.1s;">
            <div class="content-left">
                <span class="text pretitle"><?php the_field('fleet_pretitle', 8); ?></span>
                <h2 class="title large show-on-scroll slide-down" style="transition-delay: 0.2s;"><?php the_field('fleet_title', 8); ?></h2>
                <?php the_field('fleet_text', 8); ?>
            </div>
        </div>
        <div class="container container-fleet">
            <div class="content-bottom swiper-container home-fleet-slider show-on-scroll slide-down" style="transition-delay: 0.2;">
                <?php echo do_shortcode('[fleet id="653"]'); ?>

                <div class="swiper-button-next-fleet"></div>
                <div class="swiper-button-prev-fleet"></div>
                <!-- 
                <div class="buttons-wrapper">
                    <div class="swiper-button-next-fleet"></div>
                    <div class="swiper-button-prev-fleet"></div>
                </div> -->
            </div>
        </div>
        <a href="<?php the_field('fleet_link', 'options'); ?>" class="button gradient center">
            Explore Our Fleet
            <!-- <i class="gg-arrow-right-o"></i> -->
            <span class="white-arrow"></span>
        </a>
    </section>



    <section class="why-us-section paddings">
        <div class="container flex">
            <div class="content-left flex-column show-on-scroll slide-right" style="transition-delay: 0.2s;">
                <span class="pretitle"><?php the_field('why_us_pretitle', 'options'); ?></span>
                <h2 class="title large bold margin-bottom"><?php the_field('why_us_title', 'options'); ?></h2>
                <?php
                $image = get_field('why_us_image', 'options');
                if (!empty($image)) : ?>
                    <img src="<?php echo esc_url($image['sizes']['large']); ?>" loading="lazy" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
            </div>
            <div class="content-right show-on-scroll slide-right" style="transition-delay: 0.3s;">
                <div class="content-wrap">
                    <div class="text alt-font margin-bottom"><?php the_field('why_us_text', 'options'); ?></div>

                    <div class="swiper why-us-slider">
                        <div class="swiper-wrapper">
                            <?php if (get_field('why_us_repeater', 'options')) : ?>
                                <?php while (the_repeater_field('why_us_repeater', 'options')) : ?>
                                    <div class="single-item swiper-slide show-on-scroll slide-right" style="transition-delay: 0.3s;">
                                        <div class="image-wrap">
                                            <?php $image = get_sub_field('icon', 'options');
                                            if (!empty($image)) : ?>
                                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                            <?php endif; ?>
                                        </div>
                                        <div class="texts-wrap">
                                            <h3 class="title alt-font bold show-on-scroll slide-down" style="transition-delay: 0.3s;"><?php the_sub_field('title', 'options'); ?></h3>
                                            <p class="text alt-font show-on-scroll slide-down" style="transition-delay: 0.4s;"><?php the_sub_field('text', 'options'); ?></p>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                        <div class="swiper-scrollbar"></div>
                        <!-- <div class="swiper-pagination"></div> -->
                    </div>


                    <!-- Initialize Swiper -->
                    <script>
                        var whyUsSwiper = new Swiper(".why-us-slider", {
                            slidesPerView: 1.8,
                            spaceBetween: 15,
                            freeMode: true,
                            scrollbar: {
                                el: ".swiper-scrollbar",
                                // hide: true,
                            },
                            breakpoints: {
                                200: {
                                    slidesPerView: 1.2,
                                },
                                600: {
                                    slidesPerView: 1.8,
                                },
                            },
                        });
                    </script>
                </div>
            </div>
        </div>
        </div>
    </section>


    <section class="included-section paddings">
        <div class="container center show-on-scroll slide-left" style=" transition-delay: 0.1s;">
            <div class="content-top">
                <span class="text pretitle "><?php the_field('included_pretitle', 'options'); ?></span>
                <h2 class="title large white margin-bottom show-on-scroll slide-down" style="transition-delay: 0.2s;"><?php the_field('included_title', 'options'); ?></h2>
                <div class="text white"> <?php the_field('included_text', 'options', false, false); ?></div>
            </div>
        </div>
        <div class="container">
            <div class="content-bottom show-on-scroll slide-down" style="transition-delay: 0.2;">
                <?php if (get_field('included_repeater', 'options')) : ?>
                    <ul>
                        <?php while (the_repeater_field('included_repeater', 'options')) : ?>
                            <li class="text white alt-font"><?php the_sub_field('text'); ?></li>
                        <?php endwhile; ?>
                    </ul>
                <?php endif; ?>
            </div>
        </div>
    </section>


    <section class="after-intro-section paddings">
        <div class="container flex reverse">
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
                    <h2 class="title large bold margin-bottom"><?php the_field('about_us_title'); ?></h2>
                    <div class="text"><?php the_field('about_us_text'); ?></div>
                    <a href="<?php the_field('about_link', 'options') ?>" class="button gradient">
                        Learn More
                        <!-- <i class="gg-arrow-right-o"></i> -->
                        <!-- <span class="icon-yellow-arrow"></span> -->
                        <span class="white-arrow"></span>
                    </a>
                </div>
            </div>
        </div>

        <div class="container flex padding">
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
                    <h2 class="title large bold margin-bottom"><?php the_field('about_title'); ?></h2>
                    <p class="text alt-font"><?php the_field('about_text'); ?></p>
                    <a href="<?php the_field('location_link', 'options') ?>" class="button gradient margin-top">
                        See delivery Locations
                        <!-- <i class="gg-arrow-right-o"></i> -->
                        <!-- <span class="icon-yellow-arrow"></span> -->
                        <span class="white-arrow"></span>
                    </a>
                </div>
            </div>
        </div>
    </section>



</main>

<?php get_footer(); ?>