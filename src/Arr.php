<?php

namespace AD\PHPUtils;

/**
 * Provides various array utilities
 */
class Arr {

	/**
	 * Get a specific key from an array, or return a default value
	 *
	 * @param  $array    Array to search
	 * @param  $key      Key to look for
	 * @param  $default  Default value to return, defaults to NULL
	 *
	 * @return  Default value or value in array
	 */
	public static function get($array, $key, $default = NULL)
	{
		return isset($array[$key]) ? $array[$key] : $default;
	}

}
