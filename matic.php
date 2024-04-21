<?php
  require_once 'core/init.php';
  $meta = Meta::get(2);
  $header = Header::get(1);
  $pages_id=2;
  $page = Pages::get(2);
  $contact = Contact::get(1);
?>
<!DOCTYPE html>
<html itemscope lang="bs-BA">
	<?php
		echo $meta->render();
	?>
	<body>
		<div id="wrapper">
			<header id="header" class="cf">
				<?php echo $header->render(); ?>
			</header>
		
			<?php include './inc/nav.inc'; ?>
			
			<div id="main">
				
				<?php echo $page->render(); ?> 
			
				<span id="a"></span>
				<script src="./JS/review_rooms.min.js"></script>

				<?php
					$matic = new GalleryMatic();
					$matic->renderGallery();
				?>

				<h2>Gdje se nalazimo?</h2>
				<iframe id="map_matic" class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2636.4830002748577!2d17.624211315172573!3d42.91890390761864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x134ba2520e6e6c61%3A0xcc90d46d336c0d38!2sVilla+Mati%C4%87!5e1!3m2!1sbs!2sba!4v1519715607404" allowfullscreen title="Hotel Villa Matić Map" loading="lazy"></iframe>
			</div><!-- end #main -->

			<aside id="sidebar">
				<!-- contact info -->
				<?php echo $contact->render(); ?>
				<?php include "./inc/room_owner.php"; ?>
				<?php
					$maticAsside = new GalleryAssideMatic();
					$maticAsside->renderGalleryAsside();
				?>
			</aside><!-- end #sidebar -->

			<?php include 'inc/footer.php'; ?>
			
		</div><!-- end #wrapper -->
		<script src="lightbox2/src/js/lightbox.min.js"></script>
	</body>
</html>