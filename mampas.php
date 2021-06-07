<?php
require_once 'core/init.php';
$pages_id=3;
$result = Pages::get(3);
$postArr = Header::get(1);
?>
<!DOCTYPE html>
<html lang="bs-BA">
<?php	
	$title="Apartmani Mampas Neum | Najniže cijene smještaja! | Posjetite odmah!";
    //Check length of title for SEO (50-70 characters) = 70
    //echo "Length of title is " . strlen($title) . "characters long." . " ";
	$og_title="Apartmani Mampas, Neum / Najniže cijene smještaja!";
	$website_url="www.visit-neum.com/mampas.php";
	$meta['description']="Apartmani Mampas u Neumu, se nalaze samo 3 minute hoda od jadranskog mora, te svi apartmani posjeduju sve što vam je potrebno za vrijeme Vašeg odmora na moru...Posjetite odmah!";
    //Check length of description for SEO (140-180 characters) = 178
    //echo "Length of description is " . strlen($meta['description']) . "characters long.";
	$meta['keywords']="neum, apartmani, apartmani mampas, mampas, ljetovanje neum, hoteli neum, pansioni neum, privatni smještaj neum, neum smještaj, neum smjestaj, neum apartmani i sobe, neum sobe";
	$og_image="images/Mampas/SMALL/ApartmaniMampas_01.jpg";
	$image_alt="Apartmani Mampas - Neum";
	include 'inc/head.php';
	//end #head
	?>
<body>
<div id="wrapper">
<header id="header" class="cf">
<?php 
  echo $postArr->render(); 	
  include 'inc/header.php'; 
?>
</header><!-- end #header -->
<?php
  include 'inc/nav.inc'; //end #nav
?>

<div id="main">
<?php echo $result->render(); ?>		
<span id="a"></span>
<script type="text/javascript" src="JS/review_rooms.js" defer></script>
<?php
	$mampas = new GalleryMampas();
	$mampas->renderGallery();
?>
<iframe class="video" src="https://www.youtube-nocookie.com/embed/qpOwh0lhqMQ?wmode=opaque&rel=0&autoplay=0&loop=1&showinfo=0&modestbranding=1&disablekb=1&controls=1&fs=0" frameborder="0" sandbox="allow-forms allow-scripts allow-pointer-lock allow-same-origin allow-top-navigation allow=accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<h2>Gdje se nalazimo?</h2>
<iframe id="map_mampas" class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2636.4509596984335!2d17.62174931523688!3d42.91965090757091!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x134ba25283a7f7b3%3A0x5b37fcf1acc1898!2sApartments+Mampas!5e1!3m2!1sbs!2sba!4v1519716141303" allowfullscreen></iframe>
</div><!-- end #main -->

<aside id="sidebar">
    <table id="contact">
      <thead>
        <tr>
          <th colspan="2"><h3>KONTAKT</h3></th>
        </tr>
		  </thead>
       <tbody>
        <tr>
          <td class="table_information">Vlasnik:</td>
          <td>Stjepan Đono</td>
        </tr>
        <tr>
          <td class="table_information">Telefon:</td>
			<td><a href="tel:+387 63 473 614" title="Pozovite sada">+387 63 473 614</a></td>
        </tr>
        <tr>
          <td class="table_information">Adresa:</td>
          <td>Magistralni put bb.<br>88390 Neum, BiH</td>
        </tr>
        <tr>
      </tbody>
		<tfoot>
        <tr>
		  <td colspan="2"><p id="price">CIJENA NA UPIT</p>
          <a href="#contact_owner" rel="modal:open"><button id="question" class="request  modal-btn">POŠALJITE UPIT</button></a>
          <?php include "inc/room_owner.php"; ?>
		</td>
       </tr>
      </tfoot>    
      </table>
<?php
	$mampasAsside = new GalleryAssideMampas();
	$mampasAsside->renderGalleryAsside();
?>
</aside>
 <script defer src="lightbox2/src/js/lightbox.js"></script>
<?php
	include 'inc/footer.php';
	//end #footer
?>
</div><!-- end #wrapper -->
</body>
</html>
