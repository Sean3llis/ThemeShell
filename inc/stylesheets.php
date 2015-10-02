<?php
	
	function my_sheets() {
		wp_enqueue_style( 'bootstrap_CSS', get_template_directory_uri() . '/css/bootstrap.min.css');
		wp_enqueue_style( 'theme_CSS', get_template_directory_uri() . '/css/theme.css');
	}

	add_action( 'wp_enqueue_scripts', 'my_sheets' );