<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package indosoft
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="<?php bloginfo( 'charset' ); ?>">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<script type="text/javascript" src="http://homestead.app/wp-content/themes/indosoft/js/navigation.js"></script>
<script src="http://code.jquery.com/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'indosoft' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<div class="logoheader">
				<img  src="http://homestead.app/wp-content/themes/indosoft/images/logo.gif" align="left">
			</div>
			<div class="title">
				<h1>Site Title Goes Here </h1>
			</div>

			<div class="row search-header">
			  <div class="header-search-wrapper">
			  	<form role="search" method="get" class="search-form" action="<?php esc_url( home_url( '/' ) ); ?>">
					<label class="label-search-mobile">
						<span class="screen-reader-text">Search for:</span>
						<input type="search" class="search-field" placeholder=" " value="" name="s" title="Search for:">
					</label>
					<!-- <input type="submit" class="search-submit" value=" "><i class="fa fa-search"></i> -->
					<button type="submit" class="search-submit"><span class="fa fa-search"></span></button>
				</form>
				</div>
		    </div>

			<div align="right" class="txt">
				<p align="right">BP Global | BP Worldwide</p>
			</div>

		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php //esc_html_e( 'Menu', 'indosoft' ); ?>
				<span class="sr-only">Toggle navigation</span>
			  	<span class="icon-bar"></span>
			  	<span class="icon-bar"></span>
			  	<span class="icon-bar"></span>
			</button>
			<div class="row">
		  	<span class="bar-space"></span>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			</div>
			<div id="searchbar" class="header-search-wrapper mobile-search">
				<form role="search" method="get" class="search-form" action="<?php esc_url( home_url( '/' ) ); ?>">
					<span class="screen-reader-text">Search for:</span>
						<input type="search" class="search-field" placeholder=" " value="" name="s" title="Search for:">
					<button type="submit" class="search-submit"><span class="fa fa-search"></span></button>
				</form>
			</div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
