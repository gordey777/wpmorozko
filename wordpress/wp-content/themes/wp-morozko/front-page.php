<?php /* Template Name: Home Page */get_header(); ?>
<?php if( have_rows('top_slide', 9 ) ): ?>
  <div class="home__slide">
    <div class="container">
        <?php while ( have_rows('top_slide', 9 ) ) : the_row(); ?>
          <h2 class="slide-title"><?php the_sub_field('title'); ?></h2>
          <span class="slide-slogan"><?php the_sub_field('sub_title'); ?></span>
          <a href="<?php the_sub_field('link'); ?>" class="button blue_button">Подробнее</a>
        <?php  endwhile; ?>
    </div><!-- /.container -->
  </div><!-- /.home__slide -->
<?php endif; ?>


<div class="container">
  <?php if( have_rows('servises', 9 ) ): ?>
      <div class="servises__wrapp">
        <?php while ( have_rows('servises', 9 ) ) : the_row(); ?>
          <div class="service__item">
            <a href="<?php the_sub_field('link'); ?>">
              <div class="img_wrapp">
                <img src="<?php the_sub_field('icon'); ?>" alt="<?php the_sub_field('title'); ?>">
              </div>

              <h6 class="serv_title">
                <?php the_sub_field('title'); ?>
              </h6>
            </a>
          </div>
        <?php  endwhile; ?>
      </div><!-- /.servises__wrapp -->
  <?php endif; ?>



  <?php if (have_posts()): while (have_posts()) : the_post(); ?>

      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <?php edit_post_link(); ?>

      <div class="content_wrapp">
        <?php the_content(); ?>
      </div>



<div class="portfolio">
  <h4>Примеры наших работ</h4>
        <?php
      $args = array(
        'cat' => 5, //ID Рубрики
        'post_type' => 'post',
        'posts_per_page' => 6,
        );


$query = new WP_Query( $args );


if ( $query->have_posts() ) { ?>
          <div class="loop_wrapp">
  <?php while ( $query->have_posts() ) { ?>
    <?php $query->the_post(); ?>
                <div id="post-<?php the_ID(); ?>" <?php post_class('looper'); ?>>
                  <?php $images = get_field('gallery'); ?>
                  <a rel="nofollow" class="feature-img" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                    <?php if ( has_post_thumbnail()) {
                      the_post_thumbnail('medium');
                    }

                    elseif ($images) {
                    $image = $images[0]; ?>
                      <img src="<?php echo $image['sizes']['medium']; ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
                    <?php }

                    else { ?>
                      <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
                    <?php } ?>

                  </a><!-- /post thumbnail -->

                  <span class="feature__title">
                  <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                  </span><!-- /post title -->

                </div><!-- /looper -->


  <?php } ?>
  </div>

<?php }

wp_reset_postdata();  ?>

  </div>


      </article>
  <?php endwhile; else: // If 404 page error ?>
    <article>

      <h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>

    </article>

  <?php endif; ?>


  </div><!-- /.container -->
<?php get_footer(); ?>
