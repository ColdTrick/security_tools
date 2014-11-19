<?php

$plugin = elgg_extract("entity", $vars);

$yesno_options = array(
	"yes" => elgg_echo("option:yes"),
	"no" => elgg_echo("option:no")
);

$noyes_options = array_reverse($yesno_options);

// Upgrade
$upgrade_settings = "<div>";
$upgrade_settings .= elgg_echo("security_tools:settings:secure_upgrade");
$upgrade_settings .= "&nbsp;" . elgg_view("input/dropdown", array("name" => "params[secure_upgrade]", "value" => $plugin->secure_upgrade, "options_values" => $yesno_options));
$upgrade_settings .= "<div class='elgg-subtext'>" . elgg_echo("security_tools:settings:secure_upgrade:description") . "</div>";
$upgrade_settings .= "<pre>" . elgg_get_site_url() . "upgrade.php?code=" . security_tools_generate_upgrade_code() . "</pre>";
$upgrade_settings .= "</div>";

// Mail
$mail_settings = "<div>";
$mail_settings .= elgg_echo("security_tools:settings:mails_admin_admins");
$mail_settings .= "&nbsp;" . elgg_view("input/dropdown", array("name" => "params[mails_admin_admins]", "value" => $plugin->mails_admin_admins, "options_values" => $yesno_options));
$mail_settings .= "<div class='elgg-subtext'>" . elgg_echo("security_tools:settings:mails_admin_admins:description") . "</div>";
$mail_settings .= "</div>";

$mail_settings .= "<div>";
$mail_settings .= elgg_echo("security_tools:settings:mails_admin_user");
$mail_settings .= "&nbsp;" . elgg_view("input/dropdown", array("name" => "params[mails_admin_user]", "value" => $plugin->mails_admin_user, "options_values" => $noyes_options));
$mail_settings .= "<div class='elgg-subtext'>" . elgg_echo("security_tools:settings:mails_admin_user:description") . "</div>";
$mail_settings .= "</div>";

$mail_settings .= "<div>";
$mail_settings .= elgg_echo("security_tools:settings:mails_password_change");
$mail_settings .= "&nbsp;" . elgg_view("input/dropdown", array("name" => "params[mails_password_change]", "value" => $plugin->mails_password_change, "options_values" => $yesno_options));
$mail_settings .= "<div class='elgg-subtext'>" . elgg_echo("security_tools:settings:mails_password_change:description") . "</div>";
$mail_settings .= "</div>";

$mail_settings .= "<div>";
$mail_settings .= elgg_echo("security_tools:settings:mails_banned");
$mail_settings .= "&nbsp;" . elgg_view("input/dropdown", array("name" => "params[mails_banned]", "value" => $plugin->mails_banned, "options_values" => $noyes_options));
$mail_settings .= "<div class='elgg-subtext'>" . elgg_echo("security_tools:settings:mails_banned:description") . "</div>";
$mail_settings .= "</div>";

$mail_settings .= "<div>";
$mail_settings .= elgg_echo("security_tools:settings:mails_verify_email_change");
$mail_settings .= "&nbsp;" . elgg_view("input/dropdown", array("name" => "params[mails_verify_email_change]", "value" => $plugin->mails_verify_email_change, "options_values" => $yesno_options));
$mail_settings .= "<div class='elgg-subtext'>" . elgg_echo("security_tools:settings:mails_verify_email_change:description") . "</div>";
$mail_settings .= "</div>";

// Other
$other_settings = "<div>";
$other_settings .= elgg_echo("security_tools:settings:disable_autocomplete_on_password_fields");
$other_settings .= "&nbsp;" . elgg_view("input/dropdown", array("name" => "params[disable_autocomplete_on_password_fields]", "value" => $plugin->disable_autocomplete_on_password_fields, "options_values" => $noyes_options));
$other_settings .= "<div class='elgg-subtext'>" . elgg_echo("security_tools:settings:disable_autocomplete_on_password_fields:description") . "</div>";
$other_settings .= "</div>";

echo elgg_view_module("inline", elgg_echo("upgrade"), $upgrade_settings);
echo elgg_view_module("inline", elgg_echo("security_tools:settings:mails"), $mail_settings);
echo elgg_view_module("inline", elgg_echo("security_tools:settings:other"), $other_settings);

