<?php
// set error reporting
/*ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL | E_STRICT);*/
//var_dump(ini_get('display_errors'));
// define variables and set to empty values
$fname = $tel = $userMail = $userMessage = $email_address_id = "";
$fname_error = $tel_error = $txtFrom_error = $txtTo_error = $userMail_error = $userMessage_error = "";
$error=false;
//Load the config file
$dbHost = "localhost:3306";
$dbUser = "visitneu_sunyoung";
$dbPassword = "m&102003&G";
$dbName = "visitneu_neum";
$dbCharset = "utf8";
$pdo="";
try{
<<<<<<< HEAD
	$dsn = "mysql:host=" . $dbHost .";dbName=" . $dbName . ";charset=" . $dbCharset;
=======
	$dsn = "mysql:host=" . $dbHost . ";dbName=" . $dbName . ";charset=" . $dbCharset;
>>>>>>> form
	$pdo = new PDO($dsn, $dbUser, $dbPassword);
	array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
	$pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	//echo "connected!";
}catch(PDOException $e){
	echo "Greška u konekciji: " . $e->getMessage();
}
use PHPMailer\PHPMailer\PHPMailer;
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require 'PHPMailer/Exception.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){

	//ob_start();
	if(isset($_POST['submitOwner'])){
//		print_r($_POST);
	$fname = $_POST['fname'];
	$tel = $_POST['tel'];
/*	if(isset($_POST['txtFrom'])){
		$txtFrom = date('Y-m-d', strtotime($_POST['txtFrom']));
	}
	if(isset($_POST['txtTo'])){
		$txtTo = date('Y-m-d', strtotime($_POST['txtTo']));
	}*/
	$userMail = $_POST['userMail'];
	$userMessage = $_POST['userMessage'];

	if(empty($_POST['fname'])){
		$error=true;
		$fname_error = "Ime i prezime ne može biti prazno!";
	}else{
		$fname = $_POST['fname'];	
		if(!preg_match("/^[a-zšđčćžA-ZŠĐČĆŽ\s]*$/", $fname)){
			$fname_error = "Ime i prezime mogu da sadrže samo slova i razmak!";
		}
	}
	if(empty($_POST['tel'])) {
		$tel_error = "Broj telefona ne može biti prazan!";
	}else{
		$tel = $_POST['tel'];
		if(!preg_match('/^[\+]?[0-9]{9,15}$/', $tel)) {
			$tel_error = "Broj telefona treba da sadrži minimalno od 9 do 15 brojeva!";
		}
	}
	/*
	if(empty($_POST["txtFrom"])){
		$txtFrom_error = 'Datum odlaska ne može biti prazan!';
	} else {
		$txtFrom = $_POST['txtFrom'];
	}
	if(empty($_POST["txtTo"])){
		$txtTo_error = 'Datum odlaska ne može biti prazan!';
	} else {
		$txtTo =$_POST['txtTo'];
	}
	*/
	if(empty($_POST['userMail'])){
		$userMail_error = "E-mail ne može biti prazan!";
	}else{
		$userMail = $_POST['userMail'];
		// check if e-mail address is well-formed
		if(!filter_var($userMail, FILTER_VALIDATE_EMAIL)) {
			$userMail_error = "E-mail adresa nije ispravna!";
		}
	}
	if(empty($_POST['userMessage'])) {
		$userMessage_error = "Sadržaj poruke ne može biti prazan!";
	}else{
		$userMessage = $_POST['userMessage'];
		if(!preg_match("/^[a-zšđčćžA-ZŠĐČĆŽ0-9 ,.!?\'\"]*$/", $userMessage)){
			$userMessage_error = "Sadržaj poruke ne mogu biti specijalni znaci!";
		}
	}
	if($fname_error == '' && $tel_error == '' && $userMail_error == '' && $userMessage_error == ''){

	//$error=false;
	// Instantiate a NEW email
	$mailOwner = new PHPMailer(true);
	$mailOwner->CharSet = "UTF-8";
	//SMTP Settings
	$mailOwner->isSMTP();
	$mailOwner->Host = 'mail.visit-neum.com';
	$mailOwner->SMTPAuth = true;
	//$mailOwner->SMTPDebug = 2;
	$mailOwner->Username = 'booking@visit-neum.com';
	$mailOwner->Password = 'M&734327&g';
	$mailOwner->Port = 465; // 587
	$mailOwner->SMTPSecure = 'ssl'; // tls
	$mailOwner->WordWrap = 50;  
	$mailOwner->setFrom('booking@visit-neum.com');
	
	//$mailOwner->clearAddresses();
	//$mailOwner->smtpClose();
	$mailOwner->Subject = "Nova poruka od visit-neum.com";
	$mailOwner->isHTML(true);
		/*
	// SELECT email values from database for man owners of rooms
	$sql_m = "SELECT owners_email.email_address_id, email_address, owner_name, owner_property, owner_sex, owner_type FROM visitneu_neum.owners_email INNER JOIN visitneu_neum.pages ON (pages.email_address_id = owners_email.email_address_id) WHERE `owner_sex`='M' AND `owner_type`='rooms' AND `pages_id` = ?";
		
	$dbstmt = $pdo->prepare($sql_m);
	$dbstmt->bindParam(1,$pages_id);
	$dbstmt->execute();
	//get emails from db via pdo
	$emails_room_m = $dbstmt->fetchAll(PDO::FETCH_ASSOC);
	if(is_array($emails_room_m) && count($emails_room_m) > 0) {
		foreach ($emails_room_m as $email_room_m){
			$mailOwner->addAddress($email_room_m['email_address']);
				$body_room_m = "<p>Poštovani {$email_room_m['owner_name']}, <br>" . "Upravo ste primili poruku sa sajta <a href='https://www.visit-neum.com'>visit-neum.com</a><br>Detalji Vaše poruke se nalaze ispod:</p><p><strong>Od: </strong>" . ucwords($fname) . "<br><strong>Telefon: </strong>" . $tel . "<br><strong>Datum dolaska: </strong>" . $txtFrom . "<br><strong>Datum odlaska: </strong>" . $txtTo . "<br><strong>E-mail: </strong>" .strtolower($userMail)."<br><strong>Poruka: </strong>" . $userMessage . "<br><br><strong>Napomena: </strong>Molimo Vas da na ovu poruku ne odgovarate. Vaš odgovor pošaljite na: " . strtoupper($userMail) . "</p>";
						$mailOwner->Body = $body_room_m;
 
	if($mailOwner->send()){
		$mailOwner = "INSERT INTO visitneu_neum.contact_owner (fname, tel, txtFrom, txtTo, userMail, userMessage, email_address_id) VALUES (:fname, :tel, :txtFrom, :txtTo, :userMail, :userMessage, :email_address_id)";
		$stmt = $pdo->prepare($mailOwner);
		$stmt->execute(['fname' => $fname, 'tel' => $tel, 'txtFrom' => $txtFrom, 'txtTo' => $txtTo, 'userMail' => $userMail, 'userMessage' => $userMessage, 'email_address_id' => $email_room_m['email_address_id']]);
		if($mistake==false){
			$data['response'] = "success";
			$data['content'] = "Hvala Vam " . ucwords($fname) . "! Vaša poruka je uspješno poslata vlasniku objekta {$email_room_m['owner_property']}! Odgovor ćete dobiti ubrzo!";
		}//end if $error==false
	}//end if mail send
	}//end foreach for email addresses  (man owners of rooms)

	}//end if for array of emails
*/ // SELECT email values from database for woman owners of rooms
/*	$sql_f="SELECT owners_email.email_address_id, email_address, owner_name, owner_property, owner_sex, owner_type FROM visitneu_neum.owners_email INNER JOIN visitneu_neum.pages ON (pages.email_address_id = owners_email.email_address_id) WHERE `owner_sex`='F' AND `owner_type`='rooms' AND `pages_id` = ?";
	$dbstmt = $pdo->prepare($sql_f);
	$dbstmt->bindParam(1,$pages_id);
	$dbstmt->execute();
	//get emails from db via pdo
	$emails_room_f = $dbstmt->fetchAll(PDO::FETCH_ASSOC);
	$data=[];
	if(is_array($emails_room_f) && count($emails_room_f) > 0){
		//$jsonData = [];
		foreach ($emails_room_f as $email_room_f){
			// var_dump($email_room_f['email_address']);
			$mailOwner->addAddress($email_room_f['email_address']);
			$body_room_f = "<p>Poštovana {$email_room_f['owner_name']}, <br>" . "Upravo ste primili poruku sa sajta <a href='https://www.visit-neum.com'>visit-neum.com</a><br>Detalji Vaše poruke se nalaze ispod:</p><p><strong>Od: </strong>" . ucwords($fname) . "<br><strong>Telefon: </strong>" . $tel . "<br><strong>Datum dolaska: </strong>" . $txtFrom . "<br><strong>Datum odlaska: </strong>" . $txtTo . "<br><strong>E-mail: </strong>" .strtolower($userMail)."<br><strong>Poruka: </strong>" . $userMessage . "<br><br><strong>Napomena: </strong>Molimo Vas da na ovu poruku ne odgovarate. Vaš odgovor pošaljite na: " . strtoupper($userMail) . "</p>";
			$mailOwner->Body = $body_room_f;
			if($mailOwner->send()){
				$mistake=false;
				$mailOwner = "INSERT INTO visitneu_neum.contact_owner (fname, tel, txtFrom, txtTo, userMail, userMessage, email_address_id) VALUES (:fname, :tel, :txtFrom, :txtTo, :userMail, :userMessage, :email_address_id)";
				$stmt = $pdo->prepare($mailOwner);
				$stmt->execute(['fname' => $fname, 'tel' => $tel, 'txtFrom' => $txtFrom, 'txtTo' => $txtTo, 'userMail' => $userMail, 'userMessage' => $userMessage, 'email_address_id' => $email_room_f['email_address_id']]);
			}//end if mail send	
			else{
				$mistake=true;
			}
	}//end foreach for email addresses  (woman owners of rooms)
}//end if for array of emails*/
// SELECT email values from database for man owners of others property(restaurants, ships, etc)
	/*$query_m = "SELECT owners_email.email_address_id, email_address, owner_name, owner_property, owner_sex,
	owner_type FROM visitneu_neum.owners_email INNER JOIN visitneu_neum.pages ON (pages.email_address_id = owners_email.email_address_id) WHERE `owner_sex`='M' AND `owner_type`='other' AND `pages_id` = ?";
	$dbstmt = $pdo->prepare($query_m);
	$dbstmt->bindParam(1,$pages_id);
	$dbstmt->execute();
	//get emails from db via pdo
	$emails_other = $dbstmt->fetchAll(PDO::FETCH_ASSOC);
	$jsonData=[];
	if(is_array($emails_other) && count($emails_other) > 0) {
		$jsonData=[];
		foreach ($emails_other as $email_other){
			$mailOwner->addAddress($email_other['email_address']);
				$body_other = "<p>Poštovani {$email_other['owner_name']}, <br>" . "Upravo ste primili poruku sa sajta <a href='https://www.visit-neum.com'>visit-neum.com</a><br>Detalji Vaše poruke se nalaze ispod:</p><p><strong>Od: </strong>" . ucwords($fname) . "<br><strong>Telefon: </strong>" . $tel . "<br><strong>E-mail: </strong>" .strtolower($userMail)."<br><strong>Poruka: </strong>" . $userMessage . "<br><br><strong>Napomena: </strong>Molimo Vas da na ovu poruku ne odgovarate. Vaš odgovor pošaljite na: " . strtoupper($userMail) . "</p>";
				$mailOwner->Body = $body_other;
				if($mailOwner->send()){
					$mailOwner = "INSERT INTO visitneu_neum.contact_owner (fname, tel, userMail, userMessage, email_address_id) VALUES (:fname, :tel, :userMail, :userMessage, :email_address_id)";
					$stmt = $pdo->prepare($mailOwner);
					$stmt->execute(['fname' => $fname, 'tel' => $tel, 'userMail' => $userMail, 'userMessage' => $userMessage, 'email_address_id' => $email_other['email_address_id']]);
					if($mistake==false){
						$data['response'] = "success";
						$data['content'] = "Hvala Vam " . ucwords($fname) . "! Vaša poruka je uspješno poslata vlasniku objekta {$email_other['owner_property']}! Odgovor ćete dobiti ubrzo!";
					$jsonData[]=$data;	
					}//end if $error==false
				}//end if mail send
			echo json_encode($jsonData);
	}//end foreach for email addresses  (man owners of other properties(restaurants, ships etc.))

}//end if for array of emails
/*else{
	$data['response'] = "error";
	$data['content'] = "Došlo je do greške! Pokušajte ponovo..." . $mailOwner->ErrorInfo;
	}*/
	// SELECT email values from database for man owners of others property(restaurants, ships, etc)
	//$jsonData=array();

	//var_dump($dbstmt);
	//get emails from db via pdo
$query_m = "SELECT owners_email.email_address_id, email_address, owner_name, owner_property, owner_sex, owner_type FROM visitneu_neum.owners_email INNER JOIN visitneu_neum.pages ON (pages.email_address_id = owners_email.email_address_id) WHERE `owner_sex`='M' AND `owner_type`='other' AND `pages_id` = ?";
$dbstmt = $pdo->prepare($query_m);
$dbstmt->bindParam(1, $pages_id);
$dbstmt->execute();
//print_r($pages_id);
$emails_other = $dbstmt->fetchAll(PDO::FETCH_ASSOC);
	//$jsonData=array();
	if(is_array($emails_other) && count($emails_other)>0){
	$jsonData=array();
	foreach($emails_other as $email_other){
		//var_dump($email_other['email_address']);
		$mailOwner->addAddress($email_other['email_address']);
		$body_other = "<p>Poštovani {$email_other['owner_name']}, <br>" . "Upravo ste primili poruku sa sajta <a href='https://www.visit-neum.com'>visit-neum.com</a><br>Detalji Vaše poruke se nalaze ispod:</p><p><strong>Od: </strong>" . ucwords($fname) . "<br><strong>Telefon: </strong>" . $tel . "<br><strong>E-mail: </strong>" .strtolower($userMail)."<br><strong>Poruka: </strong>" . $userMessage . "<br><br><strong>Napomena: </strong>Molimo Vas da na ovu poruku ne odgovarate. Vaš odgovor pošaljite na: " . strtoupper($userMail) . "</p>";
		$mailOwner->Body = $body_other;
		//$jsonData=array();
		if($mailOwner->send()){
			// save data to db
			$mailOwner = "INSERT INTO visitneu_neum.contact_owner(fname, tel, userMail, userMessage, email_address_id) VALUES(:fname, :tel, :userMail, :userMessage, :email_address_id)";
			$stmt = $pdo->prepare($mailOwner);
			$stmt->execute(['fname' => $fname, 'tel' => $tel, 'userMail' => $userMail, 'userMessage' => $userMessage, 'email_address_id' => $email_other['email_address_id']]);

				// Load AJAX
				if($error==false){
					$information['response'] = "success";
					$information['content'] = "Hvala Vam " . ucwords($fname) . "! Vaša poruka je uspješno poslata vlasniku objekta! Odgovor ćete dobiti ubrzo!";
					$jsonData[] = $information;
				}

				/*
				$information['response'] = "success";
				$information['content'] = "Hvala Vam " . ucwords($fname) . "! Vaša poruka je uspješno poslata vlasniku objekta! Odgovor ćete dobiti ubrzo!";
				$jsonData[] = $information;
				*/
				/*if($error==false){
					$jsonData[]=array(
						'response'=>"success",
						'content'=>"Hvala Vam ".ucwords($fname)."! Vaša poruka je uspješno poslata vlasniku objekta {$email_other['owner_property']}! Odgovor ćete dobiti ubrzo!"
					);*/
				/*$information['response'] = "success";
				$information['content'] = "Hvala Vam " . ucwords($fname) . "! Vaša poruka je uspješno poslata vlasniku objekta {$email_other['owner_property']}! Odgovor ćete dobiti ubrzo!";
				$jsonData[] = $information;*/
				//*/
					//echo(json_encode($jsonData));*/
					//array_push($jsonData,$data);
					/*$data['response']="success";
					$data['content']="Hvala Vam ".ucwords($fname)."! Vaša poruka je uspješno poslata vlasniku objekta! Odgovor ćete dobiti ubrzo!";
					/*$data['content'][$email_other['email_address_id']]="Hvala Vam ".ucwords($fname)."! Vaša poruka je uspješno poslata vlasniku objekta {$email_other['owner_property']}! Odgovor ćete dobiti ubrzo!";*/
					//$jsonData[] = $data;
				//}	
	
}//end if mail send			
else{   
	$information['response'] = "error";
	$information['content'] = "Došlo je do greške! Pokušajte ponovo..." . $mailOwner->ErrorInfo;
	$jsonData[]=$information;  
}
echo(json_encode($jsonData));	
//echo json_last_error_msg(); // Print out the error if any
//die(); // halt the script
//return $jsonData;
//echo json_decode(array($jsonData));
/*else{
	$data['response']="error";
	$data['content'] = "Došlo je do greške! Pokušajte ponovo..." . $mailOwner->ErrorInfo;
	//$jsonData[] = $data;
//echo json_encode($jsonData);
}*/
//echo json_encode(array($jsonData));
//echo json_encode($jsonData->$data);
/*else{
	$data['response']="error";
	$data['message'] = "Došlo je do greške! Pokušajte ponovo..." . $mail_contact->ErrorInfo;
	$jsonData[] = $data;
}*/
/*else{
		$jsonData[]=array(
		'response'=>"error",
		'content'=>"greska!");
		}*/
				//echo json_encode($jsonData, JSON_FORCE_OBJECT, true);
			//Clear all addresses and attachments for the next iteration
			//$mailOwner->clearAddresses();	
	}//end foreach for email addresses  (man owners of other properties(restaurants, ships etc.))
	//print_r($jsonData);
	//echo json_encode(array($jsonData, JSON_FORCE_OBJECT));
	//$mailOwner->smtpClose();
	//echo json_encode(array($jsonData));
	//echo json_encode($jsonData[0], true);
	//header("Content-Type: application/json; charset=utf-8", true);
	//header("Content-type: application/json;charset=utf-8");
}//end if for array of emails
//{$email_other['owner_property']}
/*
if($error==false){
	$information['response'] = "success";
	$information['content'] = "Hvala Vam " . ucwords($fname) . "! Vaša poruka je uspješno poslata vlasniku objekta! Odgovor ćete dobiti ubrzo!";
	$jsonData[] = $information;
}
else{   
    //($mistake==true)
$information['response'] = "error";
$information['content'] = "Došlo je do greške! Pokušajte ponovo..." . $mailOwner->ErrorInfo;
$jsonData[]=$information;  
}
echo (json_encode($jsonData));
*/
//ob_flush();
//var_dump($jsonData);
//ob_clean();
//echo json_last_error_msg();
//echo json_last_error_msg(); // Print out the error if any
//die(); // halt the script
//echo(json_encode($data));
/*if($error==false){
}*/	
//header("Content-type: application/json");
//ob_flush();
//echo(json_encode($jsonData));
//ob_clean();
//exit;
//print_r($jsonData);
//die(print_r($jsonData, 1));
//echo json_encode($jsonData, true);
//var_dump($jsonData);
//ob_flush();
//var_dump(json_encode($jsonData)); exit;
//echo json_encode($jsonData, JSON_PRETTY_PRINT | JSON_FORCE_OBJECT | JSON_THROW_ON_ERROR);

//echo json_last_error_msg(); // Print out the error if any
//die(); // halt the script
//debugger();
//echo str_replace("[]", "{}", json_encode($jsonData));
//echo json_encode($jsonData, JSON_FORCE_OBJECT, true);
//echo json_encode($jsonData);
	}//end if validation
	//$pdo=null;
}//end submitOwner
}//end REQUEST METHOD = POST
//$pdo = null;
/*
// define variables and set to empty values
$name = $phone = $email = $message = "";
$name_error = $phone_error = $email_error = $message_error = "";
//$error = false;
//form is submitted with POST method
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	if(isset($_POST['submit'])) {
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	if(empty($_POST['name'])) {
		//$error = true;
		$name_error = "Ime i prezime ne može biti prazno!";
	}else{
		$name = $_POST['name'];
		// check if name only contains letters and whitespace	
		if(!preg_match("/^[a-zšđčćžA-ZŠĐČĆŽ\s]*$/", $name)){
			$name_error = "Ime i prezime mogu da sadrže samo slova i razmak!";
		}
	}
	if(empty($_POST['phone'])) {
		$phone_error = "Broj telefona ne može biti prazan!";
	}else{
		$phone = $_POST['phone'];
		// check if
		if(!preg_match('/^[\+]?[0-9]{9,15}$/', $phone)) {
			$phone_error = "Broj telefona treba da sadrži minimalno od 9 do 15 brojeva!";
		}
	}
	if(empty($_POST['email'])){
		$email_error = "E-mail ne može biti prazan!";
	}else{
		$email = $_POST['email'];
		// check if e-mail address is well-formed
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$email_error = "E-mail adresa nije ispravna!";
		}
	}
	if(empty($_POST['message'])) {
		$message_error = "Sadržaj poruke ne može biti prazan!";
	}else{
		$message = $_POST['message'];
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
		// Clear all addresses and attachments for next loop
		$mail_contact->clearAddresses();
		$mail_contact->addAddress('kontakt@visit-neum.com');
		$mail_contact->Subject = "Nova poruka od visit-neum.com";
		$body = "<p>Upravo ste primili poruku sa sajta <a href='https://www.visit-neum.com'>visit-neum.com</a><br>Detalji Vaše poruke se nalaze ispod:</p><br><p><strong>Od: </strong>" . ucwords($name) . "<br><strong>Telefon: </strong>" . $phone ."<br><strong>E-mail: </strong>" .strtolower($email)."<br><strong>Poruka: </strong>" . $message . "<br><br><strong>Napomena: </strong>Molimo Vas da na ovu poruku ne odgovarate. Vaš odgovor pošaljite na: " . strtoupper($email) . "</p>";
		$mail_contact->Body = $body;
		
      if($mail_contact->send()) {
		$mail_contact = "INSERT INTO visitneu_neum.contact_me (name, phone, email, message) VALUES (:name, :phone, :email, :message)";
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
<<<<<<< HEAD
	echo json_encode($text); 
}
}
}
/*if($_SERVER['REQUEST_METHOD'] == 'POST'){
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
<<<<<<< HEAD
	//$sql="SELECT email_address FROM owners_email JOIN form_data ON form_data.email_address_id = owners_email.id WHERE form_data_id = " . $form_data_id;
//$sql = "SELECT email_address FROM owners_email JOIN contact_owner ON owners_email.email_address_id = contact_owner.email_address_id WHERE contact_owner_id =  $contact_owner_id";
	$sql="SELECT email_address FROM visitneu_contact.owners_email ";
	// This query will send mail to all emails from database 
	foreach ($pdo->query($sql) as $row) {
		$mailOwner->ClearAllRecipients();
		$mailOwner->AddAddress($row[email_address]);
		

	//$mailOwner->addAddress('mirnes.glamocic@gmail.com');
	
=======
	//$sql="SELECT email_address FROM visitneu_contact.owners_email";
	$sql="SELECT email_address FROM visitneu_contact.owners_email JOIN visitneu_contact.contact_owner ON contact_owner.email_address_id = owners_email.email_address_id WHERE contact_owner_id = ' $contact_owner_id'";
	// This query will send mail to all emails from database 
	foreach ($pdo->query($sql) as $row) {
		$mailOwner->AddAddress($row["email_address"]);
	//$mailOwner->addAddress('mirnes.glamocic@gmail.com');
>>>>>>> form
	$mailOwner->Subject = "Nova poruka od visit-neum.com";
	$body = "<p>Poštovani, <br>" . "Upravo ste primili poruku sa sajta <a href='https://www.visit-neum.com'>visit-neum.com</a><br>Detalji Vaše poruke se nalaze ispod:</p><p><strong>Od: </strong>" . ucwords($fname) . "<br><strong>Telefon: </strong>" . $tel . "<br><strong>Datum dolaska: </strong>" . $txtFrom . "<br><strong>Datum odlaska: </strong>" . $txtTo . "<br><strong>E-mail: </strong>" .strtolower($userMail)."<br><strong>Poruka: </strong>" . $userMessage . "<br><br><strong>Napomena: </strong>Molimo Vas da na ovu poruku ne odgovarate. Vaš odgovor pošaljite na: " . strtoupper($userMail) . "</p>";
	$mailOwner->Body = $body;
	
  if($mailOwner->send()) {
	$mailOwner = "INSERT INTO visitneu_contact.contact_owner (fname, tel, txtFrom, txtTo, userMail, userMessage, email_address_id) VALUES (:fname, :tel, :txtFrom, :txtTo, :userMail, :userMessage, :email_address_id)";
<<<<<<< HEAD
	$stmt = $pdo->prepare($mailOwner);
	$stmt->execute(['fname' => $fname, 'tel' => $tel, 'txtFrom' => $txtFrom, 'txtTo' => $txtTo, 'userMail' => $userMail, 'userMessage' => $userMessage, 'email_address_id' => $email_address_id]);
=======
	$stmt = self::$_instance->prepare($mailOwner);
	$stmt->execute(['fname' => $fname, 'tel' => $tel, 'txtFrom' => $txtFrom, 'txtTo' => $txtTo, 'userMail' => $userMail, 'userMessage' => $userMessage, 'email_address_id' => $email_address_id]);
	var_dump($stmt);
>>>>>>> form
	if($error==false){
		$data['response'] = "success";
		$data['content'] = "Hvala Vam " . ucwords($fname) . "! Vaša poruka je uspješno poslata vlasniku objekta! Odgovor ćete dobiti ubrzo!";
	}
	} else {
	$data['response'] = "error";
	$data['content'] = "Došlo je do greške! Pokušajte ponovo..." . $mailOwner->ErrorInfo;
}
echo json_encode($data);

		}
<<<<<<< HEAD
}
}
}
=======
		$mailOwner->ClearAllRecipients();
}
}
}
*/
>>>>>>> form
=======
	
	echo json_encode($text); 
	//var_dump(json_encode($text));
	exit();
} //end if validation
} // end submit
} // end REQUEST METHOD = POST
//$pdo=null;*/
>>>>>>> form
