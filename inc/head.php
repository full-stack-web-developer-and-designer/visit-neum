<head id="head">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=3.0">
<!-- meta tags -->
<meta name="robots" content="index,follow">
<meta name="description" content="<?php echo $meta['description']; ?>" />
<meta name="keywords" content="<?php echo $meta['keywords']; ?>" />
<meta name="theme-color" content="#0648A0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!--<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">-->
<meta name="author" content="Mirnes Glamočić">
<!-- Google / Search Engine Tags -->
<meta itemprop="name" content="visit-neum.com/">
<meta itemprop="description" content="<?php echo $meta['description'];?>">
<meta itemprop="image" content="<?php echo $og_image;?>">
<!-- Facebook (meta tags) -->
<meta property="og:title" content="<?php echo $og_title;?>"/>
<meta property="og:type" content="website"/>
<meta property="og:url" content="<?php echo $website_url;?>"/>
<meta property="og:www.visit-neum.com" content="visit-neum"/>
<meta property="fb:admins" content="Mirnes Glamočić"/>
<meta property="og:description" content="<?php echo $meta['description'];?>">
<meta property="og:locale" content="bs-BA" />
<meta property="og:image" content="<?php echo $og_image;?>"/>
<meta property="og:site_name" content="visit-neum.com">
<!-- Twitter Meta Tags -->
<meta name="twitter:card" content="visit-neum.com">
<meta name="twitter:title" content="<?php echo $title;?>">
<meta name="twitter:description" content="<?php echo $meta['description'];?>">
<meta name="twitter:image" content="<?php echo $og_image;?>">
<!--<meta name="twitter:image:alt" content="<?php //echo $image_alt;?>">-->
<!-- include google fonts -->
<link rel="dns-prefetch" href="//fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css?family=Oswald:400,700|Roboto:400,400i,700,700i|Dancing+Script&display=swap&amp;subset=latin-ext" rel="stylesheet"
>
<link rel="icon" href="images/iconified/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="images/apple-touch-icon-iphone-60x60.png">
<link rel="apple-touch-icon" sizes="60x60" href="images/apple-touch-icon-ipad-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-iphone-retina-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="images/apple-touch-icon-ipad-retina-152x152.png">
<link rel="canonical" href="https://www.visit-neum.com/" />
<!-- include fontawesome --> 
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/ae330ac296.js" crossorigin="anonymous"></script>
<!-- lightslider css-->
<link rel="stylesheet" type="text/css" href="lightslider/lightslider.css">
<link rel="stylesheet" href="./CSS/style.css" />
<link rel="stylesheet" href="./CSS/responsive.css" />
<!-- jQuery -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script>
	window.jQuery || document.write("<script src='./JS/jQuery-1.7.2.js'><\/script>");
</script>
<!-- lightslider js-->
<script src="lightslider/lightslider.js"></script> 
<script defer>
var navigation=$.noConflict();
	navigation(document).ready(function($) {
		var respmenu = $('#respmenu');
		var menu = $('#nav>ul');
		$(respmenu).on('click', function(e){
			e.preventDefault();
			menu.slideToggle();
		});
		$(window).resize(function(){
			var sirina = $(window).width();
			if(sirina > 768 && menu.is(':hidden')){
				menu.removeAttr('style');
			}
		});
	});
</script>
<script defer>
window.onorientationchange = function() { 

    var orientation = window.orientation; 

        switch(orientation) { 

            case 0:

            case 90:

            case -90: window.location.reload(); 

            break; } 

};
</script>
<!-- jQuery Modal -->
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
<!--jQuery validate plugin -->
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
<!-- lightbox css -->
<link rel="stylesheet" type="text/css" href="/lightbox2/src/css/lightbox.css">
<!-- jQuery datepicker -->
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/ui-lightness/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script>
	window.jQuery || document.write("<script src='./JS/jQuery-1.12.4.js'><\/script>");
</script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<script>
	window.jQuery || document.write("<script src='./JS/jQuery-1.12.1ui.js'><\/script>");
</script>
<noscript><p class="errorJS">Za ispravan prikaz naše stranice molimo Vas uključite JavaScript u Vašem pretraživaču!</p></noscript>
<title><?php echo $title; ?></title>
</head>