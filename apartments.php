<?php
require_once 'core/init.php';
$result = Apartments::get(1);
?>
<!DOCTYPE html>
<html lang="bs-BA">
<?php	
	$title="Najbolji Apartmani u Neumu/Najniže cijene smještaja/Posjetite odmah!";
    //Check length of title for SEO (50-70 characters)
    //echo "Length of title is " . strlen($title) . "characters long." . " ";
	$meta['description']="Najbolji, najpovoljniji, najudobniji i najluksuzniji Apartmani u Neumu, Bosna i Hercegovina – pronađite i rezervišite smještaj za svoje putovanje.";
    //Check length of description for SEO (140-180 characters)
    //echo "Length of description is " . strlen($meta['description']) . "characters long.";
	$meta['keywords']="neum, apartmani, apartmani mampas, apartmani liberan, sobe, ljetovanje, hoteli, pansioni, privatni smještaj, smjestaj, ljetovanje neum, neum apartmani i sobe";
	include 'inc/head.php';
	//end #head
?>
<body class = "accomodation">
<div id="wrapper">
	<?php
	include 'inc/header.php';
	//end #header
	include 'inc/nav.inc';
	//end #nav
	?>
<div id="main">
<?php echo $result->render(); ?> 
<section class="offers">
	<!-- slider box -->
	<ul id="autoplay" class="cs-hidden">
	<?php
	$apart = new ApartSlide();
	$apart->renderSlider();
	?>
    </ul>
	</section><!--end .offers-->
	<script src='JS/slider.js'></script>
</div><!-- end #main -->
<aside id="sidebar"> 
	<?php
       include 'inc/weather.inc';
	?>
</aside><!-- end #sidebar -->
  
<?php 
	include 'inc/footer.php'
	//end #footer
?>
  
</div><!-- end #wrapper -->
</body>
</html>
