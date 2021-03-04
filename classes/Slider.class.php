<?php
class Slider extends ConnectSlider {
	// Fetch data from MySQL using PDO - PHP Data Object	
	public function renderSlider(){
	$sql = "SELECT * FROM visitneu_slider.lightslider ORDER BY rand();";
	$stmt = $this->connect()->query($sql);
	
	while($row = $stmt->fetch()) {
		echo "<li class='item-a'><article class='product'><a href='$row[href]'><img src='./images/$row[img]' alt='$row[alt]'/><div class='text'><h2>$row[title]</h2></div></a></article></li>";
		}
	}
}