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
			echo '<li class="btn"><a href="'. get_permalink(get_page_by_path( 'contact' )) .'" alt="Contact Us Now!">email</a></li>';
			echo '<li class="facebook"><a href="#">facebook</a></li>';
			echo '<li class="twitter"><a href="#">twitter</a></li>';
			echo '</ul></nav>';
		}
	}

	function custom_excerpt_more( $more ) {
		return '....';
	}
	add_filter( 'excerpt_more', 'custom_excerpt_more' );

	function custom_excerpt_length( $length ) {
		return 40;
	}
	add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

	//Featured Images

	add_theme_support( 'post-thumbnails' );

	if ( function_exists( 'add_theme_support' ) ) {
		set_post_thumbnail_size( 150, 150, true );
		add_image_size( 'blog-list-thumbnail', 620, 200, true);
		add_image_size( 'portfolio-list-thumbnail', 300, 200, true); 
	}

	// Short Excerpt

	function get_portfolio_excerpt($count){
		$excerpt = get_the_excerpt();
		$excerptLength = strlen($excerpt);
		$excerpt = preg_replace(" (\[.*?\])",'',$excerpt);
		$excerpt = strip_shortcodes($excerpt);
		$excerpt = strip_tags($excerpt);
		$excerpt = substr($excerpt, 0, $count);
		$excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
		if ($excerptLength > $count) {
			$excerpt = $excerpt.'...';
		}
	return $excerpt;
}

add_action( 'init', 'my_add_excerpts_to_pages' );
function my_add_excerpts_to_pages() {
     add_post_type_support( 'page', 'excerpt' );
}

?>