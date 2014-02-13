<?php
/**
 * This file extends the view admin/settings/advanced/site_secret
 * to warn people about the change in upgrade.php code
 */

$setting = elgg_get_plugin_setting("secure_upgrade", "security_tools");
if ($setting != "no") {
	$settings_url = "admin/plugin_settings/security_tools";
	$settings_url = elgg_normalize_url($settings_url);
	
	echo "<div class='elgg-admin-notices mtm pbn'>";
	echo "<p class='mbn'>" . elgg_echo("security_tools:site_secret:warning", array($settings_url)) . "</p>";
	echo "</div>";
}