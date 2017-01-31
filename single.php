<?php get_header(); ?>
    <div class="page-content clearfix">
        <div class="container">
            <div class="main-content column">

                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <h1><?php the_title(); ?></h1>
                    <?php the_content(); ?>

                <?php endwhile;
                else : ?>
                    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                <?php endif; ?>

            </div>
            <div class="sidebar column">
                <?php dynamic_sidebar('sidebar'); ?>
            </div>
        </div>
    </div>
<?php get_footer(); ?>