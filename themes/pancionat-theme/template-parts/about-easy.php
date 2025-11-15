<?php
$section_title = $args['title'];
$text          = $args['text'];
$image         = $args['image'];
$items         = $args['items'];

?>

<div class="bg-white lg:flex justify-center gap-[70px] items-center py-8 px-4">
	<div class="lg:w-[600px]">
		<h2 class="text-gray-700 mb-4 text-2xl font-semibold">
			<?php echo esc_html( $section_title ); ?>
		</h2>
		<p class="text-lg text-gray-400 mb-6 font-semibold">
			<?php echo esc_html( $text ); ?>
		</p>
		<div class="flex gap-4 flex-col lg:flex-row">
			<?php foreach ( $items as $item ) : ?>
				<div class="flex flex-col items-center">
					<img src="<?php echo esc_url( $item['image'] ); ?>" class="mb-2 w-[60px]" alt="icon">
					<p class="text-xl text-center font-semibold text-gray-700">
						<?php echo esc_html( $item['text'] ); ?>
					</p>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
	<img src="<?php echo esc_url( $image ); ?>" class="mt-8 rounded-xl lg:max-w-[600px]" alt="blog">
</div>
