        </div><!-- /.inner -->
      </section><!-- /section -->

    </div><!-- /wrapper -->

    <footer role="contentinfo">
      <div class="inner">

        <div class="order-form">
          <div class="container">
            <h2 class="order-title">
              Сделать заказ
            </h2>
            <div class="form_wrapp">
              <?php echo do_shortcode('[contact-form-7 id="39" title="Сделать заказ"]'); ?>
            </div>


          </div><!-- /.container -->
        </div><!-- /.order-form -->

        <div class="partners">
          <div class="container">

    <?php if( have_rows('footer_partners', 9 ) ): ?>


      <div id="partner-slider" class="owl-carousel">


        <?php while ( have_rows('footer_partners', 9 ) ) : the_row(); ?>
          <div class="item">
            <?php if( get_sub_field('link' ) ): ?>
              <a href="<?php the_sub_field('link'); ?>">
            <?php endif; ?>

              <?php $image = get_sub_field('image');
              if( !empty($image) ): ?>
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
              <?php endif; ?>

            <?php if( get_sub_field('link' ) ): ?>
              </a>
            <?php endif; ?>

          </div>
        <?php  endwhile; ?>
      </div><!-- .main-slider -->

    <?php endif; ?>
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


              <a href="#" class="a1-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo-a1.png" alt="">
                <span>Создание сайта<br>Студия А1</span>
              </a>



          </div><!-- /.container -->
        </div><!-- /.footer-bottom -->

      </div><!-- /.inner -->
    </footer><!-- /footer -->

      <?php wp_footer(); ?>
<script>
  $(document).ready(function() {
  $("#partner-slider").owlCarousel({
    items: 6,
    margin: 40,
    dots: false,
    nav: true,
    navText: '',
    //center: true,
  });
});
</script>
  </body>
</html>
