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
			  <a class="navbar-brand" href="MyHomePage.html"><img id="logo" src="img/logo2.png" alt="Handyman logo"class="img-responsive"style="width:50px"></a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
			  <ul class="nav navbar-nav">
				<li><a href="index.php" class="a" style="font-size:24px;color:#373737">HandyMan</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a style="color:#373737" class="a"href="index.php"><span class="glyphicon glyphicon-home"></span> Back To Home</a></li>
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
		<br>
		<br>
		<br>
		<br>
		<div class="row">
			<div class="col-sm-4"></div>
			<div class="col-sm-4">
				<div>
					<form action="controllers/login.php" method="POST">
					<div class="form-group" style>
					<label for="usr">Email:</label>
					<input type="text" class="form-control" id="usr" name="email" required="true">
					</div>
					<div class="form-group">
					<label for="pwd">Password:</label>
					<input type="password" class="form-control" id="pwd" name="password" required="true">
					</div>
					<div align="center">
							<button type="submit" class="btn btn-default" style="background-color:#F8B439;">Login</button>
					</div>
				</form>
				</div>
			</div>
			<div class="col-sm-4"></div>
		</div>
	</div>
