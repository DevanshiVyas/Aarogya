<?php
session_start();
include('connect.php');

$da=$_POST['da'];
//echo $da;
$doctor=$_POST['doctor'];
//echo $doctor;
$event=$_POST['event'];
$pid=$_SESSION['ssn'];
$symptoms=$_POST['symptoms'];
//$doctor=$_POST['doctor'];
$cause=$_POST['cause'];
$cure=$_POST['cure'];
$follow_up=$_POST['follow_up'];
$prescription_id=$_POST['prescription_id'];
//echo $prescription_id;

//$sql20="INSERT INTO patient_history(p_id,date,event,symptoms,cause,d_name,cure,prescription_id,follow_up) VALUES('$pid','$da','$event','$symptoms','$cause','$doctor','$cure','$prescription_id','$follow_up')";

$sql1="INSERT INTO `history`(`p_id`, `date`, `event`, `symptoms`, `cause`, `d_name`, `cure`, `prescription_id`, `follow_up`) VALUES ('$pid','$da','$event','$symptoms','$cause','$doctor','$cure','$prescription_id','$follow_up')";
//echo $sql12;
$sqll=mysql_query($sql1);

echo $sqll;

if($sqll)
{
$_SESSION['date']=$da;
$_SESSION['d_name']=$doctor;
$_SESSION['event']=$event;
$_SESSION['symptoms']=$symptoms;
$_SESSION['cause']=$cause;
$_SESSION['cure']=$cure;
$_SESSION['prescription_id']=$prescription_id;
$_SESSION['follow_up']=$follow_up;


header('location:history2.php');
}
?>