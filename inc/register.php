<?php
// define variables and set to empty values
$register_name = $register_mail = $register_password = $confirm_password = $token = "";
$register_name_error = $register_mail_error = $register_password_error =  $confirm_password_error = "";
/*
require_once 'core/init.php';
$error = false;
$output="";
$msg ="";
//global $pdo;

use PHPMailer\PHPMailer\PHPMailer;
if (isset($_POST['submit_register'])) {
	$register_name = $_POST['register_name'];
	$register_mail = $_POST['register_mail'];
	$register_password = $_POST['register_password'];
	$confirm_password = $_POST['confirm_password'];
	$token = 'qwertzuiopasdfghjklyxcvbnm1234567890!#$%&/()';
	$token = str_shuffle($token);
	$token = substr($token, 0, 10);
	
	if(empty($_POST["register_name"])) {
		$error = true;
		$register_name_error = "Ime i prezime ne može biti prazno!";
	}else{
		$register_name = $_POST['register_name'];
		// check if name only contains letters and whitespace	
		if(!preg_match("/^[a-zšđčćžA-ZŠĐČĆŽ\s]*$/", $register_name)){
			$register_name_error = "Ime i prezime mogu da sadrže samo slova i razmak!";
		}
	}
	if(empty($_POST["register_mail"])){
		$register_mail_error = "E-mail ne može biti prazan!";
	}else{
		$register_mail = $_POST["register_mail"];
		// check if e-mail address is well-formed
		if(!filter_var($register_mail, FILTER_VALIDATE_EMAIL)) {
			$register_mail_error = "E-mail adresa nije ispravna!";	
	}/*else {
		$register_mail = $_POST["register_mail"];
		$sql = "SELECT * FROM users WHERE `register_mail`=:register_mail";
	$query =$pdo->prepare($sql);
	//$query->bindValue(':register_mail',$register_mail,PDO::PARAM_STR);
	$query->execute(array(
		`:register_mail` => $_POST[`register_mail`]
	));
	
		if($query ->rowCount() > 0){
				$register_mail_error = "E-mail adresa već postoji registrovana u bazi!";
			}
			
		}
	}*/

	if(empty($_POST["register_password"])){
		$register_password_error = "Lozinka ne može biti prazna!";
	}else{
		$register_password = $_POST["register_password"];
		//check length of password 
		if(strlen($register_password) < 6){
			$register_password_error = "Lozinka mora imati najmanje 6 karaktera!";
		}
	}
	if(empty($_POST["confirm_password"])){
		$confirm_password_error = "Potvrda Lozinke ne može biti prazna!";
	}else{
		$confirm_password = $_POST["confirm_password"];
		//check if passwords are the some
		if($confirm_password != $register_password){
			$confirm_password_error = "Lozinke moraju biti iste!";
		}
	}
	if($register_name_error == '' && $register_mail_error == '' && $register_password_error == ''  && $confirm_password_error == ''){
		/*
require_once 'classes/PHPMailer/PHPMailer.php';
require_once 'classes/PHPMailer/SMTP.php';
require_once 'classes/PHPMailer/Exception.php';
		
$mailC = new PHPMailer;

	$mailC->CharSet = "UTF-8";
	$mailC->isSMTP();
	$mailC->Host = 'mail.visit-neum.com';
	$mailC->SMTPAuth = true;
	$mailC->SMTPDebug = 4;
	$mailC->Username = 'booking@visit-neum.com';//'no-reply@visit-neum.com';
	$mailC->Password = 'M&734327&g';//'}Isu]BCGv({^';
	$mailC->Port = 587; // 465
	$mailC->SMTPSecure = 'tls'; //  ssl
	$mailC->setFrom('booking@visit-neum.com');//('no-reply@visit-neum.com');
	$mailC->addAddress($register_mail);
	$mailC->isHTML(true);
	$mailC->Subject = 'Potvrdite email';
	$mailC->Body = 'Potvrdite Vašu registraciju klikom na link:
	<a href="http://www.visit-neum.ba/Potvrdi-Email.html?register_mail=' . $register_mail .'&token=' . $token . '">Potvrdite Vaš email!</a>';

	if($mailC->send()){

	if($error==false){
		$result['response'] = "success";
		$result['message'] = "Hvala Vam " . ucwords($register_name) . " što ste se registrovali na našem sajtu. Upravo smo vam poslali link za aktivaciju Vašeg naloga na <strong>" . $register_mail . "<strong>";
		}
		$mailC->clearAddresses(); 
	}else  {
		$result['response'] = "error";
		$result['message'] = "Došlo je do greške! Pokušajte ponovo...". $mailC->ErrorInfo; 
		}
		echo json_encode($result);
	}

/**/
	
}
?>


<a href="#register" rel="modal:open">Registracija</a>

<div id="register" class="modal">

<div class="modal_heading">
<h2>Registracija novog korisnika</h2><a href="#" rel="modal:close"><button class="close_btn">&times;</button></a>
</div><!-- end .modal_heading-->
<div class="modal-body">

<div id="facebook">
<a href="" class="btn btn-block btn-facebook"> <i class="fab fa-facebook-f"></i> Nastavi koristeći Facebook</a></div><!--end #Facebook-->
<form spellcheck="false"  autocomplete="off" id='register_me' class='form ajax' name='form' action='' method='POST'>
<h4 id="responseRegister" class="success"><!--This will hold response from the server --></h4>
<fieldset>
<legend>Vaši podaci</legend>
<div class="form-control halb InputIconBg"><input minlength="6" type="text" class="input username" name="register_name" id="register_name" placeholder="Vaše ime i prezime..." value="<?php echo Input::get('register_name'); ?>"><i class="contact_icon fas fa-user" aria-hidden="true"></i><span class="error"><?=$register_name_error; ?></span></div><!-- end .form-control -->

<div class="form-control halb InputIconBg"><input minlength="8" type="password" class="input" name="register_password" id="register_password" placeholder="Unesite lozinku..."><i class="fas fa-lock"></i><span class="error"><?=$register_password_error; ?></span></div><!-- end .form-control -->

<div class="form-control halb InputIconBg"><input type="text" class="input mail" name="register_mail" id="register_mail" placeholder="Vaš e-mail..." value="<?php echo Input::get('register_mail'); ?>"><i class="fas fa-envelope contact_icon" aria-hidden="true"></i><span class="error"><?=$register_mail_error; ?></span></div><!-- end .form-control -->

<div class="form-control halb InputIconBg"><input type="password" class="input" name="confirm_password" id="confirm_password" placeholder="Potvrdite lozinku..."><i class="fas fa-lock"></i><span class="error"><?=$confirm_password_error; ?></span></div><!-- end .form-control -->

</fieldset>
<input type="submit" id="submit_register" class="btn_submit" name="submit_register" value="Registracija"/></form>

<script src="/JS/form_color.js"></script>
<script src="/JS/validate_register.js"></script>
<p id="leftLogin">Već imate nalog? Prijavite se <a href="#login" rel="modal:open">ovdje</a></p>
</div><!-- end .modal-body-->
</div><!-- end #register.modal-->

