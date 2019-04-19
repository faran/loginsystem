<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta charset="description" content="Meta description for search results">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php
require "footer.php"
?>
<title>Welcome to Login system</title>
</head>
<body>
<header>
	<nav class="navbar navbar-default">
		<div class="container">
			<ul class="nav navbar-nav">
				<!-- <li><a href="index.php"><img src="./img/logo.jpg" alt="logo"></a></li> -->
				<li><a href="index.php">Home</a></li>
				<li><a href="login.php">Login</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#">Signup</a></li>
				<div>
					<?php
					if (isset($_SESSION["userId"])) {
						echo '<form action="includes/logout.inc.php" method="post">
						<button type="submit" name="logout-submit">Logout</button>
						</form>';
					
					}
					else{

						// echo '<form action="includes/login.inc.php" method="post">
						// <input type="text" name="mailuid" placeholder="User Name/E-mail...">
						// <input type="password" name="pwd" placeholder="Password...">
						// <button type="submit" name="login-submit">Login</button>
						// </form>
						// <a href="signup.php">Signup</a>';
					}
					?>
				</div>
			</ul>
		</div>
	</nav>
</header>
</body>
</html>