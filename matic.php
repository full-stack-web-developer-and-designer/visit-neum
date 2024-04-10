<?php
  require_once 'core/init.php';
  $header = Header::get(1);
  $pages_id=2;
  $page = Pages::get(2);
  $contact = Contact::get(1);
?>
<!DOCTYPE html>
<html lang="bs-BA">
<?php	
	$title="Hotel Villa Matić, Neum | Najniže cijene smještaja!Posjetite odmah!";
    //Check length of title for SEO (50-70 characters)
    //echo "Length of title is " . strlen($title) . "characters long." . " ";
	$og_title="Hotel Villa Matić, Neum | Najpovoljnije cijene smještaja!";
	$website_url="visit-neum.com/matic.php";
	$meta['description']="Hotel Villa MATIĆ nudi usluge smještaja u 50 luksuzno opremljenih smještajnih jedinica, kao i restoran, recepciju, parking, garažu...prekrasan pogled na jadransko more.";
    //Check length of description for SEO (140-180 characters)
    //echo "Length of description is " . strlen($meta['description']) . "characters long.";
	$meta['keywords']="neum, hoteli, Hoteli Neum, apartmani, sobe, ljetovanje,  matić, matic, vila matić, pansioni, privatni smještaj, smjestaj, ljetovanje neum, neum apartmani i sobe";
	$og_image="./gallery/HotelVillaMatic.jpg";
  $twitter_image="./gallery/HotelVillaMatic.webp";
	$image_alt="Hotel Villa Matić - Neum";
	include './inc/head.php';
	//end #head
?>
<body>
<div id="wrapper">
<header id="header" class="cf">
<?php 
  echo $header->render(); 	
?>
</header><!-- end #header -->
<?php
  include './inc/nav.inc'; //end #nav
?>
<div id="main">
<?php echo $page->render(); ?> 
<span id="a"></span>
<script type="text/javascript" src="./JS/review_rooms.min.js"></script>

<?php
	$matic = new GalleryMatic();
	$matic->renderGallery();
?>

<h2>Gdje se nalazimo?</h2>
<iframe id="map_matic" class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2636.4830002748577!2d17.624211315172573!3d42.91890390761864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x134ba2520e6e6c61%3A0xcc90d46d336c0d38!2sVilla+Mati%C4%87!5e1!3m2!1sbs!2sba!4v1519715607404" frameborder="0" allowfullscreen title="Hotel Villa Matić Map"></iframe></div><!-- end #main -->
<aside id="sidebar">
<!-- contact info -->
<?php echo $contact->render(); ?>
<?php include "./inc/room_owner.php"; ?>
<?php
	$maticAsside = new GalleryAssideMatic();
	$maticAsside->renderGalleryAsside();
?>
</aside>
<?php
	include 'inc/footer.php';
	//end #footer
?>
</div><!-- end #wrapper -->
<script src="lightbox2/src/js/lightbox.min.js"></script>
</body>
</html>