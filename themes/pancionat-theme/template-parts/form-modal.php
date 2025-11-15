<div id="form-modal" class="modal-overlay hidden">
	<div class="modal-content w-[350px]">
		<form method="POST" class="space-y-4">
			<div>
				<label for="name" class="block text-left font-semibold text-gray-700"><?php esc_html_e( "Ім'я", 'pancionat-theme' ); ?></label>
				<input type="text" name="name" required="" class="w-full text-gray-700 p-2 border rounded">
			</div>
			<div>
				<label for="phone" class="block text-left font-semibold text-gray-700"><?php esc_html_e( 'Телефон', 'pancionat-theme' ); ?></label>
				<input type="tel" name="phone" required="" class="w-full text-gray-700 p-2 border rounded">
			</div>
			<?php wp_nonce_field( 'pancionat_form_nonce', 'pancionat_form_nonce_field' ); ?>
			<button type="submit" class="bg-blue-500 font-semibold text-white py-2 px-4 rounded"><?php esc_html_e( 'Надіслати', 'pancionat-theme' ); ?></button>
		</form>
	</div>
</div>
<div id="form-success" class="modal-overlay hidden">
	<div class="modal-content text-xl font-semibold text-black">
		<h2 class="text-4xl">
			<?php esc_html_e( 'Заявку відправлено', 'pancionat-theme' ); ?>
		</h2>
		<p class="text-2xl">
			<?php esc_html_e( 'Очікуйте на зворотній звязок!', 'pancionat-theme' ); ?>
		</p>
		<button class="bg-[#A294F9] text-white rounded-xl px-4 py-2 mt-4">
			<?php esc_html_e( 'Закрити', 'pancionat-theme' ); ?>
		</button>
	</div>
</div>
