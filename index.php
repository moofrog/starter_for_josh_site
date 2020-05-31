<?php get_header(); /* Tells WordPress to include header.php */ ?>
      <section class="container-fluid aboutbg text-center"> <!--have to have a heading in this otherwise it wont valiate? -->
          <div class="container">

<?php
global $more;//define a global variable
$more = 0;// the global varibale is now equal to 0
query_posts('cat=2');//look for posts that have the category of 2
if(have_posts()) ://if we have posts to display
while(have_posts()) :the_post();//LOOP through all the posts and find the one that has a category of 2 get thet title and content
?>
<h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2> 
            <div><p class="about-text"><?php the_content() ?></p></div>
<?php
endwhile;
endif;
wp_reset_query();?>
              
              <div class="blocker"></div>
              
          </div>
      </section>
      
       <!-- End of container-->
       <!-- ctrl + ? = shortcut for commenting out things  -->

      <section class="container-fluid articlesbg"> <!-- main image can stretch to edge of page -->
          <div class="container"> <!-- holds content in middle of page -->
              <div class="row"> <!-- Gives access to all the bootstrap columns (the blue -->                                       <!-- lines you can see on the photoshop file for josh hw)-->
                  <div class="text-center article-title">
                    <h3>LATEST ARTICLES</h3>
                  </div>
                  
                  <div class="col-md-4 article-cent"> <!-- column, medium size, 4 columns/rows? wide-->
<?php $post_id = 11;
$queried_post = get_post($post_id);?>
<?php echo get_the_post_thumbnail($queried_post, 'full', array('class' => 'img-responsive')); ?>
<h4><?php echo $queried_post->post_title; ?></h4>
<?php echo $queried_post->post_excerpt; ?>
<?php echo '<a class="readmore" href="'.get_permalink($queried_post).'"><br>CONTINUE READING</a>';?>

                  </div>
                  
                  <div class="col-md-4 article-cent">
                      <img class="img-responsive" alt=“portait” src="http://206.189.45.97/~mesh20/sub2/wordpress_content/themes/starter_for_josh_site/images/articles-img2.jpg">
                      <h4>A MODEL</h4>
                      <p class="date">12 December 2020</p>
                      <p>STS has never been shy of seeking new terrains of  investigation. More and  more  STS s cholars are  starting to explore and intervene in the arts.  This object of study  brings  new challenges and  opportunities that we want  to explore in this session.   We would  like to gather first of all simply  new kinds of  knowledge arising from  STS study  of the arts. </p>
                      <p class="readmore">CONTINUE READING</p>
                  </div>
                  
                  <div class="col-md-4 article-cent">
                      <img class="img-responsive" alt=“portait” src="http://206.189.45.97/~mesh20/sub2/wordpress_content/themes/starter_for_josh_site/images/articles-img3.jpg">
                      <h4>A GAMES DESIGN</h4>
                      <p class="date">12 December 2020</p>
                      <p>STS has never been shy of seeking new terrains of  investigation. More and  more  STS s cholars are  starting to explore and intervene in the arts.  This object of study  brings  new challenges and  opportunities that we want  to explore in this session.   We would  like to gather first of all simply  new kinds of  knowledge arising from  STS study  of the arts. </p>
                      <p class="readmore">CONTINUE READING</p>
                  </div>
                  
              </div> <!-- end row -->
          </div> <!-- end container -->
      </section><!-- end container-fluid -->
<?php get_footer(); /* Tells WordPress to include footer.php */ ?>