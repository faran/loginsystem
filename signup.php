<?php
require "header.php";
?>

<main>
	<div class="container" >
		<h1>Signup</h1>

					<?php
					if (!isset($_SESSION["userId"])) {
						// echo '<form action="includes/logout.inc.php" method="post">
						// <button type="submit" name="logout-submit">Logout</button>
						// </form>';
						echo '<form class="form-control" action="includes/signup.inc.php" method="post">
				<div class="form-group">
					<input type="text" name="uid" placeholder="User Name" class="form-control">
				</div>
				<div class="form-group">
					<input type="text" name="mail" placeholder="Email" class="form-control">
				</div>
				<div class="form-group">
					<input type="password" name="pwd" placeholder="Password" class="form-control">
				</div>
				<div class="form-group">
					<input type="password" name="pwd-repeat" placeholder="Re-enter Password" class="form-control">
				</div>
				<div class="form-group">
					<button type="submit" name="signup-submit" class="btn btn-primary">Signup</button>
				</div>
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


<!-- 		<form class="form-inline">
			<form class="form-control" action="includes/signup.inc.php" method="post">
				<div class="form-group">
					<input type="text" name="uid" placeholder="User Name" class="form-control">
				</div>
				<div class="form-group">
					<input type="text" name="mail" placeholder="Email" class="form-control">
				</div>
				<div class="form-group">
					<input type="password" name="pwd" placeholder="Password" class="form-control">
				</div>
				<div class="form-group">
					<input type="password" name="pwd-repeat" placeholder="Re-enter Password" class="form-control">
				</div>
				<div class="form-group">
					<button type="submit" name="signup-submit" class="btn btn-primary">Signup</button>
				</div>
			</form>
		</form> -->
	</div>
</main>