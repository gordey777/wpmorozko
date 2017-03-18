<aside class="sidebar" role="complementary">
<!-- <nav class="side__menu">
<h6 class="side-menu-title"></h6>
  <?php //wpeSideNav(); ?>
</nav> -->

  <?php if ( is_active_sidebar('widgetarea1') ) : ?>
    <?php dynamic_sidebar( 'widgetarea1' ); ?>


  <?php else : ?>

    <!-- If you want display static widget content - write code here
		RU: Здесь код вывода того, что необходимо для статического контента виджетов -->

  <?php endif; ?>

  <?php if( have_rows('stock', 9 )): ?>
    <div class="side-stocks">
      <h5>Спец предложения</h5>
      <?php while ( have_rows('stock', 9 ) ) : the_row(); ?>
        <div >
          <a class="stock-item" href="<?php the_sub_field('link'); ?>">
            <?php the_sub_field('text'); ?>
          </a>
        </div>
      <?php endwhile; ?>
      <a href="/?page_id=19" class="more-link">Смотреть все</a>
    </div>
  <?php endif; ?>


  <?php

  $post_id = $post->ID;

  if( have_rows('reviews', 19 ) && $post_id != 19 ): ?>
    <div class="reviews-side">
      <h5>Отзывы</h5>

      <?php $i = 0;
          $imax = 3; //количество отзывов в сайдбаре
      while ( have_rows('reviews', 19  ) && $i < $imax ) : the_row(); ?>
        <div class="review-title">
          <p><?php the_sub_field('name'); ?></p>
        </div>
        <div class="review-content">
         <?php  $comm_short_txt = mb_substr( strip_tags( get_sub_field('text') ), 0, 100 );
              if (mb_strlen(get_sub_field('text')) > 100) $after='...';
              else $after = '';
              echo $comm_short_txt.$after;
          //the_sub_field('text');
          ?>
        </div>
      <?php
      $i ++;
      endwhile; ?>
      <a href="/?page_id=19" class="more-link">Смотреть все</a>
    </div><!-- /.reviews-side -->
  <?php endif; ?>


</aside><!-- /sidebar -->
