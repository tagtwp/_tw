<?php
/** Don't load directly */
defined( 'ABSPATH' ) || exit;

if ( ! class_exists( '_twp_Register_Options' ) ) {
	class _twp_Register_Options {

		protected static $instance = null;
		protected $is_activated;
		public $sources;
		public $funcs_name;

		public function __construct() {

			self::$instance = $this;

			if ( ! class_exists( 'ReduxFramework' ) || ! class_exists( 'RB_ADMIN_CORE' ) ) {
				return false;
			}

			$this->sources = [
				'logo',
				'header',
				'header-style',
				'sidebar',
				'footer',
			];

			$this->funcs_name = [
				'general',
				'logo',
				'logo_global',
				'logo_mobile',
				'logo_transparent',
				'logo_favicon',
				'header',
				'header_general',
				'header_1',
				'header_4',
				'header_5',
				'header_mobile',
				'header_more',
				'header_search',
				'header_login',
				'header_notification',
				'header_alert',
				'header_cart',
				'sidebar',
				'footer',
			];

			$this->load_files();

			$is_activate = $this->activated();
			if ( empty( $is_activate ) ) {
				return false;
			}

			Redux::setArgs( _TWP_PREFIX, $this->get_params() );
			$this->register_options();
		}

		/** load */
		function load_files() {

			$path = 'backend/panels';
			if ( is_array( $this->sources ) ) {
				foreach ( $this->sources as $name ) {
					$file = get_theme_file_path( $path . '/' . trim( $name ) . '.php' );
					if ( file_exists( $file ) ) {
						require_once $file;
					}
				}
			}
		}

		public function display_name() {

			return esc_html__( '_TWP Panel', '_twp' ) . '<span class="p-version">' . wp_get_theme()->get( 'Version' ) . '</span>';
		}

		public function display_version() {

			return '<span class="pdocs-info"><i class="el el-folder-open"></i><a href="https://tagtwp.com" target="_blank">' . esc_html__( 'Online Documentation', '_twp' ) . '</a></span>';
		}

		public function activated() {

			return $this->is_activated = RB_ADMIN_CORE::get_instance()->get_purchase_code();
		}

		public function get_params() {

			return [
				'opt_name'                  => _TWP_PREFIX,
				'display_name'              => $this->display_name(),
				'display_version'           => $this->display_version(),
				'menu_type'                 => 'menu',
				'allow_sub_menu'            => true,
				'menu_title'                => esc_html__( 'Theme Options', '_twp' ),
				'page_title'                => esc_html__( 'Theme Options', '_twp' ),
				'google_api_key'            => '',
				'google_update_weekly'      => false,
				'async_typography'          => false,
				'admin_bar'                 => true,
				'admin_bar_icon'            => 'dashicons-admin-generic',
				'admin_bar_priority'        => 50,
				'global_variable'           => _TWP_PREFIX . '_theme_options',
				'dev_mode'                  => false,
				'update_notice'             => false,
				'customizer'                => true,
				'page_priority'             => 54,
				'page_parent'               => 'themes.php',
				'page_permissions'          => _TWP_PREFIX . '_theme_options',
				'menu_icon'                 => '',
				'last_tab'                  => '',
				'page_icon'                 => 'icon-themes',
				'page_slug'                 => _TWP_PREFIX . '_theme_options',
				'show_options_object'       => false,
				'save_defaults'             => true,
				'default_show'              => false,
				'default_mark'              => '',
				'show_import_export'        => true,
				'transient_time'            => 6400,
				'use_cdn'                   => true,
				'output'                    => true,
				'output_tag'                => true,
				'disable_tracking'          => true,
				'database'                  => '',
				'disable_google_fonts_link' => true,
				'system_info'               => false,
				'search'                    => true,
			];
		}

		public function register_options() {

			if ( $this->is_activated ) {
				foreach ( $this->funcs_name as $name ) {
					$func = _TWP_PREFIX . '_register_options_' . $name;
					if ( function_exists( $func ) ) {
						Redux::setSection( _TWP_PREFIX, call_user_func( $func ) );
					}
				}
			}
		}

		static function get_instance() {

			if ( null === self::$instance ) {
				self::$instance = new self();
			}

			return self::$instance;
		}
	}
}
