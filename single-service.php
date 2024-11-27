<?php get_header(); ?>

<main class="site-content single-service-page">

    <?php if (get_field('service_items_repeater')) : ?>
        <div class="top-sticky-menu show-on-scroll slide-up" style="transition-delay: 0.3s;">
            <?php while (the_repeater_field('service_items_repeater')) : ?>
                <a href="#<?php the_sub_field('id'); ?>" class="item-link" data-scroll-to="<?php the_sub_field('id'); ?>">
                    <p class="item-name show-on-scroll slide-up" style="transition-delay: 0.5s;"><?php the_sub_field('title'); ?></p>
                </a>
            <?php $i++;
            endwhile; ?>
        </div>
    <?php endif; ?>

    <section class="intro-section single-service show-on-scroll slide-up" style="transition-delay: 0.8s;">
        <h2 class="big-title">
            <span><?php the_title(); ?></span>
            <span><?php the_title(); ?></span>
            <span><?php the_title(); ?></span>
            <span><?php the_title(); ?></span>
            <span><?php the_title(); ?></span>
            <span><?php the_title(); ?></span>
            <span><?php the_title(); ?></span>
        </h2>

        <div class="container flex full padding">
            <div class="content-left padding">
                <span class="pretitle"> <?php the_field('pretitle'); ?>
                </span>
                <h1 class="main-title show-on-scroll slide-left" style="transition-delay: 1s;">
                    <?php the_field('intro_title'); ?>
                </h1>
                <?php the_field('intro_text', false); ?>
            </div>
            <div class="content-right show-on-scroll slide-up" style="transition-delay: 1.2s;">
                <div class="image-wrapper">
                    <?php
                    if (get_field('intro_image')) {
                        // Display the custom "intro_image" if it exists.
                        $intro_image = get_field('intro_image');
                        echo '<img src="' . esc_url($intro_image['url']) . '" alt="' . esc_attr($intro_image['alt']) . '" />';
                    } elseif (has_post_thumbnail()) {
                        // If "intro_image" doesn't exist, display the featured image.
                        $featured_image = get_the_post_thumbnail();
                        echo $featured_image;
                    }
                    ?>
                </div>
            </div>
        </div>


        <div class="container wide repeater">
            <?php $i = 1; ?>
            <?php $even = true; ?>
            <?php if (have_rows('service_items_repeater')) : ?>
                <?php while (have_rows('service_items_repeater')) : the_row(); ?>
                    <div id="<?php the_sub_field('id'); ?>" class="service-item scroll-item<?php echo $even ? '' : ' reverse'; ?> show-on-scroll slide-up" style="transition-delay: 0.6s;">
                        <div class="content-left">
                            <div class="image-wrapper">
                                <?php $image = get_sub_field('image');
                                if (!empty($image)) : ?>
                                    <img src="<?php echo esc_url($image['sizes']['medium_large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="content-right">
                            <p class="service-name title large main-color bold show-on-scroll slide-left" style="transition-delay: 0.8s;"><?php the_sub_field('title'); ?></p>
                            <div class="content-wrapper">
                                <div class="text-wrapper">
                                    <p class="text more-less">
                                        <?php
                                        $text = get_sub_field('text', false, false);
                                        $words = explode(' ', $text);
                                        $limited_text = implode(' ', array_slice($words, 0, 60)); ?>

                                        <?php echo $limited_text;
                                        if (count($words) > 60) {
                                        ?>
                                            <span class="more-text" style="display: none;"><?php echo implode(' ', array_slice($words, 20)); ?></span>
                                            <span class="show-more show-on-scroll slide-left" style="transition-delay: 1.2s;">Διαβάστε Περισσότερα</span>
                                            <span class="show-less" style="display: none;">Διαβάστε Λιγότερα</span>
                                        <?php
                                        }
                                        ?>
                                    </p>
                                </div>
                                <?php if (have_rows('colors_repeater')) : ?>
                                    <div class="colors-wrapper">
                                        <p class="text medium-large semi-bold available-colors">Διαθέσιμα Χρώματα</p>
                                        <p class="shell">Shell</p>
                                        <?php $i = 1;
                                        $totalColors = 0;
                                        ?>

                                        <?php
                                        $i = 1;
                                        $totalColors = 0;
                                        ?>

                                        <?php if (have_rows('colors_repeater')) : ?>
                                            <div class="colors-row">
                                                <div class="circles-items-wrap">
                                                    <?php while (have_rows('colors_repeater')) : the_row();
                                                        $color = get_sub_field('color_picker');
                                                        $text = get_sub_field('text');
                                                    ?>

                                                        <div class="color-text<?php echo $i > 6 ? ' hide' : ''; ?>">
                                                            <span class="circle" style="background-color: <?php echo $color; ?>;">
                                                                <span style="color: transparent;"></span>
                                                            </span>
                                                            <p><?php echo $text; ?></p>
                                                        </div>

                                                        <?php if ($i > 6) {
                                                            $totalColors++;
                                                        } ?>

                                                        <?php $i = $i + 1; ?>
                                                    <?php endwhile; ?>
                                                </div>
                                            <?php endif; ?>

                                            <?php if ($totalColors > 0) : ?>
                                                <div class="show-more">
                                                    <a href="#" class="show-more-link text alt-font">Περισσότερα Χρώματα</a>
                                                </div>
                                            <?php endif; ?>
                                            </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <?php $i = $i + 1; ?>
                    <?php $even = !$even; ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <div class="container wide video show-on-scroll slide-up" style="transition-delay: 0.6s;">
            <?php if (get_field('video')) : ?>
                <?php the_field('video'); ?>
            <?php endif; ?>
        </div>
    </section>

    <?php get_template_part('template-parts/steps-template'); ?>

</main>



<style>
    .single-service .custom-header.white {
        background: #fff;
    }
</style>



<script>
    jQuery(document).ready(function() {
        // Add a click event listener to menu items
        jQuery('.top-sticky-menu .item-name').on('click', function() {
            // Get the data-scroll-to attribute value
            var scrollTo = jQuery(this).data('scroll-to');

            // Scroll to the corresponding item in the second repeater with the class "scroll-item"
            jQuery('html, body').animate({
                scrollTop: jQuery('.scroll-item#' + scrollTo).offset().top
            }, 1000); // Adjust the duration as needed
        });
    });


    // JavaScript to handle show more/less functionality

    jQuery(document).ready(function() {
        jQuery(".show-more").click(function() {
            jQuery(this).siblings(".more-text").show();
            jQuery(this).hide();
            jQuery(this).siblings(".show-less").show();
        });

        jQuery(".show-less").click(function() {
            jQuery(this).siblings(".more-text").hide();
            jQuery(this).hide();
            jQuery(this).siblings(".show-more").show();
        });
    });
</script>



<?php get_footer(); ?>