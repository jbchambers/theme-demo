<?php get_header(); ?>
<div class="page-content clearfix">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="main-content column">
      <h1><?php the_title(); ?></h1>
      <p class="404">404</p>
      <p>The page you were looking for appears to have been moved, deleted or does not exist. You could <a class="go-back" onclick="history.back();" href="#">go back</a> to where you were or head straight to our <a href="<?php echo site_url();?>">home page</a></p>
    </div>
    <div class="sidebar column">
      Sidebar
    </div>
  <?php endwhile;
  else : ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
  <?php endif; ?>
</div>
<?php get_footer(); ?>
