<?php
/**
 * Template name: main
 *
 * @package QOD_Starter_Theme 
 */
 get_header();  ?>

<?php
   $args = array( 'orderby' => 'rand','posts_per_page' => 1 );
   $quote = new WP_Query( $args ); // instantiate our object
?>


<?php if ( $quote->have_posts() ) : ?>
<?php while ( $quote->have_posts() ) : $quote->the_post(); ?>

<div class = "single-quote-content">
<span class = "random-quote-wrapper">

<span class = "quote-wrapper-left"><i class="fas fa-quote-left"></i></span>


      <div class = "random-post" >

      		<?php //get_template_part( 'template-parts/content', 'single' ); ?> 


              <div class = "random-quote">  <?php the_content();?> </div> 
            <div class = "author-quote"> <p> - <?php the_title(); ?> <p> </div>
            <div class = "quote-source"> </div> 
            <div class = "quote-link"> </div>  
            
            <?php endwhile; ?> 
            <?php wp_reset_postdata(); ?>
            <?php else : ?>
            <h2> Nothing found!</h2>
            <?php endif; ?>
	
<span class = "button-container"> 
			<button id="get-quote-btn"> show me another ! </button> 
                 
</span>
      </div> <!-- random-post -->
				
     

<span class = "quote-wrapper-right"><i class="fas fa-quote-right"></i></span>	
</span>
</div>	 
	<?php get_footer(); ?>