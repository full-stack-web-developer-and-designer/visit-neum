<?php
	require_once 'core/init.php';
$postArr = Header::get(1)
?>
<!DOCTYPE html>
<html lang="bs-BA">
<?php	
	$title="Najbolji i Najudbniji restorani u Neumu | Posjetite odmah!";
    //Check length of title for SEO (50-70 characters)
    echo "Length of title is " . strlen($title) . "characters long." . " ";
	$meta['description']="Na našem sajtu pronaći ćete najbolje, najudobnije i najotmjenije restorane u Neumu – pronađite i rezervišite restoran za svoj objed sa najukusnijim jelima";
     //Check length of description for SEO (140-180 characters)
    //echo "Length of description is " . strlen($meta['description']) . "characters long.";
	$meta['keywords']="restorani neum, pizzerije neum, najbolji restorani u neumu, najbolja hrana u neumu, brod ivana neum";
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
  //include 'inc/header.php'; 
?>
</header><!-- end #header -->
<?php
  include 'inc/nav.inc'; //end #nav
?>
	<div id="main">
<p>Uskoro...</p>
	</div>
<aside id="sidebar">
	
</aside>

 <script src="./lightbox2/src/js/lightbox.js"></script>
<?php
	include './inc/footer.php';
	//end #footer
?>
</div><!-- end #wrapper -->
</body>
</html>
