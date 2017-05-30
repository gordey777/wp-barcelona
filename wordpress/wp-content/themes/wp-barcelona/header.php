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
    <div class="container">
      <div class="row">

          <div class="col-md-12 top-line">
              <div class="reg-left">
                Регистрация
            </div>
          </div>
      </div>
      <div class="row">
        <div class="col-md-12 black_line">

          <div class="col-sm-4 hidden-xs">
            <span class="head-pink-title">Челябинск BARCELONA</span>
            <span class="adress">ул. Комсомольский проспект, 78</span>
            <a href="tel:73517428803" class="head-phone">+7 (351) 742 88 03</a>
          </div>
          <div class="col-sm-4">
            <div class="logo">
              <?php if ( !is_front_page() && !is_home() ){ ?>
                <a href="<?php echo home_url(); ?>">
              <?php } ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="<?php wp_title( '' ); ?>" title="<?php wp_title( '' ); ?>" class="logo-img">
              <?php if ( !is_front_page() && !is_home() ){ ?>
                </a>
              <?php } ?>
            </div><!-- /logo -->
          </div>

          <div class="col-md-3 col-md-offset-1 col-sm-4 online-entry-wrapp">
            <a data-toggle="modal" href="#modal_callback" class="online-entry">+ Онлайн-запись</a>
          </div>


            <nav class="nav" role="navigation">
              <?php wpeHeadNav(); ?>
            </nav><!-- /nav -->


        </div>
      </div><!-- /.row -->
    </div><!-- /.container -->
  </header><!-- /header -->


  <section role="main">
    <div class="container">
      <div class="inner">
