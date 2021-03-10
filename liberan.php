<?php
	require_once 'core/init.php';
$postArr = Header::get(1)
?>
<!DOCTYPE html>
<html lang="bs-BA">
<?php
	$title = "Apartmani Liberan-Neum | Najniže cijene smještaja | Posjetite odmah!";
    //Check length of title for SEO (50-70 characters) = 70
    //echo "Length of title is " . strlen($title) . "characters long." . " ";
	$meta['description'] = "Apartmani Liberan nalaze se u Neumu te nude besplatni WiFi, vrt i terasu. Pojedine jedinice imaju kuhinju s hladnjakom.Mlađi gosti mogu se zabaviti na dječijem igralištu...";
     //Check length of description for SEO (140-180 characters) = 175
    //echo "Length of description is " . strlen($meta['description']) . "characters long.";
	$meta['keywords'] = "neum, apartmani, apartmani liberan, liberan, sobe liberan, ljetovanje neum, privatni smještaj neum, neum smještaj, neum smjestaj, neum apartmani i sobe, neum sobe, hoteli neum, pansioni neum, ";
	include 'inc/head.php';
	//end #head
?>
<style>
#main p{text-align: center;}
#sidebar{background: #FFF;}
</style><!-- end #head -->
<body class = "accomodation">
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
<p>Uskoro...</p>
	</div>
	<!--<div id="main">
<h1>Apartmani Liberan</h1>

<p>Apartmani Liberan nalaze se u Neumu, u mirnom prigradskom naselju, nedaleko od magistrale. Objekat posjeduje četiri apartmana i osam soba. Svi apartmani i sobe uključuju klima-uređaj, TV i internet.</p>
<p>Apartmani su opremljeni zasebnim kuhinjama i kupaonicama, dok sve sobe posjeduju zajedničku kuhinju s hladnjakom i kuhinjskim posuđem, perilicu rublja, te tri zajedničke kupaonice s tušem i besplatnim kozmetičkim priborom.</p>
<p>Konzum, benzinska pumpa i ostale trgovine su udaljene svega par minuta hoda.</p>
<p>Glavna cesta E65 i magistralni put M17.3 se nalaze u blizini objekta.</p>
   	<a href="images/Liberan/BIG/Apartmani_Liberan_01.jpg" data-lightbox="image-group"><img src="images/Liberan/SMALLER/Apartmani_Liberan_01.jpg" alt="Apartmani Liberan" class="central"></a>
    <a href="images/Liberan/BIG/Apartmani_Liberan_02.jpg" data-lightbox="image-group"><img src="images/Liberan/SMALLER/Apartmani_Liberan_02.jpg" alt="Apartmani Liberan" class="central"></a>
    <a href="images/Liberan/BIG/Apartmani_Liberan_03.jpg" data-lightbox="image-group"><img src="images/Liberan/SMALLER/Apartmani_Liberan_03.jpg" alt="Apartmani Liberan" class="central no-margin"></a>
    <a href="images/Liberan/BIG/Apartmani_Liberan_04.jpg" data-lightbox="image-group"><img src="images/Liberan/SMALLER/Apartmani_Liberan_04.jpg" alt="Apartmani Liberan" class="central"></a>
    <a href="images/Liberan/BIG/Apartmani_Liberan_05.jpg" data-lightbox="image-group"><img src="images/Liberan/SMALLER/Apartmani_Liberan_05.jpg" alt="Apartmani Liberan" class="central"></a>
    <a href="images/Liberan/BIG/Apartmani_Liberan_06.jpg" data-lightbox="image-group"><img src="images/Liberan/SMALLER/Apartmani_Liberan_06.jpg" alt="Apartmani Liberan" class="central no-margin"></a>
     <a href="images/Liberan/BIG/Apartmani_Liberan_07.jpg" data-lightbox="image-group"><img src="images/Liberan/SMALLER/Apartmani_Liberan_07.jpg" alt="Apartmani Liberan" class="central"></a>
    <a href="images/Liberan/BIG/Apartmani_Liberan_10.jpg" data-lightbox="image-group"><img src="images/Liberan/SMALLER/Apartmani_Liberan_10.jpg" alt="Apartmani Liberan" class="central"></a>
    <a href="images/Liberan/BIG/Apartmani_Liberan_11.jpg" data-lightbox="image-group"><img src="images/Liberan/SMALLER/Apartmani_Liberan_11.jpg" alt="Apartmani Liberan" class="central no-margin"></a>   



			<h2>Gdje se nalazimo?</h2>
<iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2921.421650635639!2d17.614214115108545!3d42.92723700708701!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x134ba3b430030d1d%3A0xccd28e837bf7128d!2sKardinala+Stepinca%2C+Neum!5e0!3m2!1sen!2sba!4v1531097485412" frameborder="0" allowfullscreen></iframe>
</div><!-- end #main --> 


    <!--   <a href="images/Liberan/BIG/Apartmani_Liberan_08.jpg" data-lightbox="image-group"><img src="images/Liberan/SMALL/Apartmani_Liberan_08.jpg" alt="Apartmani Liberan" class="imgRight"></a>

    <table id="contact">
      <tbody>
        <tr>
          <th colspan="2">KONTAKT</th>
        </tr>
        <tr>
          <td class="table_information">Vlasnik:</td>
          <td>Slobodan Mišetić</td>
		  </tr>
        <tr>
          <td class="table_information">Telefon:</td>
          <td>+387(0)63/350-127</td>
        </tr>
        <tr>
          <td class="table_information">Adresa:</td>
          <td>Kardinala Stepinca br. 25<br>88390 Neum, BiH</td>
        </tr>
        <tr>
        	<td colspan="2"><p class="question">CIJENA NA UPIT</p></td>
       </tr>
      </tbody>
    </table>
<a href="images/Liberan/BIG/Apartmani_Liberan_09.jpg" data-lightbox="image-group"><img src="images/Liberan/SMALL/Apartmani_Liberan_09.jpg" alt="Apartmani Liberan" class="imgRight"></a>
     <!--<a href="images/Liberan/BIG/Apartmani_Liberan_17.jpg" data-lightbox="image-group"><img src="images/Liberan/SMALL/Apartmani_Liberan_17.jpg" alt="Apartmani Liberan" class="central"></a>
    <a href="images/Liberan/BIG/Apartmani_Liberan_12.jpg" data-lightbox="image-group"><img src="images/Liberan/SMALL/Apartmani_Liberan_12.jpg" alt="Apartmani Liberan" class="imgRight"></a>
    <a href="images/Liberan/BIG/Apartmani_Liberan_13.jpg" data-lightbox="image-group"><img src="images/Liberan/SMALL/Apartmani_Liberan_13.jpg" alt="Apartmani Liberan" class="imgRight"></a> 
</aside>
 <script src="lightbox2/src/js/lightbox.js"></script> priprema -->
<aside id="sidebar">
	
</aside>

 <script src="lightbox2/src/js/lightbox.js"></script>
<?php
	include 'inc/footer.php';
	//end #footer
?>
</div><!-- end #wrapper -->
</body>
</html>

