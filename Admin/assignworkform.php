
<!-- Request colum third start from here of admin pannel -->
<?php
if(session_id() == ''){

session_start();

}

if(isset($_SESSION['is_adminlogin']))
{
  
$aEmail=$_SESSION['aEmail'];
}else{

  header('location:login.php');
}



   if(isset($_REQUEST['assign']))
   {

    if(($_REQUEST['request_id']=="")      ||   ($_REQUEST['request_info']=="")     ||
       ($_REQUEST['requestdesc']=="")     ||   ($_REQUEST['requestername']=="")    ||
       ($_REQUEST['address1']=="")        ||   ($_REQUEST['address2']=="")         || 
       ($_REQUEST['requestercity']=="")   ||   ($_REQUEST['requesterstate']=="")   ||
       ($_REQUEST['requesterzip']=="")    ||   ($_REQUEST['requesteremail']=="")   ||
       ($_REQUEST['requestermobile']=="") ||   ($_REQUEST['assigntech']=="")       || 
       ($_REQUEST['inputDate']=="")  )
      {
          $msg="<div class='alert alert-warning col-sm-6 ml-5 mt-2'>Fill All fields</div>";
    

      }else{


   $rid = $_REQUEST['request_id'];
   $rinfo =  $_REQUEST['request_info'];
   $rdesc = $_REQUEST['requestdesc'];
   $rname = $_REQUEST['requestername'];
   $radd1 = $_REQUEST['address1'];
   $radd2 =$_REQUEST['address2'];
   $rcity = $_REQUEST['requestercity'];
   $rstate = $_REQUEST['requesterstate'];
   $rzip = $_REQUEST['requesterzip'];
   $remail = $_REQUEST['requesteremail'];
   $rmobile = $_REQUEST['requestermobile'];
   $rassigntech = $_REQUEST['assigntech'];
   $rdate = $_REQUEST['inputDate'];

   
$sql = "insert into assignwork_tb(request_id,request_info,request_desc,requester_name,requester_add1,requester_add2,requester_city,requester_state,requester_zip,requester_email,requester_mobile,assign_tech,assign_date)  values 
  ($rid,'$rinfo','$rdesc','$rname','$radd1','$radd2','$rcity','$rstate',$rzip,'$remail',$rmobile,'$rassigntech',
  '$rdate')";

$result=$conn->exec($sql);

if($result){
   $msg="<div class='alert alert-success col-sm-6 ml-5 mt-2'>work assigned</div>";
}else{
   $msg="<div class='alert alert-warning col-sm-6 ml-5 mt-2'>error in assigning work</div>";
}





      }



  
}
?>
<!-- Starting 3rd column here jumbotron Form -->
<div class="col-sm-5 mt-5 jumbotron">
	
<form action="" method="POST">
<h5>Assign Work Order Here</h5>
<div class="form-group">
<label for="request_id">Request ID</label>
<input type="text" class="form-control"  value="<?php if(isset($row['request_id'])) {  echo $row['request_id'];}  ?>" name="request_id" readonly> 
</div>


<div class="form-group">
<label for="request_info">Request Info</label>
<input type="text" class="form-control"  value="<?php  if(isset($row['request_info'])) {  echo $row['request_info'];} ?>" name="request_info"> 
</div>


<div class="form-group">
<label for="requestdesc">Description</label>
<input type="text" value="<?php if(isset($row['request_desc'])) {  echo $row['request_desc']; } ?>" class="form-control"name="requestdesc"> 
</div>



<div class="form-group">
<label for="requestername">Name</label>
<input type="text" value="<?php if(isset($row['requester_name'])) {  echo $row['requester_name']; } ?>" class="form-control" name="requestername"> 
</div>





<div class="form-row">
<div class="form-group col-md-6">
<label for="address1">Address Line</label>
<input type="text" value="<?php if(isset($row['requester_add1'])) {  echo $row['requester_add1']; } ?>" class="form-control" name="address1"> 
</div>


<div class="form-group col-md-6">
<label for="address2">Address Line</label>
<input type="text" value="<?php if(isset($row['requester_add2'])) {  echo $row['requester_add2']; } ?>" class="form-control" name="address2"> 
</div>
</div>




<div class="form-row">
	
<div class="form-group col-md-4">
<label for="requestercity">City</label>
<input type="text" class="form-control" value="<?php if(isset($row['requester_city'])) {  echo $row['requester_city']; } ?>" name="requestercity"> 
</div>

<div class="form-group col-md-4">
<label for="requesterstate">State</label>
<input type="text" class="form-control" value="<?php if(isset($row['requester_state'])){echo $row['requester_state']; } ?>" name="requesterstate"> 
</div>


<div class="form-group col-md-4">
<label for="requesterzip">Zip</label>
<input type="text" class="form-control"  value="<?php  if(isset($row['requester_zip'])){echo $row['requester_zip'];} ?>" name="requesterzip" onkeypress="isInputNumber(event)"> 
</div>


</div>



<div class="form-row">
<div class="form-group col-md-8">
<label for="requesteremail">Email</label>
<input type="email" class="form-control" value="<?php if(isset($row['requester_email'])) {echo $row['requester_email']; } ?>" name="requesteremail">
</div>



<div class="form-group col-md-4">
<label for="requestermobile">Mobile</label>
<input type="text" class="form-control"  name="requestermobile" value="<?php  if(isset($row['requester_mobile'])) {  echo $row['requester_mobile']; } ?>" onkeypress="isInputNumber(event)">
</div>
</div>



<div class="form-row">
<div class="form-group col-md-6">
<label for="assigntech">Assign To Technician</label>
<input type="text" class="form-control" name="assigntech">
</div>



<div class="form-group col-md-6">
<label for="inputDate">Date</label>
<input type="date" class="form-control"  name="inputDate">
</div>
</div>


<div class="float-right">
<button type="submit" class="btn btn-success mr-3" name="assign">Assign</button>
<button type="reset" class="btn btn-secondary" name="">Reset</button>
</div>
	

</form>

<?php if(isset($msg)){ echo $msg ;  }  ?>
</div>
<!-- Ending Form third jumbotron column here -->
<script>
  
function isInputNumber(evt){

let ch =String.fromCharCode(evt.which);

if(!(/[0-9]/.test(ch))){

  evt.preventDefault();
}


}

</script>