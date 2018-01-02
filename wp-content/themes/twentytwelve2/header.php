<?php

	$detect = new Mobile_Detect();

/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>

<!-- JS -->
<script type="text/javascript" src="/wp-content/themes/twentytwelve2/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="/wp-content/themes/twentytwelve2/js/jQueryRotate.js"></script>
<script type="text/javascript" src="/wp-content/themes/twentytwelve2/js/on_ready.js"></script>

<!-- google fonts -->
<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>

<!-- CSS -->
<?php /*if ($detect->isMobile()) { ?>
	<link rel="stylesheet" type="text/css" href="/wp-content/themes/twentytwelve2/css/mobile.css" />
<?php } else {*/ ?>
	<link rel="stylesheet" type="text/css" href="/wp-content/themes/twentytwelve2/css/default.css" />
<?php //} ?>

<!-- favicon -->
<link rel="SHORTCUT ICON" type="image/x-icon" href="/favicon.ico" />


</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	
	<div id="header">
		<div class="deco_left"></div>
		<div class="deco_right"></div>

		<div class="main">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Hygiéniste <span>Naturopathe</span></a>

			<div class="bottom">
				<span>nadia lebreton</span>, naturopathe en Mayenne (53)
			</div>
		</div>
	</div>	

	<?php /*
	<header id="masthead" class="site-header" role="banner">
		<hgroup>
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</hgroup>

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<h3 class="menu-toggle"><?php _e( 'Menu', 'twentytwelve' ); ?></h3>
			<a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentytwelve' ); ?>"><?php _e( 'Skip to content', 'twentytwelve' ); ?></a>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
		</nav><!-- #site-navigation -->

		<?php $header_image = get_header_image();
		if ( ! empty( $header_image ) ) : ?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( $header_image ); ?>" class="header-image" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" /></a>
		<?php endif; ?>
	</header>*/ ?><!-- #masthead -->

	<div id="main" class="wrapper">