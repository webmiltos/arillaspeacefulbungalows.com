<?php /* Template Name: Delivery-Template */ ?>

<?php get_header(); ?>

<main class="site-content info-page terms-page delivery-page">

    <section class="terms-section paddings">
        <div class="container flex reverse">
            <div class="content-left">
                <div class="content-left-wrap">
                    <h1 class="title large bold show-on-scroll slide-up" style="transition-delay: 0.2s;"><?php the_title(); ?></h1>
                    <h2 class="title large bold uppercase show-on-scroll slide-up"><?php the_field('title'); ?></h2>
                    <p class="text subtext bold margin-bottom show-on-scroll slide-up"><?php the_field('text'); ?></p>
                    <div class="content-bottom delivery-wrapper show-on-scroll slide-up" style="transition-delay: 0.3s;">

                        <?php if (get_field('delivery_repeater')) : ?>
                            <?php while (the_repeater_field('delivery_repeater')) : ?>
                                <div class="delivery-single-item show-on-scroll slide-right" style="transition-delay: 0.3s;">
                                    <div class="texts-wrap">
                                        <p class="text location show-on-scroll slide-down" style="transition-delay: 0.3s;"><?php the_sub_field('text'); ?></p>
                                        <p class="text price show-on-scroll slide-down" style="transition-delay: 0.4s;"><?php the_sub_field('price'); ?></p>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>

                        <?php the_content(); ?>
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