<?php
use PancionatTheme\Enums\Locale;

$menu_location  = ( Locale::RUSSIAN === get_locale() ) ? 'footer_ru' : 'footer_ua';
$footer_logo_id = get_theme_mod( 'footer_logo' );
$phone_1        = get_theme_mod( 'pancionat_footer_phone_1', null );
$phone_2        = get_theme_mod( 'pancionat_footer_phone_2', null );
$addresses      =
	Locale::RUSSIAN === get_locale()
	? array(
		get_theme_mod( 'pancionat_footer_address_1_ru', null ),
		get_theme_mod( 'pancionat_footer_address_2_ru', null ),
	)
	: array(
		get_theme_mod( 'pancionat_footer_address_1_ua', null ),
		get_theme_mod( 'pancionat_footer_address_2_ua', null ),
	);
?>
<footer class="bg-black px-5 py-8">
	<?php
	if ( $footer_logo_id ) {
		$logo_url = wp_get_attachment_image_url( $footer_logo_id, 'full' );
		echo '<a href="' . esc_url( home_url( '/' ) ) . '" class="footer-logo-link">';
		echo '<img src="' . esc_url( $logo_url ) . '" alt="' . esc_attr( get_bloginfo( 'name' ) ) . '" class="footer-logo mb-4 lg:w-[300px]">';
		echo '</a>';
	} else {
		the_custom_logo();
	}
	?>
	<h3 class="text-white font-semibold mb-2 text-3xl"><?php esc_html_e( 'Menu', 'pancionat-theme' ); ?></h3>
	<?php
			wp_nav_menu(
				array(
					'theme_location' => $menu_location,
					'container'      => false,
					'menu_class'     => 'flex flex-col gap-2 pb-4',
				)
			);
			?>
	<h3 class="text-white font-semibold mb-2 text-3xl">
		<?php esc_html_e( 'Contacts', 'pancionat-theme' ); ?>
	</h3>
	<p class="text-gray-400 text-xl font-semibold mb-6">
		<?php echo wp_kses_post( $addresses[0] ); ?>
	</p>
	<p class="text-gray-400 text-xl font-semibold">
		<?php echo wp_kses_post( $addresses[1] ); ?>
	</p>
	<a href="tel:+<?php echo esc_attr( $phone_1 ); ?>" class="text-xl mt-4 font-base mb-3 block text-white">
		<?php echo esc_html( pancionat_theme_format_phone( $phone_1 ) ); ?>
	</a>
	<a href="tel:+<?php echo esc_attr( $phone_2 ); ?>" class="text-xl font-base block text-white">
		<?php echo esc_html( pancionat_theme_format_phone( $phone_2 ) ); ?>
	</a>
</footer>
<?php
	get_template_part( 'template-parts/form-modal' );
	wp_footer();
?>
</body>

</html>
