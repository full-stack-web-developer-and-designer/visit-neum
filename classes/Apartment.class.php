<?php
class Apartment extends Entity{
	public static $tableName = 'apartment';
	public static $keyColumn = 'apartment_id';
	public function render(){
		$render = "<div><h1>" . $this->title . "</h1>";
		$render .= "<p><strong>" .$this->strong . "</strong>" . " " .$this->first_part . "</p>";
		$render .= "<p>" .$this->second_part . "</p>";
		$render .= "<p class='no_margin'>" .$this->p_no_margin . "</p></div>";
		return $render;
	}
	}