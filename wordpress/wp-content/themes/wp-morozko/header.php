<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' :'; } ?> <?php bloginfo( 'name' ); ?></title>

  <link href="http://www.google-analytics.com/" rel="dns-prefetch"><!-- dns prefetch -->

  <!-- icons -->
  <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">

  <!--[if lt IE 9]>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- css + javascript -->
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!-- wrapper -->
<div class="wrapper">
  <header role="banner">
    <div class="inner">
      <div class="container">
        <div class="contacts-left">

            <span class="adress">г. Санкт-Петербург, пр. Славы, д. 26</span>

            <a href="mailto:fabrika-morozko@yandex.ru" class="mail">fabrika-morozko@yandex.ru</a>

        </div>



        <div class="logo">
          <?php if ( is_front_page() && is_home() ){ } else { ?>
            <a href="<?php echo home_url(); ?>">
              <?php  } ?>
              <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="<?php wp_title( '' ); ?>" title="<?php wp_title( '' ); ?>" class="logo-img">
              <?php if ( is_front_page() && is_home() ){
              } else { ?>
            </a>
          <?php } ?>
        </div><!-- /logo -->

        <div class="contacts-right">
          <div class="phone-block">
            <a href="tel:+79650116505" class="phone-link">+7 (965) <span>011-6505</span></a>
            <a class="phone-calback open_modal" href="#modalCallback">заказать звонок</a>
          </div>
          <div class="order-block">
            <a href="#modalOrder" class="button blue_button open_modal">Сделать заказ</a>

          </div>
        </div>


        <nav class="nav" role="navigation">
          <?php wpeHeadNav(); ?>
          <?php wpeRightHeadNav(); ?>
        </nav><!-- /nav -->


      </div><!-- /.container -->
    </div><!-- /.inner -->
  </header><!-- /header -->

<div id="modalCallback" class="modal_div"> <!-- скрытый див с уникaльным id = modal1 -->
  <span class="modal_close"></span>
  <h3>Заказать звонок</h3>
    <?php echo do_shortcode('[contact-form-7 id="166" title="Modal Заказать звонок"]'); ?>
</div>

<div id="modalOrder" class="modal_div"> <!-- скрытый див с уникaльным id = modal1 -->
  <span class="modal_close"></span>
   <h3>Сделать заказ</h3>
   <?php echo do_shortcode('[contact-form-7 id="164" title="Modal Сделать заказ"]'); ?>
</div>

<div id="overlay"></div><!-- Пoдлoжкa, oднa нa всю стрaницу -->

  <section role="main">
    <div class="inner">


