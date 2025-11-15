<?php

function pancionat_theme_enqueue_scripts() {
	wp_enqueue_style( 'pancionat-theme-style', get_stylesheet_uri(), array(), '1.0.0' );
	wp_enqueue_style( 'pancionat-theme-core-style', get_template_directory_uri() . '/assets/css/core.css', array(), '1.0.0' );

	wp_enqueue_script(
		'google-maps',
		'https://maps.googleapis.com/maps/api/js?key=AIzaSyDK2YzAQYPqD19LhJYue9lQPRtcsiPkJGk&amp;v=weekly&amp;libraries=places&amp;loading=async&amp;callback=initMap',
		array(),
		'1.0.0',
		true
	);

	wp_enqueue_script(
		'pancionat-theme-lang-switcher',
		get_template_directory_uri() . '/assets/js/lang-switcher.js',
		array( 'jquery' ),
		'1.0.0',
		true
	);

	wp_localize_script(
		'pancionat-theme-lang-switcher',
		'pancionatLang',
		array(
			'ajaxurl' => admin_url( 'admin-ajax.php' ),
			'nonce'   => wp_create_nonce( 'pancionat_lang_nonce' ),
			'current' => get_locale(),
		)
	);

	wp_enqueue_script(
		'pancionat-theme-menu',
		get_template_directory_uri() . '/assets/js/menu.js',
		array(),
		'1.0.0',
		true
	);

	if ( is_front_page() ) {
		wp_enqueue_script(
			'pancionat-theme-hero-slider',
			get_template_directory_uri() . '/assets/js/hero-slider.js',
			array(),
			'1.0.0',
			true
		);
	}

	if ( is_page_template( 'services-page.php' ) ) {
		wp_enqueue_script(
			'pancionat-theme-tabs',
			get_template_directory_uri() . '/assets/js/tabs.js',
			array(),
			'1.0.0',
			true
		);
	}

	wp_enqueue_script(
		'pancionat-theme-form',
		get_template_directory_uri() . '/assets/js/form.js',
		array(),
		'1.0.0',
		true
	);

	wp_localize_script(
		'pancionat-theme-form',
		'pancionatThemeForm',
		array(
			'ajax_url' => admin_url( 'admin-ajax.php' ),
			'nonce'    => wp_create_nonce( 'pancionat_form_nonce' ),
		)
	);
}

add_action( 'wp_enqueue_scripts', 'pancionat_theme_enqueue_scripts' );
