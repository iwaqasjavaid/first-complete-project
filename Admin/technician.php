<?php

define('TITLE','Technician');
define('PAGE', 'Technician');
include '../connection.php';
include 'includes/header.php';

session_start();

if(isset($_SESSION['is_adminlogin']))
{
	
$aEmail=$_SESSION['aEmail'];
}else{

	header('location:login.php');
}

?>



<!-- Start Second Colum here -->
<div class="col-sm-9 col-md-10 mt-5 text-center">
<p class="bg-dark text-white p-2">List of Technicians</p>
<?php 

 $sql="select * from technician_tb";
$result=$conn->query($sql);
if($result->rowCount()>0)
{
?>

<table class="table table-bordered">
	
	<thead>
		<tr>
			<th scope="col">Emp ID</th>
			<th scope="col">Emp Name</th>
			<th scope="col">Emp City</th>
			<th scope="col">Emp Mobile</th>
			<th scope="col">Emp Email</th>
			<th scope="col">Action</th>
		</tr>
	</thead>
	<tbody>
		<?php while($row = $result->fetch(PDO::FETCH_ASSOC))
		{
		 ?>
		<tr>
			<td><?php echo $row['emp_id'];?></td>
			<td><?php echo $row['emp_name'];?></td>
			<td><?php echo $row['emp_city'];?></td>
			<td><?php echo $row['emp_mobile'];?></td>
			<td><?php echo $row['emp_email'];?></td>
			<td>
			<form action="editemp.php"  class="d-inline" method="POST">
			<input type="hidden" value="<?php echo $row['emp_id']; ?>" name="id">	
                 <button type="submit" class="btn btn-info mr-3" name="edit" value="Edit"><i class="fas fa-pen"></i></button>
                </form>


                <form action="" class="d-inline" method="POST">
			<input type="hidden" value="<?php echo $row['emp_id']; ?>" name="id">	
                 <button type="submit" class="btn btn-danger mr-3" name="delete" value="Delete"><i class="far fa-trash-alt"></i></button>
                </form>

      			</td>
		</tr>


		<?php } ?>
	</tbody>
</table>
<?php }
else{echo "O results";}
?>

<?php 

if(isset($_REQUEST['delete']))
{
	
  $sql="delete from technician_tb where emp_id= {$_REQUEST['id']}";
  $result=$conn->exec($sql);

if($result == true)
{

	echo'<meta http-equiv="refresh" content= "0;URL=?deleted" />';
}

}
?>
</div>
     <!-- End Second Colum here -->





                        </div>
                    <!-- END Row -->

<div class="float-right"><a href="insertemp.php" class="btn btn-danger"><i class="fas fa-plus fa-2x"></i></a></div>

                       </div>
                    <!-- END CONTAINER -->





<!-- JavaScript -->
<script src="../js/jquery.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/all.min.js"></script>
</body>
</html>