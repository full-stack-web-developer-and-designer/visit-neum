<?php

class ConfigUsers{
	public static function getuser($paths = null){
		if($paths){
		$conf = $GLOBALS['configusers'];
		$paths = explode("/", $paths);
		foreach($paths as $bit){
			if(isset($conf[$bit])){
				$conf = $conf[$bit];
			}
		}
		return $conf;
		}
		return false;
	}
}