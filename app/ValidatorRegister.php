<?php 

namespace App;
use App\Traits\ValidateRegister;


class ValidatorRegister {
	use ValidateRegister;
	protected $name;
	protected $email;
	protected $password;
	protected $confirm_password;

	// public static function itWorks(){
	// 	echo "it works hurray";
	// }

	public function __construct($name, $email, $password, $confirm_password){
		$this->name = trim(htmlspecialchars($name));
		$this->email = trim(htmlspecialchars($email));
		$this->password = trim(htmlspecialchars($password));
		$this->confirm_password = trim(htmlspecialchars($confirm_password));
	}

	
	public function runValidator(){
		$this->emptyName();
		$this->emptyEmail();
		$this->isNotAValidName();
		$this->isNotAValidEmail();
		$this->emptyPassword();
		$this->emptyConPassword();
		$this->passwordLength();
		$this->checkPasswordMatch();
		return (object) $this->errors;
	}
}
