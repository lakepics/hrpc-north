<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/assets.php',    // Scripts and stylesheets
  'lib/extras.php',    // Custom functions
  'lib/setup.php',     // Theme setup
  'lib/titles.php',    // Page titles
  'lib/wrapper.php',   // Theme wrapper class
  'lib/customizer.php' // Theme customizer
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);

// Add Default Bootstrap Nav // Register Custom Navigation Walker
require_once('wp-bootstrap-navwalker.php');

function register_top_nav_menu() {
  register_nav_menu('top-nav-menu',__( 'Top Nav Menu' ));
}
add_action( 'init', 'register_top_nav_menu' );

// dump function, for development purposes
function dump($var)
{
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
}

//change the title from dash to pipe
function wploop_change_separator()
{
return '|';
}
add_filter('document_title_separator', 'wploop_change_separator');