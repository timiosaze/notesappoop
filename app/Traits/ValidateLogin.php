<?php 
namespace App\Traits;

trait ValidateLogin {
	public $errors = array();

	public function emptyEmail(){
		if($this->email === ""){
			$this->errors['email'] = 'email cannot be empty';
		}
	}
	public function emptyPassword(){
		if($this->password === ""){
			$this->errors['password'] = 'password cannot be empty';
		}
	}
	public function isNotAValidEmail(){
		if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
		  	$this->errors['email'] = "Invalid email format";
		}
	}
	public function passwordLength(){
		if(strlen($this->password < 8)){
			$this->errors['password'] = "password must be at least 8 characters";
		}
	}
}



