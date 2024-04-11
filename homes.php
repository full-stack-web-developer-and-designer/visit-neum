<?php
	require_once 'core/init.php';
$header = Header::get(1);
$categories = Categories::get(5);
?>
<!DOCTYPE html>
<html lang="bs-BA">
<?php	
	$title="Najbolje kuće za odmor u Neumu | Najniže cijene smještaja!";
    //Check length of title for SEO (50-70 characters) - 61
    //echo "Length of title is " . strlen($title) . "characters long." . " ";
	$meta['description']="Najbolje, najjeftinije i najudobnije kuće za odmor u Neumu, Bosna i Hercegovina – pronađite i rezervišite smještaj za svoje putovanje. Direktan kontakt s vlasnicima!";
    //Check length of description for SEO (140-180 characters)
    //echo "Length of description is " . strlen($meta['description']) . "characters long.";
	$meta['keywords']="sobe neum, neum sobe, apartmani i sobe, apartmani mampas, apartmani liberan, sobe, ljetovanje, hoteli, pansioni, privatni smještaj, smjestaj, ljetovanje neum, neum apartmani i sobe, kuće za odmor neum, kuća za odmor";
	$website_url="https://visit-neum.com";
	$og_image="./gallery/visit-neum.jpg";
	$twitter_image="./gallery/visit-neum.webp";
	$image_alt="logo | visit-neum.com";
	include 'inc/head.php';
	//end #head
?>
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
	<?php echo $categories->render(); ?>
	<section class="offers">
	<!-- slider box -->
	<?php
	$home = new HomeSlide();
	$home->renderSlider();
	?>
</section><!--end .offers-->
</div><!-- end #main -->
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