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
//echo $_SESSION['ssn'];
?>
<div class="widget-body" style="margin-top:100px;margin-left:400px;background-color:;width:50%;" >
<div class="widget-main no-padding">
<table class="table table-bordered table-striped">

<thead class="thin-border-bottom">
<tr>

<th class="hidden-480">
<i class="icon-caret-right blue"></i>
Symptoms
</th>

<th>
<i class="icon-caret-right blue"></i>
Cause
</th>

<th>
<i class="icon-caret-right blue"></i>
Cure
</th>

<th>
<i class="icon-caret-right blue"></i>
Follow Up
</th>

<th>
<i class="icon-caret-right blue"></i>
Doctor Name
</th>

<th>
<i class="icon-caret-right blue"></i>
Prescription Id
</th>


</tr>
</thead>

<tbody>

<?php

$p=$_GET['a'];

$his=("SELECT * FROM history WHERE p_id=".$_SESSION['ssn']." and event='$p'");
$hisory=mysql_query($his);
//echo $hisory;


$re=mysql_num_rows($hisory);

for($i=0;$i<$re;$i++)
{
$f=mysql_fetch_array($hisory);

echo "<tr><td>".$f['symptoms']."</td><td>".$f['cause']."</td><td>".$f['cure']."</td><td>".$f['follow_up']."</td><td>".$f['d_name']."</td><td>".$f['prescription_id']."</td></tr>";
}
?>

</tbody>
</table>
<p style="padding-bottom:"><a class="btn btn-primary " href="his_add.php" role="button" style="margin-left:;">Add Entry</a></p> 
</div>
</div>
