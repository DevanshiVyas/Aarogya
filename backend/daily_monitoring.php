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
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/TableBarChart.css" />
<script type="text/javascript" src="js/TableBarChart.js"></script>
<script type="text/javascript">
    $(function() {
        $('#source').tableBarChart('#target', '', false);
    });
</script>

<div class="widget-body" style="margin-top:100px;margin-left:400px;background-color:;width:50%;" >
<div class="widget-main no-padding">
<table class="table table-bordered table-striped" id="source">
<thead class="thin-border-bottom">
<tr>

<th>
<i class="icon-caret-right blue"></i>
Date
</th>
<th>
<i class="icon-caret-right blue"></i>
Fasting
</th>

<th>
<i class="icon-caret-right blue"></i>
After Eating
</th>

</tr>
</thead>


<tbody>

<?php
if(isset($_POST['day']))
{
$d=$_POST['day'];
//echo $d;
//$da=$_SESSION['date'];
//echo $da;

$sql11=("SELECT * FROM sugar_level_record WHERE p_id=".$_SESSION['ssn']." and DATEDIFF(date ,'$d' )>0");

$rec=mysql_query($sql11);
//echo $rec;
@$record=mysql_num_rows($rec);
//echo $record;
for($i=0;$i<$record;$i++)
{
$sugar=mysql_fetch_array($rec);

echo "<tr><th>".$sugar['date']."</th><td>".$sugar['fasting']."</td><td>".$sugar['after_eating']."</td></tr>";

}
}

?>

</tbody>
</table>

<p style="padding-bottom:"><a class="btn btn-primary " href="add.php" role="button" style="margin-left:;">Add Entry</a></p>



<input type="hidden" value="myDate" id="dat">
<script>

function set()
{
var s="";
var myDate="";
var newchild="";
//alert(document.getElementById("day").value);
myDate=document.getElementById("day").value;
newchild=document.getElementById("dat").appendChild(myDate);

/*
var s= myDate.split("-");
var  date=new Date()
date.setFullYear(s[0],s[1],s[2]);
alert(date);
for(var i=1;i<6;i++){

var newDate=new Date();
newDate.setDate(date.getDate()+i);
//s=s+"<option>"+newDate.getFullYear()+"-"+(newDate.getMonth()+1)+"-"+newDate.getDate()+"</option>";
s=s+"<option>"+newDate.toLocaleDateString()+"</option>";


 }
document.getElementById("endDate").innerHTML=s;
*/
}

</script>
<form  action="daily_monitoring.php" method="post">
<input type="date" id="day" name="day" >
<input type="submit"   class="btn btn-primary" value="Set Date & then Click" name="submit" ></input>
</form>
<div id="target" style="width: 600px; height: 400px">
</div>

</div>
</div>