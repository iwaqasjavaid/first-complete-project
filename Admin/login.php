<?php
include '../connection.php';
session_start();

if(!isset($_SESSION['is_adminlogin']))
{

if(isset($_REQUEST['lbtn'])){
$lem= trim($_REQUEST['aEmail']);
$lpswd=trim($_REQUEST['aPassword']);

$sql="select a_email,a_password from adminlogin_tb where a_email='".$lem."'  AND  a_password='".$lpswd."'  limit 1";

 $result=$conn->query($sql);

// print_r($result);

if($result->rowCount()==1){

$_SESSION['is_adminlogin']=true;
$_SESSION['aEmail']=$lem;

// echo "<script> alert('success')</script>";
//	echo "<script> location.href='RequesterProfile.php';</script>";
header('location:dashboard.php');
//exit;
}else{

	$msg="<div class='alert alert-warning mt-2'>Enter valid credentials</div>";
}

}

}else{

header('location:dashboard.php');
//echo "<script> location.href='RequesterProfile.php';</script>";

}


?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Form</title>
   
   <!-- Bootstrap link -->
	<link rel="stylesheet" href="../css/bootstrap.min.css">

    <!-- Font Awesome link -->
	<link rel="stylesheet" href="../css/all.min.css">

</head>
<body>

<div class="mt-5 text-center mb-3" style="font-size: 25px;">
<i class="fas fa-stethoscope"></i>	
<span>Online Service Management System</span></div>
<p class="text-center" style="font-size: 20px;"><i class="fas fa-user-secret text-danger"></i>Admin Area (Demo)</p>

<div class="container-fluid">
	<div class="row justify-content-center mt-5">
		<div class="col-sm-6 col-md-4">
			
<form action="" class="shadow-lg p-4" method="POST"> 
<div class="form-group">
<i class="fas fa-user"></i>
<label for="email" class="font-weight-bold pl-2">Email:</label>
<input type="email" name="aEmail" class="form-control" placeholder="Email">
<small class="form-text "> We'll Never Share Your Email With Anyone Else</small>
</div>


<div class="form-group">
<i class="fas fa-key"></i>
<label for="pass" class="font-weight-bold pl-2">Password</label>
<input type="password" name="aPassword" class="form-control" placeholder="Password">
</div>
<button type="submit" class="btn btn-outline-danger mt-3 font-weight-bold btn-block shadow-sm" name="lbtn">Login</button>
 </form>
<?php if(isset($msg)) { echo $msg; } ?>

<div class="text-center"><a href="../index.php" class="btn btn-info mt-3 font-weight-bold shadow-sm">Back to Home</a>
	
</div>


		</div>
	</div>
</div>





</div>













<!-- JavaScript -->
<script src="../js/jquery.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/all.min.js"></script>	
</body>
</html>