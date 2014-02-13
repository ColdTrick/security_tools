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

	'security_tools:settings:mails' => "Security Mails",
	'security_tools:settings:mails_admin_admins' => "Notify admins on (un)make admin",
	'security_tools:settings:mails_admin_admins:description' => "Notify all other admins if there is a user that has been made an admin or has his admin rights removed.",
	'security_tools:settings:mails_admin_user' => "Notify user on (un)make admin",
	'security_tools:settings:mails_admin_user:description' => "Notify the user when his/her admin role is added or removed.",
	'security_tools:settings:mails_password_change' => "Notify user on password change",
	'security_tools:settings:mails_password_change:description' => "Notify the user if the password has been changed via the settings page",
	'security_tools:settings:mails_banned' => "Notify user on (un)ban",
	'security_tools:settings:mails_banned:description' => "Notify the user if he/she gets (un)banned by someone.",
	'security_tools:settings:mails_verify_email_change' => "Verify email address change",
	'security_tools:settings:mails_verify_email_change:description' => "If a users changes his/her emailaddress the new address should be verified first before the change is applied. A mail with a verification link will be sent to the new address. Also the user will receive a notice at the old emailaddress on a succesfull change.",




	'security_tools:settings:other' => "Other",

	// site secret
	'security_tools:site_secret:warning' => "After you regenerate the site secret, <a href='%s'>please check out</a> the new Upgrade.php code you'll need."
);

add_translation("en", $english);