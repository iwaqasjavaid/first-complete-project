<?php
define('TITLE','Change Password');
define('PAGE', 'Requesterchangepass');
include 'includes/header.php';
include '../connection.php';


 session_start();
if($_SESSION['is_login'])
{
$rEmail=$_SESSION['rEmail'];
}else{
       header('location:requesterLogin.php');}
	//echo "<scrpit>location.href='requesterLogin.php';</script>";}



// update button presses and work starts

if(isset($_REQUEST['passupdate']))
{
   
$rEmail=$_SESSION['rEmail'];

if($_REQUEST['rPassword']=="")
  { $passmsg="<div class='alert alert-warning  col-sm-6 ml-5 mt-2'>Fill All Fields</div>"; 
 }else

 {

$rpass=$_REQUEST['rPassword'];

$sql="update requesterlogin_tb set r_password='$rpass'  where  r_email='$rEmail' ";

$result=$conn->exec($sql);

if($result){

$passmsg="<div class='alert alert-success  col-sm-6 ml-5 mt-2'>Password change Successfully</div>";

}else{

$passmsg="<div class='alert alert-danger  col-sm-6 ml-5 mt-2'>Errorrr</div>";
}


 } 

}

?>

<!-- START User Change Password 2nd Column -->
<div class="col-sm-9 col-md-10">
	
<form class="mt-5 mx-5" action="" method="POST">

<div class="form-group">
<label for="inputEmail">Email</label>
<input type="email" value="<?php echo $rEmail;?>" id="inputEmail" class="form-control" readonly>	
</div>

<div class="form-group">
<label for="inputnewpassword">New Password</label>
<input type="text" name="rPassword" id="inputnewpassword" class="form-control" placeholder="New Password">
<button type="submit" class="btn btn-outline-danger mt-3" name="passupdate">Update</button>
</div>


</form>
<?php if(isset($passmsg)){echo $passmsg;} ?>

</div>
<!-- START User Change Password 2nd Column -->



<?php
include 'includes/footer.php';
?>