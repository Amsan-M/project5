<?php
/**
*tag Template
*/
 
get_header(); ?> 

  
 
<section id="primary" class="category-tag-content">

    <div class ="cat-tag-content" role="main">


        <span class = "quote-wrapper-left"><i class="fas fa-quote-left"></i></span>

        <div class="entries-wrapper">

            <header class="archive-header">

                        <h1 class="archive-title"> Tag:  <?php single_tag_title(); ?> </h1>

            </header>



            <?php if ( have_posts() ) : ?>

            <?php while ( have_posts() ) : the_post(); ?>


            <?php get_template_part( 'template-parts/content', 'single'); ?>
     

            <?php endwhile; ?>

            <?php qod_numbered_pagination(); ?>

            <?php else: ?>

            <p>Sorry, no posts matched your criteria.</p>
            
            <?php endif; ?>

         </div>    <!-- .entries-wrapper -->  


     <span class = "quote-wrapper-right"><i class="fas fa-quote-right"></i></span>

</div>  <!-- .div content role main -->


</section>


<?php get_footer(); ?>