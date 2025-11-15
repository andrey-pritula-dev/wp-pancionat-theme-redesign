<?php
require_once ABSPATH . 'wp-includes/functions.php';
use PancionatTheme\Enums\Locale;

function pancionat_theme_change_lang_ajax() {
	check_ajax_referer( 'pancionat_lang_nonce', 'nonce' );

	if ( ! isset( $_POST['lang'] ) ) {
		wp_send_json_error( 'Invalid request' );
	}

	$lang = sanitize_text_field( wp_unslash( $_POST['lang'] ) );
	if ( ! in_array( $lang, Locale::all(), true ) ) {
		wp_send_json_error( 'Unsupported locale' );
	}

	setcookie( 'site_lang', $lang, time() + MONTH_IN_SECONDS, COOKIEPATH, COOKIE_DOMAIN );

	switch_to_locale( $lang );

	wp_send_json_success(
		array(
			'locale'  => $lang,
			'message' => 'Language switched to ' . $lang,
		)
	);
}

function pancionat_handle_contact_form_ajax() {
	check_ajax_referer( 'pancionat_form_nonce', 'pancionat_form_nonce_field' );

	$name    = sanitize_text_field( wp_unslash( $_POST['name'] ?? '' ) );
	$phone   = sanitize_text_field( wp_unslash( $_POST['phone'] ?? '' ) );
	$message = sanitize_textarea_field( wp_unslash( $_POST['message'] ?? '' ) );

	$to = get_theme_mod( 'pancionat_email', null );

	if ( empty( $name ) || empty( $phone ) ) {
		wp_send_json_error( 'Please fill all fields.' );
	}

	$subject = 'Новое сообщение с сайта ' . get_bloginfo( 'name' );
	$headers = array(
		'From: ' . get_bloginfo( 'name' ) . ( isset( $_SERVER['SERVER_NAME'] ) ? ' <no-reply@' . sanitize_text_field( wp_unslash( $_SERVER['SERVER_NAME'] ) ) . '>' : '' ),
	);

	$body = "<p><strong>Name:</strong> $name</p>
             <p><strong>Phone:</strong> $phone</p>";

	if ( ! empty( $message ) ) {
		$body .= "<p><strong>Message:</strong></p>
             	  <p>$message</p>";
	}

	$sent = wp_mail( $to, $subject, $body, $headers );

	if ( $sent ) {
		wp_send_json_success();
	} else {
		wp_send_json_error( 'Email failed to send.' );
	}
}

function pancionat_handle_contact_form_second_ajax() {
	check_ajax_referer( 'pancionat_form_nonce', 'pancionat_form_nonce_field' );

	$phone = sanitize_text_field( wp_unslash( $_POST['phone'] ?? '' ) );

	$to = get_theme_mod( 'pancionat_email', null );

	if ( empty( $phone ) ) {
		wp_send_json_error( 'Please fill all fields.' );
	}

	$subject = 'Новое сообщение с сайта ' . get_bloginfo( 'name' );
	$headers = array(
		'From: ' . get_bloginfo( 'name' ) . ( isset( $_SERVER['SERVER_NAME'] ) ? ' <no-reply@' . sanitize_text_field( wp_unslash( $_SERVER['SERVER_NAME'] ) ) . '>' : '' ),
	);

	$body = "<p><strong>Phone:</strong> $phone</p>";

	$sent = wp_mail( $to, $subject, $body, $headers );

	if ( $sent ) {
		wp_send_json_success();
	} else {
		wp_send_json_error( 'Email failed to send.' );
	}
}

add_action( 'wp_ajax_pancionat_theme_change_lang', 'pancionat_theme_change_lang_ajax' );
add_action( 'wp_ajax_nopriv_pancionat_theme_change_lang', 'pancionat_theme_change_lang_ajax' );
add_action( 'wp_ajax_nopriv_pancionat_theme_send_contact_form', 'pancionat_handle_contact_form_ajax' );
add_action( 'wp_ajax_pancionat_theme_send_contact_form', 'pancionat_handle_contact_form_ajax' );
add_action( 'wp_ajax_nopriv_pancionat_theme_send_contact_form_second', 'pancionat_handle_contact_form_second_ajax' );
add_action( 'wp_ajax_pancionat_theme_send_contact_form_second', 'pancionat_handle_contact_form_second_ajax' );
