<?php
	require_once 'core/init.php';
	$header = Header::get(1)
?>
<!doctype html>
<html lang="bs-BA">
	<?php	
		$title="Najbolji Rent-a-car - Neum, Siguran najam vozila | Posjetite odmah!";
		$meta['description']="Najbolja i najudobnija vozila u Neumu, Bosna i Hercegovina – pronađite i rezervišite rent-a-car vozilo po svome ukusu";
		$meta['keywords']="neum, rent-a-car, najam vozila u neumu, ljetovanje,  ljetovanje neum, neum odmor, vožnja, automobili";
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
	
	<body class = "accomodation">
		<div id="wrapper">
			<header id="header" class="cf">
			<?php 
			echo $header->render();
			?>
			</header>
		
			<?php include 'inc/nav.inc'; ?>
			
			<div id="main">
				<p>Uskoro...</p>
			</div>

			<aside id="sidebar">
				
			</aside>

			<?php include 'inc/footer.php'; ?>

		</div><!-- end #wrapper -->
		<script src="lightbox2/src/js/lightbox.min.js"></script>
	</body>
</html>
