<?php

define('TITLE','Update Product');
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

if(isset($_REQUEST['pupdate']))
{

$pid= $_REQUEST['pid'];
$pname=$_REQUEST['pname'];
$pdop=$_REQUEST['pdop'];
$pava=$_REQUEST['pava'];
$ptotal=$_REQUEST['ptotal'];
$poriginalcost=$_REQUEST['poriginalcost'];
$psellingcost=$_REQUEST['psellingcost'];

$sql="update assets_tb set pname='$pname',pdop='$pdop',pava=$pava,ptotal=$ptotal,poriginalcost=$poriginalcost,psellingcost=$psellingcost where pid=$pid";

$result=$conn->exec($sql);

if($result == true)
{$msg="<div class='alert alert-success col-sm-6 ml-5 mt-2'>Updated Successfully</div>";}
else{$msg="<div class='alert alert-danger col-sm-6 ml-5 mt-2'>Unable to update</div>";}

}

?>




<?php

if(isset($_REQUEST['edit']))
{
	//echo "Hello 1";
  $sql="select * from assets_tb where pid={$_REQUEST['id']}";
 //echo "Hello 2";
 $result=$conn->query($sql);
 $row = $result->fetch(PDO::FETCH_ASSOC);
 //echo "Hello 3";

//echo "id is" .$_REQUEST['id'];
  }

?>






            <!-- Start 2nd Column herre -->
<div class="col-sm-6 mt-5 mx-3 jumbotron">
<h3 class="text-center">Update Product Details</h3>


<form action="" method="post">
	


<div class="form-group">
<label for="pid">Product ID:</label>
<input type="text" class="form-control" name="pid" value="<?php if(isset($row['pid'])){echo $row['pid'];} ?>" readonly="">	
</div>



<div class="form-group">
<label for="pname">Product Name:</label>
<input type="text" class="form-control" name="pname"  value="<?php if(isset($row['pname'])){echo $row['pname'];} ?>"  required>	
</div>




<div class="form-group">
<label for="pdop">Date of Purchase</label>
<input type="date" class="form-control"  value="<?php if(isset($row['pdop'])){echo $row['pdop'];} ?>" name="pdop" required>	
</div>




<div class="form-group">
<label for="pava">Available</label>
<input type="text" class="form-control" name="pava"  onkeypress="isInputNumber(event)"  value="<?php if(isset($row['pava'])){echo $row['pava'];} ?>"  required>	
</div>



<div class="form-group">
<label for="ptotal">Total</label>
<input type="text" class="form-control" name="ptotal"  onkeypress="isInputNumber(event)" value="<?php if(isset($row['ptotal'])){echo $row['ptotal'];} ?>"  required>	
</div>




<div class="form-group">
<label for="poriginalcost">Original Cost Each</label>
<input type="text" class="form-control" name="poriginalcost" onkeypress="isInputNumber(event)" value="<?php if(isset($row['poriginalcost'])){echo $row['poriginalcost'];} ?>" required>	
</div>




<div class="form-group">
<label for="psellingcost">Selling Cost Each</label>
 <input type="text" class="form-control" name="psellingcost" onkeypress="isInputNumber(event)" value="<?php if(isset($row['psellingcost'])){echo $row['psellingcost'];} ?>" required>	
</div>




<div class="text-center">
	<button type="submit" name="pupdate" class="btn btn-danger">Update</button>
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