<?php
// create a user validator class to handle validation
// constructor which takes in POST data from form
// check required "fields to check" are present in the data
// create methods to validate individual fields
// -- a method to validate a name
// -- a method to  validate an email
// return an error array once all checks are done
class Validate{
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
			$this->addError('txtFrom', 'Broj telefona ne može biti prazan!');
		} else {
			// check if date format is valid
			if(!preg_match('/^[d/m/Y]$/', $val)){
				$this->addError('txtFrom', 'Datum mora biti u formatu "dan, DD-MM-YY!"');
			}
		}
	}
	private function validateDateTo(){
		$val = trim($this->data['txtFrom']);

		if(empty($val)){
			$this->addError('txtTo', 'Broj telefona ne može biti prazan!');
		} else {
			// check if date format is valid
			if(!preg_match('d/m/Y', $val)){
				$this->addError('txtTo', 'Datum dolaska nije ispravan!');
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