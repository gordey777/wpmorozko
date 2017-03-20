<?php get_header(); ?>
    <div class="container">
    <div class="row">
  <article>

    <h1 class="cat-title inner-title"><?php the_category(', '); ?></h1>
    <div class="loop_wrapp">
      <?php get_template_part('loop'); ?>
    </div>
    <?php get_template_part('pagination'); ?>

  </article>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
