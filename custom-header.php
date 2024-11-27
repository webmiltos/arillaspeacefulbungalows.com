<header class="custom-header <?php echo (get_field('transparent_header')) || is_404() ? ' transparent' : '' ?>">
    <?php if (function_exists('the_custom_logo')) : ?>
        <?php if (get_custom_logo()) : ?>
            <?php the_custom_logo(); ?>
        <?php else : ?>
            <div class="header-logos-wrapper">

                <?php
                $image = get_field('transparent_header_logo', 'options');
                if (!empty($image)) : ?>
                    <a class="main-logo-wrap transparent" href="<?php echo esc_url(home_url('/')); ?>">
                        <img class="main-logo-transparent" src="<?php echo $image['sizes']['regular']; ?>" alt="<?php echo $image['alt']; ?>" />
                    </a>
                <?php endif; ?>

                <?php
                $image = get_field('header_logo', 'options');
                if (!empty($image)) : ?>
                    <a class="main-logo-wrap main" href="<?php echo esc_url(home_url('/')); ?>">
                        <img class="main-logo" src="<?php echo $image['sizes']['regular']; ?>" alt="<?php echo $image['alt']; ?>" />
                    </a>
                <?php endif; ?>
                <?php
                $image = get_field('header_scrolled_logo', 'options');
                if (!empty($image)) : ?>
                    <a class="main-logo-wrap scrolled" href="<?php echo esc_url(home_url('/')); ?>">
                        <img class="main-logo" src="<?php echo $image['sizes']['regular']; ?>" alt="<?php echo $image['alt']; ?>" />
                    </a>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    <?php else : ?>
        <div class="header-logos-wrapper" style="transition-delay: 0.4s;">
            <?php
            $image = get_field('header_logo', 'options');
            if (!empty($image)) : ?>
                <a class="main-logo-wrap main" href="<?php echo esc_url(home_url('/')); ?>">
                    <img class="main-logo" src="<?php echo $image['sizes']['regular']; ?>" alt="<?php echo $image['alt']; ?>" />
                </a>
            <?php endif; ?>
            <?php
            $image = get_field('header_scrolled_logo', 'options');
            if (!empty($image)) : ?>
                <a class="main-logo-wrap scrolled" href="<?php echo esc_url(home_url('/')); ?>">
                    <img class="main-logo" src="<?php echo $image['sizes']['regular']; ?>" alt="<?php echo $image['alt']; ?>" />
                </a>
            <?php endif; ?>
        </div>
    <?php endif; ?>

    <div class="custom-header-right-wrap">
        <? /*
        <div class="header-right-top-wrap">
            <div class="phones-wrap">

                <?php if (get_field('email', 'options')) : ?>
                    <a href="mailto:<?php the_field('email', 'options') ?>" class="text" target="_blank">
                        <?php the_field('email', 'options'); ?>
                    </a>
                <?php endif; ?>
                <span class="line"></span>
                <?php if (get_field('phone_1', 'options')) : ?>
                    <a href="tel:<?php the_field('phone_1', 'options') ?>" class="text" target="_blank">
                        <?php the_field('phone_1', 'options'); ?>
                    </a>
                <?php endif; ?>
                <span class="line"></span>
                <?php if (get_field('mobile', 'options')) : ?>
                    <a href="tel:<?php the_field('mobile', 'options') ?>" class="text" target="_blank">
                        <?php the_field('mobile', 'options'); ?>
                    </a>
                <?php endif; ?>


                <?php if (get_field('mobile_2', 'options')) : ?>
                    <a href="tel:<?php the_field('mobile_2', 'options') ?>" class="text white" target="_blank">
                        <?php the_field('mobile_2', 'options'); ?>
                    </a>
                <?php endif; ?>
                <!-- <div class="icons-wrap-top">
                    <a href="https://wa.me/306944994898">
                        <div class="whatsapp-icon"></div>
                    </a>
                    <a href="viber://<?php the_field('mobile', 'options'); ?>">
                        <div class="viber-icon"></div>
                    </a>
                </div> -->
            </div>
        </div>
*/ ?>
        <div class="header-right-bottom-wrap">
            <div class="header-menu-wrap">
                <?php wp_nav_menu(array('theme_location' => 'main-menu')); ?>

                <? /*
                <div class="icons-wrap">
                    <a href="https://wa.me/306982855531">
                        <div class="whatsapp-icon"></div>
                    </a>
                    <a href="viber://<?php the_field('mobile', 'options'); ?>">
                        <div class="viber-icon"></div>
                    </a>
                    <a href="https://t.me/<?php the_field('telegram', 'options'); ?>">
                        <div class="telegram-icon"></div>
                    </a>
                    <!-- <?php if (get_field('mobile', 'options')) : ?>
                        <a href="tel:<?php the_field('mobile', 'options') ?>" target="_blank">
                            <div class="phone-icon"></div>
                        </a>
                    <?php endif; ?>

                    <?php if (get_field('email', 'options')) : ?>
                        <a href="mailto:<?php the_field('email', 'options') ?>" target="_blank">
                            <div class="email-icon"> </div>
                        </a>
                    <?php endif; ?> -->

                </div>
                */ ?>
                <!-- <div class="social-wrap">
                    <?php if (get_field('facebook', 'options')) : ?>
                        <a href="<?php the_field('facebook', 'options') ?>" class="social-btn" target="_blank">
                            <span class="icon-facebook-icon"></span> </a>
                    <?php endif; ?>

                    <?php if (get_field('instagram', 'options')) : ?>
                        <a href="<?php the_field('instagram', 'options') ?>" class="social-btn" target="_blank">
                            <span class="icon-intagram-icon"></span>
                        </a>
                    <?php endif; ?>

                    <?php if (get_field('youtube', 'options')) : ?>
                        <a href="<?php the_field('youtube', 'options') ?>" class="social-btn" target="_blank">
                            <span class="icon-youtube-icon"></span>
                        </a>
                    <?php endif; ?>

                    <?php if (get_field('twitter', 'options')) : ?>
                        <a href="<?php the_field('twitter', 'options') ?>" class="social-btn" target="_blank">
                            <span class="icon-x"></span>
                        </a>
                    <?php endif; ?>

                    <?php if (get_field('linkedin', 'options')) : ?>
                        <a href="<?php the_field('linkedin', 'options') ?>" class="social-btn" target="_blank">
                            <span class="icon-linked-in-icon-white"></span>
                        </a>
                    <?php endif; ?>

                    <?php if (get_field('pinterest', 'options')) : ?>
                        <a href="<?php the_field('pinterest', 'options') ?>" class="social-btn" target="_blank">
                            <span class="icon-pinterest"></span>
                        </a>
                    <?php endif; ?>

                    <?php if (get_field('tiktok', 'options')) : ?>
                        <a href="<?php the_field('tiktok', 'options') ?>" class="social-btn" target="_blank">
                            <span class="icon-ticktok"></span>
                        </a>
                    <?php endif; ?>

                </div> -->

                <?php if (get_field('reservations_link', 'options')) : ?>
                    <a href="<?php the_field('reservations_link', 'options'); ?>" class="button border circle-left">
                        <span class="circle-left"></span>
                        <?php _e('Reservations', 'gocreations'); ?>
                        <!-- <i class="gg-arrow-right-o"></i> -->
                        <!-- <span class="icon-yellow-arrow"></span> -->
                        <!-- <span class="white-arrow"></span> -->
                    </a>
                <?php endif; ?>

            </div>

            <? /* 
             <?php if (is_active_sidebar('desktop-wpml-custom-widget')) : ?>
                <div class="wpml-lang-switcher desktop">
                    <?php dynamic_sidebar('desktop-wpml-custom-widget'); ?>
                </div>
            <?php endif; ?> 
            */ ?>

            <?php // echo do_shortcode('[wpml_language_selector_widget]'); 
            ?>


        </div>
    </div>

</header>


<script>
    jQuery(document).ready(function() {
        jQuery('.header-link').hover(
            function() {
                jQuery('.product-item').removeClass('active');
                jQuery(this).closest('.product-item').addClass('active');
            },
        );
    });
</script>