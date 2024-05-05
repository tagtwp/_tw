<?php
/** Don't load directly */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$_twp_file_paths = array(
	'backend/class-tgm-plugin-activation',
	'backend/install-plugins',
	'backend/actions',

	'includes/sidebars',
);

foreach ( $_twp_file_paths as $file_path ) {
	$file = get_theme_file_path( $file_path . '.php' );
	if ( file_exists( $file ) ) {
		include_once $file;
	}
}
