<?php

namespace ColdTrick\SecurityTools;

class Password {
	
	/**
	 * Change the view vars for input/password
	 *
	 * @param string $hook         the name of the hook
	 * @param string $type         the type of the hook
	 * @param mixed  $return_value current return value
	 * @param array  $params       supplied params
	 *
	 * @return void|array
	 */
	public static function inputPassword($hook, $type, $return_value, $params) {
		
		if (elgg_get_plugin_setting('disable_autocomplete_on_password_fields', 'security_tools') !== 'yes') {
			return;
		}
		
		$return_value['autocomplete'] = 'off';
		
		return $return_value;
	}
	
	/**
	 * Listen to the password changed of a users
	 *
	 * @param string $hook         the name of the hook
	 * @param string $type         the type of the hook
	 * @param mixed  $return_value current return value
	 * @param array  $params       supplied params
	 *
	 * @return void|bool
	 */
	public static function changePassword($hook, $type, $return_value, $params) {
		
		$user_guid = (int) get_input('guid');
		$user = get_user($user_guid);
		if (!($user instanceof \ElggUser) || !$user->canEdit()) {
			return;
		}
		
		$result = _elgg_set_user_password();
		if ($result === true) {
			// do we need to notify the user about a password change
			$setting = elgg_get_plugin_setting('mails_password_change', 'security_tools');
			if ($setting !== 'no') {
				$site = elgg_get_site_entity();
				
				$subject = elgg_echo('security_tools:notify_user:password:subject');
				$message = elgg_echo('security_tools:notify_user:password:message', [
					$user->name,
					$site->name,
					$site->getURL(),
				]);
				
				notify_user($user->getGUID(), $site->getGUID(), $subject, $message, null, 'email');
			}
		}
		
		return $result;
	}
}
