<?php
/* Template Name: Practice Areas */
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
        <?php wp_nav_menu(['theme_location'=>'practice_areas_menu','menu_id'=>'pa-nav']); ?>
      </div>
    <?php endwhile;
    else : ?>
      <p class="error">We cannot find the content you are looking for. Please <a href="<?= get_home_url(); ?>">click here</a> to return to the homepage. We apologize for any inconvenience.</p>
    <?php endif; ?>
</div>
<?php get_footer(); ?>
