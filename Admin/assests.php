<?php

define('TITLE','Assets');
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













<!-- Start Second Colum here -->
<div class="col-sm-9 col-md-10 mt-5 text-center">
<p class="bg-dark text-white p-2">Products/Parts Details</p>
<?php 

 $sql="select * from assets_tb";
$result=$conn->query($sql);
if($result->rowCount()>0)
{
?>

<table class="table table-bordered">
	
	<thead>
		<tr>
			<th scope="col">Product ID</th>
			<th scope="col">Name</th>
			<th scope="col">DOP</th>
			<th scope="col">Available</th>
			<th scope="col">Total</th>
			<th scope="col">Original Cost Each</th>
			<th scope="col">Selling Cost Each</th>
			<th scope="col">Action</th>
		</tr>
	</thead>
	<tbody>
		<?php while($row = $result->fetch(PDO::FETCH_ASSOC))
		{
		 ?>
		<tr>
			<td><?php echo $row['pid'];?></td>
			<td><?php echo $row['pname'];?></td>
			<td><?php echo $row['pdop'];?></td>
			<td><?php echo $row['pava'];?></td>
			<td><?php echo $row['ptotal'];?></td>
			<td><?php echo $row['poriginalcost'];?></td>
			<td><?php echo $row['psellingcost'];?></td>
			<td>
			<form action="editproduct.php"  class="d-inline" method="POST">
			<input type="hidden" value="<?php echo $row['pid']; ?>" name="id">	
                 <button type="submit" class="btn btn-info mr-3" name="edit" value="Edit"><i class="fas fa-pen"></i></button>
                </form>


                <form action="" class="d-inline" method="POST">
			<input type="hidden" value="<?php echo $row['pid']; ?>" name="id">	
                 <button type="submit" class="btn btn-secondary mr-3" name="delete" value="Delete"><i class="far fa-trash-alt"></i></button>
                </form>



              <form action="sellproduct.php" class="d-inline" method="POST">
			<input type="hidden" value="<?php echo $row['pid']; ?>" name="id">	
                 <button type="submit" class="btn btn-warning mr-3" name="issue" value="issue"><i class="fas fa-handshake"></i></button>
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
	
  $sql="delete from assets_tb where pid= {$_REQUEST['id']}";
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

<div class="float-right"><a href="addproduct.php" class="btn btn-danger"><i class="fas fa-plus fa-2x"></i></a></div>

                       </div>
                    <!-- END CONTAINER -->





<!-- JavaScript -->
<script src="../js/jquery.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/all.min.js"></script>
</body>
</html>