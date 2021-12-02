<?php get_header(); ?>

  <?php if(have_posts()): ?>
    <?php while(have_posts()): the_post() ?>

      <div class="page-banner">
            <div class="page-banner__bg-image" style="background-image: url(<?php the_field('cover') ?>);"></div> <!--HJÆLP HER-->
            <div class="page-banner__content container container--narrow">
              <h1 class="page-banner__title"><?php the_title(); ?></h1>
              <div class="page-banner__intro">
                <p><?php the_content(); ?></p>
                
              </div>
            </div>
          </div>

          <div class="container container--narrow page-section">


        <!-- SKAL IKKE BRUGES

          <video  width="320" height="240" controls>
            <source src="<?php the_field('interview_video'); ?>" type="video/mp4">
          </video>
   
        
          

            <video  width="1280" height="720" controls id="myinterview">
              <source src="<?php the_field('interview_video'); ?>" type="interview/mp4">
            </video>

          -->

         
          <?php if(get_field('youtube_link')): ?>
          <iframe width="560" height="315" src="<?php the_field('youtube_link'); ?>" title="YouTube video player" frameborder="0" allow="" allowfullscreen></iframe> <!-- HJÆLPE HER -->
          
          <?php endif; ?>
         
<!--        SKAL HELLER IKKE BRUGES 

            <div class="page-links">
              <h2 class="page-links__title"><a href="#">About Us</a></h2>
              <ul class="min-list">
                <li class="current_page_item"><a href="#">Our History</a></li>
                <li><a href="#">Our Goals</a></li>
              </ul>
            </div>
  -->
            <div class="generic-content">
              <p>
              <?php the_field('om_mig'); ?>
              <?php the_field('kommuner_og_regioner'); ?>
              <?php the_field('foreninger_og_organisationer'); ?>
              <?php the_field('private_aktorer'); ?>
              <?php the_field('priser'); ?> 
              
              </p>
            </div>
          </div>
          

    <?php endwhile; ?>
  <?php endif; ?>  

<?php get_footer(); ?>