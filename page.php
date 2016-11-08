<?php get_header();?>
<div class="page-content clearfix">
    <div class="container">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="row">

                <div class="col-md-9 col-md-push-4">
                    <h1><?php the_title();?></h1>
                    <?php the_content();?>
                </div>
                <div class="col-md-3 col-md-pull-9 sidebar">
                    <?php wp_nav_menu(['menu' => 'Practice Areas']); ?>
                </div>
            </div>
        <?php endwhile; else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>
    </div>
</div>
<?php get_footer();?>