<?php
/**
 * Template Name: Services Page
 */

use PancionatTheme\Enums\Locale;

$lang       = get_locale();
$hero_image = get_theme_mod( 'pancionat_hero_image' );

const HERO_GROUP_KEY = 'group_690c86777758b';
$hero_group_fields   = acf_get_fields( HERO_GROUP_KEY );

if ( isset( $hero_group_fields ) && ! empty( $hero_group_fields ) ) {
	$hero_menu_1_title    = Locale::RUSSIAN === $lang ? get_field( 'hero_menu_1_title_ru' ) : get_field( 'hero_menu_1_title_ua' );
	$hero_menu_1_image    = get_field( 'hero_menu_1_image' );
	$hero_menu_item_icons = get_field( 'hero_item_icons' );
	$hero_menu_1_items    = array_map(
		function ( $item ) use ( $lang ) {
			return Locale::RUSSIAN === $lang ? $item['item_ru'] : $item['item_ua'];
		},
		get_field( 'menu_1_items' ) ?? array()
	);
	$hero_menu_2_title    = Locale::RUSSIAN === $lang ? get_field( 'hero_menu_2_title_ru' ) : get_field( 'hero_menu_2_title_ua' );
	$hero_menu_2_image    = get_field( 'hero_menu_2_image' );
	$hero_menu_2_items    = array_map(
		function ( $item ) use ( $lang ) {
			return Locale::RUSSIAN === $lang ? $item['item_ru'] : $item['item_ua'];
		},
		get_field( 'menu_2_items' ) ?? array()
	);
	$hero_menu_3_title    = Locale::RUSSIAN === $lang ? get_field( 'hero_menu_3_title_ru' ) : get_field( 'hero_menu_3_title_ua' );
	$hero_menu_3_image    = get_field( 'hero_menu_3_image' );
	$hero_menu_3_items    = array_map(
		function ( $item ) use ( $lang ) {
			return Locale::RUSSIAN === $lang ? $item['item_ru'] : $item['item_ua'];
		},
		get_field( 'menu_3_items' ) ?? array()
	);
}

const STEP_GROUP_KEY = 'group_690b439cdb93e';
$step_group_fields   = acf_get_fields( STEP_GROUP_KEY );

if ( isset( $step_group_fields ) && ! empty( $step_group_fields ) ) {
	$step_title       = Locale::RUSSIAN === $lang ? get_field( 'step_title_ru' ) : get_field( 'step_title_ua' );
	$step_subtitle    = Locale::RUSSIAN === $lang ? get_field( 'step_subtitle_ru' ) : get_field( 'step_subtitle_ua' );
	$step_button_text = Locale::RUSSIAN === $lang ? get_field( 'step_button_text_ru' ) : get_field( 'step_button_text_ua' );
}

const EXPERIENCE_GROUP_KEY = 'group_690b457cad99a';
$experience_group_fields   = acf_get_fields( EXPERIENCE_GROUP_KEY );

if ( isset( $experience_group_fields ) && ! empty( $experience_group_fields ) ) {
	$experience_items            = array_map(
		function ( $item ) use ( $lang ) {
			return array(
				'name'   => Locale::RUSSIAN === $lang ? $item['experience_item_name_ru'] : $item['experience_item_name_ua'],
				'number' => $item['experience_item_number'],
			);
		},
		get_field( 'experience_items' ) ?? array()
	);
	$experience_background_image = get_field( 'experience_background_image' );
}

const LEISURE_GROUP_KEY = 'group_690b2e3d3bad5';
$leisure_group_fields   = acf_get_fields( LEISURE_GROUP_KEY );

if ( isset( $leisure_group_fields ) && ! empty( $leisure_group_fields ) ) {
	$leisure_title = Locale::RUSSIAN === $lang ? get_field( 'leisure_title_ru' ) : get_field( 'leisure_title_ua' );
	$leisure_cards = array_map(
		function ( $item ) use ( $lang ) {
			return array(
				'image' => $item['card_top_image'],
				'icon'  => $item['card_icon'],
				'title' => Locale::RUSSIAN === $lang ? $item['card_title_ru'] : $item['card_title_ua'],
				'items' => array(
					array(
						'item'    => Locale::RUSSIAN === $lang ? $item['card_item_1_ru'] : $item['card_item_1_ua'],
						'subitem' => Locale::RUSSIAN === $lang ? $item['card_subitem_1_ru'] : $item['card_subitem_1_ua'],
					),
					array(
						'item'    => Locale::RUSSIAN === $lang ? $item['card_item_2_ru'] : $item['card_item_2_ua'],
						'subitem' => Locale::RUSSIAN === $lang ? $item['card_subitem_2_ru'] : $item['card_subitem_2_ua'],
					),
					array(
						'item'    => Locale::RUSSIAN === $lang ? $item['card_item_3_ru'] : $item['card_item_3_ua'],
						'subitem' => Locale::RUSSIAN === $lang ? $item['card_subitem_3_ru'] : $item['card_subitem_3_ua'],
					),
				),
			);
		},
		get_field( 'leisure' ) ?? array()
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
	'template-parts/step',
	null,
	array(
		'title'       => $step_title,
		'subtitle'    => $step_subtitle,
		'button_text' => $step_button_text,
	)
);

get_template_part(
	'template-parts/tabs',
	null,
	array(
		'image'           => wp_get_attachment_image_url( $hero_image, 'full' ),
		'menu_item_icons' => $hero_menu_item_icons,
		'menu_1_title'    => $hero_menu_1_title,
		'menu_1_image'    => $hero_menu_1_image,
		'menu_1_items'    => $hero_menu_1_items,
		'menu_2_title'    => $hero_menu_2_title,
		'menu_2_image'    => $hero_menu_2_image,
		'menu_2_items'    => $hero_menu_2_items,
		'menu_3_title'    => $hero_menu_3_title,
		'menu_3_image'    => $hero_menu_3_image,
		'menu_3_items'    => $hero_menu_3_items,
	),
);

get_template_part(
	'template-parts/experience',
	null,
	array(
		'items'            => $experience_items,
		'background_image' => $experience_background_image,
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
	'template-parts/leisure',
	null,
	array(
		'title' => $leisure_title,
		'cards' => $leisure_cards,
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
