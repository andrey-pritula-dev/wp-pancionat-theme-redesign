<?php
/**
 * Template Name: About Us Page
 */

use PancionatTheme\Enums\Locale;

$lang       = get_locale();
$hero_image = get_theme_mod( 'pancionat_hero_image' );

const ABOUT_INFO_GROUP_KEY = 'group_690caab7d51fb';
$about_info_group_fields   = acf_get_fields( ABOUT_INFO_GROUP_KEY );

if ( isset( $about_info_group_fields ) && ! empty( $about_info_group_fields ) ) {
	$about_info_title = Locale::RUSSIAN === $lang ? get_field( 'about_info_title_ru' ) : get_field( 'about_info_title_ua' );
	$about_info_image = get_field( 'about_info_image' );
	$about_info_icon  = get_field( 'about_info_icon' );
	$about_info_text  = Locale::RUSSIAN === $lang ? get_field( 'about_info_text_ru' ) : get_field( 'about_info_text_ua' );
}

const ABOUT_ADVANTAGES_GROUP_KEY = 'group_690cb0de82489';
$about_advantages_group_fields   = acf_get_fields( ABOUT_ADVANTAGES_GROUP_KEY );

if ( isset( $about_advantages_group_fields ) && ! empty( $about_advantages_group_fields ) ) {
	$about_advantages_title = Locale::RUSSIAN === $lang ? get_field( 'about_advantages_title_ru' ) : get_field( 'about_advantages_title_ua' );
	$about_advantages_cards = array_map(
		function ( $card ) use ( $lang ) {
			return array(
				'icon'  => $card['icon'],
				'image' => $card['image'],
				'title' => Locale::RUSSIAN === $lang ? $card['title_ru'] : $card['title_ua'],
				'text'  => Locale::RUSSIAN === $lang ? $card['text_ru'] : $card['text_ua'],
			);
		},
		get_field( 'about_advantages_cards' ) ?? array()
	);
}

const STEP_GROUP_KEY = 'group_690b439cdb93e';
$step_group_fields   = acf_get_fields( STEP_GROUP_KEY );

if ( isset( $step_group_fields ) && ! empty( $step_group_fields ) ) {
	$step_title       = Locale::RUSSIAN === $lang ? get_field( 'step_title_ru' ) : get_field( 'step_title_ua' );
	$step_subtitle    = Locale::RUSSIAN === $lang ? get_field( 'step_subtitle_ru' ) : get_field( 'step_subtitle_ua' );
	$step_button_text = Locale::RUSSIAN === $lang ? get_field( 'step_button_text_ru' ) : get_field( 'step_button_text_ua' );
}

const ABOUT_EASY_GROUP_KEY = 'group_690cb74e276ce';
$about_easy_group_fields   = acf_get_fields( ABOUT_EASY_GROUP_KEY );

if ( isset( $about_easy_group_fields ) && ! empty( $about_easy_group_fields ) ) {
	$about_easy_title = Locale::RUSSIAN === $lang ? get_field( 'about_easy_title_ru' ) : get_field( 'about_easy_title_ua' );
	$about_easy_text  = Locale::RUSSIAN === $lang ? get_field( 'about_easy_text_ru' ) : get_field( 'about_easy_text_ua' );
	$about_easy_image = get_field( 'about_easy_image' );
	$about_easy_items = array_map(
		function ( $item ) use ( $lang ) {
			return array(
				'image' => $item['image'],
				'text'  => Locale::RUSSIAN === $lang ? $item['text_ru'] : $item['text_ua'],
			);
		},
		get_field( 'about_easy_items' ) ?? array()
	);
}

const MEDIA_GROUP_KEY = 'group_690b50cc8a8e3';
$media_group_fields   = acf_get_fields( MEDIA_GROUP_KEY );

if ( isset( $media_group_fields ) && ! empty( $media_group_fields ) ) {
	$media_title                       = Locale::RUSSIAN === $lang ? get_field( 'media_title_ru' ) : get_field( 'media_title_ua' );
	$media_first_gallery               = get_field( 'media_first_gallery' );
	$media_second_title                = Locale::RUSSIAN === $lang ? get_field( 'media_second_title_ru' ) : get_field( 'media_second_title_ua' );
	$media_second_gallery              = get_field( 'media_second_gallery' );
	$media_map_1                       = '<iframe class="absolute top-0 left-0 w-full h-full border-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2542.297206463222!2d30.3420726!3d50.416934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4cba79adea2c7%3A0xcfb31d4f80473aaa!2z0LLRg9C70LjRhtGPINCf0YDQvtGA0ZbQt9C90LAsIDMzLCDQodC-0YTRltGX0LLRgdGM0LrQsCDQkdC-0YDRidCw0LPRltCy0LrQsCwg0JrQuNGX0LLRgdGM0LrQsCDQvtCx0LvQsNGB0YLRjCwgMDgxMzE!5e0!3m2!1sru!2sua!4v1762353307888!5m2!1sru!2sua" width="700" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
	$media_video_1                     = get_field( 'media_video_1' );
	$media_video_2                     = get_field( 'media_video_2' );
	$media_video_title                 = Locale::RUSSIAN === $lang ? get_field( 'media_video_title_ru' ) : get_field( 'media_video_title_ua' );
	$media_video_services_1            = array_map(
		function ( $item ) use ( $lang ) {
			return Locale::RUSSIAN === $lang ? $item['media_video_service_text_1_ru'] : $item['media_video_service_text_1_ua'];
		},
		get_field( 'media_video_services_1' ) ?? array()
	);
	$media_video_service_description_1 = Locale::RUSSIAN === $lang ? get_field( 'media_video_service_description_1_ru' ) : get_field( 'media_video_service_description_1_ua' );
	$media_video_service_description_2 = Locale::RUSSIAN === $lang ? get_field( 'media_video_service_description_2_ru' ) : get_field( 'media_video_service_description_2_ua' );

	$media_video_services_2            = array_map(
		function ( $item ) use ( $lang ) {
			return Locale::RUSSIAN === $lang ? $item['media_video_service_text_2_ru'] : $item['media_video_service_text_2_ua'];
		},
		get_field( 'media_video_services_2' ) ?? array()
	);
	$media_video_service_description_3 = Locale::RUSSIAN === $lang ? get_field( 'media_video_service_description_3_ru' ) : get_field( 'media_video_service_description_3_ua' );
	$media_video_service_button_text   = Locale::RUSSIAN === $lang ? get_field( 'media_video_service_button_text_ru' ) : get_field( 'media_video_service_button_text_ua' );
	$media_third_title                 = Locale::RUSSIAN === $lang ? get_field( 'media_third_title_ru' ) : get_field( 'media_third_title_ua' );
	$media_third_gallery               = get_field( 'media_third_gallery' );
	$media_map_2                       = '<iframe class="absolute top-0 left-0 w-full h-full border-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2544.4473576039636!2d30.3223968!3d50.3768586!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4ca6e773d87d5%3A0xb55784342d4f84aa!2z0YPQuy4g0JzQvtC70L7QtNGR0LbQvdCw0Y8sIDQsINCh0LLRj9GC0L7Qv9C10YLRgNC-0LLRgdC60L7QtSwg0JrQuNC10LLRgdC60LDRjyDQvtCx0LvQsNGB0YLRjCwgMDgxNDE!5e0!3m2!1sru!2sua!4v1762354186080!5m2!1sru!2sua" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
	$addresses                         =
		Locale::RUSSIAN === get_locale()
		? array(
			get_theme_mod( 'pancionat_footer_address_1_ru', null ),
			get_theme_mod( 'pancionat_footer_address_2_ru', null ),
		)
		: array(
			get_theme_mod( 'pancionat_footer_address_1_ua', null ),
			get_theme_mod( 'pancionat_footer_address_2_ua', null ),
		);
}

const FORM_GROUP_KEY = 'group_690b77f5b60e5';
$form_group_fields   = acf_get_fields( FORM_GROUP_KEY );

if ( isset( $form_group_fields ) && ! empty( $form_group_fields ) ) {
	$form_title                    = Locale::RUSSIAN === $lang ? get_field( 'form_title_ru' ) : get_field( 'form_title_ua' );
	$name_field                    = Locale::RUSSIAN === $lang ? get_field( 'name_field_ru' ) : get_field( 'name_field_ua' );
	$form_background_image         = get_field( 'form_background_image' );
	$form_right_image              = get_field( 'form_right_image' );
	$name_field_placeholder        = Locale::RUSSIAN === $lang ? get_field( 'name_field_placeholder_ru' ) : get_field( 'name_field_placeholder_ua' );
	$phone_field                   = Locale::RUSSIAN === $lang ? get_field( 'phone_field_ru' ) : get_field( 'phone_field_ua' );
	$phone_field_placeholder       = Locale::RUSSIAN === $lang ? get_field( 'phone_field_placeholder_ru' ) : get_field( 'phone_field_placeholder_ua' );
	$description_field             = Locale::RUSSIAN === $lang ? get_field( 'description_field_ru' ) : get_field( 'description_field_ua' );
	$description_field_placeholder = Locale::RUSSIAN === $lang ? get_field( 'description_field_placeholder_ru' ) : get_field( 'description_field_placeholder_ua' );
	$button_text                   = Locale::RUSSIAN === $lang ? get_field( 'button_text_ru' ) : get_field( 'button_text_ua' );
}

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
	'template-parts/about-advantages',
	null,
	array(
		'title' => $about_advantages_title,
		'cards' => $about_advantages_cards,
	),
);

get_template_part(
	'template-parts/about-info',
	null,
	array(
		'title' => $about_info_title,
		'image' => $about_info_image,
		'icon'  => $about_info_icon,
		'text'  => $about_info_text,
	),
);

get_template_part(
	'template-parts/about-easy',
	null,
	array(
		'title' => $about_easy_title,
		'text'  => $about_easy_text,
		'image' => $about_easy_image,
		'items' => $about_easy_items,
	)
);

get_template_part(
	'template-parts/pancionat-media',
	null,
	array(
		'title'                       => $media_title,
		'first_gallery'               => $media_first_gallery,
		'second_title'                => $media_second_title,
		'second_gallery'              => $media_second_gallery,
		'map_1'                       => $media_map_1,
		'video_1'                     => $media_video_1,
		'video_2'                     => $media_video_2,
		'video_title'                 => $media_video_title,
		'video_services_1'            => $media_video_services_1,
		'video_service_description_1' => $media_video_service_description_1,
		'video_service_description_2' => $media_video_service_description_2,
		'video_services_2'            => $media_video_services_2,
		'video_service_description_3' => $media_video_service_description_3,
		'video_service_button_text'   => $media_video_service_button_text,
		'third_title'                 => $media_third_title,
		'third_gallery'               => $media_third_gallery,
		'map_2'                       => $media_map_2,
		'addresses'                   => $addresses,
	)
);

get_template_part(
	'template-parts/step',
	null,
	array(
		'title'       => $step_title,
		'subtitle'    => $step_subtitle,
		'button_text' => $step_button_text,
	)
);

get_template_part(
	'template-parts/form',
	null,
	array(
		'title'                         => $form_title,
		'name_field'                    => $name_field,
		'background_image'              => $form_background_image,
		'right_image'                   => $form_right_image,
		'name_field_placeholder'        => $name_field_placeholder,
		'phone_field'                   => $phone_field,
		'phone_field_placeholder'       => $phone_field_placeholder,
		'description_field'             => $description_field,
		'description_field_placeholder' => $description_field_placeholder,
		'button_text'                   => $button_text,
	),
);

get_footer();
