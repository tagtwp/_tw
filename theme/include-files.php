<?php
/** Don't load directly */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$twp_file_paths = array(
	'backend/class-tgm-plugin-activation',
);

foreach ( $twp_file_paths as $file_path ) {
	$file = get_theme_file_path( $file_path . '.php' );
	if ( file_exists( $file ) ) {
		include_once $file;
	}
}
