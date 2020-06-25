<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "handyman";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);




$host = "localhost"; 
$user = "postgres"; 
$pass = "123456"; 
$db = "DDB";
$con = pg_connect("host=$host dbname=$db user=$user password=$pass")
	or die ("Could not connect to server\n"); 
 
?>