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
	if ($setting == "no") {
		return;
	}
	
	$pass = false;
	
	// check for a security code
	$code = get_input("code");
	if (!empty($code)) {
		$pass = security_tools_validate_upgrade_code($code);
	}
	
	if (!$pass) {
		elgg_admin_gatekeeper();
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
	
	return hash_hmac("sha256", ($site->name . "|" . $site->time_created . "|" . $site->url), $site_secret);
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
	
	if (empty($code)) {
		return $result;
	}
		
	$valid_code = security_tools_generate_upgrade_code();
	
	if ($valid_code === $code) {
		$result = true;
	}
	
	return $result;
}

/**
 * Checks if a user wants to change his email address and sends out a confirmation message
 *
 * @return void
 */
function security_tools_prepare_email_change() {
	
	$user_guid = (int) get_input("guid");
	$email = get_input("email");
	
	if (empty($user_guid)) {
		$user_guid = elgg_get_logged_in_user_guid();
	}
	
	$user = get_user($user_guid);
	
	if (empty($user) || !is_email_address($email)) {
		register_error(elgg_echo("email:save:fail"));
		return;
	}
	
	if (strcmp($email, $user->email) == 0) {
		// no change is email address
		return;
	}
		
	if (get_user_by_email($email)) {
		register_error(elgg_echo("registration:dupeemail"));
		return;
	}
	
	// generate validation code
	$validation_code = security_tools_generate_email_code($user, $email);
	if (empty($validation_code)) {
		return;
	}
	$site = elgg_get_site_entity();
	$current_email = $user->email;
	
	// make sure notification goed to new email
	$user->email = $email;
	$user->save();
	
	// build notification
	$validation_url = $site->url . "email_change_confirmation?u=" . $user->getGUID() . "&c=" . $validation_code;
	
	$subject = elgg_echo("security_tools:notify_user:email_change_request:subject", array($site->name));
	$message = elgg_echo("security_tools:notify_user:email_change_request:message", array(
		$user->name,
		$site->name,
		$validation_url
	));
	
	notify_user($user->getGUID(), $site->getGUID(), $subject, $message, null, "email");
	
	// save the validation request
	// but first revoke previous request
	$user->deleteAnnotations("email_change_confirmation");
	
	$user->annotate("email_change_confirmation", $email, ACCESS_PRIVATE, $user->getGUID());
	
	// restore current email address
	$user->email = $current_email;
	$user->save();
	
	system_message(elgg_echo("security_tools:usersettings:email:request", array($email)));
}

/**
 * Generate a validation code to change an email address
 *
 * @param ElggUser $user  the user who's email address will be changed
 * @param string   $email the new email address
 *
 * @return string|boolean the validation code or false
 */
function security_tools_generate_email_code(ElggUser $user, $email) {
	
	if (empty($user) || !elgg_instanceof($user, "user")) {
		return false;
	}
	
	if (empty($email) && !is_email_address($email)) {
		return false;
	}
	
	$site_secret = get_site_secret();
	
	return hash_hmac("sha256", ($user->getGUID() . "|" . $email . "|" . $user->time_created), $site_secret);
}
