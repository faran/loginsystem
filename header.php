<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta charset="description" content="Meta description for search results">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="includes/gallery.css">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<title>Welcome to Login system</title>
</head>
<body>

<header>
	<nav class="nav-header-main">
		<a href="index.php" class="header-logo">
		<img src="./img/logo.jpg" alt="logo">
		</a>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="#">Portfolio</a></li>
			<li><a href="#">About Me</a></li>
			<li><a href="#">Contact</a></li>
		</ul>
		<div class="header-login">
			<?php
			if (isset($_SESSION["userId"])) {
				echo '<form action="includes/logout.inc.php" method="post">
				<button type="submit" name="logout-submit">Logout</button>
				</form>';
			
			}
			else{
				echo '<form action="includes/login.inc.php" method="post">
				<input type="text" name="mailuid" placeholder="User Name/E-mail...">
				<input type="password" name="pwd" placeholder="Password...">
				<button type="submit" name="login-submit">Login</button>
				</form>
				<a href="signup.php" class="header-signup">Signup</a>';
			}
			?>
		</div>
	</nav>
</header>

</body>
</html>