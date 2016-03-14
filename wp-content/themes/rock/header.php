<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Rock
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!-- Google Fonts -->
<link href='https://fonts.googleapis.com/css?family=Roboto:300, 700|Roboto+Condensed:400,300|Quantico:700' rel='stylesheet' type='text/css'>


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'rock' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		
		<div class="container">
			<div class="row">
				<div class="col-xs-3">
					<img src="images/dimoc-logo.png">
				</div>
				<div class="col-xs-7">
					<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'rock' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
				</div>
				<div class="col-xs-2">

		
				</div>
			</div>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
