<footer id="footer">
<?php
function copyright($startYear) {
	$currentYear = date('Y');
	if ($startYear < $currentYear) {
		$currentYear = date('y');
		return "<p>&copy Copyright $startYear &ndash; $currentYear" . "| visit-neum.com<span class='footer_comma'>,</span><span class='footer_none'> | 
		</span><span class='footer_block'>Developed by Mirnes Glamočić</span></p>";
	} else {
		return "<p>&copy Copyright $startYear " . "| visit-neum.com<span class='footer_comma'>,</span><span class='footer_none'> | 
		</span><span class='footer_block'>Developed by Mirnes Glamočić</span></p>";
	}
}
echo copyright(2021);
?>
</footer>