<?php
/*
Template Name: Home page
*/
?>
<?php get_header(); /* Tells WordPress to include header.php */ ?>
      <section class="container-fluid aboutbg text-center"> <!--have to have a heading in this otherwise it wont valiate? -->
          <div class="container">

<!--placeholder for aboutme-->
 <h2><?php the_field('titleforaboutme'); ?></h2><!--  custom field for the aboutme content-->           <p class="particle"><?php the_field('subtitleforaboutme'); ?></p>  
 <p class="about-text"><?php the_field('paragraphforaboutme'); ?></p> 
              
              <div class="blocker"></div>
              
          </div>
      </section>
      
       <!-- End of container-->
       <!-- ctrl + ? = shortcut for commenting out things  -->

      <section class="container-fluid articlesbg"> <!-- main image can stretch to edge of page -->
          <div class="container"> <!-- holds content in middle of page -->
              <div class="row"> <!-- Gives access to all the bootstrap columns (the blue -->                                       <!-- lines you can see on the photoshop file for josh hw)-->
                  <div>
                    <h3 class="text-center article-title"><?php the_field('titleforarticles'); ?></h3>
                  </div>
                  
                  <div class="col-md-4 article-cent"> <!-- column, medium size, 4 columns/rows? wide-->

        <!--placeholder for col1-->              
    <img class="img-responsive" alt="portrait" src="<?php the_field('articleimage'); ?>">
    <h4><?php the_field('articletitle'); ?></h4>
    <p><?php the_field('articleexcerpt');?></p>
    <a href="<?php the_field('readmore');?>" class="readmore">CONTINUE READING</a>
                  </div>
                  
                  <div class="col-md-4 article-cent">

       <!--placeholder for col1-->  
     <img class="img-responsive" alt="model" src="<?php the_field('articletwoimage'); ?>">
    <h4><?php the_field('articletwotitle'); ?></h4>
    <p><?php the_field('articletwoexcerpt');?></p>
    <a href="<?php the_field('readmore');?>" class="readmore">CONTINUE READING</a>                  
                      
                  </div>
                  
                  <div class="col-md-4 article-cent">

       <!--placeholder for col1-->               
    <img class="img-responsive" alt="games design" src="<?php the_field('articlethreeimage'); ?>">
    <h4><?php the_field('articlethreetitle'); ?></h4>
    <p><?php the_field('articlethreeexcerpt');?></p>
    <a href="<?php the_field('readmore');?>" class="readmore">CONTINUE READING</a>
                      
                  </div>
                  
              </div> <!-- end row -->
          </div> <!-- end container -->
      </section><!-- end container-fluid -->
<?php get_footer(); /* Tells WordPress to include footer.php */ ?>