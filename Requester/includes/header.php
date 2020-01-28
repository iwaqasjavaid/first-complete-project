<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">


	<title><?php echo TITLE ?></title>


    <!-- Bootstrap link -->
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<!-- Font Awesome link -->
	<link rel="stylesheet" href="../css/all.min.css">
   	<!-- Custom Css link -->
	<link rel="stylesheet" href="../css/custom.css">
	<link rel="stylesheet" href="../css/w.css">
</head>
<body>
	
	
                                 <!-- Top Nav-Bar -->
<nav class="navbar navbar-dark fixed-top bg-danger flex-md-nowrap p-0 shadow"><a class="navbar-brand col-sm-3 col-md-2 mr-0" href="RequesterProfile.php">OSMS poject</a></nav>


<!-- Start Container -->
<div class="container-fluid" style="margin-top: 40px;">

	<!-- Start Row -->
	<div class="row">

		<!-- START Side Bar 1st Column -->
		<nav class="col-sm-2 bg-light sidebar py-5">
		<div class="sidebar-sticky">
		
		<ul class="nav flex-column">
<li class="nav-item d-print-none"><a class="nav-link  <?php if(PAGE=='RequesterProfile'){echo 'active';} ?> " href="RequesterProfile.php"><i class="fas fa-user"></i>Profile</a></li>

<li class="nav-item d-print-none"><a class="nav-link  <?php if(PAGE=='SubmitRequest'){echo 'active';} ?> " href="SubmitRequest.php"><i class="fab fa-accessible-icon"></i>Submit Request</a></li>

<li class="nav-item d-print-none"><a class="nav-link  <?php if(PAGE=='CheckStatus'){echo 'active';} ?>  " href="CheckStatus.php"><i class="fas fa-align center"></i>Service Status</a></li>

<li class="nav-item d-print-none"><a class="nav-link  <?php if(PAGE=='Requesterchangepass'){echo 'active';} ?>" href="Requesterchangepass.php"><i class="fas fa-key"></i>Change Password</a></li>

<li class="nav-item d-print-none"><a class="nav-link" href="../logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
        </ul>	
		</div>	
		</nav>
		<!-- END Side Bar 1st column -->

       

