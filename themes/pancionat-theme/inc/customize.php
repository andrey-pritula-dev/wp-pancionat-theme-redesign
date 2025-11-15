<?php

function pancionat_theme_customize_header( $wp_customize ) {
	$wp_customize->add_section(
		'pancionat_header_social',
		array(
			'title'       => __( 'Heder social', 'pancionat-theme' ),
			'priority'    => 5,
			'description' => __( 'Text for social in header', 'pancionat-theme' ),
		)
	);

	$wp_customize->add_setting(
		'pancionat_header_viber_text',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		'pancionat_header_viber_control',
		array(
			'label'    => __( 'Viber number', 'pancionat-theme' ),
			'section'  => 'pancionat_header_social',
			'settings' => 'pancionat_header_viber_text',
			'type'     => 'phone',
		)
	);

	$wp_customize->add_setting(
		'pancionat_header_telegram_text',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		'pancionat_header_telegram_control',
		array(
			'label'    => __( 'Telegram number', 'pancionat-theme' ),
			'section'  => 'pancionat_header_social',
			'settings' => 'pancionat_header_telegram_text',
			'type'     => 'phone',
		)
	);
}

function pancionat_theme_customize_footer( $wp_customize ) {
	$wp_customize->add_setting(
		'footer_logo',
		array(
			'default'           => '',
			'sanitize_callback' => 'absint',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Cropped_Image_Control(
			$wp_customize,
			'footer_logo_control',
			array(
				'label'       => __( 'Footer Logo', 'pancionat-theme' ),
				'section'     => 'title_tagline',
				'settings'    => 'footer_logo',
				'priority'    => 9,
				'width'       => 300,
				'height'      => 100,
				'flex_width'  => true,
				'flex_height' => true,
			)
		)
	);

	$wp_customize->add_section(
		'pancionat_footer',
		array(
			'title'       => __( 'Footer', 'pancionat-theme' ),
			'priority'    => 6,
			'description' => __( 'Text for footer', 'pancionat-theme' ),
		)
	);

	$wp_customize->add_setting(
		'pancionat_footer_address_1_ru',
		array(
			'default'           => '',
			'sanitize_callback' => 'pancionat_theme_allow_html',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		'pancionat_footer_address_1_ru_control',
		array(
			'label'    => __( 'Address 1 (RU)', 'pancionat-theme' ),
			'section'  => 'pancionat_footer',
			'settings' => 'pancionat_footer_address_1_ru',
			'type'     => 'textarea',
		)
	);

	$wp_customize->add_setting(
		'pancionat_footer_address_1_ua',
		array(
			'default'           => '',
			'sanitize_callback' => 'pancionat_theme_allow_html',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		'pancionat_footer_address_1_ua_control',
		array(
			'label'    => __( 'Address 1 (UA)', 'pancionat-theme' ),
			'section'  => 'pancionat_footer',
			'settings' => 'pancionat_footer_address_1_ua',
			'type'     => 'textarea',
		)
	);

	$wp_customize->add_setting(
		'pancionat_footer_address_2_ru',
		array(
			'default'           => '',
			'sanitize_callback' => 'pancionat_theme_allow_html',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		'pancionat_footer_address_2_ru_control',
		array(
			'label'    => __( 'Address 2 (RU)', 'pancionat-theme' ),
			'section'  => 'pancionat_footer',
			'settings' => 'pancionat_footer_address_2_ru',
			'type'     => 'textarea',
		)
	);

	$wp_customize->add_setting(
		'pancionat_footer_address_2_ua',
		array(
			'default'           => '',
			'sanitize_callback' => 'pancionat_theme_allow_html',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		'pancionat_footer_address_2_ua_control',
		array(
			'label'    => __( 'Address 2 (UA)', 'pancionat-theme' ),
			'section'  => 'pancionat_footer',
			'settings' => 'pancionat_footer_address_2_ua',
			'type'     => 'textarea',
		)
	);

	$wp_customize->add_setting(
		'pancionat_footer_phone_1',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		'pancionat_footer_phone_1_control',
		array(
			'label'    => __( 'Phone 1', 'pancionat-theme' ),
			'section'  => 'pancionat_footer',
			'settings' => 'pancionat_footer_phone_1',
			'type'     => 'number',
		)
	);

	$wp_customize->add_setting(
		'pancionat_footer_phone_2',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		'pancionat_footer_phone_2_control',
		array(
			'label'    => __( 'Phone 2', 'pancionat-theme' ),
			'section'  => 'pancionat_footer',
			'settings' => 'pancionat_footer_phone_2',
			'type'     => 'number',
		)
	);

	$wp_customize->add_setting(
		'pancionat_email',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		'pancionat_email_control',
		array(
			'label'    => __( 'Email', 'pancionat-theme' ),
			'section'  => 'pancionat_footer',
			'settings' => 'pancionat_email',
			'type'     => 'email',
		)
	);
}

function pancionat_theme_customize_posts( $wp_customize ) {
	$wp_customize->add_section(
		'pancionat_hero_section',
		array(
			'title'       => __( 'Hero Section', 'pancionat-theme' ),
			'priority'    => 6,
			'description' => __( 'Image for hero section', 'pancionat-theme' ),
		)
	);

	$wp_customize->add_setting(
		'pancionat_hero_image',
		array(
			'default'           => '',
			'sanitize_callback' => 'absint',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Cropped_Image_Control(
			$wp_customize,
			'pancionat_hero_image_control',
			array(
				'label'       => __( 'Hero Image', 'pancionat-theme' ),
				'section'     => 'pancionat_hero_section',
				'settings'    => 'pancionat_hero_image',
				'priority'    => 9,
				'width'       => 1927,
				'height'      => 749,
				'flex_width'  => true,
				'flex_height' => true,
			)
		)
	);
}

function pancionat_theme_customize_register( $wp_customize ) {
	pancionat_theme_customize_header( $wp_customize );
	pancionat_theme_customize_footer( $wp_customize );
	pancionat_theme_customize_posts( $wp_customize );
}

add_action( 'customize_register', 'pancionat_theme_customize_register' );
