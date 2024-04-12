<?php
	require_once 'core/init.php';
	$header = Header::get(1);
?>
<!DOCTYPE html>
<html lang="bs-BA">
	<?php
		$title="Gre&scaron;ka 403";
		$og_title="Gre&scaron;ka 403";
		$website_url="https://visit-neum.com/error403.html";
		$meta['description']="Nemate pravo pristupa zabranjenom folderu!";
		$meta['keywords']="";
		$og_image="images/error.403.png";
		$twitter_image="images/error.403.png";
		$image_alt="Gre&scaron;ka!";
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
				<?php echo $header->render(); ?>
			</header>
			<?php include 'inc/nav.inc'; ?>

			<div id="main">
				<p><b><i>"Nemate pravo pristupa sadržaju foldera!"</i></b></p>
			</div>

			<aside id="sidebar">
				<?php include 'inc/weather.inc'; ?>
			</aside>

			<?php include 'inc/footer.php'; ?>
		</div><!-- end #wrapper -->
	</body>
</html>
