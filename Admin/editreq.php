<?php

define('TITLE','Update requester');
define('PAGE', 'requesters');
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
<h3 class="text-center">Ypdate Requester Details</h3>
<?php  //echo $_REQUEST['id'];

if(isset($_REQUEST['edit']))
{
  $sql="select * from requesterlogin_tb where r_login_id = {$_REQUEST['id']}";
 
 $result=$conn->query($sql);
 $row = $result->fetch(PDO::FETCH_ASSOC);
  }

?>



<?php 

if(isset($_REQUEST['requpdate']))
{

$rid= $_REQUEST['r_login_id'];
$rname=$_REQUEST['r_name'];
$remail=$_REQUEST['r_email'];

$sql="update requesterlogin_tb set r_name='$rname',r_email='$remail' where r_login_id=$rid";

$result=$conn->exec($sql);

if($result == true)
{$msg="<div class='alert alert-success col-sm-6 ml-5 mt-2'>Updated Successfully</div>";}
else{$msg="<div class='alert alert-danger col-sm-6 ml-5 mt-2'>Unable to update</div>";}

}
?>


<form action="" method="post">
	
<div class="form-group">
<label for="r_login_id">Requester ID</label>
<input type="text" class="form-control" name="r_login_id"  value="<?php if(isset($row['r_login_id'])){ echo $row['r_login_id']; }?>" readonly>	
</div>



<div class="form-group">
<label for="r_name">Name</label>
<input type="text" class="form-control" name="r_name"  value="<?php if(isset($row['r_name'])){ echo $row['r_name']; }?>" required>	
</div>


<div class="form-group">
<label for="r_email">Email</label>
<input type="text" class="form-control" name="r_email"  value="<?php if(isset($row['r_email'])){echo $row['r_email']; }?>" required>	
</div>


<div class="text-center">
	<button type="submit" name="requpdate" class="btn btn-danger">Update</button>
	<a href="requester.php" class="btn btn-secondary">Close</a>
</div>
<?php if(isset($msg)){echo $msg; } ?>

</form>

                      </div>
                <!-- Start 2nd Column here -->




<?php include 'includes/footer.php';?>