<?php /* Template Name: Gallery-Template */ ?>

<?php get_header(); ?>

<main class="site-content gallery-page">

    <section class="intro-section">
        <div class="container center">
            <h1 class="title large main-color show-on-scroll slide-up" style="transition-delay: 0.1s;"><?php the_field('intro_title'); ?></h1>
            <h2 class="no-font title large bold uppercase show-on-scroll slide-up"><?php the_field('intro_title'); ?></h2>
            <p class="text subtext main-color margin-bottom show-on-scroll slide-up"><?php the_field('intro_text'); ?></p>
        </div>
    </section>

    <section class="gallery-section">
        <?php if (have_rows('gallery_repeater')) : ?>

            <div class="gallery-tab-links show-on-scroll slide-up">
                <div class="flex-wrap">
                    <?php while (have_rows('gallery_repeater')) : the_row(); ?>
                        <?php if (!get_sub_field('title')) continue; ?>
                        <h3 class="tab-link gallery-tab-link<?php echo (get_row_index() === 1) ? ' active' : null; ?>" data-id="<?php echo get_row_index(); ?>">
                            <?php the_sub_field('title'); ?>
                        </h3>
                    <?php endwhile; ?>
                </div>
            </div>

            <div class="gallery-tabs-wrapper-g">
                <?php while (have_rows('gallery_repeater')) : the_row(); ?>

                    <div class="gallery-wrap-page<?php echo (get_row_index() === 1) ? ' active' : null; ?>" data-id="<?php echo get_row_index(); ?>">
                        <?php
                        $images = get_sub_field('gallery');
                        if ($images): ?>
                            <ul>
                                <?php foreach ($images as $image): ?>
                                    <li class="show-on-scroll slide-up">
                                        <div data-fancybox="gallery-image-mm" class="gallery-image" href="<?php echo $image['url']; ?>" style="background-image:url('<?php echo $image['sizes']['medium_large']; ?>'); background-size: cover; background-position: center center;">
                                        </div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>

                    </div> <?php // single-tab 
                            ?>

                <?php endwhile; ?>
            </div>
        <?php endif; ?>

    </section>




    <h3 class="no-font">Terms</h3>
</main>

<?php get_footer(); ?>