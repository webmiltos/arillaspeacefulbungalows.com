<!DOCTYPE html>
<html <?php language_attributes(); ?> class="html-wrapper">

<head>
	<?php echo get_field("google_tag_manager_head", "options"); ?>

	<meta charset="<?php bloginfo('charset'); ?>" />
	<?php
	if (isset($_SERVER['HTTP_USER_AGENT']) && (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false)) {
		echo ('<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">');
	} ?>

	<title><?php wp_title(''); ?></title>

	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<link rel="canonical" href="<?php echo esc_url(home_url('/')); ?>" />


	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
	<link href='https://unpkg.com/css.gg@2.0.0/icons/css/arrow-right-o.css' rel='stylesheet'>

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&family=Varta:wght@300..700&display=swap" rel="stylesheet">


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

	<?php echo get_field("google_tag_manager_body", "options"); ?>

	<!-- Google Analytics end -->

	<?php get_template_part('custom-header'); ?>

	<?php get_template_part('mobile-header'); ?>