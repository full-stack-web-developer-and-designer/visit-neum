<?php
$error = false;
// define variables and set to empty values
$name = $phone = $email = $message = "";
$name_error = $phone_error = $email_error = $message_error = "";
// define variables and set to empty values
$fname = $tel = $txtFrom = $txtTo = $userMail = $userMessage = "";
$fname_error = $tel_error = $txtFrom_error = $txtTo_error = $userMail_error = $userMessage_error = "";

	//Load the config file
$dbHost = "localhost:3306";
$dbUser = "visitneu_MirnesADMIN";
$dbPassword = "M&102003&g";
$dbName = "visitneu_contact";

try{
	$dsn = "mysql:host=" . $dbHost . ";dbName=" . $dbName;
	$pdo = new PDO($dsn, $dbUser, $dbPassword);
	array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
}catch(PDOException $e){
	echo "Greška u konekciji: " . $e->getMessage();
}  
use PHPMailer\PHPMailer\PHPMailer;
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require 'PHPMailer/Exception.php';	
//form is submitted with POST method
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST["email"];
	$message = $_POST["message"];
	if(empty($_POST["name"])) {
		$error = true;
		$name_error = "Ime i prezime ne može biti prazno!";
	}else{
		$name = $_POST['name'];
		// check if name only contains letters and whitespace	
		if(!preg_match("/^[a-zšđčćžA-ZŠĐČĆŽ\s]*$/", $name)){
			$name_error = "Ime i prezime mogu da sadrže samo slova i razmak!";
		}
	}
	if(empty($_POST["phone"])) {
		$phone_error = "Broj telefona ne može biti prazan!";
	}else{
		$phone = $_POST['phone'];
		// check if
		if(!preg_match('/^[\+]?[0-9]{9,15}$/', $phone)) {
			$phone_error = "Broj telefona treba da sadrži minimalno od 9 do 15 brojeva!";
		}
	}
	if(empty($_POST["email"])){
		$email_error = "E-mail ne može biti prazan!";
	}else{
		$email = $_POST["email"];
		// check if e-mail address is well-formed
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$email_error = "E-mail adresa nije ispravna!";
		}
	}
	if(empty($_POST["message"])) {
		$message_error = "Sadržaj poruke ne može biti prazan!";
	}else{
		$message = $_POST["message"];
		// check if name only contains letters and whitespace
		if(!preg_match("/^[a-zšđčćžA-ZŠĐČĆŽ0-9 ,.!?\'\"]*$/", $message)){
			$message_error = "Sadržaj poruke ne mogu biti specijalni znaci!";
		}
	}
	if($name_error == '' && $phone_error == '' && $email_error == '' && $message_error == ''){
		$mail_contact = new PHPMailer(true);
		// Active condition utf-8
		$mail_contact->CharSet = "UTF-8";
		//SMTP Settings
		$mail_contact->isSMTP();
		$mail_contact->Host = 'mail.visit-neum.com';
		$mail_contact->SMTPAuth = true;
		//$mail->SMTPDebug = 2;
		$mail_contact->Username = 'booking@visit-neum.com';
		$mail_contact->Password = 'M&734327&g';
		$mail_contact->Port = 465; // 587
		$mail_contact->SMTPSecure = 'ssl'; // tls
		//Email Settings
		$mail_contact->isHTML(true);
		$mail_contact->setFrom('booking@visit-neum.com');
		$mail_contact->addReplyTo($email, $name);
		$mail_contact->addAddress('kontakt@visit-neum.com');
		$mail_contact->Subject = "Nova poruka od visit-neum.com";
		$body = "<p>Upravo ste primili poruku sa sajta <a href='https://www.visit-neum.com'>visit-neum.com</a><br>Detalji Vaše poruke se nalaze ispod:</p><br><p><strong>Od: </strong>" . ucwords($name) . "<br><strong>Telefon: </strong>" . $phone ."<br><strong>E-mail: </strong>" .strtolower($email)."<br><strong>Poruka: </strong>" . $message . "</p>";
		$mail_contact->Body = $body;
	
      if($mail_contact->send()) {
		$mail_contact = "INSERT INTO visitneu_contact.contact_me (name, phone, email, message) VALUES (:name, :phone, :email, :message)";
		$stmt = $pdo->prepare($mail_contact);
		$stmt->execute(['name' => $name, 'phone' => $phone, 'email' => $email, 'message' => $message]);
		if($error==false){
			$text['response'] = "success";
			$text['message'] = "Hvala Vam " . ucwords($name) . "! Vaša poruka je uspješno poslata! Odgovor ćete dobiti ubrzo!";
		}
    } 
	else
	{
		$text['response'] = "error";
		$text['message'] = "Došlo je do greške! Pokušajte ponovo..." . $mail_contact->ErrorInfo;
    }
	echo json_encode($text); 
}
}
}if($_SERVER['REQUEST_METHOD'] == 'POST'){
	if (isset($_POST['submitOwner'])) {
	$fname = $_POST['fname'];
	$tel = $_POST['tel'];
	$txtFrom = date('Y-m-d', strtotime($_POST['txtFrom']));
	$txtTo = date('Y-m-d', strtotime($_POST['txtTo']));
	$userMail = $_POST["userMail"];
	$userMessage = $_POST["userMessage"];
	if(empty($_POST["fname"])) {
		$error = true;
		$fname_error = "Ime i prezime ne može biti prazno!";
	}else{
		$fname = $_POST['fname'];
		// check if name only contains letters and whitespace	
		if(!preg_match("/^[a-zšđčćžA-ZŠĐČĆŽ\s]*$/", $fname)){
			$fname_error = "Ime i prezime mogu da sadrže samo slova i razmak!";
		}
	}
	if(empty($_POST["tel"])) {
		$tel_error = "Broj telefona ne može biti prazan!";
	}else{
		$tel = $_POST['tel'];
		// check if
		if(!preg_match('/^[\+]?[0-9]{9,15}$/', $tel)) {
			$tel_error = "Broj telefona treba da sadrži minimalno od 9 do 15 brojeva!";
		}
	}
	if(empty($txtFrom)){
		$txtFrom_error = 'Datum odlaska ne može biti prazan!';
	} else {
		$txtFrom = $_POST['txtFrom'];
	}
	if(empty($txtTo)){
		$txtTo_error = 'Datum odlaska ne može biti prazan!';
	} else {
		$txtTo =$_POST['txtTo'];
	}
	if(empty($_POST["userMail"])){
		$userMail_error = "E-mail ne može biti prazan!";
	}else{
		$userMail = $_POST["userMail"];
		// check if e-mail address is well-formed
		if(!filter_var($userMail, FILTER_VALIDATE_EMAIL)) {
			$userMail_error = "E-mail adresa nije ispravna!";
		}
	}
	if(empty($_POST["userMessage"])) {
		$userMessage_error = "Sadržaj poruke ne može biti prazan!";
	}else{
		$userMessage = $_POST["userMessage"];
		// check if name only contains letters and whitespace
		if(!preg_match("/^[a-zšđčćžA-ZŠĐČĆŽ0-9 ,.!?\'\"]*$/", $userMessage)){
			$userMessage_error = "Sadržaj poruke ne mogu biti specijalni znaci!";
		}
	}
	if($fname_error == '' && $tel_error == '' && $userMail_error == '' && $userMessage_error == ''){
	// Instantiate a NEW email
	$mailOwner = new PHPMailer(true);
	// Active condition utf-8
	$mailOwner->CharSet = "UTF-8";
	//SMTP Settings
	$mailOwner->isSMTP();
	$mailOwner->Host = 'mail.visit-neum.com';
	$mailOwner->SMTPAuth = true;
	$mailOwner->SMTPDebug = 2;
	$mailOwner->Username = 'booking@visit-neum.com';
	$mailOwner->Password = 'M&734327&g';
	$mailOwner->Port = 465; // 587
	$mailOwner->SMTPSecure = 'ssl'; // tls
	//Email Settings
	$mailOwner->isHTML(true);
	$mailOwner->setFrom('booking@visit-neum.com');
	// SELECT email values from database
	//$sql="SELECT email_address FROM owners_email JOIN form_data ON form_data.email_address_id = owners_email.id WHERE form_data_id = " . $form_data_id;
//$sql = "SELECT email_address FROM owners_email JOIN contact_owner ON owners_email.email_address_id = contact_owner.email_address_id WHERE contact_owner_id =  $contact_owner_id";
	$sql="SELECT email_address FROM visitneu_contact.owners_email ";
	// This query will send mail to all emails from database 
	foreach ($pdo->query($sql) as $row) {
		$mailOwner->clearAddresses();
		$mailOwner->AddAddress($row[email_address]);
	} 
	//$mailOwner->addAddress('mirnes.glamocic@gmail.com');
	
	$mailOwner->Subject = "Nova poruka od visit-neum.com";
	$body = "<p>Poštovani, <br>" . "Upravo ste primili poruku sa sajta <a href='https://www.visit-neum.com'>visit-neum.com</a><br>Detalji Vaše poruke se nalaze ispod:</p><p><strong>Od: </strong>" . ucwords($fname) . "<br><strong>Telefon: </strong>" . $tel . "<br><strong>Datum dolaska: </strong>" . $txtFrom . "<br><strong>Datum odlaska: </strong>" . $txtTo . "<br><strong>E-mail: </strong>" .strtolower($userMail)."<br><strong>Poruka: </strong>" . $userMessage . "<br><br><strong>Napomena: </strong>Molimo Vas da na ovu poruku ne odgovarate. Vaš odgovor pošaljite na: " . strtoupper($userMail) . "</p>";
	$mailOwner->Body = $body;
	

  if($mailOwner->send()) {
	$mailOwner = "INSERT INTO visitneu_contact.contact_owner (fname, tel, txtFrom, txtTo, userMail, userMessage, email_address_id) VALUES (:fname, :tel, :txtFrom, :txtTo, :userMail, :userMessage, :email_address_id)";
	$stmt = $pdo->prepare($mailOwner);
	$stmt->execute(['fname' => $fname, 'tel' => $tel, 'txtFrom' => $txtFrom, 'txtTo' => $txtTo, 'userMail' => $userMail, 'userMessage' => $userMessage, 'email_address_id' => $email_address_id]);
	if($error==false){
		$data['response'] = "success";
		$data['content'] = "Hvala Vam " . ucwords($fname) . "! Vaša poruka je uspješno poslata vlasniku objekta! Odgovor ćete dobiti ubrzo!";
	}
	 
	} 

else
{
	$data['response'] = "error";
	$data['content'] = "Došlo je do greške! Pokušajte ponovo..." . $mailOwner->ErrorInfo;
}
echo json_encode($data);
}
}
}