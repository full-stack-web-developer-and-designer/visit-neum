<?php
	require_once 'core/init.php';
$result = Home::get(1);
//require 'classes/Slider.class.php';

//$p = Slider::get(1);
/*DB::getInstance()->query("SELECT username FROM users WHERE username = ?"), array('Vlado Matić'));*/
/*$user = DB::getInstance()->get('users', array('username', '=', 'Vlado Matić'));
	if($user->error()){
		echo 'No user!';
	}else {echo 'OK!';}
	$user = "INSERT INTO users (username, password, salt) VALUES('Hyunjin','password','salt')";*/
?>
<!DOCTYPE html>
<html lang="bs-BA">
<?php	
	$title="Najbolji web-site za Vaše rezervacije u Neumu! | Posjetite odmah!";
    //Check length of title for SEO (50-70 characters)-66
    //echo "Length of title is " . strlen($title) . "characters long." . " ";
	$og_title="Najbolji web-site za sve Vaše rezervacije u Neumu!";
	$website_url="visit-neum.com/Welcome-to-Neum.html";	
	$meta['description']="Pronađite smještaj, restoran, brod, rent-a-car u Neumu, Direktan kontakt s vlasnicima, Neum hoteli, apartmani,vile i sobe, Najpovoljnije cijene smještaja, Posjetite odmah!";
    //Check length of description for SEO (140-180 characters)-174
    //echo "Length of description is " . strlen($meta['description']) . "characters long.";
	$meta['keywords']="Neum, apartmani Neum, sobe Neum, ljetovanje Neum, hoteli Neum, pansioni Neum, privatni smještaj Neum, smjestaj Neum, ljetovanje Neum, Neum apartmani i sobe, sobe Neum, brod ivana neum, apartmani liberan, apartmani mampas, villa matic";
	$og_image="images/Ivana/SMALL/BrodIvana.jpg";
	$image_alt="logo | visit-neum.com";
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
  <div id="p_left"><script>var d = new Date()
  var vrijeme=d.getHours()
  if (vrijeme>=6 && vrijeme<11)
	{document.write("<h1>Dobro jutro," +  " dobrodošli u Neum..." + "</h1>");}
  else if(vrijeme>=11 && vrijeme<17)
	  {document.write("<h1>Dobar dan," +  " dobrodošli u Neum..." + "</h1>");}
  else
	  {document.write("<h1>Dobro veče," +  " dobrodošli u Neum..." + "</h1>");}</script>
  <?php echo $result->render(); ?>		
	<h2>IZDVAJAMO:</h2> 
	</div><!-- end #p_left -->
	
	
	  <div class="main-outer">
	  <div><!-- end .main-outer -->
	  <iframe src="https://www.jabuka.tv/nlb/tecaj.html" scrolling="no" __idm_frm__="8589934611" rel="noreferrer" id="exchangeRates"   sandbox="allow-top-navigation allow-same-origin allow-forms allow-scripts"></iframe></div>
	  <div>
	  
	  <section class='products'>
	  <ul id='autoplay' class='cs-hidden'>
	  <?php
	$test = new Slider();
	$test->renderSlider();
?>
</ul>
</section>
<!--end #products -->
<script src='JS/slider.js'></script>
	  </div>
	  </div><!-- end .main-outer -->  
  </div><!-- end #main -->
  <aside id="sidebar"> 
  <?php include 'inc/weather.inc'; ?>
  </aside><!-- end #sidebar --> 
<?php include 'inc/footer.php'; //end #footer ?>   
</div><!-- end #wrapper -->
</body>
</html>