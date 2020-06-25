<?php 
session_start();

require 'connection.php';

$email = $_POST['email'];
$password = $_POST['password'];


$sql = "SELECT password FROM users WHERE email='$email'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
	$_SESSION["email"] = $email;
	header('Location: ../services.php' );	
}else{

}


?>