<?php
/* Template Name: Contact */
?>
<?php get_header(); ?>
<div class="page-content clearfix">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php
    if ( function_exists('yoast_breadcrumb') ) {
      yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
    }
    ?>
    <div class="container">
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>
      <?php if (get_field('header_phone_number')) { ?>
        <h2>Give us a call at <a href="tel:+1<?php the_field('header_phone_number_text'); ?><"><?php the_field('header_phone_number'); ?></a></h2>
      <?php } else { ?>
      <h2>Give us a call at  <a href="tel:+1868920285">(866) 892-0285</a></h2>
      <?php } ?>
    </div>
  <?php endwhile;
  else : ?>
    <p class="error">We cannot find the content you are looking for. Please <a href="<?= get_home_url(); ?>">click here</a> to return to the homepage. We apologize for any inconvenience.</p>
  <?php endif; ?>
</div>
<?php get_footer(); ?>
