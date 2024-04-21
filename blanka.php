<?php
  require_once 'core/init.php';
  $meta = Meta::get(5);
  $header = Header::get(1);
  $pages_id=5;
  $page = Pages::get(5);
  $contact = Contact::get(3);
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
					$blanka = new GalleryBlanka();
					$blanka->renderGallery();
				?>

				<h2>Gdje se nalazimo?</h2>
					<iframe id="map_blanka" class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2921.655367761832!2d17.612659275296426!3d42.92230879939653!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x134ba3b18f7a8145%3A0x335e5da9f2b0159f!2sHrvatskih%20velikana%205%2C%20Neum%2C%20Bosna%20i%20Hercegovina!5e0!3m2!1sbs!2skr!4v1712831434300!5m2!1sbs!2skr" allowfullscreen title="Holiday Home Blanka Map" loading="lazy"></iframe>
			</div><!-- end #main -->

			<aside id="sidebar">
				<!-- contact info -->
				<?php echo $contact->render(); ?>
				<?php include "./inc/room_owner.php"; ?>
				<?php
					$blankaAsside = new GalleryAssideBlanka();
					$blankaAsside->renderGalleryAsside();
				?>
			</aside>
		
			<?php include 'inc/footer.php'; ?>

		</div><!-- end #wrapper -->
		<script src="lightbox2/src/js/lightbox.min.js"></script>
	</body>
</html>