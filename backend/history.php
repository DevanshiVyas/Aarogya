<!DOCTYPE HTML>
<?php
session_start();
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



<th>
<i class="icon-caret-right blue"></i>
Date
</th>

<th>
<i class="icon-caret-right blue"></i>
Doctor Name
</th>

<th class="hidden-480">
<i class="icon-caret-right blue"></i>
Event
</th>
<?php
/*
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

//echo "Pres".$med;
//$pres=(mysql_fetch_array($med));

$res=mysql_num_rows($med);

$s8=("SELECT * FROM patient_history WHERE p_id=".$_SESSION['ssn']);
$doc=mysql_query($s8);

$history=mysql_num_rows($doc);

for($i=0;$i<$history;$i++)
{
$hist=(mysql_fetch_array($doc));

$pres=(mysql_fetch_array($med));
//echo $pres['consumption_per_day'];
//print_r($pres);
/*
$s2=("SELECT * FROM medicine WHERE m_id=".$pres['m_id']);
$medi=mysql_query($s2);
$presc=(mysql_fetch_array($medi));
*/
$s3=("SELECT * FROM doctor_visit WHERE prescription_id=".$pres['prescription_id']);
$medic=mysql_query($s3);
@$prescript=(mysql_fetch_array($medic));

$s4=("SELECT * FROM person WHERE ssn=".$hist['d_id']);
$medici=mysql_query($s4);
@$prescripti=(mysql_fetch_array($medici));

//$s5=("SELECT * FROM patient_history WHERE p_id=".$_SESSION['ssn']);
//$d=mysql_query($s5);
//$hist=(mysql_fetch_array($d));


echo "<tr><td>".$hist['date']."</td><td>".$prescripti['name']."</td><td>".$hist['event']."</td></tr>";
}
?>

</tbody>
</table>

<p style="padding-bottom:"><a class="btn btn-success " href="his_add.php" role="button" style="margin-left:;">Add Entry</a></p>
<div id="target" style="width: 600px; height: 400px">
</div>
 </form>
</div>
</div>

</html>

