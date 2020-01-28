<?php
define('TITLE','Requester Profile');
define('PAGE', 'RequesterProfile');

 include '../connection.php';
 session_start();


if($_SESSION['is_login']){

$rEmail=$_SESSION['rEmail'];
}else{

  header('location:requesterLogin.php');
}
  //echo "<scrpit>location.href='requesterLogin.php';</script>";}

$sql="select r_name, r_email from requesterlogin_tb where r_email= '$rEmail'";
 
$result = $conn->query($sql);

 if($result->rowCount()==1)
{
$row = $result->fetch(PDO::FETCH_ASSOC);
$rName=$row['r_name'];
$rEmail=$row['r_email'];
}



// updating when button is clicked
if(isset($_REQUEST['nameupdate']))
{
   if($_REQUEST['rName']==""){
   	$passmsg = "<div class='alert alert-warning col-sm-6 ml-5 mt-2' role='alert'>Fill Fields</div>";
                             }else{
// agar main variables name same nahe rakhy to update hony per updated data show nahe hoo raha tha very stupid..
// php like for checking simple change $rName just change this vb name in below and see magic..
$rName = $_REQUEST['rName']; 
$sql = "update requesterlogin_tb set r_name='$rName' where r_email='$rEmail'";

$r = $conn->exec($sql);

if($r){

$passmsg ="<div class='alert alert-success col-sm-6 ml-5 mt-2' role='alert'>Updated Successfully</div>";

      }else{

$passmsg = "<div class='alert alert-warning col-sm-6 ml-5 mt-2' role='alert'>Not updated</div>";

          }

                                    }

}
?>



<?php  include 'includes/header.php' ?>




       <!-- START Profile Area Here 2nd colum-->
          <div class="col-sm-6 mt-5">
	
   <form action="" method="POST" class="mx-5">

<div class="form-group">
<label for="rEmail">Email</label>
<input type="email" name="rEmail" id="rEmail" class="form-control" value="<?php echo $rEmail; ?>" readonly>	
</div>


<div class="form-group">
<label for="rName">Name</label>
<input type="text" name="rName" id="rName" value="<?php echo $rName; ?>" class="form-control">
<button type="submit" class="btn btn-outline-danger mt-3" name="nameupdate">Update</button>
</div>

  </form>

<?php if(isset($passmsg)){ echo $passmsg; } ?>

</div>
<!-- End Profile Area Here 2nd colum-->


<?php  include 'includes/footer.php';  ?>