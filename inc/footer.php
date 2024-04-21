<footer id="footer">
<?php
function copyright($startYear) {
	$currentYear = date('Y');
	if ($startYear < $currentYear) {
		$currentYear = date('y');
		return "<p><small>&copy; Copyright $startYear &ndash; $currentYear" . " | <a id='home_page' href=\"https://visit-neum.com\">visit-neum.com</a><span class='footer_comma'>,</span><span class='footer_none'> | 
		</span><span class='footer_block'>Developed by <a id='copyright_info' href=\"https://mirnesglamocic.com\" target=\"_blank\">Mirnes Glamočić</a></span></small></p>";
	} else {
		return "<p><small>&copy; Copyright $startYear " . " | <a id='home_page' href=\"https://visit-neum.com\">visit-neum.com</a><span class='footer_comma'>,</span><span class='footer_none'> | 
		</span><span class='footer_block'>Developed by <a id='copyright_info' href=\"https://mirnesglamocic.com\" target=\"_blank\">Mirnes Glamočić</a></span></small></p>";
	}
}
echo copyright(2023);
?>
</footer>