<?php
/*include 'form_process.php';
require_once 'core/initRegister.php';
	
	if(Input::exists()){
		if(Token::check(Input::get('token'))){
			$validate_me = new Validate();
			$validation = $validate_me->check($_POST, array(
				'name' => array(
					'name' => 'Ime i prezime',
					'required' => true,
					'min' => 6,
					'max' => 50
				),
				'phone' => array(
					'name' => 'phone',
					'required' => true,
					'min' => 9,
					'max' => 16,
					'unique' => 'users'
					),
				'email' => array(
					'name' => 'email',
					'required' => true,
					'min' => 6,
					'max' => 255,
					),
				'message' => array(
					'name' => 'message',
					'required' => true,
					'max' => 500
				)
			));
		if($validation_me->passed()){
			//register user
			echo 'passed';
			/* echo '<div class="success"><?=$success;?></div>';*/
		/*} else {
			// output errors
			foreach($validation_me->errors()as $error){
				return $error;
			}
		}
	}
}
?>
<form  spellcheck="false" autocomplete="off" id='contact_me' class='form ajax' name='contact_me' action='' method='POST'> 
<h4 id="response" class="success"><!-- This will hold response from the server --></h4>
        <fieldset>
            <legend>Vaši podaci</legend>
					<div class="form-control"><input type="text" class="input username" name="name" id="name" placeholder="Vaše ime i prezime..." value="<?php if (isset($_POST['name'])) {echo htmlentities($_POST['name']);} ?>"><span class="error"<?php echo $error ??'' ?>></span></div><!-- end .form-control -->
					<div class="form-control"><input minlength="9" type="text" class="input phone" name="phone" placeholder="Vaš broj telefona..." value="<?php if (isset($_POST['phone'])){echo htmlentities($_POST['phone']);} ?>"><span class="error"><?php echo $error ??'' ?></span></div><!-- end .form-control -->
					<div class="form-control"><input type="text" class="input mail" name="email" id="email" placeholder="Vaš e-mail..." value="<?php if (isset($_POST['email'])) {echo htmlentities($_POST['email']);}?>" autocomplete="off"><span class="error"><?php echo $error ??'' ?></span></div><!-- end .form-control -->
					<div class="form-control"><textarea maxlength="500" name="message" class="textinput message" cols="46" rows="8" id="message" placeholder="Vaša poruka..."><?php if (isset($_POST['message'])) {echo htmlentities($_POST['message']);} ?></textarea><span class="error"><?php echo $error ??'' ?></span></div><!-- end .form-control -->
			   </fieldset>
			   <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
			  <input type="submit" id="submit" class="btn_submit" name="submit" value="POŠALJI" /></form>
<script src="JS/form_color.js"></script>
<script src="/JS/validate_me.js"></script>

*/