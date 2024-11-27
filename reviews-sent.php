<?php /* Template Name: Review Sent-Template */ ?>

<?php get_header(); ?>

<main class="site-content">
    <div class="container reviewSubmitted">
        <div class="customGrid reviewPageHeader">
            <div class="smallGrid">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logoWrap">
                    <?php $image = get_field('reviews_page_logo','options');
                        if( !empty($image) ): ?>
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>"/>
                    <?php endif; ?>
                </a>
            </div>
        </div>

        <div class="customGrid">
            <div class="successReviewBox">
                <span class="pretitle"><?php the_field('pretitle_success','options'); ?></span>
                <h1><?php the_field('title_success','options'); ?></h1>
                <?php the_field('content_success','options'); ?>
                <a class="roundedBtn" href="<?php the_field('button_link_success','options'); ?>"><?php the_field('button_title_success','options'); ?></a>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>

<script>

jQuery(".custom-footer , .footerSearchform, .customFooter .infoTop, .footerLogo, .custom-header").remove();

</script>
