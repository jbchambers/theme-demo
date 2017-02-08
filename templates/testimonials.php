<?php
/* Template Name: Testimonials */
?>
<?php get_header(); ?>
<div class="page-content clearfix">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="container">
            <h1><?php the_title(); ?></h1>
            <?php if (have_rows('testimonials')) : ?>
                <?php while (have_rows('testimonials')) : the_row(); ?>
                    <div class="testimonial">
                        <div class="tagline">
                            <?php the_sub_field('tagline'); ?>
                        </div>
                        <div class="quote">
                            <?php the_sub_field('quote'); ?>
                        </div>
                        <div class="client">
                            <?php the_sub_field('client'); ?>
                        </div>
                        <div class="source">
                            <?php the_sub_field('source'); ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else : ?>
                <?php // no rows found ?>
            <?php endif; ?>
        </div>
    <?php endwhile;
    else : ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>
</div>
<?php get_footer(); ?>
