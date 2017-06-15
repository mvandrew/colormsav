<?php

if ( !function_exists('cmv_enqueue_scripts') ) {
	function cmv_enqueue_scripts() {

		// Include Parent stylesheets
		//$parent_style = 'colormag_style';
		//wp_enqueue_style( $parent_style, _CMV_PARENT_URI . '/style.css' );

		// Include current theme main stylesheet
		$cmv_style = 'cmv_style';
		wp_enqueue_style( $cmv_style, _CMV_CHILD_URI . '/stylesheets/style.css' );

		// cmv_enqueue_scripts
	}
}


if ( !function_exists('cmv_setup') ) {
	function cmv_setup() {

		/**
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 */
		load_theme_textdomain( _CMV_TEXT_DOMAIN, _CMV_CHILD_DIR . '/languages' );

		// cmv_setup
	}
}
