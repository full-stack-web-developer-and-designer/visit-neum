<?php
// create a user validator class to handle validation
// constructor which takes in POST data from form
// check required "fields to check" are present in the data
// create methods to validate individual fields
// -- a method to validate a Fname
// -- a method to validate a Tel
// -- a method to validate a Date
// -- a method to  validate an email
// -- a method to validate a Message
// return an error array once all checks are done
/*class ValidateOwner{
	private $data;
	private $errors = [];
	private static $fields = ['fname', 'tel', 'txtFrom', 'txtTo', 'userMail','userMessage'];
	
	public function __construct($post_data){
		$this->data = $post_data;
	}
	public function validateForm(){
		foreach(self::$fields as $field){
			if(!array_key_exists($field, $this->data)){
				trigger_error("$field ne postoji!");
				return;
			}
		}
		$this->validateFname();
		$this->validateTel();
		$this->validateDateFrom();
		$this->validateDateTo();
		$this->validateUserMail();
		$this->validateUserMessage();
		return $this->errors;
	}
	private function validateFname(){
		$val = trim($this->data['fname']);
		
		if(empty($val)){
			$this->addError('fname', 'Ime i prezime ne može biti prazno!');
		} else {
			// check if name only contains letters and whitespace
			if(!preg_match('/^[a-zšđčćžA-ZŠĐČĆŽ ]*$/', $val)){
				$this->addError('fname','Ime i prezime mogu da sadrže samo slova i razmak!');
			}else if(strlen($val) < 6){
				$this->addError('fname','Ime  i prezime moraju imati najmanje 6 karaktera!');
			}
		}
	}
	private function validateTel(){
		$val = trim($this->data['tel']);
		
		if(empty($val)){
			$this->addError('tel', 'Broj telefona ne može biti prazan!');
		} else {
			// check if phone number only contains number
			if(!preg_match('/^[\+]?[0-9]{9,15}$/',  $val)){
				$this->addError('tel','Broj telefona može da sadrži od 9 do 15 brojeva!');
			}
		}
	}
	private function validateDateFrom(){
		$val = trim($this->data['txtFrom']);

		if(empty($val)){
			$this->addError('txtFrom', 'Datum dolaska ne može biti prazan!');
		} else {
			// check if date format is valid
			if(!preg_match("^[a-zšđčćžA-ZŠĐČĆŽ, ]\\d{1,2}/\\d{2}/\\d{4}^", $val)){
				$this->addError('txtFrom', 'Datum mora biti u formatu "dan, DD/MM/YY!"');
			}
		}
	}
	private function validateDateTo(){
		$val = trim($this->data['txtTo']);

		if(empty($val)){
			$this->addError('txtTo', 'Datum odlaska ne može biti prazan!');
		} else {
			// check if date format is valid
			if(!preg_match("^[a-zšđčćžA-ZŠĐČĆŽ, ]\\d{1,2}/\\d{2}/\\d{4}^", $val)){
				$this->addError('txtTo', 'Datum mora biti u formatu "dan, DD/MM/YY!"');
			}
		}
	}
	private function validateUserMail(){
		$val = trim($this->data['userMail']);
		
		if(empty($val)){
			$this->addError('userMail', 'E-mail ne može biti prazan!');
		} else {
			// check if e-mail address is well-formed
			if(!filter_var($val, FILTER_VALIDATE_EMAIL)){
				$this->addError('userMail','E-mail adresa nije ispravna!');
			}
		}
	}
	private function validateUserMessage(){
		$val = trim($this->data['userMessage']);
		
		if(empty($val)){
			$this->addError('userMessage', 'Sadržaj poruke ne može biti prazan!');
		} else {
			//check if message only contains letters, numbers or whitespace
			if(!preg_match("/^[a-zšđčćžA-ZŠĐČĆŽ0-9 ,.!?\'\n\"]*$/", $val)){
				$this->addError('userMessage','Sadržaj poruke ne mogu biti specijalni znaci!');
			}
		}
	}
	private function addError($key, $val){
		$this->errors[$key] = $val;
	}
}
*/

$error = false;
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
}catch(PDOException $e){
	echo "Greška u konekciji: " . $e->getMessage();
}  
//form is submitted with POST method
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$fname = $_POST['fname'];
	$tel = $_POST['tel'];
	/*$txtFrom = $_POST["txtFrom"];
	$txtTo = $_POST["txtTo"];*/
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
	} /*else {
		$txtFrom = $_POST['txtFrom'];
		// check if date format is valid
		if(!preg_match("^[a-zšđčćžA-ZŠĐČĆŽ, ]\\d{1,2}/\\d{2}/\\d{4}^", $txtFrom)){
			$txtFrom_error = 'Datum mora biti u formatu "dan, DD/MM/YY!"';
		}
	}*/
	if(empty($txtTo)){
		$txtTo_error = 'Datum odlaska ne može biti prazan!';
	} /*else {
		$txtTo = $_POST['txtTo'];
		// check if date format is valid
		if(!preg_match("^[a-zšđčćžA-ZŠĐČĆŽ, ]\\d{1,2}/\\d{2}/\\d{4}^", $txtTo)){
			$txtTo_error = 'Datum mora biti u formatu "dan, DD/MM/YY!"';
		}
	}*/
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
	if($fname_error == '' && $tel_error == '' && $txtFrom_error = $txtTo_error = $userMail_error == '' && $userMessage_error == ''){
	$mailOwner = new PHPMailer(true);
	// Active condition utf-8
	$mailOwner->CharSet = "UTF-8";
	//SMTP Settings
	$mailOwner->isSMTP();
	$mailOwner->Host = 'mail.visit-neum.com';
	$mailOwner->SMTPAuth = true;
	//$mail->SMTPDebug = 2;
	$mailOwner->Username = 'booking@visit-neum.com';
	$mailOwner->Password = 'M&734327&g';
	$mailOwner->Port = 465; // 587
	$mailOwner->SMTPSecure = 'ssl'; // tls
	//Email Settings
	$mailOwner->isHTML(true);
	$mailOwner->setFrom('booking@visit-neum.com');
	$mailOwner->addAddress('mirnes.glamocic@gmail.com');
	$mailOwner->Subject = "Nova poruka od visit-neum.com";
	$body = "<p>Upravo ste primili poruku sa sajta <a href='https://www.visit-neum.com'>visit-neum.com</a><br>Detalji Vaše poruke se nalaze ispod:</p><br><p><strong>Od: </strong>" . ucwords($fname) . "<br><strong>Telefon: </strong>" . $tel ."<br><strong>Datum dolaska: </strong>" . $txtFrom . "<br><strong>Datum odlaska: " . $txtTo . "<br><strong>E-mail: </strong>" .strtolower($userMail)."<br><strong>Poruka: </strong>" . $userMessage . "<br><br><strong>Napomena: </strong>Molimo Vas da na ovu poruku ne odgovarate. Vaš odgovor pošaljite na: " . strtoupper($userMail) . "</p>";
	$mailOwner->Body = $body;
	
if (isset($_POST['submitOwner'])) {
  if($mailOwner->send()) {
	$mailOwner = "INSERT INTO visitneu_contact.contact_owner (fname, tel, txtFrom, txtTo, userMail, userMessage) VALUES (:fname, :tel, :txtFrom, :txtTo, :userMail, :userMessage)";
	$stmt = $pdo->prepare($mailOwner);
	$stmt->execute(['fname' => $fname, 'tel' => $tel, 'txtFrom' => $txtFrom, 'txtTo' => $txtTo, 'userMail' => $userMail, 'userMessage' => $userMessage]);
	if($error==false){
		$data['response'] = "success";
		$data['content'] = "Hvala Vam " . ucwords($fname) . "! Vaša poruka je uspješno poslata! Odgovor ćete dobiti ubrzo!";
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