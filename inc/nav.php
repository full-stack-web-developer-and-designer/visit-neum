<nav id="nav">
    <a href="#" id="respmenu"><i class="fas fa-bars"></i> IZBORNIK</a>
    <ul>
		<li>
			<?php
				include_once 'nav_moduls/hotels_nav.html';
			?>
		</li>
		<li>
			<?php
				include_once 'nav_moduls/apartments_nav.html';
			?>
		</li>
		<li>
			<?php
				include_once 'nav_moduls/villas_nav.html';
			?>
		</li>
        <li>
			<?php
				include_once 'nav_moduls/rooms_nav.html';
			?>
		</li> 
		<li>
			<?php
				include_once 'nav_moduls/restaurants_nav.html';
			?>
		</li >
		<li><a href="brod.php" class="nav_visible">VOŽNJA BRODOM</a></li>
		<li><a href="rent_a_car.php" class="nav_visible">RENT A CAR</a></li>
		<!-- Link to open the modal -->   
		<li id="nav_right">
			<?php
				include_once 'nav_moduls/nav_right_nav.php';
			?>
		</li>
	</ul>
</nav>
	 