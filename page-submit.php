<?php
/*
 * Template name: submission page
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		

			<?php// while ( have_posts() ) : the_post(); ?>

				<?php// get_template_part( 'template-parts/content', 'page' ); ?>

			<?php// endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<?php if (is_user_logged_in()): ?>

<div class = "form-container" id= "form-container">
<span class = "form-wrapper">
	<span class = "quote-wrapper-left"><i class="fas fa-quote-left"></i></span>
		

	<form>
	<label> author of quote </label>
	<input type = "text" id= "quote-author">

	<label> quote </label>
	<input type = "text" id= "the-quote">

	<label> where did you find the quote ? (e.g. book name) </label>
	<input type = "text" id= "quote-source">

	<label> provide the url of the quote source, if available </label>
	<input type = "text" id= "quote-url">

	<button type = "submit" value= "submit" id = "submitQuote"> submit quote </button>
</form>
<span class = "quote-wrapper-right"><i class="fas fa-quote-right"></i></span>
</span>	

</div>


<?php else : ?>


<div class = "user-not-logged">

<div class = "log-in">

<span class = "quote-wrapper-left"><i class="fas fa-quote-left"></i></span>


<div class = "quote-submission">
<h1> <?php the_title();?> </h1>

<p> Sorry, you must be logged in to submit a quote ! </p>


<a href="<?php echo wp_login_url( get_permalink() ); ?>" title="Login"><p> click here to login. <p></a>

</div>
<span class = "quote-wrapper-right"><i class="fas fa-quote-right"></i></span>
	
</div>
</div>

<?php endif;?>
<?php get_footer(); ?>