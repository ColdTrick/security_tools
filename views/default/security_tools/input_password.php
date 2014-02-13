<?php
/**
 * this view is prepend to input/password to disable the autocomplete attribute
 */

if (elgg_get_plugin_setting("disable_autocomplete_on_password_fields", "security_tools") == "yes") {
	$vars["autocomplete"] = "off";
}
