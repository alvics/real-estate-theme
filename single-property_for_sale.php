<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="single-wrapper">

    <div class="<?php echo esc_attr( $container ); ?> p-5" id="content" tabindex="-1">
<h1>Single-property_for_sale.php</h1>
        <div class="row">
            <div class="col-lg-9">
                <main class="site-main" id="main">

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'loop-templates/content', 'single' ); ?>
						<?php the_field( 'description' ); ?>


                        <div class="row m-4">
                            <div class="col-md-6">
                                <h4 id="features">Features</h4>

                                <!-- Repeater Field -->
								<?php

								// check if the repeater field has rows of data
								if ( have_rows( 'feature_descriptions_1' ) ):

									// loop through the rows of data
									while ( have_rows( 'feature_descriptions_1' ) ) : the_row(); ?>

                                        <ul class="list-unstyled">
                                            <li>
                                                <i class="fa fa-check"></i> <?php the_sub_field( 'features_column_1' ) ?>
                                            </li>
                                        </ul>

									<?php endwhile; endif; ?>

                            </div>

                            <div class="col-md-6 features-2-column">


								<?php

								// check if the repeater field has rows of data
								if ( have_rows( 'feature_descriptions_2' ) ):

									// loop through the rows of data
									while ( have_rows( 'feature_descriptions_2' ) ) : the_row(); ?>

                                        <ul class="list-unstyled">
                                            <li>
                                                <i class="fa fa-check"></i> <?php the_sub_field( 'features_column_2' ) ?>
                                            </li>
                                        </ul>

									<?php endwhile; endif; ?>

                            </div>
                        </div> <!-- ./row -->
<hr>
                        <!-- Gallery -->
						<?php $images = get_field( 'gallery' );

						if ( $images ): ?>
                            <ul class="row list-unstyled">
								<?php foreach ( $images as $image ): ?>
                                    <li class="col-md-4 col-xs-4">
                                        <a href="<?php echo $image['url']; ?>" class="gallery-item">
                                            <img src="<?php echo $image['sizes']['smallest']; ?>"
                                                 alt="<?php echo $image['alt']; ?>"/>
                                        </a>
                                        <p><?php echo $image['caption']; ?></p>
                                    </li>
								<?php endforeach; ?>
                            </ul>   <!-- ./Gallery -->
							<?php the_field( 'heading' ); ?>
						<?php endif; ?>

						<?php understrap_post_nav(); ?>

					<?php endwhile; // end of the loop. ?>

                </main><!-- #main -->
            </div><!-- ./col-lg-8 -->

            <!-- Right sidebar -->
			<?php if ( get_field( 'agent_image' ) ): ?>

            <div class="col-lg-3">
                <h6 id="property-id">Property ID: <?php the_field( 'property_id' ) ?></h6>

                <hr class="hr">
                <h4>Property <?php the_field( 'contract' ) ?></h4>
                <p class="price" style="font-size:1.4rem"> <?php the_field( 'price' ); ?></p>
                <h5 id="address"><?php the_field( 'address_of_property_' ); ?></h5>
                <div class="features">

                    <p><i class="fa fa-hotel"> <?php the_field( 'bedrooms' ); ?></i></p>
                    <p><i class="fa fa-bathtub"> <?php the_field( 'bathrooms' ); ?></i></p>
                    <p><i class="fa fa-crop"> <?php the_field( 'land_size' ); ?></i></p>
                </div>
                <p><span class="font-600">Next Inspection:</span> <?php the_field( 'inspection_date' ); ?></p>
                <img src="http://localhost/Real%20Estate_Theme/wp-content/uploads/2019/05/map.png" width="286" alt="">
                <hr class="hr">
                <div class="card" style="width: 18rem;">
                    <!-- Agent Details -->
                    <img class="card-img-top" src="<?php the_field( 'agent_image' ); ?>" alt="<?php the_title(); ?>"/>
					<?php endif; ?>
                    <div class="card-body">
                        <h5 class="card-title"><?php the_field( 'agent_name' ) ?></h5>
                        <p class="card-text"><span class="font-600">Mobile:</span> <?php the_field( 'agent_phone_1' ) ?>
                        </p>
                        <p class="card-text"><span class="font-600">Office:</span> <?php the_field( 'agent_phone_2' ) ?>
                        </p><!-- Agent Details -->
                        <div class="row">
                            <div class="col-6"><a href="tel:<?php the_field( 'agent_phone_1' ) ?>" class="btn btn-primary mt-4">Call Now</a></div>
                            <div class="col-6"><a href="tel:<?php the_field( 'agent_phone_1' ) ?>" class="btn btn-primary mt-4">My Listings</a></div>
                        </div>

                        <hr>
                        <p class="company"><span class="font-600"></span> <?php the_field( 'company_division' ) ?></p>


                    </div><!-- ./card-body -->

                    <button id="enquiry-btn" class="btn btn-primary" type="button" data-toggle="collapse"
                            data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                        <i class='fa fa-envelope'></i> Quick enquiry<i class="fa fa-angle-down"></i>
                    </button>

                    <div class="collapse" id="collapseExample">
                        <div class="card card-body card-single">
			                <?php echo do_shortcode( '[contact-form-7 id="476" title="Contact form 1"]' ) ?>
                        </div>
                    </div>
                </div> <!-- ./card -->

            </div><!-- ./col-lg-4 -->

        </div><!-- .row -->

    </div><!-- #content -->

</div><!-- #single-wrapper -->


<?php get_footer(); ?>
