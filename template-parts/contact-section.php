<section class="contact-section">

    <div class="contact-form-section show-on-scroll slide-up" style="transition-delay: 0.1s;">
        <div class="container flex">
            <div class="content-left grid floating-labels-form">
                <div class="texts-wrap">
                    <h2 class="title large bold margin-bottom">
                        <?php the_field('contact_section_title', 'options'); ?>
                    </h2>
                    <p class="text margin-bottom">
                        <?php the_field('contact_section_text', 'options'); ?>
                    </p>
                </div>
                <?php echo do_shortcode('[contact-form-7 id="5" title="Contact form"]'); ?>
            </div>
            <div class="content-right show-on-scroll slide-up" style="transition-delay: 0.3s;">
                <div class="info-wrap">
                    <?php $image = get_field('contact_section_image', 'options');
                    if (!empty($image)) : ?>
                        <img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>

                    <div class="offices-locations-repeater">
                        <?php if (get_field('offices_locations_repeater', 'options')) : ?>
                            <?php while (the_repeater_field('offices_locations_repeater', 'options')) : ?>
                                <div class="single">
                                    <div class="texts-wrap">
                                        <!-- <p class="text pretitle"><?php the_sub_field('pretitle', 'options'); ?></p> -->
                                        <p class="text white address medium bold"><?php the_sub_field('location', 'options'); ?></p>
                                        <p class="text white phone"><?php the_sub_field('mobile'); ?></p>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>