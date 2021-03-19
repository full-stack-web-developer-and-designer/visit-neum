<?php
class ApartSlide extends Slider{
    // Fetch data from MySQL using PDO - PHP Data Object	
	public function renderSlider(){
        $sql = "SELECT * FROM visitneu_slider.lightslider WHERE category='Apartments' ORDER BY rand();";
        $stmt = $this->__connect()->query($sql);

        while($row = $stmt->fetch()) {
            echo "<article class='offer'><a href='$row[href]'><img src='./images/$row[img]' alt='$row[alt]'/><span><h2>$row[title]</h2></span></a></article>";
            }
        }
    }