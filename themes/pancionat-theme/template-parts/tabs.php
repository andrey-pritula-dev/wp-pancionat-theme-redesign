<?php
	$menu_item_icons = $args['menu_item_icons'];
	$menu_1_title    = $args['menu_1_title'];
	$menu_1_image    = $args['menu_1_image'];
	$menu_1_items    = $args['menu_1_items'];
	$menu_2_title    = $args['menu_2_title'];
	$menu_2_image    = $args['menu_2_image'];
	$menu_2_items    = $args['menu_2_items'];
	$menu_3_title    = $args['menu_3_title'];
	$menu_3_image    = $args['menu_3_image'];
	$menu_3_items    = $args['menu_3_items'];
?>
<div class="bg-white px-4 pb-4">
	<div id="tab-controls" class="flex lg:flex-row justify-center mt-8 gap-4 mb-8 flex-col">
		<div data-tab="1" class="px-4 lg:text-xl text-2xl lg:w-[340px] text-center font-semibold rounded-full py-4 bg-[#118B50] cursor-pointer">
			<?php echo esc_html( $menu_1_title ); ?>
		</div>
		<div data-tab="2" class="px-4 lg:text-xl text-2xl lg:w-[340px] text-center font-semibold rounded-full py-4 bg-[#118b501a] cursor-pointer">
			<?php echo esc_html( $menu_2_title ); ?>
		</div>
		<div data-tab="3" class="px-4 lg:text-xl text-2xl lg:w-[340px] text-center font-semibold rounded-full py-4 bg-[#118b501a] cursor-pointer">
			<?php echo esc_html( $menu_3_title ); ?>
		</div>
	</div>
	<div id="tab-1" class="fade-in flex flex-col lg:flex-row mt-4 items-center justify-center gap-12">
		<img src="<?php echo esc_url( $menu_1_image ); ?>" alt="service" class="rounded-xl lg:max-w-[600px]">
		<div class="lg:flex-col items-center">
			<h2 class="text-gray-700 text-2xl font-semibold mt-3 mb-3">
				<?php echo esc_html( $menu_1_title ); ?>
			</h2>
			<?php foreach ( $menu_1_items as $item ) : ?>
			<div class="flex items-center gap-2 mb-3">
				<img src="<?php echo esc_url( $menu_item_icons ); ?>" class="w-[40px]" alt="approve">
				<p class="text-gray-600 text-xl font-semibold"><?php echo esc_html( $item ); ?></p>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
	<div id="tab-2" class="fade-in flex flex-col lg:flex-row mt-4 items-center justify-center gap-12">
		<img src="<?php echo esc_url( $menu_2_image ); ?>" alt="service" class="rounded-xl lg:max-w-[600px]">
		<div class="lg:flex-col items-center">
			<h2 class="text-gray-700 text-2xl font-semibold mt-3 mb-3">
				<?php echo esc_html( $menu_2_title ); ?>
			</h2>
			<?php foreach ( $menu_2_items as $item ) : ?>
			<div class="flex items-center gap-2 mb-3">
				<img src="<?php echo esc_url( $menu_item_icons ); ?>" class="w-[40px]" alt="approve">
				<p class="text-gray-600 text-xl font-semibold"><?php echo esc_html( $item ); ?></p>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
	<div id="tab-3" class="fade-in flex flex-col lg:flex-row mt-4 items-center justify-center gap-12">
		<img src="<?php echo esc_url( $menu_3_image ); ?>" alt="service" class="rounded-xl lg:max-w-[600px]">
		<div class="lg:flex-col items-center">
			<h2 class="text-gray-700 text-2xl font-semibold mt-3 mb-3">
				<?php echo esc_html( $menu_3_title ); ?>
			</h2>
			<?php foreach ( $menu_3_items as $item ) : ?>
			<div class="flex items-center gap-2 mb-3">
				<img src="<?php echo esc_url( $menu_item_icons ); ?>" class="w-[40px]" alt="approve">
				<p class="text-gray-600 text-xl font-semibold"><?php echo esc_html( $item ); ?></p>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>
