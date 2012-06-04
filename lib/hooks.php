<?php

	function security_tools_cron_route_hook($hook, $type, $return_value, $params){
		$result = $return_value;
		
		if(!empty($result) && is_array($result)){
			// do we need to secure the cron
			if(elgg_get_plugin_setting("secure_cron", "security_tools") != "no"){
				$page =  elgg_extract("segments", $result);
				
				$valid = false;
				
				if(isset($page[1])){
					if(security_tools_validate_cron_code($page[1])){
						$valid = true;
					}
				}
				
				// maybe an administrator can bypass the validation
				if(!$valid){
					if((elgg_get_plugin_setting("secure_cron_bypass", "security_tools") == "yes") && elgg_is_admin_logged_in()){
						$valid = true;
					}
				}
				
				if(!$valid){
					register_error(elgg_echo("security_tools:secure_cron:error:code"));
					forward();
				}
			}
		}
		
		return $result;
	}