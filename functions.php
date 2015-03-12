<?php 

function register_my_menu() {
	register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

?>
<?php
/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Primary sidebar',
		'id'            => 'primary_sidebar',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
		) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );?>
<?php add_theme_support( 'post-thumbnails' ); set_post_thumbnail_size( 400, 250);?>