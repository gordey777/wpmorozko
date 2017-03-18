<?php get_header(); ?>
    <div class="container">
    <div class="row">
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php edit_post_link(); ?>
      <h1 class="single-title inner-title"><?php the_title(); ?></h1>
      <?php if ( has_post_thumbnail()) :?>
        <a class="single-thumb" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
          <?php the_post_thumbnail(); // Fullsize image for the single post ?>
        </a>
      <?php endif; ?><!-- /post thumbnail -->


      <div class="content_wrapp">
        <?php the_content(); ?>
      </div>

          <?php

        $images = get_field('gallery');

        if( $images ): ?>
            <ul class="gallery-items">
                <?php foreach( $images as $image ): ?>
                    <li class="gallery-item">
                        <a href="<?php echo $image['url']; ?>" rel="lightbox">
                             <img class="gallery-img" src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" />
                        </a>
                        <p><?php echo $image['caption']; ?></p>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>



    </article>
  <?php endwhile; else: ?>
    <article>

      <h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>

    </article>
  <?php endif; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
