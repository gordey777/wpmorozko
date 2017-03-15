        </div><!-- /.inner -->
      </section><!-- /section -->

    </div><!-- /wrapper -->

    <footer role="contentinfo">
      <div class="inner">

        <div class="order-form">
          <div class="container">
            <?php echo do_shortcode('[contact-form-7 id="39" title="Сделать заказ"]'); ?>
          </div><!-- /.container -->
        </div><!-- /.order-form -->

        <div class="partners">
          <div class="container">

          </div><!-- /.container -->
        </div><!-- /.partners -->

        <div class="footer-bottom">
          <div class="container">

            <div class="footer-logo">
              <?php if ( is_front_page() && is_home() ){ } else { ?>
                <a href="<?php echo home_url(); ?>">
                  <?php  } ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/logo-footer.png" alt="<?php wp_title( '' ); ?>" title="<?php wp_title( '' ); ?>" class="logo-img">
                  <?php if ( is_front_page() && is_home() ){
                  } else { ?>
                </a>
              <?php } ?>
            </div><!-- /logo -->

            <div class="footer-contacts-center">
              <span class="adress">г. Санкт-Петербург, пр. Славы, д. 26</span>

              <a href="mailto:fabrika-morozko@yandex.ru" class="mail">fabrika-morozko@yandex.ru</a>
            </div>

            <div class="footer-contacts-right">
              <div class="phone-block">
                <a href="tel:+79650116505" class="phone-link">+7 (965) <span>011-6505</span></a>
                <a class="phone-calback" href="#">заказать звонок</a>
              </div>
            </div>

            <div class="footer-a1-logo">
              <a href="#" class="a1-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo-a1.png" alt="">
                <span>Создание сайта</span>
                <span>Студия А1</span>
              </a>
            </div>


          </div><!-- /.container -->
        </div><!-- /.footer-bottom -->

      </div><!-- /.inner -->
    </footer><!-- /footer -->

      <?php wp_footer(); ?>

  </body>
</html>
