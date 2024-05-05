<?php
/** Don't load directly */
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( '_twp_register_options_logo' ) ) {
	function _twp_register_options_logo() {

		return [
			'id'    => _TWP_PREFIX . '_config_section_site_logo',
			'title' => esc_html__( 'Logo', '_twp' ),
			'icon'  => 'el el-barcode',
		];
	}
}

if ( ! function_exists( '_twp_register_options_logo_global' ) ) {
	function _twp_register_options_logo_global() {

		return [
			'id'         => _TWP_PREFIX . '_config_section_global_logo',
			'title'      => esc_html__( 'Default Logos', '_twp' ),
			'desc'       => esc_html__( 'Upload logos for you website.', '_twp' ),
			'icon'       => 'el el-laptop',
			'subsection' => true,
			'fields'     => [
				[
					'id'    => 'info_add_favicon',
					'type'  => 'info',
					'style' => 'info',
					'desc'  => esc_html__( 'Go to "Appearance > Customize > Site Identity > Site Icon" to easily add your favicon.', '_twp' ),
				],
				[
					'id'    => 'info_add_logo_dark',
					'type'  => 'info',
					'style' => 'info',
					'desc'  => esc_html__( 'Ensure that dark mode logos are configured when enabling dark mode for your site.', '_twp' ),
				],
				[
					'id'    => 'template_logo_info',
					'type'  => 'info',
					'style' => 'warning',
					'desc'  => esc_html__( 'The logo settings may not apply to the Header Template. Edit the header with Elementor to configure the logo block if your website uses a header template.', '_twp' ),
				],
				[
					'id'    => 'logo_seo_info',
					'type'  => 'info',
					'style' => 'warning',
					'desc'  => esc_html__( 'The "Main Logo" setting is crucial for schema data markup. Please ensure that this setting is configured.', '_twp' ),
				],
				[
					'id'          => 'logo',
					'type'        => 'media',
					'url'         => true,
					'preview'     => true,
					'title'       => esc_html__( 'Main Logo', '_twp' ),
					'subtitle'    => esc_html__( 'Select or upload a logo for your site.', '_twp' ),
					'description' => esc_html__( 'The recommended height value is 60px.', '_twp' ),
				],
				[
					'id'          => 'dark_logo',
					'type'        => 'media',
					'url'         => true,
					'preview'     => true,
					'title'       => esc_html__( 'Dark Mode - Main Logo', '_twp' ),
					'subtitle'    => esc_html__( 'Select or upload a logo for your site in dark mode.', '_twp' ),
					'description' => esc_html__( 'The image sizes should be the same as the main logo.', '_twp' ),
				],
				[
					'id'          => 'retina_logo',
					'type'        => 'media',
					'url'         => true,
					'preview'     => true,
					'title'       => esc_html__( 'Retina Main Logo', '_twp' ),
					'subtitle'    => esc_html__( 'Select or upload a retina logo (x2 size).', '_twp' ),
					'description' => esc_html__( 'The recommended height value is 120px.', '_twp' ),
				],
				[
					'id'          => 'dark_retina_logo',
					'type'        => 'media',
					'url'         => true,
					'preview'     => true,
					'title'       => esc_html__( 'Dark Mode - Retina Main Logo', '_twp' ),
					'subtitle'    => esc_html__( 'Select or upload a retina logo in dark mode.', '_twp' ),
					'description' => esc_html__( 'The image sizes should be the same as the retina main logo.', '_twp' ),
				],
			],
		];
	}
}

if ( ! function_exists( '_twp_register_options_logo_mobile' ) ) {
	/**
	 * @return array
	 */
	function _twp_register_options_logo_mobile() {

		return [
			'id'         => _TWP_PREFIX . '_config_section_mobile_logo',
			'title'      => esc_html__( 'Mobile Logos', '_twp' ),
			'desc'       => esc_html__( 'Customize the mobile logos.', '_twp' ),
			'icon'       => 'el el-iphone-home',
			'subsection' => true,
			'fields'     => [
				[
					'id'          => 'mobile_logo',
					'type'        => 'media',
					'url'         => true,
					'preview'     => true,
					'title'       => esc_html__( 'Mobile Logo', '_twp' ),
					'subtitle'    => esc_html__( 'Upload a retina logo for displaying on mobile devices.', '_twp' ),
					'description' => esc_html__( 'The recommended height value is 84px.', '_twp' ),
				],
				[
					'id'          => 'dark_mobile_logo',
					'type'        => 'media',
					'url'         => true,
					'preview'     => true,
					'title'       => esc_html__( 'Dark Mode - Mobile Logo', '_twp' ),
					'subtitle'    => esc_html__( 'Upload a retina logo for displaying on mobile devices in dark mode.', '_twp' ),
					'description' => esc_html__( 'The image sizes should be the same as the mobile logo.', '_twp' ),
				],
			],
		];
	}
}

if ( ! function_exists( '_twp_register_options_logo_transparent' ) ) {
	function _twp_register_options_logo_transparent() {

		return [
			'id'         => _TWP_PREFIX . '_config_section_transparent_logo',
			'title'      => esc_html__( 'Transparent Logos', '_twp' ),
			'desc'       => esc_html__( 'Manage logos for the transprent headers.', '_twp' ),
			'icon'       => 'el el-photo',
			'subsection' => true,
			'fields'     => [
				[
					'id'          => 'transparent_logo',
					'type'        => 'media',
					'url'         => true,
					'preview'     => true,
					'title'       => esc_html__( 'Transparent Logo', '_twp' ),
					'subtitle'    => esc_html__( 'Upload a logo for the transparent headers.', '_twp' ),
					'description' => esc_html__( 'We recommended that it is being a white color image (60px).', '_twp' ),
				],
				[
					'id'       => 'transparent_retina_logo',
					'type'     => 'media',
					'url'      => true,
					'preview'  => true,
					'title'    => esc_html__( 'Retina Transparent Logo', '_twp' ),
					'subtitle' => esc_html__( 'Upload a retina logo for the transparent header (x2 size).', '_twp' ),
				],
			],
		];
	}
}

if ( ! function_exists( '_twp_register_options_logo_favicon' ) ) {
	/**
	 * @return array
	 */
	function _twp_register_options_logo_favicon() {

		return [
			'id'         => _TWP_PREFIX . '_config_section_logo_favicon',
			'title'      => esc_html__( 'Bookmarklet', '_twp' ),
			'desc'       => esc_html__( 'Select or upload bookmarklet icons for iOS and Android devices.', '_twp' ),
			'icon'       => 'el el-bookmark',
			'subsection' => true,
			'fields'     => [
				[
					'id'          => 'icon_touch_apple',
					'type'        => 'media',
					'url'         => true,
					'preview'     => true,
					'title'       => esc_html__( 'iOS Bookmarklet Icon', '_twp' ),
					'subtitle'    => esc_html__( 'Upload an icon for the Apple touch.', '_twp' ),
					'description' => esc_html__( 'The recommended image size is 72 x 72px', '_twp' ),
				],
				[
					'id'          => 'icon_touch_metro',
					'type'        => 'media',
					'url'         => true,
					'preview'     => true,
					'title'       => esc_html__( 'Metro UI Bookmarklet Icon', '_twp' ),
					'description' => esc_html__( 'The recommended image size is 144 x 144px', '_twp' ),
					'subtitle'    => esc_html__( 'Upload icon for the Metro interface.', '_twp' ),
				],
			],
		];
	}
}
