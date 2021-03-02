<?php
require_once 'core/init.php';
$result = Hotel::get(1);
?>
<!DOCTYPE html>
<html lang="bs-BA">
<?php	
	$title="Hotel Villa Matić, Neum | Najniže cijene smještaja!Posjetite odmah!";
    //Check length of title for SEO (50-70 characters)
    //echo "Length of title is " . strlen($title) . "characters long." . " ";
	$og_title="Hotel Villa Matić, Neum | Najpovoljnije cijene smještaja!";
	$website_url="www.visit-neum.com/matic.php";
	$meta['description']="Hotel Villa MATIĆ nudi usluge smještaja u 50 luksuzno opremljenih smještajnih jedinica, kao i restoran, recepciju, parking, garažu...prekrasan pogled na jadransko more.";
    //Check length of description for SEO (140-180 characters)
    //echo "Length of description is " . strlen($meta['description']) . "characters long.";
	$meta['keywords']="neum, hoteli, Hoteli Neum, apartmani, sobe, ljetovanje,  matić, matic, vila matić, pansioni, privatni smještaj, smjestaj, ljetovanje neum, neum apartmani i sobe";
	$og_image="images/Matic/SMALL/VillaMatic_01.jpg";
	$image_alt="Hotel Villa Matić - Neum";
	include 'inc/head.php';
	//end #head
?>
<body>
<div id="wrapper">

	<?php
	include 'inc/header.php';
	//end #header
	include 'inc/nav.inc';
	//end #nav
	?>
<div id="main">
<?php echo $result->render(); ?> 
<span id="a"></span>
<script type="text/javascript" src="JS/review_rooms.js"></script>
<div class="central"><a href="images/Matic/BIG/VillaMatic_01.jpg" data-lightbox="image-group"><img src="images/Matic/SMALL/VillaMatic_01.jpg" alt="Hotel Villa Matić" class="imgCentral"></a><a href="images/Matic/BIG/VillaMatic_02.jpg" data-lightbox="image-group"><img src="images/Matic/SMALL/VillaMatic_02.jpg" alt="Hotel Villa Matić" class="imgCentral"></a><a href="images/Matic/BIG/VillaMatic_03.jpg" data-lightbox="image-group"><img src="images/Matic/SMALL/VillaMatic_03.jpg" alt="Hotel Villa Matić" class="imgCentral"></a><a href="images/Matic/BIG/VillaMatic_04.jpg" data-lightbox="image-group"><img src="images/Matic/SMALL/VillaMatic_04.jpg" alt="Hotel Villa Matić" class="imgCentral"></a><a href="images/Matic/BIG/VillaMatic_05.jpg" data-lightbox="image-group"><img src="images/Matic/SMALL/VillaMatic_05.jpg" alt="Hotel Villa Matić" class="imgCentral"></a><a href="images/Matic/BIG/VillaMatic_06.jpg" data-lightbox="image-group"><img src="images/Matic/SMALL/VillaMatic_06.jpg" alt="Hotel Villa Matić" class="imgCentral"></a><a href="images/Matic/BIG/VillaMatic_07.jpg" data-lightbox="image-group"><img src="images/Matic/SMALL/VillaMatic_07.jpg" alt="Hotel Villa Matić" class="imgCentral"></a><a href="images/Matic/BIG/VillaMatic_08.jpg" data-lightbox="image-group"><img src="images/Matic/SMALL/VillaMatic_08.jpg" alt="Hotel Villa Matić" class="imgCentral"></a><a href="images/Matic/BIG/VillaMatic_09.jpg" data-lightbox="image-group"><img src="images/Matic/SMALL/VillaMatic_09.jpg" alt="Hotel Villa Matić" class="imgCentral"></a><a href="images/Matic/BIG/VillaMatic_10.jpg" data-lightbox="image-group"><img src="images/Matic/SMALL/VillaMatic_10.jpg" alt="Hotel Villa Matić" class="imgCentral"></a><a href="images/Matic/BIG/VillaMatic_11.jpg" data-lightbox="image-group"><img src="images/Matic/SMALL/VillaMatic_11.jpg" alt="Hotel Villa Matić" class="imgCentral"></a><a href="images/Matic/BIG/VillaMatic_12.jpg" data-lightbox="image-group"><img src="images/Matic/SMALL/VillaMatic_12.jpg" class="imgCentral" alt="Hotel Villa Matić"></a></div><!--end .central-->
<h2>Gdje se nalazimo?</h2>
<iframe id="map_matic" class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2636.4830002748577!2d17.624211315172573!3d42.91890390761864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x134ba2520e6e6c61%3A0xcc90d46d336c0d38!2sVilla+Mati%C4%87!5e1!3m2!1sbs!2sba!4v1519715607404" frameborder="0" allowfullscreen></iframe></div><!-- end #main --><aside id="sidebar">
    <table id="contact">
      <thead>
        <tr>
          <th colspan="2"><h3>KONTAKT</h3><span id="website"><a href="http://www.hotelvillamatic.com" target="_blank">www.hotelvillamatic.com</a></span></th>
        </tr>
		  </thead>

		<tbody>
        <tr>
          <td class="table_information">Vlasnik</td>
          <td class="table_answer">Vlatko Matić</td>
        </tr>
        <tr>
          <td class="table_information">Telefon:</td>
			<td><a href="tel:+387 63 994 092" title="Pozovite sada">+387 63 994 092</a></td>
        </tr>
        <tr>
          <td class="table_information">Adresa:</td>
          <td>Zagrebačka bb.<br>88390 Neum, BiH</td>
        </tr>
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

    <div class="central"><a href="images/Matic/BIG/VillaMatic_13.jpg" data-lightbox="image-group"><img src="images/Matic/SMALL/VillaMatic_13.jpg" alt="Hotel Villa Matić" class="imgRight"></a><a href="images/Matic/BIG/VillaMatic_14.jpg" data-lightbox="image-group"><img src="images/Matic/SMALL/VillaMatic_14.jpg" alt="Hotel Villa Matić" class="imgRight"></a><a href="images/Matic/BIG/VillaMatic_16.jpg" data-lightbox="image-group"><img src="images/Matic/SMALL/VillaMatic_16.jpg" alt="Hotel Villa Matić" class="imgRight disable"></a><a href="images/Matic/BIG/VillaMatic_15.jpg" data-lightbox="image-group"><img src="images/Matic/SMALL/VillaMatic_15.jpg" alt="Hotel Villa Matić" class="imgRight"></a></div><!--end .central-->
</aside>

 
 <script defer src="lightbox2/src/js/lightbox.js"></script>
<?php
	include 'inc/footer.php';
	//end #footer
?>

</div><!-- end #wrapper -->

</body>
</html>
