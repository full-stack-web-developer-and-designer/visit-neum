<?php
require_once 'core/init.php';
$header = Header::get(1);
$pages_id=3;
$page = Pages::get(3);
$contact = Contact::get(2);
?>
<!DOCTYPE html>
<html lang="bs-BA">
<?php	
	$title="Apartmani Mampas Neum | Najniže cijene smještaja! | Posjetite odmah!";
	$og_title="Apartmani Mampas, Neum / Najniže cijene smještaja!";
	$website_url="https://visit-neum.com/Apartments-Mampas.html";
	$meta['description']="Ukoliko tražite idealno mjesto za Vaš odmor u Neumu, Apartmani Mampas su pravo rješenje za vas! Nalaze se u neposrednoj blizini jadranskog mora.";
	$meta['keywords']="neum, apartmani, apartmani mampas, mampas, ljetovanje neum, hoteli neum, pansioni neum, privatni smještaj neum, neum smještaj, neum smjestaj, neum apartmani i sobe, neum sobe";
	$og_image="./gallery/ApartmaniMampas.jpg";
  $twitter_image="./gallery/ApartmaniMampas.jpg";
	$image_alt="Apartmani Mampas - Neum";
	include 'inc/head.php';
	?>
<body>
<div id="wrapper">
<header id="header" class="cf">
<?php 
  echo $header->render();
?>
</header>
<?php
  include './inc/nav.inc';
?>

<div id="main">
<?php echo $page->render(); ?>		
<span id="a"></span>
<script type="text/javascript" src="JS/review_rooms.min.js" defer></script>
<?php
	$mampas = new GalleryMampas();
	$mampas->renderGallery();
?>
<iframe class="video" src="https://www.youtube-nocookie.com/embed/qpOwh0lhqMQ?wmode=opaque&rel=0&autoplay=0&loop=1&showinfo=0&modestbranding=1&disablekb=1&controls=1&fs=0" frameborder="0" sandbox="allow-forms allow-scripts allow-pointer-lock allow-same-origin allow-top-navigation allow=accelerometer; encrypted-media; gyroscope; picture-in-picture" title="Apartmani Mampas viideo" allowfullscreen></iframe>
<h2>Gdje se nalazimo?</h2>
<iframe id="map_mampas" class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2636.4509596984335!2d17.62174931523688!3d42.91965090757091!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x134ba25283a7f7b3%3A0x5b37fcf1acc1898!2sApartments+Mampas!5e1!3m2!1sbs!2sba!4v1519716141303" title="Apartmani Mampas Map" allowfullscreen loading="lazy"></iframe>
</div><!-- end #main -->

<aside id="sidebar">
  <!-- contact info -->
  <?php echo $contact->render(); ?>
  <?php include "./inc/room_owner.php"; ?>

<?php
	$mampasAsside = new GalleryAssideMampas();
	$mampasAsside->renderGalleryAsside();
?>
</aside><!-- end #sidebar -->
<?php
	include 'inc/footer.php';
?>
</div><!-- end #wrapper -->
<script src="lightbox2/src/js/lightbox.min.js"></script>
</body>
</html>