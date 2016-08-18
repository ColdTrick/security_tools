<?php

namespace ColdTrick\SecurityTools;

class Password {
	
	/**
	 * Change the view vars for input/password
	 *
	 * @param string $hook         the name of the hook
	 * @param string $type         the type of the hook
	 * @param mixed  $return_value current return value
	 * @param array  $params       supplied params
	 *
	 * @return void|array
	 */
	public static function inputPassword($hook, $type, $return_value, $params) {
		
		if (elgg_get_plugin_setting('disable_autocomplete_on_password_fields', 'security_tools') !== 'yes') {
			return;
		}
		
		$return_value['autocomplete'] = 'off';
		
		return $return_value;
	}
}
