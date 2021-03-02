<div id="contact_owner" class="modal">
<div class="modal_heading">
<h2>Izvršite Vašu rezervaciju na vrijeme!</h2><a href="#" rel="modal:close"><button class="close_btn">&times;</button></a>
</div><!-- end .contact_heading-->
<div class="modal-body">
<?php
require 'classes/Validate.class.php';
	if(isset($_POST['submitOwner'])){
		//validate entries
		$validateOwner = new Validate($_POST);
		$errors = $validateOwner->validateForm();
		//save data to db
		if($error==false){
			$data['response'] = "success";
			$data['content'] = "Hvala Vam " . ucwords($name) . "! Vaša poruka je uspješno poslata! Odgovor ćete dobiti ubrzo!";
		}
		else
	{
		$data['response'] = "error";
		$data['content'] = "Došlo je do greške! Pokušajte ponovo..." . $userMail->ErrorInfo;
    }
	echo json_encode($data); 
		}
?>
<form  spellcheck="false" autocomplete="off" autocorrect="off" id='contactOwner' class='form' name='contactOwner' action='' method='POST'>
<h4 id="responseOwner" class="success"><!-- This will hold response from the server --></h4>
  <fieldset>
    <legend>Vaši podaci</legend>
		<div class="form-control halb"><input minlength="6" type="text" class="input username" name="fname" placeholder="Vaše ime i prezime..." value="<?php echo escape(Input::get('fname')); ?>" ><span class="error"><?php echo $errors['fname'] ?? '' ?></span></div><!-- end .form-control -->
			
		<div class="form-control halb"><input minlength="9" type="text" class="input phone" name="tel" placeholder="Vaš broj telefona..." value="<?php echo escape(Input::get('tel')); ?>"><span class="error"><?php echo $errors['tel']??''?></span></div><!-- end .form-control -->
			
		<div class="form-control halb"><input type="text" id="txtFrom" class="input" name="txtFrom" placeholder="Datum dolaska..." value="<?php echo escape(Input::get('txtFrom')); ?>"><span class="error"><?php echo $errors['txtFrom']??''?></span></div><!-- end .form-control -->

		<div class="form-control halb"><input type="text" id="txtTo" class="input" name="txtTo" placeholder="Datum odlaska..." value="<?php echo escape(Input::get('txtTo')); ?>"><span class="error"><?php echo $errors['txtTo']??''?></span></div><!-- end .form-control -->

		<div class="form-control"><input type="text" class="input mail" name="userMail" placeholder="Vaš e-mail..." value="<?php echo escape(Input::get('userMail')); ?>"><span class="error"><?php echo $errors['userMail']??''?></span></div><!-- end .form-control --> 
			
		<div class="form-control"><textarea maxlength="500" name="userMessage" class="textinput message" cols="46" rows="8" placeholder="Vaša poruka..."><?php echo htmlspecialchars(Input::get('userMessage')); ?></textarea><span id="message_feedback" class="error"><?php echo $errors['userMessage']??''?></span></div><!-- end .form-control -->
			
	</fieldset><div class="success"></div><!-- end .success -->
<input type="submit" class="btn_submit" id="submitOwner" name="submitOwner" value="POŠALJI"/>
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
		dateFormat: 'DD, dd/mm/yy',
		showAnim:'slideDown',
		onClose: function(selectedDate){
			jQuery('#txtTo').datepicker("option", "minDate", selectedDate);
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
		dateFormat: 'DD, dd/mm/yy',
		onClose:function(selectedDate){
			jQuery('#txtFrom').datepicker("option","maxDate",selectedDate);
		}
	});
});
</script>
<!--<script src="/JS/form_color.js"></script>
<script src="/JS/validate_owner.js"></script>-->

</div><!-- end .modal-->
</div><!-- end #contact_owner -->

 