<?php
/**
 * English translation for this plugin
 */

$english = array(
	'security_tools' => "Security Tools",

	// settings
	'security_tools:settings:secure_upgrade' => "Secure upgrade.php",
	'security_tools:settings:secure_upgrade:description' => "With a secured upgrade.php logged in site administrators can run upgrade.php or you'll need a special code (see link below).",

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
	'security_tools:settings:disable_autocomplete_on_password_fields' => "Disable autocomplete on password fields",
	'security_tools:settings:disable_autocomplete_on_password_fields:description' => "Data entered in these fields will be cached by the browser. An attacker who can access the victim's browser could steal this information. This is especially important if the application is commonly used in shared computers such as cyber cafes or airport terminals. If you disable this, password management tools can no longer autofill these fields. The support for the autocomplete attribute can be browser specific.",

	// email change
	'security_tools:usersettings:email:request' => "In order to complete your e-mail address change check the inbox of your %s account",
	'security_tools:email_change_confirmation:error:user' => "You're not the user for whom this request was made",
	'security_tools:email_change_confirmation:error:request' => "There is no pending e-mail address change",
	'security_tools:email_change_confirmation:error:code' => "The supplied validation code is incorrect, please check your e-mail message",

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

	// user notifications
	'security_tools:notify_user:make_admin:subject' => "You're granted site administrator right on %s",
	'security_tools:notify_user:make_admin:message' => "Hi %s,

You've been assigned as a new site administrator by %s.

Enjoy your new found rights by logging in here %s.

If you believe this was done in error, please contact one of the other site administrators.",

	'security_tools:notify_user:remove_admin:subject' => "Your site administrator rights for %s were removed",
	'security_tools:notify_user:remove_admin:message' => "Hi %s,

Your site administrator role was removed by %s.

If you believe this was done in error, please contact one of the other site administrators.",

	'security_tools:notify_user:password:subject' => "Your password has been changed",
	'security_tools:notify_user:password:message' => "Hi %s,

Your password for %s has been changed.

If you didn't do this or requested this. Please go to %s and request a new password or contact a site administrator.",

	'security_tools:notify_user:email_change_request:subject' => "E-mail address change request for %s",
	'security_tools:notify_user:email_change_request:message' => "Hi %s,

You requested to change your e-mail address on %s to this e-mail address.

In order to complete the request click on this link:
%s",

	'security_tools:notify_user:email_change:subject' => "E-mail address changed for %s",
	'security_tools:notify_user:email_change:message' => "Hi %s,

You e-mail address on %s has been changed.

If you didn't do this or requested this. Please contact a site administrator.",

	'security_tools:notify_user:ban:subject' => "You've been banned from %s",
	'security_tools:notify_user:ban:message' => "Hi %s,

Your account on %s has been banned, you can no longer use the site.

If you believe this was done in error, please contact one of the site administrators.",

	'security_tools:notify_user:unban:subject' => "You're no longer banned from %s",
	'security_tools:notify_user:unban:message' => "Hi %s,

Your account on %s is no longer banned, you can start using the site again.
To login go to %s.

If you believe this was done in error, please contact one of the site administrators.",
	
);

add_translation("en", $english);
