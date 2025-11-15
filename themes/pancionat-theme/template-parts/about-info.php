<?php
$section_title = $args['title'];
$image         = $args['image'];
$icon          = $args['icon'];
$text          = $args['text'];
?>
<div class="px-4 items-center lg:flex py-7">
	<img src="<?php echo esc_url( $image ); ?>" class="max-w-[90%] mx-auto" alt="about">
	<div>
		<div class="relative right-[30px] lg:top-[360px] lg:left-[-600px] top-[-90px]">
			<img src="<?php echo esc_url( $icon ); ?>" class="max-w-[180px]" alt="about">
			<p class="text-black items-center flex flex-col lg:left-[-20px] right-[50%] translate-x-[-10%] top-8 absolute">
				<span class="text-white text-5xl font-bold">
					11 <br>
				</span>
				<span class="text-white text-xl">
					<?php esc_html_e( 'років досвіду', 'pancionat-theme' ); ?>
				</span>
			</p>
		</div>
		<h2 class="text-2xl text-gray-700 mt-[-90px] font-semibold">
			<?php echo esc_html( $section_title ); ?>
		</h2>
		<p class="text-gray-400 max-w-[600px] mt-3 text-lg">
			<?php echo esc_html( $text ); ?>
		</p>
	</div>
</div>
