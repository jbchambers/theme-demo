<?php
/* Template Name: Home Page */
?>
<?php get_header(); ?>
<div class="page-content clearfix">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <!-- FORM -->
        <div class="form">
            <div class="title">
                <span>request a</span>
                <span><i>free</i> consultation</span>
            </div>
            <div class="tagline">No office visit required, we will get back to you to discuss the potential merit of your case.</div>
            <?php gravity_form(1, false, false, false, null, false); ?>
            <div class="required">* All Fields Required</div>
        </div>

        <!-- RATINGS -->
        <div class="ratings">
            <h1><?php the_field('ratings_title'); ?></h1>
            <div class="excerpt"><?php the_field('ratings_excerpt'); ?></div>
            <?php if (have_rows('ratings')) : while (have_rows('ratings')) : the_row(); ?>
                <div class="number"><?php the_sub_field('number'); ?></div>
                <div class="logo"><img src="<?php the_sub_field('logo'); ?>"/></div>
            <?php endwhile; else : endif; ?>
        </div>

        <!-- ABOUT US -->
        <section class="about-us">
            <div class="title"><?php the_field('about_us_title'); ?></div>
            <div class="column left">
                <?php the_field('about_us_left_column'); ?>
            </div>
            <div class="column right">
                <?php the_field('about_us_right_column'); ?>
            </div>
        </section>

        <!-- TESTIMONIALS -->
        <div class="testimonials">
            <div class="title"><?php the_field('testimonials_title'); ?></div>
            <div class="image"></div>
            <div class="testimonials-carousel">
            <?php if (have_rows('testimonials')) : while (have_rows('testimonials')) : the_row(); ?>
                <div class="quote"><?php the_sub_field('quote'); ?></div>
                <div class="client"><?php the_sub_field('client'); ?></div>
            <?php endwhile; else : endif; ?>
            </div>
            <a class="view-all" href="<?= get_permalink(7); ?>">View All Testimonials</a>
        </div>

        <!-- OUR FIRM -->
        <section class="our-firm">
            <div class="icon"></div>
            <div class="title"><?php the_field('our_firm_title'); ?></div>
            <div class="column left">
                <?php the_field('our_firm_left'); ?>
            </div>
            <div class="column right">
                <?php the_field('our_firm_right'); ?>
            </div>
        </section>

        <!-- CASE RESULTS -->
        <section class="case-results">
        <?php if (have_rows('case_results')) : while (have_rows('case_results')) : the_row(); ?>
            <div class="icon"><img src="<?php the_sub_field('icon'); ?>"/></div>
            <div class="icon-alt"><img src="<?php the_sub_field('icon_alt'); ?>"/></div>
            <div class="amount"><?php the_sub_field('amount'); ?></div>
            <div class="description"><?php the_sub_field('description'); ?></div>
        <?php endwhile; else : endif; ?>
        </section>

        <!-- AWARDS -->
        <section class="awards">
        <?php if (have_rows('awards')) : while (have_rows('awards')) : the_row(); ?>
            <div class="item"><img src="<?php the_sub_field('image'); ?>"/></div>
        <?php endwhile; else : endif; ?>
        </section>




    <?php endwhile; else : endif; ?>
</div>
<?php get_footer(); ?>
