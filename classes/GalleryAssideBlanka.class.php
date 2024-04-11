<?php
class GalleryAssideBlanka extends GalleryAsside {
	// Fetch data from MySQL using PDO - PHP Data Object	
	public function renderGalleryAsside(){
		$quest = "SELECT * FROM visitneu_pictures.lightbox_asside WHERE alt='Holiday Home Blanka Neum';";
		$answer=$this->__conn()->query($quest);

		while ($row = $answer->fetch()) {
		$picture = $row['picture'];
		$alt_S = $row['alt'];
        $klasa = $row['class'];
		echo '<a href="galleryAsside/BIG/'.$picture.'" data-lightbox="image-group"><img src="galleryAsside/SMALL/'.$picture.'" alt="'.$alt_S.'" class="'.$klasa.'"></a>';
		
		}
	}
}