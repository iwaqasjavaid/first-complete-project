<?php

define('TITLE','insert Technician');
define('PAGE', 'Technician');
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
if(isset($_REQUEST['empsubmit']))
{
$eName=$_REQUEST['empName'];
$eCity=$_REQUEST['empCity'];
$eMobile=$_REQUEST['empMobile'];
$eEmail=$_REQUEST['empEmail'];
	
 $sql="insert into technician_tb(emp_name,emp_city,emp_mobile,emp_email) values ('$eName','$eCity',$eMobile,'$eEmail')";
 $result=$conn->exec($sql);

if($result == true)
{

	$msg="<div class='alert alert-success col-sm-6 ml-5 mt-2'>Technician Added Successfully</div>";
}else{

$msg="<div class='alert alert-danger col-sm-6 ml-5 mt-2'>Adding Failed</div>";
}

}
?>


            <!-- Start 2nd Column herre -->
<div class="col-sm-6 mt-5 mx-3 jumbotron">
<h3 class="text-center">Add New Technician</h3>
<form action="" method="post">
	

<div class="form-group">
<label for="empName">Name:</label>
<input type="text" class="form-control" name="empName" required>	
</div>




<div class="form-group">
<label for="empCity">City:</label>
<input type="text" class="form-control" name="empCity" required>	
</div>




<div class="form-group">
<label for="empMobile">Mobile:</label>
<input type="text" class="form-control" name="empMobile"  onkeypress="isInputNumber(event)"  required>	
</div>


<div class="form-group">
<label for="empEmail">Email:</label>
<input type="text" class="form-control" name="empEmail" required>	
</div>



<div class="text-center">
	<button type="submit" name="empsubmit" class="btn btn-danger">ADD</button>
	<a href="technician.php" class="btn btn-secondary">Close</a>
</div>
<?php if(isset($msg)){echo $msg;} ?>

</form>

                      </div>
<!-- Ending 2nd Column herre -->

<script>

function isInputNumber(evt){

let ch = String.fromCharCode(evt.which);

if (!(/[0-9]/.test(ch))){
	evt.preventDefault();
}


}
</script>

<?php 

include 'includes/footer.php';

?>

