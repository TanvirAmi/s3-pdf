<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://www.tanvir.pro/
 * @since      1.0.0
 *
 * @package    S3_Pdf
 * @subpackage S3_Pdf/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    S3_Pdf
 * @subpackage S3_Pdf/includes
 * @author     Tanvir <tanvir.focus@gmail.com>
 */
class S3_Pdf_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			's3-pdf',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
