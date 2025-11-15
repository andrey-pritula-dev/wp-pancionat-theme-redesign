<?php
	$section_title = $args['title'] ?? '';
	$phone_1       = $args['phone_1'] ?? '';
	$phone_2       = $args['phone_2'] ?? '';
	$addresses     = $args['addresses'] ?? array();
	$email         = $args['email'] ?? '';
	$email_text    = $args['email_text'] ?? '';
	$email_icon    = $args['email_icon'] ?? '';
	$phone_text    = $args['phone_text'] ?? '';
	$phone_icon    = $args['phone_icon'] ?? '';
	$address_icon  = $args['address_icon'] ?? '';
	$address_text  = $args['address_text'] ?? '';
	$map_1         = $args['map'] ?? '';
?>
<div class="flex flex-col px-4 py-6">
	<h2 class="text-4xl font-semibold text-gray-700 text-center mb-6">
		<?php echo esc_html( $section_title ); ?>
	</h2>
	<div class="lg:flex flex-row gap-4 items-center">
		<div
			class="bg-[white] lg:h-[391px] lg:mb-0 mb-4 rounded-xl mx-auto w-full items-center flex flex-col justify-center border py-12 px-6 shadow-2xl">
			<div class="bg-[#ff5e5e] flex justify-center items-center rounded-xl px-8 w-[110px] py-8"><img
					class="w-[50px]" src="<?php echo esc_url( $email_icon ); ?>" alt="mail"></div>
			<p class="text-2xl mt-4 text-black font-semibold"><?php echo esc_html( $email_text ); ?></p>
			<p class="text-gray-400 text-xl font-semibold"><?php echo esc_html( $email ); ?></p>
		</div>
		<div
			class="bg-[white] lg:h-[391px] rounded-xl mx-auto w-full items-center flex flex-col justify-center border py-12 px-6 shadow-2xl">
			<div class="bg-[#5BB286] flex justify-center items-center rounded-xl px-8 w-[110px] py-8"><img
					class="w-[50px]" src="<?php echo esc_url( $phone_icon ); ?>" alt="mail"></div>
			<p class="text-2xl mt-4 text-black font-semibold">
				<?php echo esc_html( $phone_text ); ?>
			</p>
			<p class="text-gray-400 mb-2 mt-4 text-xl font-semibold"><?php echo esc_html( pancionat_theme_format_phone( $phone_1 ) ); ?></p>
			<p class="text-gray-400 text-xl font-semibold"><?php echo esc_html( pancionat_theme_format_phone( $phone_2 ) ); ?></p>
		</div>
		<div
			class="bg-[white] lg:h-[391px] rounded-xl lg:mt-0 mt-4 mx-auto w-full items-center flex flex-col justify-center border py-12 px-6 shadow-2xl">
			<div class="bg-[#F9B73F] flex justify-center items-center rounded-xl px-8 w-[110px] py-8">
				<img class="w-[50px]" src="<?php echo esc_url( $address_icon ); ?>" alt="mail"></div>
			<p class="text-2xl mt-4 text-black font-semibold"><?php echo esc_html( $address_text ); ?></p>
			<p class="text-gray-400 text-center mb-2 mx-auto block mt-4 text-xl font-semibold">
				<?php echo esc_html( str_replace( '<br>', ' ', $addresses[0] ) ); ?>
			</p>
		</div>
	</div>
	<div class="mt-4">
		<div class="w-full flex justify-center items-center">
			<div id="google-map" class="relative w-full overflow-hidden rounded-xl" style="padding-top:56.25%;">
				<iframe class="absolute top-0 left-0 w-full h-full border-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2542.297206463222!2d30.3420726!3d50.416934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4cba79adea2c7%3A0xcfb31d4f80473aaa!2z0LLRg9C70LjRhtGPINCf0YDQvtGA0ZbQt9C90LAsIDMzLCDQodC-0YTRltGX0LLRgdGM0LrQsCDQkdC-0YDRidCw0LPRltCy0LrQsCwg0JrQuNGX0LLRgdGM0LrQsCDQvtCx0LvQsNGB0YLRjCwgMDgxMzE!5e0!3m2!1sru!2sua!4v1762353307888!5m2!1sru!2sua" width="700" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
		</div>
	</div>
</div>
