<?php

	require_once(dirname(__FILE__) . "/lib/functions.php");
	require_once(dirname(__FILE__) . "/lib/hooks.php");
	
	function security_tools_init(){
		// check if we are running upgrade.php
		if(defined("UPGRADING")){
			// is upgrade.php secured
			if(elgg_get_plugin_setting("secure_upgrade", "security_tools") != "no"){
				admin_gatekeeper();
			}
		}
	}
	
	// register default Elgg events
	elgg_register_event_handler("init", "system", "security_tools_init");
	
	// register plugin hooks
	elgg_register_plugin_hook_handler("route", "cron", "security_tools_cron_route_hook");