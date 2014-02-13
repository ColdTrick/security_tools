<?php
/**
 * All helper function can be found here
 */

/**
 * Upgrade.php can be protected for admins only or with a security code
 *
 * @return void
 */
function security_tools_protect_upgrade() {
	$setting = elgg_get_plugin_setting("secure_upgrade", "security_tools");
	
	// default the upgrade is protected
	if ($setting != "no") {
		$pass = false;
		
		// check for a security code
		$code = get_input("code");
		if (!empty($code)) {
			$pass = security_tools_validate_upgrade_code($code);
		}
		
		if (!$pass) {
			admin_gatekeeper();
		}
	}
}

/**
 * Generate a security code to be used when running upgrade.php
 *
 * @return string the security code
 */
function security_tools_generate_upgrade_code() {
	
	$site = elgg_get_site_entity();
	$site_secret = get_site_secret();
	
	$result = hash_hmac("sha256", ($site->name . "|" . $site->time_created . "|" . $site->url), $site_secret);
	
	return $result;
}

/**
 * Validate if the supplied security code for upgrade.php is correct
 *
 * @param string $code the security code to validate
 *
 * @return boolean true if valid
 */
function security_tools_validate_upgrade_code($code) {
	$result = false;
	
	return $result;
}