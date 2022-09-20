<?php require("register-class.php") ?>
<?php
  if(isset($_POST['submit'])){
    $user = new RegisterUser($_POST['username'],$_POST['email'],$_POST['login'],$_POST['password'],$_POST['confirm_password']);
  }
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Manao Registration</title>
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
<div class="container">
  <form class="" action="" method="post" enctype="multipart/form-data" autocomplete="off">
    <div class="input-group">
	    <label>Name</label>
	    <input type="Text" name="username" placeholder="Enter your Name" id="contact-name" onkeyup="validateName()">
      <span id="name-error"></span>
    </div>
    <div class="input-group">
      <label>Email</label>
      <input type="Email" name="email" placeholder="Enter your Email">
      <span id="email-error"></span>
    </div>
    <div class="input-group">
      <label>Login</label>
      <input type="Text" name="login" placeholder="Enter your Login" id="contact-login" onkeyup="validateLogin()">
      <span id="login-error"></span>
    </div>
    <div class="input-group">
      <label>Password</label>
      <input type="password" name="password" placeholder="Enter your password">
      <span id="password-error"></span>
    </div>
    <div class="input-group">
      <label>Confirm Password</label>
      <input type="password" name="confirm_password" placeholder="Confirm your password">
      <span id="confirm-password-error"></span>
    </div>
      <button type="submit" name="submit">Register</button>
      <span id="submit-error">Enter data correctly!</span>
	    <p>Already have an account? <a href="index.php">Log In</a></p>
  </form>
</div>
<script src="JS"></script>
</body>
</html>
