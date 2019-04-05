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

            <?php if (get_field('related_links')) { ?>
            <h3>Related Links</h3>
              <div class="widget related-links">
                <ul>
                  <?php if( have_rows('related_links') ): while( have_rows('related_links') ): the_row(); ?>
                    <li><?php
                      $post_object = get_sub_field('page');
                      if( $post_object ):
                        $post = $post_object;
                        setup_postdata( $post );
                        ?>
                        <a href="<?= get_permalink(); ?>"><?php the_title(); ?></a>
                        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                      <?php endif; ?></li>
                  <?php endwhile;  endif; ?>
                </ul>
              </div>
            <?php } ?>

            <h3>Practice Areas</h3>
            <div class="widget">
              <?php wp_nav_menu(['menu'=>'Sidebar Menu']); ?>
            </div>
            <h3>Latest News</h3>
            <div class="widget">
              <?php // WP_Query arguments
              $args = array(
                'post_type'              => array( 'post' ),
                'post_status'            => array( 'publish' ),
                'posts_per_page'         => '1',
                'order'                  => 'DESC',
              );

              // The Query
              $home_posts = new WP_Query( $args );

              // The Loop
              if ( $home_posts->have_posts() ) {
                while ( $home_posts->have_posts() ) {
                  $home_posts->the_post();?>
                  <div class="item">
                    <div class="title"><?php the_title(); ?></div>
                    <div class="excerpt"><?php the_excerpt(); ?></div>
                    <a class="more" href="<?php the_permalink(); ?>">Read More</a>
                  </div>
                <?php }
              } else {
                // no posts found
              }

              // Restore original Post Data
              wp_reset_postdata(); ?>
            </div>
            <h3>Free Consultation</h3>
            <div class="widget phone">
              <?php if (get_field('header_phone_number')) { ?>
                <a href="tel:+1<?php the_field('header_phone_number_text'); ?><"><?php the_field('header_phone_number'); ?></a>
              <?php } else { ?>
                <a href="tel:+1868920285">(866) 892-0285</a>
              <?php } ?>
            </div>
        </aside>
    <?php endwhile;
    else : ?>
      <p class="error">We cannot find the content you are looking for. Please <a href="<?= get_home_url(); ?>">click here</a> to return to the homepage. We apologize for any inconvenience.</p>
    <?php endif; ?>
</div>
<?php get_footer(); ?>
