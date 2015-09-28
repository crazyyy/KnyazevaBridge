<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' :'; } ?> <?php bloginfo( 'name' ); ?></title>

    <link href="http://www.google-analytics.com/" rel="dns-prefetch"><!-- dns prefetch -->
    <!-- meta -->

    <!-- icons -->
    <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">

    <!-- css + javascript -->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!-- wrapper -->
<div class="wrapper">
  <header role="banner">
    <div class="row">
      <div class="container">
        <div class="col-md-3 logo">

        </div><!-- logo -->
        <div class="col-md-3 description">
          <p>Стильный маркетинг и персональный Я-брендинг. Место и время для лучшего.</p>
        </div><!-- /.col-md-3 description -->
        <div class="col-md-offset-2 col-md-2 phone">
          <a href="tel:+375291172017">+375 29 <span>117 20 17</span></a>
        </div><!-- phone -->
        <div class="col-md-2 online-order">
          <a class="btn-transparent" href="#">Онлайн запись</a>
        </div><!-- online-order -->
      </div>
    </div>
  </header><!-- /header -->

  <section role="main">
