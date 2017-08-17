<?php
/* Template Name: Home Page */
?>
<?php get_header(); ?>
<div class="page-content clearfix">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

       This is the home page.




    <?php endwhile; else : endif; ?>
</div>
<?php get_footer(); ?>
