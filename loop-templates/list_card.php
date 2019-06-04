<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

    <header class="entry-header">

        <!--		--><?php
		//		the_title(
		//			sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
		//			'</a></h2>'
		//		);
		//		?>

		<?php if ( 'post' == get_post_type() ) : ?>

            <div class="entry-meta">
				<?php understrap_posted_on(); ?>
            </div><!-- .entry-meta -->

		<?php endif; ?>

    </header><!-- .entry-header -->
    <div class="row list_card">
        <div class="col-md-4 list_card_img"><?php echo get_the_post_thumbnail( $post->ID, 'small' ); ?></div>
        <div class="col-md-8">
                    <div class="entry-content">


                        <h5 id="address" class="card-title"><?php the_field( 'address_of_property_' ); ?></h5>
                        <span class="card-text"><?php the_excerpt(); ?></span>
                        <!--                <div class="features">-->
                        <!--                    <p>Price</p>-->
                        <!--                    <p>Bedrooms</p>-->
                        <!--                    <p>Bathrooms</p>-->
                        <!--                    <p>Land Size</p>-->
                        <!--                </div>-->
                        <div class="features">
                            <p class="price"><?php the_field( 'price' ); ?></p>
                            <p><i class="fa fa-hotel"> <?php the_field( 'bedrooms' ); ?></i></p>
                            <p><i class="fa fa-bathtub"> <?php the_field( 'bathrooms' ); ?></i></p>
                            <p><i class="fa fa-crop"> <?php the_field( 'land_size' ); ?></i></p>
                        </div>


						<?php
						wp_link_pages(
							array(
								'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
								'after'  => '</div>',
							)
						);
						?></div>
                </div>



    </div><!-- .entry-content -->

    <footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

    </footer><!-- .entry-footer -->

</article><!-- #post-## -->

