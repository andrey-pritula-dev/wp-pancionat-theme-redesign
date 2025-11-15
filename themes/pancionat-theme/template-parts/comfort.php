<?php
$section_title    = $args['title'];
$description      = $args['description'];
$image_main       = $args['image_main'];
$image_side       = $args['image_side'];
$image_badge      = $args['image_badge'];
$badge_text       = $args['badge_text'];
$badge_number     = $args['badge_number'];
$services         = $args['services'];
$image_background = $args['image_background'];
?>

<div
	class="bg-white pt-8 pb-[50px] lg:pb-[120px] px-4 lg:flex items-center lg:px-[50px] text-left benefits-container animate">
	<div class="max-w-[600px]">
		<h2 class="text-4xl font-semibold mb-4 text-gray-700"><?php echo esc_html( $section_title ); ?></h2>
		<p class="text-gray-400 text-lg mb-4">
			<?php echo esc_html( wp_strip_all_tags( strip_shortcodes( $description ) ) ); ?>
		</p>
		<div class="flex flex-col gap-3 ">
			<?php foreach ( $services as $index => $service ) : ?>
				<div class="flex gap-2 items-center benefit-item" style="--animation-delay: <?php echo esc_attr( $index * 0.1 ); ?>s;">
					<img src="<?php echo esc_url( $service['icon'] ); ?>" alt="service-icon" class="w-9">
					<p class="text-gray-600 text-lg"><?php echo esc_html( $service['title'] ); ?></p>
				</div>
			<?php endforeach; ?>
		</div>
		<img src="<?php echo esc_url( $image_main ); ?>" alt="doc2" class="hidden lg:block max-h-[240px] rounded-xl mt-6 ">
	</div>
	<div class="relative lg:top-[140px] lg:right-[120px] lg:max-w-[400px] mt-6">
		<img src="<?php echo esc_url( $image_badge ); ?>" class="w-[180px] lg:w-[320px] mx-auto" alt="shape">
		<p lass="text-white font-bold text-xl absolute top-[50%] left-[50%] text-center translate-x-[-50%] translate-y-[-50%]">
			<span class="text-6xl font-bold">
				<?php echo esc_html( $badge_number ); ?>
			</span>
			<br>
			<?php echo esc_html( $badge_text ); ?>
		</p>
	</div>
	<div class="mt-10 relative ">
		<img src="<?php echo esc_url( $image_background ); ?>" class="about-image absolute lg:top-[160px] left-[160px] top-[80px] right-0 slide-in" alt="about">
		<img src="<?php echo esc_url( $image_side ); ?>" class="dosvid-image rounded-xl slide-in" alt="dosvid">
	</div>
</div>
