<?php
require "header.php";
?>

<div class="container">
	
	<?php
	if (isset($_SESSION["admin"])) {
		echo "<h1>Welcome to Admin section</h1>";
		echo '<p >This is admin page and you are currently logged in as ' . $_SESSION["userUid"] . '</p>';
			
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
						<input type="checkbox" name="admin-cb" value="1">
						<label form-check-label>Admin</>
					</div>
					<div class="form-group">
						<button type="submit" name="signup-submit" class="btn btn-primary">Signup</button>
					</div>
				</form>';
	}
	?>

<?php
require "footer.php";
?>