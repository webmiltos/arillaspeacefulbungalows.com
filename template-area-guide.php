<?php /* Template Name: Area Guide-Template */ ?>

<?php get_header(); ?>
<main class="site-content area-guide-page">

    <?php
    $image = get_field('intro_image');
    if (!empty($image)) : ?>
        <section class="intro-section" style="background-image: url(<?php echo $image['url']; ?>); background-size: cover;  background-repeat: no-repeat; filter: brightness(.9); background-position: 35% 75%;">
            <div class="container show-on-scroll slide-left">
                <span class="pretitle"><?php _e('About Us', 'gocreations'); ?></span>
                <h1 class="title white extra-large bold"><?php the_field('intro_title'); ?></h1>
                <p class="content white"><?php the_field('intro_text'); ?></p>
            </div>
        </section>
    <?php endif; ?>


    <section class="explore-section container show-on-scroll slide-down" style="transition-delay: 1.2s;">
        <?php if (have_rows('explore_corfu_repeater')) : ?>
            <?php
            while (have_rows('explore_corfu_repeater')) : the_row(); ?>
                <div class="explore-row">
                    <div class="content-top">
                        <span class="pretitle"><?php the_sub_field('pretitle'); ?></span>
                        <p class="title extra-large margin-bottom">
                            <?php the_sub_field('title'); ?>
                        </p>
                        <div class="content">
                            <?php the_sub_field('text', false, false); ?>
                        </div>
                    </div>

                    <div class="content-bottom">
                        <?php $counter = 1; ?>
                        <?php if (have_rows('items_repeater')) : ?>
                            <?php while (have_rows('items_repeater')) : the_row(); ?>
                                <div class="container flex <?php echo $counter % 2 === 0 ? ' reverse' : '' ?>">
                                    <div class="content-left">
                                        <p class="title extra-large margin-bottom"><?php the_sub_field('title'); ?> </p>
                                        <div class="text"><?php the_sub_field('text'); ?></div>
                                    </div>
                                    <div class="content-right">
                                        <div class="image-wrapper">
                                            <?php $image = get_sub_field('image');
                                            if (!empty($image)) : ?>
                                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <?php $counter = $counter + 1; ?>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </section>

</main>
<?php get_footer(); ?>