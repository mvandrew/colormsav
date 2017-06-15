<?php

// ------------------------------------------
// Determining theme constants.
// ------------------------------------------
define( '_CMV_TEXT_DOMAIN', 'colormsav' );

// ------------------------------------------
// Determining theme folders.
// ------------------------------------------
define( '_CMV_PARENT_DIR', get_template_directory() );
define( '_CMV_CHILD_DIR', get_stylesheet_directory() );

define( '_CMV_INCLUDES_DIR', _CMV_CHILD_DIR . '/inc' );
define( '_CMV_CLASSES_DIR', _CMV_INCLUDES_DIR . '/classes' );

// Template Elements Folder
define( '_CMV_TEMPLATE_ELEMENTS_DIR', _CMV_CHILD_DIR . '/template-elements' );


// ------------------------------------------
// Determining theme links.
// ------------------------------------------
define( '_CMV_PARENT_URI', get_template_directory_uri() );
define( '_CMV_CHILD_URI', get_stylesheet_directory_uri() );


// ------------------------------------------
// Include library files.
// ------------------------------------------
require_once ( _CMV_INCLUDES_DIR . '/functions.php' );
require_once ( _CMV_INCLUDES_DIR . '/customizer.php' );
require_once ( _CMV_INCLUDES_DIR . '/template-tags.php' );
require_once ( _CMV_INCLUDES_DIR . '/template-functions.php' );
require_once ( _CMV_INCLUDES_DIR . '/template-hooks.php' );


// ------------------------------------------
// Include classes.
// ------------------------------------------