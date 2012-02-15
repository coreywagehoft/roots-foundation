<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>

  <meta name="viewport" content="width=device-width">

  <?php roots_stylesheets(); ?>
  <!--[if lt IE 9]>
    <link rel="stylesheet" href="<?php get_template_directory_uri();?>/css/ie.css">
  <![endif]-->

  <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/libs/jquery-1.7.1.min.js"><\/script>')</script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/libs/jquery.reveal.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/libs/jquery.orbit-1.4.0.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/libs/jquery.customforms.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/libs/jquery.placeholder.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/libs/modernizr.foundation.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/libs/jquery.tooltips.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/libs/app.js"></script>

  <?php roots_head(); ?>
  <?php wp_head(); ?>

</head>

<body <?php body_class(roots_body_class()); ?>>

  <!--[if lt IE 7]><p class="chromeframe">Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

  <?php roots_header_before(); ?>
  <?php roots_header_inside(); ?>
  <div id="zurBar" class="<?php echo WRAP_CLASSES;?>">
      <div class="<?php echo CONTAINER_CLASSES;?>">
          <div class="four columns">
              <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name');?></a></h1>
              <a href="#" id="mobileNav" data-reveal-id="navModal" class="small nice button show-on-phones">Nav</a>
          </div>
          <div id="nav-main" class="eight columns hide-on-phones nav-collapse" role="navigation">
                  <?php wp_nav_menu(array('theme_location' => 'primary_navigation', 'walker' => new Roots_Navbar_Nav_Walker())); ?>
          </div>
      </div>
  </div>
  <?php roots_header_after(); ?>

  <div id="wrap" class="<?php echo WRAP_CLASSES; ?>" role="document">