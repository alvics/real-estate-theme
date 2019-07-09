<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

    <!-- ******************* The Navbar Area ******************* -->
    <div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">

        <a class="skip-link sr-only sr-only-focusable"
           href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

        <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary p-0">

			<?php if ( 'container' == $container ) : ?>
            <div id="logo-nav" class="container-fluid">
				<?php endif; ?>

                <!-- Your site title as branding in the menu -->
				<?php if ( ! has_custom_logo() ) { ?>

			<?php if ( is_front_page() && is_home() ) : ?>

                <h1 class="navbar-brand "><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>"
                                                 title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"
                                                 itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>

			<?php else : ?>

                <a id="logo-nav" class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>"
                   title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"
                   itemprop="url"><?php bloginfo( 'name' ); ?></a>

			<?php endif; ?>


				<?php } else {
					the_custom_logo();
				} ?><!-- end custom logo -->
<div class="mobile-logo"><img id="mobile-img" src="http://localhost/Real%20Estate_Theme/wp-content/uploads/2019/05/r-wp.jpg" height="30" width="auto" alt="logo"> </div>
                <!-- Search Bar-->
                <form class="form-inline my-2 my-lg-0" method="get" id="searchform"
                      action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">

                         <label class="sr-only" for="s"><?php esc_html_e( 'Search', 'understrap' ); ?></label>

                        <input class="field form-control mr-sm-2" id="s" name="s" type="text"
                               placeholder="<?php esc_attr_e( 'Property &hellip;', 'understrap' ); ?>"
                               value="<?php the_search_query(); ?>" >
                           <i class="fa fa-search"></i>

			             <button class="submit btn btn-success my-2 my-sm-0" id="searchsubmit" name="submit" type="submit"
                                 value="<?php esc_attr_e( 'Search', 'understrap' ); ?>">Search</button>
                </form>
                <!-- ./Search Bar-->


                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                        aria-controls="navbarNavDropdown" aria-expanded="false"
                        aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- The WordPress Menu goes here -->
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav ml-auto',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				); ?>

			<?php if ( 'container' == $container ) : ?>

			</div><!-- .container -->
			<?php endif; ?>

				<?php if ( 'container' == $container ) : ?>
            </div><!-- .container -->
		<?php endif; ?>


            <!--Post an Ad Btn -->
            <!--            <div class="form-inline bkGround ml-auto">-->
            <!--                <div class="container add-btn d-flex flex-row-reverse">-->
            <!--                    <a href="http://localhost/Real%20Estate_Theme/?page_id=273" id="post-ad-btn" class="btn btn-secondary">Post an Ad</a>-->
            <!--                </div>-->
            <!--            </div>-->

        </nav><!-- .site-navigation -->


        <!--Post an Ad Btn -->
<!--        <div class="container-fluid bkGround">-->
<!--            <div class="container add-btn d-flex flex-row-reverse">-->
<!--                <a href="http://localhost/Real%20Estate_Theme/?page_id=273" id="post-ad-btn" class="btn btn-secondary">Post an Ad</a>-->
<!--            </div>-->
<!--        </div>-->


    </div><!-- #wrapper-navbar end -->
    



