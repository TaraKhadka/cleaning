<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	
	include "connect.php";
	$email = $_POST['email'];
	$pass = $_POST['password'];
	
	
	$sql = mysqli_query($conn, "SELECT * FROM `create` WHERE email='$email';");
	$row = mysqli_fetch_assoc($sql);
	if (mysqli_num_rows($sql) > 0) {
		if ($pass == $row["password"]) {
			session_start();
			$_SESSION['login'] = true;
			$_SESSION['email'] = "$email";
			$_SESSION['password'] = "$pass";

			// $_SESSION["id"] = $row['id'];

			header("location:./homepage.php");
		} else {
			echo "Invalid username or password";
		}
	} else {
		echo "Email Doesnot Exist";
	}
}
?>