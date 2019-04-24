<?php

if(isset($_POST['signup-submit'])){
	
	require "db.inc.php";

	$username = $_POST['uid'];
	$email = $_POST['mail'];
	$password = $_POST['pwd'];
	$passwordRepeat = $_POST['pwd-repeat'];
	$adminCB = $_POST['admin-cb'] == '1' ? '1' : '0';

	if(empty($username) || empty($email) || empty($password) || empty($passwordRepeat)){
		header("Location: ../admin.php?error=emptyfields&uid=".$username."&mail=".$email."&pwd".$password);
		exit();
	}
	else if(!filter_var($email, FILTER_VALIDATE_EMAIL) && (!preg_match("/^[a-zA-Z0-9]*$/", $username))){
		header("Location: ../admin.php?error=invalidmailuid");
	}
	else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		header("Location: ../admin.php?error=emptyfields&uid=".$username);
		exit();
	}
	else if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
		header("Location: ../admin.php?error=invaliduid&mail=".$email);
		exit();
	}
	else if($password !== $passwordRepeat){
		header("Location: ../admin.php?error=passwordcheck&uid=".$username."&mail=".$email);
		exit();
	}
	else {
		$sql = "SELECT uidUsers FROM users WHERE uidUsers=?";
		$stmt = mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt, $sql)){
			header("Location: ../admin.php?error=sqlerror");
			exit();
		}
		else{
			mysqli_stmt_bind_param($stmt, "s", $username);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_store_result($stmt);
			$resultCheck = mysqli_stmt_num_rows($stmt);
			if ($resultCheck > 0) {
				header("Location: ../admin.php?error=usertaken&mail=".$mail);
				exit();
			}

			//email check
			else{
				$sql = "INSERT INTO users (uidUsers, emailUsers, pwdUsers, admin) VALUES (?, ?, ?, ?)";
				$stmt = mysqli_stmt_init($conn);
				if(!mysqli_stmt_prepare($stmt, $sql)){
					header("Location: ../admin.php?error=sqlerror");
					exit();
				}
				else{
					$hasedPwd = password_hash($password, PASSWORD_DEFAULT);
					mysqli_stmt_bind_param($stmt, "sssi", $username, $email, $hasedPwd, $adminCB);
					mysqli_stmt_execute($stmt);
					header("Location: ../admin.php?signup=success");
					exit();
				}
			}
		}
	}
	mysqli_stmt_close($stmt);
	mysqli_close($conn);
}
else{
	header("Location: ../admin.php");
	exit();
}