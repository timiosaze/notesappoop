<?php 

namespace App;
use App\Traits\ValidateLogin;

class ValidatorLogin {
	use ValidateLogin;
	protected $email;
	protected $password;

	// public static function itWorks(){
	// 	echo "it works hurray";
	// }

	public function __construct($email, $password){
		$this->email = trim(htmlspecialchars($email));
		$this->password = trim(htmlspecialchars($password));
	}

	
	public function runValidator(){
		$this->emptyEmail();
		$this->isNotAValidEmail();
		$this->emptyPassword();
		$this->passwordLength();
		return (object) $this->errors;
	}
}

