<?php
     class Meta extends Entity{
        public static $tableName = 'meta';
	    public static $keyColumn = 'meta_id';
        // Fetch data from MySQL using PDO - PHP Data Object
        // Remove Warning Deprecated
        public $meta_id; 
        public $website_url;
        public $og_image;
        public $image_alt;
        public $twitter_image;

        public function render(){
            $render = "
              <head>
                <!-- Wow! Welcome to my code. If you need a professional website don't hesitate to contact me: contact@mirnesglamocic.com -->
                <meta charset=\"UTF-8\">
                <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
                <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=3.0\">
                <title>$this->title</title>
                <meta name=\"description\" content=\"$this->description\">
                <meta name=\"author\" content=\"Mirnes Glamočić\">
                <meta name=\"robots\" content=\"index,follow\">
                <meta name=\"theme-color\" content=\"#0648A0;\">

                <!-- Facebook & Viber -->
                <meta name=\"title\" property=\"og:title\" content=\"$this->title\">

                <!-- Facebook, Viber, LinkedIn, Whatsapp & KakaoTalk(meta tags) -->
                <meta property=\"og:url\" content=\"https://$this->website_url\">
                <meta property=\"og:type\" content=\"website\">
                <meta property=\"og:image\" content=\"https://visit-neum.com/gallery/$this->og_image\">
                <meta property=\"og:image:type\" content=\"image/jpg\">
                <meta property=\"og:image:width\" content=\"1200\">
                <meta property=\"og:image:height\" content=\"630\">
                <meta property=\"og:image:alt\" content=\"$this->image_alt\">
                <meta property=\"og:site_name\" content=\"$this->title\">
                <meta property=\"og:locale\" content=\"bs-BA\">
                <meta property=\"fb:app_id\" content=\"986204576263666\">

                <!-- LinkedIn, Whatsapp & KakaoTalk(meta tag) -->
                <meta property=\"og:title\" content=\"$this->title\">
                
                <!-- Twitter Meta Tags -->
                <meta name=\"twitter:card\" content=\"summary\">
                <meta name=\"twitter:title\" content=\"$this->title\">
                <meta name=\"twitter:description\" content=\"$this->description\">
                <meta name=\"twitter:image:src\" content=\"https://visit-neum.com/gallery/$this->twitter_image\">
                <meta name=\"twitter:image:alt\" content=\"$this->image_alt\">
                
                <!-- Google / Search Engine Tags -->
                <meta itemprop=\"name\" content=\"visit-neum.com\">
                <meta itemprop=\"description\" content=\"$this->description\">
                <meta itemprop=\"image\" content=\"$this->og_image\">

                <!-- include google fonts -->
                <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
                <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
                <link rel=\"dns-prefetch\" href=\"//fonts.googleapis.com\">
                <link href=\"https://fonts.googleapis.com/css?family=Oswald:400,700%7CRoboto:400,400i,700,700i%7CDancing+Script&display=swap&amp;subset=latin-ext\" rel=\"stylesheet\">

                <!-- favicons -->
				<link rel=\"icon\" href=\"favicon.ico\" type=\"image/x-icon\">
                <link rel=\"apple-touch-icon\" href=\"apple-touch-icon-iphone-60x60.png\">
				<link rel=\"apple-touch-icon\" sizes=\"60x60\" href=\"apple-touch-icon-ipad-76x76.png\">
				<link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"apple-touch-icon-iphone-retina-120x120.png\">
				<link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"apple-touch-icon-ipad-retina-152x152.png\">
                <link rel=\"canonical\" href=\"https://$this->website_url\">
				<!-- include fontawesome --> 
				<link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.0.10/css/all.css\" integrity=\"sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg\" crossorigin=\"anonymous\">
				<script rel=\"preconnect\" src=\"https://kit.fontawesome.com/ae330ac296.js\" crossorigin=\"anonymous\"></script>
				<!-- lightslider css-->
				<link rel=\"stylesheet\" type=\"text/css\" href=\"lightslider/lightslider.min.css\">
				<!-- lightbox css -->
				<link rel=\"stylesheet\" type=\"text/css\" href=\"/lightbox2/src/css/lightbox.min.css\">
                <!-- Desktop CSS -->
				<link rel=\"stylesheet\" href=\"/CSS/style.min.css\">
				<!-- Mobile CSS -->
				<link rel=\"stylesheet\" href=\"/CSS/responsive.min.css\">
				<!-- jQuery -->
				<script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
				<script>
					window.jQuery || document.write(\"<script src='./JS/jQuery-1.7.2.min.js'><\/script>\");
				</script>
				<!-- lightslider js-->
				<script src=\"lightslider/lightslider.min.js\"></script> 
				<script>
					var navigation=$.noConflict();navigation(document).ready(function(n){var e=n(\"#respmenu\"),i=n(\"#nav>ul\");n(e).on(\"click\",function(n){n.preventDefault(),i.slideToggle()}),n(window).resize(function(){n(window).width()>768&&i.is(\":hidden\")&&i.removeAttr(\"style\")})});
				</script>
                <!-- page reload if the user changes mobile orientation -->
            	<script>
					window.onorientationchange=function(){var a=window.orientation;switch(a){case 0:case 90:case -90:window.location.reload()}};
				</script>
				<!-- jQuery Modal -->
				<script defer src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js\"></script>
				<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css\">
				<!--jQuery validate plugin -->
				<script defer src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js\"></script>
                <!-- jQuery datepicker -->
				<link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/ui-lightness/jquery-ui.css\">
				<script src=\"https://code.jquery.com/jquery-1.12.4.min.js\"></script>
				<script>
					window.jQuery || document.write(\"<script src='./JS/jQuery-1.12.4.min.js'><\/script>\");
				</script>
				<script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.min.js\"></script>
				<script>
					window.jQuery || document.write(\"<script src='./JS/jQuery-1.12.1-ui.min.js'><\/script>\");
				</script>
				<script>
   					$(document).bind(\"mobileinit\",function(){-1!=navigator.userAgent.indexOf(\"Android\")&&($.mobile.defaultPageTransition=\"none\",$.mobile.defaultDialogTransition=\"none\",$.mobile.transitionFallbacks.slideout=\"none\")});
				</script>
				<!-- Google tag (gtag.js) -->
				<script async src=\"https://www.googletagmanager.com/gtag/js?id=G-B5G3QT9BQ7\"></script>
				<script>
  					window.dataLayer = window.dataLayer || [];
  					function gtag(){dataLayer.push(arguments);}
  					gtag('js', new Date());

					gtag('config', 'G-B5G3QT9BQ7');
				</script>
            </head>";
        
        return $render;

        }
    }