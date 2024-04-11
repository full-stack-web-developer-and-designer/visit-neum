<?php
require_once 'core/init.php';
$header= Header::get(1);
$categories = Categories::get(2);
?>
<!DOCTYPE html>
<html lang="bs-BA">
<?php	
	$title="Najbolji Apartmani u Neumu! | Najniže cijene smještaja!";
	$meta['description']="Pronađite najbolje, najpovoljnije i najudobnije apartmane u Neumu! Direktan kontakt s vlasnicima! Prekrasni apartmani s pogledom na more! Najpovoljnije cijene smještaja! Posjetite odmah!";
	$meta['keywords']="neum, apartmani, najbolji apartmani u neumu, najjeftiniji apartmani u Neumu, apartmani mampas, apartmani liberan, sobe, ljetovanje, hoteli, pansioni, privatni smještaj, smjestaj, ljetovanje neum, neum apartmani i sobe, neum aparmani cijene";
	$website_url="https://visit-neum.com/the-best-apartments-in-neum.html";
	$og_image="./gallery/visit-neum.jpg";
	$twitter_image="./gallery/visit-neum.webp";
	$image_alt="logo | visit-neum.com";
	include 'inc/head.php';
	//end #head
?>
<body class = "accomodation">
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
					$apart = new ApartSlide();
					$apart->renderSlider();
					?>
				</section><!--end .offers-->
		</div><!-- end #main -->

		<aside id="sidebar">
			<?php include 'inc/weather.inc'; ?>
		</aside><!-- end #sidebar -->

		<?php include 'inc/footer.php' ?>
	</div><!-- end #wrapper -->
</body>
</html>
