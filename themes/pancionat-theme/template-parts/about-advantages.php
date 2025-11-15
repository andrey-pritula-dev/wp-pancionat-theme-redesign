<?php
	$section_title = $args['title'];
	$cards         = $args['cards'];
?>
<div class="bg-[#118b501a] px-4 py-12 text-center">
	<h2 class="text-4xl text-gray-700 font-semibold mb-6"><?php echo esc_html( $section_title ); ?></h2>
	<div class="flex lg:flex flex-row gap-6 justify-center flex-wrap">
		<?php foreach ( $cards as $card ) : ?>
			<div class="embla__slide rounded-xl">
				<div class="embla__slide__number rounded-xl">
					<div class="relative h-[550px]  w-[340px] pt-6 bg-white rounded-xl">
						<div class="relative">
							<img src="<?php echo esc_url( $card['image'] ); ?>" class="mx-auto" alt="group">
							<img src="<?php echo esc_url( $card['icon'] ); ?>" alt="hands" class="w-[60px] left-[50%] translate-x-[-50%] top-[60px] absolute">
						</div>
						<div class=" bg-white px-4 rounded-b-xl ">
							<h3 class="text-2xl mb-4 pt-8 font-semibold text-center text-gray-700">
								<?php echo esc_html( $card['title'] ); ?>
							</h3>
							<div class="">
								<p class="text-gray-400 text-lg text-base">
									<?php echo esc_html( $card['text'] ); ?>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</div>
