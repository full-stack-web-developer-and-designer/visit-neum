<?php
	require_once 'core/init.php';
$postArr = Header::get(1);
?>
<!DOCTYPE html>
<html lang="bs-BA">
<?php	
	$title="Gre&scaron;ka";
	$og_title="Gre&scaron;ka";
	$website_url="www.visit-neum.com/";
	$meta['description']="Tra&zcaron;ena stranica ne postoji!";
	$meta['keywords']="";
	$og_image="images/error.404.png";
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
<?php 
  echo $postArr->render(); 	
  include 'inc/header.php'; 
?>
</header><!-- end #header -->
<?php
  include 'inc/nav.inc'; //end #nav
?>
<div id="main"><p><b><i>"Tra&zcaron;ena stranica ne postoji! Provjerite da li ste dobro unijeli adresu!"</i></b></p></div>
<aside id="sidebar"><?php include 'inc/weather.inc'; ?></aside><!-- end #sidebar --> 
<?php
	include 'inc/footer.php';
	//end #footer
?>
</div><!-- end #wrapper -->
</body>
</html>
