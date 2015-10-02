<?php if( has_post_thumbnail() ) :
	$thumb_id = get_post_thumbnail_id();
	$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full');
	$img = $thumb_url_array[0];
?>
	<div id="hero" class="default" style="background-image: url(<?php echo $img; ?>); background-size: cover;">
<?php else : ?>
	<div id="hero" class="default123123">
<?php endif; ?>

	<div class="contain">
			<div class="titles">
				<div class="title">Helllo!!!!!!</div>
				<div class="sub-title">Hello 2 !</div>
			</div>
	</div>
</div>