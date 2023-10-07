 
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	include "connect.php";
	$fname = $_POST['fname'];
	$mname = $_POST['mname'];
	$lname = $_POST['lname'];
	$phone = $_POST['phone'];
	$email = $_POST['email2'];
	$password2 = $_POST['password2'];
	$address = $_POST['address'];


	$ec =  "SELECT * FROM `create` WHERE email = '$email';";
	$pc =  "SELECT * FROM `create` WHERE phone = '$phone';";

	$erun = mysqli_query($conn, $ec);
	$prun = mysqli_query($conn, $pc);

	$erow = mysqli_num_rows($erun);
	$prow = mysqli_num_rows($prun);
	if ($prow > 0 || $erow > 0) {
		if ($erow > 0) {
			echo "Email Already Used<br>";
		}
		if($prow>0){
			
			echo "Phone Already Used<br>";
		}
	} else {


		$sql = "INSERT INTO `create` ( `fname`,`mname`,`lname`,`phone`,`email`, `password`,`address`) VALUES ( '$fname', '$mname', '$lname','$phone', '$email', '$password2', '$address')";

		$result = mysqli_query($conn, $sql);
		if (!$result) {
			echo ("Error insert");
		} else {
			session_start();
			$_SESSION['create'] = true;
			header("location: ../html/navbar.html");
		}
	}
}
?>