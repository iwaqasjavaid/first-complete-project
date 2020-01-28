<?php
define('TITLE','work');
define('PAGE', 'work');

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

<!-- Starting 2nd Colum Work Order Here -->

<div class="col-sm-6 mx-3 mt-5">

<h3 class="text-center">Assigned Work Details</h3>
<?php
   
   if(isset($_REQUEST['view']))
{
	// $viewid=$_REQUEST['id']; 
   
 //     echo "id is".$viewid;

$sql="select * from assignwork_tb where request_id= {$_REQUEST['id']}";

$result=$conn->query($sql);

$row = $result->fetch(PDO::FETCH_ASSOC);   ?>



<table class="table table-bordered">
	
	<tbody>
		<tr>
			<td>Request ID</td>
			<td><?php if(isset($row['request_id'])){ echo $row['request_id'];   }   ?></td>
		</tr>

		<tr>
			<td>Request Info</td>
			<td><?php if(isset($row['request_info'])){ echo $row['request_info'];   }   ?></td>
		</tr>

		<tr>
			<td>Request Description</td>
			<td><?php if(isset($row['request_desc'])){ echo $row['request_desc'];   }   ?></td>
		</tr>

		<tr>
			<td>Requester Name</td>
			<td><?php if(isset($row['requester_name'])){ echo $row['requester_name'];   }   ?></td>
		</tr>

		<tr>
			<td>Requester Addres1</td>
			<td><?php if(isset($row['requester_add1'])){ echo $row['requester_add1'];   }   ?></td>
		</tr>

        <tr>
			<td>Requester Address2</td>
			<td><?php if(isset($row['requester_add2'])){ echo $row['requester_add2'];   }   ?></td>
		</tr>

        <tr>
			<td>Requester City</td>
			<td><?php if(isset($row['requester_city'])){ echo $row['requester_city'];   }   ?></td>
		</tr>

		<tr>
			<td>Requester State</td>
			<td><?php if(isset($row['requester_state'])){ echo $row['requester_state'];   }   ?></td>
		</tr>

		<tr>
			<td>Requester Zip</td>
			<td><?php if(isset($row['requester_zip'])){ echo $row['requester_zip'];   }   ?></td>
		</tr>

		<tr>
			<td>Requester Email</td>
			<td><?php if(isset($row['requester_email'])){ echo $row['requester_email'];   }   ?></td>
		</tr>


         <tr>
			<td>Requester Mobile</td>
			<td><?php if(isset($row['requester_mobile'])){ echo $row['requester_mobile'];} ?></td>
		</tr>

        <tr>
			<td>Technician</td>
			<td><?php if(isset($row['assign_tech'])){ echo $row['assign_tech']; }  ?></td>
		</tr>

       <tr>
			<td>Customer Signature:</td>
			<td></td>
		</tr>
		


	</tbody>
</table>

<div class="text-center">

<form action="" class="d-print-none mb-3 d-inline">

<input type="submit" class="btn btn-danger mb-2" value="Print" onclick="window.print()">	</form>

<form action="work.php" class="d-print-none mb-3 d-inline">
<input type="submit" class="btn btn-dark mb-2" value="Close">	

</form>	


</div>



















<?php } ?>
</div>
     





<!-- Ending 2nd Colum Work Order Here -->

<?php 

include 'includes/footer.php';

?>