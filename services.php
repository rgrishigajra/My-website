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
		<div>
			<br>
			<br>
			<br>
			<br>
			<h2 style="text-align: center;">How can We Help you today?</h2><a style="padding:70px;margin:700px;border-radius: 2px; text-align: center;" href="all.php"><h2>All</h2></a>
			<div class="container">
                <div class="row text-center" >
                    <a href="carpen.php" style="color: #373737"><div class="col-md-3 right-border" style="background-color: #f8b439;padding:50px;margin:40px;border-radius: 20px;" >
						<img src="img/carpen.png" height="100" />
                        <h4 class="font-medium">Carpentary</h4>
                    </div></a>
                    <a href="computer_technician.php" style="color: #373737"><div class="col-md-3 right-border" style="background-color: #f8b439;padding:50px;margin:40px;border-radius: 20px;" >
                        <img src="img/comp.png" height="100" />
                        <h4 class="font-medium">Computer Technician</h4>
                    </div></a>
                    <a href="electrician.php" style="color: #373737"><div class="col-md-3 right-border" style="background-color: #f8b439;padding:50px;margin:40px;border-radius: 20px;" >
                        <img src="img/elect.png"  height="100" />
                        <h4 class="font-medium">Electrician</h4>
                   </div></a>
                </div>
                	<div class="row text-center" >
                	<div class="col-md-2"></div>
                    <a href="painter.php" style="color: #373737"><div class="col-md-3 border-muted" style="background-color: #f8b439;padding:50px;margin:40px;border-radius: 20px;" >
                        <img src="img/paint.png" height="100" />
                        <h4 class="font-medium">Painter</h4>
                        </div></a>

                    <a href="plumber.php" style="color: #373737"> <div class="col-md-3 border-muted" style="background-color: #f8b439;padding:50px;margin:40px;border-radius: 20px;" href="plumb.php">
                        <img src="img/plumbing.png" height="100">
                        <h4 class="font-medium">Plumber</h4>
                        </div>></a>
                </div>
            </div>