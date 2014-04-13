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

?>