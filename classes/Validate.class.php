<?php
// create a user validator class to handle validation
// constructor which takes in POST data from form
// check required "fields to check" are present in the data
// create methods to validate individual fields
// -- a method to validate a name
// -- a method to  validate an email
// return an error array once all checks are done
class Validate{
	private $_passed = false,
	        $_errors = [],
            $_db = null;
	
	public function __construct(){
		$this->_db = Connect::getInstance();
	}

    public function check($source, $items = array()){
        foreach($items as $item => $rules) {
            foreach($rules as $rule  => $rule_value) {
                $value = trim($source[$item]);
               
                //$item = escape($item);
                
                if($rule === 'required' && empty($value)) {
                    $this->addError("{$item} je obavezno polje!");
                } else if(!empty($value)){ 
                    switch($rule) {
                        case 'min':
                            if(strlen($value) < $rule_value) {
                                $this->addError("{$item} mora imati najmanje {$rule_value} karaktera.");
                            }
                        break;
                        case 'max':
                            if(strlen($value) > $rule_value) {
                                $this->addError("{$item} može imati najviše {$rule_value} karaktera.");
                            }
                        break;
                        case 'matches':
                            if($value != $source[$rule_value]) {
                                $this->addError("{$rule_value} i {$item}moraju biti iste.");
                            }
                        break;
                        case 'unique':
                           $check = $this->_db->get($rule_value, array($item, '=', $value));
                            if($check->count()) {
                                $this->addError("{$item} već postoji.");
                            }
                        break;
                    }
                }
            }
        }
    if (empty($this->_errors)) {
        $this->_passed = true;
    } 
        return $this;   
    }

	private function addError($error){
		$this->_errors[] = $error;
	}
    public function errors() {
        return $this->_errors;
    }
    public function passed() {
        return $this->_passed;
    }
}