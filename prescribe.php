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

<div class="widget-body" style="margin-top:100px;margin-left:400px;background-color:;width:50%;" >
<div class="widget-main no-padding">
<table class="table table-bordered table-striped">

<thead class="thin-border-bottom">
<tr>

<th class="hidden-480">
<i class="icon-caret-right blue"></i>
Medicine Name
</th>

<th>
<i class="icon-caret-right blue"></i>
Duration
</th>

<th>
<i class="icon-caret-right blue"></i>
Consumption Per Day
</th>

</tr>
</thead>

<tbody>
<?php
$p=$_GET['a'];
//echo $p;

$s1=("SELECT * FROM med_prescribed WHERE prescription_id=$p");
$med=mysql_query($s1);

//echo "Pres".$med;
//$pres=(mysql_fetch_array($med));

$res=mysql_num_rows($med);


for($i=0;$i<$res;$i++)
{
$presi=(mysql_fetch_array($med));

//echo $pres['consumption_per_day'];
//print_r($pres);
$s2=("SELECT * FROM medicine WHERE m_id=".$presi['m_id']);
$medi=mysql_query($s2);
$presc=(mysql_fetch_array($medi));

/*
$s3=("SELECT * FROM doctor_visit WHERE prescription_id=".$_SESSION['prescription_id']);
$medic=mysql_query($s3);
$prescript=(mysql_fetch_array($medic));


$s4=("SELECT * FROM person WHERE ssn=".$prescript['d_id']);
$medici=mysql_query($s4);
$prescripti=(mysql_fetch_array($medici));
*/
echo "<tr><td>".$presc['name']."</td><td>".$presi['duration']."</td><td>".$presi['consumption_per_day']."</td></tr>";
}

?>
</tbody>
</table>
 </form>
</div>
</div>

