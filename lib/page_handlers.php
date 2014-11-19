<?php
/**
 * All page handlers for this plugin are handled in this file
 */

/**
 * The page handler for /email_change_confirmation/*
 *
 * @param array $page the different page elements
 *
 * @return boolean true if handled
 */
function security_tools_email_change_confirmation_page_handler($page) {
	
	elgg_gatekeeper();
	
	include(dirname(dirname(__FILE__)) . "/procedures/email_change_confirmation.php");
	
	return true;
}