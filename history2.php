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
Event
</th>

<th>
<i class="icon-caret-right blue"></i>
Date
</th>


</tr>
</thead>

<tbody>
<?php
$his=("SELECT * FROM history WHERE p_id=".$_SESSION['ssn']);
$history=mysql_query($his);
//echo $history;
$rest=mysql_num_rows($history);
//echo $rest;
for($i=0;$i<$rest;$i++)
{
$fetch=mysql_fetch_array($history);
//print_r($fetch);
$d=$fetch[1];
//echo $d;
echo "<tr><td><a href=\"hist.php?a=".$fetch['event']."\">".$fetch['event']."</a></td><td>".$d."</td></tr>";
}
?>








