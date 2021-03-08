<?php

	require_once 'core/initRegister.php';
	if(Input::exists()){
		/*if(Token::check(Input::get('token'))){
			echo 'I have been run!';*/
			$validate = new Validate();
			$validation = $validate->check($_POST, array(
				'register_name' => array(
					'name' => 'Ime i prezime',
					'required' => true,
					'min' => 6,
					'max' => 50
				),
				'register_mail' => array(
					'name' => 'email',
					'required' => true,
					'max' => 255,
					'unique' => 'users'
				),
				'register_password' => array(
					'name' => 'Lozinka',
					'required' => true,
					'min' => 6
				),
				'confirm_password' => array(
					'name' => 'Potvrda lozinke',
					'required' => true,
					'matches' => 'register_password'
				)
			));

		if($validation->passed()){
			echo "Bravo!";
			/*Session::flash('success', 'You registered successfully!');
		header('Location:index.php');*/
			//register user
		/*	$user = new User();
			
			try {
				$user->create(array(
					'register_name' => Input::get('register_name'),
					'register_mail' => Input::get('register_mail'),
					'register_password' => Hash::make(Input::get('register_password'), $salt),
					'salt' => $salt,
					'joined' => date('Y-m-d H:i:s'),
					'groups' => 1
				));
			} catch(Exception $e) {
				die($e->getMessage());
			}
			/* echo '<div class="success"><?=$success;?></div>';*/
		} else {
			// output errors
			foreach($validation->errors() as $error){
			echo $error;
		}
	}
	//}
}
?>

<a href="#register" rel="modal:open">Registracija</a>
<div id="register" class="modal">
<div class="modal_heading">
<h2>Registracija novog korisnika</h2><a href="#" rel="modal:close"><button class="close_btn">&times;</button></a>
</div><!-- end .modal_heading-->
<div class="modal-body">
<fieldset>
<legend>Vaši podaci</legend>
<form class='form' name='form' action='' method='POST' autocomplete='off'>

<div class="form-control halb"><input minlength="6" type="text" class="input username" name="register_name" id="register_name" placeholder="Vaše ime i prezime..." value="<?php echo escape(Input::get('register_name')); ?>" autofocus><span class="error"></span></div><!-- end .form-control -->

<div class="form-control halb"><input minlength="6" type="password" class="input" name="register_password" id="register_password" placeholder="Unesite lozinku..."><span class="error"></span></div><!-- end .form-control -->

<div class="form-control halb"><input type="text" class="input mail" name="register_mail" id="register_mail" placeholder="Vaš e-mail..." value="<?php echo escape(Input::get('register_mail')); ?>"><span class="error"></span></div><!-- end .form-control -->

<div class="form-control halb"><input minlength="6" type="password" class="input" name="confirm_password" id="confirm_password" placeholder="Potvrdite lozinku..."><span class="error"></span></div><!-- end .form-control -->

</fieldset>
<input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
<input type="submit" id="submit_register" class="btn_submit" name="submit_register" value="Registracija"/></form>
<script src="/JS/form_color.js">
</script>
<p id="leftLogin">Već imate nalog? Prijavite se <a href="#login" rel="modal:open">ovdje</a></p>
</div><!-- end .modal-body-->
</div><!-- end #register.modal-->