<?php
define("APP_DIR","c:/wamp/www/2014.03.25/sajt_php/");

function __autoload($classname){
	require_once(APP_DIR."classes/{$classname}.class.php");
}