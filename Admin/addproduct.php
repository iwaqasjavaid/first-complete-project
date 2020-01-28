<?php

define('TITLE','Add Product');
define('PAGE', 'assets');

include 'includes/header.php';
include '../connection.php';

session_start();

if(isset($_SESSION['is_adminlogin']))
{
	
$aEmail=$_SESSION['aEmail'];
}else{

	header('location:login.php');
}


?>


 





<?php
if(isset($_REQUEST['psubmit']))
{
$pname=$_REQUEST['pname'];
$pdop=$_REQUEST['pdop'];
$pava=$_REQUEST['pava'];
$ptotal=$_REQUEST['ptotal'];
$poriginalcost=$_REQUEST['poriginalcost'];
$psellingcost=$_REQUEST['psellingcost'];
	
 $sql="insert into assets_tb(pname,pdop,pava,ptotal,poriginalcost,psellingcost) values
  ('$pname','$pdop',$pava,$ptotal,$poriginalcost,$psellingcost)";
 $result=$conn->exec($sql);

if($result == true)
{

	$msg="<div class='alert alert-success col-sm-6 ml-5 mt-2'>Added Successfully</div>";
}else{

$msg="<div class='alert alert-danger col-sm-6 ml-5 mt-2'>Adding Failed</div>";
}

}
?>

















            <!-- Start 2nd Column herre -->
<div class="col-sm-6 mt-5 mx-3 jumbotron">
<h3 class="text-center">Add New Product</h3>
<form action="" method="post">
	

<div class="form-group">
<label for="pname">Product Name:</label>
<input type="text" class="form-control" name="pname" required>	
</div>


<div class="form-group">
<label for="pdop">Date of Purchase</label>
<input type="date" class="form-control" name="pdop" required>	
</div>




<div class="form-group">
<label for="pava">Available</label>
<input type="text" class="form-control" name="pava"  onkeypress="isInputNumber(event)" required>	
</div>



<div class="form-group">
<label for="ptotal">Total</label>
<input type="text" class="form-control" name="ptotal"  onkeypress="isInputNumber(event)"  required>	
</div>




<div class="form-group">
<label for="poriginalcost">Original Cost Each</label>
<input type="text" class="form-control" name="poriginalcost" onkeypress="isInputNumber(event)" required>	
</div>




<div class="form-group">
<label for="psellingcost">Selling Cost Each</label>
 <input type="text" class="form-control" name="psellingcost" onkeypress="isInputNumber(event)" required>	
</div>




<div class="text-center">
	<button type="submit" name="psubmit" class="btn btn-danger">ADD</button>
	<a href="assests.php" class="btn btn-secondary">Close</a>
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






<?php include 'includes/footer.php';?>