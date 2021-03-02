<?php
class Hotel extends Entity{
	public static $tableName = 'hotel';
	public static $keyColumn = 'hotel_id';
	
	public function render(){
		$render = "<div><h1>" . $this->title . "</h1>";
		$render .= "<p><strong>" . $this->strong . "</strong>". " " .$this->first_part . "<br>" . $this->second_part . "</p>";
		$render .= "<p>". $this->third_part . "<span class='none'>" . $this->span_none . "</p></div>";
		return $render;
	}
	}