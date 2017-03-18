<?php /* Template Name: Reviews Page */ get_header(); ?>
    <div class="container">

  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php edit_post_link(); ?>
      <h1 class="page-title inner-title"><?php the_title(); ?></h1>

      <div class="content_wrapp">
        <?php the_content(); ?>
      </div>


<?php
/*
 * Paginate Advanced Custom Field repeater
 */

if( get_query_var('paged') ) {
  $paged = get_query_var( 'paged' );
} else {
  $paged = 1;
}


$row              = 0;
$reviews_per_page  = 1; // Количество отзывов на страницу
$reviews           = get_field( 'reviews' );
$total            = count( $reviews );
$pages            = ceil( $total / $reviews_per_page );
$min              = ( ( $paged * $reviews_per_page ) - $reviews_per_page ) + 1;
$max              = ( $min + $reviews_per_page ) - 1; ?>

<?php
       if( have_rows('reviews' )): ?>
          <?php while ( have_rows('reviews' ) ) : the_row();
    $row++;

    if($row < $min) { continue; }

    if($row > $max) { break; } ?>

            <div class="review-title">
              <p><?php the_sub_field('name');?><?php if( get_sub_field('age' ) ) { ?>, <?php the_sub_field('age'); } ?>
              <?php if( get_sub_field('city' ) ) { ?> (<?php the_sub_field('city'); ?>)<?php } ?></p>
            </div>
            <div class="review-content">
              <?php the_sub_field('text'); ?>
            </div>
          <?php  endwhile; ?>

<div class="pagination">


  <?php
    global $wp_query;
  $big = 999999999;

  echo paginate_links( array(
    'base' => str_replace($big, '%#%', get_pagenum_link($big)),
    'format' => '?paged=%#%',
    'current' => $paged,
    'total' => $pages,
    'prev_text' => 'Назад',
    'next_text' => 'Далее',
  ) );
  ?>
</div><!-- /pagination -->


<?php endif; ?>

    </article>
  <?php endwhile; else: // If 404 page error ?>
    <article>

      <h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>

    </article>

  <?php endif; ?>



<?php get_sidebar(); ?>
    </div><!-- /.container -->
<?php get_footer(); ?>
