<?php
define('TITLE','product sell Success');
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

 $sql = "select * from customer_tb where cust_id = {$_SESSION['myid']}";

 $result=$conn->query($sql);

 if($result->rowCount()==1){
	
 $row = $result->fetch(PDO::FETCH_ASSOC);

// echo $row['requester_name'];

echo "<div class='ml-5 mt-5'>

 <table class='table'>
<tbody>

<tr>
<th>Customer-ID:</th>
<td>".$row['cust_id']."</td>
</tr>
 

<tr>
<th>Custome-Name:</th>
<td>".$row['cust_name']."</td>
</tr>


<tr>
<th>Product:</th>
<td>".$row['cp_name']."</td>
</tr>



<tr>
<th>Quantity:</th>
<td>".$row['cp_quantity']."</td>
</tr>




<tr>
<th>Price Each:</th>
<td>".$row['cp_each']."</td>
</tr>





<tr>
<th>Total Cost:</th>
<td>".$row['cp_total']."</td>
</tr>



<tr>
<th>Date:</th>
<td>".$row['cp_date']."</td>
</tr>






<tr>
<td>
<form class='d-print-none'>
<input class='btn btn-danger' type='submit' value='Print' onClick='window.print()'>
</form>
</td>

<td>

<a href='assests.php' class='btn btn-secondary d-print-none'>Close</a>

</td>

</tr>


</table>
 </div>";


}else{

	echo "canot fetch data";
}



?>



<?php  include 'includes/footer.php';  ?>