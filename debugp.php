<?php

//ini_set('error_reporting', E_ALL);
//ini_set('error_reporting', E_ERROR | E_WARNING);
ini_set('error_reporting', E_ERROR);
ini_set('display_errors', true);

/**
 * Wrapper for displaying debug information
 *
 * @author Eric Christenson (EricChristenson.com)
 * @copyright 2015
 * @version 1.5
 * @license MIT Public License (http://opensource.org/licenses/MIT)
 *
 * @param mixed $content The code to be debugged.
 * @param bool $stop Whether to exit() the code. Defaults to true.
 * @param bool $format Whether to use the var_dump() format. Defaults to true.
 */
if (!function_exists('debugp')) {
    function debugp($content = array(), $stop = true, $format = true) {
        $backtrace = current(debug_backtrace());
        echo '<pre>',
             $backtrace['file'], ",\n",
             'Line ', $backtrace['line'], ' ',
             'at ', date('Y-m-d H:i:s'),
             '</pre>';

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
