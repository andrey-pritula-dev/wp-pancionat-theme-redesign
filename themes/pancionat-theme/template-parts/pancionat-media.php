<?php
	$section_title               = $args['title'];
	$first_gallery               = $args['first_gallery'];
	$second_title                = $args['second_title'];
	$second_gallery              = $args['second_gallery'];
	$addresses                   = $args['addresses'];
	$map_1                       = $args['map_1'];
	$video_1                     = $args['video_1'];
	$video_2                     = $args['video_2'];
	$video_title                 = $args['video_title'];
	$video_services_1            = $args['video_services_1'];
	$video_service_description_1 = $args['video_service_description_1'];
	$video_service_description_2 = $args['video_service_description_2'];
	$video_services_2            = $args['video_services_2'];
	$video_service_description_3 = $args['video_service_description_3'];
	$video_service_button_text   = $args['video_service_button_text'];
	$third_title                 = $args['third_title'];
	$third_gallery               = $args['third_gallery'];
	$map_2                       = $args['map_2'];
?>
<div class="px-4 py-8">
	<h2 class="text-5xl mb-6 text-center font-semibold text-gray-700">
		<?php echo esc_html( $section_title ); ?>
	</h2>
	<div class="lg:flex-row gap-3 flex justify-center items-center mb-2 flex-col">
		<?php foreach ( $first_gallery as $image_url ) : ?>
			<img src="<?php echo esc_url( $image_url ); ?>" alt="Gallery Image" class="rounded-xl max-h-[350px] lg:max-w-[320px] shadow-xl">
		<?php endforeach; ?>
	</div>
	<h2 class="text-4xl mb-6 text-center font-semibold text-gray-700">
		<?php echo esc_html( $second_title ); ?>
	</h2>
	<div class="flex flex-col lg:flex-row justify-center flex-wrap gap-4">
		<?php foreach ( $second_gallery as $image_url ) : ?>
			<img src="<?php echo esc_url( $image_url ); ?>" alt="Gallery Image" class="rounded-xl lg:max-w-[320px] max-h-[350px] shadow-xl">
		<?php endforeach; ?>
	</div>
	<a href="https://maps.app.goo.gl/Ykprx6gAkdwubjwd7">
		<p class="text-gray-700 text-xl underline font-semibold mb-6">
			<?php
			$addr = str_replace( array( "\r\n", "\r", "\n" ), '<br />', $addresses[0] );
			echo wp_kses( $addr, array( 'br' => array() ) );
			?>
		</p>
	</a>
	<br>
	<div class="w-full mb-12 flex justify-center items-center">
		<div id="google-map" class="relative w-full overflow-hidden rounded-xl" style="padding-top:56.25%;">
			<?php echo $map_1; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
		</div>
	</div>
	<div class="bg-white text-gray-800 p-6 md:p-10 max-w-4xl mx-auto shadow-lg rounded-lg space-y-6">
		<div class="mx-auto flex flex-col gap-4 items-center justify-center">
			<?php foreach ( array( $video_1, $video_2 ) as $key => $video_src ) : ?>
				<video width="550" height="300" controls="" poster="<?php echo esc_url( get_template_directory_uri() . '/assets/img/preload' . ( $key + 1 ) . '.png' ); ?>">
					<source src="<?php echo esc_url( $video_src ); ?>" type="video/mp4">
				</video>
			<?php endforeach; ?>
		</div>
		<h1 class="text-2xl md:text-3xl font-bold text-center text-blue-800">
			<?php echo esc_html( $video_title ); ?>
		</h1>
		<ul class="list-disc list-inside space-y-2 text-lg">
			<?php foreach ( $video_services_1 as $service ) : ?>
				<li>🔹 <?php echo esc_html( $service ); ?></li>
			<?php endforeach; ?>
		</ul>
		<div class="bg-blue-50 p-4 rounded-md border-l-4 border-blue-400 text-blue-900 text-base">
			<?php echo esc_html( $video_service_description_1 ); ?>
		</div>
		<div class="bg-gray-100 p-4 rounded-md text-base text-gray-700">
			<?php echo esc_html( $video_service_description_2 ); ?>
		</div>
		<ul class="list-disc list-inside text-lg space-y-2">
			<?php foreach ( $video_services_2 as $service ) : ?>
				<li><?php echo esc_html( $service ); ?></li>
			<?php endforeach; ?>
		</ul>
		<p class="text-xl font-semibold text-center text-green-700">
			<?php echo esc_html( $video_service_description_3 ); ?>
		</p>
		<div class="text-center">
			<div class="open-form-modal bg-blue-600 text-white px-6 py-3 rounded-md text-lg">
				<?php echo esc_html( $video_service_button_text ); ?>
			</div>
		</div>
	</div>
	<h2 class="text-4xl mb-6 text-center font-semibold text-gray-700">
		<?php echo esc_html( $third_title ); ?>
	</h2>
	<div class="flex flex-col lg:flex-row justify-center flex-wrap gap-4">
		<br>
		<?php foreach ( $third_gallery as $key => $image_url ) : ?>
			<img src="<?php echo esc_url( $image_url ); ?>" alt="Gallery Image" class="rounded-xl <?php echo ( count( $third_gallery ) - 1 ) === $key ? 'mb-4 ' : ''; ?>lg:max-w-[320px] max-h-[350px] shadow-xl">
		<?php endforeach; ?>
		<a href="https://maps.app.goo.gl/gKGpqu9g1iUunCrg7">
			<p class="text-gray-700 underline text-xl font-semibold">
				<?php
				$addr = str_replace( array( "\r\n", "\r", "\n" ), '<br />', $addresses[1] );
				echo wp_kses( $addr, array( 'br' => array() ) );
				?>
			</p>
		</a>
	</div>
	<div class="w-full mb-12 flex justify-center items-center">
		<div id="google-map-2" class="relative w-full overflow-hidden rounded-xl" style="padding-top:56.25%;">
			<?php echo $map_2; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
		</div>
	</div>
</div>
