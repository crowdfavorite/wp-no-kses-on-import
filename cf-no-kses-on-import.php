<?php
/*
Plugin Name: CF No KSES on Import
Plugin URI: 
Description: Removes all KSES filtering on import.  Only enable for import (of content you absolutely trust), then deactivate.
Version: 1.1
Author: Crowd Favorite
Author URI: http://crowdfavorite.com
*/

// remove all kses filters for import
add_action('import_start', 'cfNoKsesOnImport');

function cfNoKsesOnImport()
{
	//Only if administrator:
	if( current_user_can('manage_options') )
	{
		kses_remove_filters();
	}
}
