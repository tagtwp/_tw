<?php
/** Don't load directly */
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( '_twp_register_options_sidebar' ) ) {
	function _twp_register_options_sidebar() {

		return [
			'id'     => _TWP_PREFIX . '_theme_ops_section_sidebar',
			'title'  => esc_html__( 'Sidebars', '_twp' ),
			'desc'   => esc_html__( 'Customize your website sidebars. ', '_twp' ),
			'icon'   => 'el el-align-right',
			'fields' => [
				[
					'id'    => 'info_global_sticky',
					'type'  => 'info',
					'style' => 'info',
					'desc'  => esc_html__( 'The sticky sidebar feature uses native CSS, enhancing overall site performance. Sticky all sidebar content prove particularly useful when using a short sidebar, or use "Sticky Last Widget" if you have a long sidebar or want to stick an advertising widget.', '_twp' ),
				],
				[
					'id'    => 'info_sticky_template',
					'type'  => 'info',
					'style' => 'warning',
					'desc'  => esc_html__( 'Tips: A Ruby template will be considered as a widget. If you want to make the last widget in this section sticky when using sidebar template, it is recommended to use two templates or employ a default widget at the end.', '_twp' ),
				],
				[
					'id'    => 'info_add_widget',
					'type'  => 'info',
					'style' => 'info',
					'desc'  => esc_html__( 'Navigate to "Appearance > Widgets" to add content for your sidebars.', '_twp' ),
				],
				[
					'id'          => 'global_sidebar_position',
					'type'        => 'image_select',
					'title'       => esc_html__( 'Sidebar Position', '_twp' ),
					'subtitle'    => esc_html__( 'Select a default sidebar position for your site.', '_twp' ),
					'description' => esc_html__( 'This is treated as a global setting. Other position settings take priority over this setting.', '_twp' ),
					'options'     => foxiz_config_sidebar_position( false ),
					'default'     => 'right',
				],
				[
					'id'         => 'multi_sidebars',
					'type'       => 'multi_text',
					'class'      => 'medium-text',
					'show_empty' => false,
					'title'      => esc_html__( 'Unlimited Sidebars', '_twp' ),
					'label'      => esc_html__( 'Add a Sidebar ID', '_twp' ),
					'subtitle'   => esc_html__( 'Create new or delete exist sidebars.', '_twp' ),
					'desc'       => esc_html__( 'Click on the "Create Sidebar" button, then input a name/ID (without special charsets and spacing) into the field to create a new sidebar.', '_twp' ),
					'add_text'   => esc_html__( 'Click then Input ID to Create a Sidebar', '_twp' ),
					'default'    => [],
				],
				[
					'id'          => 'sticky_sidebar',
					'type'        => 'select',
					'title'       => esc_html__( 'Sticky Sidebar', '_twp' ),
					'subtitle'    => esc_html__( 'Make sidebars permanently visible while scrolling up and down.', '_twp' ),
					'description' => esc_html__( 'The "Sticky Last Widget" option is helpful if you have a long sidebar or want to make an advertisement sticky.', '_twp' ),
					'options'     => [
						'0' => esc_html__( '- None -', '_twp' ),
						'1' => esc_html__( 'Sticky Sidebar', '_twp' ),
						'2' => esc_html__( 'Sticky Last Widget', '_twp' ),
					],
					'default'     => '0',
				],
				[
					'id'       => 'widget_block_editor',
					'type'     => 'switch',
					'title'    => esc_html__( 'Widget Block Editor', '_twp' ),
					'subtitle' => esc_html__( 'Enable or disable widget block editor (WordPress 5.8 or above).', '_twp' ),
					'default'  => false,
				],
			],
		];
	}
}
