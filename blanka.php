<?php
  require_once 'core/init.php';
  $header = Header::get(1);
  $pages_id=5;
  $page = Pages::get(5);
  $contact = Contact::get(3);
?>
<!DOCTYPE html>
<html lang="bs-BA">
<?php	
	$title="Holiday Home Blanka, Neum | Najniže cijene smještaja! Posjetite odmah!";
    //Check length of title for SEO (50-70 characters) -72
    //echo "Length of title is " . strlen($title) . "characters long." . " ";
	$og_title="Holiday Home Blanka, Neum | Najpovoljnije cijene smještaja!";
	$website_url="https://visit-neum.com/holiday-home-blanka.html";
	$meta['description']="Ukoliko tražite idealno mjesto za Vaš odmor u Neumu, kuća za odmor \"Holiday Home Blanka\" je pravo rješenje za vas! Nalazi se veoma blizu jadranskog mora.";
    //Check length of description for SEO (140-180 characters) -157
    //echo "Length of description is " . strlen($meta['description']) . "characters long.";
	$meta['keywords']="neum, hoteli, Hoteli Neum, apartmani, sobe, ljetovanje,  matić, matic, vila matić, pansioni, privatni smještaj, smjestaj, ljetovanje neum, neum apartmani i sobe, holiday home blanka, kuće za odmor neum";
	$og_image="./gallery/HolidayHomeBlanka.jpg";
  $twitter_image="./gallery/HolidayHomeBlanka.webp";
	$image_alt="Holiday Home Blanka - Neum";
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
	$blanka = new GalleryBlanka();
	$blanka->renderGallery();
?>

<h2>Gdje se nalazimo?</h2>
	<iframe id="map_blanka" class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2921.655367761832!2d17.612659275296426!3d42.92230879939653!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x134ba3b18f7a8145%3A0x335e5da9f2b0159f!2sHrvatskih%20velikana%205%2C%20Neum%2C%20Bosna%20i%20Hercegovina!5e0!3m2!1sbs!2skr!4v1712831434300!5m2!1sbs!2skr" frameborder="0" allowfullscreen title="Holiday Home Blanka Map" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div><!-- end #main -->
<aside id="sidebar">
<!-- contact info -->
<?php echo $contact->render(); ?>
<?php include "./inc/room_owner.php"; ?>
<?php
	$blankaAsside = new GalleryAssideBlanka();
	$blankaAsside->renderGalleryAsside();
?>
</aside>
<?php
	include 'inc/footer.php';
?>
</div><!-- end #wrapper -->
<script src="lightbox2/src/js/lightbox.min.js"></script>
</body>
</html>