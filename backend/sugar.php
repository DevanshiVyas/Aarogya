<?php
session_start();
include('connect.php');

$dat=$_POST['dat'];

$fast=$_POST['fast'];

$after=$_POST['after'];
$pid=$_SESSION['ssn'];
$sql12="INSERT INTO sugar_level_record(p_id,date,fasting,after_eating) VALUES('$pid','$dat','$fast','$after')";
echo $sql12;
$sq=mysql_query($sql12);


if($sq)
{
$_SESSION['date']=$dat;
$_SESSION['fasting']=$fast;
$_SESSION['after_eating']=$after;
header('location:daily_monitoring.php');
}
?>