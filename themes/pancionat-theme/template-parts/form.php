<?php
$section_title                 = $args['title'];
$name_field                    = $args['name_field'];
$phone_field                   = $args['phone_field'];
$description_field             = $args['description_field'];
$button_text                   = $args['button_text'];
$name_field_placeholder        = $args['name_field_placeholder'];
$phone_field_placeholder       = $args['phone_field_placeholder'];
$description_field_placeholder = $args['description_field_placeholder'];
$right_image                   = $args['right_image'];
$background_image              = $args['background_image'];
?>
<div class="bg-white pt-6 lg:px-[100px] lg:pb-8 gap-[100px] lg:flex items-center px-4 bg-2" style="<?php echo 'background-image: url(' . esc_url( $background_image ) . '); background-size: cover; background-position: center;'; ?>">
	<div class="lg:w-[900px]">
		<h2 class="text-gray-700 text-5xl font-semibold text-left py-6">
			<?php echo esc_html( $section_title ); ?>
		</h2>
		<form id="main-form" method="POST" class="space-y-4">
			<div>
				<label for="name" class="block text-gray-700 text-xl font-semibold font-medium">
					<?php echo esc_attr( $name_field ); ?>
				</label>
				<input
					type="text" name="name" required=""
					class="text-gray-700 mt-1 py-3 px-4 block w-full py-3 px-4 text-xl border border-gray-300 rounded-full shadow-sm p-2 focus:ring focus:ring-blue-300"
					placeholder="<?php echo esc_attr( $name_field_placeholder ); ?>">
				</div>
			<div>
				<label for="phone" class="block text-gray-700 text-xl font-semibold font-medium">
					<?php echo esc_attr( $phone_field ); ?>
				</label>
				<input
					type="tel" name="phone" required=""
					class="text-gray-700 mt-1 py-3 px-4 block w-full text-xl rounded-full border border-gray-300 shadow-sm p-2 focus:ring focus:ring-blue-300"
					placeholder="<?php echo esc_attr( $phone_field_placeholder ); ?>">
			</div>
			<div>
				<label for="message" class="block text-gray-700 text-xl font-semibold font-medium">
					<?php echo esc_attr( $description_field ); ?>
				</label>
				<textarea
					name="message" required="" rows="4"
					class="text-gray-700 mt-1 py-3 px-4 block w-full text-xl border border-gray-300 rounded-xl shadow-sm p-2 focus:ring focus:ring-blue-300"
					placeholder="<?php echo esc_attr( $description_field_placeholder ); ?>"></textarea>
			</div>
			<?php wp_nonce_field( 'pancionat_form_nonce', 'pancionat_form_nonce_field' ); ?>
			<button type="submit"
				class="mt-4 w-full mb-6 bg-[#A294F9] text-xl py-3 text-white font-semibold rounded-full shadow hover:bg-blue-700 transition duration-300">
				<?php echo esc_html( $button_text ); ?>
			</button>
		</form>
	</div>
	<img src="<?php echo esc_url( $right_image ); ?>" alt="bg" class="lg:translate-y-[52px] mx-auto lg:mb-4 lg:max-w-[50%] mt-4">
</div>
