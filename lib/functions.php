<?php
/**
 * All helper function can be found here
 */

/**
 * Checks if a user wants to change his email address and sends out a confirmation message
 *
 * @return void
 */
function security_tools_prepare_email_change() {

	$user_guid = (int) get_input('guid');
	$email = get_input('email');

	$user = get_user($user_guid);

	if (empty($user) || !is_email_address($email)) {
		register_error(elgg_echo('email:save:fail'));
		return;
	}

	if (strcmp($email, $user->email) === 0) {
		// no change is email address
		return;
	}

	if (get_user_by_email($email)) {
		register_error(elgg_echo('registration:dupeemail'));
		return;
	}

	// generate validation code
	$validation_code = security_tools_generate_email_code($user, $email);
	if (empty($validation_code)) {
		return;
	}
	$site = elgg_get_site_entity();
	$current_email = $user->email;

	// make sure notification goes to new email
	$user->email = $email;
	$user->save();

	// build notification
	$validation_url = elgg_normalize_url(elgg_http_add_url_query_elements('email_change_confirmation', [
		'u' => $user->getGUID(),
		'c' => $validation_code,
	]));

	$subject = elgg_echo('security_tools:notify_user:email_change_request:subject', [$site->name]);
	$message = elgg_echo('security_tools:notify_user:email_change_request:message', [
		$user->name,
		$site->name,
		$validation_url,
	]);

	notify_user($user->getGUID(), $site->getGUID(), $subject, $message, array(), 'email');

	// save the validation request
	// but first revoke previous request
	$user->deleteAnnotations('email_change_confirmation');

	$user->annotate('email_change_confirmation', $email, ACCESS_PRIVATE, $user->getGUID());

	// restore current email address
	$user->email = $current_email;
	$user->save();

	system_message(elgg_echo('security_tools:usersettings:email:request', [$email]));
}

/**
 * Generate a validation code to change an email address
 *
 * @param ElggUser $user  the user who's email address will be changed
 * @param string   $email the new email address
 *
 * @return string|false the validation code or false
 */
function security_tools_generate_email_code(ElggUser $user, $email) {

	if (!($user instanceof ElggUser)) {
		return false;
	}

	if (empty($email) && !is_email_address($email)) {
		return false;
	}

	$site_secret = _elgg_services()->siteSecret->get();

	return hash_hmac('sha256', ($user->getGUID() . '|' . $email . '|' . $user->time_created), $site_secret);
}
