<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="Content-Style-Type" content="text/css">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1" />
	<meta name = "format-detection" content = "telephone=no">
<?php wp_head(); ?>

</head>
	<body <?php body_class(); ?> >
	    <!-- HEADER -->
		<header>
            <div class="logo">
                <a href="<?= get_home_url(); ?>"><img class="img-responsive center-block" src="<?= get_stylesheet_directory_uri(); ?>/images/mathewgeorge-logo.svg" alt=""/></a>
            </div>
            <?php wp_nav_menu(['theme_location' => 'main_menu', 'menu_id' => 'menu-header']); ?>
            <div class="phone">
                <a href="tel:+18882787878">888.278.7878</a>
                <span>Free Consultations</span>
            </div>
            <div class="menu-toggle">
                Menu Toggle
            </div>
		</header>

        <!-- BANNER -->
        <section class="banner">
            <?php if (is_page('home')) { ?>
                <div class="video"></div>
            <?php } ?>
            <div class="title"><?php the_field('banner_title','option'); ?></div>
            <?php if (is_page('home')) { ?>
                <div class="tagline"><?php the_field('banner_tagline', 'option'); ?></div>
            <?php } ?>
            <a href="#">Request a <span>free</span> consultation</a>
            <?php if (is_page('home')) { ?>
                <a class="scroll" href="#">Scroll Down</div>
            <?php } ?>
        </section>