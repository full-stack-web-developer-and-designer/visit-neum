<?php
require_once 'core/init.php';
$postArr = Header::get(1);
$result = Hotels::get(1);
?>
<!DOCTYPE html>
<html lang="bs-BA">
<script defer src="JS/slider.js"></script>
<?php	
	$title="Najbolji Hoteli u Neumu | Najniže cijene smještaja |Posjetite odmah!";
    //Check length of title for SEO (50-70 characters)
    //echo "Length of title is " . strlen($title) . "characters long." . " ";
	$meta['description']="Najbolji, najpovoljniji, najudobniji i najluksuzniji Hoteli u Neumu, Bosna i Hercegovina – pronađite i rezervišite smještaj za svoje putovanje.";
    //Check length of description for SEO (140-180 characters)
    // echo "Length of description is " . strlen($meta['description']) . "characters long.";
	$meta['keywords']="neum, hoteli, Hoteli neum, apartmani, sobe, ljetovanje, pansioni, privatni smještaj, smjestaj, ljetovanje neum, neum apartmani i sobe";
	include 'inc/head.php';
	//end #head
?>

<body class="accomodation">

<div id="wrapper">
<header id="header" class="cf">
<?php 
  echo $postArr->render(); 	
  include 'inc/header.php'; 
?>
</header><!-- end #header -->
<?php
  include 'inc/nav.inc'; //end #nav
?>
	
<div id="main">
<?php echo $result->render(); ?> 
<section class="offers">
	<!-- slider box -->
	<ul id="autoplay" class="cs-hidden">
	<?php
	$hotel = new HotelSlide();
	$hotel->renderSlider();
	?>
    </ul>
	</section><!--end .offers-->
	
</div><!-- end #main -->

<aside id="sidebar"> 
	<?php
       include 'inc/weather.inc';
	?>
</aside><!-- end #sidebar -->
  
<?php
	include 'inc/footer.php';
	//end #footer
?>
</div><!-- end #wrapper -->

</body>
</html>