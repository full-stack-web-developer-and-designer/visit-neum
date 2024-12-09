<?php
class ApartSlide extends Slider{
    // Fetch data from MySQL using PDO - PHP Data Object	
	public function renderSlider(){
        $sql = "SELECT * FROM visitneu_neum.lightslider WHERE category='Apartments' ORDER BY rand();";
        $stmt = $this->__connection()->query($sql);

        while($row = $stmt->fetch()) {
            echo "<article class='offer'><a href='$row[href]'><img src='./gallery/slider/$row[img]' alt='$row[alt]'><div><h2>$row[title]</h2></div></a></article>";
            }
        }
    }