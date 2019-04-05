<footer>
  <!-- FORM -->
  <section id="form">
    <div class="container">
      <div class="title">Contact Us</div>
      <?php gravity_form(1, false, true, false, null, false); ?>
    </div>
  </section>

  <!-- LOCATIONS -->
  <section class="locations">
    <div class="section-title">Three Locations, One Purpose<br>

      Rosen Injury Lawyers Are Proud to Serve Clients Nationwide</div>
    <?php if (have_rows('locations', 'option')): while (have_rows('locations', 'option')): the_row(); ?>
      <div class="item">
        <div class="column left">
          <div class="wrap">
            <div class="title"><?php the_sub_field('title'); ?></div>
            <div class="address"><?php the_sub_field('address'); ?></div>
            <div class="links">
              <a class="phone" href="tel:<?php the_sub_field('phone'); ?>"><?php the_sub_field('phone'); ?></a>
              <a class="fax" href="tel:<?php the_sub_field('fax'); ?>"><?php the_sub_field('fax'); ?></a>
            </div>
          </div>
        </div>
        <div class="column right">
          <div class='embed-container'>
            <?php the_sub_field('embed_code'); ?>
          </div>
        </div>
      </div>
    <?php endwhile;  endif; ?>
  </section>

  <!-- COPYRIGHT -->
  <section class="subfooter">
    <div class="container">
      <div class="column">
        <div class="social">
          <a class="facebook" href="https://<?php the_field('facebook', 'option'); ?>" target="_blank">facebook</a>
          <a class="linkedin" href="https://<?php the_field('linkedin', 'option'); ?>" target="_blank">linkedin</a>
          <a class="twitter" href="https://<?php the_field('twitter', 'option'); ?>" target="_blank">twitter</a>
        </div>
        <div class="copyright">Rosen Injury Lawyers Copyright© <?= date('Y'); ?> | Sitemap | Privacy | All Right Reserved. </div>
      </div>
      <div class="column">
        <a class="lawrank" href="https://lawrank.com" target="_blank"><img src="<?= get_stylesheet_directory_uri(); ?>/img/lawrank.png"/></a>
      </div>
    </div>
  </section>
</footer>

<?php wp_footer(); ?>
</body>
</html>