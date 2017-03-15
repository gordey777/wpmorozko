<?php get_header(); ?>
<div class="home__slide">
  <div class="container">

        <h2 class="slide-title">Швейная мастерская</h2>
        <span class="slide-slogan">Современное швейное производство</span>
        <a href="#" class="button blue_button">Подробнее</a>

  </div><!-- /.container -->
</div><!-- /.slide -->
<div class="container">



      <article class="col-md-12">

      <h1 class="ctitle"><?php _e( 'Latest Posts', 'wpeasy' ); ?></h1>
      <?php get_template_part('loop'); ?>
      <?php get_template_part('pagination'); ?>

      </article>


    <?php get_sidebar(); ?>

  </div><!-- /.container -->
<?php get_footer(); ?>
