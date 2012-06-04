<?php

	$english = array(
		'security_tools' => "Security Tools",
		
		// settings
		'security_tools:settings:secure_upgrade' => "Secure upgrade.php",
		'security_tools:settings:secure_upgrade:description' => "With a secured upgrade.php only logged in site administrators can run upgrade.php",
		
		'security_tools:settings:secure_cron' => "Secure CRON",
		'security_tools:settings:secure_cron:description' => "A secured CRON can will only work if you add a code to the URL of the CRON. This code is: <b>%s</b> (for example: %s)",
		'security_tools:settings:secure_cron:bypass' => "Allow administrators to bypass CRON security",
		'security_tools:settings:secure_cron:bypass:description' => "When this is set to 'yes' an administrator can manualy trigger the CRON by going to the currect URL without a valida CRON code.",
		
		// secure cron
		'security_tools:secure_cron:error:code' => "The provided CRON security code is invalid",
		'' => "",
	);
	
	add_translation("en", $english);