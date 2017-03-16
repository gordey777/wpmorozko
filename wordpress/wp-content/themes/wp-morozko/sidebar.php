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
                <div class="reviews-side">

            <ul>
              <h6 class="blue-after">отзывы о нас</h6>
              <?php
                $args = array(
                'number' => 3,
                'orderby' => 'comment_date',
                'order' => 'DESC',
                //'post_id' => 0,
                'type' => 'comment',
              );
              if( $comments = get_comments( $args ) ){
                foreach( $comments as $comment ){

                  $comm_short_txt = mb_substr( strip_tags( $comment->comment_content ), 0, 250 );
                  if (mb_strlen($comment->comment_content) > 250) $after='...';
                  else $after = '';
                  echo
                  '<li>'.
                  '<p class="rev-name">'
                  .$comment->comment_author.
                  '</p>'.
                  '<p class="rev-cont">'.$comm_short_txt.$after.'</p>'.
                  '</li>';
                }
              }?>

            </ul>
            <a href="/?page_id=23" class="side-button">ВСЕ ОТЗЫВЫ</a>
          </div><!-- /.reviews-side -->
</aside><!-- /sidebar -->
