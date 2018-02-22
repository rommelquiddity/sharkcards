<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<section class="banner">
			<?php 
				$banner = get_field_object('home_page_banner') 
			?>
			<img src="<?php  echo $banner['value']['url'] ?>">
		</section>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer();
