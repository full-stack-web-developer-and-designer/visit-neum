<?php
class GalleryBlanka extends Gallery {
	// Fetch data from MySQL using PDO - PHP Data Object	
	public function renderGallery(){
		$question = "SELECT * FROM visitneu_gallery.lightbox WHERE alt='Holiday Home Blanka Neum';";
		$resultat=$this->__connection()->query($question);
		//$resultat->execute();
		//$stmt->setFetchMode(PDO::FETCH_ASSOC);
		while ($row = $resultat->fetch()) {
		$img = $row['img'];
		$alt = $row['alt'];
		echo '<a href="gallery/BIG/'.$img.'" data-lightbox="image-group"><img src="gallery/SMALL/'.$img.'" alt="'.$alt.'" class="imgCentral"></a>';
		
		}
	}
}