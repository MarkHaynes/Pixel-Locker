<?php 

// Registering first sidebar
function widgets_init() {
register_sidebar(array(
'name' => __( 'Sidebar 1'),
'id' => 'sidebar-1',
'before_widget' => '',
'after_widget' => '<br>',
'before_title' => '<h4 class="side">',
'after_title' => '</h4>',
));
}
add_action( 'init', 'widgets_init' );


// Registering Custom Menu
add_action('init','register_custom_menu');
function register_custom_menu(){
register_nav_menu('custom_menu',__('Custom Menu'));
}
?>