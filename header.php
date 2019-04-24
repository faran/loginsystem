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
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Welcome to Login system</title>
</head>
<body>
<header>
	<nav class="navbar navbar-default">
		<div class="container">
			<ul class="nav navbar-nav">
				<!-- <li><a href="index.php"><img src="./img/logo.jpg" alt="logo"></a></li> -->
				<li><a href="index.php">Home</a></li>
				<?php
					if (!isset($_SESSION["userId"])) {
						echo'<li><a href="login.php">Login</a></li>';
					}
				?>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<!-- <li><a href="#">Signup</a></li> -->
				
					<?php
					if (isset($_SESSION["userId"])) {
						echo'<div>';
						echo '<form action="includes/logout.inc.php" method="post">
						<button type="submit" name="logout-submit">Logout</button>
						</form>
						</div>';
					
					}
					?>
			</ul>
		</div>
	</nav>