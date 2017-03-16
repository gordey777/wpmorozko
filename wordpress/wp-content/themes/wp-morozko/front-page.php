<?php /* Template Name: Home Page */get_header(); ?>
<div class="home__slide">
  <div class="container">

        <h2 class="slide-title">Швейная мастерская</h2>
        <span class="slide-slogan">Современное швейное производство</span>
        <a href="#" class="button blue_button">Подробнее</a>

  </div><!-- /.container -->
</div><!-- /.slide -->
<div class="container">

  <?php if (have_posts()): while (have_posts()) : the_post(); ?>

<?php edit_post_link(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

      <h1 class="ctitle"><?php the_title(); ?></h1>

      <div class="content_wrapp">
        <?php the_content(); ?>
      </div>



      </article>
  <?php endwhile; else: // If 404 page error ?>
    <article>

      <h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>

    </article>

  <?php endif; ?>


  </div><!-- /.container -->
<?php get_footer(); ?>
