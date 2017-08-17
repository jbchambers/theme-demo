<?php get_header(); ?>
<div class="page-content clearfix">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="main-content column">
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
        </div>
        <div class="sidebar column">
            Sidebar
        </div>
    <?php endwhile;
    else : ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>
</div>
<?php get_footer(); ?>
