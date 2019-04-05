<?php
/* Template Name: Home Page */
?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <!-- ICONS -->
  <section class="icons">
    <?php if( have_rows('icons') ): while( have_rows('icons') ): the_row(); ?>
      <div class="item">
        <img src="<?php the_sub_field('image'); ?>"/>
        <div class="title"><?php the_sub_field('title'); ?></div>
        <div class="tagline"><?php the_sub_field('tagline'); ?></div>
        <a href="<?php the_sub_field('button_link'); ?>"><?php the_sub_field('button_text'); ?></a>
      </div>
    <?php endwhile;  endif; ?>
  </section>

  <!-- ABOUT -->
  <section class="about">
    <div class="container">
      <h1 class="title"><?php the_field('about_title'); ?></h1>
      <div class="content"><?php the_field('about_content'); ?></div>
    </div>
  </section>

  <!-- AWARDS -->
  <section id="awards" class="awards">
    <div class="wrap">
      <?php if( have_rows('awards') ): while( have_rows('awards') ): the_row(); ?>
        <div class="item <?php if (get_sub_field('text')) { ?>text
        <?php } ?>">
          <?php if (get_sub_field('image')) { ?>
            <img src="<?php the_sub_field('image'); ?>"/>
          <?php } else { ?>
            <div class="title"><?php the_sub_field('text'); ?></div>
          <?php } ?>
        </div>
      <?php endwhile;  endif; ?>
    </div>
  </section>

  <!-- SELLING POINTS -->
  <section class="selling-points">
    <div class="intro">
      <div class="image column" style="background: url('<?php the_field('selling_points_image'); ?>') center center / cover no-repeat;"></div>
      <div class="section-title column"><span><?php the_field('selling_points_title'); ?></span></div>
    </div>
    <div class="info">
      <?php if( have_rows('selling_points') ): while( have_rows('selling_points') ): the_row(); ?>
        <div class="item">
          <div class="column left">
            <div class="number"><?php the_sub_field('number'); ?></div>
            <div class="title"><?php the_sub_field('title'); ?></div>
          </div>
          <div class="column right">
            <?php the_sub_field('content'); ?>
          </div>
        </div>
      <?php endwhile;  endif; ?>
    </div>
  </section>

  <!-- TESTIMONIALS -->
  <section class="testimonials">
    <div class="wrap">
      <div class="title"><?php the_field('testimonials_title'); ?></div>
    </div>
    <div class="testimonials-carousel">
      <?php if( have_rows('testimonials') ): while( have_rows('testimonials') ): the_row(); ?>
        <div class="item">
          <div class="content">
            <div class="quote"><?php the_sub_field('quote'); ?></div>
            <div class="source"><?php the_sub_field('source'); ?></div>
          </div>
        </div>
      <?php endwhile;  endif; ?>
    </div>
  </section>

  <!-- TEAM -->
  <section id="team" class="team">

    <div class="column left">
      <div class="toggles">
        <div class="item">
          <div class="section-title">Meet the Team</div>
        </div>
        <?php $i = 0; if( have_rows('team') ): while( have_rows('team') ): the_row(); ?>
          <div class="item" id="team-toggle-<?= $i; ?>">
            <img src="<?php the_sub_field('image'); ?>"/>
          </div>
        <?php $i++; endwhile;  endif; ?>
      </div>
    </div>
    <div class="column right team-carousel">
      <?php $i = 0; if( have_rows('team') ): while( have_rows('team') ): the_row(); ?>
        <div class="bio" id="team-bio-<?= $i; ?>">
          <img class="image" src="<?php the_sub_field('image'); ?>"/>
          <div class="name"><?php the_sub_field('name'); ?></div>
          <div class="content"><?php the_sub_field('bio'); ?></div>
        </div>
      <?php $i++; endwhile;  endif; ?>
    </div>
  </section>

  <!-- NEWS -->
  <section class="news">
    <div class="wrap news-carousel">
      <?php // WP_Query arguments
      $args = array(
        'post_type'              => array( 'post' ),
        'post_status'            => array( 'publish' ),
        'posts_per_page'         => '4',
        'order'                  => 'DESC',
      );

      // The Query
      $home_posts = new WP_Query( $args );

      // The Loop
      if ( $home_posts->have_posts() ) {
        while ( $home_posts->have_posts() ) {
          $home_posts->the_post();?>
          <div class="item">
            <div class="intro">
              <div class="category"><?php the_category(); ?></div>
              <div class="title"><?php the_title(); ?></div>
            </div>
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
    <a class="btn" href="#">See More News</a>
  </section>

  <!-- PRACTICE AREAS -->
  <section class="practice-areas">
    <div class="wrap">
      <div class="column left">
        <div class="section-title"><?php the_field('practice_areas_title'); ?></div>
        <div class="tagline"><?php the_field('practice_areas_tagline'); ?></div>
        <div class="pa-toggles">
          <?php $i = 0;  if( have_rows('practice_areas') ): while( have_rows('practice_areas') ): the_row(); ?>
            <div class="item pa-title" id="pa-toggle-<?= $i; ?>">
              <?php the_sub_field('title'); ?>
            </div>
            <?php $i++; endwhile;  endif; ?>
        </div>
      </div>
      <div class="column right">
        <?php $i = 0; if( have_rows('practice_areas') ): while( have_rows('practice_areas') ): the_row(); ?>
          <div class="info" id="pa-info-<?= $i; ?>">
            <div class="info-wrap">
              <div class="title"><?php the_sub_field('title'); ?></div>
              <div class="content"><?php the_sub_field('content'); ?></div>
            </div>
          </div>
        <?php $i++; endwhile;  endif; ?>
      </div>
    </div>
  </section>

  <!-- CONTACT -->
  <section id="contact" class="contact">
    <div class="container">
      <div class="section-title"><?php the_field('contact_title'); ?></div>
      <div class="wrap">
        <div class="column left">
          <?php the_field('contact_left_column'); ?>
        </div>
        <div class="column right">
          <?php the_field('contact_right_column'); ?>
        </div>
      </div>
    </div>
  </section>


<?php endwhile; else : endif; ?>
<?php get_footer(); ?>

  <script type="text/javascript">
    jQuery('.bio:first-child').addClass('open');
    jQuery('.toggles .item:nth-child(2)').addClass('open');
    jQuery('.info:first-child').addClass('open');
    jQuery('.pa-toggles .item:first-child').addClass('open');
    jQuery(".info-wrap .title").click(function ($) {
      jQuery(this).toggleClass('open').siblings('.content').slideToggle("slow");
    });
  </script>

<?php $i = 0; if( have_rows('team') ): while( have_rows('team') ): the_row(); ?>
  <script type="text/javascript">
    jQuery("#team-toggle-<?= $i; ?>").click(function ($) {
      jQuery(this).addClass("open").siblings().removeClass("open");
      jQuery('#team-bio-<?= $i; ?>').addClass('open').siblings('.bio').removeClass("open");
    });
  </script>
<?php  $i++; endwhile;  endif; ?>

<?php $i = 0; if( have_rows('practice_areas') ): while( have_rows('practice_areas') ): the_row(); ?>
  <script type="text/javascript">
    jQuery("#pa-toggle-<?= $i; ?>").click(function ($) {
      jQuery(this).addClass("open").siblings('.pa-title').removeClass("open");
      jQuery('#pa-info-<?= $i; ?>').addClass('open').siblings('.info').removeClass("open");
    });
  </script>
  <?php  $i++; endwhile;  endif; ?>