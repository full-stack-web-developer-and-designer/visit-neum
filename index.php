<?php
	require_once 'core/init.php';
	$meta = Meta::get(1);
	$header = Header::get(1);
	$pages_id=1;
	$page = Pages::get(1);
?>
<!DOCTYPE html>
<html itemscope lang="bs-BA">
	<?php
		echo $meta->render();
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
				<div id="p_left">
				<?php echo $page->render(); ?>
					<h2>IZDVAJAMO:</h2>
				</div><!-- end #p_left -->

				<div class="main-outer">
					<!--<div>
						<iframe src="https://www.jabuka.tv/nlb/tecaj.html" scrolling="no" rel="noreferrer" id="exchangeRates"   sandbox="allow-top-navigation allow-same-origin allow-forms allow-scripts" title="Tečajni kalkulator"></iframe>
					</div>-->
					<div>
						<section class='products' aria-label='Najbolji i najjeftiniji hoteli, apartmani, ville i sobe u Neumu'>
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