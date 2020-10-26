<?php

namespace App\Traits;

trait ValidateRegister {
	public $errors = array();
	
	public function emptyName(){
		if($this->name === ""){
			$this->errors['name'] = 'name cannot be empty';
		}
	}

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
	public function emptyConPassword(){
		if($this->confirm_password === ""){
			$this->errors['cpassword'] = 'password cannot be empty';
		}
	}
	public function isNotAValidName(){
		if (!preg_match("/^[a-zA-Z-' ]*$/",$this->name)) {
		  	$this->errors['name'] = "Only letters and white space allowed";
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
	public function checkPasswordMatch(){
		if($this->password !== $this->confirm_password){
			$this->errors['password'] = "password does not match";
			$this->errors['cpassword'] = "password does not match";
		}
	}
}