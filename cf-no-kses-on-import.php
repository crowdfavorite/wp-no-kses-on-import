<?php
/*
Plugin Name: CF No KSES on Import
Plugin URI: 
Description: Removes all KSES filtering on import.  Only enable for single import (of content you absolutely trust), then deactivate.
Version: 1.0
Author: Crowd Favorite
Author URI: http://crowdfavorite.com
*/

// remove all kses filters for import
add_action('import_start', create_function('', 'kses_remove_filters();'));
?>