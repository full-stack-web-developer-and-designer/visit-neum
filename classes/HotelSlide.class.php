<?php
class HotelSlide extends Slider{
    // Fetch data from MySQL using PDO - PHP Data Object	
	public function renderSlider(){
        $sql = "SELECT * FROM visitneu_slider.lightslider WHERE category='Hotels' ORDER BY rand();";
        $stmt = $this->connect()->query($sql);

        while($row = $stmt->fetch()) {
            echo "<li class='item-a'><article class='offer'><a href='$row[href]'><img src='./images/$row[img]' alt='$row[alt]'/><span><h2>$row[title]</h2></span></a></article></li>";
            }
        }
    }