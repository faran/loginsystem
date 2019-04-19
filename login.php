<?php
require "header.php";
?>

<main>
	<div class="container">
		<h1>Login</h1>

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
						</form>';
					}
					?>


		<!-- 
		<form class="form-inline">
			<form class="form-control" action="includes/login.inc.php" method="post">
				<input type="text" name="mailuid" placeholder="User Name..." class="form-control">
				<input type="password" name="pwd" placeholder="Password..." class="form-control">
				<button type="submit" name="login-submit" class="btn btn-primary">Login</button>
			</form>
		</form> -->
	</div>
</main>