<?php

	function security_tools_generate_cron_code($site_guid = 0){
		$result = false;
		
		if($site = elgg_get_site_entity($site_guid)){
			$site_secret = get_site_secret();
			$site_guid = $site->getGUID();
			$time_created = $site->time_created;
			
			$result = md5($site_guid . $site_secret . $time_created);
		}
		
		return $result;
	}
	
	function security_tools_validate_cron_code($code, $site_guid = 0){
		$result = false;
		
		if(!empty($code)){
			if($site_code = security_tools_generate_cron_code($site_guid)){
				if($code === $site_code){
					$result = true;
				}
			}
		}
		
		return $result;
	}