<?php

define('TITLE','work report');
define('PAGE', 'work report');

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





<!-- Start second column here -->
<div class="col-sm-9 col-md-10 mt-5 text-center">
	<form action="" method="POST" class="d-print-none">

   <div class="form-row">
   	
   	<div class="form-group col-md-2">
   		
  <input type="date" name="startdate" class="form-control">

   	</div>
   	<span class="m-2">To</span>

    
   	<div class="form-group col-md-2">
   		
  <input type="date" name="enddate" class="form-control">

   	</div>

   	<div class="form-group">

   		<input type="submit" name="searchsubmit" value="Search" class="btn btn-secondary">
   		
   	</div>
   </div>
     
</form>


<?php

if(isset($_REQUEST['searchsubmit']))
    {
	$startdate=$_REQUEST['startdate'];
	$enddate=$_REQUEST['enddate'];
    $sql="select * from assignwork_tb where assign_date between '$startdate' and '$enddate'";
    $result=$conn->query($sql);
 
      if($result->rowCount()>0)
                  { 
                  	 ?>
<p class="bg-dark text-white p-2 mt-4">Details</p>

<table class="table">
	<thead>
		<tr>
			<th scope="col">REQ ID</th>
			<th scope="col">Request Info</th>
			<th scope="col">Name</th>
			<th scope="col">Address</th>
			<th scope="col">City</th>
			<th scope="col">Mobile</th>
			<th scope="col">Technician</th>
			<th scope="col">Assign DATE</th>
		</tr>
	</thead>
	<tbody>           
  
  <?php   while($row=$result->fetch(PDO::FETCH_ASSOC))
          {
  	         ?> 
		<tr>
			<td><?php echo $row['request_id']; ?></td>
			<td><?php echo $row['request_info']; ?></td>
			<td><?php echo $row['requester_name']; ?></td>
			<td><?php echo $row['requester_add2']; ?></td>
			<td><?php echo $row['requester_city']; ?></td>
			<td><?php echo $row['requester_mobile']; ?></td>
			<td><?php echo $row['assign_tech']; ?></td>
			<td><?php echo $row['assign_date']; ?></td>
		</tr>

		<?php }  ?>

	</tbody>
</table>

<?php
  }else{

echo "<div class='alert alert-warning col-sm-6 ml-5 mt-2 role='alert'>No such Recor Found</div>";

  }

}

?>


              </div>
        <!-- end second column here -->



<?php 

include 'includes/footer.php';

?>