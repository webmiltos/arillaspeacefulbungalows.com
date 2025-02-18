<?php /* Template Name: Contact-Template */ ?>

<?php get_header(); ?>

<main class="site-content contact-page">
    <!-- <style>
        .footer-wrapper .footer-wrap {
            display: none !important;
        }
    </style> -->

    <section class="contact-form-section show-on-scroll slide-up" style="transition-delay: 0.2s;">
        <div class="container flex reverse">
            <div class="content-left grid floating-labels-form">
                <h1 class="title extra-large main-color margin-bottom"><?php the_field('contact_title'); ?></h1>
                <p class="text main-color">
                    <?php echo do_shortcode('[contact-form-7 id="5" title="Contact form"]'); ?>
                </p>
            </div>
            <div class="content-right show-on-scroll slide-up" style="transition-delay: 0.1s;">
                <div class="footer-image-wrap">
                    <?php
                    $image = get_field('footer_image', 'options');
                    $size = 'large';
                    if ($image) : ?>
                        <?php echo wp_get_attachment_image($image['id'], $size); ?>
                    <?php endif; ?>
                </div>
            </div>
    </section>

    <section class="map-section show-on-scroll slide-up" style="transition-delay: 0.2s;">
        <div class="container flex reverse">
            <div class="content-left grid floating-labels-form">
                <?php if (get_field('google_maps_iframe', 'options')) : ?>
                    <?php echo get_field('google_maps_iframe', 'options'); ?>
                <?php endif; ?>
            </div>
            <div class="content-right show-on-scroll slide-up" style="transition-delay: 0.1s;">
                <div class="texts-wrap">
                    <h2 class="title large">
                        <?php the_field('contact_title_map'); ?>
                    </h2>
                    <p class="text margin-bottom ">
                        <?php the_field('contact_text_map'); ?>
                    </p>
                </div>

                <div class="social-wrap">
                    <a href="https://www.instagram.com" class="text white" target="_blank">
                        <div class="icon-intagram-icon"></div>
                    </a>
                    <a href="https://www.facebook.com" class="text white" target="_blank">
                        <div class="icon-facebook-icon"></div>
                    </a>
                </div>

                <button class="button-circle white flex center"> <a href=""><?php _e('Find Us on Map', 'gocreations'); ?></a></button>
            </div>
        </div>
    </section>


    <h3 class="no-font">Contact</h3>
</main>



<?php get_footer(); ?>