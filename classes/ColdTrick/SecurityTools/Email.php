<?php

namespace ColdTrick\SecurityTools;

class Email {

	/**
	 * Listen to the email address change of a user
	 *
	 * @param string $hook         the name of the hook
	 * @param string $type         the type of the hook
	 * @param bool   $return_value current return value
	 * @param mixed  $params       supplied params
	 *
	 * @return void
	 */
	public static function changeUserEmail(\Elgg\Hook $hook) {

		$user_guid = (int) get_input('guid');
		if (empty($user_guid)) {
			return;
		}

		$user = get_user($user_guid);
		if (empty($user) || !$user->canEdit()) {
			return;
		}

		$setting = elgg_get_plugin_setting('mails_verify_email_change', 'security_tools');
		if (($setting !== 'no') && ($user->getGUID() == elgg_get_logged_in_user_guid())) {
			// verify new email address
			security_tools_prepare_email_change();
		} else {
			// old way, or admin changes your email
			_elgg_set_user_email();
		}
	}

	/**
	 * Page handler for /email_change_confirmation
	 *
	 * @param array $page page elements
	 *
	 * @return bool
	 */
	// public static function emailChangeConfirmation($page) {
	//
	// 	echo elgg_view_resource('email_change_confirmation/confirm');
	//
	// 	return true;
	// }
}
