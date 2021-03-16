<?php
// singletton pattern
class DB {
		private static $_instance = null;
		public $_pdo;
		private function __construct(){
			try {
				$this->_pdo = new PDO("mysql:host=" . Config::get('mysql/host') . ";dbname=" . Config::get('mysql/db'),Config::get('mysql/user'),Config::get('mysql/password'));
					echo "COnnected";
			} catch(PDOException $e){
				die($e->getMessage());

			}
		}
		public static function getInstance(){
			if(is_null(self::$_instance)){
				self::$_instance = new PDO("mysql:host=" . Config::get('mysql/host') . ";dbname=" . Config::get('mysql/db'),Config::get('mysql/user'),Config::get('mysql/password'));
				self::$_instance->exec('set names utf8');
			}		
			return self::$_instance;
		}
}