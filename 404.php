<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<span class = "quote-wrapper-left"><i class="fas fa-quote-left"></i></span>
			<section class="error-404">
				<header class="page-header">
					<h1 class="page-title"><?php echo esc_html( 'Oops!' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php echo esc_html( 'It looks like nothing was found at this location. Maybe try a search?' ); ?></p>

					<?php get_search_form(); ?>
				</div><!-- .page-content -->

							
			</section><!-- .error-404 -->
			<span class = "quote-wrapper-right"><i class="fas fa-quote-right"></i></span>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>