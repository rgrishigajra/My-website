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
				background-image: url("img/city.jpg");
				background-size: cover;
			}
			.navnav {
				background-color: transparent;
				border-style:none;
				padding:25px;
				font-size:14px;
				}
		</style>
	</head>
	<body>
				<!--Navbar-->
		<nav id="#navnav" class="navnav navbar-default navbar-fixed-top">
		  <div class="container-fluid">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>                        
			  </button>
			  <a class="navbar-brand" href="index.php"><img id="logo" src="img/logo2.png" alt="Handyman logo"class="img-responsive"style="width:50px"></a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
			  <ul class="nav navbar-nav">
				<li><a href="index.php" class="a" style="font-size:24px;text-shadow: 1px 1px 1px #000000; color:#f8b439;"">HandyMan</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a style="text-shadow: 1px 1px 1px #000000; color:#f8b439; font-size: 1.2em" class="a"href="login.php"><span class="glyphicon glyphicon-user"></span> Go To Login</a></li>
			  </ul>
			</div>
		  </div>
		</nav>
		<!--End of Navbar-->
		
		 
	<div class="container">
		<br>
		<br>
		<br>

		<div class="row">
			<div class="col-sm-4"></div>
			<div class="col-sm-4">
				<div style="text-shadow: 1px 1px 1px #000000; color:#f8b439;">
					<form action="controllers/signup.php" method="POST">
					<div class="form-group" style>
					<label for="fname">First Name:</label>
					<input type="text" class="form-control" id="fname" name="fname" required="true">
					</div>
					<div class="form-group">
					<label for="lname">Last Name:</label>
					<input type="text" class="form-control" id="lname" name="lname" required="true">
					</div>
					<div class="form-group">
					<label for="email">Email:</label>
					<input type="email" class="form-control" id="email" name="email" required="true">
					</div>

					<div class="form-group" style>
					<label for="add">Address:</label>
					<input type="text" class="form-control" id="add" name="address" required="true">
    				 <div class="form-group">
  					<label for="sel1">Choose Your City:</label>
  					<select class="form-control" id="city" name="city" required="true">
    				<option value="mumbai">Mumbai</option>
				    <option value="delhi">Delhi</option>
				    <option value="bangalore">Bangalore</option>
				    <option value="calcutta">Calcutta</option>
				    <option value="chennai">Chennai</option>
  					</select>
					</div> 
					<div class="form-group" style>
					<label for="pwd">Enter Password:</label>
					<input type="password" class="form-control" id="pwd" name="password" required="true">
					</div>
					<div class="form-group" style>
					<label for="cpwd">Confirm Password:</label>
					<input type="password" class="form-control" id="cpwd" name="cpassword" required="true">
					</div>					
					
					<div align="center">
							<button type="submit" class="btn btn-default" style="background-color:#F8B439;">Sign Up</button>
					</div>
				</form>
				</div>
			</div>
			<div class="col-sm-4"></div>
		</div>
	</div>
