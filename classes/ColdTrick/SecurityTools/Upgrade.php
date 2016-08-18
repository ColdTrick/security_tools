<?php

namespace ColdTrick\SecurityTools;

class Upgrade {
	
	/**
	 * Protect the upgrade.php
	 *
	 * @return void
	 */
	public static function protect() {
		
		$setting = elgg_get_plugin_setting('secure_upgrade', 'security_tools');
		
		// default the upgrade is protected
		if ($setting === 'no') {
			return;
		}
		
		$pass = false;
		
		// check for a security code
		$code = get_input('code');
		if (!empty($code)) {
			$pass = self::validateCode($code);
		}
		
		if (!$pass) {
			elgg_admin_gatekeeper();
		}
	}
	
	/**
	 * Validate the upgrade token
	 *
	 * @param string $code the provided code
	 *
	 * @return bool
	 */
	protected static function validateCode($code) {
		
		$hmac = self::getHmac();
		
		return $hmac->matchesToken($code);
	}
	
	/**
	 * Helper function to generate/validate tokens
	 *
	 * @return \Elgg\Security\Hmac
	 */
	protected static function getHmac() {
		
		$site = elgg_get_site_entity();
		
		return elgg_build_hmac([
			$site->name,
			$site->time_created,
			$site->getURL(),
		]);
	}
	
	/**
	 * Generate a secret for the upgrade
	 *
	 * @return string
	 */
	public static function generateCode() {
		
		$hmac = self::getHmac();
		
		return $hmac->getToken();
	}
}
