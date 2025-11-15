<?php
$section_title = $args['title'];
$image         = $args['image'];
?>
<div class="services-hero w-[100%] flex items-center justify-center px-4 text-center h-[400px]" style="background-image: url(<?php echo esc_url( $image ); ?>); background-size: cover; background-position: center;">
	<h1 class="text-white font-semibold text-6xl">
		<?php echo esc_html( $section_title ); ?>
	</h1>
</div>
