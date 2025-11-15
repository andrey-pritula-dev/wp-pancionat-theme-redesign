<?php

if ( ! function_exists( 'pancionat_theme_format_phone' ) ) {
	function pancionat_theme_format_phone( $phone ) {
		$digits = preg_replace( '/\D+/', '', $phone );

		if ( str_starts_with( $digits, '380' ) ) {
			$digits = substr( $digits, 2 );
		} elseif ( str_starts_with( $digits, '80' ) ) {
			$digits = substr( $digits, 1 );
		}

		if ( preg_match( '/^(0\d{2})(\d{3})(\d{2})(\d{2})$/', $digits, $m ) ) {
			return "+38({$m[1]}) {$m[2]}-{$m[3]}-{$m[4]}";
		}

		return $phone;
	}
}

if ( ! function_exists( 'pancionat_theme_allow_html' ) ) {
	function pancionat_theme_allow_html( $input ) {
		return wp_kses_post( $input );
	}
}
