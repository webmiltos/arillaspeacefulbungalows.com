<?php get_header(); ?>

<main class="site-content single-post-page">

    <section class="hero-slider-row show-on-scroll slide-up" style="transition-delay: 0.2s;">
        <?php
        $image = get_field('intro_image');
        if (!empty($image)) : ?>
            <img class="image" src="<?php echo $image['url']; ?>" alt="" />
        <?php endif; ?>
        <div class="hero-slider-content">
            <div class="content-wrap container">
                <span class="text white "><?php echo get_the_date('d M Y'); ?></span>
                <h1 class="hero-title title large white bold"><?php the_title(); ?></h1>
                <p class="text white"><?php the_field('intro_text', false, false); ?></p>
            </div>
        </div>

        <?php
        /*
        $post_tags = get_the_tags();
        if (!empty($post_tags)) {
        ?>
            <div class="tags-frame">
                <div class="tags-wrapper">
                    <div class="tags-title">
                        <?php _e('Tags: ', 'gocreations'); ?>
                    </div>
                    <?php foreach ($post_tags as $post_tag) { ?>
                        <div class="single-tag-wrap">
                            <a href="<?php echo get_tag_link($post_tag) ?>">
                                <?php echo $post_tag->name ?>
                            </a>
                            <span class="sep"><?php _e('/'); ?></span>
                        </div>
                    <?php } ?>

                </div>
            </div>
        <?php }
        */ ?>
    </section>


    <section class="post-content-section small-container show-on-scroll slide-up" style="transition-delay: 0.6s;">
        <div class="content-left">
            <div id="h1-section" class="hide"></div>
            <span class="text"><?php the_field('main_content'); ?></span>
            <?php get_the_content(); ?>
        </div>

        <div class="content-right sidebar">
            <div class="sidebar-box author-section show-on-scroll slide-up" style="transition-delay: 0.7s;">
                <div class="author-wrap">
                    <div class="author-name-image-wrap">
                        <?php if ($avatar = get_avatar(get_the_author_meta('ID'), 32) !== FALSE) : ?>
                            <?php echo get_avatar(get_the_author_meta('ID'), 32); ?>
                        <?php else : ?>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/avatar.png" alt="avatar">
                        <?php endif; ?>
                        <div class="author">
                            <span class="text bold"> <?php _e('Author', 'gocreations'); ?></span>
                            <span class="name text"><?php echo get_the_author_meta('display_name'); ?></span>
                        </div>
                    </div>
                    <div class="line"></div>
                    <div class="text-wrap">
                        <p class="text white"><?php the_field('author_text', 'options'); ?></p>
                    </div>
                    <div class="share-wrapper">
                        <div class="share-wrap">
                            <span class="share text main-color"><?php _e('Share', 'gocreations'); ?>
                                <div class="share-icon"></div>
                            </span>

                            <div class="share-social-wrap">

                                <div class="share-items">
                                    <div class="single-social-share copylink" onclick="copyLink()">
                                        <span class="icon-copy"></span>
                                        <div id="copied-text" class="text main-color">Link Copied!</div>
                                    </div>
                                    <a class="single-social-share" href="http://www.facebook.com/sharer.php?u=<?php the_permalink() ?>" target="_blank">
                                        <div class="facebook-icon"></div>
                                    </a>
                                    </a>
                                    <a class="single-social-share" href="mailto:?Subject=mcns5g | <?php the_title(); ?> &amp;Body=<?php the_permalink() ?>">
                                        <div class="email-icon"></div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="share-wrap">

                            <div class="share-social-wrap">
                                <?php if (!empty(get_the_author_meta('twitter'))) { ?>
                                    <a href="<?php the_author_meta('twitter'); ?>" title="Twitter" target="_blank" id="twitter">
                                        <span class="icon-x"></span>
                                    </a>
                                <?php } ?>

                                <?php if (!empty(get_the_author_meta('facebook'))) { ?>
                                    <a href="<?php the_author_meta('facebook'); ?>" title="Twitter" target="_blank" id="twitter">
                                        <span class="icon-facebook-icon"></span>
                                    </a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="sidebar-box">
                <p class="title">Related Articles</p>

                <div class="related-post-wrapper">
                    <?php

                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 3,
                        'post_status' => 'publish',
                    );

                    $query = new WP_Query($args);

                    if ($query->have_posts()) {
                        while ($query->have_posts()) {
                            $query->the_post(); ?>

                            <a href="<?php the_permalink(''); ?>">
                                <div class="post-wrapper show-on-scroll slide-right" style="transition-delay: 0.2s;">
                                    <div class="image-wrap">
                                        <?php $image = get_field('intro_image');
                                        if (!empty($image)) : ?>
                                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                        <?php endif; ?>
                                        <div class="icon">
                                            <span class="icon-yellow-arrow blue"></span>
                                        </div>
                                    </div>
                                    <div class="texts-wrap">
                                        <p class="text main-color small"><?php the_date('d.m.Y'); ?></p>
                                        <h3 class="title"><?php the_title(''); ?></h3>
                                        <p class="excerpt"><?php the_field('intro_text', false, false); ?></p>
                                    </div>
                                </div>
                            </a>
                            <?php $i = $i + 1; ?>
                    <?php   }
                        wp_reset_postdata();
                    } else {
                        // No posts found
                    }
                    ?>
                </div>
            </div>


            <div class="sidebar-box blue">
                <p class="text white bold medium"><?php the_field('single_post_book_now_title', 'options'); ?></p>
                <p class="text white"><?php the_field('single_post_book_now_text', 'options', false, false); ?></p>
                <a href="<?php the_field('reservations_link', 'options'); ?>" class="button border">
                    Book Now
                    <span class="icon-yellow-arrow"></span>
                </a>
            </div>
    </section>


    <span class="valid"></span>

    <section class="faqs-section paddings">
        <div class="small-container flex">
            <div class="post-faqs">
                <?php
                if (get_field('faqs_repeater')) : ?>
                    <?php while (the_repeater_field('faqs_repeater')) : ?>
                        <div class="single-faq show-on-scroll slide-down" data-role="collapsiblese">
                            <span class="circle"></span>
                            <div data-role="main" class="ui-content">
                                <div data-role="collapsible" class="collapse-data">
                                    <div class="faq-content">
                                        <span class="circle"></span>
                                        <h3 class="text medium-large bold question">
                                            <?php the_sub_field('question'); ?>
                                        </h3>
                                        <div class="content answer">
                                            <?php the_sub_field('answer'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>




    <?php /* get_template_part('template-parts/blog-popup'); */ ?>




    <!-- <div class="more_posts">
        <div class="random_posts">
            <span class="pretitle"><?php _e('Blog'); ?></span>
            <h3 class="more_posts_title"><?php _e('Read Also'); ?></h3>

            <div class="posts_wrapper">
                <?php
                $current_post_id = get_the_ID();

                $my_query = new WP_Query(array(
                    'orderby' => 'rand',
                    'posts_per_page' => 3,
                    'post__not_in' => array($current_post_id)
                ));
                while ($my_query->have_posts()) : $my_query->the_post();
                    $post_title = get_the_title();
                    $post_date = get_the_date();
                    $blog_text = get_field('main_content');
                    $post_image = get_field('post_image');
                    $post_tags = get_the_tags(); ?>

                    <div class="single_post_archived show-on-scroll slide-up" <?php echo ($my_query->found_posts <= 2) ?: '' ?>>
                        <div class="image_wrapper">

                            <div class="single-post-info">
                                <a href="<?php the_permalink(); ?>" title="">
                                    <h4 class="title"><?php the_title(); ?></h4>
                                </a>

                                <span class="text"><?php echo wp_trim_words($blog_text, 10, '...'); ?></span>
                            </div>

                            <a class="single_post" href="<?php the_permalink(); ?>">
                                <?php if ($post_image) : ?>
                                    <img class="image" src="<?php echo $post_image['url']; ?>" alt="<?php echo $post_image['alt']; ?>">
                                <?php endif; ?>
                                <div class="date_wrap">
                                    <span class="post-date"><?php echo get_the_date('d m Y'); ?></span>
                                </div>
                            </a>
                            <div class="tags_wrapper">
                                <?php foreach ($post_tags as $post_tag) { ?>
                                    <div class="single-tag-wrap">
                                        <a href="?tag=<?php echo $post_tag->slug ?>">
                                            <?php echo $post_tag->name ?>
                                        </a>
                                        <span class="sep">,</span>
                                    </div>
                                <?php } ?>
                            </div>

                        </div>

                        <a class="shadowBtn" href="<?php the_permalink(); ?>" title="read">
                            <?php esc_html_e('READ MORE', 'gocreations') ?>
                        </a>

                    </div>

                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            </div>

        </div>

    </div> -->


</main>



<?php get_footer(); ?>


<script type="text/javascript">
    // copy link functionality
    function copyLink() {
        var copiedText = document.getElementById("copied-text");
        var pageUrl = window.location.href;

        navigator.clipboard.writeText(pageUrl)
            .then(function() {
                copiedText.style.display = "block";
                setTimeout(function() {
                    copiedText.style.display = "none";
                }, 2000);
            })
            .catch(function() {
                console.error("Unable to copy text");
            });
    }
</script>