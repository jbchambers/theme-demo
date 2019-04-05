<?php get_header(); ?>
<div class="page-content clearfix">
  <div class="container">
    <h1>Blog</h1>
    <div class="articles">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article>
          <?php if (get_the_post_thumbnail()) { ?>
            <a href="<?= get_permalink(); ?>">
              <img src="<?= get_the_post_thumbnail_url(); ?>"/>
            </a>
          <?php } else { ?>
            <a href="<?= get_permalink(); ?>">
              <img src="<?= get_stylesheet_directory_uri(); ?>/img/blog.png"/>
            </a>
          <?php } ?>
          <h2><?php the_title(); ?></h2>
          <div class="byline">By <?= get_the_author(); ?> <span><?= get_the_date(); ?></span></div>
          <div class="category"><?php the_category(); ?></div>
          <?php the_excerpt(); ?>
          <a class="more" href="<?= get_permalink(); ?>">Read More</a>
        </article>
      <?php endwhile;?>
    </div>
    <div class="pagination">
      <div class="nav-previous alignleft"><?php previous_posts_link( '< Older posts' ); ?></div>
      <div class="nav-next alignright"><?php next_posts_link( 'Newer posts >' ); ?></div>
    </div>
    <? else : ?>
      <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>
  </div>
</div>
<?php get_footer(); ?>
