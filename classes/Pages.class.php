<?php
class Pages extends Entity{
	public static $tableName = 'pages';
	public static $keyColumn = 'pages_id';
	
	public function render(){
		$render = "<div><h1>" . $this->title . "</h1>";
		$render .= "<p>". $this->first_part . "</p><p>" . $this->second_part . "</p>";
		$render .= "<p><span class='none'>" . $this->span_none . "</p></div>";
		return $render;
	}
	}