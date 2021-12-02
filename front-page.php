<?php get_header(); ?>


<div class="page-banner"> <!--HER SKAL TOP B SCENER AF PERNILLE VÆRE-->
      <div class="page-banner__bg-image">
      <video autoplay muted loop id="myVideo">
        <source src="<?php the_field('bg_video'); ?>" type="video/mp4">
      </video>
      </div>
      <div class="page-banner__content container t-center c-white">
        <h1 class="headline headline--large"><?php the_title(); ?></h1>
        <h2 class="headline headline--small"><?php the_content(); ?></h2>
<!-- <h3 class="headline headline--small"><?php the_field('under_header_tekst'); ?></h3> -->
        <a href="<?php echo site_url("/om-mig/")?>" class="btn btn--large btn--blue">Om mig</a> <!--Lav et link til "KONTAKT"-->
      </div>
    </div>



    <div class="full-width-split group">
<!--Lav et link TITLE til "VENSTRE BLOK 1 & 2"-->
      <div class="full-width-split__one">
        <div class="full-width-split__inner">
          <h2 class="headline headline--small-plus t-center"><strong><?php the_field('venstre_blok_head'); ?></strong></h3>

          <div class="event-summary">
            <div class="event-summary__content">
              <h4 class="event-summary__title headline headline--tiny"><a href="<?php echo site_url("/kommuner-og-regioner/")?>"><?php the_field('venstre_blok_subhead_1'); ?></a></h4> 
              <p><?php the_field('venstre_blok_tekst_1'); ?> <a href="<?php echo site_url("/kommuner-og-regioner/")?>" class="nu gray">Læs mere</a></p>
            </div>
          </div>
          <div class="event-summary">
            <div class="event-summary__content">
              <h4 class="event-summary__title headline headline--tiny"><a href="<?php echo site_url("/foreninger-og-organisationer/")?>"><?php the_field('venstre_blok_subhead_2'); ?></a></h4> 
              <p><?php the_field('venstre_blok_tekst_2'); ?> <a href="<?php echo site_url("/foreninger-og-organisationer/")?>" class="nu gray">Læs mere</a></p>
            </div>
          </div>
<!--Lav et link KNAP til "VENSTRE BLOK" -->
            <div class="headline headline--small-plus t-center"> 
                <a href="<?php echo site_url("/kommuner-og-regioner/")?>" class="btn2 btn--blue"><?php the_field('venstre_blok_subhead_1'); ?></a> 
                <a href="<?php echo site_url("/foreninger-og-organisationer/")?>" class="btn2 btn--blue"><?php the_field('venstre_blok_subhead_2'); ?></a> 
            </div> 
        </div>
      </div>

 <!--Lav et link TITLE til "HØJRE BLOK 1 & 2"-->
      <div class="full-width-split__two">
        <div class="full-width-split__inner">
          <h2 class="headline headline--small-plus t-center"><strong><?php the_field('hojre_blok_head'); ?></strong></h3>

          <div class="event-summary">
            <div class="event-summary__content">
              <h4 class="event-summary__title headline headline--tiny"><a href="<?php echo site_url("/private-aktorer/")?>"><?php the_field('hojre_blok_subhead_1'); ?></a></h4> 
              <p><?php the_field('hojre_blok_tekst_1'); ?> <a href="<?php echo site_url("/private-aktorer/")?>" class="nu gray">Læs mere</a></p>
            </div>
          </div>

          <div class="event-summary">
            <div class="event-summary__content">
              <h4 class="event-summary__title headline headline--tiny"><a href="<?php echo site_url("/priser-og-det-praktiske/")?>"><?php the_field('hojre_blok_subhead_2'); ?></a></h4> 
              <p><?php the_field('hojre_blok_tekst_2'); ?> <a href="<?php echo site_url("/priser-og-det-praktiske/")?>" class="nu gray">Læs mere</a></p>
            </div>
          </div>
<!--Lav et link KNAP til "HØJRE BLOK"-->
            <div class="headline headline--small-plus t-center"> 
                <a href="<?php echo site_url("/private-aktorer/")?>" class="btn2 btn--blue"><?php the_field('hojre_blok_subhead_1'); ?></a> 
                <a href="<?php echo site_url("/priser-og-det-praktiske/")?>" class="btn2 btn--blue"><?php the_field('hojre_blok_subhead_2'); ?></a> 
            </div> 
        </div>
      </div>
    </div>

    <div class="hero-slider">
      <div data-glide-el="track" class="glide__track">
        <div class="glide__slides"> 
<!--HER SKAL SLIDE BILLEDERNE VÆRE-->
          <div class="hero-slider__slide" style="background-image: url(<?php the_field('slide_billede_1') ?>);">
            <div class="hero-slider__interior container">
              <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center"><?php the_field('slide_1'); ?></h2>
                <p class="t-center"><?php the_field('slide_1_sub_tekst'); ?></p>
                <p class="t-center no-margin"><a href="<?php echo site_url("/kommuner-og-regioner/")?>" class="btn btn--blue">Læs mere</a></p> <!--Link til knap slide 1-->
              </div>
            </div>
          </div> 
<!--HER SKAL SLIDE BILLEDERNE VÆRE-->
          <div class="hero-slider__slide" style="background-image: url(<?php the_field('slide_billede_2') ?>);">
            <div class="hero-slider__interior container">
              <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center"><?php the_field('slide_2'); ?></h2>
                <p class="t-center"><?php the_field('slide_2_sub_tekst'); ?></p>
                <p class="t-center no-margin"><a href="<?php echo site_url("/foreninger-og-organisationer/")?>" class="btn btn--blue">Læs mere</a></p> <!--Link til knap slide 2-->
              </div>
            </div>
          </div> 
<!--HER SKAL SLIDE BILLEDERNE VÆRE-->
          <div class="hero-slider__slide" style="background-image: url(<?php the_field('slide_billede_3') ?>);">
            <div class="hero-slider__interior container">
              <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center"><?php the_field('slide_3'); ?></h2>
                <p class="t-center"><?php the_field('slide_3_sub_tekst'); ?></p>
                <p class="t-center no-margin"><a href="<?php echo site_url("/private-aktorer/")?>" class="btn btn--blue">Læs mere</a></p> <!--Link til knap slide 3-->
              </div>
            </div>
          </div> 
<!--HER SKAL SLIDE BILLEDERNE VÆRE-->
          <div class="hero-slider__slide" style="background-image: url(<?php the_field('slide_billede_4') ?>);">
            <div class="hero-slider__interior container">
              <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center"><?php the_field('slide_4'); ?></h2>
                <p class="t-center"><?php the_field('slide_4_sub_tekst'); ?></p>
                <p class="t-center no-margin"><a href="<?php echo site_url("/priser-og-det-praktiske/")?>" class="btn btn--blue">Læs mere</a></p> <!--Link til knap slide 4-->
              </div>
            </div>
          </div>
        </div>
        <div class="slider__bullets glide__bullets" data-glide-el="controls[nav]"></div>
      </div>
    </div>

  

<?php get_footer(); ?>
