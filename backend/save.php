<?php

session_start();

include('connect.php');

$names=$_POST['names'];
$emails=$_POST['emails'];
$mobiles=$_POST['mobiles'];
$local=$_POST['locality'];
$areas=$_POST['area'];
$citi=$_POST['city'];
$states=$_POST['state'];
$pins=$_POST['pin'];


if($mobiles>9999999999 or $pins>999999)
{
echo "<script>alert('Error')</script>";
header('location:profile.php');
}

else
{
$sql6=("UPDATE person SET name='$names',email_id='$emails' WHERE ssn=".$_SESSION['ssn']);

$s=mysql_query($sql6);

$sql7=mysql_query("UPDATE person_mobile_number SET mob='$mobiles' WHERE ssn=".$_SESSION['ssn']);
$sql8=mysql_query("UPDATE address SET locality='$local',area='$areas',city='$citi',state='$states',pincode='$pins' WHERE a_id=".$_SESSION['a_id']);
if($s and $sql7 and $sql8)
{
$_SESSION['name']=$names;
$_SESSION['email_id']=$emails;
$_SESSION['mobile']=$mobiles;
$_SESSION['locality']=$local;
$_SESSION['area']=$areas;
$_SESSION['city']=$citi;
$_SESSION['state']=$states;
$_SESSION['pin']=$pins;


header('location:patient.php');
}
else
echo "error";
}
?>