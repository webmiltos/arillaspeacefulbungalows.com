<section class="reviews-section">
    <div class="container top center show-on-scroll slide-up" style="transition-delay: 0.2s;">
        <div class="middle">
            <div class="content-left">
                <span class="text pretitle"><?php the_field('reviews_pretitle', 'options'); ?></span>
                <h2 class="title large"><?php the_field('reviews_title', 'options'); ?></h2>
            </div>
            <div class="content-right">
                <div class="buttons-wrapper">
                    <span class="review-button-next"></span>
                    <span class="review-button-prev"></span>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="container flex middle show-on-scroll slide-up" style=" transition-delay: 0.3s;">
        <div class="content-left">
            <div class="image-wrap">
                <?php $image = get_field('reviews_image', 'options');
                if (!empty($image)) : ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
            </div>
            <div class="text-wrap">
                <p class="title">Google Reviews</p>
                <p class="text"><?php the_field('reviews_number', 'options'); ?> Reviews</p>
            </div>
        </div>
        <div class="content-right">
            <p class="text"><?php the_field('stars_number', 'options'); ?></p>
            <div class="image-wrap">
                <?php $image = get_field('stars_image', 'options');
                if (!empty($image)) : ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
            </div>
        </div>
    </div> -->
    <div class="container bottom show-on-scroll slide-up" style=" transition-delay: 0.2s;">
        <div class="swiper-container reviews-slider">
            <div class="swiper-wrapper">
                <?php if (get_field('reviews_repeater', 'options')) : ?>
                    <?php while (the_repeater_field('reviews_repeater', 'options')) : ?>
                        <div class="repeater-item swiper-slide show-on-scroll slide-right" style="transition-delay: 0.2s;">
                            <div class="top">
                                <p class="title medium bold"><?php the_sub_field('title', 'options'); ?></p>
                            </div>
                            <div class="middle">
                                <p class="text"><?php the_sub_field('review', 'options'); ?></p>
                            </div>
                            <div class="bottom">
                                <div class="image-wrap">
                                    <?php $image = get_sub_field('icon', 'options');
                                    if (!empty($image)) : ?>
                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                    <?php endif; ?>

                                    <span class="first-letter">
                                        <?php echo substr(get_sub_field('name', 'options'), 0, 1); ?>
                                    </span>
                                </div>
                                <div class="texts-wrap">
                                    <p class="name"> <?php the_sub_field('name', 'options'); ?></p>
                                    <p class="date"> <?php the_sub_field('date', 'options'); ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="buttons-wrapper hidden">
                <div class="swiper-button-next-reviews"></div>
                <div class="swiper-button-prev-reviews"></div>
            </div>
            <!-- <div class="swiper-pagination"></div> -->
        </div>
    </div>
</section>