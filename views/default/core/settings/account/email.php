<?php
/**
 * Provide a way of setting your email
 *
 * @package Elgg
 * @subpackage Core
 */

$user = elgg_get_page_owner_entity();

if (!$user instanceof ElggUser) {
	return;
}

$options = array(
	'#type' => 'email',
	'name' => 'email',
	'value' => $user->email,
	'label' => elgg_echo('email:address:label'),
);

// check if there is a pending email change request
$request = $user->getAnnotations([
	'annotation_name' => 'email_change_confirmation',
]);
if (!empty($request)) {
	$new_email = $request[0]->value;

	$options['#help'] = elgg_echo('security_tools:usersettings:email:request', [$new_email]);
}

$title = elgg_echo('email:settings');
$content = elgg_view_field($options);

echo elgg_view_module('info', $title, $content);
