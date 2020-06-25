<?php 

require 'connection.php';

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$address = $_POST['address'];
$city = $_POST['city'];
$pass = $_POST['password'];
$cpass = $_POST['cpassword'];

	if($pass != $cpass){
		header('Location: ../signup.php');
	}else{

		$sql = "INSERT INTO users (fname, lname, password, address, city, email)
		VALUES ('$fname', '$lname', '$pass', '$address', '$city', '$email')";

		if ($conn->query($sql) === TRUE) {
		    header("Location: ../login.php");
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}

?>
