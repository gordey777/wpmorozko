<?php if (have_posts()): while (have_posts()) : the_post(); ?>
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


  <?php endwhile; else: ?>
  <div>

    <h2 class="title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>

  </div><!-- /article -->
<?php endif; ?>
