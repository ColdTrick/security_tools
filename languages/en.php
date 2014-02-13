<?php
/**
 * English translation for this plugin
 */

$english = array(
	'security_tools' => "Security Tools",

	// settings
	'security_tools:settings:secure_upgrade' => "Secure upgrade.php",
	'security_tools:settings:secure_upgrade:description' => "With a secured upgrade.php logged in site administrators can run upgrade.php or you'll need a special code (see link below).",

	'security_tools:settings:disable_autocomplete_on_password_fields' => "Disable autocomplete on password fields",
	'security_tools:settings:disable_autocomplete_on_password_fields:description' => "Data entered in these fields will be cached by the browser. An attacker who can access the victim's browser could steal this information. This is especially important if the application is commonly used in shared computers such as cyber cafes or airport terminals. If you disable this, password management tools can no longer autofill these fields.",

	// site secret
	'security_tools:site_secret:warning' => "After you regenerate the site secret, <a href='%s'>please check out</a> the new Upgrade.php code you'll need."
);

add_translation("en", $english);