<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>First Project</title>
	<!-- Bootstrap link -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Font Awesome link -->
	<link rel="stylesheet" href="css/all.min.css">
    <!-- Google Font link -->
	<link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
	<!-- Custom Css link -->
	<link rel="stylesheet" href="css/custom.css">
</head>
<body>
	
 <!-- Start Navigation -->
 <nav class="navbar navbar-expand-sm navbar-dark bg-danger pl-5 fixed-top">
		<a href="index.php" class="navbar-brand">Hello</a>
		<span class="navbar-text">Customer happiness is our aim</span>
   <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu"><span class="navbar-toggler-icon"></span></button>	
   
<div class="collapse navbar-collapse" id="myMenu">
<ul class="navbar-nav pl-5 custom-nav">
	<li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
	<li class="nav-item"><a href="#services" class="nav-link">Services</a></li>
	<li class="nav-item"><a href="#registration" class="nav-link">Registration</a></li>
	<li class="nav-item"><a href="Requester/RequesterLogin.php" class="nav-link">Login</a></li>
	<li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
</ul>	
</div>
 </nav>
<!-- End Navigation -->




<!-- Start jumbotron here -->
<header class="jumbotron back-image" style="background-image: url(images/f.jpg);">
<div class="myclass mh">
<h1 class="text-uppercase text-warning font-weight-bold">Welcome to my first project</h1>
<a href="Requester/RequesterLogin.php" class="btn btn-success mr-4">login</a>
<a href="#registration" class="btn btn-danger mr-4">Sign Up</a>
</div>
</header>
<!-- End header jumbotron here -->



<!-- start introduction section -->
<div class="container">
	
<div class="jumbotron">
	
<h3 class="text-center">About my project services</h3>
<p>Hi i am waqas and here needs to be add more text</p>
</div>

</div>
<!-- END introduction section -->






<!-- start Services section -->
<div class="container text-center border-bottom" id="services">
	<h2>Our Services</h2>
	<div class="row mt-4">
	<div class="col-sm-4">
<!-- Font awesome tv wala -->		
	<a href="#"><i class="fa fa-tv fa-8x text-success"></i></a>
	<h4 class="mt-4">Eclectronic Appliances</h4>	
	</div>	
	


<div class="col-sm-4">
<!-- Font awesome slider -->		
	<a href="#"><i class="fa fa-sliders-h fa-8x text-primary"></i></a>
	<h4 class="mt-4">preventive maintainence</h4>	
	</div>	
	


<div class="col-sm-4">
<!-- Font awesome -->		
	<a href="#"><i class="fa fa-cogs fa-8x text-info"></i></a>
	<h4 class="mt-4">Fault Repair</h4>	
	</div>	
	
</div>
</div>
<!-- End Service Section Container -->	






 <!-- Start Registration Form with container here -->	
<?php include 'UserRegistration.php';  ?>

 <!-- End Registration Form container here -->




 <!-- Start happy Customer jumbotron -->

<div class="jumbotron bg-danger">
<div class="container">
	<h2 class="text-center text-white">Happy Customers</h2>
<div class="row mt-5">

<!-- Start Card here -->
<!-- first colum here -->	
		<div class="col-lg-3 col-sm-3">
			<div class="card shadow-lg mb-2">
				<div class="card-body text-center">
					<img src="images/a1.jpg" class="img-fluid" alt="image not found" style="border-radius: 100px;">
					<h4 class="card-title">Imran kumbo</h4>
					<p class="card-text">Imran is highly satisfied by Danda service provided by us</p>
				</div>
			</div>
			</div>
        <!-- End colum plus Card here -->


<!-- Same for other cards you can check -->
         <div class="col-lg-3 col-sm-3">
			<div class="card shadow-lg mb-2">
				<div class="card-body text-center">
					<img src="images/a1.jpg" class="img-fluid" alt="image not found" style="border-radius: 100px;">
					<h4 class="card-title">Kaleem Iyer</h4>
					<p class="card-text">Kaleem Iyer is highly satid by Danda service provided</p>
				</div>
			</div>
			
		</div>




         <div class="col-lg-3 col-sm-3">
			<div class="card shadow-lg mb-2">
				<div class="card-body text-center">
					<img src="images/a1.jpg" class="img-fluid" alt="image not found" style="border-radius: 100px;">
					<h4 class="card-title">Ayub Iyer</h4>
					<p class="card-text">Ayub Iyer is highly satisfied by Danda service provided by us</p>
				</div>
			</div>
			
		</div>


         <div class="col-lg-3 col-sm-3">
			<div class="card shadow-lg mb-2">
				<div class="card-body text-center">
					<img src="images/a1.jpg" class="img-fluid" alt="image not found" style="border-radius: 100px;">
					<h4 class="card-title">Ayub Iyer</h4>
					<p class="card-text">Ayub Iyer is highly satisfied by Danda service provided by us</p>
				</div>
			</div>
			
		</div>



</div>
</div>	
</div>
 <!-- Ending happy Customer jumbotron plus container -->






 <!-- Starting Contact us Section herer -->
<div class="container" id="contact">
	
<h2 class="text-center mb-4">Contact Us</h2>
 
<div class="row mt-4">




 <!-- Starting First Colum here -->
  <?php  include 'contactform.php'; ?> 
 <!-- end first column here -->





 <!-- Starting second Colum here -->
<div class="col-md-4 text-center">
 
<strong>Head Quater</strong><br>
my services pvt LTD,<br>
satellite town,gujranwala,<br>
gujranwala,055<br>
PHONE: 0315643362<br>
<small>Web Link:</small>
<a href="#" target="_blank">www.msgus.com</a><br>
	<br>  <br>


<strong>Branch</strong><br>
my services pvt LTD,<br>
Lakshmi chowk,Lhr,<br>
Lhr,042<br>
PHONE: 0315643362<br>
<small>Web Link:</small>
<a href="#" target="_blank">www.msgus.com</a><br>
</div>
<!-- End second Colum here -->


</div>
</div>
<!-- END Contact us Section herer -->



<!-- Start Footer -->
<footer class="container-fluid bg-dark text-white mt-5">
<div class="container">
	
<div class="row py-3">
	<!-- Start first colum -->
<div class="col-md-6">
	
<span class="pr-2">Follow us:</span>
<a href="#" target="_blank" class="pr-2 fi-color" ><i class="fab fa-facebook"></i></a>
<a href="#" target="_blank" class="pr-2 fi-color" ><i class="fab fa-twitter"></i></a>
<a href="#" target="_blank" class="pr-2 fi-color" ><i class="fab fa-youtube"></i></a>

</div>
<!-- END first colum -->



<!-- Start second colum -->
<div class="col-md-6 text-right">
	<small>Designe by <b>iwaqas</b> &copy; 2020</small>
	<small class="ml-2"><a href="Admin/login.php">Admin Login</a></small>
	
</div>




</div>
</div>	
</footer>
<!-- End Footer -->




<!-- JavaScript -->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/all.min.js"></script>
</body>
</html>