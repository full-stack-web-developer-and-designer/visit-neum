<?php

	require_once 'core/init.php';
	try {
    if (isset($_POST['submit_login'])) {
        $register_mail = $_POST['register_mail'];
		$register_password = $_POST['register_password'];
        $user = new User;
        $user -> userLogin($register_mail, $register_password);
       $_SESSION['register_name'] = $result['register_name'];
						$_SESSION['register_mail'] = $result['register_mail'];
						$_SESSION['w'] = "infoUser";
    }
    }catch(Exception $e){
        echo $e->getMessage();
    }
?>
<a href="#login" rel="modal:open">Prijava</a>
<div id="login" class="modal">
<div class="modal_heading">
<h2>Prijava  korisnika</h2><a href="#" rel="modal:close"><button class="close_btn">&times;</button></a>
</div><!-- end .modal_heading-->
<div class="modal-body">
<fieldset>
<legend>Vaši podaci</legend>
<form id="loginUser" class='form' name='form' action='login.php' method='POST'>
<div class="form-control InputIconBg"><input type="text" class="input mail" name="register_mail" placeholder="Vaš e-mail..." value="<?php echo Input::get('register_mail'); ?>"><i class="fas fa-envelope contact_icon" aria-hidden="true"></i><span class="error"></span></div><!-- end .form-control -->

<div class="form-control InputIconBg"><input minlength="8" type="password" class="input" name="register_password" placeholder="Vaša lozinka..."><i class="fas fa-lock"></i><span class="error"></span></div><!-- end .form-control -->

</fieldset>
<input class="remembar_me" type="checkbox" id="remembar_me" name="remembar_me" value="">
<label class="remembar_me_label" for="remembar_me">Zapamti me</label>
<input type="submit" id="submit_login" class="btn_submit" name="submit_login" value="Prijava"/></form>
<script src="/JS/form_color.js"></script>
<p id="centerRegister">Nemate nalog? Registrujte se <a href="#register" rel="modal:open">ovdje</a></p>
</div><!-- end .modal-body-->
</div><!-- end #login.modal-->