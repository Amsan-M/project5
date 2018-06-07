<?php
/**
*tag Template
*/
 
get_header(); ?> 

<div class = "tag-content">

    <span class = "tag-archive-wrapper">

        <span class = "quote-wrapper-left"><i class="fas fa-quote-left"></i></span>

 
        <section id="primary" class="category-tag-content">



            <div class ="cat-tag-content" role="main">


            
                <div class="entries-wrapper">

                    <header class="archive-header">

                        <h1 class="archive-title"> Tag:  <?php single_tag_title(); ?> </h1>

                    </header>
                
                            <?php if ( have_posts() ) : ?>
                            <?php while ( have_posts() ) : the_post(); ?>
                    

                        <div class="entry">

                            	<?php get_template_part( 'template-parts/content', 'single' ); ?>

<!--         
                            <div class = "dev-quote">  <?php //the_excerpt(); ?> </div>
                            <div class = "dev-author">   - <?php// the_title();?> </div>

                           
                            <div class = "quote-src"> 

                            <?php
                           // $source = get_post_meta(get_the_ID(), '_qod_quote_source');
                           // $url = get_post_meta(get_the_ID(), '_qod_quote_source_url'); -->


                            // I had to use @ in front of the variables to remove the php "undefined offset" warning  notice, 
                            // that was still there despite the  use of isset()

                            // @$url = $url[0];
                            // @$source = $source[0];

                            
                            // if(isset($source[0]) && (isset($url[0]) )) {
                
                                          ?> <a href = " <?php//  echo $url; ?>"> <?php// echo $source ?> </a>   

                                           <?php 
                                        
                                      //  } elseif(isset($url[0]) ){ ?>
                                
                                         <a href = " <?php  //echo $url; ?>"> <?php //echo $url?> </a> 
                                        
                                         <?php 
                                         
                                      //  } elseif(isset($source[0]) ){

                                             //  echo $source ; 

                                      //  } else (!isset($source[0]) && (!isset($url)) ){

                                                 //      print_r('no source or url')
                                                   // }
                                        
                        

                            ?> 
                            
                            </div> 
                            
                            <?php endwhile; ?>

                        </div>  <!-- .entry -->

                </div>    <!-- .entries-wrapper -->   
            
            
                <?php else: ?>

                <p>Sorry, no posts matched your criteria.</p>
                
                <?php endif; ?>
          
    
            </div>  <!-- .div content role main -->

     
         </section>
     
        <span class = "quote-wrapper-right"><i class="fas fa-quote-right"></i></span>


    </span>

    <?php qod_numbered_pagination(''); ?>  

    
</div>

<?php get_footer(); ?>