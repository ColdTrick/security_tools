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
	'security_tools:site_secret:warning' => "After you regenerate the site secret, <a href='%s'>please check out</a> the new Upgrade.php code you'll need.",
	
	// admin notifications
	'security_tools:notify_admins:make_admin:subject' => "A new site administrator was assigned for %s",
	'security_tools:notify_admins:make_admin:message' => "Hi,

The user %s was assigned as a new site administrator by %s.
Check out the profile of the new site administrator here %s.

If you believe this was done in error, please login here %s and undo this action.",
	'security_tools:notify_admins:remove_admin:subject' => "A site administrator was removed from %s",
	'security_tools:notify_admins:remove_admin:message' => "Hi,

The user %s is no longer a site administrator. This action was taken by %s.
Check out the profile of the old site administrator here %s.

If you believe this was done in error, please login here %s and undo this action.",

);

add_translation("en", $english);