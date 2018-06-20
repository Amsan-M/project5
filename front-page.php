<?php
/**
 * Template name: main
 *
 * @package QOD_Starter_Theme 
 */
 get_header();  ?>
 <div id="primary" class="content-area">


   <div class = "content-wrapper"> 


 <span class = "quote-wrapper-left"><i class="fas fa-quote-left"></i></span>

	<main id="main" class="site-main" role="main">

    <!-- display 1 first random post before the button is clicked, then the values will change with the ajax request -->

<?php
   $args = array( 'orderby' => 'rand','posts_per_page' => 1 );
   $quote = new WP_Query( $args ); 
?>


<?php if ( $quote->have_posts() ) : ?>
<?php while ( $quote->have_posts() ) : $quote->the_post(); ?>
<?php endwhile; ?> 

	<div class = "random-post" >

    <div class = "random-quote" >

      <?php the_content(); ?>

    </div>


    <div class = "quote-link"> 
    <?php echo ("-")?>
    <?php the_title(); ?>
   </div>  

    <?php wp_reset_postdata(); ?>

            	<!-- </main>#main -->
            <?php else : ?>
            <h2> Nothing found!</h2>
            <?php endif; ?>
            
            <span class = "button-container"> 
          <button id="get-quote-btn"> show me another ! </button> 
                  
      </span>
	
      
            </main><!-- #main -->
     

<span class = "quote-wrapper-right"><i class="fas fa-quote-right"></i></span>	
</div>
	</div><!-- #primary -->	 
	<?php get_footer(); ?>