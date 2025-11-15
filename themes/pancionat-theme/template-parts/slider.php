<?php
$slides      = array_map( 'esc_url', $args['slides'] ) ?? array();
$phones      = $args['phone'] ?? array();
$slider_text = $args['slider_text'] ?? array();
if ( empty( $slides ) ) {
	return;
}
?>

<div class="hero lg:min-h-[500px] min-h-[570px] relative"
	data-slides="<?php echo esc_attr( wp_json_encode( $slides ) ); ?>">
	<img src="<?php echo esc_url( $slides[0] ); ?>" alt="slide<?php $slides[0][ mb_strlen( $slides[0] ) - 5 ]; ?>"
		class="h-[320px] lg:h-[440px] object-cover transition-opacity duration-1000 opacity-100">

	<div
		class="bg-white text-gray-700 text-3xl pl-6 pr-6 py-4 pb-8 font-semibold absolute top-[140px] lg:w-[70%] w-[95%] right-0 rounded-l-2xl fade-in">
		<h2><?php echo esc_html( $slider_text['title'] ); ?></h2>
		<p class="font-normal text-gray-400 mb-4 mt-6 text-xl">
			<?php echo esc_html( $slider_text['subtitle'] ); ?>
		</p>

		<?php if ( ! empty( $phones ) ) : ?>
			<?php foreach ( $phones as $phone ) : ?>
		<a href="tel:+<?php echo esc_attr( $phone ); ?>" class="text-xl font-base mb-3 block text-[#A294F9]">
				<?php echo esc_html( pancionat_theme_format_phone( $phone ) ); ?>
		</a>
		<?php endforeach; ?>
		<?php endif; ?>

		<button class="open-form-modal bg-[#A294F9] text-white font-semibold w-full text-lg px-6 py-3 rounded-xl mt-6">
			<?php echo esc_html( $slider_text['button_text'] ); ?>
		</button>
	</div>
</div>
