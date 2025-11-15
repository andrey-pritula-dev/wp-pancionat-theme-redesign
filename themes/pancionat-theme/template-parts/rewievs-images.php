<?php
$images = $args['images'];
?>
<div>
	<div class="lg:flex-row flex justify-center flex-col gap-3 items-center">
		<?php foreach ( $images as $image ) : ?>
			<img src="<?php echo esc_url( $image ); ?>" alt="" class="lg:max-w-[400px] max-w-[80%] mx-auto">
		<?php endforeach; ?>
</div>
