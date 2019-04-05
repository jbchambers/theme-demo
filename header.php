<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="Content-Style-Type" content="text/css">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1"/>
  <meta name="format-detection" content="telephone=no">
  <?php wp_head(); ?>

</head>
<body <?php body_class(); ?> >

<!-- HEADER -->
<header>
  <div class="header-logo">
    <a href="<?= get_home_url(); ?>"><img src="<?= get_stylesheet_directory_uri(); ?>/img/logo.png"/></a>
  </div>
  <div class="header-phone">
    <?php if (get_field('header_phone_number')) { ?>
      <a href="tel:+1<?php the_field('header_phone_number_text'); ?>"><?php the_field('header_phone_number'); ?></a>
    <?php } else { ?>
      <a href="tel:+1868920285">(866) 892-0285</a>
    <?php } ?>

  </div>
  <div class="menu-toggle">
    <div class="title">menu</div>
    <i></i><i></i><i></i>
  </div>
  <nav class="main-nav">
    <?php wp_nav_menu(['menu' => 'Main Menu']); ?>
  </nav>
</header>

<!-- BANNER -->
<section class="banner <?php if (is_page('home')) echo "banner-home"; ?>">
  <div class="wrap">
    <?php if (is_page('home')) { ?>
      <div class="caption"><?php the_field('banner_caption', 'option'); ?></div>
    <?php } ?>
    <div class="title"><?php the_field('banner_title', 'option'); ?></div>
    <a href="<?php the_field('banner_button_url', 'option'); ?>"><?php the_field('banner_button_text', 'option'); ?></a>

  </div>
</section>
<a class="mobile-btn" href="<?php the_field('banner_button_url', 'option'); ?>"><?php the_field('banner_button_text', 'option'); ?></a>
<?php if (is_page('home')) { ?>
<div class="banner-title-alt"><?php the_field('banner_title', 'option'); ?></div>
<a class="banner-btn-alt"
   href="<?php the_field('banner_button_url', 'option'); ?>"><?php the_field('banner_button_text', 'option'); ?></a>
<?php } ?>