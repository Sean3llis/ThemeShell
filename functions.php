<?php 
add_theme_support( 'post-thumbnails' );
add_theme_support( 'menus' );
add_theme_support( 'sidebars' );

show_admin_bar( true );

require get_template_directory() . '/inc/javascripts.php';
require get_template_directory() . '/inc/stylesheets.php';

$locations = array(
	'primary_menu' => 'Displayed as default main nav'
);

register_nav_menus( $locations );


$args = array(
	'name' => 'Main',
	'id' => 'sidebar-main'
);

register_sidebar( $args );


