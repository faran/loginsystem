<?php
require "header.php";
?>

<main>
	<div class="container">
					<?php
					if (isset($_SESSION["userId"])) {
						echo '
						<form action="includes/logout.inc.php" method="post">
						<button type="submit" name="logout-submit">Logout</button>
						</form>';
					
					}
					else{
						echo '<h1>Login</h1>';
						echo '
						<form action="includes/login.inc.php" method="post">
						<div class="form-group">
							<input type="text" name="mailuid" placeholder="User Name/E-mail..." class="form-control">
						</div>
						<div class="form-group">
							<input type="password" name="pwd" placeholder="Password..." class="form-control">
						</div>
						<button type="submit" name="login-submit" class="btn btn-primary">Login</button>
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

<?php
require "footer.php";
?>