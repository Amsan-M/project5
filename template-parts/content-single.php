<?php
/**
 * Template part for displaying single posts.
 *
 * @package QOD_Starter_Theme
 */

?>

<article id="post-<?php //the_ID(); ?>" <?php// post_class(); ?>
	<!-- <header class="entry-header"> -->
		<?php// if ( has_post_thumbnail() ) : ?>
			<?php// the_post_thumbnail( 'large' ); ?>
		<?php// endif; ?>

		<!-- <span class = "quote-wrapper-left"><i class="fas fa-quote-left"></i></span> -->
 

<div class = "single-quote">
	
   <div class = "random-quote">  <?php the_content();?> </div> 

      <div class = "quote-info">
   <div class = "author-quote"> <p> - <?php the_title(); ?> <p> </div>


   <div class = "quote-source"> 
   <?php
        
        $source = get_post_meta(get_the_ID(), '_qod_quote_source');
        $url = get_post_meta(get_the_ID(), '_qod_quote_source_url');


         // I had to use @ in front of the variables to remove the php "undefined offset" warning  notice, 
         // that was still there despite the  use of isset()

       @$url = $url[0];
        @$source = $source[0];

                            
        if(isset($source[0]) && (isset($url[0]) )) {
                
        ?> <a target="_blank" href = " <?php  echo $url; ?>"> <?php echo $source ?> </a>   

    <?php 
                                        
       } elseif(isset($url[0]) ){ ?>
                                
         <a targhet="_blank" href=" <?php  echo $url; ?>"> <?php echo $url?> </a> 
                                        
        <?php 
       }  elseif(isset($source[0]) ){
         echo $source ; 
} else (!isset($source[0]) && (!isset($url)) ){
print_r('')
                                                    }
                                        
                        
?>
 
</div> 

   <div class = "quote-link">  </div>
   </div>
</div> 


   <!-- <span class = "quote-wrapper-right"><i class="fas fa-quote-right"></i></span> -->

</article><!-- #post-## -->
