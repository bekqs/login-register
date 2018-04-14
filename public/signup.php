<?php

if (isset($_POST['submit'])) {
	include 'config/dbh.php';

    $name = mysqli_real_escape_string( $conn , $_POST['name']);
	$email = mysqli_real_escape_string( $conn , $_POST['email']);
	$pass = mysqli_real_escape_string( $conn , $_POST['pass']);

	if (empty($name) || empty($email) || empty($pass)) {
		header("Location: index.php?signup=empty");
		exit();
	} else {
		if (!preg_match("/^[a-z A-Z]*$/" , $name)) {
			header("Location: index.php?signup=invalid");
			exit();
		} else {
			if (!filter_var($email , FILTER_VALIDATE_EMAIL)) {
				header("Location: index.php?signup=email");
				exit();
            } else {
				$sql_e = "SELECT * FROM users WHERE user_email = '$email'";
				$row = mysqli_query($conn , $sql_e);
				$resultCheck = mysqli_num_rows($row);

				if ($resultCheck > 0) {
					header("Location: index.php?signup=emailexists");
					exit();
				} else {
                    $hashedpass = password_hash($pass, PASSWORD_DEFAULT);
                    $sql = "INSERT INTO users (user_name , user_email , user_pass) VALUES ('$name','$email', '$hashedpass');";
                    mysqli_query($conn , $sql);
                    header("Location: index.php?signup=success");
                    exit();
                }
			}
		}
	}

} else {
	header("Location: index.php");
	exit();
}