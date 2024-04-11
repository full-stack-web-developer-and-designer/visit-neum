<?php
	require_once 'core/init.php';
	$header = Header::get(1);
	$categories = Categories::get(1);
?>
<!DOCTYPE html>
<html lang="bs-BA">
<?php	
	$title="Najbolji Hoteli u Neumu | Najniže cijene smještaja |Posjetite odmah!";
	$meta['description']="Najbolji, najpovoljniji, najudobniji i najluksuzniji Hoteli u Neumu, Bosna i Hercegovina – pronađite i rezervišite smještaj za svoje putovanje.";
	$meta['keywords']="neum, hoteli, Hoteli neum, apartmani, sobe, ljetovanje, pansioni, privatni smještaj, smjestaj, ljetovanje neum, neum apartmani i sobe";
	$website_url="https://visit-neum.com/the-best-hotels-in-neum.html";
	$og_image="./gallery/visit-neum.jpg";
	$twitter_image="./gallery/visit-neum.webp";
	$image_alt="logo | visit-neum.com";
	include 'inc/head.php';
?>

	<body class="accomodation">

		<div id="wrapper">
			<header id="header" class="cf">
				<?php echo $header->render(); ?>
			</header>
			
			<?php include 'inc/nav.inc'; ?>
			
			<div id="main">
				<?php echo $categories->render(); ?>
					<section class="offers">
						<!-- slider box -->
						<?php
						$hotel = new HotelSlide();
						$hotel->renderSlider();
						?>
					</section><!--end .offers-->
			</div><!-- end #main -->

			<aside id="sidebar">
				<?php include 'inc/weather.inc'; ?>
			</aside><!-- end #sidebar -->
		
			<?php include 'inc/footer.php'; ?>

		</div><!-- end #wrapper -->

	</body>
</html>