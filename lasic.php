<?php
  require_once 'core/init.php';
  $meta = Meta::get(6);
  $header = Header::get(1);
  $pages_id=6;
  $page = Pages::get(6);
  $contact = Contact::get(4);
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
					$lasic = new GalleryLasic();
					$lasic->renderGallery();
				?>

				<h2>Gdje se nalazimo?</h2>
				<iframe id="map_lasic" class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2921.3372493069637!2d17.603827675296827!3d42.92901659896835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x134ba3b909155129%3A0x10c0100299b52512!2sVilla%20Lasi%C4%87!5e0!3m2!1sbs!2sba!4v1715988967407!5m2!1sbs!2sba" allowfullscreen title="Villa Lasić Map" loading="lazy"></iframe>
			</div><!-- end #main -->

			<aside id="sidebar">
				<!-- contact info -->
				<?php echo $contact->render(); ?>
				<?php include "./inc/room_owner.php"; ?>
				<?php
					$lasicAsside = new GalleryAssideLasic();
					$lasicAsside->renderGalleryAsside();
				?>
			</aside><!-- end #sidebar -->

			<?php include 'inc/footer.php'; ?>
			
		</div><!-- end #wrapper -->
		<script src="lightbox2/src/js/lightbox.min.js"></script>
	</body>
</html>