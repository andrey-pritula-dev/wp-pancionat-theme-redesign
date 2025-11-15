<?php
$modal_title = $args['title'] ?? 'Замовити зворотній дзвінок';
$modal_mask  = $args['mask'] ?? '(+380) 456-7890';
$modal_icon  = $args['icon'] ?? '';
?>
<form id="second-form-modal" method="POST" class="fixed bottom-5 lg:left-[100px] z-50 bg-[#118B50] rounded-xl p-4 flex flex-col items-start text-white font-semibold">
	<label for="phone" class="mr-4 font-semibold">
		<?php echo esc_html( $modal_title ); ?>
	</label>
	<div class="relative">
		<input type="tel" name="phone" placeholder="<?php echo esc_attr( $modal_mask ); ?>" class="flex-1 px-4 text-black py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required="">
		<?php wp_nonce_field( 'pancionat_form_nonce', 'pancionat_form_nonce_field' ); ?>
		<button type="submit">
			<img src="<?php echo esc_url( $modal_icon ); ?>" alt="phone" class="w-6 absolute top-2 right-2">
		</button>
	</div>
</form>
