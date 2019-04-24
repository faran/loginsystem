<?php
require "header.php";
?>

<main>
	<div class="container">
			<?php
			if (isset($_SESSION["userId"])) {
				echo '<p >This is index page and you are currently logged in as ' . $_SESSION["userUid"] . '</p>';
			}
			else{
				echo '<p>You are currently not logged in</p>';
				// echo '<form action="includes/login.inc.php" method="post">
				// <input type="text" name="mailuid" placeholder="User Name/E-mail...">
				// <input type="password" name="pwd" placeholder="Password...">
				// <button type="submit" name="login-submit">Login</button>
				// </form>';
			}
			?>
	</div>
</main>

<?php
require "footer.php";
?>