<?php

define('TITLE','Edit Technician_Info');
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


<!-- Start 2nd Column here -->

<div class="col-sm-6 mt-5 mx-3 jumbotron">
<h3 class="text-center">Update Technician Details</h3>
<?php  //echo $_REQUEST['id'];

if(isset($_REQUEST['edit']))
{
  $sql="select * from technician_tb where emp_id = {$_REQUEST['id']}";
 
 $result=$conn->query($sql);
 $row = $result->fetch(PDO::FETCH_ASSOC);
  }

?>



<?php 

if(isset($_REQUEST['empupdate']))
{

$eId= $_REQUEST['empId'];
$eName=$_REQUEST['empName'];
$eCity=$_REQUEST['empCity'];
$eMobile=$_REQUEST['empMobile'];
$eEmail=$_REQUEST['empEmail'];

$sql="update technician_tb set emp_name='$eName',emp_city='$eCity',emp_mobile=$eMobile,emp_email='$eEmail' where emp_id=$eId";

$result=$conn->exec($sql);

if($result == true)
{$msg="<div class='alert alert-success col-sm-6 ml-5 mt-2'>Updated Successfully</div>";}
else{$msg="<div class='alert alert-danger col-sm-6 ml-5 mt-2'>Unable to update</div>";}

}

?>



<form action="" method="post">
	
<div class="form-group">
<label for="empId">Emp ID</label>
<input type="text" class="form-control" name="empId" value="<?php if(isset($row['emp_id'])){echo $row['emp_id']; }?>" readonly>	
</div>



<div class="form-group">
<label for="empName">Name</label>
<input type="text" class="form-control" name="empName" value="<?php if(isset($row['emp_name'])){echo $row['emp_name']; }?>" required>	
</div>




<div class="form-group">
<label for="empCity">City</label>
<input type="text" class="form-control" name="empCity"  value="<?php if(isset($row['emp_city'])){ echo $row['emp_city']; }?>" required>	
</div>




<div class="form-group">
<label for="empMobile">Mobile</label>
<input type="text" class="form-control" name="empMobile" onkeypress="isInputNumber(event)" value="<?php if(isset($row['emp_mobile'])){ echo $row['emp_mobile']; }?>" required>	
</div>




<div class="form-group">
<label for="empEmail">Email</label>
<input type="email" class="form-control" name="empEmail"  value="<?php if(isset($row['emp_email'])){echo $row['emp_email']; }?>" required>	
</div>


<div class="text-center">
	<button type="submit" name="empupdate" class="btn btn-danger">Update</button>
	<a href="technician.php" class="btn btn-secondary">Close</a>
</div>
<?php if(isset($msg)){echo $msg; } ?>

</form>

                      </div>
                <!-- Start 2nd Column here -->



<script>

function isInputNumber(evt){

let ch = String.fromCharCode(evt.which);

if (!(/[0-9]/.test(ch))){
	evt.preventDefault();
}


}
</script>



<?php include 'includes/footer.php';?>