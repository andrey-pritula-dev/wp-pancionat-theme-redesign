<?php
	$section_title = $args['title'];
	$cards         = $args['cards'];
	$colors        = array( 'bg-[#6177FF]', 'bg-[#F9B73F]' );
?>
<div class="py-12 bg-[#118b501a]">
	<h2 class="text-4xl lg:max-w-[70%] mx-auto font-semibold text-center text-gray-700 px-2 mb-6">
		<?php echo esc_html( $section_title ); ?>
	</h2>
	<div class="lg:flex flex-wrap justify-center gap-5 lg:pt-6">
		<?php foreach ( $cards as $card_key => $card ) : ?>
			<div class="embla__slide rounded-xl">
				<div class="embla__slide__number rounded-t-xl  ">
					<div class="relative lg:h-[730px] w-[340px] rounded-b-xl">
						<img src="<?php echo esc_url( $card['image'] ); ?>" alt="adv1" class="h-[253px] w-full object-cover rounded-t-xl card-image">
						<div class="lg:h-[430px] bg-white px-4 rounded-b-xl py-12">
							<h3 class="text-2xl mb-4 pt-8 font-semibold text-center text-gray-700">
								<?php echo esc_html( $card['title'] ); ?>
							</h3>
							<div class="pl-7">
								<?php foreach ( $card['items'] as $key => $feature ) : ?>
									<div class="mb-3">
										<h4 class="text-lg font-semibold text-gray-800"><?php echo esc_html( $feature['item'] ); ?></h4>
										<p class="text-base text-gray-500"><?php echo esc_html( $feature['subitem'] ); ?></p>
									</div>
								<?php endforeach; ?>
							</div>
						</div>
						<div class="px-4 py-4 w-[112px] h-[112px] absolute top-[28%] z-50 right-[50%] translate-x-[50%] <?php echo esc_attr( $colors[ $card_key % 2 ] ); ?> rounded-xl">
							<img src="<?php echo esc_url( $card['icon'] ); ?>" alt="adv1" class="w-[80px]"></div>
						<div class="px-4 py-4 w-[112px] h-[112px] absolute top-[28%] right-[50%] translate-x-[50%] icon-bg-4 rotate-45	 rounded-xl">
						</div>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</div>
