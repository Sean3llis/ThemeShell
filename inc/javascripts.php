<?php
	
	function my_scripts(){
		wp_enqueue_script('jquery');
		// named handle for reference within wordpress, path to JS file, dependencies, version number, in_footer = set to true to output in get_footer()
		wp_enqueue_script( 'bootstrap_JS', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '', true );
		wp_enqueue_script( 'main_JS', get_template_directory_uri() . '/js/main.js', array(), '', true );
	}

	add_action( 'wp_enqueue_scripts', 'my_scripts' );