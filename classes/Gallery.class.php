<div class="central"> 
<?php
class Gallery extends ConnectSlider {
	// Fetch data from MySQL using PDO - PHP Data Object	
	public function renderGallery(){
		$question = "SELECT * FROM visitneu_neum.lightbox;";
		$result=$this->__connection()->query($question) or die("Error: $query");
		
		while ($row = $result->fetch()) {
		$img = $row['img'];
		$alt = $row['alt'];
		echo '<a href="gallery/BIG/'.$img.'" data-lightbox="image-group"><img src="gallery/SMALL/'.$img.'" alt="'.$alt.'" class="imgCentral"></a>';
		
		}
	}
}
?>
</div><!--end .central-->