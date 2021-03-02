<?php
class Home extends Entity{
	public static $tableName = 'home';
	public static $keyColumn = 'home_id';
	public function render(){
		$render = "<div><p>" . $this->first_part . "<span class='p_hidden'>" . $this->span_p_hidden . $this->second_part . "</p>";
		$render .= "<p>" . $this->third_part . "</p>";
		$render .= "<p><strong>" . $this->strong . "</strong></p>";
		$render .= "<p class='important'>" . $this->important . "</p></div>";
		return $render;
	}
}