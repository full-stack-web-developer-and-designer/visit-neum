<?php
	require_once 'core/init.php';
	$header = Header::get(1);
	$page = Pages::get(1);
?>
<!DOCTYPE html>
<html lang="bs-BA">
<?php	
	$title="Najbolji web-site za sve Vaše rezervacije u Neumu! | Posjetite odmah!";
	$meta['description']="Pronađite smještaj, restoran, brod, rent-a-car u Neumu, Direktan kontakt s vlasnicima, Neum hoteli, apartmani,vile i sobe, Najpovoljnije cijene smještaja, Posjetite odmah!";
	$meta['keywords']="Neum, apartmani Neum, sobe Neum, ljetovanje Neum, hoteli Neum, pansioni Neum, privatni smještaj Neum, smjestaj Neum, ljetovanje Neum, Neum apartmani i sobe, sobe Neum, brod ivana neum, apartmani liberan, apartmani mampas, villa matic";
	$website_url="https://visit-neum.com";
	$og_image="./gallery/visit-neum.jpg";
	$twitter_image="./gallery/visit-neum.webp";
	$image_alt="logo | visit-neum.com";
	include 'inc/head.php';
?>
<body class = "accomodation">
	<div id="wrapper">
		<header id="header" class="cf">
		<?php
		echo $header->render();
		?>
		</header>
		<?php include 'inc/nav.inc'; ?>
		<div id="main">
			<div id="p_left"><script>var d=new Date,vrijeme=d.getHours();vrijeme>=6&&vrijeme<11?document.write("<h1><small id='title'>Dobro jutro,</small> Dobrodošli u Neum...</h1>"):vrijeme>=11&&vrijeme<17?document.write("<h1><small id='title'>Dobar dan,</small> Dobrodošli u Neum...</h1>"):document.write("<h1><small id='title'>Dobro veče,</small> Dobrodošli u Neum...</h1>");</script>
			<?php echo $page->render(); ?>
				<h2>IZDVAJAMO:</h2>
			</div><!-- end #p_left -->

			<div class="main-outer">
				<div>
					<iframe src="https://www.jabuka.tv/nlb/tecaj.html" scrolling="no" __idm_frm__="8589934611" rel="noreferrer" id="exchangeRates"   sandbox="allow-top-navigation allow-same-origin allow-forms allow-scripts" title="Tečajni kalkulator"></iframe>
				</div>
				<div>
					<section class='products'>
						<ul id='autoplay' class='cs-hidden'>
						<?php
							$index = new Slider();
							$index->renderSlider();
						?>
						</ul>
					</section>
					<!--end #products -->
					<script src='JS/slider.min.js'></script>
				</div>
			</div><!-- end .main-outer -->
		</div><!-- end #main -->
		<aside id="sidebar">
			<?php include 'inc/weather.inc'; ?>
		</aside><!-- end #sidebar -->
		<?php include 'inc/footer.php'; ?>
	</div><!-- end #wrapper -->
</body>
</html>