<?php /* Template Name: Terms-Template */ ?>

<?php get_header(); ?>

<main class="site-content info-page terms-page">

    <section class="terms-section">
        <div class="container flex reverse">
            <div class="content-left">
                <div class="content-left-wrap">
                    <h1 class="title large  main-color show-on-scroll slide-up" style="transition-delay: 0.2s;"><?php the_title(); ?></h1>
                    <h2 class="title large main-color  uppercase show-on-scroll slide-up"><?php the_field('title'); ?></h2>
                    <p class="text subtext  main-color  margin-bottom show-on-scroll slide-up"><?php the_field('text'); ?></p>
                    <div class="content-bottom show-on-scroll slide-up" style="transition-delay: 0.3s;">
                        <?php the_content(); ?>
                    </div>

                </div>
            </div>

            <!-- <div class="content-right">
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
            </div> -->

        </div>
    </section>


    <h3 class="no-font">Terms</h3>
</main>

<?php get_footer(); ?>