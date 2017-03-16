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
</aside><!-- /sidebar -->
