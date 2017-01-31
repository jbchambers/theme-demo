<?php get_header(); ?>
<div class="page-content clearfix">
    <div class="container">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="main-content column">
                <h1><?php the_title(); ?></h1>
                <?php if (get_field('page_intro')) { ?>
                    <div class="page-intro">
                        <?php the_field('page_intro'); ?>
                    </div>
                <?php } ?>
                <?php the_content(); ?>
            </div>
            <div class="sidebar column">
                <div class="title">Practice Areas</div>
                <?php wp_nav_menu(['menu' => 'Practice Areas']); ?>
            </div>
        <?php endwhile;
        else : ?>
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>
    </div>
</div>
<?php get_footer(); ?>
