<?php

class Url {
	
	public static function changeGetValue($name, $value)
    {
        $_GET[$name] = $value;
        $get = self::createGetString($_GET);
        return $_SERVER['REDIRECT_URL'].$get;
    }

    public static function createGetString($get)
    {
    	$string = '?';
    	foreach ($get as $key => $value) {
    		$string .= $key.'='.$value.'&';
    	}
    	return rtrim($string, '&');
    }

    public static function get()
    {
    	return $_SERVER['REDIRECT_URL'];
    }
}