<?php /* Custom Footer */ ?>

<footer class="custom-footer">
    <div class="footer-wrapper">
        <div class="footer-wrap">
            <div class="container flex">
                <div class="content-left">
                    <div class="footer-menu-wrap logo grid">
                        <div class="footer-left-texts">
                            <?php if (get_field('footer_title', 'options')) : ?>
                                <h4 class="title large"><?php the_field('footer_title', 'options'); ?></h4>
                            <?php endif; ?>
                            <?php if (get_field('footer_title', 'options')) : ?>
                                <p class="text"><?php the_field('footer_text', 'options'); ?></p>
                            <?php endif; ?>
                            <div class="social-wrap">
                                <?php if (get_field('instagram', 'options')) : ?>
                                    <a href="<?php the_field('instagram', 'options') ?>" class="text white" target="_blank">
                                        <div class="icon-intagram-icon"></div>
                                    </a>
                                <?php endif; ?>
                                <?php if (get_field('facebook', 'options')) : ?>
                                    <a href="<?php the_field('facebook', 'options') ?>" class="text white" target="_blank">
                                        <div class="icon-facebook-icon"></div>
                                    </a>
                                <?php endif; ?>
                            </div>
                            <button>
                                <a class="button-circle" href="<?php the_field('contact_link', 'options') ?>"><?php _e('Contact Us', 'gocreations'); ?></a>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="content-right">
                    <div class="footer-image-wrap">
                        <?php
                        $image = get_field('footer_image', 'options');
                        $size = 'very_large';
                        if ($image) : ?>
                            <?php echo wp_get_attachment_image($image['id'], $size); ?>
                        <?php endif; ?>
                    </div>

                    <!-- <div class="footer-menu-wrap useful grid">
                        <h4 class="title medium white">
                            <?php _e('Blog Posts', 'gocreations'); ?>
                        </h4>
                        <div class="content-wrap hide-mobile info">
                            <?php
                            $args = array(
                                'post_type' => 'post',
                                'posts_per_page' => -1, // -1 to display all posts
                            );
                            $query = new WP_Query($args);
                            if ($query->have_posts()) :
                            ?>
                                <ul>
                                    <?php
                                    while ($query->have_posts()) : $query->the_post();
                                    ?>
                                        <li class="text white">
                                            <a href="<?php the_permalink(''); ?>"> <?php the_title(); ?></a>
                                        </li>
                                    <?php
                                    endwhile;
                                    ?>
                                </ul>
                            <?php
                                wp_reset_postdata();
                            else :
                                echo 'No posts found';
                            endif;
                            ?>
                        </div>
                    </div> -->

                    <!-- <div class="footer-menu-wrap grid">
                        <h4 class="title white medium">
                            <?php _e('Company', 'gocreations'); ?>
                        </h4>
                        <div class="content-wrap hide-mobile">
                            <?php wp_nav_menu(array('theme_location' => 'footer-menu-company')); ?>
                        </div>
                    </div>

                    <div class="footer-menu-wrap useful grid">
                        <h4 class="title white medium">
                            <?php _e('Useful Info', 'gocreations'); ?>

                        </h4>
                        <div class="content-wrap hide-mobile info">
                            <?php wp_nav_menu(array('theme_location' => 'footer-menu-useful')); ?>
                        </div>
                    </div> -->

                    <!-- <div class="footer-menu-wrap contact-us grid">
                        <h4 class="title medium white">
                            <?php _e('Contact Us', 'gocreations'); ?>

                        </h4>
                        <div class="content-wrap hide-mobile info">
                            <?php if (get_field('mobile', 'options')) : ?>
                                <a href="tel:<?php the_field('mobile', 'options') ?>" class="footer-text white" target="_blank">
                                    <?php the_field('mobile', 'options'); ?>
                                </a>
                            <?php endif; ?>

                            <?php if (get_field('email', 'options')) : ?>
                                <a href="mailto:<?php the_field('email', 'options') ?>" class="footer-text white" target="_blank">
                                    <?php the_field('email', 'options'); ?>
                                </a>
                            <?php endif; ?>

                            <?php if (get_field('address', 'options')) : ?>
                                <span class="footer-text white">
                                    <a href="<?php the_field('google_maps_link', 'options'); ?>" target="_blank">
                                        <?php the_field('address', 'options'); ?>
                                    </a>
                                </span>
                            <?php endif; ?>


                        </div>
                    </div> -->

                    <!-- <div class="footer-menu-wrap grid">
                        <h4 class="title medium white">
                            <?php _e('Contact Us', 'gocreations'); ?>
                        </h4>

                        <div class="content-wrap hide-mobile info">
                            <ul>
                                <li>
                                    <?php if (get_field('address', 'options')) : ?>
                                        <span class="footer-text white">
                                            <a href="<?php the_field('google_maps_link', 'options'); ?>" target="_blank">
                                                <?php the_field('address', 'options'); ?>
                                            </a>
                                        </span>
                                    <?php endif; ?>
                                </li>

                                <li>
                                    <?php if (get_field('phone_1', 'options')) : ?>
                                        <a href="tel:<?php the_field('phone_1', 'options') ?>" class="footer-text white" target="_blank">
                                            <?php the_field('phone_1', 'options'); ?>
                                        </a>
                                    <?php endif; ?>
                                </li>

                                <li>
                                    <?php if (get_field('mobile', 'options')) : ?>
                                        <a href="tel:<?php the_field('mobile', 'options') ?>" class="footer-text white" target="_blank">
                                            <?php the_field('mobile', 'options'); ?>
                                        </a>
                                    <?php endif; ?>
                                </li>

                                <li>
                                    <?php if (get_field('email', 'options')) : ?>
                                        <a href="mailto:<?php the_field('email', 'options') ?>" class="footer-text white" target="_blank">
                                            <?php the_field('email', 'options'); ?>
                                        </a>
                                    <?php endif; ?>
                                </li>
                            </ul>
                        </div>
                    </div> -->

                    <? /*
                    <div class="footer-menu-wrap follow-us">
                        <h4 class="title medium white">
                            <?php _e('Follow Us', 'gocreations'); ?>
                        </h4>

                        <div class="content-wrap hide-mobile follow-us">
                            <div class="social-wrap">
                                <?php if (get_field('facebook', 'options')) : ?>
                                    <a href="<?php the_field('facebook', 'options') ?>" class="text white" target="_blank">
                                        <div class="icon-facebook-icon"></div>
                                    </a>
                                <?php endif; ?>

                                <?php if (get_field('instagram', 'options')) : ?>
                                    <a href="<?php the_field('instagram', 'options') ?>" class="text white" target="_blank">
                                        <div class="icon-intagram-icon"></div>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                        <!-- <div class="follow-us-dropdown">
                            <span class="sub-title white"> <?php _e('Social', 'gocreations'); ?>
                            </span>
                            <div class="hidden-content">
                                <div class="social-wrap">
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
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="follow-us-dropdown">
                            <span class="sub-title white">
                                <?php _e('Contact', 'gocreations'); ?>
                            </span>
                            <div class="hidden-content">
                                <div class="hidden-content-wrap">
                                    <?php if (get_field('mobile', 'options')) : ?>
                                        <a href="tel:<?php the_field('mobile', 'options') ?>" class="footer-text white" target="_blank">
                                            <?php the_field('mobile', 'options'); ?>
                                        </a>
                                    <?php endif; ?>

                                    <?php if (get_field('email', 'options')) : ?>
                                        <a href="mailto:<?php the_field('email', 'options') ?>" class="footer-text white" target="_blank">
                                            <?php the_field('email', 'options'); ?>
                                        </a>
                                    <?php endif; ?>
                                    <?php if (get_field('address', 'options')) : ?>
                                        <span class="footer-text white">
                                            <a href="<?php the_field('google_maps_link', 'options'); ?>" target="_blank">
                                                <?php the_field('address', 'options'); ?>
                                            </a>
                                        </span>
                                    <?php endif; ?>

                                    <?php if (get_field('branch_address', 'options')) : ?>
                                        <span class="footer-text white">
                                            <a href="<?php the_field('google_maps_link', 'options'); ?>" target="_blank">
                                                <?php the_field('branch_address', 'options'); ?>
                                            </a>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="dropdown">
                            <span class="sub-title white">
                                <?php _e('Other', 'gocreations'); ?>
                            </span>

                        </div> -->
                    </div>
                    */ ?>

                    <!-- <div class="footer-menu-wrap social-images">
                        <span class="social-image">
                            <?php $image = get_field('social_image_1', 'options');
                            if (!empty($image)) : ?>
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?>
                        </span>
                        <span class="social-image">
                            <?php $image = get_field('social_image_2', 'options');
                            if (!empty($image)) : ?>
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?>
                        </span>
                    </div> -->

                </div>

            </div>
        </div>


        <div class="footer-wrap-menus">
            <span class="footer-menu"><?php wp_nav_menu(array('theme_location' => 'footer-menu-left')); ?></span>

            <div class="footer-logo-wrap">
                <?php
                $image = get_field('footer_logo', 'options');
                $size = 'large';
                if ($image) : ?>
                    <?php echo wp_get_attachment_image($image['id'], $size); ?>
                <?php endif; ?>
            </div>

            <span class="footer-menu"><?php wp_nav_menu(array('theme_location' => 'footer-menu-right')); ?></span>
        </div>

        <? /*
        <div class="payments-wrapper container">
            <?php echo __('Secure Payments', 'gocreations'); ?>
            <div class="footer-logo-wrap">
                <?php
                $image = get_field('footer_payments_image', 'options');
                $size = 'full';
                if ($image) : ?>
                    <?php echo wp_get_attachment_image($image['id'], $size); ?>
                <?php endif; ?>
                <?php
                $image = get_field('footer_payments_method_image', 'options');
                $size = 'full';
                if ($image) : ?>
                    <?php echo wp_get_attachment_image($image['id'], $size); ?>
                <?php endif; ?>
            </div>
        </div>
        */ ?>



    </div>
    <div class="footer-bottom-wrap">
        <span class="footer-copyright-left"><?php // echo __('All Rights Reserved', 'gocreations'); 
                                            ?>
            &copy; <?php echo get_bloginfo('name'); ?> <?php echo date("Y"); ?></span>
        <span class="footer-menu-copyright"><?php wp_nav_menu(array('theme_location' => 'footer-menu-copyright')); ?></span>
        <span class="footer-copyright-right"><?php echo __('Designed & Developed by', 'gocreations'); ?> <a href="https://gocreations.gr" target="_blank">go creations</a></span>
        <!-- <span class="footer-copyright-right"> <?php echo __('Online Booking Engine by', 'gocreations'); ?> <a href="https://gocars.online/" target="_blank">go cars online</a> | <?php echo __(' Designed & Developed by', 'gocreations'); ?> <a href="https://gocreations.gr" target="_blank">go creations</a></span> -->

        <!-- <span class="footer-signature">ΜΗ.Τ.Ε: 0829Ε81000096101</a></span> -->
    </div>
</footer>