<?php
class RegisterUser{
	private $username;
	private $email;
	private $login;
	private $password;
	private $confirm_password;
	private $encrypted_password;
	private $encrypted_confirm_password;
	public $error;
	public $success;
	private $storage = "users.json";
	private $stored_users;
	private $new_user; //arr
	
	public function __construct($username, $email, $login, $password,$confirm_password){
	$this->username = trim($this->username);
		$this->username = filter_var($username, FILTER_SANITIZE_STRING);
	$this->email = trim($this->email);
		$this->email = filter_var($email,FILTER_VALIDATE_EMAIL);
	$this->login = trim($this->login);
		$this->login = filter_var($login, FILTER_SANITIZE_STRING);
		$this->password = filter_var(trim($password), FILTER_SANITIZE_STRING);
		$this->encrypted_password = password_hash($this->password, PASSWORD_DEFAULT);
	$this->confirm_password= trim($this->confirm_password);
		$this->confirm_password = filter_var(trim($confirm_password), FILTER_SANITIZE_STRING);
		$this->encrypted_confirm_password = password_hash($this->confirm_password, PASSWORD_DEFAULT);
		$this->stored_users = json_decode(file_get_contents($this->storage), true);
	$this->new_user=[
		"username" => $this->username,
		"email" => $this->email,
		"login" => $this->login,
		"password" => $this->encrypted_password,
		"confirm_password" => $this->encrypted_confirm_password,
	];
	
	if($this->checkFieldValues()){
		$this->insertUser();
	}
	}
	
	private function checkFieldValues(){
		if(empty($this->username) || empty($this->email) || empty($this->login) || empty($this->password) || empty($this->confirm_password)){
			$this->error = "All Fields Must Be Filled!";
			return false;
		}else{
			return true;
		}
	}
	
	private function loginExists(){
		foreach($this->stored_users as $user){
			if($this->login == $user['login']){
				$this->error = "Login Already Taken! Please Write A Different One";
				return true;
			}
		}
		return false;
	}
	
	private function comparePassword(){
		if($this->encrypted_password != $this->encrypted_confirm_password) {
			$this->error = "Password And Confirm Password Are Not The Same!";
			return false;
			
		}else{
			return true;
		}
	}
	
	private function insertUser(){
		if($this->loginExists() == false || $this->comparePassword()== true){
			array_push($this->stored_users,$this->new_user);
			if(file_put_contents($this->storage, json_encode($this->stored_users, JSON_PRETTY_PRINT))){
				return $this->success = "You Was Successfully Registered";}
			else{
				return $this->error = "Try Again. Something Went Wrong.";
			}
		}
	}
}