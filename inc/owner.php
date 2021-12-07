<div id="contact_owner" class="modal">
<div class="modal_heading">
<h2>Izvršite Vašu rezervaciju na vrijeme!</h2><a href="#" rel="modal:close"><button class="close_btn">&times;</button></a>
</div><!-- end .contact_heading-->
<div class="modal-body">
<?php
//$fname_error = $tel_error =/*$txtFrom_error = $txtTo_error = */$userMail_error = $userMessage_error = "";
include_once './classes/Form_process.class.php';
?>
<form  spellcheck="false" autocomplete="off" autocorrect="off" id='contactOwner' class='form' name='contactOwner' action='' method='POST'>
<h4 id="responseOwner" class="success">
<!-- This will hold response from the server --></h4>
  <fieldset>
    <legend>Vaši podaci</legend>
		<div class="form-control halb InputIconBg"><input minlength="6" type="text" class="input username" name="fname" placeholder="Vaše ime i prezime..." value="<?php echo Input::get('fname'); ?>"><i class="fas fa-user" aria-hidden="true"></i><span class="error"><?=$fname_error; ?></span></div><!-- end .form-control -->
			
		<div class="form-control halb InputIconBg"><input minlength="9" type="text" class="input phone" name="tel" placeholder="Vaš broj telefona..." value="<?php echo Input::get('tel'); ?>"><i class="fas fa-phone-alt" aria-hidden="true"></i><span class="error"><?=$tel_error; ?></span></div><!-- end .form-control -->

		<div class="form-control single InputIconBg"><input type="text" class="input mail" name="userMail" placeholder="Vaš e-mail..." value="<?php echo Input::get('userMail'); ?>" autocomplete="email"><i id="" class="fas fa-envelope owner_icon" aria-hidden="true"></i><span class="error"><?=$userMail_error; ?></span></div><!-- end .form-control --> 
			
		<div class="form-control InputIconBg"><textarea maxlength="1000" name="userMessage" class="textinput message" cols="46" rows="8" placeholder="Vaša poruka..."><?php echo Input::get('userMessage'); ?></textarea><i class="fas fa-pencil-alt owner_icon" aria-hidden="true"></i><span class="error"><?=$userMessage_error; ?></span></div><!-- end .form-control -->
			
	</fieldset>
	<!--<input type="hidden" name="token" value="<?php //echo Token::generate(); ?>">-->
	<input type="submit" class="btn_submit" id="submitOwner" name="submitOwner" value="POŠALJI"/>
</form>

</div><!-- end .modal-->
</div><!-- end #contact_owner -->
<script src="/JS/form_color.js"></script>
<!--<script defer src="/JS/validate_owner.js"></script>-->