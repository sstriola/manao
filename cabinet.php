<?php
	session_start();
	if (!isset($_SESSION['user'])){
		div("location: index.php");
		exit();
	}
	if(isset($_GET['logout'])){
		unset($_SESSION['user']);
			div("location: index.php");
			exit();
		
	}
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	<title>User Cabinet</title>
</head>
<body>
	<div class="container">
		<h1>Hello <?php echo $_SESSION['user']; ?></h1>
		<a href="?logout">Log Out</a>
	</div>
</body>
</html>


