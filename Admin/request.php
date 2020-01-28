<?php

define('TITLE','request');
define('PAGE', 'request');
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

<!-- Start 2nd column here -->
<div class="col-sm-4 mb-5">
<?php

 $sql="select request_id,request_info,request_desc,request_date from submitrequest_tb";

$result=$conn->query($sql);

if($result->rowCount()>0)
{

while($row = $result->fetch(PDO::FETCH_ASSOC))
{
	?>
  <div class="card mx-5 mt-5">
  <div class="card-header">
  Request ID:<?php echo $row['request_id']; ?> 
  </div>

<div class="card-body">
<h5 class="card-title">Request Info:<?php echo $row['request_info']; ?></h5>

<p class="card-text">Request Decription: <?php echo $row['request_desc']; ?>
</p>

<p claas="card-text">Request Date: <?php echo $row['request_date']; ?>
</p>

<div class="float-right">
  <form action="" method="POST">
  	<input type="hidden" name="id" value="<?php echo $row['request_id']; ?>">
	<input type="submit" class="btn btn-danger mr-3" name="cardviewbtn" value="View" >
	<input type="submit" class="btn btn-secondary" value="Close" name="cardclosebtn" >
	</form>
</div>



</div>

</div>  

<?php

 }
 }
?>
</div>
<!-- Ending 2nd column here -->



<?php 

if(isset($_REQUEST['cardviewbtn']))
{


$sql="select * from submitrequest_tb where request_id={$_REQUEST['id']}";

$result=$conn->query($sql);


$row = $result->fetch(PDO::FETCH_ASSOC);

}



if(isset($_REQUEST['cardclosebtn']))
{
    $sql="delete from submitrequest_tb where request_id={$_REQUEST['id']}";


$result=$conn->exec($sql);   

if($result){

echo '<meta http-equiv="refresh" content="0;URL=?closed"/>';

}


}

?>

<!-- Starting 3rd column here jumbotron Form -->

<!-- <?php // include 'includes/reuestcolumn.php';  ?> -->

<!-- Ending Form jumbotron column here -->


<?php 
include'assignworkform.php';
include 'includes/footer.php';
?>