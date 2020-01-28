<?php
 include 'connection.php';

if (isset($_REQUEST['fbtn'])) {
	
	// checking empty fields....
if (($_REQUEST['fname']=="")  ||  ($_REQUEST['femail']=="")  || ($_REQUEST['fpassword']==""))
{
	
  $regmsg="<div class='alert alert-warning mt-2' role='alert'><b>All Fields are Required</b></div>";

}else{

 // two users should not have same email so checking here..
$q="select r_email from requesterlogin_tb where r_email= '".$_REQUEST['femail']."'";

$ckres = $conn->query($q);
if($ckres->rowCount()>0){

$regmsg="<div class='alert alert-warning mt-2' role='alert'><b>Email already exists</b></div>";

}else{

// Assigining values to variables
$fname = $_REQUEST['fname'];
$femail = $_REQUEST['femail'];
$fpswd = $_REQUEST['fpassword'];

$sql = "insert into requesterlogin_tb(r_name,r_email,r_password) values ('$fname','$femail','$fpswd')";

$res=$conn->exec($sql);

if($res){

$regmsg="<div class='alert alert-success mt-2' role='alert'><b>Registered Successfully</b></div>";

}else{

$regmsg="<div class='alert alert-danger mt-2' role='alert'>unable to insert data</div>";

}


}

}

}


?>


 <!-- Start Form with container here -->	

<div class="container pt-5" id="registration">
	<h2 class="text-center">Create Acount</h2>

	   <div class="row mt-4 mb-4">
	  	<div class="col-md-6 offset-md-3">
	  		
	  		<form action="" class="shadow-lg p-4" method="post">
	   <div class="form-group">
	   	<i class="fas fa-user"></i><label for="name" class="font-weight-bold pl-2">Name:</label><input type="text" name="fname" class="form-control" placeholder="Name">
       </div>  			
   
 <div class="form-group">
	   	<i class="fas fa-user"></i><label for="email" class="font-weight-bold pl-2">Email:</label><input type="email" name="femail" class="form-control" placeholder="Email">
	   	<small class="form-text">we will take care of your security</small>
       </div> 


 <div class="form-group">
	   	<i class="fas fa-key"></i><label for="password" class="font-weight-bold pl-2">New Password:</label><input type="password" name="fpassword" class="form-control" placeholder="*********">
       </div> 

<button type="submit" name="fbtn" class="btn btn-outline-danger mt-5 btn-block shadow-sm font-weight-bold">Submit</button>
<em style="font-size: 15px;">Note:By Clicking This You Agree on Terms</em>
<?php if(isset($regmsg)){ echo $regmsg; } ?>
	  		</form>
	  	</div>
	  </div>
</div>

 <!-- End Registration Form container here -->
