<?php
class Config{
	public static function get($path = null){
		if($path){
		$result = $GLOBALS['config'];
		$path = explode("/", $path);
		foreach($path as $part){
			if(isset($result[$part])){
				$result = $result[$part];
			}
		}
		return $result;
		}
		return false;
	}
}