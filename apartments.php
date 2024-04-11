<?php
require_once 'core/init.php';
$header= Header::get(1);
$categories = Categories::get(2);
?>
<!DOCTYPE html>
<html lang="bs-BA">
<?php	
	$title="Najbolji Apartmani u Neumu! | Najniže cijene smještaja!";
    //Check length of title for SEO (50-70 characters) - 57
    //echo "Length of title is " . strlen($title) . "characters long." . " ";
	$meta['description']="Pronađite najbolje, najpovoljnije i najudobnije apartmane u Neumu! Direktan kontakt s vlasnicima! Prekrasni apartmani s pogledom na more! Najpovoljnije cijene smještaja! Posjetite odmah!";
    //Check length of description for SEO (140-180 characters)-188
    //echo "Length of description is " . strlen($meta['description']) . "characters long.";
	$meta['keywords']="neum, apartmani, najbolji apartmani u neumu, najjeftiniji apartmani u Neumu, apartmani mampas, apartmani liberan, sobe, ljetovanje, hoteli, pansioni, privatni smještaj, smjestaj, ljetovanje neum, neum apartmani i sobe, neum aparmani cijene";
	$website_url="https://visit-neum.com/The-Best-Apartments-in-Neum.html";
	$og_image="./gallery/visit-neum.jpg";
	$twitter_image="./gallery/visit-neum.webp";
	$image_alt="logo | visit-neum.com";
	include 'inc/head.php';
	//end #head
?>
<body class = "accomodation">
<div id="wrapper">
<header id="header" class="cf">
<?php 
  echo $header->render(); 	
?>
</header><!-- end #header -->
<?php
  include 'inc/nav.inc'; //end #nav
?>
	
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
