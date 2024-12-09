<?php
class GalleryAssideMampas extends GalleryAsside {
	// Fetch data from MySQL using PDO - PHP Data Object	
	public function renderGalleryAsside(){
		$quest = "SELECT * FROM visitneu_neum.lightbox_asside WHERE pages_id='3';";
		$answer=$this->__connection()->query($quest);

		while ($row = $answer->fetch()) {
		$picture = $row['picture'];
		$alt_S = $row['alt'];
        $klasa = $row['class'];
		echo '<a href="galleryAsside/BIG/'.$picture.'" data-lightbox="image-group"><img src="galleryAsside/SMALL/'.$picture.'" alt="'.$alt_S.'" class="'.$klasa.'"></a>';
		
		}
	}
}
