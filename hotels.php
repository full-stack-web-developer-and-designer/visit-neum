<?php
require_once 'core/init.php';
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
      <li class="item-a"><article class="offer">
		<a href="Hotel-Villa-Matic.html"><img src="images/Matic/SMALL/HotelVillaMatic.jpg" alt="Hotel Villa Matić"><span><h2>Hotel Villa Matić</h2></span></a>
		</article><!--end .offer--></li>
	</ul>
	
	</section><!--end .offers-->
	
</div><!-- end #main -->

<aside id="sidebar"> 
	<?php
       include 'inc/weather.inc';
	?>
</aside><!-- end #sidebar -->
  
<?php
	include 'inc/footer.inc';
	//end #footer
?>
</div><!-- end #wrapper -->

</body>
</html>