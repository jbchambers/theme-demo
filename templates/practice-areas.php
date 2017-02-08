<?php
/* Template Name: Practice Areas */
?>
<?php get_header(); ?>
<div class="page-content clearfix">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="container">
           <div class="column">
               <h1><?php the_title(); ?></h1>
               <?php wp_nav_menu(['menu' => 'Practice Areas']); ?>
           </div>
        </div>
    <?php endwhile;
    else : ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>
</div>
<?php get_footer(); ?>
