<?php
/**
 * Template Name: Blog Page
 */

use PancionatTheme\Enums\Locale;

$lang         = get_locale();
$hero_image   = get_theme_mod( 'pancionat_hero_image' );
$blog_page_id = get_option( 'page_for_posts' );

const BLOG_GROUP_KEY = 'group_690b7221010ee';
$blog_group_fields   = acf_get_fields( BLOG_GROUP_KEY );

if ( isset( $blog_group_fields ) && ! empty( $blog_group_fields ) ) {
	$blogs_title = Locale::RUSSIAN === $lang ? get_field( 'blog_title_ru', $blog_page_id ) : get_field( 'blog_title_ua', $blog_page_id );
}

const FORM_GROUP_KEY = 'group_690b77f5b60e5';
$form_group_fields   = acf_get_fields( FORM_GROUP_KEY );

if ( isset( $form_group_fields ) && ! empty( $form_group_fields ) ) {
	$form_title                    = Locale::RUSSIAN === $lang ? get_field( 'form_title_ru', $blog_page_id ) : get_field( 'form_title_ua', $blog_page_id );
	$name_field                    = Locale::RUSSIAN === $lang ? get_field( 'name_field_ru', $blog_page_id ) : get_field( 'name_field_ua', $blog_page_id );
	$form_background_image         = get_field( 'form_background_image', $blog_page_id );
	$form_right_image              = get_field( 'form_right_image', $blog_page_id );
	$name_field_placeholder        = Locale::RUSSIAN === $lang ? get_field( 'name_field_placeholder_ru', $blog_page_id ) : get_field( 'name_field_placeholder_ua', $blog_page_id );
	$phone_field                   = Locale::RUSSIAN === $lang ? get_field( 'phone_field_ru', $blog_page_id ) : get_field( 'phone_field_ua', $blog_page_id );
	$phone_field_placeholder       = Locale::RUSSIAN === $lang ? get_field( 'phone_field_placeholder_ru', $blog_page_id ) : get_field( 'phone_field_placeholder_ua', $blog_page_id );
	$description_field             = Locale::RUSSIAN === $lang ? get_field( 'description_field_ru', $blog_page_id ) : get_field( 'description_field_ua', $blog_page_id );
	$description_field_placeholder = Locale::RUSSIAN === $lang ? get_field( 'description_field_placeholder_ru', $blog_page_id ) : get_field( 'description_field_placeholder_ua', $blog_page_id );
	$button_text                   = Locale::RUSSIAN === $lang ? get_field( 'button_text_ru', $blog_page_id ) : get_field( 'button_text_ua', $blog_page_id );
}

get_header();

get_template_part(
	'template-parts/hero',
	null,
	array(
		'title' => Locale::RUSSIAN === $lang ? get_field( 'hero_title_ru', $blog_page_id ) : get_the_title( $blog_page_id ),
		'image' => wp_get_attachment_image_url( $hero_image, 'full' ),
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
