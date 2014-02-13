<?php
/**
 * This file extends the view admin/settings/advanced/site_secret
 * to warn people about the change in upgrade.php code
 */

$plugin = elgg_get_plugin_from_id("security_tools");

if (!empty($plugin) && ($plugin->secure_upgrade != "no")) {

	$settings_url = "admin/plugin_settings/security_tools";
	$settings_url = elgg_normalize_url($settings_url);
	
	$content = elgg_view("output/longtext", array("value" => elgg_echo("security_tools:site_secret:warning", array($settings_url))));
	
	echo elgg_view_module("inline", $plugin->getFriendlyName(), $content);
}