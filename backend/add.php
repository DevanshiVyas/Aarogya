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

<form  action="sugar.php" method="POST" id="form" >
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

<input name="dat" id="dat" type="date" value="" size="30" class="form-control" required/>
</b>
</td>
</tr>

<tr>
<td>Fasting Value</td>

<td>

<b class="green">
 <input name="fast" id="fast" type="text" value="" size="30" class="form-control" placeholder="Value Before Eating" required/>
</b>
</td>
</tr>

<tr>
<td>After Eating Value</td>

<td>

<b class="green">
 <input name="after" id="after" type="text" value="" size="30" class="form-control" placeholder="Value After Eating" required/>

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