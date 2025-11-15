<?php

function pancionat_theme_setup() {
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support(
		'custom-logo',
		array(
			'height'               => 59,
			'width'                => 260,
			'flex-height'          => false,
			'flex-width'           => false,
			'header-text'          => array( 'site-title', 'site-description' ),
			'unlink-homepage-logo' => true,
		)
	);
	register_nav_menus(
		array(
			'primary_ru' => __( 'Main menu RU', 'pancionat-theme' ),
			'mobile_ru'  => __( 'Mobile menu RU', 'pancionat-theme' ),
			'primary_ua' => __( 'Main menu UA', 'pancionat-theme' ),
			'mobile_ua'  => __( 'Mobile menu UA', 'pancionat-theme' ),
			'footer_ua'  => __( 'Footer menu UA', 'pancionat-theme' ),
			'footer_ru'  => __( 'Footer menu RU', 'pancionat-theme' ),
		)
	);
	load_theme_textdomain( 'pancionat-theme', get_template_directory() . '/languages' );
}

add_action( 'after_setup_theme', 'pancionat_theme_setup' );
