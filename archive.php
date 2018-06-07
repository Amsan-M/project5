<?php
/**
 * The template for displaying archive pages.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>
   <div class = "archives-container">

        

	<span class = "quote-wrapper-left"><i class="fas fa-quote-left"></i></span>
      
      <span class = "author-wrapper">  
   
  <div class = "Authors" >



		<h1>quote authors</h1>
<?php
   $args = array( 'orderby' => 'rand','posts_per_page' => -1 );
   $quote = new WP_Query( $args ); // instantiate our object
?>
<?php if ( $quote->have_posts() ) : ?>
   <?php while ( $quote->have_posts() ) : $quote->the_post(); ?>
 
   
 
   <!-- <div class = "quote-authors">  -->
<h2><a href="<?php echo  the_permalink() ?>" title="<?php echo the_title(); ?>"><?php echo the_title(); ?></a></h2>


  
	  
   <?php endwhile; ?> 
   <?php wp_reset_postdata(); ?>
<?php else : ?>
      <h2>Nothing found!</h2>
<?php endif; ?>
</div> 

      


<!--  categories  -->

<div class = "categories">

	<h1>categories</h1>

<?php
$categories = get_categories();
foreach($categories as $category) {?>

 
	<h2><a href="<?php echo  get_term_link($category); ?>" title="<?php echo   $category->name; ?>"><?php echo   $category->name; ?></a></h2>
<?php
  
   
}
?>
</div>

<!-- tags -->

<div class = "Tags-archives">

<h1>tags</h1>

 <?php 

$tags = get_tags();
foreach($tags as $tag) {?>

   <h2><a href="<?php echo  get_term_link($tag) ?>" title="<?php echo   $tag->name; ?>"><?php echo   $tag->name; ?></a></h2>
<?php }

?> 
</div>
</span>
      <span class = "quote-wrapper-right"><i class="fas fa-quote-right"></i></span>
      


</div>

<?php get_footer(); ?>
