<?php
require "header.php";
?>

<main>
	<div class="container" >
		
			<?php
			if (isset($_SESSION["admin"])) {
				echo'<h1>Signup</h1>';
				echo '<form action="includes/signup.inc.php" method="post">
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
			?>
	</div>
</main>

<?php
require "footer.php";
?>