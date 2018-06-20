<?php
/**
 * The header for our theme.
 *
 * @package QOD_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		
	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
				 <div class="site-branding">

				
				<div class = "site-logo"> 			
				<a href="<?php echo home_url(); ?>"> <img src="<?php bloginfo('stylesheet_directory'); ?>/build/css/images/qod-logo.svg">
				</a>

				
				</div>
					<!-- <h1 class="site-title screen-reader-text"><a href="<?php //echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php //bloginfo( 'name' ); ?></a></h1> -->
					<!-- <p class="site-description"><?php// bloginfo( 'description' ); ?></p> -->
				</div>

				
			</header><!-- #masthead -->

			<div id="content" class="site-content">
