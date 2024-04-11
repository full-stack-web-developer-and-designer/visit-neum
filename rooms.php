<?php
	require_once 'core/init.php';
	$header = Header::get(1);
	$categories = Categories::get(4);
?>
<!DOCTYPE html>
<html lang="bs-BA">
	<?php	
		$title="Najbolje Sobe u Neumu | Najniže cijene smještaja! | Posjetite odmah!";
		$meta['description']="Najbolje, najjeftinije i najudobnije sobe u Neumu, Bosna i Hercegovina – pronađite i rezervišite smještaj za svoje putovanje. Direktan kontakt s vlasnicima!";
		$meta['keywords']="sobe neum, neum sobe, apatmani i sobe, apartmani mampas, apartmani liberan, sobe, ljetovanje, hoteli, pansioni, privatni smještaj, smjestaj, ljetovanje neum, neum apartmani i sobe";
		$website_url="https://visit-neum.com/the-best-rooms-in-neum.html";
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
				<?php echo $header->render(); ?>
			</header>
		
			<?php include 'inc/nav.inc'; ?>

			<div id="main">
				<?php //echo $categories->render(); ?>
				<p>Uskoro...</p>
			</div>
			
			<aside id="sidebar">
				<?php include 'inc/weather.inc'; ?>
			</aside><!-- end #sidebar --> 
			
			<?php include 'inc/footer.php'; ?>

		</div><!-- end #wrapper -->
	</body>
</html>