<?php
/**
 * All plugin hook callback functions are handled in this file
 */

/**
 * Listen to the usersettings save hook for some notifications to the user
 *
 * @param string $hook         usersettings:save
 * @param string $type         user
 * @param bool   $return_value not supplied for this hook
 * @param null   $params       not supplied for this hook
 *
 * @return void
 */
function security_tools_usersettings_save_handler($hook, $type, $return_value, $params) {
	
	$site = elgg_get_site_entity();
	
	$user_guid = (int) get_input("guid");
	if (empty($user_guid)) {
		$user_guid = elgg_get_logged_in_user_guid();
	}
	
	$user = get_user($user_guid);
	if (!empty($user) && $user->canEdit()) {
		// do the default usersettings actions, but listen to some off the results
		elgg_set_user_language();
		elgg_set_user_default_access();
		elgg_set_user_name();
		
		// passwords are different
		if (elgg_set_user_password() === true) {
			// do we need to notify the user about a password change
			if (elgg_get_plugin_setting("mails_password_change", "security_tools") != "no") {
				$subject = elgg_echo("security_tools:notify_user:password:subject");
				$message = elgg_echo("security_tools:notify_user:password:message", array(
					$user->name,
					$site->name,
					$site->url
				));
				
				notify_user($user->getGUID(), $site->getGUID(), $subject, $message, null, "email");
			}
		}
		
		// email are also different
		$setting = elgg_get_plugin_setting("mails_verify_email_change", "security_tools");
		if (($setting != "no") && ($user->getGUID() == elgg_get_logged_in_user_guid())) {
			// verify new email address
			security_tools_prepare_email_change();
		} else {
			// old way, or admin changes your email
			elgg_set_user_email();
		}
	}
}