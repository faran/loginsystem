<?php
require "header.php";
?>

<main>
	<div class="wrapper-main">
		<section class="section-default">
			<h1>Signup</h1>
			<form class="form-signup" action="includes/signup.inc.php" method="post">
				<input type="text" name="uid" placeholder="User Name">
				<input type="text" name="mail" placeholder="Email">
				<input type="password" name="pwd" placeholder="Password">
				<input type="password" name="pwd-repeat" placeholder="Re-enter Password">
				<button type="submit" name="signup-submit">Signup</button>
			</form>
		</section>
	</div>
</main>

<?php
require "footer.php"
?>