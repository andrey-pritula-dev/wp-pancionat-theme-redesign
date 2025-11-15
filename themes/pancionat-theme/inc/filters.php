<?php
use PancionatTheme\Enums\Locale;

function pancionat_theme_locale_filter() {
	if ( isset( $_COOKIE['site_lang'] ) ) {
		$user_locale = sanitize_text_field( wp_unslash( $_COOKIE['site_lang'] ) );
		if ( in_array( $user_locale, Locale::all(), true ) ) {
			return $user_locale;
		}
	}

	return Locale::UKRAINIAN;
}

function pancionat_theme_add_menu_link_class( $atts, $item, $args ) {

	if ( ! isset( $args->theme_location ) ) {
		return $atts;
	}

	if ( in_array( $args->theme_location, array( 'mobile_ua', 'mobile_ru' ), true ) ) {
		$atts['class'] = ( isset( $atts['class'] ) ? $atts['class'] . ' ' : '' ) .
			'block py-4 border-t border-b border-gray-600 px-7 text-xl';
	}

	if ( in_array( $args->theme_location, array( 'footer_ua', 'footer_ru' ), true ) ) {
		$atts['class'] = 'text-gray-400 text-xl font-semibold ';
	}

	return $atts;
}

function pancionat_theme_no_sanitize_html_class( $class_name ) {
	return $class_name;
}

add_filter( 'sanitize_html_class', 'pancionat_theme_no_sanitize_html_class', 10, 2 );
add_filter( 'nav_menu_link_attributes', 'pancionat_theme_add_menu_link_class', 10, 3 );
add_filter( 'locale', 'pancionat_theme_locale_filter', 1 );
