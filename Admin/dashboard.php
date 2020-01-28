<?php

define('TITLE','dashboard');
define('PAGE', 'dashboard');
include '../connection.php';
include 'includes/header.php';

session_start();

if(isset($_SESSION['is_adminlogin']))
{
	
$aEmail=$_SESSION['aEmail'];
}else{

	header('location:login.php');
}

// for requests recieved in dashboardd..
$sql="select max(request_id) from submitrequest_tb";

$result=$conn->query($sql);
$row=$result->fetch();

$submitrequest=$row[0];



// for Assigned Workk in dashboardd..
$sql="select max(rno) from assignwork_tb";

$result=$conn->query($sql);
$row=$result->fetch();

$assignwork=$row[0];






// for Technicians count dashboardd..
$sql="select * from technician_tb";

$result=$conn->query($sql);
$totaltech=$result->rowCount();




?>


<!-- Starting 2nd colum for dashboard here -->
 <div class="col-sm-9 col-md-10">
 	
 <div class="row text-center mx-5">
 	
 <div class="col-sm-4 mt-5">
 	
 <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
 	
 <div class="card-header">Request Recieved</div>
 
<div class="card-body">
	
<h4 class="card-title"><?php echo $submitrequest; ?></h4>
	
<a class="btn text-white" href="request.php">View</a>

</div>
</div>
</div>



<div class="col-sm-4 mt-5">
 	
 <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
 	
 <div class="card-header">Assigned Work</div>
 
<div class="card-body">
	
<h4 class="card-title"><?php echo $assignwork; ?></h4>
	
<a class="btn text-white" href="work.php">View</a>

</div>
 


</div>

</div>




<div class="col-sm-4 mt-5">
 	
 <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
 	
 <div class="card-header">No. of Technicians</div>
 
<div class="card-body">
	
<h4 class="card-title"><?php echo $totaltech; ?></h4>
	
<a class="btn text-white" href="technician.php">View</a>

</div>
 

</div>

</div>
</div>


<div class="mx-5 mt-5 text-center">
	
<p class="bg-dark text-white p-2">List of Requesters</p>

<?php   

$sql="select * from requesterlogin_tb";


$result=$conn->query($sql);

if($result->rowCount()>0)
{
 
 echo "<table class='table'>
  <thead>
   <tr>
   <th sope='col'>Requester Id</th>
   <th sope='col'>Name</th>
   <th sope='col'>Email</th>
   </tr>
   </thead>

<tbody>";

while($row = $result->fetch(PDO::FETCH_ASSOC)){
echo	
'<tr>';
echo'<td>'.$row["r_login_id"].'</td>';
echo'<td>'.$row["r_name"].'</td>';
echo'<td>'.$row["r_email"].'</td>';
echo'</tr>';

}
echo"</tbody>
</table>";


}
?>
</div>

</div>    
<!-- Starting 2nd colum for dashboard here -->





<?php 

include 'includes/footer.php';

?>