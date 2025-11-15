<?php
$section_title = $args['title'];
$subtitle      = $args['subtitle'];
$button_text   = $args['button_text'];
?>

<div class="step py-14 px-2">
	<h2 class="text-6xl mb-6 text-center text-white font-semibold">
		<?php echo esc_html( $section_title ); ?>
	</h2>
	<p class="text-lg text-center mx-auto text-white max-w-[800px] font-semibold">
		<?php echo esc_html( $subtitle ); ?>
	</p>
	<div class="flex justify-center mt-10">
		<button class="open-form-modal px-8 py-4 text-lg font-semibold bg-[#118B50] rounded-full">
			<?php echo esc_html( $button_text ); ?>
		</button>
	</div>
</div>
