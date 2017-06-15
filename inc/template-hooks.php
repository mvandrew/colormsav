<?php

/**
 * System Template Hooks
 *
 * @see cmv_enqueue_scripts()
 * @see cmv_setup()
 */
add_action( 'wp_enqueue_scripts',                   'cmv_enqueue_scripts' );
add_action( 'after_setup_theme',                    'cmv_setup' );


/**
 * Custom Template Hooks
 *
 */