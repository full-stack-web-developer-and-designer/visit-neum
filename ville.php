<?php
	require_once 'core/init.php';
	$header = Header::get(1);
	$categories = Categories::get(3);
?>
<!DOCTYPE html>
<html lang="bs-BA">
<?php	
	$title="Najbolje Ville u Neumu | Najniže cijene smještaja | Posjetite odmah!";
	$meta['description']="Najbolje, najpovoljnije, najudobnije i najluksuznije Ville u Neumu, Bosna i Hercegovina – pronađite i rezervišite smještaj za svoje putovanje.";
	$meta['keywords']="neum, ville, vile, neum vile, neum apartmani, apartmani mampas, apartmani liberan, sobe, ljetovanje, hoteli, pansioni, privatni smještaj, smjestaj, ljetovanje neum, neum apartmani i sobe";
	$website_url="https://.visit-neum.com/the-best-villas-in-neum.html";
	$og_image="./gallery/visit-neum.jpg";
	$twitter_image="./gallery/visit-neum.webp";
	$image_alt="logo | visit-neum.com";
	include 'inc/head.php';
?>
<style>
	.accomodation #main {margin: 0 0 10px 0;}
	#main p{text-align: center;}
	#sidebar{background: #FFF;}
</style><!-- end #head -->
<body class="accomodation">
<div id="wrapper">
<header id="header" class="cf">
<?php 
  echo $header->render();
?>
</header>
<?php
  include 'inc/nav.inc';
?>
<div id="main">
	<?php echo $categories->render(); ?>
	<section class="offers" aria-label='Najbolje i najjeftinije Ville u Neumu'>
						<!-- slider box -->
						<?php
						$villa = new VillaSlide();
						$villa->renderSlider();
						?>
					</section><!--end .offers-->
</div><!-- end #main --> 
<aside id="sidebar">
	<?php include 'inc/weather.inc'; ?>
</aside><!-- end #sidebar --> 
<?php
	include 'inc/footer.php';
?>
</div><!-- end #wrapper -->
</body>
</html>