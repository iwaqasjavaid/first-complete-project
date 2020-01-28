<?php

define('TITLE','insert requesters');
define('PAGE', 'insert requesters');
include '../connection.php';
include 'includes/header.php';

session_start();

if(isset($_SESSION['is_adminlogin']))
{
	
$aEmail=$_SESSION['aEmail'];
}else{

	header('location:login.php');
}
?>




<?php
if(isset($_REQUEST['reqsubmit']))
{
$rname=$_REQUEST['r_name'];
$rem=$_REQUEST['r_email'];
$rpa=$_REQUEST['r_password'];
	
 $sql=" insert into requesterlogin_tb(r_name,r_email,r_password) values ('$rname','$rem','$rpa')";
 $result=$conn->exec($sql);

if($result == true)
{

	$msg="<div class='alert alert-success col-sm-6 ml-5 mt-2'>Requester Added Successfully</div>";
}else{

$msg="<div class='alert alert-danger col-sm-6 ml-5 mt-2'>Adding Failed</div>";
}

}
?>


            <!-- Start 2nd Column herre -->
<div class="col-sm-6 mt-5 mx-3 jumbotron">
<h3 class="text-center">Add New Requester</h3>
<form action="" method="post">
	

<div class="form-group">
<label for="r_name">Name:</label>
<input type="text" class="form-control" name="r_name" required>	
</div>


<div class="form-group">
<label for="r_email">Email:</label>
<input type="text" class="form-control" name="r_email" required>	
</div>


<div class="form-group">
<label for="r_password">Password:</label>
<input type="password" class="form-control" name="r_password" required>	
</div>



<div class="text-center">
	<button type="submit" name="reqsubmit" class="btn btn-danger">ADD</button>
	<a href="requester.php" class="btn btn-secondary">Close</a>
</div>
<?php if(isset($msg)){echo $msg;} ?>

</form>

                      </div>
                <!-- Start 2nd Column here -->






















<!-- Ending 2nd Column herre -->



<?php 

include 'includes/footer.php';

?>

