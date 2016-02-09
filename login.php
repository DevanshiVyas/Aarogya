<?php
session_start();

include ('connect.php');

$user=$_POST['user'];
$pass=$_POST['pass'];

$sql5="SELECT * FROM person WHERE username='$user' and password='$pass'";
$result=mysql_query($sql5);

$count=mysql_num_rows($result);

if($count==1){

$r=(mysql_fetch_array($result));

$_SESSION['login']=1;

$_SESSION['ssn']=$r[0];
$_SESSION['name']=$r[1];
$_SESSION['email_id']=$r[2];
$_SESSION['username']=$r[3];
$_SESSION['password']=$r[4];
$_SESSION['gender']=$r[5];
$_SESSION['dob']=$r[6];
$_SESSION['a_id']=$r[7];
$_SESSION['address']=$r[9];
//echo $_SESSION['a_id'];
$mob=mysql_query("SELECT * FROM person_mobile_number WHERE ssn=".$_SESSION['ssn']);
$m=mysql_fetch_array($mob);
//print_r($m);
$_SESSION['mobile']=$m[1];

$sqq=("SELECT * FROM address WHERE a_id=".$_SESSION['a_id']);
$add=mysql_query($sqq);
//echo $add;
$a=mysql_fetch_array($add);
//echo $a;
//print_r($a);
$_SESSION['locality']=$a[1];
$_SESSION['area']=$a[2];
$_SESSION['city']=$a[3];
$_SESSION['state']=$a[4];
$_SESSION['pin']=$a[5];

//echo $_SESSION['locality'];
//print_r($r);
header("location:login_success.php"); 

}
else {
echo "Wrong Username or Password";
//header("location:home.html");

//echo "Wrong Username or Password";
}

?>