<?php
// singletton pattern
class DB {
		public static $_instance = null;
		public $pdo;
		public function __construct(){
			// open a connection to the database
			try{
				$this->pdo = new PDO("mysql:host=" . Config::get('mysql/host') . ";dbname=" . Config::get('mysql/db') . ";charset=" . Config::get('mysql/charset'),Config::get('mysql/user'),Config::get('mysql/password')); 
			} catch(PDOException $e) {
				die($e->getMessage());
			}
		}
		public static function getInstance(){
			if(!isset(self::$_instance)){
				self::$_instance = new PDO("mysql:host=" . Config::get('mysql/host') . ";dbname=" . Config::get('mysql/db') . ";charset=" . Config::get('mysql/charset'),Config::get('mysql/user'),Config::get('mysql/password'));
			}
			return self::$_instance;
		}
		public function getmyDB() {
			if ($this->pdo instanceof PDO){
				return $this->pdo;
				}
			}

	
        }