<?php require("users.php") ?>
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
<form class="" action="" method="post" enctype="multipart/form-data" autocomplete="off">
	<label>Name</label>
	<input type="Text" name="username" placeholder="Enter your Name">
  <label>Email</label>
  <input type="Email" name="email" placeholder="Enter your Email">
  <label>Login</label>
  <input type="Text" name="login" placeholder="Enter your Login">
  <label>Password</label>
  <input type="password" name="password" placeholder="Enter your password">
  <label>Confirm Password</label>
  <input type="password" name="confirm_password" placeholder="Confirm your password">
  <button type="submit" name="submit">Register</button>
	<p>Already have an account? <a href="index.php">Log In</a></p>
    <p class="error"><?php echo @$user->error ?></p>
    <p class="success"><?php echo @$user->success ?></p>
</form>
</body>
</html>
