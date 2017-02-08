<?php
/* Template Name: Success Stories */
?>
<?php get_header(); ?>
<div class="page-content clearfix">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="main-content column">
            <h1><?php the_title(); ?></h1>
            <?php if (have_rows('success_stories')) : ?>
                <?php while (have_rows('success_stories')) : the_row(); ?>
                    <div class="item">
                        <div class="amount">
                            <?php the_sub_field('amount'); ?>
                        </div>
                        <div class="case-type">
                            <?php the_sub_field('case_type'); ?>
                        </div>
                        <div class="description">
                            <?php the_sub_field('description'); ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else : ?>
                <?php // no rows found ?>
            <?php endif; ?>
        </div>
        <div class="sidebar column">
            <div class="menu-wrap">
                <?php wp_nav_menu(['menu' => 'Practice Areas']); ?>
            </div>
        </div>
    <?php endwhile;
    else : ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>
</div>
<?php get_footer(); ?>
