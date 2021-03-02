<?php
class Hotels extends Entity{
	public static $tableName = 'hotels';
	public static $keyColumn = 'hotels_id';
	public function render(){
		$render = "<div><h1>" . $this->title . "</h1></div>";
		return $render;
	}
	}