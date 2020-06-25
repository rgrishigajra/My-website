<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="script.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<link rel="icon" type="image/png" href="img\favicon.png">
		<title>HandyMan</title>

		<style>
			body{
				font-family: 'Roboto', sans-serif;
			}
			.navnav {
				background-color: transparent;
				border-style:none;
				padding:25px;
				font-size:14px;
				}				
			.carousel .item {
				  height: 600px;
				}

			.item img {
					position: absolute;
					top: 0;
					left: 0;
					min-height: 600px;
				}
				.navnav	{
				background-color: #f8b439;
				border-style:none;
				padding:5px;
				font-size:14px;
				-webkit-transition: all 0.4s ease;
				transition: all 0.4s ease;
				}
				
		</style>
		
	</head>
	
	<link rel="stylesheet" href="styles.css" />
	
	<body data-spy="scroll" data-target=".navbar" data-offset="50">
		<!--Navbar-->
		<nav id="#navnav" class="navnav navbar-default navbar-fixed-top">
		  <div class="container-fluid">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>                        
			  </button>
			  <a class="navbar-brand" href="index.php"><img id="logo" src="img/logo2alt.png" alt="Handyman logo"class="img-responsive"style="width:30px"></a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
			  <ul class="nav navbar-nav">
				<li><a href="index.php" class="a"style="font-size:24px;color:#373737">HandyMan</a></li>
			</ul>
		
			</div>
		  </div>
		</nav>
		<!--End of Navbar-->
		<div class="container">
			<br>
			<br>
			<br>
			<br>
			<?php

			require 'controllers/connection.php';
			$sql = "SELECT * FROM staff order by id";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
				    // output data of each row
				    echo '<ul class="list-group">';
				    while($row = $result->fetch_assoc()) {
				    	echo '<li class="list-group-item">' . $row['Id'] .'. Name:-' .$row["Name"].'<br>Rating:- '.$row["Rating"].'<br>Cost/Hour:- '.$row["Cost"].'<br>Type:- '.$row["Type"].'<div style="float: right;"><form action="delete.php" method="POST"><input type="hidden" name="id" value="'.$row["Id"].'"><input type="submit" class="btn" value="Delete"></form></div></li>';
				    }
				} else {
				    echo "0 results";
				}		


				$rs = pg_query($con, $sql) or die("Cannot execute query: $query\n");

				while ($row = pg_fetch_assoc($rs)) {
					echo '<li class="list-group-item">' . $row['id'] . ". " . $row['name'] . " <br>Rating:- " . $row['rating'].'<br>Cost/Hour:- '.$row["cost"].'<br>Type:- '.$row["type"].'<div style="float: right;"><form action="delete.php" method="POST"><input type="hidden" name="id" value="'.$row["id"].'"><input type="submit" class="btn" value="Delete"></form></div></li>';
					echo "\n";
				}
				
				echo "</ul>";


?>

	
		
			
		</div>
	</body>