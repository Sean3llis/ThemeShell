<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title><?php echo get_bloginfo('name') . ' | ' . get_the_title(); ?></title>
	<?php wp_head(); ?>
</head>
<body class="<?php body_class(); ?>">
<div class="fluid-container">
<nav>
	<div class="contain">
	<?php
		$args = array(
			'theme_location'  => 'primary_menu',
			'container'       => false,
			'menu_class'			=> 'list-inline'
		);

		wp_nav_menu($args);

	?>
	</div>
</nav>