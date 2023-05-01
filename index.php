

<?php
session_start();

include'admin/db.php';
include 'admin/fun.php';
$db=new connect();
$dconection=$db->dbconnect();

$obj2=new fun($dconection);
$output='';
$error=false;
$emailerror=$passerror=$username=$password='';
if(isset($_POST['signin'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	if(empty($username)){
		$error=true;
		$emailerror='please enter email';
	}
	if(empty($password)){
		$error=true;
		$passerror='please enter password';
	}
	if(!$error){
   // echo "ok";
	$output=$obj2->userlogin($username,$password);
	
}
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Human Trafficking Identification</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<script src="script.js"></script>
	<!-- jQuery library -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- Bootstrap JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style type="text/css">
	.carousel.vertical {
  position: relative;
  height: 100%;
}

.carousel.vertical .carousel-inner {
  height: 100%;
}

.carousel.vertical .carousel-inner > .item {
  -webkit-transition: 0.6s ease-in-out top;
  -o-transition: 0.6s ease-in-out top;
  transition: 0.6s ease-in-out top;
  top: 0;
  left: 0;
  height: 100%;
}

.carousel.vertical .active {
  top: 0;
}

.carousel.vertical .next {
  top: 100%;
}

.carousel.vertical .prev {
  top: -100%;
}

.carousel.vertical .next.left,
.carousel.vertical .prev.right {
  top: 0;
}

.carousel.vertical .active.left {
  top: -100%;
}

.carousel.vertical .active.right {
  top: 100%;
}

.carousel.vertical .carousel-control {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  height: 50px;
  width: 50px;
  background: none;
  margin: 0;
  border: none;
}

.carousel.vertical .carousel-control .glyphicon-chevron-up,
.carousel.vertical .carousel-control .glyphicon-chevron-down {
  position: absolute;
  left: 50%;
  transform: translateX(-50%);
  font-size: 30px;
  color: #fff;
  text-shadow: none;
}

.carousel.vertical .carousel-control.left .glyphicon-chevron-up {
  transform: translate(-50%, -50%) rotate(-90deg);
}

.carousel.vertical .carousel-control.right .glyphicon-chevron-down {
  transform: translate(-50%, 50%) rotate(90deg);
}
</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
		<a class="navbar-brand" href="index.php">Human Trafficking Victim Identification</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" href="#login">Login</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="signup.php">Signup</a>
				</li>
			</ul>
		</div>
	</nav>
<div class="container-fluid  flag">
	<div class="parallax">
		<div class="landing">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12 text-center info">
						<h1>Human Trafficking Victim Identification</h1>
						<!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi volutpat elit sit amet ante laoreet, quis faucibus nunc lacinia.</p>-->
						<a href="#login" class="btn btn-lg btn-primary">Login</a>
						<a href="signup.php" class="btn btn-lg btn-info">Signup</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>




<div class="container-fluid sj">
	<div id="login" class="parallax">
		<div class="login">
			<div class="container">
				<div class="row">
					<div class="col-md-4 text-center">
						<h2>Login to Your Account</h2>
						<form method="post" action="">
							<div class="form-group">
								<label for="username">Username:</label>
								<input type="text" name="username" id="username" class="form-control" required>
							</div>
							<div class="form-group">
								<label for="password">Password:</label>
								<input type="password" name="password" id="password" class="form-control" required>
							</div>
							<button type="signin" name="signin" class="btn btn-lg btn-primary">Login</button>
						</form>
					</div>
					<div class="col-md-4 "></div>
					<!-- <div class="col-md-4 ">
							<div id="myCarousel" class="carousel slide vertical" data-ride="carousel">
								 
								  <div class="carousel-inner">
								    <div class="item active" style="height:400px; width:300px;">
								      <img src="img/mh.png" alt="Slide 1" height=200px; width="120px;">
								    </div>
								    <div class="item">
								       <img src="img/gj.png" alt="Slide 1" height=200px; width="120px;">
								    </div>
								    <div class="item">
								       <img src="img/pb.png" alt="Slide 1" height=200px; width="120px;">
								    </div>
								  </div>

							
								  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
								    <span class="glyphicon glyphicon-chevron-up"></span>
								  </a>
								  <a class="right carousel-control" href="#myCarousel" data-slide="next">
								    <span class="glyphicon glyphicon-chevron-down"></span>
								  </a>
								</div>
					</div> -->
				</div>
				
			</div>
		</div>
	</div>
</div>
</body>
</html>
