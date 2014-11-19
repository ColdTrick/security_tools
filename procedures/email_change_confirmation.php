<?php
/**
 * This procedure handles the confirmation url when requesting an email change
 *
 * Expected input is:
 * u: for the user_guid
 * c: for the validation code
 */

$user_guid = (int) get_input("u");
$validation_code = get_input("c");

$forward_url = "";

if (empty($user_guid) || empty($validation_code)) {
	register_error(elgg_echo("error:missing_data"));
	forward();
}

$user = elgg_get_logged_in_user_entity();

if (($user_guid != $user->getGUID()) || !$user->canEdit()) {
	register_error(elgg_echo("security_tools:email_change_confirmation:error:user"));
	forward();
}

$new_email = $user->getAnnotations("email_change_confirmation");
if (empty($new_email)) {
	register_error(elgg_echo("security_tools:email_change_confirmation:error:request"));
	forward();
}

$new_email = $new_email[0]->value;
$valid_code = security_tools_generate_email_code($user, $new_email);
if ($validation_code !== $valid_code) {
	register_error(elgg_echo("security_tools:email_change_confirmation:error:code"));
	forward();
}
$site = elgg_get_site_entity();

// send confirmation to old email that change occured
$subject = elgg_echo("security_tools:notify_user:email_change:subject", array($site->name));
$message = elgg_echo("security_tools:notify_user:email_change:message", array(
	$user->name,
	$site->name,
));
notify_user($user->getGUID(), $site->getGUID(), $subject, $message, null, "email");

$user->email = $new_email;
if ($user->save()) {
	$user->deleteAnnotations("email_change_confirmation");
	
	$forward_url = $user->getURL();
	
	system_message(elgg_echo("email:save:success"));
} else {
	register_error(elgg_echo("email:save:fail"));
}

forward($forward_url);
