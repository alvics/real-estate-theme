<?php get_header(); ?>

<!-- Components/Jumbotron -->
<?php get_template_part( 'components/jumbotron', 'none' ); ?>


<!-- Components/3-Card-Section -->
<?php get_template_part( 'components/3-cards-section', 'none' ); ?>

<!-- Components/featureetts -->
<?php get_template_part( 'components/featureetts', 'none' ); ?>


<!-- Global-Templates (Carousel) -->
  <div class="widget-carousel mb-4 mt-4">
  <h4>Auction Listing </h4>
      <?php get_template_part( 'global-templates/hero', 'none' ); ?>
  </div>
<!-- ./Carousel -->


  </div><!-- /.container -->

</main>

<?php get_footer(); ?>
