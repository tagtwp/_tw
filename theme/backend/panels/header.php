<?php
/** Don't load directly */
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( '_twp_register_options_header' ) ) {
	function _twp_register_options_header() {

		return [
			'id'    => _TWP_PREFIX . '_config_section_header',
			'title' => esc_html__( 'Header', '_twp' ),
			'icon'  => 'el el-th',
		];
	}
}

if ( ! function_exists( '_twp_register_options_header_general' ) ) {
	function _twp_register_options_header_general() {

		return [
			'id'         => _TWP_PREFIX . '_config_section_header_general',
			'title'      => esc_html__( 'General', '_twp' ),
			'icon'       => 'el el-cog',
			'subsection' => true,
			'desc'       => esc_html__( 'Customize the styles for your site header.', '_twp' ),
			'fields'     => [
				[
					'id'     => 'section_start_header_style',
					'type'   => 'section',
					'class'  => 'ruby-section-start',
					'title'  => esc_html__( 'Global Style', '_twp' ),
					'notice' => [
						esc_html__( 'The global header style will apply whole the website.', '_twp' ),
						esc_html__( 'Select "Use Ruby Template" under the "Global Header Style" setting if you use Ruby Template shortcode.', '_twp' ),
					],
					'indent' => true,
				],
				[
					'id'          => 'header_style',
					'type'        => 'select',
					'title'       => esc_html__( 'Header Style', '_twp' ),
					'subtitle'    => esc_html__( 'Select a header style for your site.', '_twp' ),
					'options'     => foxiz_config_header_style( false, false, true ),
					'description' => esc_html__( 'This is treated as a global setting. Other position settings take priority over this setting.', '_twp' ),
					'default'     => '1',
				],
				[
					'id'          => 'header_template',
					'type'        => 'textarea',
					'title'       => esc_html__( 'Header Template Shortcode', '_twp' ),
					'subtitle'    => esc_html__( 'Input a Ruby Template shortcode if you use a header template.', '_twp' ),
					'placeholder' => esc_html__( '[Ruby_E_Template id="1"]', '_twp' ),
					'rows'        => 2,
					'default'     => '',
				],
				[
					'id'     => 'section_end_header_style',
					'type'   => 'section',
					'class'  => 'ruby-section-end',
					'indent' => false,
				],
				[
					'id'     => 'section_start_header_sticky',
					'type'   => 'section',
					'class'  => 'ruby-section-start',
					'title'  => esc_html__( 'Sticky Menu', '_twp' ),
					'notice' => [
						esc_html__( 'The settings below will apply only to predefined headers.', '_twp' ),
						esc_html__( 'Navigate to "Edit Section > Foxiz - for Header Template > Sticky Header" to enable the sticky feature if you use a header template.', '_twp' ),
					],
					'indent' => true,
				],
				[
					'id'       => 'sticky',
					'type'     => 'switch',
					'title'    => esc_html__( 'Sticky Menu', '_twp' ),
					'subtitle' => esc_html__( 'Stick your menu bar when scrolling up and down.', '_twp' ),
					'default'  => false,
				],
				[
					'id'       => 'smart_sticky',
					'type'     => 'switch',
					'title'    => esc_html__( 'Smart Sticky', '_twp' ),
					'subtitle' => esc_html__( 'Only stick the menu bar when scrolling up.', '_twp' ),
					'default'  => false,
				],
				[
					'id'     => 'section_end_header_sticky',
					'type'   => 'section',
					'class'  => 'no-border ruby-section-end',
					'indent' => false,
				],
			],
		];
	}
}

if ( ! function_exists( '_twp_register_options_header_more' ) ) {
	/**
	 * @return array
	 */
	function _twp_register_options_header_more() {

		return [
			'id'         => _TWP_PREFIX . '_config_section_header_more',
			'title'      => esc_html__( 'More Menu Item', '_twp' ),
			'icon'       => 'el el-braille',
			'subsection' => true,
			'desc'       => esc_html__( 'Customize the more dropdown section.', '_twp' ),
			'fields'     => [
				[
					'id'    => 'info_more_icon',
					'type'  => 'info',
					'style' => 'info',
					'desc'  => esc_html__( 'You can enable this menu item in the Header settings pane > More Menu Button.', '_twp' ),
				],
				[
					'id'    => 'info_more_section',
					'type'  => 'info',
					'style' => 'info',
					'desc'  => esc_html__( 'Navigate to "Dashboard > Appearance > Widgets > More Menu Section" to add content for the dropdown section.', '_twp' ),
				],
				[
					'id'          => 'more_column',
					'type'        => 'select',
					'title'       => esc_html__( 'Columns per Row', '_twp' ),
					'subtitle'    => esc_html__( 'Select columns per row for the dropdown section.', '_twp' ),
					'description' => esc_html__( 'Each widget is added in "Appearance >Widgets > More Menu Section" will be corresponding to a column.', '_twp' ),
					'options'     => [
						'2' => esc_html__( '2 Columns', '_twp' ),
						'3' => esc_html__( '3 Columns', '_twp' ),
						'4' => esc_html__( '4 Columns', '_twp' ),
						'5' => esc_html__( '5 Columns', '_twp' ),
					],
					'default'     => '3',
				],
				[
					'id'          => 'more_width',
					'type'        => 'text',
					'class'       => 'small-text',
					'title'       => esc_html__( 'Dropdown Section Width', '_twp' ),
					'subtitle'    => esc_html__( 'Input a value (in px) for the width of the dropdown section.', '_twp' ),
					'placeholder' => '450',
					'default'     => '',
				],
				[
					'id'       => 'more_footer_menu',
					'type'     => 'select',
					'options'  => foxiz_config_menu_slug(),
					'title'    => esc_html__( 'Footer Menu', '_twp' ),
					'subtitle' => esc_html__( 'Select a footer menu to display at the bottom of this section.', '_twp' ),
					'default'  => '',
				],
				[
					'id'       => 'more_footer_copyright',
					'type'     => 'textarea',
					'rows'     => 3,
					'title'    => esc_html__( 'Footer Copyright', '_twp' ),
					'subtitle' => esc_html__( 'Input a footer copyright text to display at the bottom of this section, allow raw HTML.', '_twp' ),
					'default'  => '',
				],
			],
		];
	}
}

if ( ! function_exists( '_twp_register_options_header_search' ) ) {
	/**
	 * @return array
	 */
	function _twp_register_options_header_search() {

		return [
			'id'         => _TWP_PREFIX . '_config_section_header_search',
			'title'      => esc_html__( 'Header Search', '_twp' ),
			'icon'       => 'el el-search',
			'subsection' => true,
			'desc'       => esc_html__( 'Select settings for search form to display in the website header.', '_twp' ),
			'fields'     => [
				[
					'id'    => 'info_search_placeholder',
					'type'  => 'info',
					'style' => 'info',
					'desc'  => esc_html__( 'To edit the placeholder text of the search form, navigate to "Theme Design > Search Placeholder".', '_twp' ),
				],
				[
					'id'    => 'info_search_mobile',
					'type'  => 'info',
					'style' => 'info',
					'desc'  => esc_html__( 'To edit the search form on mobile devices, navigate to "Header > Mobile Header".', '_twp' ),
				],
				[
					'id'          => 'header_search_heading',
					'type'        => 'text',
					'title'       => esc_html__( 'Search Heading', '_twp' ),
					'subtitle'    => esc_html__( 'Input a heading for displaying above the search form.', '_twp' ),
					'description' => esc_html__( 'The heading will show in the "More" section and "Mobile Header Collapse" section.', '_twp' ),
					'default'     => esc_html__( 'Search', '_twp' ),
				],
				[
					'id'       => 'header_search_icon',
					'type'     => 'switch',
					'title'    => esc_html__( 'Header Search Icon', '_twp' ),
					'subtitle' => esc_html__( 'Enable or disable the search icon in the header.', '_twp' ),
					'default'  => true,
				],
				[
					'id'          => 'header_search_mode',
					'type'        => 'select',
					'title'       => esc_html__( 'Toggle Mode', '_twp' ),
					'subtitle'    => esc_html__( 'Select mode for the search button when clicking on.', '_twp' ),
					'description' => esc_html__( 'Ensure the option "More Menu - Search Form" is enabled when you select the "More Menu Triggered" option.', '_twp' ),
					'options'     => [
						'search' => esc_html__( 'Standard Search Form', '_twp' ),
						'more'   => esc_html__( 'More Menu Triggered', '_twp' ),
					],
					'default'     => 'search',
				],
				[
					'id'          => 'ajax_search',
					'type'        => 'switch',
					'title'       => esc_html__( 'Live Search Result', '_twp' ),
					'subtitle'    => esc_html__( 'Enable live search result when typing.', '_twp' ),
					'description' => esc_html__( 'This setting will apply to predefined headers. To config the live search for header templates, check the "Header Search Icon" block.', '_twp' ),
					'default'     => false,
				],
				[
					'id'       => 'more_search',
					'type'     => 'switch',
					'title'    => esc_html__( 'More Menu - Search Form', '_twp' ),
					'subtitle' => esc_html__( 'Show search form at the top of the more section.', '_twp' ),
					'default'  => true,
				]
			],
		];
	}
}

if ( ! function_exists( '_twp_register_options_header_notification' ) ) {
	/**
	 * @return array
	 */
	function _twp_register_options_header_notification() {

		return [
			'id'         => _TWP_PREFIX . '_config_section_header_notification',
			'title'      => esc_html__( 'Notification', '_twp' ),
			'icon'       => 'el el-bell',
			'subsection' => true,
			'desc'       => esc_html__( 'Shows posts within 24 hours that allows users to receive real-time updates about new content that has been posted on your website.', '_twp' ),
			'fields'     => [
				[
					'id'    => 'header_notification_info',
					'type'  => 'info',
					'style' => 'warning',
					'desc'  => esc_html__( 'The settings below will apply to the predefined headers. Please use "Header Notification Icon" for the header templates.', '_twp' ),
				],
				[
					'id'       => 'header_notification',
					'type'     => 'switch',
					'title'    => esc_html__( 'Notification Section', '_twp' ),
					'subtitle' => esc_html__( 'Enable or disable the notification section on the header.', '_twp' ),
					'default'  => false,
				],
				[
					'id'       => 'notification_duration',
					'type'     => 'text',
					'validate' => 'numeric',
					'title'    => esc_html__( 'Max Duration', '_twp' ),
					'subtitle' => esc_html__( 'Enter the maximum duration value (hours ago) to retrieve new post data.', '_twp' ),
					'default'  => 72,
				],
				[
					'id'       => 'notification_reload',
					'type'     => 'text',
					'validate' => 'numeric',
					'title'    => esc_html__( 'Reload Interval', '_twp' ),
					'subtitle' => esc_html__( 'Enter the maximum duration value (in hours) to reload the data in the visitor\'s browser', '_twp' ),
					'default'  => 12,
				],
				[
					'id'       => 'header_notification_url',
					'type'     => 'text',
					'title'    => esc_html__( 'Custom Destination', '_twp' ),
					'subtitle' => esc_html__( 'Input a destination URL for the "Show More" text.', '_twp' ),
					'default'  => '#',
				],
				// [
				// 	'id'          => 'header_notification_scheme',
				// 	'type'        => 'select',
				// 	'title'       => esc_html__( 'Text Color Scheme', '_twp' ),
				// 	'subtitle'    => esc_html__( 'Select a text color scheme for the dropdown section.', '_twp' ),
				// 	'description' => esc_html__( 'Set to "Light Text" if you set a dark background.', '_twp' ),
				// 	'options'     => [
				// 		'0' => esc_html__( 'Default (Dark Text)', '_twp' ),
				// 		'1' => esc_html__( 'Light Text', '_twp' ),
				// 	],
				// 	'default'     => 0,
				// ],
				[
					'id'          => 'notification_custom_icon',
					'type'        => 'media',
					'url'         => true,
					'preview'     => true,
					'title'       => esc_html__( 'Custom Notification SVG', '_twp' ),
					'subtitle'    => esc_html__( 'Override the bell icon with a SVG icon.', '_twp' ),
					'description' => esc_html__( 'Enable the option in "Theme Design > SVG Upload > SVG Supported" to upload SVG icons.', '_twp' ),
				],
				[
					'id'          => 'notification_custom_icon_size',
					'title'       => esc_html__( 'SVG Icon Size', '_twp' ),
					'subtitle'    => esc_html__( 'Input a custom font size (in px) for your SVG icon.', '_twp' ),
					'placeholder' => '20',
					'type'        => 'text',
					'class'       => 'small-text',
					'default'     => '',
				],
			],
		];
	}
}

if ( ! function_exists( '_twp_register_options_header_mobile' ) ) {
	/**
	 * @return array
	 */
	function _twp_register_options_header_mobile() {

		return [
			'id'         => _TWP_PREFIX . '_config_section_header_mobile',
			'title'      => esc_html__( 'Mobile Header', '_twp' ),
			'icon'       => 'el el-iphone-home',
			'subsection' => true,
			'desc'       => esc_html__( 'Customize the styles and layout for your site header on mobile devices.', '_twp' ),
			'fields'     => [
				[
					'id'    => 'info_mobile_navbar_typo',
					'type'  => 'info',
					'style' => 'info',
					'desc'  => esc_html__( 'To edit the typography, navigate to "Typography > Menu > Mobile Menu Settings". Navigate to "Social Profiles" for the social list.', '_twp' ),
				],
				[
					'id'    => 'info_mobile_header_color',
					'type'  => 'info',
					'style' => 'info',
					'desc'  => esc_html__( 'Color settings will apply to the tablet and mobile header. Leave blank to set as the desktop navigation colors.', '_twp' ),
				],
				[
					'id'    => 'info_mobile_header_dark_color',
					'type'  => 'info',
					'style' => 'warning',
					'desc'  => esc_html__( 'Ensure "Dark Mode Colors" settings are set if you enable dark mode.', '_twp' ),
				],
				[
					'id'       => 'section_start_mh_layout',
					'type'     => 'section',
					'class'    => 'ruby-section-start',
					'title'    => esc_html__( 'Layout', '_twp' ),
					'subtitle' => esc_html__( 'The center logo style is best suited for small logos.', '_twp' ),
					'indent'   => true,
				],
				[
					'id'       => 'mh_layout',
					'type'     => 'select',
					'title'    => esc_html__( 'Header Layout', '_twp' ),
					'subtitle' => esc_html__( 'Select a layout for the mobile header.', '_twp' ),
					'options'  => [
						'0' => esc_html__( 'Left Logo', '_twp' ),
						'1' => esc_html__( 'Center Logo', '_twp' ),
						'2' => esc_html__( 'Left Logo 2', '_twp' ),
						'3' => esc_html__( 'Top Logo', '_twp' ),
					],
					'default'  => '0',
				],
				[
					'id'          => 'mh_template',
					'type'        => 'textarea',
					'rows'        => 2,
					'title'       => esc_html__( 'Mobile Header Template Shortcode', '_twp' ),
					'subtitle'    => esc_html__( 'Input a Ruby Template shortcode to display as a header mobile.', '_twp' ),
					'description' => esc_html__( 'This setting will override the above setting. Leave it blank to use the predefined mobile header. In AMP mode, it will fallback to predefined header layout due to limitations of AMP.', '_twp' ),
					'placeholder' => '[Ruby_E_Template id="1"]',
					'default'     => '',
				],
				[
					'id'       => 'mobile_search',
					'type'     => 'switch',
					'title'    => esc_html__( 'Search Icon', '_twp' ),
					'subtitle' => esc_html__( 'Enable or disable search icon in the mobile header.', '_twp' ),
					'default'  => true,
				],
				[
					'id'       => 'mobile_amp_search',
					'type'     => 'switch',
					'title'    => esc_html__( 'AMP Header - Search Icon', '_twp' ),
					'subtitle' => esc_html__( 'Enable or disable search icon the AMP header.', '_twp' ),
					'default'  => true,
				],
				[
					'id'          => 'mobile_height',
					'type'        => 'text',
					'class'       => 'small-text',
					'title'       => esc_html__( 'Mobile Navigation Height', '_twp' ),
					'subtitle'    => esc_html__( 'Input a custom value for the mobile navigation height.', '_twp' ),
					'placeholder' => '42',
				],
				[
					'id'          => 'quick_access_menu_height',
					'type'        => 'text',
					'class'       => 'small-text',
					'validate'    => 'numeric',
					'title'       => esc_html__( 'Quick View Menu Height', '_twp' ),
					'subtitle'    => esc_html__( 'Input a height value for the quick view menu bar.', '_twp' ),
					'placeholder' => '42',
				],
				[
					'id'          => 'mh_top_divider',
					'type'        => 'select',
					'title'       => esc_html__( 'Top Logo - Divider Style', '_twp' ),
					'subtitle'    => esc_html__( 'Select a divider style for the top logo layout.', '_twp' ),
					'description' => esc_html__( 'This setting applies exclusively to the top logo layout.', '_twp' ),
					'options'     => [
						'0'      => esc_html__( '- None -', '_twp' ),
						'gray'   => esc_html__( 'Gray Border', '_twp' ),
						'dark'   => esc_html__( 'Dark Border', '_twp' ),
						'shadow' => esc_html__( 'Shadow', '_twp' ),
					],
					'default'     => 'gray',
				],
				[
					'id'     => 'section_end_mh_layout',
					'type'   => 'section',
					'class'  => 'ruby-section-end',
					'indent' => false,
				],
				[
					'id'       => 'section_start_mobile_collapse',
					'type'     => 'section',
					'class'    => 'ruby-section-start',
					'title'    => esc_html__( 'Collapse Section', '_twp' ),
					'subtitle' => esc_html__( 'To edit the login button, navigate to "Header > Sign in Buttons > for Mobile".', '_twp' ),
					'indent'   => true,
				],
				[
					'id'       => 'mobile_sub_col',
					'type'     => 'select',
					'title'    => esc_html__( 'Sub-menu Columns', '_twp' ),
					'subtitle' => esc_html__( 'Select number of columns per row for the submenus.', '_twp' ),
					'options'  => [
						'0' => esc_html__( '2 Columns', '_twp' ),
						'1' => esc_html__( '1 Column', '_twp' ),
					],
					'default'  => '0',
				],
				[
					'id'          => 'mobile_search_form',
					'type'        => 'switch',
					'title'       => esc_html__( 'Search Form', '_twp' ),
					'subtitle'    => esc_html__( 'Enable or disable the search form.', '_twp' ),
					'description' => esc_html__( 'Live search will be disabled in this form.', '_twp' ),
					'default'     => true,
				],
				[
					'id'          => 'collapse_template',
					'type'        => 'textarea',
					'rows'        => 2,
					'title'       => esc_html__( 'Collapse Template Shortcode', '_twp' ),
					'subtitle'    => esc_html__( 'Input a Ruby Template shortcode to display in the mobile collapsed section.', '_twp' ),
					'placeholder' => '[Ruby_E_Template id="1"]',
					'default'     => '',
				],
				[
					'id'       => 'mobile_social',
					'type'     => 'switch',
					'title'    => esc_html__( 'Socials List', '_twp' ),
					'subtitle' => esc_html__( 'Enable or disable the socials list.', '_twp' ),
					'default'  => true,
				],
				[
					'id'       => 'mobile_footer_menu',
					'type'     => 'select',
					'options'  => foxiz_config_menu_slug(),
					'title'    => esc_html__( 'Footer Menu', '_twp' ),
					'subtitle' => esc_html__( 'Select a footer menu to display at the bottom of this section.', '_twp' ),
					'default'  => '',
				],
				[
					'id'       => 'mobile_copyright',
					'type'     => 'textarea',
					'rows'     => 3,
					'title'    => esc_html__( 'Footer Copyright', '_twp' ),
					'subtitle' => esc_html__( 'Input a footer copyright text to display at the bottom of this section, allow raw HTML.', '_twp' ),
					'default'  => '',
				],
				[
					'id'     => 'section_end_mobile_collapse',
					'type'   => 'section',
					'class'  => 'ruby-section-end',
					'indent' => false,
				],
				[
					'id'     => 'section_start_mh_colors',
					'type'   => 'section',
					'class'  => 'ruby-section-start',
					'title'  => esc_html__( 'Colors', '_twp' ),
					'indent' => true,
				],
				[
					'id'          => 'mobile_background',
					'type'        => 'color_gradient',
					'title'       => esc_html__( 'Header Background', '_twp' ),
					'subtitle'    => esc_html__( 'Select a background color for the mobile navigation bar and quick view mobile menu.', '_twp' ),
					'description' => esc_html__( 'use the option "To" to set a gradient background.', '_twp' ),
					'validate'    => 'color',
					'transparent' => false,
					'default'     => [
						'from' => '',
						'to'   => '',
					],
				],
				[
					'id'          => 'mobile_color',
					'title'       => esc_html__( 'Text Color', '_twp' ),
					'subtitle'    => esc_html__( 'Select a text color for toggle button, search, quick view menu for displaying on the mobile header.', '_twp' ),
					'type'        => 'color',
					'transparent' => false,
					'validate'    => 'color',
				],
				[
					'id'          => 'mobile_sub_background',
					'type'        => 'color_gradient',
					'title'       => esc_html__( 'Collapse Section Background', '_twp' ),
					'subtitle'    => esc_html__( 'Select a background color for the collapsed section.', '_twp' ),
					'validate'    => 'color',
					'transparent' => false,
					'default'     => [
						'from' => '',
						'to'   => '',
					],
				],
				[
					'id'          => 'mobile_sub_color',
					'title'       => esc_html__( 'Collapse Section - Text Color', '_twp' ),
					'subtitle'    => esc_html__( 'Select a text color for menu item, sub menu item and other elements for displaying in the collapsed section.', '_twp' ),
					'type'        => 'color',
					'transparent' => false,
					'validate'    => 'color',
				],
				[
					'id'     => 'section_end_mh_colors',
					'type'   => 'section',
					'class'  => 'ruby-section-end',
					'indent' => false,
				],
				[
					'id'     => 'section_start_mh_dark_colors',
					'type'   => 'section',
					'class'  => 'ruby-section-start',
					'title'  => esc_html__( 'Dark Mode Colors', '_twp' ),
					'indent' => true,
				],
				[
					'id'          => 'dark_mobile_background',
					'type'        => 'color_gradient',
					'title'       => esc_html__( 'Header Background', '_twp' ),
					'subtitle'    => esc_html__( 'Select a background color for the mobile navigation bar and quick view mobile menu in dark mode.', '_twp' ),
					'validate'    => 'color',
					'transparent' => false,
					'default'     => [
						'from' => '',
						'to'   => '',
					],
				],
				[
					'id'          => 'dark_mobile_color',
					'title'       => esc_html__( 'Text Color', '_twp' ),
					'subtitle'    => esc_html__( 'Select a text color for toggle button, search, quick view menu for displaying on the mobile header in dark mode.', '_twp' ),
					'type'        => 'color',
					'transparent' => false,
					'validate'    => 'color',
				],
				[
					'id'          => 'dark_mobile_sub_background',
					'type'        => 'color_gradient',
					'title'       => esc_html__( 'Collapse Section Background', '_twp' ),
					'subtitle'    => esc_html__( 'Select a background color for the collapsed section in dark mode.', '_twp' ),
					'validate'    => 'color',
					'transparent' => false,
					'default'     => [
						'from' => '',
						'to'   => '',
					],
				],
				[
					'id'          => 'dark_mobile_sub_color',
					'title'       => esc_html__( 'Collapse Section - Text Color', '_twp' ),
					'subtitle'    => esc_html__( 'Select a text color for menu item, sub menu item and other elements for displaying in the collapsed section in dark mode.', '_twp' ),
					'type'        => 'color',
					'transparent' => false,
					'validate'    => 'color',
				],
				[
					'id'     => 'section_end_mh_dark_colors',
					'type'   => 'section',
					'class'  => 'ruby-section-end no-border',
					'indent' => false,
				],
			],
		];
	}
}

if ( ! function_exists( '_twp_register_options_header_login' ) ) {
	/**
	 * @return array
	 */
	function _twp_register_options_header_login() {

		return [
			'id'         => _TWP_PREFIX . '_config_section_header_login',
			'title'      => esc_html__( 'Sign In Buttons', '_twp' ),
			'icon'       => 'el el-circle-arrow-right',
			'desc'       => esc_html__( 'Customize the logo buttons in the header.', '_twp' ),
			'subsection' => true,
			'fields'     => [
				[
					'id'    => 'login_popup_info',
					'type'  => 'info',
					'style' => 'info',
					'desc'  => esc_html__( 'To config the popup login form. Please navigate to "Theme Options > Login > Popup Sign In".', '_twp' ),
				],
				[
					'id'     => 'section_start_login_button',
					'type'   => 'section',
					'class'  => 'ruby-section-start',
					'title'  => esc_html__( 'for Desktop', '_twp' ),
					'indent' => true,
				],
				[
					'id'       => 'header_login_icon',
					'type'     => 'switch',
					'title'    => esc_html__( 'Sign In Button', '_twp' ),
					'subtitle' => esc_html__( 'Enable or disable the sign in button on the header.', '_twp' ),
					'default'  => false,
				],
				[
					'id'       => 'header_login_layout',
					'type'     => 'select',
					'title'    => esc_html__( 'Button Layout', '_twp' ),
					'subtitle' => esc_html__( 'Select a layout for the sign in trigger button.', '_twp' ),
					'options'  => [
						'0' => esc_html__( 'Icon', '_twp' ),
						'1' => esc_html__( 'Text Button', '_twp' ),
						'2' => esc_html__( 'Text with Icon Button', '_twp' ),
					],
					'default'  => '0',
				],
				[
					'id'     => 'section_end_login_button',
					'type'   => 'section',
					'class'  => 'ruby-section-end',
					'indent' => false,
				],
				[
					'id'     => 'section_start_mobile_login_button',
					'type'   => 'section',
					'class'  => 'ruby-section-start',
					'title'  => esc_html__( 'for Mobile', '_twp' ),
					'indent' => true,
				],
				[
					'id'       => 'mobile_login',
					'type'     => 'switch',
					'title'    => esc_html__( 'Mobile Header - Sign In', '_twp' ),
					'subtitle' => esc_html__( 'Enable or disable the sign in button in the mobile collapsible section.', '_twp' ),
					'default'  => false,
				],
				[
					'id'          => 'mobile_login_label',
					'type'        => 'text',
					'title'       => esc_html__( 'Sign In Label', '_twp' ),
					'subtitle'    => esc_html__( 'Input a custom sign in label.', '_twp' ),
					'placeholder' => esc_html__( 'Have an existing account?', '_twp' ),
					'default'     => '',
				],
				[
					'id'     => 'section_end_mobile_login_button',
					'type'   => 'section',
					'class'  => 'ruby-section-end',
					'indent' => false,
				],
				[
					'id'     => 'section_start_logged_menu',
					'type'   => 'section',
					'class'  => 'ruby-section-start',
					'title'  => esc_html__( 'Logged User Menu', '_twp' ),
					'indent' => true,
				],
				[
					'id'          => 'header_login_menu',
					'type'        => 'select',
					'title'       => esc_html__( 'User Dashboard Menu', '_twp' ),
					'subtitle'    => esc_html__( 'Assign a menu for displaying when hovering on the login icon if user logged.', '_twp' ),
					'options'     => foxiz_config_menu_slug(),
					'placeholder' => esc_html__( '- Assign a Menu -', '_twp' ),
					'default'     => '',
				],
				[
					'id'       => 'header_login_menu_mobile',
					'type'     => 'switch',
					'title'    => esc_html__( 'User Dashboard Menu for Mobile', '_twp' ),
					'subtitle' => esc_html__( 'Enable or disable the "User Dashboard Menu" in the collapsed section when the user is logged in.', '_twp' ),
					'default'  => true,
				],
				[
					'id'     => 'section_end_logged_menu',
					'type'   => 'section',
					'class'  => 'ruby-section-end',
					'indent' => false,
				],
				[
					'id'     => 'section_start_login_icon',
					'type'   => 'section',
					'class'  => 'ruby-section-start',
					'title'  => esc_html__( 'Icon', '_twp' ),
					'indent' => true,
				],
				[
					'id'          => 'login_custom_icon',
					'type'        => 'media',
					'url'         => true,
					'preview'     => true,
					'title'       => esc_html__( 'Custom Login SVG', '_twp' ),
					'subtitle'    => esc_html__( 'Override the user icon with a SVG icon.', '_twp' ),
					'description' => esc_html__( 'Enable the option in "Theme Design > SVG Upload > SVG Supported" if you cannot upload .SVG files.', '_twp' ),
				],
				[
					'id'          => 'login_custom_icon_size',
					'title'       => esc_html__( 'SVG Icon Size', '_twp' ),
					'subtitle'    => esc_html__( 'Input a custom font size (in px) for your SVG icon.', '_twp' ),
					'placeholder' => '20',
					'type'        => 'text',
					'class'       => 'small-text',
					'default'     => '',
				],
				[
					'id'     => 'section_end_login_icon',
					'type'   => 'section',
					'class'  => 'ruby-section-end no-border',
					'indent' => false,
				],

			],
		];
	}
}

if ( ! function_exists( '_twp_register_options_header_alert' ) ) {
	/**
	 * @return array
	 */
	function _twp_register_options_header_alert() {

		return [
			'id'         => _TWP_PREFIX . '_config_section_header_alert',
			'title'      => esc_html__( 'Alert Bar', '_twp' ),
			'icon'       => 'el el-bell',
			'subsection' => true,
			'desc'       => esc_html__( 'Show an alert or event information at the bottom of the navigation.', '_twp' ),
			'fields'     => [
				[
					'id'       => 'alert_bar_info',
					'type'     => 'info',
					'style'    => 'warning',
					'subtitle' => esc_html__( 'The alert bar will not be available when using a header template.', '_twp' ),
					'default'  => false,
				],
				[
					'id'       => 'info_alert_builder',
					'type'     => 'info',
					'style'    => 'info',
					'subtitle' => esc_html__( 'Template Builder: You can add text and button features to create an alert bar for the Elementor header templates.', '_twp' ),
					'default'  => false,
				],
				[
					'id'          => 'alert_bar',
					'type'        => 'switch',
					'title'       => esc_html__( 'Alert Bar', '_twp' ),
					'subtitle'    => esc_html__( 'Enable or disable the alert bar below the header.', '_twp' ),
					'description' => esc_html__( 'This is treated as a global setting. Other individual post and page settings take priority over this setting.', '_twp' ),
					'default'     => false,
				],
				[
					'id'       => 'alert_home',
					'type'     => 'switch',
					'title'    => esc_html__( 'Homepage Only', '_twp' ),
					'subtitle' => esc_html__( 'Only show the bar in the homepage.', '_twp' ),
					'default'  => true,
				],
				[
					'id'       => 'alert_content',
					'type'     => 'textarea',
					'title'    => esc_html__( 'Alert Content', '_twp' ),
					'subtitle' => esc_html__( 'Input your alert content to show.', '_twp' ),
					'rows'     => 3,
					'default'  => '',
				],
				[
					'id'       => 'alert_url',
					'type'     => 'text',
					'title'    => esc_html__( 'Alert URL', '_twp' ),
					'subtitle' => esc_html__( 'Input your alert URL.', '_twp' ),
					'default'  => '#',
				],
				[
					'id'          => 'alert_bg',
					'type'        => 'color',
					'transparent' => false,
					'validate'    => 'color',
					'title'       => esc_html__( 'Background Color', '_twp' ),
					'subtitle'    => esc_html__( 'Select background color for this section.', '_twp' ),
				],
				[
					'id'          => 'alert_color',
					'type'        => 'color',
					'transparent' => false,
					'validate'    => 'color',
					'title'       => esc_html__( 'Text Color', '_twp' ),
					'subtitle'    => esc_html__( 'Select text color for this section.', '_twp' ),
				],
				[
					'id'          => 'dark_alert_bg',
					'type'        => 'color',
					'transparent' => false,
					'validate'    => 'color',
					'title'       => esc_html__( 'Dark Mode - Background Color', '_twp' ),
					'subtitle'    => esc_html__( 'Select background color for this section in dark mode.', '_twp' ),
				],
				[
					'id'          => 'dark_alert_color',
					'type'        => 'color',
					'transparent' => false,
					'validate'    => 'color',
					'title'       => esc_html__( 'Dark Mode - Text Color', '_twp' ),
					'subtitle'    => esc_html__( 'Select text color for this section in dark mode.', '_twp' ),
				],
				[
					'id'       => 'alert_sticky_hide',
					'title'    => esc_html__( 'Hide when Sticky', '_twp' ),
					'subtitle' => esc_html__( 'Hide this bar when the navigation is sticking.', '_twp' ),
					'type'     => 'switch',
					'default'  => false,
				],
			],
		];
	}
}

if ( ! function_exists( '_twp_register_options_header_cart' ) ) {
	/**
	 * @return array
	 */
	function _twp_register_options_header_cart() {

		return [
			'id'         => _TWP_PREFIX . '_config_section_mini_cart',
			'title'      => esc_html__( 'Mini Cart', '_twp' ),
			'icon'       => 'el el-shopping-cart',
			'subsection' => true,
			'desc'       => esc_html__( 'Show a cart icon at the website header.', '_twp' ),
			'fields'     => [
				foxiz_wc_plugin_status_info( 'header_mini_cart_info' ),
				[
					'id'       => 'wc_mini_cart',
					'type'     => 'switch',
					'title'    => esc_html__( 'Header Mini Cart', '_twp' ),
					'subtitle' => esc_html__( 'Show mini cart icon in the header.', '_twp' ),
					'default'  => false,
				],
				[
					'id'       => 'wc_mobile_mini_cart',
					'type'     => 'switch',
					'title'    => esc_html__( 'Mobile Header - Mini Cart', '_twp' ),
					'subtitle' => esc_html__( 'Show mini cart icon in the mobile header.', '_twp' ),
					'default'  => false,
				],
				[
					'id'       => 'cart_counter',
					'type'     => 'switch',
					'title'    => esc_html__( 'Cart Counter', '_twp' ),
					'subtitle' => esc_html__( 'Show number of products in the cart.', '_twp' ),
					'default'  => true,
				],
				[
					'id'       => 'total_amount',
					'type'     => 'switch',
					'title'    => esc_html__( 'Total Amount', '_twp' ),
					'subtitle' => esc_html__( 'Show total amount after the cart icon.', '_twp' ),
					'default'  => false,
				],
				[
					'id'       => 'cart_custom_icon',
					'type'     => 'media',
					'title'    => esc_html__( 'Custom Cart SVG', '_twp' ),
					'subtitle' => esc_html__( 'Override default cart icon with a SVG icon.', '_twp' ),
				],
				[
					'id'          => 'cart_custom_icon_size',
					'title'       => esc_html__( 'SVG Icon Size', '_twp' ),
					'subtitle'    => esc_html__( 'Input a custom font size (in px) for your SVG icon.', '_twp' ),
					'placeholder' => '20',
					'type'        => 'text',
					'class'       => 'small-text',
					'default'     => '',
				],
			],
		];
	}
}
