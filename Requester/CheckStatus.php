<?php
define('TITLE','Check Status');
define('PAGE', 'CheckStatus');
include 'includes/header.php';
include '../connection.php';
session_start();
if($_SESSION['is_login']){$rEmail=$_SESSION['rEmail'];}
else{header('location:requesterLogin.php');}
?>

<!-- Start 2nd colum here -->
<div class="col-sm-6 mt-5 mx-3">
	
<form action="" method="POST" class="form-inline d-print-none">

<div class="form-group mr-3">
<label for="checkid mr-2 d-print-none">Enter Request ID: </label>
<input type="text" class="form-control ml-2 d-print-none" name="checkid" required="" onkeypress="isInputNumber(event)">	
</div>	
<button type="submit" name="findid" class="btn btn-danger">Search</button>
</form>

<?php

if(isset($_REQUEST['findid']))
{

 $sql="select * from assignwork_tb where request_id = {$_REQUEST['checkid']}";
 $result=$conn->query($sql);
 $row=$result->fetch(PDO::FETCH_ASSOC);

if(($row['request_id'] == $_REQUEST['checkid']))
  {    
  	?>     

       <h3 class="text-center mt-5">Assigned Work Details</h3>


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

<form action="" class="d-print-none">

<input type="submit" class="btn btn-danger" value="Print" onclick="window.print()">	
<input type="submit" class="btn btn-dark" value="Close">	

</form>	


</div>



<?php 

}
else{echo $smg="<div class='alert alert-info col-sm-6 ml-5 mt-2'>Work not Assigned Yett</div>";}

}

?>

</div>
<!-- Ending 2nd colum here -->


<!-- Only integer fields for search input field -->
<script>

function isInputNumber(e)
{

let ch=String.fromCharCode(e.which);

if(!(/[0-9]/.test(ch)))
 {

 e.preventDefault();

 } 

}
</script>





<?php
include 'includes/footer.php';
include '../connection.php';
?>