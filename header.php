<?php global $template_color ?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8 ie7"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9 ie8"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<title><?php bloginfo('name'); ?></title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/main.css">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/theme.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/fancybox/jquery.fancybox.css">
<link rel="shortcut icon" href="<?php echo get_option('ls_favicon'); ?>" />
<script src="<?php bloginfo('template_directory'); ?>/js/vendor/modernizr-2.6.2.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/lightbox/js/lightbox.js"></script>
<link href="<?php bloginfo('template_directory'); ?>/lightbox/css/lightbox.css" rel="stylesheet" />
<?php wp_head(); ?>	
</head>
<body class="<?php echo $template_color ?>">
<!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->

<div class="wrapper">

  <header class="clearfix">
    
    <h1 class="logo">
	
      <a href="/home/" class="ir">The Law Society</a>
    </h1>
    
    <nav class="main-nav">
      <?php if ( has_nav_menu( 'main-nav' ) ) { 
           wp_nav_menu( array( 'theme_location' => 'main-nav' ) ); 
	 } ?>
    </nav>
  </header><!-- end header -->
  