<?php
/**
 * Template part for displaying single posts.
 *
 * @package QOD_Starter_Theme
 */
?>

<?php get_header();  ?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >

  <header class="entry-header">
	
    <div class = "single-quote">
	
      <div class = "random-quote">  <?php the_content();?> </div> 

        <div class = "quote-info">

          <div class = "author-quote"> </div>

             <div class = "quote-link""> 
   
              <?php
        
                $source = get_post_meta(get_the_ID(), '_qod_quote_source');
                $url = get_post_meta(get_the_ID(), '_qod_quote_source_url');
                // I had to use @ in front of the variables to remove the php "undefined offset" warning  notice, 
                // that was still there despite the  use of isset()
                @$url = $url[0];
                @$source = $source[0];
                            
                if(isset($source[0]) && (isset($url[0]) )) {?>

                <?php echo ("-")?>
                <?php echo the_title(); ?> 
           
                <?php echo (", ")?>
                <a target="_blank" href = " <?php  echo $url; ?>"> <?php echo $source ?> </a>   

                <?php } elseif(isset($url[0]) ){ ?>

      
                <?php echo ("-")?>
                <?php echo the_title(); ?>   
                              
                <a target="_blank" href=" <?php  echo $url; ?>"> <?php echo $url?> </a> 
                                              
                <?php 
                }  elseif(isset($source[0]) ){?>
                <?php echo ("- ")?>
                <?php echo the_title(); ?>
                <?php echo (", ")?>
                <strong> <?php echo $source ; ?> </strong>

                <?php } else{ ?>
                <?php echo ("- ")?>
                <?php echo the_title(); }?> 
 
 
</article>  
                                                   