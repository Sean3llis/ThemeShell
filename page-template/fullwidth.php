<?php
/* Template Name: Full Width Page */

get_header(); ?>

<?php get_template_part('partials/hero', 'default'); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="row">
		<div class="contain">
			<div class="col-sm-12">
				<?php the_content(); ?>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
<?php endwhile; endif; ?>


<?php get_footer(); ?>