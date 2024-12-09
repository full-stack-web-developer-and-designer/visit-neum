<?php
class GalleryLasic extends Gallery {
	// Fetch data from MySQL using PDO - PHP Data Object	
	public function renderGallery(){
		$question = "SELECT * FROM visitneu_neum.lightbox WHERE pages_id='6';";
		$resultat=$this->__connection()->query($question);
		while ($row = $resultat->fetch()) {
		$img = $row['img'];
		$alt = $row['alt'];
		echo '<a href="gallery/BIG/'.$img.'" data-lightbox="image-group"><img src="gallery/SMALL/'.$img.'" alt="'.$alt.'" class="imgCentral"></a>';
		
		}
	}
}
