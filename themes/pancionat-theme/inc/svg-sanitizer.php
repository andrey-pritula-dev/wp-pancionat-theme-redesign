<?php

use enshrined\svgSanitize\Sanitizer;

add_filter(
	'upload_mimes',
	function ( $mimes ) {
		if ( current_user_can( 'manage_options' ) ) {
			$mimes['svg'] = 'image/svg+xml';
		}
		return $mimes;
	}
);

function pancionat_sanitize_svg_upload( $file ) {
	$filetype = wp_check_filetype( $file['name'] );

	if ( isset( $filetype['ext'] ) && 'svg' === strtolower( $filetype['ext'] ) ) {
		$path = $file['tmp_name'];

		if ( file_exists( $path ) ) {
			require_once ABSPATH . 'wp-admin/includes/file.php';

			if ( WP_Filesystem() ) {
				global $wp_filesystem;

				require_once get_template_directory() . '/vendor/autoload.php';

				$sanitizer = new Sanitizer();
				$sanitizer->minify( true );

				$dirty = $wp_filesystem->get_contents( $path );
				if ( empty( $dirty ) ) {
					return $file;
				}

				$sanitized = $sanitizer->sanitize( $dirty );
				if ( ! empty( $sanitized ) ) {
					$wp_filesystem->put_contents( $path, $sanitized, FS_CHMOD_FILE );
				}
			}
		}
	}

	return $file;
}
add_filter( 'wp_handle_upload_prefilter', 'pancionat_sanitize_svg_upload', 10, 1 );

add_action(
	'admin_head',
	function () {
		echo '<style>
		.attachment-266x266, .thumbnail img[src$=".svg"] {
			width: 100% !important;
			height: auto !important;
		}
	</style>';
	}
);
