<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyseventeen' ); ?></a>

	<header>
		<div class="site-header">
			<div class="site-branding">
				<a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/creditcard-shark-logo.png"></a>
			</div>
			<div class="burger-menu" onclick="myFunction(this)">
			  <div class="bar1"></div>
			  <div class="bar2"></div>
			  <div class="bar3"></div>
			</div>
			<script>
			function myFunction(x) {
			    x.classList.toggle("change");
			}
			</script>
		</div>
		<nav>
			<div class="container">
				<ul class="main-nav">
					<li>
						<a href=""><span>OFFERS</span></a>
					</li>
					<li>
						<a href=""><span>TYPE</span></a>
					</li>
					<li>
						<a href=""><span>CREDIT QUALLITY</span></a>
					<li>
						<a href=""><span>TOP OFFERS</span></a>
					</li>
					<li>
						<a href=""><span>TOOLS</span></a>
					</li>
				</ul>
			</div>
		</nav>
	</header>

	<?php

	/*
	 * If a regular post or page, and not the front page, show the featured image.
	 * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
	 */
	if ( ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) ) :
		echo '<div class="single-featured-image-header">';
		echo get_the_post_thumbnail( get_queried_object_id(), 'twentyseventeen-featured-image' );
		echo '</div><!-- .single-featured-image-header -->';
	endif;
	?>

	<div class="site-content-contain">
		<div id="content" class="site-content">
