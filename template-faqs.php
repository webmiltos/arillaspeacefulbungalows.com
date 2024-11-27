<?php /* Template Name: Faq's-Template */ ?>

<?php get_header(); ?>

<main class="site-content info-page faqs-page">

    <section class="terms-section paddings">
        <div class="container flex reverse">
            <div class="content-left">
                <div class="content-left-wrap">
                    <h1 class="title large bold margin-bottom-small show-on-scroll slide-up" style="transition-delay: 0.2s;"><?php the_field('faqs_title'); ?></h1>
                    <p class="text show-on-scroll slide-up"><?php the_field('faqs_text'); ?></p>
                    <div class="faqs-repeater-wrap">
                        <?php
                        if (get_field('faqs_repeater', 196)) : ?>
                            <?php while (the_repeater_field('faqs_repeater', 196)) : ?>

                                <div class="single-faq data-role=" collapsibleset">
                                    <div data-role="main" class="ui-content">
                                        <div data-role="collapsible" class="collapse-data">

                                            <div class="faq-content show-on-scroll slide-up" style="transition-delay: 0.3s;">
                                                <h2 class="content large question">
                                                    <?php the_sub_field('question', 196); ?>
                                                    <div class="circle"></div>
                                                </h2>
                                                <h3 class="content answer">
                                                    <?php the_sub_field('answer', 196); ?>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <?php endwhile; ?>
                        <?php endif; ?>
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
</main>

<?php get_footer(); ?>