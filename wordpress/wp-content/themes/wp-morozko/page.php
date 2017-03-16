<?php get_header(); ?>
    <div class="container">

  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

      <h1 class="page-title inner-title"><?php the_title(); ?></h1>
      <div class="content_wrapp">
        <?php the_content(); ?>
      </div>
      <?php edit_post_link(); ?>

    </article>
  <?php endwhile; else: // If 404 page error ?>
    <article>

      <h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>

    </article>

  <?php endif; ?>
<?php get_sidebar(); ?>
    </div><!-- /.container -->
<?php get_footer(); ?>
