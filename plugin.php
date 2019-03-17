/*
Plugin Name: YOURLS Custom
Description: YOURLS Custom Configuration
Version: Production
Author: Jayke Peters
*/

// No direct call
if(!defined('YOURLS_ABSPATH')) die();

yourls_add_filter('html_title', 'custom_page_title');
 
function custom_page_title($value) {
        $value = $page;
        return $value;
}
