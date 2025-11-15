<?php
/**
 * Template Name: Front Page
 */

use PancionatTheme\Enums\Locale;

$lang = get_locale();

const SLIDER_GROUP_KEY = 'group_6909c42ac1a15';
$slider_group_fields   = acf_get_fields( SLIDER_GROUP_KEY );

if ( isset( $slider_group_fields ) && ! empty( $slider_group_fields ) ) {
	$slides      = array(
		get_field( $slider_group_fields[0]['name'] ),
		get_field( $slider_group_fields[1]['name'] ),
		get_field( $slider_group_fields[2]['name'] ),
	);
	$phones      = array(
		get_field( $slider_group_fields[3]['name'] ),
		get_field( $slider_group_fields[4]['name'] ),
	);
	$slider_text = Locale::RUSSIAN === $lang ?
		array(
			'title'       => get_field( $slider_group_fields[5]['name'] ),
			'subtitle'    => get_field( $slider_group_fields[6]['name'] ),
			'button_text' => get_field( $slider_group_fields[7]['name'] ),
		)
		: array(
			'title'       => get_field( $slider_group_fields[8]['name'] ),
			'subtitle'    => get_field( $slider_group_fields[9]['name'] ),
			'button_text' => get_field( $slider_group_fields[10]['name'] ),
		);
}

const WHY_US_FIELD_KEY = 'field_690a055f40355';
$why_us_fields         = get_field( WHY_US_FIELD_KEY );

if ( isset( $why_us_fields ) && ! empty( $why_us_fields ) ) {
	$why_title = Locale::RUSSIAN === $lang ? get_field( 'why_title_ru' ) : get_field( 'why_title_ua' );
	$cards     = array_map(
		function ( $item ) use ( $lang ) {
			return array(
				'image'    => $item['image'],
				'icon'     => $item['icon'],
				'title'    => Locale::RUSSIAN === $lang ? $item['title_ru'] : $item['title_ua'],
				'subtitle' => Locale::RUSSIAN === $lang ? $item['subtitle_ru'] : $item['subtitle_ua'],
			);
		},
		$why_us_fields ?? array()
	);
}

const COMFORT_GROUP_KEY = 'group_690a1fc378528';
$comfort_group_fields   = acf_get_fields( COMFORT_GROUP_KEY );

if ( isset( $comfort_group_fields ) && ! empty( $comfort_group_fields ) ) {
	$comfort_title            = Locale::RUSSIAN === $lang ? get_field( 'title_ru' ) : get_field( 'title_ua' );
	$comfort_description      = Locale::RUSSIAN === $lang ? get_field( 'description_ru' ) : get_field( 'description_ua' );
	$comfort_image_main       = get_field( 'image_main' );
	$comfort_image_side       = get_field( 'image_side' );
	$comfort_image_badge      = get_field( 'image_badge' );
	$comfort_badge_number     = get_field( 'badge_number' );
	$comfort_services         = array_map(
		function ( $item ) use ( $lang ) {
			return array(
				'icon'  => $item['service_icon'],
				'title' => Locale::RUSSIAN === $lang ? $item['service_title_ru'] : $item['service_title_ua'],
			);
		},
		get_field( 'services' ) ?? array()
	);
	$comfort_badge_text       = Locale::RUSSIAN === $lang ? get_field( 'badge_text_ru' ) : get_field( 'badge_text_ua' );
	$comfort_image_background = get_field( 'image_background' );
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

const DAILY_ROUTINE_GROUP_KEY = 'group_690b4c3ac7081';
$daily_routine_group_fields   = acf_get_fields( DAILY_ROUTINE_GROUP_KEY );

if ( isset( $daily_routine_group_fields ) && ! empty( $daily_routine_group_fields ) ) {
	$daily_routine_image = get_field( 'daily_routine_image' );
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

const BLOG_GROUP_KEY = 'group_690b7221010ee';
$blog_group_fields   = acf_get_fields( BLOG_GROUP_KEY );

if ( isset( $blog_group_fields ) && ! empty( $blog_group_fields ) ) {
	$blogs_title = Locale::RUSSIAN === $lang ? get_field( 'blog_title_ru' ) : get_field( 'blog_title_ua' );
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

const FOOTER_CALL_GROUP_KEY = 'group_691881cd7c001';
$footer_call_group_fields   = acf_get_fields( FOOTER_CALL_GROUP_KEY );

if ( isset( $footer_call_group_fields ) && ! empty( $footer_call_group_fields ) ) {
	$footer_call_title = Locale::RUSSIAN === $lang ? get_field( 'modal_call_title_ru' ) : get_field( 'modal_call_title_ua' );
	$footer_call_mask  = get_field( 'modal_call_placeholder' );
	$footer_call_icon  = get_field( 'modal_call_icon' );
}

get_header();

get_template_part(
	'template-parts/slider',
	null,
	array(
		'slides'      => $slides,
		'phone'       => $phones,
		'slider_text' => $slider_text,
	)
);

get_template_part(
	'template-parts/why-us',
	null,
	array(
		'cards' => $cards,
		'title' => $why_title,
	)
);

get_template_part(
	'template-parts/comfort',
	null,
	array(
		'title'            => $comfort_title,
		'description'      => $comfort_description,
		'image_main'       => $comfort_image_main,
		'image_side'       => $comfort_image_side,
		'image_badge'      => $comfort_image_badge,
		'badge_text'       => $comfort_badge_text,
		'services'         => $comfort_services,
		'badge_number'     => $comfort_badge_number,
		'image_background' => $comfort_image_background,
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
	'template-parts/experience',
	null,
	array(
		'items'            => $experience_items,
		'background_image' => $experience_background_image,
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
	'template-parts/daily-routine',
	null,
	array(
		'image' => $daily_routine_image,
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

get_template_part(
	'template-parts/blog',
	null,
	array(
		'title' => $blogs_title,
		'lang'  => $lang,
	),
);

get_template_part(
	'template-parts/footer-call',
	null,
	array(
		'title' => $footer_call_title,
		'mask'  => $footer_call_mask,
		'icon'  => $footer_call_icon,
	)
);

get_footer();
