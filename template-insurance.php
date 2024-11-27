<?php /* Template Name: Insurance-Template */ ?>

<?php get_header(); ?>

<main class="site-content info-page insurance-page">

    <section class="terms-section paddings">
        <div class="container flex reverse">
            <div class="content-left">
                <div class="content-left-wrap">


                    <div class="grid-wrapper titles">
                        <div class="cell">
                            <h1 class="title medium bold show-on-scroll slide-up" style="transition-delay: 0.2s;"><?php the_title(); ?></h1>
                        </div>
                        <div class="cell show-on-scroll slide-up" style="transition-delay: 0.22s;">
                            <p class="title"><?php the_field('cdw_title'); ?></p>
                            <div class="title-text"> <?php the_field('cdw_text', false, false); ?></div>
                        </div>
                        <div class="cell show-on-scroll slide-up" style="transition-delay: 0.24s;">
                            <p class="title"><?php the_field('scdw_title'); ?></p>
                            <div class="title-text"> <?php the_field('scdw_text', false, false); ?></div>
                        </div>
                    </div>

                    <div class="grid-wrapper repeater">

                        <?php if (get_field('insurance_table_repeater')) : ?>
                            <div class="row-wrapper">

                                <?php while (the_repeater_field('insurance_table_repeater')) : ?>
                                    <div class="row show-on-scroll slide-up" style="transition-delay: 0.26s;">
                                        <div class="cell">
                                            <h4 class="title"><?php the_sub_field('title'); ?></h4>

                                            <?php if (get_sub_field('text')) : ?>
                                                <p><?php the_sub_field('text'); ?></p>
                                            <?php endif; ?>
                                        </div>
                                        <div class="cell">
                                            <span class="<?php echo get_sub_field('cdw_checkbox') ? 'valid' : 'invalid'; ?>"></span>
                                        </div>
                                        <div class="cell">
                                            <span class="<?php echo get_sub_field('scdw_checkbox') ? 'valid' : 'invalid'; ?>"></span>
                                        </div>
                                    </div>
                                <?php endwhile; ?>

                            </div>
                        <?php endif; ?>

                    </div>


                    <div class="content-bottom faqs-section show-on-scroll slide-up" style="transition-delay: 0.3s;">

                        <?php
                        $table = get_field('insurance_table');

                        if (!empty($table)) :
                        ?>
                            <table border="0">

                                <?php if (!empty($table['caption'])) : ?>
                                    <caption><?php echo $table['caption']; ?></caption>
                                <?php endif; ?>

                                <?php if (!empty($table['header'])) : ?>
                                    <thead>
                                        <tr>
                                            <?php foreach ($table['header'] as $th) : ?>
                                                <th class="text"><?php echo $th['c']; ?></th>
                                            <?php endforeach; ?>
                                        </tr>
                                    </thead>
                                <?php endif; ?>

                                <tbody>
                                    <?php foreach ($table['body'] as $tr) : ?>
                                        <tr>
                                            <?php foreach ($tr as $td) : ?>
                                                <td class="text"><?php echo $td['c']; ?></td>
                                            <?php endforeach; ?>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>

                            </table>
                        <?php endif; ?>


                        <?php if (get_field('excess_repeater')) : ?>
                            <div class="insurance-repeater show-on-scroll slide-up" style="transition-delay: 0.1s;">
                                <p class="title">
                                    <?php the_field('excess_title'); ?>
                                </p>
                                <div class="row">
                                    <?php while (the_repeater_field('excess_repeater')) : ?>
                                        <div class="display_flex">
                                            <p class="text first"><?php the_sub_field('text'); ?></p>
                                            <p class="text"><?php the_sub_field('basic'); ?></p>
                                            <p class="text"><?php the_sub_field('premiun'); ?></p>
                                        </div>
                                    <?php endwhile; ?>
                                </div>
                            </div>
                        <?php endif; ?>


                        <?php if (get_field('price_repeater')) : ?>
                            <div class="insurance-repeater show-on-scroll slide-up" style="transition-delay: 0.1s;">
                                <p class="title">
                                    <?php the_field('price_title'); ?>
                                </p>
                                <div class="row">
                                    <?php while (the_repeater_field('price_repeater')) : ?>
                                        <div class="display_flex">
                                            <p class="text first"><?php the_sub_field('text'); ?></p>
                                            <p class="text"><?php the_sub_field('basic'); ?></p>
                                            <p class="text"><?php the_sub_field('premiun'); ?></p>
                                        </div>
                                    <?php endwhile; ?>

                                </div>
                            </div>
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
    <h2 class="no-font">Insurance</h2>
    <h3 class="no-font">Insurance</h3>



</main>



<?php get_footer(); ?>