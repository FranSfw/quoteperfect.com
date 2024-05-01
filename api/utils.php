<?php

abstract class Utils {
    private static $_sRemoteIP = null;

    public static function isEmpty(&$sValue){
		return (!isset($sValue) || !is_string($sValue) || ($sValue == "") || (($sValue = trim($sValue)) == ""));
	}
	
	public static function left($sValueA, $sValueB){
		return (isset($sValueA) && isset($sValueB)) ? substr($sValueA, 0, strpos($sValueA, $sValueB)) : "";
	}

    public static function contains($sValue, $sSearch){
		return (isset($sValue) && isset($sSearch) && !is_null($sValue) && !is_null($sSearch) && preg_match("/" . preg_quote((string)$sSearch, "/") . "{1}/", (string)$sValue));
	}

    public static function getRemoteIP(){
		if (self::$_sRemoteIP == null){
			if (Utils::contains(self::$_sRemoteIP = empty($_SERVER["HTTP_X_FORWARDED_FOR"]) ? $_SERVER["REMOTE_ADDR"] : $_SERVER["HTTP_X_FORWARDED_FOR"], ",")){
				self::$_sRemoteIP = Utils::left(self::$_sRemoteIP, ",");
			}
		}
		return (self::$_sRemoteIP == null) ? "" : self::$_sRemoteIP;
	}

    public static function getUserAgent(){
		return isset($_SERVER["HTTP_USER_AGENT"]) ? $_SERVER["HTTP_USER_AGENT"] : "";
	}
}
