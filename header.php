<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-157352620-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-157352620-1');
    </script>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <link rel="canonical" href="https://getbootstrap.com/docs/3.4/examples/blog/">

    <title><?php bloginfo('name'); ?> |
            <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
    </title>
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
    
    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('template_url'); ?>/css/fonts.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_url') ?>" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/navigation.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/single.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/challenge.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/blog.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/search.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/sidebar.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/contact.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/comments.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/cc25cdcc48.js" crossorigin="anonymous"></script>

    <script src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>
    <?php echo get_theme_mod('mailchimp_script', '<script type="text/javascript" src="//downloads.mailchimp.com/js/signup-forms/popup/unique-methods/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script><script type="text/javascript">window.dojoRequire(["mojo/signup-forms/Loader"], function(L) { L.start({"baseUrl":"mc.us4.list-manage.com","uuid":"a7eda82c4d9503d494b8ff1c3","lid":"79432588e1","uniqueMethods":true}) })</script>'); ?>
    </head>
  <body>

	<!-- Navigation -->
	<nav class="navbar navbar-expand-md nav-down fixed-top">
		<div class="container-fluid">
			<a class="navbar-brand" href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/assets/img/logo-small.svg" alt="21daystochange logo"></a>
			<div class="navbar-social-media">
				<a href="https://www.instagram.com/21daystochangeuk/" target="_blank"><i class="fab fa-instagram"></i></a>
				<a href="https://twitter.com/21daystochange_" target="_blank"><i class="fab fa-twitter"></i></a>
				<a href="https://www.youtube.com/channel/UCkehI07akNB0hMyEnCJagqg?view_as=subscriber" target="_blank"><i class="fab fa-youtube" target="_blank"></i></a>
			</div>
			<button id="burger" class="open-main-nav">
				<span class="burger"></span>
			</button>
			<div class="main-nav" id="main-nav">
      <?php wp_nav_menu( array(
            'theme_location' => 'header-menu'
        ) ); ?>
			</div>
		</div>
  </nav>

  <a id="scroll-up-btn"><img src="<?php bloginfo('template_url'); ?>/assets/icons/scroll-up.svg"></a>


  