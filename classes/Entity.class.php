<?php
// Active record pattern
class Entity{
	private static $db;
	public static function get($id){
		$tableName = static::$tableName;
		$keyColumn = static::$keyColumn;
		$className = get_called_class();
		$q = "SELECT * FROM {$tableName} WHERE {$keyColumn} = {$id}";
		$q = self::$db->query($q);
		$result = $q->fetchObject($className);
		return $result;
	}
	public static function getAll(){
		$tableName = static::$tableName;
		$q = self::$db->query("SELECT * FROM {$tableName}");
		$postArr = $q->fetchAll();
		return $postArr;
	}	
	public static function remove($id){
		$tableName = static::$tableName;
		$keyColumn = static::$keyColumn;
		$q = self::$db->query("DELETE FROM {$tableName} WHERE {$keyColumn} = {$id}");
	}
	public function insert(){
		$tableName = static::$tableName;
		$q = "INSERT INTO {$tableName}(";
		$vel = '';
		foreach($this as $k=>$v){
			$q .= $k . ", ";
			$vel .= "'" . $v . "', ";
		}
		$q = trim($q, ', ');
		$q .= ") VALUES (";
		$q .= $vel;
		$q = trim($q, ', ');
		//$q .= ")";
		$q = self::$db->query($q);
	}
	public static function init(){
		self::$db = DB::getInstance();
	}
}
Entity::init();