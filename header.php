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
		
		<header>
            <div class="top">
                <div class="logo">
                    <a href="<?= get_home_url(); ?>"><img class="img-responsive center-block" src="<?= get_stylesheet_directory_uri(); ?>/images/logo.svg" alt=""/></a>
                </div>
                <div class="phone">
                    <a href="tel:+15555555555">555.555.5555</a>
                </div>
                <div class="menu-toggle">
                    Menu Toggle
                </div>
            </div>
            <?php wp_nav_menu(['theme_location' => 'main_menu', 'menu_id' => 'menu-header']); ?>
		</header>
        <!-- BANNER -->
        <section class="banner">
            <div class="container">
                <div class="title"><?php the_field('banner_title','option'); ?></div>
                <?php if (is_page('home')) { ?>
                    <div class="tagline"><?php the_field('banner_tagline', 'option'); ?></div>
                <?php } ?>
                <?php if (!is_page('home')) { ?>
                    <a class="btn" href="#form">Get Your Free Consultation</a>
                <?php } ?>
                <?php if (is_page('home')) { ?>
                    <div class="form">
                        <div class="title">Request Your Free Consultation</div>
                        <?php gravity_form(1, false, true, false, null, false); ?>
                    </div>
                    <a class="scroll animated infinite bounce" href="#more">Scroll Down</a>
                <?php } ?>
            </div>
        </section>