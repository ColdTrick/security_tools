<?php
/**
 * This file is included when the plugin starts
 */

require_once(dirname(__FILE__) . "/lib/functions.php");
require_once(dirname(__FILE__) . "/lib/hooks.php");

// register default Elgg events
elgg_register_event_handler("init", "system", "security_tools_init");

/**
 * Function is called when the Elgg system initializes
 *
 * @return void
 */
function security_tools_init() {
	// check if we are running upgrade.php
	if (defined("UPGRADING")) {
		security_tools_protect_upgrade();
	}
	
	// extend views
	elgg_extend_view("admin/settings/advanced/site_secret", "security_tools/site_secret");
}
