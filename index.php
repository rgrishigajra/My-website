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
				background-color: transparent;
				border-style:none;
				padding:25px;
				font-size:14px;
				-webkit-transition: all 0.4s ease;
				transition: all 0.4s ease;
				}
		</style>
		
		<script>
			
			$(document).ready(function(){
				$(window).scroll(function() {
					if ($(document).scrollTop() > 550) {
							$(".navnav").css("background-color", "#F8B439");
							$(".navnav").css("padding", "5px");
							$(".a").css("color", "#373737");
							$("#logo").attr("src","img/logo2alt.png");
							$("#logo").css("width","30px");
							
					} else {	
							$(".navnav").css("background-color", "transparent");
							$(".a").css("color", "#f4f4f4");
							$("#logo").attr("src","img/logo2.png");
							$(".navnav").css("padding", "25px");
							$("#logo").css("width","50px");
							};
					});
			});
		</script>
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
			  <a class="navbar-brand" href="index.php"><img id="logo" src="img/logo2.png" alt="Handyman logo"class="img-responsive"style="width:50px"></a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
			  <ul class="nav navbar-nav">
				<li><a href="HomePage.html" class="a"style="font-size:24px;color:#f4f4f4">HandyMan</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a style="color:#f4f4f4" class="a"href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
				<li><a style="color:#f4f4f4" class="a"href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
			  </ul>
			</div>
		  </div>
		</nav>
		<!--End of Navbar-->

   
		<!--Carousel-->
		  <div id="myCarousel" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
			  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			  <li data-target="#myCarousel" data-slide-to="1"></li>
			  <li data-target="#myCarousel" data-slide-to="2"></li>
			  <li data-target="#myCarousel" data-slide-to="3"></li>
			  <li data-target="#myCarousel" data-slide-to="4"></li>
			  <li data-target="#myCarousel" data-slide-to="5"></li>
			  <li data-target="#myCarousel" data-slide-to=""></li>
			</ol>

			<div class="carousel-inner">

			  <div class="item active">
				<img src="img\car1.jpg" alt="Slides1" style="width:100%;">
				<div class="carousel-caption">
				  <h3>Carpentry</h3>
				</div>
			  </div>

			  <div class="item">
				<img src="img\car2.jpg" alt="Slides2" style="width:100%;">
				<div class="carousel-caption">
				  <h3>Maintenance</h3>
				</div>
			  </div>
			
			  <div class="item">
				<img src="img\car3.jpg" alt="Slides3" style="width:100%;">
				<div class="carousel-caption">
				  <h3>Welding</h3>
				</div>
			  </div>
			  <div class="item">
				<img src="img\car4.jpg" alt="Slides3" style="width:100%;">
				<div class="carousel-caption">
				  <h3 style="color:#373737">Plumbing</h3>
				</div>
			  </div>
			  <div class="item">
				<img src="img\car5.jpg" alt="Slides3" style="width:100%;">
				<div class="carousel-caption">
				  <h3>Computer repairing</h3>
				</div>
			  </div>
			  <div class="item">
				<img src="img\car6.jpg" alt="Slides3" style="width:100%;">
				<div class="carousel-caption">
				  <h3 style="color:#f4f4f4" >Electrical<br> .</h3>
				</div>
			  </div>
			  <div class="item">
				<img src="img\car7.jpg" alt="Slides3" style="width:100%;">
				<div class="carousel-caption">
				  <h3 style="color:#373737">Laundary</h3>
				</div>
			  </div>
		  
			</div>

			<!-- Left and right controls -->
			<a class="left carousel-control" href="#myCarousel" data-slide="prev">
			  <span class="glyphicon glyphicon-chevron-left"></span>
			  <span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">
			  <span class="glyphicon glyphicon-chevron-right"></span>
			  <span class="sr-only">Next</span>
			</a>
		  </div>
		</div>
		<div>
		</div>
	
	<div class="container" style="margin-top:50px;height:250px;color: #f4f4f4; background-color: #373737;border-radius:15px;margin-bottom:50px;">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="text-center">India's largest home service provider</h2>
                    </div>
                    <div class="col-md-6 text-right ">
                        <div class="counter-blk">
                            <h1 class="font-medium "><span class="number_counter">1,000,000</span>+</h1>
                            <p class="h2 font-medium">HAPPY CUSTOMERS</p>
                        </div>
                    </div>
                    <div class="col-md-6 padding-muted-left">
                        <div class="counter-blk border-muted">
                            <h1 class="font-medium"><span  id="service_counter">10,000</span>+</h1>
                            <p class="h2 font-medium">TRUSTED SERVICE PROVIDERS</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-3 right-border">
						<img src="img/img1.png" width="50" height="50"/>
                        <h4 class="font-medium">Verified Professionals</h4>
                        <p>
                            All our professionals are background checked and verified to ensure your complete safety.
                        </p>
                    </div>
                    <div class="col-md-3 right-border">
                        <img src="img/img3.png" width="50" height="50"/>
                        <h4 class="font-medium">Insured Work</h4>
                        <p>
                            To make sure your trust in us is a 100%, we provide insurance coverage across our services.
                            The insurance period & amount varies from service to service.
                        </p>
                    </div>
                    <div class="col-md-3 right-border">
                        <img src="img/img2.png" width="50" height="50"/>
                        <h4 class="font-medium">Satisfaction Guaranteed</h4>
                        <p>
                            We hire only the most qualified professionals to ensure high quality services, such that
                            your satisfaction levels are always at a 100%.
                        </p>
                    </div>
                    <div class="col-md-3 border-muted">
                        <img src="img/img4.png" width="50" height="50"/>
                        <h4 class="font-medium">On Time Arrival</h4>
                        <p>
                            We ensure our professionals will arrive at your doorstep on time, every time.
                        </p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="block-head text-center">
                    <h2 class="font-medium margin-muted">How it works</h2>
                    <span></span>
                </div>
                <div class="row">
                    <div class="col-md-12 col-md-offset-0 col-sm-11 col-sm-offset-1">
                        <div class="col-md-2 col-sm-12 text-center"></div>
                        <div class="col-md-2 col-sm-3 text-center">
                            <img src="img/img5.png" width="149" class="custom-margin">
                            <h4 class="font-medium">Book</h4>
                            Share your need and information with us.
                        </div>
                        <div class="col-md-1 col-sm-1 text-center">
                                                        <div class="svg-ico-arrow-dims svg-ico-arrow"></div>
                        </div>
                        <div class="col-md-2 col-sm-3 text-center">
                            <img src="img/img6.png" width="149" class="custom-margin">
                            <h4 class="font-medium">Schedule</h4>
                            Schedule a time for us to attend to you.
                        </div>
                        <div class="col-md-1 col-sm-1 text-center">
                                                        <div class="svg-ico-arrow-dims svg-ico-arrow"></div>
                        </div>
                        <div class="col-md-2 col-sm-3 text-center">
                            <img src="img/img7.png" width="164" class="custom-margin">
                            <h4 class="font-medium">Relax</h4>
                            Our expert team will do the assigned task while you relax.
                        </div>
                        <div class="col-md-2 col-sm-12 text-center"></div>
                    </div>
                </div>
				
				    <div class="container row">
				  
			<div class="container" style="background-color:#373737;margin-top:50px;border-radius:15px;margin-bottom:50px;">
			  <h2 style="color:#f4f4f4">FAQS</h2>
			  <div class="panel-group" id="accordion">
				<div class="panel panel-default">
				  <div style="background-color:#F8B439;"class="panel-heading">
					<h4 class="panel-title">
					  <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Q. WHAT IS HANDYMAN ?</a>
					</h4>
				  </div>
				  <div id="collapse1" class="panel-collapse collapse in">
					<div class="panel-body">A. Handyman is a full-service home repair, improvement and maintenance company. We specialize in projects around your home ranging from general repairs to complete remodels. There is no job too small for our professional Craftsmen.</div>
				  </div>
				</div>
				<div class="panel panel-default">
				  <div style="background-color:#F8B439;"class="panel-heading">
					<h4 class="panel-title">
					  <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Q. WHO IS SENT TO MY HOUSE TO DO THE WORK?</a>
					</h4>
				  </div>
				  <div id="collapse2" class="panel-collapse collapse">
					<div class="panel-body">A. A HandyMAN craftsman will arrive at your home in a uniform with his own tools. We thoroughly screen each of our employees to ensure you can trust the person entering your home. On top of that all of our Craftsmen are licensed, bonded and insured as well as skilled and experienced for all of your home projects. We will arrive on time and ready to work!</div>
				  </div>
				</div>
				<div class="panel panel-default">
				  <div style="background-color:#F8B439;"class="panel-heading">
					<h4 class="panel-title">
					  <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Q. DO I PAY THE HANDYMAN SENT TO MY HOUSE?</a>
					</h4>
				  </div>
				  <div id="collapse3" class="panel-collapse collapse">
					<div class="panel-body">A. All payments are done on the website only.You don't have to pay to the Handyman.An OTP is generated after payment which is used for verification purposes.</div>
				  </div>
				</div>
			  </div> 
			</div>
							
				
				
                <div class="row text-center">
                    <p class="intro-text">
                       At HandyMan, we provide you with a variety of at-home services that simplify your everyday living. From beauty services, deep home cleaning, plumbing, carpentry, pest control to movers & packers all at your time & convenience. We are a dynamic team with just one passion: to make life easier for you. We currently operate across 5 cities - Bangalore, Hyderabad, Chennai, Mumbai and New Delhi.

                    </p>
                </div>
            </div>
	
	</body>
</html>