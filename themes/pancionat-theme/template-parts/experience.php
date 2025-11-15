<?php
$items            = $args['items'];
$background_image = $args['background_image'];
$colors           = array( '#FF5E5E', '#5BB286', '#F9B73F', '#6B64FA' );
$class            = array( 'mb-12 lg:translate-y-[-22px]', 'py-0 mt-[30px] lg:mt-[90px] relative', 'mt-12 lg:mt-[120px] mt-[80px] relative', 'mt-[80px] relative' );
?>
<div style="background-image: url('<?php echo esc_url( $background_image ); ?>');" class="experience flex lg:flex-row lg:gap-[140px] lg:items-center justify-center flex-col pt-[30px] pb-[60px]">
	<?php foreach ( $items as $key => $item ) : ?>
		<div class="lg:translate-y-[-22px]">
			<div class="pt-14 mt-[30px] lg:mt-[90px] lg:flex flex-col items-center pb-8 relative">
				<div class="px-4 text-[<?php echo esc_attr( $colors[ $key % count( $colors ) ] ); ?>] flex items-center justify-center relative text-5xl font-semibold py-4 w-[140px] h-[140px]  mx-auto z-50 bg-white rounded-xl">
					<?php echo esc_html( $item['number'] ); ?>
				</div>
				<div class="px-4 py-4 w-[140px] h-[140px] top-[24%] absolute lg:right-[3%] right-[32%] icon-bg rotate-45 rotate-407 bg-[#575757] rounded-xl">
				</div>
			</div>
			<p class="mx-auto text-2xl lg:text-xl text-center font-semibold lg:max-w-[150px] min-h-[85px]">
				<?php echo esc_html( $item['name'] ); ?>
			</p>
		</div>
	<?php endforeach; ?>
</div>
