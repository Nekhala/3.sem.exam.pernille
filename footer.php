<footer class="site-footer">
      <div class="site-footer__inner container container--narrow">
        <div class="group">
          <div class="site-footer__col-one">
            <h1 class="school-logo-text school-logo-text--alt-color">
              <a href="<?php echo site_url() ?>"><strong>Pernille</strong> Dalmar</a>
            </h1>
            <p><?php the_field('tlf_nummer_footer'); ?></p>
            <p><?php the_field('cvr'); ?></p>
          </div>

          <div class="site-footer__col-two-three-group">
            <div class="site-footer__col-two">
              <h2 class="headline headline--small">Udforsk</h2>
              <nav class="nav-list">
                <ul>
                  <li><a href="<?php echo site_url("/om-mig/")?>" >Om mig</a></li>
                  <li><a href="<?php echo site_url("/kommuner-og-regioner/")?>" >Kommuner</a></li>
                  <li><a href="<?php echo site_url("/foreninger-og-organisationer/")?>" >foreninger</a></li>
                </ul>
              </nav>
            </div>

            <div class="site-footer__col-three">
              <h3 class="headline headline--small"><br></h3>
              <nav class="nav-list">
                <ul>
                  <li><a href="<?php echo site_url("/private-aktorer/")?>" >Private aktører</a></li>
                  <li><a href="<?php echo site_url("/priser-og-det-praktiske/")?>" >Priser</a></li>
                </ul>
              </nav>
            </div>
          </div>

          <div class="site-footer__col-four">
            <h3 class="headline headline--small">Find mig på</h3>
            <nav>
              <ul class="min-list social-icons-list group">
                <li>
                  <a href="<?php the_field("facebook_link") ?>" class="social-color-facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                </li>
                <!--
                <li>
                  <a href="#" class="social-color-twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                </li>
                <li>
                  <a href="#" class="social-color-youtube"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                </li>
                -->
                <li>
                  <a href="<?php the_field("linkedin_link") ?>" class="social-color-linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                </li>
                <!--
                <li>
                  <a href="#" class="social-color-instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </li>
                -->
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </footer>

<?php wp_footer(); ?>
</body>
</html>