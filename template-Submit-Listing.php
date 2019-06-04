<?php
/*
 Template Name: Add Listing
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

$container = get_theme_mod( 'understrap_container_type' );

?>

<div class="wrapper" id="page-wrapper">
    <div class="container">
    <h1 id="form-submit-title" class="form-submit-title"><?php echo the_title(); ?></h1>
    </div>

    <div class="container">
        <h3 class="ad-details-heading">Ad details</h3>
    </div>

    <div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

        <main class="site-main" id="main">

            <!-- Checks if the User is Logged in -->
			<?php if ( ! is_user_logged_in() ) {
				auth_redirect();
			} ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'loop-templates/content', 'page' ); ?>

				<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
				?>

			<?php endwhile; // end of the loop. ?>

        </main><!-- #main -->

    </div><!-- #content -->

</div><!-- #page-wrapper -->

<?php get_footer(); ?>

