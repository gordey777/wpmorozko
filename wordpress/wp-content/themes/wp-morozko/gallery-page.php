<?php /* Template Name: Gallery Page */ get_header(); ?>
    <div class="container">

  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <?php edit_post_link(); ?>
      <h1 class="page-title inner-title"><?php the_title(); ?></h1>

      <div class="content_wrapp">
        <?php the_content(); ?>
      </div>

            <?php endwhile;  ?>
  <?php endif; ?>



      <?php

      $category_id = 0;
      $posts_on_page = 0;
      $args = array(
        'cat' => '5', //ID Рубрики
        'post_type' => 'post',
        'posts_per_page' => 9,
        'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),
        );
      query_posts($args); ?>
      <?php if ( have_posts() ) :  ?>
          <div class="loop_wrapp">
            <?php while ( have_posts() ) : the_post(); ?>

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

                  <?php //wpeExcerpt('wpeExcerpt40'); ?>

                </div><!-- /looper -->
            <?php endwhile;  ?>

          </div>
          <div class="pagination">
<!-- noindex --><?php html5wp_pagination(); ?><!-- /noindex -->
          </div><!-- /pagination -->
        <?php endif;
        wp_reset_query(); ?>
  </article>

<?php get_sidebar(); ?>
    </div><!-- /.container -->
<?php get_footer(); ?>
