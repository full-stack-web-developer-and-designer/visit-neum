<?php
require_once 'core/init.php';
$pages_id=4;
$result = Pages::get(4);
$postArr = Header::get(1);
?>
<!DOCTYPE html>
<html lang="bs-BA">
<?php
	$title="Brod Ivana, Neum | Najpovoljnije krstarenje neumskim zaljevom!";
  //Check length of title for SEO (50-70 characters)
  //echo "Length of title is " . strlen($title) . "characters long." . " ";
	$og_title="Brod Ivana, Neum / Krstarenje neumskim zaljevom...";
	$website_url="www.visit-neum.com/Brod-Ivana-Panoramska-voznja.html";
	$meta['description']="Brod Ivana nudi Vam najbolji izbor da vidite Neum s obe strane obale, te da se  opustite i otkrijete skrivene ljepote, prekrasnu prirodu, uvale, plaže i još mnogo toga...";
  //Check length of description for SEO (140-180 characters)
  //echo "Length of description is " . strlen($meta['description']) . "characters long.";
	$meta['keywords']="neum, brodovi Neum,brod Neum, jahta Neum, ljetovanje, ljetovanje neum, ljetovanje na moru";
	$og_image="images/Ivana/SMALL/BrodIvana_01.jpg";
	$image_alt="Brod Ivana - Neum";
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
<script src="JS/review.js"></script>
<?php
	$ivana = new GalleryIvana();
	$ivana->renderGallery();
?>
<iframe class="video" id="brod_video" src="https://www.youtube-nocookie.com/embed/1PvwIYh-OtY?wmode=opaque&rel=0&autoplay=0&loop=1&showinfo=0&modestbranding=1&disablekb=1&controls=1&fs=0" frameborder="0" sandbox="allow-forms allow-scripts allow-pointer-lock allow-same-origin allow-top-navigation allow=accelerometer; encrypted-media; gyroscope; allowfullscreen disablePictureInPicture" title="Brod Ivana video"></iframe>
  <h2>Gdje se nalazimo?</h2>
 <iframe id="map_brod" class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11687.292893650763!2d17.602407067649896!3d42.918769079153336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x134ba35fa134b66d%3A0xa5813ec04ddb00e9!2sBrod%20Ivana%20Neum!5e0!3m2!1sen!2sba!4v1585805653707!5m2!1sen!2sba" title="Brod Ivana Map" allowfullscreen></iframe>
 
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
          <td>Vinko Kuzman</td>
        </tr>
        <tr>
          <td class="table_information">Telefon:</td>
          <td><a href="tel:+387 63 350 230" title="Pozovite sada"> +387 63 350 230</a></td>
        </tr>
        <tr>
          <td class="table_information">Adresa:</td>
          <td>Nikole Buconjića br. 8<br>88390 Neum, BiH</td>
        </tr>
        <tr>
        	</tbody>
		<tfoot>
        <tr>
        	<td colspan="2"><p id="price">CIJENA NA UPIT</p>
          <a href="#contact_owner" rel="modal:open"><button id="question" class="request  modal-btn">POŠALJITE UPIT</button></a>
          <?php include_once "inc/owner.php"; ?>
</td>
       </tr>
      </tfoot>    
      </table>
<?php
	$ivanaAsside = new GalleryAssideIvana();
	$ivanaAsside->renderGalleryAsside();
?>
  </aside>
  <script defer src="lightbox2/src/js/lightbox.js"></script>
<?php
	include_once 'inc/footer.php';
	//end #footer
?>
</div><!-- end #wrapper -->
</body>
</html>