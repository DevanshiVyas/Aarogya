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

$d=$_POST['d'];

$weight=$_POST['weight'];


$pid=$_SESSION['ssn'];
$sql13="INSERT INTO weight_record(p_id,date,value) VALUES('$pid','$d','$weight')";
//echo $sql13;
$sqq=mysql_query($sql13);


if($sqq)
{
$_SESSION['date']=$d;
$_SESSION['weight']=$weight;

header('location:daily_monitor.php');
}
?>