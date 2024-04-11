<?php
	require_once 'core/init.php';
	$header = Header::get(1);
	$categories = Categories::get(5);
?>
<!DOCTYPE html>
<html lang="bs-BA">
	<?php	
		$title="Najbolji i Najudbniji restorani u Neumu | Posjetite odmah!";
		$meta['description']="Na našem sajtu pronaći ćete najbolje, najudobnije i najotmjenije restorane u Neumu – pronađite i rezervišite restoran za svoj objed sa najukusnijim jelima";
		$meta['keywords']="restorani neum, pizzerije neum, najbolji restorani u neumu, najbolja hrana u neumu, brod ivana neum";
		$website_url="https://visit-neum.com/the-best-restaurants-in-neum.html";
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
			</div><!-- end #main -->

			<aside id="sidebar">
				<?php include 'inc/weather.inc'; ?>
			</aside>

			<?php include 'inc/footer.php'; ?>
			
		</div><!-- end #wrapper -->
	</body>
</html>