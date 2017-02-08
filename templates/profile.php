<?php
/* Template Name: Attorney Profile */
?>
<?php get_header(); ?>
<div class="page-content clearfix">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="container">
            <div class="picture column">
                <img src="<?php the_field('profile_picture'); ?>" alt=""/>
            </div>
            <div class="content column">
                <h1><?php the_title(); ?></h1>
                <img class="mobile-only" src="<?php the_field('profile_picture'); ?>"/>
                <?php the_content(); ?>
            </div>
        </div>
    <?php endwhile;
    else : ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>
</div>
<?php get_footer(); ?>
