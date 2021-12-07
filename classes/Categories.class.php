<?php
class Categories extends Entity{
	public static $tableName = 'categories';
	public static $keyColumn = 'id';
	public function render(){
		$render = "<div><h1>" . $this->title . "</h1></div>";
		return $render;
	}
	}