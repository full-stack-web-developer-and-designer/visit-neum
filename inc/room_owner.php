<div id="contact_owner" class="modal">
<div class="modal_heading">
<h2>Izvršite Vašu rezervaciju na vrijeme!</h2><a href="#" class="close_btn" rel="modal:close">&times;</a>
</div><!-- end .contact_heading-->
<div class="modal-body">
<?php
	include_once 'form_process.php';
?>
<form  spellcheck="false" autocomplete="off" id='contactOwner' class='form ajax' name='contactOwner' action='#' method='POST'>
<script>document.querySelector("form").setAttribute("action", "")</script>
<p id="responseOwner" class="success"><!-- This will hold response from the server --></p>
  <fieldset>
    <legend>Vaši podaci</legend>
		<div class="form-control halb InputIconBg"><input minlength="6" type="text" class="input username" name="fname" placeholder="Vaše ime i prezime..." value="<?php echo Input::get('fname'); ?>" ><i class="fas fa-user" aria-hidden="true"></i><span class="error"><?=$fname_error; ?></span></div><!-- end .form-control -->
			
		<div class="form-control halb InputIconBg"><input minlength="9" type="tel" class="input phone" name="tel" placeholder="Vaš broj telefona..." value="<?php echo Input::get('tel'); ?>"><i class="contact_icon fas fa-phone-alt" aria-hidden="true"></i><span class="error"><?=$tel_error; ?></span></div><!-- end .form-control -->
			
		<div class="form-control halb InputIconBg"><input type="text" id="txtFrom" class="input" name="txtFrom" placeholder="Datum dolaska..." readonly="readonly" value="<?php echo Input::get('txtFrom'); ?>"><i class="far fa-calendar-alt" aria-hidden="true"></i><span class="error"><?=$txtFrom_error; ?></span></div><!-- end .form-control halb InputIconBg-->

		<div class="form-control halb InputIconBg"><input type="text" id="txtTo" class="input" name="txtTo" placeholder="Datum odlaska..." readonly="readonly" value="<?php echo Input::get('txtTo'); ?>"><i class="far fa-calendar-alt" aria-hidden="true"></i><span class="error"><?=$txtTo_error; ?></span></div><!-- end .form-control halb InputIconBg-->

		<div class="form-control single InputIconBg"><input type="email" class="input mail" name="userMail" placeholder="Vaš e-mail..." value="<?php echo Input::get('userMail'); ?>"><i class="fas fa-envelope" aria-hidden="true"></i><span class="error"><?=$userMail_error; ?></span></div><!-- end .form-control InputIconBg--> 
			
		<div class="form-control InputIconBg"><textarea maxlength="1000" name="userMessage" class="textinput message" cols="46" rows="7" placeholder="Vaša poruka će biti poslata direktno vlasniku objekta."><?php echo Input::get('userMessage'); ?></textarea><i class="fas fa-pencil-alt owner_icon" aria-hidden="true"></i><span class="error"><?=$userMessage_error; ?></span></div><!-- end .form-control -->
			
	</fieldset>
	<input type="hidden" name="pages_id" value="<?=$pages_id?>">
	<input type="submit" class="btn_submit" id="submitOwner" name="submitOwner" value="POŠALJI">
</form>
<script>
jQuery(document).ready(function(){
	var minDate = new Date();
	// Getter
	jQuery('#txtFrom').datepicker({
		monthNamesShort: [ "Jan", "Feb", "Mar", "Apr", "Maj", "Jun", "Jul", "Aug", "Sep", "Okt", "Nov", "Dec" ],
		dayNames: [ "Nedjelja", "Ponedjeljak", "Utorak", "Srijeda", "Četvrtak", "Petak", "Subota" ],
		dayNamesMin: [ "Ne", "Po", "Ut", "Sr", "Če", "Pe", "Su" ],
		prevText: '< Prethodni',
		nextText: 'Sljedeći >',
		autoclose: true,
		changeMonth: true,
		changeYear: true,
		minDate: minDate,
		firstDay:1,
		dateFormat: 'DD, dd-mm-yy',
		showAnim:'slideDown',
		onClose: function(selectedDate){
			jQuery( "#txtTo" ).datepicker( "option", "dateFormat", 'DD, dd-mm-yy');
			jQuery('#txtTo').datepicker("option", "minDate", selectedDate);
			jQuery("#txtFrom").valid();
		}
	});
	jQuery('#txtTo').datepicker({
		monthNamesShort: [ "Jan", "Feb", "Mar", "Apr", "Maj", "Jun", "Jul", "Aug", "Sep", "Okt", "Nov", "Dec" ],
		dayNames: [ "Nedjelja", "Ponedjeljak", "Utorak", "Srijeda", "Četvrtak", "Petak", "Subota" ],
		dayNamesMin: [ "Ne", "Po", "Ut", "Sr", "Če", "Pe", "Su" ],
		prevText: '< Prethodni',
		nextText: 'Sljedeći >',
		changeMonth: true,
		changeYear: true,
		minDate: minDate,
		firstDay:1,
		dateFormat: 'DD, dd-mm-yy',
		onClose:function(selectedDate){
			jQuery( "#txtFrom" ).datepicker( "option", "dateFormat", 'DD, dd-mm-yy');
			jQuery('#txtFrom').datepicker("option","maxDate",selectedDate);
			jQuery("#txtTo").valid();
		}
	});
});
</script>
<script src="/JS/form_color.min.js"></script>
<script src="/JS/validate_owner.min.js"></script>
</div><!-- end .modal-->
</div><!-- end #contact_owner -->