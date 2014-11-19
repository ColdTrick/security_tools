<?php
/**
 * Provide a way of setting your email
 *
 * @package Elgg
 * @subpackage Core
 */

$user = elgg_get_page_owner_entity();
if (empty($user) || !elgg_instanceof($user, "user")) {
	return;
}

$title = elgg_echo("email:settings");

$content = elgg_echo("email:address:label") . ":";
$content .= elgg_view("input/email", array(
	"name" => "email",
	"value" => $user->email
));

// check if there is a pending email change request
$request = $user->getAnnotations("email_change_confirmation");
if (!empty($request)) {
	$new_email = $request[0]->value;
	
	$content .= "<div class='elgg-subtext'>";
	$content .= elgg_view("output/text", array(
		"value" => elgg_echo("security_tools:usersettings:email:request", array($new_email))
	));
	$content .= "</div>";
}

echo elgg_view_module("info", $title, $content);
