<?php
define('TITLE','Sell Product');
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

$pid=$_REQUEST['pid'];
$pava=$_REQUEST['pava']-$_REQUEST['pquantity'];


$custname=$_REQUEST['cname'];
$custadd=$_REQUEST['cadd'];
$cpname=$_REQUEST['pname'];
$cpquantity=$_REQUEST['pquantity'];
$cpeach=$_REQUEST['psellingcost'];
$cptotal=$_REQUEST['totalcost'];
$cpdate=$_REQUEST['selldate'];
	
 $sql="insert into customer_tb(cust_name,cust_add,cp_name,cp_quantity,cp_each,cp_total,cp_date) values
 ('$custname','$custadd','$cpname',$cpquantity,$cpeach,$cptotal,'$cpdate')";

 $result=$conn->exec($sql);
$lid=$conn->lastInsertId();

if($result == true)
{
 session_start();
$_SESSION['myid']= $lid;

header('location:productsellsucess.php');
}


$sqlup="update assets_tb set pava=$pava where pid=$pid";

$conn->exec($sqlup);


}

























?>






<?php

if(isset($_REQUEST['issue']))
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
<h3 class="text-center">Customer bill</h3>


<form action="" method="post">
	


<div class="form-group">
<label for="pid">Product ID:</label>
<input type="text" class="form-control" name="pid" value="<?php if(isset($row['pid'])){echo $row['pid'];} ?>" readonly="">	
</div>





<div class="form-group">
<label for="cname">Customer Name:</label>
<input type="text" class="form-control" name="cname">	
</div>




<div class="form-group">
<label for="cadd">Customer Address</label>
<input type="text" class="form-control" name="cadd">	
</div>



<div class="form-group">
<label for="pname">Product Name:</label>
<input type="text" class="form-control" name="pname"  value="<?php if(isset($row['pname'])){echo $row['pname'];} ?>"  required>	
</div>





<div class="form-group">
<label for="pava">Available</label>
<input type="text" class="form-control" name="pava"  onkeypress="isInputNumber(event)"  value="<?php if(isset($row['pava'])){echo $row['pava'];} ?>"  readonly>	
</div>




<div class="form-group">
<label for="pquantity">Quantity</label>
<input type="text" class="form-control" name="pquantity" onkeypress="isInputNumber(event)">	
</div>





<div class="form-group">
<label for="psellingcost">Price Each</label>
 <input type="text" class="form-control" name="psellingcost" onkeypress="isInputNumber(event)" value="<?php if(isset($row['psellingcost'])){echo $row['psellingcost'];} ?>" required>	
</div>







<div class="form-group">
<label for="totalcost">Total Price</label>
<input type="text" class="form-control" name="totalcost" onkeypress="isInputNumber(event)">	
</div>




<div class="form-group col-sm-5">
<label for="inputdate">Date</label>
<input type="date" class="form-control" name="selldate">	
</div>












<div class="text-center">
	<button type="submit" name="psubmit" class="btn btn-danger">Submit</button>
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


















<?php 
include 'includes/footer.php';
?>