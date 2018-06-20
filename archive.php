<?php
/**
 * The template for displaying archive pages.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>
   <div class = "archives-container">

      <?php while ( have_posts() ) : the_post(); ?>
      <?php endwhile?>

<span class = "quote-wrapper-left"><i class="fas fa-quote-left"></i></span>
      
      <span class = "author-wrapper">  

            <div class = "Authors" >

                  <div class = "page-title">
                        <h1> <?php echo the_title();?> </h1>
                  </div> 

                  <h1>quote authors</h1>
                  <ul class = "author-list">

                  <!-- loop to get the author list -->
                  <?php
                  $args = array( 'orderby' => 'rand','posts_per_page' => -1 );
                  $quote = new WP_Query( $args ); 
                  ?>
                  <?php if ( $quote->have_posts() ) : ?>
                  <?php while ( $quote->have_posts() ) : $quote->the_post(); ?>
                  
                        <li><a href="<?php echo  the_permalink() ?>" title="<?php echo the_title(); ?>"><?php echo the_title(); ?></a></li>

                  <?php endwhile; ?> 
                  <?php wp_reset_postdata(); ?>

                  <?php else : ?>
                        <h2>Nothing found!</h2>
                  <?php endif; ?>
                  </ul>
            </div> <!-- authors-->

      


 <!--  categories  -->

      <div class = "categories">

            <h1>categories</h1>
            
            <ul class = "categories-list">

      <?php
      $categories = get_categories();
      foreach($categories as $category) {?>
            <li><a href="<?php echo  get_term_link($category); ?>" title="<?php echo   $category->name; ?>"><?php echo   $category->name; ?></a></li>
      <?php    
      }
      ?>
      </ul>
      </div>

<!-- tags -->

      <div class = "Tags-archives">

            <h1>tags</h1>

            <ul class = "tags-list ">

                  <?php     
                  $tags = get_tags();
                  foreach($tags as $tag) {?>
                  <li><a href="<?php echo  get_term_link($tag) ?>" title="<?php echo   $tag->name; ?>"><?php echo   $tag->name; ?></a></li>
                  <?php }?> 

            </ul>
      </div>
      </span><!--author-wrapper-->

<span class = "quote-wrapper-right"><i class="fas fa-quote-right"></i></span>

</div><!--archive-container>

<?php get_footer(); ?>
