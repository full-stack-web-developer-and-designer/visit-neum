<?php
	require_once 'core/init.php';
$postArr = Header::get(1);
$result = Categories::get(3);
?>
<!DOCTYPE html>
<html lang="bs-BA">
<?php	
	$title="Najbolje Ville u Neumu | Najniže cijene smještaja | Posjetite odmah!";
    //Check length of title for SEO (50-70 characters)
    echo "Length of title is " . strlen($title) . "characters long." . " ";
	$meta['description']="Najbolje, najpovoljnije, najudobnije i najluksuznije Ville u Neumu, Bosna i Hercegovina – pronađite i rezervišite smještaj za svoje putovanje.";
    //Check length of description for SEO (140-180 characters)
    //echo "Length of description is " . strlen($meta['description']) . "characters long.";
	$meta['keywords']="neum, ville, vile, neum vile, neum apartmani, apartmani mampas, apartmani liberan, sobe, ljetovanje, hoteli, pansioni, privatni smještaj, smjestaj, ljetovanje neum, neum apartmani i sobe";
	include 'inc/head.php';
?>
<style>
#main p{text-align: center;}
#sidebar{background: #FFF;}
</style><!-- end #head -->
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
<p>Uskoro...</p>
	</div>
<aside id="sidebar">
	
</aside>

 <script src="lightbox2/src/js/lightbox.js"></script>
<?php
	include 'inc/footer.php';
	//end #footer
?>
</div><!-- end #wrapper -->
</body>
</html>
