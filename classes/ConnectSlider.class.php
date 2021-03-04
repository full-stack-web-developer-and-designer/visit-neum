<?php
class ConnectSlider{
private $dbHost = "localhost:3306";
private $dbUser = "visitneu_LightSlider";
private $dbPassword = "slideR&545";
private $dbName = "visitneu_slider";

protected function connect() {
	$dsn = "mysql:host=" . $this->dbHost . ";dbName=" . $this->dbName;
	$pdo = new PDO($dsn, $this->dbUser, $this->dbPassword);
	$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
	$pdo->exec('set names utf8');
	return $pdo;
	}
} 