<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main-wrap">
 *
 * @package Black Walnut
 * @since Black Walnut 1.0
 */
 ?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div id="spinner"></div>
	<div class="wrap-all">
	<header id="masthead" class="site-header cf" role="banner">

		<div id="mobilenav-open"><span><?php _e( 'Menu', 'blackwalnut' ); ?></span></div>

		<div class="site-branding-wrap">
			<div class="site-branding">

				<?php
					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<p class="site-description"><?php echo $description; ?></p>
					<?php endif;

					if ( is_front_page() ) : ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php else : ?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php endif;

				?>

				<?php if ( get_header_image() ) : ?>
				<div class="title-logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt=""></a>
				</div><!-- end .title-logo -->
				<?php endif; ?>

			</div><!-- end .site-branding -->
		</div><!-- end .site-branding-wrap -->

		<?php if ( get_theme_mod( 'header_intro') !== ''  && is_front_page() ) : ?>
		<div class="more-info-btn"><span><?php _e( 'more info', 'blackwalnut' ); ?></span></div>
		<div class="intro-wrap">
			<?php echo wp_kses_post( wpautop( get_theme_mod( 'header_intro' ) ) ); ?>
		</div><!-- end .intro-wrap -->
		<?php endif; ?>

		</header><!-- end #masthead -->

		<div id="main-menu-wrap" class="sticky-element cf">
		<div class="sticky-anchor"></div>
		<nav id="site-nav" class="sticky-content" role="navigation">
			<div id="mobilenav-close"><span><?php _e( 'Close', 'blackwalnut' ); ?></span></div>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu', 'container' => 'false') ); ?>
		</nav><!-- end #site-nav -->
		</div><!-- end #main-menu-wrap -->

<div class="main-container cf">