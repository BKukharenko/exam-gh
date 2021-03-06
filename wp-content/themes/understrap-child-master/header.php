<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title"
          content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="hfeed site" id="page">

    <!-- ******************* The Navbar Area ******************* -->
    <div class="wrapper-fluid wrapper-navbar" id="wrapper-navbar">

        <a class="skip-link screen-reader-text sr-only" href="#content"><?php esc_html_e( 'Skip to content',
				'understrap' ); ?></a>

        <nav class="navbar navbar-expand-md navbar-light">

			<?php if ( 'container' == $container ) : ?>
            <div class="container">
				<?php endif; ?>

                <h1>
                    <a href="<?php echo site_url(); ?>"><?= wp_get_attachment_image( get_theme_mod( 'custom_logo' ) ); ?></a>
                </h1>

                <button id="nav-btn" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                        data-target="#navbar-supported-content" aria-controls="navbar-supported-content"
                        aria-expanded="false"
                        aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- The WordPress Menu goes here -->
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbar-supported-content',
						'menu_class'      => 'nav ml-auto text-center',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'walker'          => new understrap_WP_Bootstrap_Navwalker(),
					)
				); ?>
				<?php if ( 'container' == $container ) : ?>
            </div><!-- .container -->
		<?php endif; ?>

        </nav><!-- .site-navigation -->

    </div><!-- .wrapper-navbar end -->
