<?php
/**
 * Template part for displaying posts.
 *
 * @package QOD_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
	<header class="entry-header">
		<?php // the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->



 <div class = "quote-link"> 
   <?php
        
        $source = get_post_meta(get_the_ID(), '_qod_quote_source');
        $url = get_post_meta(get_the_ID(), '_qod_quote_source_url');
         // I had to use @ in front of the variables to remove the php "undefined offset" warning  notice, 
         // that was still there despite the  use of isset()
       @$url = $url[0];
        @$source = $source[0];
                            
        if(isset($source[0]) && (isset($url[0]) )) {?>

            <?php echo the_title(); ?> 
            <a target="_blank" href = " <?php  echo $url; ?>"> <?php echo $source ?> </a>   

   
                                        
        <?php } elseif(isset($url[0]) ){ ?>

       <?php echo the_title(); ?>
                                
         <a target="_blank" href=" <?php  echo $url; ?>"> <?php echo $url?> </a> 
                                        
        <?php 
       }  elseif(isset($source[0]) ){?>
        <?php echo the_title(); ?>
         <?php echo $source ; 

	   }?>



</article>
