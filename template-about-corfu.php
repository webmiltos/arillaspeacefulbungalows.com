<?php /* Template Name: About Corfu-Template */ ?>

<?php get_header(); ?>

<main class="site-content info-page terms-page about-corfu-page">

    <section class="terms-section paddings">
        <div class="container flex reverse">
            <div class="content-left">
                <div class="content-left-wrap">
                    <h1 class="title large bold show-on-scroll slide-up" style="transition-delay: 0.2s;"><?php the_title(); ?></h1>
                    <h2 class="title large bold uppercase show-on-scroll slide-up"><?php the_field('title'); ?></h2>
                    <p class="text subtext bold margin-bottom show-on-scroll slide-up"><?php the_field('text'); ?></p>
                    <div class="content-bottom show-on-scroll slide-up" style="transition-delay: 0.3s;">
                        <div class="text margin-bottom show-on-scroll slide-up"><?php the_field('intro_text'); ?></div>

                        <div class="image-wrap wide">
                            <?php $image = get_field('wide_image');
                            if (!empty($image)) : ?>
                                <img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo $image['alt']; ?>" />
                            <?php endif; ?>
                        </div>

                        <div class="text margin-bottom show-on-scroll slide-up"><?php the_field('middle_text'); ?></div>

                        <div class="image-wrap display-flex">
                            <?php $image = get_field('left_image');
                            if (!empty($image)) : ?>
                                <img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo $image['alt']; ?>" />
                            <?php endif; ?>

                            <?php $image = get_field('right_image');
                            if (!empty($image)) : ?>
                                <img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo $image['alt']; ?>" />
                            <?php endif; ?>
                        </div>

                        <div class="text margin-bottom show-on-scroll slide-up"><?php the_field('bottom_text'); ?></div>

                    </div>

                </div>
            </div>

            <div class="content-right">
                <div class="content-right-wrap show-on-scroll slide-up" style="transition-delay: 0.1s;">

                    <div class="desktop-sidebar-menu">
                        <div data-role="collapsible" class="collapse-data">
                            <div class="desktop-menu">
                                <?php
                                wp_nav_menu(array(
                                    'theme_location' => 'sidebar-menu',
                                    'container' => 'nav',
                                    'container_class' => 'sidebar-menu',
                                ));
                                ?>
                            </div>
                        </div>
                    </div>

                    <div class="mobile-sidebar-menu">
                        <div class="mobile-info-tab">
                            <?php echo __('Useful Info', 'gocreations'); ?>
                        </div>
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'sidebar-menu',
                            'container' => 'nav',
                            'container_class' => 'sidebar-menu',
                        ));
                        ?>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <h3 class="no-font">Terms</h3>
</main>

<?php get_footer(); ?>