<?php

define('TITLE','Success');

include 'includes/header.php';
include '../connection.php';

//checking session here
session_start();

if($_SESSION['is_login'])
{
$rEmail=$_SESSION['rEmail'];
}
else
{
	echo "<scrpit>location.href='requesterLogin.php';</script>";
}


// echo "Hello World Waqas";

//  echo $_SESSION['myid'];

 $sql = "select * from submitrequest_tb where request_id = {$_SESSION['myid']}";

 $result=$conn->query($sql);

 if($result->rowCount()==1){
	
 $row = $result->fetch(PDO::FETCH_ASSOC);

// echo $row['requester_name'];

echo "<div class='ml-5 mt-5'>

 <table class='table'>
<tbody>

<tr>
<th>Request ID:</th>
<td>".$row['request_id']."</td>
</tr>
 

<tr>
<th>Name:</th>
<td>".$row['requester_name']."</td>
</tr>


<tr>
<th>Email:</th>
<td>".$row['requester_email']."</td>
</tr>



<tr>
<th>Request Info:</th>
<td>".$row['request_info']."</td>
</tr>




<tr>
<th>Request Description:</th>
<td>".$row['request_desc']."</td>
</tr>



<tr>
<td>
<form class='d-print-none'>

<input class='btn btn-danger' type='submit' value='Print' onClick='window.print()'>

</form>
</td>
</tr>


</table>
 </div>";


}else{

	echo "canot fetch data";
}
?>


<?php
include 'includes/footer.php';
?>