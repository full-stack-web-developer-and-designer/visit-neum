<?php
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
		$mail_contact->addAddress('kontakt@visit-neum.com');
		$mail_contact->Subject = "Nova poruka od visit-neum.com";
		$body = "<p>Upravo ste primili poruku sa sajta <a href='https://www.visit-neum.com'>visit-neum.com</a><br>Detalji Vaše poruke se nalaze ispod:</p><br><p><strong>Od: </strong>" . ucwords($name) . "<br><strong>Telefon: </strong>" . $phone ."<br><strong>E-mail: </strong>" .strtolower($email)."<br><strong>Poruka: </strong>" . $message . "<br><br><strong>Napomena: </strong>Molimo Vas da na ovu poruku ne odgovarate. Vaš odgovor pošaljite na: " . strtoupper($email) . "</p>";
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
}