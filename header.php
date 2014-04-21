<!DOCTYPE html>
<html lang="en-gb">
	<meta charset="utf-8">

	<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<head>
		
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/normalize.css" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,400,300,600,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); echo '?' . filemtime( get_stylesheet_directory() . '/style.css'); ?>" type="text/css"/>

		<!--[if lt IE 9]>
     		<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		
		<link rel="apple-touch-icon-precomposed"  href="<?php bloginfo('template_url'); ?>/appleicons/apple-touch-icon-precomposed.png" />
		<link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php bloginfo('template_url'); ?>/appleicons/apple-touch-icon-57x57-precomposed.png" />
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php bloginfo('template_url'); ?>/appleicons/apple-touch-icon-72x72-precomposed.png" />
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php bloginfo('template_url'); ?>/appleicons/apple-touch-icon-114x114-precomposed.png" />

		<?php wp_head(); ?>

	</head>
	<body>

		<header id="mainHeader" role="banner">
		
			<div class="wrap">

				<div id="logo">
					<a href="http://pixellocker.co.uk">
						<img id="pl-logo" alt="Pixel Locker Logo" src="<?php bloginfo('template_url'); ?>/images/pixellockerlogo.png" height="30px">
					</a>
				</div>

				<nav id="mainNav" role="navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
				</nav>

				<div class="clear"></div>

			</div>

		</header>

		
