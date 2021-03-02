<?php
$error = false;
// define variables and set to empty values
$name = $phone = $email = $message = "";
$name_error = $phone_error = $email_error = $message_error = "";

	//Load the config file
$dbHost = "localhost:3306";
$dbUser = "visitneu_MirnesADMIN";
$dbPassword = "M&102003&g";
$dbName = "visitneu_contact";

try{
	$dsn = "mysql:host=" . $dbHost . ";dbName=" . $dbName;
	$pdo = new PDO($dsn, $dbUser, $dbPassword);
}catch(PDOException $e){
	echo "Greška u konekciji: " . $e->getMessage();
}  
use PHPMailer\PHPMailer\PHPMailer;
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require 'PHPMailer/Exception.php';	
//form is submitted with POST method
if($_SERVER['REQUEST_METHOD'] == 'POST'){
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
	
	
	
		$mail = new PHPMailer(true);
		// Active condition utf-8
		$mail->CharSet = "UTF-8";
		//SMTP Settings
		$mail->isSMTP();
		$mail->Host = 'mail.visit-neum.com';
		$mail->SMTPAuth = true;
		//$mail->SMTPDebug = 2;
		$mail->Username = 'booking@visit-neum.com';
		$mail->Password = 'M&734327&g';
		$mail->Port = 465; // 587
		$mail->SMTPSecure = 'ssl'; // tls
		//Email Settings
		$mail->isHTML(true);
		$mail->setFrom('booking@visit-neum.com');
		$mail->addAddress('kontakt@visit-neum.com');
		$mail->Subject = "Nova poruka od visit-neum.com";
		$body = "<p>Upravo ste primili poruku sa sajta <a href='https://www.visit-neum.com'>visit-neum.com</a><br>Detalji Vaše poruke se nalaze ispod:</p><br><p><strong>Od: </strong>" . ucwords($name) . "<br><strong>Telefon: </strong>" . $phone ."<br><strong>E-mail: </strong>" .strtolower($email)."<br><strong>Poruka: </strong>" . $message . "<br><br><strong>Napomena: </strong>Molimo Vas da na ovu poruku ne odgovarate. Vaš odgovor pošaljite na: " . strtoupper($email) . "</p>";
		$mail->Body = $body;
		
      if($mail->send()) {
		$mail = "INSERT INTO visitneu_contact.contact_me (name, phone, email, message) VALUES (:name, :phone, :email, :message)";
		$stmt = $pdo->prepare($mail);
		$stmt->execute(['name' => $name, 'phone' => $phone, 'email' => $email, 'message' => $message]);
		if($error==false){
			$data['response'] = "success";
			$data['content'] = "Hvala Vam " . ucwords($name) . "! Vaša poruka je uspješno poslata! Odgovor ćete dobiti ubrzo!";
		}
	
		
    } 
	else
	{
		$data['response'] = "error";
		$data['content'] = "Došlo je do greške! Pokušajte ponovo..." . $mail->ErrorInfo;
    }
	echo json_encode($data); 
}}