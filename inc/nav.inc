<nav id="nav">
    <a href="#" id="respmenu"><i class="fas fa-bars"></i> IZBORNIK</a>
    <ul>
		<li>
			<?php
				include 'nav_moduls/hotels_nav.html';
			?>
		</li>
		<li>
			<?php
				include 'nav_moduls/apartments_nav.html';
			?>
		</li>
		<li>
			<?php
				include 'nav_moduls/villas_nav.html';
			?>
		</li>
        <li>
			<?php
				include 'nav_moduls/rooms_nav.html';
			?>
		</li> 
		<li>
			<?php
				include 'nav_moduls/restaurants_nav.html';
			?>
		</li >
		<li><a href='/Brod-Ivana-Neum.html' class='nav_visible'>VOŽNJA BRODOM</a></li>
		<li><a href='/Najbolji-Rent-a-Car-u-Neumu.html' class='nav_visible'>RENT A CAR</a></li>
		<!-- Link to open the modal -->   
		<li id="nav_right">
			<?php
				include 'nav_moduls/nav_right_nav.php';
			?>
		</li>
	</ul>
</nav>
	 