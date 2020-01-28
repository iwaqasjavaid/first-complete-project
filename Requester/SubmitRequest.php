<?php
define('TITLE','Submit Request');
define('PAGE', 'SubmitRequest');
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
	//echo "<scrpit>location.href='requesterLogin.php';</script>";
header('location:requesterLogin.php');
}





// insertion to db on button press
if(isset($_REQUEST['submitrequest']))
{  // checking for empty fields

if( ($_REQUEST['requestinfo'])=="" ||
	 ($_REQUEST['requestdesc'])==""  ||
	 ($_REQUEST['requestername'])=="" ||
	 ($_REQUEST['requesteradd1'])=="" ||
	 ($_REQUEST['requesteradd2'])=="" ||
	 ($_REQUEST['requestercity'])=="" ||
	 ($_REQUEST['requesterstate'])=="" ||
	 ($_REQUEST['requesterzip'])=="" ||
	 ($_REQUEST['requesteremail'])=="" ||
	 ($_REQUEST['requestermobile'])=="" ||
	 ($_REQUEST['requestdate'])==""
  ) 
{$msg="<div class='alert alert-warning col-sm-6 ml-5 mt-2'>Fill All fields</div>";}
else
{
  
   $requestinfo=$_REQUEST['requestinfo'];
   $requestdesc=$_REQUEST['requestdesc'];
   $requestername=$_REQUEST['requestername'];
   $requesteradd1=$_REQUEST['requesteradd1'];
   $requesteradd2=$_REQUEST['requesteradd2'];
   $requestercity=$_REQUEST['requestercity'];
   $requesterstate=$_REQUEST['requesterstate'];
   $requesterzip=$_REQUEST['requesterzip'];
   $requesteremail=$_REQUEST['requesteremail'];
   $requestermobile=$_REQUEST['requestermobile'];
   $requestdate=$_REQUEST['requestdate'];




// echo     $requestinfo;
// echo     $requestdesc;
// echo     $requestername;
//  echo    $requesteradd1;
//  echo    $requesteradd2;
//  echo    $requestercity;
//   echo   $requesterstate;
//   echo   $requesterzip;
//  echo    $requesteremail;
//   echo   $requestermobile;
//    echo  $requestdate;
                        



$sql="insert into submitrequest_tb
(request_info,request_desc,requester_name,requester_add1,requester_add2,requester_city,requester_state,requester_zip,
requester_email,requester_mobile,request_date) values
('$requestinfo','$requestdesc','$requestername','$requesteradd1','$requesteradd2','$requestercity','$requesterstate',
$requesterzip,'$requesteremail',$requestermobile,'$requestdate')";

//$conn->beginTransaction();
$result=$conn->exec($sql);
$lid=$conn->lastInsertId();

 if($result)
 { 
  
$msg="<div class='alert alert-success col-sm-6 ml-5 mt-2'>Successfully Inserted</div>";
$_SESSION['myid']= $lid;
header('location:submitrequestsucess.php');
}else{

$msg="<div class='alert alert-danger col-sm-6 ml-5 mt-2'>Not inerted</div>";

}



}


}
?>

<!-- Start service Second Column -->

<div class="col-sm-9 col-md-10">
	
<form class="mx-5 mt-5" action=""  method="POST">
	
<div class="form-group">
	<label for="inputRequestInfo">Request Info</label>
	<input type="text" class="form-control" id="inputRequestInfo" placeholder="Request Info" name="requestinfo"> 
</div>


<div class="form-group">
	<label for="inputRequestDescription">Description</label>
	<input type="text" class="form-control" id="inputRequestDescription" placeholder="Write Description" name="requestdesc"> 
</div>





<div class="form-group">
	<label for="inputName">Name</label>
	<input type="text" class="form-control" id="inputName" placeholder="Enter Name" name="requestername"> 
</div>





<div class="form-row">
	
<div class="form-group col-md-6">
<label for="inputAddress">Address Line</label>
<input type="text" class="form-control" id="inputAddress" placeholder="House No. 123" name="requesteradd1"> 
</div>

<div class="form-group col-md-6">
<label for="inputAddress2">Address Line</label>
<input type="text" class="form-control" id="inputAddress2" placeholder="Shareef Colony" name="requesteradd2"> 
</div>

</div>








<div class="form-row">
	
<div class="form-group col-md-6">
<label for="inputCity">City</label>
<input type="text" class="form-control" id="inputCity" name="requestercity"> 
</div>




<div class="form-group col-md-4">
<label for="inputState">State</label>
<input type="text" class="form-control" id="inputState" name="requesterstate"> 
</div>




<div class="form-group col-md-2">
<label for="inputZip">Zip</label>
<input type="text" class="form-control" id="inputZip" name="requesterzip" onkeypress="isInputNumber(event)"> 
</div>



</div>



<div class="form-row">
<div class="form-group col-md-6">
<label for="inputEmail">Email</label>
<input type="email" class="form-control" id="inputEmail" name="requesteremail">
</div>






<div class="form-group col-md-2">
<label for="inputMobile">Mobile</label>
<input type="text" class="form-control" id="inputMobile" name="requestermobile" onkeypress="isInputNumber(event)">
</div>






<div class="form-group col-md-2">
<label for="inputDate">Date</label>
<input type="date" class="form-control" id="inputDate" name="requestdate">
</div>

</div>


<button type="submit" class="btn btn-success" name="submitrequest">Submit</button>
<button type="submit" class="btn btn-secondary" name="">Reset</button>


</form>

<?php   if (isset($msg)){  echo $msg;  } ?>


</div>
<!-- Ending service Second Column -->




<!-- Java script Function for Number fields only -->
<script>

function isInputNumber(e)
{

let ch=String.fromCharCode(e.which);

if (!(/[0-9]/.test(ch)))
 {

 e.preventDefault();

 } 

}

</script>

<?php
include 'includes/footer.php';

?>