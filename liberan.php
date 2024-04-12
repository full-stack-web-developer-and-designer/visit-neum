<?php
require_once 'core/init.php';
$pages_id=5;
$result = Pages::get(5);
$postArr = Header::get(1);
?>
<!DOCTYPE html>
<html lang="bs-BA">
<?php
	$title = "Apartmani Liberan, Neum| Najpovoljnije cijene smještaja!";
  //Check length of title for SEO (50-60 characters) -57
  //echo "Length of title is " . strlen($title) . "characters long." . " ";
  $og_title=$title;
  $website_url="https://www.visit-neum.com/Apartments-Liberan.html";
  $meta['description'] = "Apartmani Liberan nalaze se u Neumu te nude besplatni WiFi, vrt i terasu.Pojedine jedinice imaju kuhinju s hladnjakom.Mlađi gosti mogu se zabaviti na dječijem igralištu...";
   //Check length of description for SEO (140-180 characters) - 174
   // echo "Length of description is " . strlen($meta['description']) . "characters long.";
  $og['description']=$meta['description'];
	$meta['keywords'] = "neum, apartmani, apartmani liberan, liberan, sobe liberan, ljetovanje neum, privatni smještaj neum, neum smještaj, neum smjestaj, neum apartmani i sobe, neum sobe, hoteli neum, pansioni neum, ";
  $og_image="/gallery/og_image.jpg";
	$image_alt="logo | visit-neum.com";
  include 'inc/head.php';
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
?>
</header><!-- end #header -->
<?php
  include 'inc/nav.inc'; //end #nav
?>
  <div id="main">
<p>Uskoro...</p>
	</div><!-- end #main -->
<aside id="sidebar">
	
</aside><!-- end #sidebar -->
  <script defer src="lightbox2/src/js/lightbox.js"></script>
<?php
	include_once 'inc/footer.php';
	//end #footer
?>
</div><!-- end #wrapper -->
</body>
</html>

