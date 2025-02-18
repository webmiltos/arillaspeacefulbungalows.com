<?php /* Template Name: Template - Blog */ ?>


<?php get_header(); ?>

<main class="site-content locations-archive-page">

    <?php
    $image = get_field('intro_image');
    if (!empty($image)) : ?>
        <section class="intro-section" style="background-image: url(<?php echo $image['url']; ?>); background-size: cover;  background-repeat: no-repeat; filter: brightness(.9); background-position: 35% 75%;">
            <div class="container show-on-scroll slide-left">
                <h1 class="title white extra-large bold"><?php the_field('intro_title'); ?></h1>
                <p class="content white"><?php the_field('intro_text'); ?></p>
            </div>
        </section>
    <?php endif; ?>

    <h3 class="no-font"><?php _e('Our Blog', 'gocreations'); ?></h3>


    <section class="blog-post-archive">
        <div class="container">
            <?php
            $args = array(
                'post_type'      => 'post',
                'post_status'    => 'publish',
                'posts_per_page' => -1,
                'order'          => 'DESC',
            );

            $query = new WP_Query($args);

            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
            ?>
                    <div class="item-wrapper">
                        <a href="<?php the_permalink(); ?>">
                            <div class="image-wrap">
                                <?php $image = get_field('intro_image');
                                if (!empty($image)) : ?>
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                <?php endif; ?>

                                <a href="<?php the_permalink(); ?>" class="button white">
                                    <?php _e('Learn More', 'gocreations'); ?>
                                    <span class="icon-yellow-arrow blue"></span>
                                </a>
                            </div>
                        </a>
                        <div class="texts-wrap">
                            <p class="text small main-color"><?php echo get_the_date('F j, Y'); ?></p>
                            <a href="<?php the_permalink(); ?>">
                                <h2 class="title small-medium bold"><?php the_title(); ?></h2>
                            </a>
                            <p><?php the_field('intro_text'); ?></p>
                        </div>
                    </div>

            <?php
                }
                wp_reset_postdata();
            }
            ?>
    </section>

</main>

<?php get_footer(); ?>