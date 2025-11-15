<?php
/**
 * Template Name: Contacts Page
 */

use PancionatTheme\Enums\Locale;

$lang       = get_locale();
$hero_image = get_theme_mod( 'pancionat_hero_image' );

const CONTACTS_SECTION_GROUP_KEY = 'group_690cd1d8176ad';
$contacts_section_fields         = acf_get_fields( CONTACTS_SECTION_GROUP_KEY );

if ( isset( $contacts_section_fields ) && ! empty( $contacts_section_fields ) ) {
	$contacts_title = Locale::RUSSIAN === $lang
		? get_field( 'contacts_title_ru' )
		: get_field( 'contacts_title_ua' );
	$email_text     = get_field( 'email_text' );
	$email_icon     = get_field( 'email_icon' );
	$phone_text     = Locale::RUSSIAN === $lang
		? get_field( 'phone_text_ru' )
		: get_field( 'phone_text_ua' );
	$phone_icon     = get_field( 'phone_icon' );
	$address_text   = Locale::RUSSIAN === $lang
		? get_field( 'address_text_ru' )
		: get_field( 'address_text_ua' );
	$address_icon   = get_field( 'address_icon' );
	$map_1          = '<iframe class="absolute top-0 left-0 w-full h-full border-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2542.297206463222!2d30.3420726!3d50.416934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4cba79adea2c7%3A0xcfb31d4f80473aaa!2z0LLRg9C70LjRhtGPINCf0YDQvtGA0ZbQt9C90LAsIDMzLCDQodC-0YTRltGX0LLRgdGM0LrQsCDQkdC-0YDRidCw0LPRltCy0LrQsCwg0JrQuNGX0LLRgdGM0LrQsCDQvtCx0LvQsNGB0YLRjCwgMDgxMzE!5e0!3m2!1sru!2sua!4v1762353307888!5m2!1sru!2sua" width="700" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
}

$phone_1   = get_theme_mod( 'pancionat_footer_phone_1', null );
$phone_2   = get_theme_mod( 'pancionat_footer_phone_2', null );
$addresses =
	Locale::RUSSIAN === get_locale()
	? array(
		get_theme_mod( 'pancionat_footer_address_1_ru', null ),
		get_theme_mod( 'pancionat_footer_address_2_ru', null ),
	)
	: array(
		get_theme_mod( 'pancionat_footer_address_1_ua', null ),
		get_theme_mod( 'pancionat_footer_address_2_ua', null ),
	);

$email = get_theme_mod( 'pancionat_email', null );

get_header();

get_template_part(
	'template-parts/hero',
	null,
	array(
		'title' => Locale::RUSSIAN === $lang ? get_field( 'hero_title_ru' ) : get_the_title(),
		'image' => wp_get_attachment_image_url( $hero_image, 'full' ),
	),
);

get_template_part(
	'template-parts/contacts-social',
	null,
	array(
		'phone_1'      => $phone_1,
		'phone_2'      => $phone_2,
		'addresses'    => $addresses,
		'email'        => $email,
		'title'        => $contacts_title,
		'email_text'   => $email_text,
		'email_icon'   => $email_icon,
		'phone_text'   => $phone_text,
		'phone_icon'   => $phone_icon,
		'address_text' => $address_text,
		'address_icon' => $address_icon,
		'map_1'        => $map_1,
	),
);

get_footer();
