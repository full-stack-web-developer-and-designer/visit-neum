<?php
class Apartments extends Entity{
	public static $tableName = 'apartments';
	public static $keyColumn = 'apartments_id';
	public function render(){
		$render = "<div><h1>" . $this->title . "</h1></div>";
		return $render;
	}
	}