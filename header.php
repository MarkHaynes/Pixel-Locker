<!DOCTYPE html>
<html lang=en>
	<meta charset=utf-8>

	<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>

	<head>

		<link rel="stylesheet" media="only screen and (min-width: 960px)" href="<?php bloginfo('template_url'); ?>/style.css" />
		
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

		<div id="siteWrap">
		<header role="banner">
			
			<h1>Pixellocker</h1>

		</header>

		<nav role="navigation">
			<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'container_class' => 'menu-header' ) ); ?>

		</nav>
		

		
