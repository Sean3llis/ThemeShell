<?php
/* Template Name: 2 Column Template */

get_header(); ?>

<?php get_template_part('partials/hero', 'default'); ?>

<div class="row">
	<div class="contain">
		<div class="col-sm-8">LOL</div>
		<div class="col-sm-4">
			<?php dynamic_sidebar( 'sidebar-main' ); ?>
		</div>
		<div class="clearfix"></div>
	</div>
</div>


<?php get_footer(); ?>