<?php
include_once 'classes/Form_process.class.php';
?>
<form  spellcheck="false" autocomplete="off" id='contact_me' class='form ajax' name='contact_me' action='' method='POST'> 
<h4 id="response" class="success"><!-- This will hold response from the server --></h4>
      <fieldset>
            <legend>Vaši podaci</legend>
					<div class="form-control InputIconBg"><input type="text" class="input username" name="name" id="name" placeholder="Vaše ime i prezime..." value="<?php echo Input::get('name'); ?>"><i class="contact_icon fas fa-user" aria-hidden="true"></i><span class="error"><?=$name_error; ?></span></div><!-- end .form-control -->
					<div class="form-control InputIconBg"><input minlength="9" type="text" class="input phone" name="phone" placeholder="Vaš broj telefona..." value="<?php echo Input::get('phone'); ?>"><i class="fas fa-phone-alt" aria-hidden="true"></i><span class="error"><?=$phone_error; ?></span></div><!-- end .form-control -->
					<div class="form-control InputIconBg"><input type="text" class="input mail" name="email" id="email" placeholder="Vaš e-mail..." value="<?php echo Input::get('email'); ?>" autocomplete="off"><i class="fas fa-envelope contact_icon" aria-hidden="true"></i><span class="error"><?=$email_error;?></span></div><!-- end .form-control -->
					<div class="form-control InputIconBg"><textarea maxlength="1000" name="message" class="textinput message" cols="46" rows="8" id="message" placeholder="Vaša poruka..."><?php if (isset($_POST['message'])) echo $_POST['message']; ?></textarea><i class="fas fa-pencil-alt contact_icon" aria-hidden="true"></i><span class="error"><?= $message_error; ?></span></div><!-- end .form-control -->
			   </fieldset>
			  <input type="submit" id="submit" class="btn_submit" name="submit" value="POŠALJI" /></form>
<script src="JS/form_color.js"></script>
<script src="JS/validate_me.js"></script>