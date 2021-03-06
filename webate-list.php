<?php
/*
Plugin Name: Webate List
Plugin URI:  
Description: List of all Custom Post Type Webate, with filter
Version:     1.0.1
Author:      Giacomo Surano
Author URI:  https://github.com/sturo82
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: weli-webate-list
Domain Path: /languages

Webate List is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

Webate List is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Webate List. If not, see https://www.gnu.org/licenses/gpl-2.0.html.
*/


if ( ! function_exists( 'weli_initialize_extension' ) ):
/**
 * Creates the extension's main class instance.
 *
 * @since 1.0.0
 */
function weli_initialize_extension() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/WebateList.php';
}
add_action( 'divi_extensions_init', 'weli_initialize_extension' );
endif;
