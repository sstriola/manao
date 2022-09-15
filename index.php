<?php require("login.php")?>
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
<div class="form-container">
  <form action="" method="post">
    <label>Login</label>
    <input type="Text" placeholder="Enter your login">
    <label>Password</label>
    <input type="Text" placeholder="Enter your password">
  </form>
    <div class="form-btn">
  <button>Visit</button>
    </div>
  <p>You dont have an account? <a href="register.php">Register Now!</a></p>
</div>
</div>
</body>
</html>
