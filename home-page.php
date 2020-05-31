<?php
/*
Template Name: Home page
*/
?>
<?php get_header(); /* Tells WordPress to include header.php */ ?>
      <section class="container-fluid aboutbg text-center"> <!--have to have a heading in this otherwise it wont valiate? -->
          <div class="container">

<!--placeholder for aboutme-->
              
              <div class="blocker"></div>
              
          </div>
      </section>
      
       <!-- End of container-->
       <!-- ctrl + ? = shortcut for commenting out things  -->

      <section class="container-fluid articlesbg"> <!-- main image can stretch to edge of page -->
          <div class="container"> <!-- holds content in middle of page -->
              <div class="row"> <!-- Gives access to all the bootstrap columns (the blue -->                                       <!-- lines you can see on the photoshop file for josh hw)-->
                  <div>
                    <h3 class="text-center article-title wow bounceInUp"><?php the_field('titleforarticles'); ?></h3>
                  </div>
                  
                  <div class="col-md-4 article-cent"> <!-- column, medium size, 4 columns/rows? wide-->

        <!--placeholder for col1-->              
                      

                  </div>
                  
                  <div class="col-md-4 article-cent">

       <!--placeholder for col1-->               
                  </div>
                  
                  <div class="col-md-4 article-cent">

       <!--placeholder for col1-->               
                      
                  </div>
                  
              </div> <!-- end row -->
          </div> <!-- end container -->
      </section><!-- end container-fluid -->
<?php get_footer(); /* Tells WordPress to include footer.php */ ?>