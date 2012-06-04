<?php

	$plugin = elgg_extract("entity", $vars);
	
	$yesno_options = array(
		"yes" => elgg_echo("option:yes"),
		"no" => elgg_echo("option:no")
	);
	
	// secure upgrade.php
	echo "<div>";
	echo elgg_echo("security_tools:settings:secure_upgrade");
	echo "&nbsp;" . elgg_view("input/dropdown", array("name" => "params[secure_upgrade]", "value" => $plugin->secure_upgrade, "options_values" => $yesno_options));
	echo "<div class='elgg-subtext'>" . elgg_echo("security_tools:settings:secure_upgrade:description") . "</div>";
	echo "</div>";
	
	// secure cron
	$code = security_tools_generate_cron_code();
	$example_cron_url = $vars["url"] . "cron/minute/" . $code;
	
	echo "<div>";
	echo elgg_echo("security_tools:settings:secure_cron");
	echo "&nbsp;" . elgg_view("input/dropdown", array("name" => "params[secure_cron]", "value" => $plugin->secure_cron, "options_values" => $yesno_options));
	echo "<div class='elgg-subtext'>" . elgg_echo("security_tools:settings:secure_cron:description", array($code, $example_cron_url)) . "</div>";
	echo "</div>";
	
	echo "<div>";
	echo elgg_echo("security_tools:settings:secure_cron:bypass");
	echo "&nbsp;" . elgg_view("input/dropdown", array("name" => "params[secure_cron_bypass]", "value" => $plugin->secure_cron_bypass, "options_values" => array_reverse($yesno_options, true)));
	echo "<div class='elgg-subtext'>" . elgg_echo("security_tools:settings:secure_cron:bypass:description") . "</div>";
	echo "</div>";