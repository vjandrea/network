<?php
namespace VJAndrea;

/**
 * Network class
 *
 * @package default
 * @author Andrea Bergamasco <info@vjandrea.net>
 **/
class Network
{
	/**
	 * Converts a MAC address in a long int. Default separators are ':' and '-'
	 *
	 * @param string $mac MAC address to convert
	 * @param array $additional_separators Additional separators to use while parsing
	 * @return int
	 * @author Andrea Bergamasco <abergamasco@gmail.com>
	 **/
	public static function mac2long($mac = '', $additional_separators = array())
	{
		$separators = array_merge($additional_separators, [':', '-']);
		return hexdec(str_replace($separators, '', $mac));
	}

	/**
	 * Converts a long int into a MAC address
	 *
	 * @param int $long
	 * @param char $separator Separator to use when returning the MAC address. Default ':'
	 * @return string
	 * @author Andrea Bergamasco <abergamasco@gmail.com>
	 **/
	public static function long2mac($long = 0, $separator = ':')
	{
		return implode($separator, str_split(sprintf('%012s', strtoupper(dechex($long))), 2));
	}
} // END class Network