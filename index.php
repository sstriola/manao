<?php require("login-class.php") ?>
<?php
    if (isset($_POST['submit'])){
        $user = new loginUser($_POST['login'],$_POST['password']);
    }
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Manao Authorization</title>
  <link rel="stylesheet" href="css/main.css">
</head>
<body>
<div class="container">
  <form action="" method="post" enctype="multipart/form-data" autocomplete="off">
    <div class="input-group">
      <label>Login</label>
      <input type="Text" placeholder="Enter your login">
    </div>
    <div class="input-group">
      <label>Password</label>
      <input type="Password" placeholder="Enter your password">
    </div>
    <button type="submit" name="submit">Visit</button>
  <p>You dont have an account? <a href="register.php">Register Now!</a></p>
  </form>
</div>
</body>
</html>
