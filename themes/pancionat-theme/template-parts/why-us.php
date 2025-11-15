<?php
$cards = $args['cards'] ?? array();
if ( empty( $cards ) ) {
	return;
}
$section_title = $args['title'];
$colors        = array( '#118B50', '#5BB286', '#F9B73F', '#B640FF', '#00CDE5' );
?>
<div class="why-us pb-12">
	<h2 class="text-gray-700 mb-8 font-semibold text-center text-4xl"><?php echo esc_html( $section_title ); ?></h2>
	<div class="flex lg:flex-row flex-wrap px-6 justify-center gap-6 items-center flex-col">
		<?php foreach ( $cards as $key => $card ) : ?>
			<div class="relative rounded-xl max-w-[320px]">
				<img src="<?php echo esc_url( $card['image'] ); ?>" alt="adv1" class="rounded-t-xl card-image">
				<div class="bg-white h-[265px] rounded-b-xl py-12">
					<h3 class="text-2xl mb-4 pt-8 px-3 font-semibold text-center text-gray-700"><?php echo esc_html( $card['title'] ); ?></h3>
					<p class="text-lg max-w-[80%] mx-auto font-extralight text-gray-500 text-center"><?php echo esc_html( $card['subtitle'] ); ?></p>
				</div>
				<div
					class="px-4 py-4 w-[112px] h-[112px] absolute top-[33%] z-50 right-[50%] translate-x-[50%] bg-[<?php echo esc_attr( $colors[ $key % count( $colors ) ] ); ?>] rounded-xl">
					<img src="<?php echo esc_url( $card['icon'] ); ?>" alt="knife" class="w-[80px]">
				</div>
				<div
					class="px-4 py-4 w-[112px] h-[112px] absolute top-[33%] right-[33%] translate-x-[50%] icon-bg<?php echo 0 === $key ? '' : '-' . esc_html( $key + 1 ); ?> rotate-45 rotate-animation rounded-xl">
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</div>
