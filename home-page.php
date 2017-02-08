<?php
/* Template Name: Home Page */
?>
<?php get_header(); ?>
<div class="page-content clearfix">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <!-- SELLING POINTS -->
        <section class="selling-points" id="more">
            <?php if ( have_rows( 'selling_points' ) ) :while ( have_rows( 'selling_points' ) ) : the_row(); ?>
               <div class="item">
                   <!--<img src="--><?php //the_sub_field( 'icon' ); ?><!--" />-->
                   <div class="content">
                       <div class="icon"></div>
                       <div class="title">
                           <?php the_sub_field( 'title' ); ?>
                       </div>
                       <div class="number">
                           <?php the_sub_field( 'number' ); ?>
                       </div>
                   </div>
                   <div class="overlay">
                       <div class="description">
                           <?php the_sub_field( 'description' ); ?>
                       </div>
                       <div class="number">
                           <?php the_sub_field( 'number' ); ?>
                       </div>
                   </div>
               </div>
            <?php endwhile; else : ?>
                <?php // no rows found ?>
            <?php endif; ?>
        </section>

        <!-- ABOUT -->
        <section class="about">
            <h1><?php the_title(); ?></h1>
            <div class="tagline"><?php the_field( 'about_tagline' ); ?></div>
            <div class="column left">
                <?php the_field( 'about_column_left' ); ?>
            </div>
            <div class="column right">
                <?php the_field( 'about_column_right' ); ?>
            </div>
        </section>

        <!-- PRACTICE AREAS -->
        <section class="practice-areas">
            <div class="tagline">At Carr Law</div>
            <div class="title"><?php the_field( 'practice_areas_title' ); ?></div>
            <?php wp_nav_menu(['menu' => 'Practice Areas']); ?>
            <a class="btn" href="<?= get_permalink(60); ?>">View All</a>
        </section>

        <!-- SUCCESS STORIES INTRO -->
        <section class="success-stories-intro">
            <div class="title">
                <?php the_field( 'success_title' ); ?>
            </div>
            <div class="tagline">
                <?php the_field( 'success_tagline' ); ?>
            </div>
            <a class="btn" href="<?= get_permalink(50); ?>"><?php the_field('success_button'); ?></a>
        </section>

        <!-- SUCCESS STORIES -->
        <section class="success-stories">
            <div class="title">Success Stories</div>
            <div class="success-stories-carousel">
                <?php $args = array( 'page_id' => '50',); $success_stories = new WP_Query( $args );
                if ( $success_stories->have_posts() ) {
                    while ( $success_stories->have_posts() ) {
                        $success_stories->the_post(); ?>
                        <?php if ( have_rows( 'success_stories' ) ) : ?>
                            <?php while ( have_rows( 'success_stories' ) ) : the_row(); ?>
                                <div class="item">
                                    <div class="amount"><?php the_sub_field( 'amount' ); ?></div>
                                    <div class="case-type"><?php the_sub_field( 'case_type' ); ?></div>
                                    <div class="overlay">
                                        <div class="description"><?php the_sub_field( 'description' ); ?></div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php else : ?>
                            <?php // no rows found ?>
                        <?php endif; ?>
                    <?php }
                } else {
                    // no posts found
                }
                wp_reset_postdata(); ?>
            </div>
        </section>

        <!-- CLIENT PLANS -->
        <section class="client-plans">
            <div class="icon"></div>
            <div class="title"><?php the_field( 'client_plans_title' ); ?></div>
            <div class="tagline"><?php the_field('client_plans_tagline'); ?></div>
            <?php if ( have_rows( 'client_plans' ) ) : ?>
                <?php while ( have_rows( 'client_plans' ) ) : the_row(); ?>
                    <div class="item">
                        <div class="number">Client Plan #<?php the_sub_field( 'number' ); ?></div>
                        <div class="title"><?php the_sub_field( 'title' ); ?></div>
                        <div class="overlay">
                            <img class="icon" src="<?php the_sub_field( 'icon' ); ?>" />
                            <div class="tagline"><?php the_sub_field( 'tagline' ); ?></div>
                            <div class="content"><?php the_sub_field( 'content' ); ?></div>
                            <div class="number">0<?php the_sub_field('number'); ?></div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else : ?>
                <?php // no rows found ?>
            <?php endif; ?>
        </section>

        <!-- TESTIMONIALS -->
        <section class="testimonials">
            <div class="title">Client Testimonials</div>

                <?php $args = array( 'page_id' => '51',); $success_stories = new WP_Query( $args );
                if ( $success_stories->have_posts() ) {
                    while ( $success_stories->have_posts() ) {
                        $success_stories->the_post(); ?>
                        <div class="testimonials-carousel">
                        <?php if ( have_rows( 'testimonials' ) ) : ?>
                            <?php while ( have_rows( 'testimonials' ) ) : the_row(); ?>
                                <div class="item">
                                    <?php if ( get_sub_field( 'featured_testimonial' ) == 1 ) { ?>
                                        <div class="tagline"><?php the_sub_field( 'tagline' ); ?></div>
                                        <div class="quote"><?php the_sub_field( 'quote' ); ?></div>
                                        <div class="client"><?php the_sub_field( 'client' ); ?></div>
                                        <div class="source"><?php the_sub_field( 'source' ); ?></div>
                                    <?php } else {
                                        // echo 'false';
                                    } ?>
                                </div>
                            <?php endwhile; ?>
                        <?php else : ?>
                            <?php // no rows found ?>
                        <?php endif; ?>
                        </div>
                    <?php }
                } else {
                    // no posts found
                }
                wp_reset_postdata(); ?>

        </section>

        <!-- OUR TEAM -->
        <section class="our-team">
            <div class="wrapper">
                <div class="title"><?php the_field( 'our_team_title' ); ?></div>
                <div class="tagline"><?php the_field('our_team_tagline'); ?></div>
                <div class="description"><?php the_field( 'our_team_description' ); ?></div>
                <a class="btn" href="<?= get_permalink(44); ?>">Attorney Profile</a>
            </div>
        </section>

        <!-- FAQs -->
        <section class="faqs">
            <div class="title">Tax FAQs</div>
            <div class="tagline"><?php the_field('faqs_tagline'); ?></div>
            <?php if ( have_rows( 'faqs' ) ) : ?>
                <?php while ( have_rows( 'faqs' ) ) : the_row(); ?>
                    <div class="item">
                        <div class="title"><?php the_sub_field( 'title' ); ?></div>
                        <div class="description"><?php the_sub_field( 'description' ); ?></div>
                        <a href="<?php the_sub_field( 'page_link' ); ?>">Learn More</a>
                    </div>
                <?php endwhile; ?>
            <?php else : ?>
                <?php // no rows found ?>
            <?php endif; ?>
        </section>

        <!-- AWARDS -->
        <section class="awards">
            <div class="title">Awards + Memberships</div>
            <div class="awards-carousel">
                <?php if( have_rows('awards') ): ?>
                    <?php while( have_rows('awards') ): the_row(); ?>
                        <div class="item">
                            <img src="<?php the_sub_field('image'); ?>"/>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </section>


    <?php endwhile;
    else : ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>
</div>
<?php get_footer(); ?>
