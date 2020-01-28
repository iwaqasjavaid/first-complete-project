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


$sql ="select * from assignwork_tb";

$result=$conn->query($sql);

if($result->rowCount()>0)
{
?>

<!-- Starting 2nd Colum Work Order Here -->

<div class="col-sm-9 col-md-10 mt-5">

<table class="table table-bordered">
	<thead>
		<tr>
			<th>Req ID</th>
			<th>Req INFO</th>
			<th>Name</th>
			<th>Address</th>
			<th>City</th>
			<th>Mobile</th>
			<th>Technician</th>
			<th>Assign Date</th>
			<th>Actions</th>
		</tr>
	</thead>
	<tbody>
		<?php while($row = $result->fetch(PDO::FETCH_ASSOC)) 
		{
			
		 ?>
           <tr>
			<td><b><?php echo $row['request_id']; ?></b></td>
			<td><?php echo $row['request_info']; ?></td>
			<td><?php echo $row['requester_name']; ?></td>
			<td><?php echo $row['requester_add1']; ?></td>
			<td><?php echo $row['requester_city']; ?></td>
			<td><?php echo $row['requester_mobile']; ?></td>
			<td><?php echo $row['assign_tech']; ?></td>
			<td><?php echo $row['assign_date']; ?></td>
			<td>
         <form action="viewassignwork.php" class="d-inline" method="POST">
          <input type="hidden" name="id" value="<?php echo $row['request_id']; ?>">	
      <button type="submit" class="btn btn-warning mr-1" value="View" name="view"><i class="far fa-eye"></i></button></form>

         <form action="" class="d-inline" method="POST">
            <input type="hidden" name="iddel" value="<?php echo $row['request_id']; ?>">	
            <button type="submit" class="btn btn-secondary" value="Delete" name="delete"><i class="far fa-trash-alt"></i></button></form>



			</td>
		</tr>
	<?php } 
        } ?>
	</tbody>
</table>
<?php

if(isset($_REQUEST['delete']))
{
	
   $sql="delete from assignwork_tb where request_id= {$_REQUEST['iddel']}";
   $result=$conn->exec($sql);

  if($result){

  	echo '<meta http-equiv="refresh" content= "0;URL=?delete"/>';
  }else{
  	//echo "unable to delete";
  }

}
?>

</div>
<!-- Ending 2nd Colum Work Order Here -->














<?php 

include 'includes/footer.php';

?>