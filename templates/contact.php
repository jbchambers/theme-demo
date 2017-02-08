<?php
/* Template Name: Contact */
?>
<?php get_header(); ?>
<div class="page-content clearfix">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>


        <div class="container">
            <div class="main-content column">
                <h1><?php the_title(); ?></h1>
                <?php if (have_rows('offices','option')) : ?>
                    <?php while (have_rows('offices', 'option')) : the_row(); ?>
                        <div class="office">
                            <div class="info">
                                <div class="title">
                                    <?php the_sub_field('title'); ?>
                                </div>
                                <div class="address">
                                    <?php the_sub_field('address'); ?>
                                </div>
                                <a class="phone" href="tel:+1<?php the_sub_field('phone_number_unstyled'); ?>"><?php the_sub_field('phone_number_styled'); ?></a>
                                <a class="directions" href="<?php the_sub_field('directions_url'); ?>" target="_blank">Directions</a>
                            </div>
                            <div class="map">
                                <div class='embed-container'>
                                    <?php the_sub_field('embed_code'); ?>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php else : ?>
                    <?php // no rows found ?>
                <?php endif; ?>
            </div>
        </div>

    <?php endwhile;
    else : ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>
</div>
<?php get_footer(); ?>
