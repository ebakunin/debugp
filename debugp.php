<?php
/**
 * Wrapper for handling debug information
 *
 * @author Eric Christenson (EricChristenson.com)
 * @copyright 2015
 * @version 1.0
 * @license MIT Public License (http://opensource.org/licenses/MIT)
 *
 * @param mixed $content
 * @param bool $stop (defaults to true)
 * @param bool $format (defaults to true)
 */
if (!function_exists('debugp')) {
	function debugp($content = array(), $stop = true, $format = true) {
		$backtrace = current(debug_backtrace());
		echo $backtrace['file'], ', line ', $backtrace['line'], '<br />';
		
		if ($format) {
			var_dump($content); 
		} else {
			echo "<pre>\n";
			print_r($content);
			echo "</pre>\n";
		}

		if ($stop) {
			exit;
		}
	}	
}