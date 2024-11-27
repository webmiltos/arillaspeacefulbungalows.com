<?php /* Mobile Header */ ?>

<div class="mob-header <?php echo (get_field('transparent_header')) ? ' transparent' : '' ?>">


    <div class="header-wrap-mobile">
        <? /*
        <div class="collored-lines">
            <?php if (get_field('phone_1', 'options')) : ?>
                <a href="tel:<?php the_field('phone_1', 'options') ?>" class="text white" target="_blank">
                    <?php the_field('phone_1', 'options'); ?>
                </a>
            <?php endif; ?>
            <span class="line"></span>
            <?php if (get_field('mobile', 'options')) : ?>
                <a href="tel:<?php the_field('mobile', 'options') ?>" class="text white" target="_blank">
                    <?php the_field('mobile', 'options'); ?>
                </a>
            <?php endif; ?>
            <div class="icons-wrap">
                <a href="https://wa.me/+306982855531">
                    <div class="whatsapp-icon"></div>
                </a>
                <a href="viber://306982855531">
                    <div class="viber-icon"></div>
                </a>
                <a href="https://t.me/username">
                    <div class="telegram-icon"></div>
                </a>
            </div>
        </div>
        */ ?>

        <div class="header-logo-wrap mob">
            <?php
            $image = get_field('transparent_header_logo', 'options');
            if (!empty($image)) : ?>
                <a class="headerLogo transparent" href="<?php echo esc_url(home_url('/')); ?>">
                    <img class="headerLogo-transparent" src="<?php echo $image['sizes']['regular']; ?>" alt="<?php echo $image['alt']; ?>" />
                </a>
            <?php endif; ?>

            <a class="headerLogo main" href="<?php echo esc_url(home_url('/')); ?>">
                <?php
                $image = get_field('mobile_logo', 'options');
                if (!empty($image)) : ?>
                    <img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" />
                <?php endif; ?>
            </a>
        </div>
        <?php if (get_field('reservations_link', 'options')) : ?>
            <a href="<?php the_field('reservations_link', 'options'); ?>" class="button border circle-left">
                <span class="circle-left"></span>
                <?php _e('reservations', 'gocreations'); ?>
                <!-- <span class="icon-yellow-arrow"></span> -->
                <!-- <span class="white-arrow"></span> -->
            </a>
        <?php endif; ?>
        <div class="burger-menu-wrap-mob">
            <div class="burger-menu">
                <div></div>
            </div>
        </div>
    </div>
    <div class="menu-mob">
        <div class="menu-mob-wrap">
            <div class="mob-menu-top">
                <?php wp_nav_menu(array('theme_location' => 'mobile-menu')); ?>

                <?php if (get_field('reservations_link', 'options')) : ?>
                    <a href="<?php the_field('reservations_link', 'options'); ?>" class="button border circle-left">
                        <span class="circle-left"></span>
                        <?php _e('reservations', 'gocreations'); ?>
                    </a>
                <?php endif;  ?>

                <? /*
                <?php if (is_active_sidebar('wpml-custom-widget-mobile')) : ?>
                    <div class="header-lang-switcher mob">
                        <?php dynamic_sidebar('wpml-custom-widget-mobile'); ?>
                    </div>
                <?php endif; ?>
                */ ?>
            </div>

            <div class="mob-menu-bottom">
                <div class="mob-socials-wrap">

                    <div class="header-info-wrap">

                        <div class="offices-location-wrap">
                            <?php if (get_field('offices_locations_repeater', 'options')) : ?>
                                <?php while (the_repeater_field('offices_locations_repeater', 'options')) : ?>
                                    <div class="single">
                                        <div class="texts-wrap">
                                            <p class="address"><?php the_sub_field('location', 'options'); ?></p>
                                        </div>
                                        <div class="divider"></div>
                                        <div class="texts-info-wrap">

                                            <?php if (get_sub_field('phone')) : ?>
                                                <a href="tel:<?php the_sub_field('phone'); ?>">
                                                    <p class="text"><?php the_sub_field('phone'); ?></p>
                                                </a>
                                            <?php endif; ?>
                                            <!-- <div class="line"></div> -->
                                            <?php if (get_sub_field('mobile')) : ?>
                                                <a href="tel:<?php the_sub_field('mobile'); ?>">
                                                    <p class="text"><?php the_sub_field('mobile'); ?></p>
                                                </a>
                                            <?php endif; ?>
                                            <!-- <div class="line line2"></div> -->
                                            <?php if (get_sub_field('email')) : ?>
                                                <a href="email:<?php the_sub_field('email'); ?>">
                                                    <p class="text"><?php the_sub_field('email'); ?></p>
                                                </a>
                                            <?php endif; ?>
                                        </div>

                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>



                        <div class="offices-location-wrap">
                            <div class="single">
                                <p class="address">Contact</p>

                                <div class="mob-socials-wrap-bot">
                                    <?php if (get_field('email', 'options')) : ?>
                                        <a href="email:<?php the_field('email', 'options'); ?>">
                                            <p class="text"><?php the_field('email', 'options'); ?></p>
                                        </a>
                                    <?php endif; ?>
                                    <?php if (get_field('instagram', 'options')) : ?>
                                        <a href="<?php the_field('instagram', 'options') ?>" class="text white" target="_blank">
                                            <div class="icon-intagram-icon"></div>
                                        </a>
                                    <?php endif; ?>
                                </div>

                                <div class="mob-socials-wrap-bot">
                                    <?php if (get_field('phone_1', 'options')) : ?>
                                        <a href="tel:<?php the_field('phone_1', 'options'); ?>">
                                            <p class="text"><?php the_field('phone_1', 'options'); ?></p>
                                        </a>
                                    <?php endif; ?>
                                    <?php if (get_field('facebook', 'options')) : ?>
                                        <a href="<?php the_field('facebook', 'options') ?>" class="text white" target="_blank">
                                            <div class="icon-facebook-icon"></div>
                                        </a>
                                    <?php endif; ?>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>