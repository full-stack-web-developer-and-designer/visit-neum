<!DOCTYPE html>
<html lang="bs-BA">
<?php		
	$title="Gre&scaron;ka 403";
	$og_title="Gre&scaron;ka 403";
	$website_url="www.visit-neum.com/";
	$meta['description']="Nemate pravo pristupa zabranjenom folderu!";
	$meta['keywords']="";
	$og_image="images/error.403.png";
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
	<?php
	include 'inc/header.inc';
	//end #header
	include 'inc/nav.inc';
	//end #nav
	?>
<div id="main"><p><b><i>"Zabranjeno Vam je da pregledate naše foldere!"</i></b></p></div>
<aside id="sidebar"><?php include 'inc/weather.inc'; ?></aside><!-- end #sidebar --> 
<?php
	include 'inc/footer.inc';
	//end #footer
?>
</div><!-- end #wrapper -->
</body>
</html>