<?php
/**
 * The template for displaying all single posts.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">

	<span class = "quote-wrapper-left"><i class="fas fa-quote-left"></i></span>

		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

			<?php //the_post_navigation(); ?>

			<?php endwhile; // End of the loop. ?>

		
<div class ="button-container">
			 <button id="get-quote-btn"> show me another ! </button> 
			 </div>

		</main><!-- #main -->

		<span class = "quote-wrapper-right"><i class="fas fa-quote-right"></i></span>

	</div><!-- #primary -->

	

<?php get_footer(); ?>