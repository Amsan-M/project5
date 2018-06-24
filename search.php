<?php
/**
 * The template for displaying search results pages.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<section id="primary" class="content-area">

	<span class = "quote-wrapper-left"><i class="fas fa-quote-left"></i></span>
		<main id="main" class="site-main" role="main">


	<?php if ( have_posts() ) : ?>
  

		

			<header class="page-header">

			
			
				<h1 class="page-title"><?php printf( esc_html( 'Search Results for: %s' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			
				
			
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

		

			<?php
			$args = array( 'orderby' => 'rand','posts_per_page' => 10 );
			$quote = new WP_Query( $args ); // instantiate our object
			?> 

				<?php get_template_part( 'template-parts/content', 'search' ); ?>

			<?php endwhile; ?>

			<?php qod_numbered_pagination(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
		<span class = "quote-wrapper-right"><i class="fas fa-quote-right"></i></span>
	</section><!-- #primary -->

<?php get_footer(); ?>
