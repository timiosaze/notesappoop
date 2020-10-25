<?php 

namespace App;

class Validator {
	private $errors = array();
	private $name;
	private $email;
	private $password;
	private $confirm_password;

	public static function itWorks(){
		echo "it works hurray";
	}

	public function __construct($name, $email, $password, $confirm_password){
		$this->name = trim(htmlspecialchars($name));
		$this->email = trim(htmlspecialchars($email));
		$this->password = trim(htmlspecialchars($password));
		$this->confirm_password = trim(htmlspecialchars($confirm_password));
	}

	public static function emptyName(){
		if($this->name === ""){
			$this->errors[$this->name] = 'name cannot be empty';
		}
	}


}
