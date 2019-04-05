<?php
/* Template Name: Attorney Page */
?>
<?php get_header(); ?>
<div class="page-content clearfix">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <?php
      if ( function_exists('yoast_breadcrumb') ) {
        yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
      }
      ?>
      <h1><?php the_title(); ?></h1>
        <div class="main-content column">
          <?php the_content(); ?>
        </div>
        <aside class="sidebar column">
            <h3>The Team</h3>
            <?php // WP_Query arguments
            $args = array(
              'post_parent'            => 1389,
              'post_type'              => array( 'page' ),
              'order'                  => 'ASC',
              'orderby'                => 'menu_order',
            );

            // The Query
            $attorneys = new WP_Query( $args );

            // The Loop
            if ( $attorneys->have_posts() ) {
              while ( $attorneys->have_posts() ) {
                $attorneys->the_post(); ?>
                <div class="attorney">
                  <a href="<?= get_permalink(); ?>">
                    <img src="<?php the_field('attorney_image'); ?>"/>
                    <span class="name"><?php the_title(); ?></span>
                  </a>
                </div>
              <?php }
            } else {
              // no posts found
            }

            // Restore original Post Data
            wp_reset_postdata(); ?>
        </aside>
    <?php endwhile;
    else : ?>
        <p class="error">We cannot find the content you are looking for. Please <a href="<?= get_home_url(); ?>">click here</a> to return to the homepage. We apologize for any inconvenience.</p>
    <?php endif; ?>
</div>
<?php get_footer(); ?>
