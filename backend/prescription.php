<!DOCTYPE HTML>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<?php
session_start();
//session_destroy();
if(!isset($_SESSION['ssn'])){
        
	echo "You are not allowed"."<a href='home.php'>back to login page</a>";
      header('location:home.php');  
        //then abort the script
	exit();
}
  ?> 

<?php
//session_start();
include('connect.php');
include('basic.php');


//echo $res;
/*
$_SESSION['prescription_id']=$pres[0];
//echo $prescription_id;
$_SESSION['m_id']=$pres[1];
//echo $m_id;
$_SESSION['ssn']=$pres[2];
//echo $ssn;
$_SESSION['duration']=$pres[3];
//echo $duration;
$_SESSION['consumption_per_day']=$pres[4];
*/

?>


<div class="widget-body" style="margin-top:100px;margin-left:400px;background-color:;width:50%;" >
<div class="widget-main no-padding">
<table class="table table-bordered table-striped">

<thead class="thin-border-bottom">
<tr>

<th class="hidden-480">
<i class="icon-caret-right blue"></i>
Prescription Id
</th>

<th>
<i class="icon-caret-right blue"></i>
Date
</th>

<th>
<i class="icon-caret-right blue"></i>
Doctor Name
</th>
<?php /*
<th class="hidden-480">
<i class="icon-caret-right blue"></i>
Duration
</th>

<th class="hidden-480">
<i class="icon-caret-right blue"></i>
Consumption Per Day
</th>
*/
?>
</tr>
</thead>

<tbody>
<?php
$s1=("SELECT * FROM med_prescribed WHERE ssn=".$_SESSION['ssn']);
$med=mysql_query($s1);

$s3=("SELECT distinct(prescription_id) FROM med_prescribed WHERE ssn=".$_SESSION['ssn']);
$medicine=mysql_query($s3);

//echo "Pres".$med;
//$pres=(mysql_fetch_array($med));

$res=mysql_num_rows($medicine);

for($i=0;$i<$res;$i++)
{
$pres=(mysql_fetch_array($med));

$medicines=mysql_fetch_array($medicine);

//echo $pres['consumption_per_day'];
//print_r($pres);
$s2=("SELECT * FROM medicine WHERE m_id=".$pres['m_id']);
$medi=mysql_query($s2);
$presc=(mysql_fetch_array($medi));

$s3=("SELECT * FROM doctor_visit WHERE prescription_id=".$medicines['prescription_id']);
$medic=mysql_query($s3);
$prescript=(mysql_fetch_array($medic));

$s4=("SELECT * FROM person WHERE ssn=".$prescript['d_id']);
$medici=mysql_query($s4);
$prescripti=(mysql_fetch_array($medici));
$_SESSION['prescription_id']=$pres['prescription_id'];

echo "<tr><td><a href=\"prescribe.php?a=".$pres['prescription_id']."\">".$medicines['prescription_id']."</a></td><td>".$prescript['date']."</td><td>".$prescripti['name']."</td></tr>";
}
?>

</tbody>
</table>

<table>
<tr>
<th>			
<div style="width:100px;">

<button  style="margin-left:30px;" class="btn btn-primary " data-toggle="modal" data-target="#myModal1">
  Upload Prescriptions
</button>

<!-- Modal -->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Upload Prescriptions</h4>
      </div>
      <div class="modal-body">
	  
        <form action="upload_file.php" method="post" enctype="multipart/form-data">
	  		    <input type="file" name="file" id="file" class="form-control image_input" accept="image/*">
				<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" name="submit" class="btn btn-primary">Save changes</button>
		
      </div>
				</form>
      </div>
    
    </div>
  </div>
</div>

</div>
</th>

<th>
<div style="width:100px; margin-top:px;margin-left:200px;">
<button  style="margin-left:30px;" class="btn btn-primary " data-toggle="modal" data-target=".bs-example-modal-lg">
  View Uploaded Prescriptions
</button>

<!-- Modal -->
<div class="modal fade bs-example-modal-lg" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Uploaded Prescriptions</h4>
      </div>
      <div class="modal-body">
	  
        <?php include('show_upload.php');?>
		
      </div>
      </div>
    
    </div>
  </div>
</div>


</div>
</th>
</tr>
<!--<form action="upload_file.php" method="post" enctype="multipart/form-data">
<label for="file"></label>
<input type="file" name="file" id="file"><br>
<input type="submit" name="submit" value="Upload Prescriptions">
</form>-->

</div>
</div>

</html>

