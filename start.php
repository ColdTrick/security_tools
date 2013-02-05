<?php
require_once(dirname(__FILE__) . "/lib/functions.php");
require_once(dirname(__FILE__) . "/lib/hooks.php");

function security_tools_init(){
	// check if we are running upgrade.php
	if(defined("UPGRADING")){
		// is upgrade.php secured
		if(elgg_get_plugin_setting("secure_upgrade", "security_tools") != "no"){
			if(elgg_get_plugin_setting("secure_upgrade_key", "security_tools") != "no"){
				if(elgg_get_plugin_setting("secure_upgrade_bypass", "security_tools") != "yes"){
					if(elgg_get_plugin_setting("secure_upgrade_keycode", "security_tools") !== get_input('key', '', false)) {
						register_error(elgg_echo("security_tools:secure_upgrade:error:code"));
						forward();
					}
				}
				elgg_register_plugin_hook_handler('view', 'page/upgrade', 'security_tools_upgrade_token_filter_views');
			} else {
				admin_gatekeeper();
			}
		}
	}
}

// register default Elgg events
elgg_register_event_handler("init", "system", "security_tools_init");

// register plugin hooks
elgg_register_plugin_hook_handler("route", "cron", "security_tools_cron_route_hook");