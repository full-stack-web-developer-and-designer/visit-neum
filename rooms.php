<?php
	require_once 'core/init.php';
$header = Header::get(1);
$categories = Categories::get(4);
?>
<!DOCTYPE html>
<html lang="bs-BA">
<?php	
	$title="Najbolje Sobe u Neumu | Najniže cijene smještaja! | Posjetite odmah!";
    //Check length of title for SEO (50-70 characters)
    //echo "Length of title is " . strlen($title) . "characters long." . " ";
	$meta['description']="Najbolje, najjeftinije i najudobnije sobe u Neumu, Bosna i Hercegovina – pronađite i rezervišite smještaj za svoje putovanje. Direktan kontakt s vlasnicima!";
    //Check length of description for SEO (140-180 characters)
    //echo "Length of description is " . strlen($meta['description']) . "characters long.";
	$meta['keywords']="sobe neum, neum sobe, apatmani i sobe, apartmani mampas, apartmani liberan, sobe, ljetovanje, hoteli, pansioni, privatni smještaj, smjestaj, ljetovanje neum, neum apartmani i sobe";
	$website_url="https://visit-neum.com";
	$og_image="./gallery/visit-neum.jpg";
	$twitter_image="./gallery/visit-neum.webp";
	$image_alt="logo | visit-neum.com";
	include 'inc/head.php';
?>
<style>
	.accomodation #main {margin: 0 0 10px 0;}
	#main p{text-align: center;}
	#sidebar{background: #FFF;}
</style>
<body class="accomodation">
<div id="wrapper">
<header id="header" class="cf">
<?php 
  echo $header->render();
?>
</header><!-- end #header -->
<?php
  include 'inc/nav.inc'; //end #nav
?>
	<div id="main">
		<?php //echo $categories->render(); ?>
		<p>Uskoro...</p>
	</div>
<aside id="sidebar">
	<?php include 'inc/weather.inc'; ?>
</aside><!-- end #sidebar --> 
<?php
	include 'inc/footer.php';
	//end #footer
?>
</div><!-- end #wrapper -->
</body>
</html>