<?php
class ConnectGallery{
private $dbHost = "localhost:3306";
private $dbUser = "visitneu_Lightbox";
private $dbPassword = "gallerY&545";
private $dbName = "visitneu_gallery";

protected function connection() {
	$dsn = "mysql:host=" . $this->dbHost . ";dbName=" . $this->dbName;
	$pdo = new PDO($dsn, $this->dbUser, $this->dbPassword);
	$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
	$pdo->exec('set names utf8');
	return $pdo;
	}
} 