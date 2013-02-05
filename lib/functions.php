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

function security_tools_upgrade_token_filter_views($hook, $type, $content, $params) {
	$key = (string) get_input('key', '', false);
	$key = htmlspecialchars(urlencode($key), ENT_QUOTES, 'UTF-8');
	return str_replace(
		"/upgrade.php?upgrade=upgrade\"",
		"/upgrade.php?upgrade=upgrade&amp;key=$key\"",
		$content);
}
