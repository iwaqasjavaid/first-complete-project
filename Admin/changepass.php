<?php

define('TITLE','change pass');
define('PAGE', 'change pass');
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
// update button presses and work starts

if(isset($_REQUEST['passupdate']))
{
   
$aEmail=$_SESSION['aEmail'];

if($_REQUEST['aPassword']=="")
  { $passmsg="<div class='alert alert-warning  col-sm-6 ml-5 mt-2'>Fill All Fields</div>"; 
 }else

 {

$apass=$_REQUEST['aPassword'];

$sql="update adminlogin_tb set a_password='$apass'  where  a_email='$aEmail' ";

$result=$conn->exec($sql);

if($result){

$passmsg="<div class='alert alert-success  col-sm-6 ml-5 mt-2'>Password change Successfully</div>";

}else{

$passmsg="<div class='alert alert-danger  col-sm-6 ml-5 mt-2'>Errorrr</div>";
}


 } 

}

?>

<!-- START ADmin Change Password 2nd Column -->
<div class="col-sm-9 col-md-10">
	
<form class="mt-5 mx-5" action="" method="POST">

<div class="form-group">
<label for="inputEmail">Email</label>
<input type="email" value="<?php echo $aEmail;?>" class="form-control" readonly>	
</div>

<div class="form-group">
<label for="inputnewpassword">New Password</label>
<input type="text" name="aPassword" class="form-control" placeholder="New Password">
<button type="submit" class="btn btn-outline-danger mt-3" name="passupdate">Update</button>
</div>


</form>
<?php if(isset($passmsg)){echo $passmsg;} ?>

</div>
<!-- START ADMIN Change Password 2nd Column -->




















     











<?php 

include 'includes/footer.php';

?>