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
<nav class="navbar navbar-dark fixed-top bg-danger flex-md-nowrap p-0 shadow"><a class="navbar-brand col-sm-3 col-md-2 mr-0" href="dashboard.php">OSMS Project</a></nav>


                        <!-- Start Container -->
          <div class="container-fluid" style="margin-top: 40px;">

	                    <!-- Start Row -->
	                     <div class="row">

		          <!-- START Side Bar 1st Column -->
                   <nav class="col-sm-2 bg-light sidebar py-5">
                     <div class="sidebar-sticky">
		
		             <ul class="nav flex-column">
<li class="nav-item d-print-none"><a class="nav-link <?php if(PAGE=='dashboard'){echo 'active';} ?> " href="dashboard.php"><i class="fas fa-tachometer-alt"></i>Profile</a></li>


<li class="nav-item d-print-none"><a class="nav-link <?php if(PAGE=='work'){echo 'active';} ?> " href="work.php"><i class="fab fa-accessible-icon"></i>Work Order</a></li>


<li class="nav-item d-print-none"><a class="nav-link <?php if(PAGE=='request'){echo 'active';} ?> " href="request.php"><i class="fas fa-accessible-icon"></i>Request</a></li>



<li class="nav-item d-print-none"><a class="nav-link <?php if(PAGE=='assests'){echo 'active';} ?> " href="assests.php"><i class="fas fa-database"></i>Assests</a></li>


<li class="nav-item d-print-none"><a class="nav-link <?php if(PAGE=='technician'){echo 'active';} ?> " href="technician.php"><i class="fas fa-accessible-icon"></i>Technician</a></li>


<li class="nav-item d-print-none"><a class="nav-link <?php if(PAGE=='requester'){echo 'active';} ?> " href="requester.php"><i class="fas fa-users"></i>Requester</a></li>



<li class="nav-item d-print-none"><a class="nav-link <?php if(PAGE=='sell report'){echo 'active';} ?> " href="soldproductreport.php"><i class="fas fa-table"></i>Sell Report</a></li>



<li class="nav-item d-print-none"><a class="nav-link <?php if(PAGE=='work report'){echo 'active';} ?> " href="workreport.php"><i class="fas fa-table"></i>Work Report</a></li>



<li class="nav-item d-print-none"><a class="nav-link <?php if(PAGE=='change pass'){echo 'active';} ?> " href="changepass.php"><i class="fas fa-key"></i>Change Password</a></li>



<li class="nav-item d-print-none"><a class="nav-link" href="../logout.php"><i class="fas fa-sign-out-alt"></i>Log-Out</a></li>




                              </ul>	
                             		</div>	
		                                 </nav>
	                           	<!-- END Side Bar 1st column -->
