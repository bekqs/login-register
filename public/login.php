<?php

session_start();

if (isset($_POST['submit'])) {
	
	include 'config/dbh.php';

	$email = mysqli_real_escape_string( $conn , $_POST['email'] );
	$pass = mysqli_real_escape_string( $conn , $_POST['pass'] );

	if (empty($email) || empty($pass)) {
		header("Location: index.php?login=empty");
		exit();
	} else {
		$sql = "SELECT * FROM users WHERE user_email = '$email'";
		$result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        
		if ($resultCheck < 1) {
			header("Location: index.php?login=error");
			exit();
		} else {
			if ($row = mysqli_fetch_assoc($result)) {
				$hashedPassCheck = password_verify($pass, $row['user_pass']);
				if ($hashedPassCheck == false) {
					header("Location: index.php?login=error");
					exit();
				} elseif ($hashedPassCheck == true) {
					$_SESSION['user_name'] = $row['user_name'];
					$_SESSION['user_email'] = $row['user_email'];
					header("Location: index.php?login=success");
					exit();
				}
			}
		}
	}
} else {
	header("Location: index.php?login=error");
	exit();
}