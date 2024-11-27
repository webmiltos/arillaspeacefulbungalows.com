<?php /* Template Name: Extras-Template */ ?>

<?php get_header(); ?>

<main class="site-content info-page extras-page">

    <section class="terms-section paddings">
        <div class="container flex reverse">
            <div class="content-left">
                <div class="content-left-wrap">
                    <h1 class="title medium bold show-on-scroll slide-up" style="transition-delay: 0.2s;"><?php the_title(); ?></h1>
                    <p class="text subtext  margin-bottom  show-on-scroll slide-up" style="transition-delay: 0.2s;"><?php the_field('extras_text'); ?></p>

                    <div class="content-bottom show-on-scroll slide-up" style="transition-delay: 0.3s;">
                        <div class="extras-repeater">
                            <p class="title">
                                <?php the_field('extras_title'); ?>
                            </p>
                            <div class="row">
                                <?php if (get_field('extras_repeater')) : ?>
                                    <?php while (the_repeater_field('extras_repeater')) : ?>
                                        <div class="display_flex">
                                            <?php $image = get_sub_field('icon');
                                            if (!empty($image)) : ?>
                                                <img src="<?php echo esc_url($image['sizes']['medium_large']); ?>" alt="<?php echo $image['alt']; ?>" />
                                            <?php endif; ?>
                                            <span class="line"></span>
                                            <div class="texts-wrap">
                                                <p class="title"><?php the_sub_field('title'); ?></p>
                                                <p class="text"><?php the_sub_field('text'); ?></p>
                                                <p class="text bold price"><?php echo 'From <span class="text bold price price-number">' . get_sub_field('price') . '</span>/day '; ?></p>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </div>
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
    <h2 class="no-font">Our Fleet</h2>
    <h3 class="no-font">Our Fleet</h3>


</main>

<?php get_footer(); ?>