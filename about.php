<?php
/**
 * 
 * 
 * template name: about
 * 
 * The template for displaying about page.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">

		<span class = "quote-wrapper-left"><i class="fas fa-quote-left"></i></span>
			
			<main id="main" class="site-main" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content', 'page' ); ?>

				<?php endwhile; // End of the loop. ?>

			</main><!-- #main -->

		<span class = "quote-wrapper-right"><i class="fas fa-quote-right"></i></span>
		
	</div><!-- #primary -->

<?php get_footer(); ?>
