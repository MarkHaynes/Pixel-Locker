<?php 

	//Better way to register Menus
	function register_menus() {
		register_nav_menus(
			array(
				'header-menu' => __( 'Header Menu'),
				'mobile-menu' => __( 'Mobile Menu'),
				'footer-menu' => __( 'Footer Menu')
			)
		);
	}
	add_action ('init', 'register_menus');

	function get_footerMsg() {

		$customValues = get_post_custom_values("footerMsg");
		$msg = $customValues[0];

		if (!empty($customValues)){

			$footerMsg = '<h1 class="title">'. $msg .'</h1>';
			echo $footerMsg;

		}
		else {
			echo '<h1 class="title">It would be great to hear from you :)</h1>';
			echo '<nav class="social"><ul>';
			echo '<li class="btn"><a href="http://pixellocker.co.uk">email</a></li>';
			echo '<li class="facebook"><a href="#">facebook</a></li>';
			echo '<li class="twitter"><a href="#">twitter</a></li>';
			echo '</ul></nav>';
		}
	}

	function custom_excerpt_more( $more ) {
		return '...';
	}
	add_filter( 'excerpt_more', 'custom_excerpt_more' );

add_theme_support( 'post-thumbnails' ); 
?>
