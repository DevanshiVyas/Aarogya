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

?>

<form  action="history_save.php" method="POST" id="form" >
<div class="widget-body" style="margin-top:100px;margin-left:400px;background-color:;width:50%;" >
<div class="widget-main no-padding">
<table class="table table-bordered table-striped">
<thead class="thin-border-bottom">

</thead>

<tbody>
<tr>
<td>Date</td>

<td>
<b class="green">

<input name="da" id="da" type="date" value="" size="30"class=" form-control"/>
</b>
</td>
</tr>

<tr>
<td>Doctor Name</td>

<td>

<b class="green">
 <input name="doctor" id="doctor" type="text" value="" size="30" class="form-control" placeholder="Doctor Name"/>
</b>
</td>
</tr>

<tr>
<td>Event</td>

<td>

<b class="green">
 <input name="event" id="event" type="text" value="" size="30" class="form-control" placeholder="Event"/>

</b>
</td>
</tr>

<tr>
<td>Symptoms</td>

<td>

<b class="green">
 <input name="symptoms" id="symptoms" type="text" value="" size="30" class="form-control" placeholder="Symptoms"/>

</b>
</td>
</tr>

<tr>
<td>Cause</td>

<td>

<b class="green">
 <input name="cause" id="cause" type="text" value="" size="30" class="form-control" placeholder="Cause"/>

</b>
</td>
</tr>

<tr>
<td>Cure</td>

<td>

<b class="green">
 <input name="cure" id="cure" type="text" value="" size="30" class="form-control" placeholder="Cure"/>

</b>
</td>
</tr>

<tr>
<td>Prescription Id</td>

<td>

<b class="green">
 <input name="prescription_id" id="prescription_id" type="text" value="" size="30" class="form-control" placeholder="Prescription ID"/>

</b>
</td>
</tr><tr>
<td>Follow Up</td>

<td>

<b class="green">
 <input name="follow_up" id="follow_up" type="text" value="" size="30" class="form-control" placeholder="Follow Up"/>

</b>
</td>
</tr>



<tr>
<td>
<p style="padding-bottom:"><button class="btn btn-primary " role="button" type="submit" style="margin-left:;">Save</button></p>
<td>
</tr>

</tbody>
</table>
</div>
</div>
</form>