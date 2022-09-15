<?php
	class loginUser{
		private $login;
		private $password;
		public $error;
		public $success;
		private $storage = "users.json";
		private $stored_users;
	
		public function __construct($login,$password)
		{
			$this->login = $login;
			$this->password = $password;
			$this->stored_users = json_decode(file_get_contents($this->storage),true);
			$this->login();
		}
		
		private function login()
		{
			foreach ($this->stored_users as $user){
				if ($user['login'] == $this->login){
					if (password_verify($this->password, $user['password'])){
						session_start();
						$_SESSION['user'] = $this->login;
						header("location:cabinet.php");
						exit();
					}
				}
			}
			return $this->error = "Wrong Login Or Password";
		}
		
	}
