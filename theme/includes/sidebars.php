<?php
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */

/** Don't load directly */
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( '_twp_register_all_sidebars' ) ) {
	function _twp_register_all_sidebars() {

		$settings = get_option( _TWP_PREFIX );

		$heading = array(
			'layout'   => '1',
			'html_tag' => 'h4'
		);

		$footer_heading = array(
			'layout'   => '10',
			'html_tag' => 'h4'
		);

		$more_heading = array(
			'layout'   => '10',
			'html_tag' => 'h5'
		);

		if ( ! empty( $settings['widget_heading_tag'] ) ) {
			$heading['html_tag']        = $settings['widget_heading_tag'];
			$footer_heading['html_tag'] = $settings['widget_heading_tag'];
		}
		if ( ! empty( $settings['widget_heading_layout'] ) ) {
			$heading['layout'] = $settings['widget_heading_layout'];
		} elseif ( ! empty( $settings['heading_layout'] ) ) {
			$heading['layout'] = $settings['heading_layout'];
		}
		if ( ! empty( $settings['footer_widget_heading_layout'] ) ) {
			$footer_heading['layout'] = $settings['footer_widget_heading_layout'];
		} elseif ( ! empty( $settings['heading_layout'] ) ) {
			$footer_heading['layout'] = $settings['heading_layout'];
		}

		if ( ! empty( $settings['multi_sidebars'] ) && is_array( $settings['multi_sidebars'] ) ) {
			$data_sidebar = array();
			foreach ( $settings['multi_sidebars'] as $sidebar ) {
				if ( ! empty( $sidebar ) ) {
					array_push( $data_sidebar, array(
						'id'   => '_twp_ms_' . _twp_convert_to_id( trim( $sidebar ) ),
						'name' => strip_tags( $sidebar ),
					) );
				}
			}

			foreach ( $data_sidebar as $sidebar ) {
				if ( ! empty( $sidebar['id'] ) && ! empty( $sidebar['name'] ) ) {
					register_sidebar( array(
						'id'            => $sidebar['id'],
						'name'          => $sidebar['name'],
						'description'   => esc_html__( 'A sidebar section of your site.', '_twp' ),
						'before_widget' => '<div id="%1$s" class="widget rb-section w-sidebar clearfix %2$s">',
						'after_widget'  => '</div>',
						'before_title'  => _twp_get_start_widget_heading( $heading ),
						'after_title'   => _twp_get_end_widget_heading( $heading ),
					) );
				}
			};
		}

		register_sidebar( array(
			'id'            => _TWP_PREFIX . '_sidebar_default',
			'name'          => esc_html__( 'Standard Sidebar', '_twp' ),
			'description'   => esc_html__( 'The default sidebar of your site', '_twp' ),
			'before_widget' => '<div id="%1$s" class="widget rb-section w-sidebar clearfix %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => _twp_get_start_widget_heading( $heading ),
			'after_title'   => _twp_get_end_widget_heading( $heading ),
		) );
		register_sidebar( array(
			'id'            => _TWP_PREFIX . '_header_ad',
			'name'          => esc_html__( 'Header Advertising', '_twp' ),
			'description'   => esc_html__( 'Display widget ad at the bottom of the website header.', '_twp' ),
			'before_widget' => '<div id="%1$s" class="widget header-ad-widget rb-section %2$s">',
			'after_widget'  => '</div>',
		) );
		register_sidebar( array(
			'id'            => _TWP_PREFIX . '_sidebar_more',
			'name'          => esc_html__( 'More Menu Section', '_twp' ),
			'description'   => esc_html__( 'The submenu section when hovering on the more button.', '_twp' ),
			'before_widget' => '<div class="more-col"><div id="%1$s" class="rb-section clearfix %2$s">',
			'after_widget'  => '</div></div>',
			'before_title'  => _twp_get_start_widget_heading( $more_heading ),
			'after_title'   => _twp_get_end_widget_heading( $more_heading ),
		) );
		if ( 'shortcode' !== _twp_get_option( 'footer_layout', false ) ) {
			register_sidebar( array(
				'id'            => _TWP_PREFIX . '_sidebar_fw_footer',
				'name'          => esc_html__( 'Footer - Top Full Width', '_twp' ),
				'description'   => esc_html__( 'The full width section at the top of the footer.', '_twp' ),
				'before_widget' => '<div id="%1$s" class="widget w-fw-footer rb-section clearfix %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => _twp_get_start_widget_heading( $heading ),
				'after_title'   => _twp_get_end_widget_heading( $heading ),
			) );
			register_sidebar( array(
				'id'            => _TWP_PREFIX . '_sidebar_footer_1',
				'name'          => esc_html__( 'Footer - Column 1', '_twp' ),
				'description'   => esc_html__( 'one of the columns of the footer area.', '_twp' ),
				'before_widget' => '<div id="%1$s" class="widget w-sidebar rb-section clearfix %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => _twp_get_start_widget_heading( $footer_heading ),
				'after_title'   => _twp_get_end_widget_heading( $footer_heading ),
			) );
			register_sidebar( array(
				'id'            => _TWP_PREFIX . '_sidebar_footer_2',
				'name'          => esc_html__( 'Footer - Column 2', '_twp' ),
				'description'   => esc_html__( 'one of the columns of the footer area.', '_twp' ),
				'before_widget' => '<div id="%1$s" class="widget w-sidebar rb-section clearfix %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => _twp_get_start_widget_heading( $footer_heading ),
				'after_title'   => _twp_get_end_widget_heading( $footer_heading ),
			) );
			register_sidebar( array(
				'id'            => _TWP_PREFIX . '_sidebar_footer_3',
				'name'          => esc_html__( 'Footer - Column 3', '_twp' ),
				'description'   => esc_html__( 'one of the columns of the footer area.', '_twp' ),
				'before_widget' => '<div id="%1$s" class="widget w-sidebar rb-section clearfix %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => _twp_get_start_widget_heading( $footer_heading ),
				'after_title'   => _twp_get_end_widget_heading( $footer_heading ),
			) );
			if ( empty( $settings['footer_layout'] ) || '3' !== (string) $settings['footer_layout'] ) {
				register_sidebar( array(
					'id'            => _TWP_PREFIX . '_sidebar_footer_4',
					'name'          => esc_html__( 'Footer - Column 4', '_twp' ),
					'description'   => esc_html__( 'one of the columns of the footer area.', '_twp' ),
					'before_widget' => '<div id="%1$s" class="widget w-sidebar rb-section clearfix %2$s">',
					'after_widget'  => '</div>',
					'before_title'  => _twp_get_start_widget_heading( $footer_heading ),
					'after_title'   => _twp_get_end_widget_heading( $footer_heading ),
				) );
			}
			if ( ! empty( $settings['footer_layout'] ) && ( '5' === (string) $settings['footer_layout'] || '51' === (string) $settings['footer_layout'] ) ) {
				register_sidebar( array(
					'id'            => _TWP_PREFIX . '_sidebar_footer_5',
					'name'          => esc_html__( 'Footer - Column 5', '_twp' ),
					'description'   => esc_html__( 'one of the columns of the footer area.', '_twp' ),
					'before_widget' => '<div id="%1$s" class="widget w-sidebar rb-section clearfix %2$s">',
					'after_widget'  => '</div>',
					'before_title'  => _twp_get_start_widget_heading( $footer_heading ),
					'after_title'   => _twp_get_end_widget_heading( $footer_heading ),
				) );
			}
		}
		register_sidebar( array(
			'id'            => _TWP_PREFIX . '_entry_top',
			'name'          => esc_html__( 'Single Content - Top Area', '_twp' ),
			'description'   => esc_html__( 'The section at the top of the single post content. It usually uses to display adverts', '_twp' ),
			'before_widget' => '<div id="%1$s" class="widget entry-widget clearfix %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => _twp_get_start_widget_heading( $heading ),
			'after_title'   => _twp_get_end_widget_heading( $heading ),
		) );
		register_sidebar( array(
			'id'            => _TWP_PREFIX . '_entry_bottom',
			'name'          => esc_html__( 'Single Content - Bottom Area', '_twp' ),
			'description'   => esc_html__( 'The section at the bottom of the single post content. It usually uses to display adverts or the post related shortcode.', '_twp' ),
			'before_widget' => '<div id="%1$s" class="widget entry-widget clearfix %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => _twp_get_start_widget_heading( $heading ),
			'after_title'   => _twp_get_end_widget_heading( $heading ),
		) );
	}
}
