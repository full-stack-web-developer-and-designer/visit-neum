<?php
	require_once 'core/init.php';
	$header = Header::get(1);
	$categories = Categories::get(5);
?>
<!DOCTYPE html>
<html itemscope lang="bs-BA">
	<?php	
		$title="Najbolje kuće za odmor u Neumu | Najniže cijene smještaja!";
		$meta['description']="Najbolje, najjeftinije i najudobnije kuće za odmor u Neumu, Bosna i Hercegovina – pronađite i rezervišite smještaj za svoje putovanje. Direktan kontakt s vlasnicima!";
		$website_url="https://visit-neum.com/the-best-homes-in-neum.html";
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
				<section class="offers" aria-label='Najbolje i najjeftinije kuće za odmor u Neumu'>
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
			
			<?php include 'inc/footer.php'; ?>

		</div><!-- end #wrapper -->
	</body>
</html>