<?php

include('connect.php');

/*function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
*/
//$name=test_input($_POST['name']);
//echo $name;
$name=$_POST['name'];
$email=$_POST['email'];
@$gender=$_POST['sex'];
$mobile=$_POST['mobile'];
$dob=$_POST['dob'];
$username=$_POST['username'];
$password=$_POST['password'];
$repassword=$_POST['repassword'];
$locality=$_POST['locality'];
$area=$_POST['area'];
$city=$_POST['city'];
$pin=$_POST['pin'];
$ssn=$_POST['ssn'];
$state=$_POST['state'];
//$address=$_POST['address'];

if(isset($_POST['name'])&&isset($_POST['dob'])&&isset($_POST['email'])&&isset($_POST['mobile'])&&isset($_POST['username'])&&isset($_POST['password'])&&isset($_POST['repassword'])&&isset($_POST['sex'])&&isset($_POST['locality'])&&isset($_POST['area'])&&isset($_POST['city'])&&isset($_POST['state'])&&isset($_POST['pin'])&&isset($_POST['ssn']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$gender=$_POST['sex'];
$mobile=$_POST['mobile'];
$dob=$_POST['dob'];
$username=$_POST['username'];
$password=$_POST['password'];
$repassword=$_POST['repassword'];
$locality=$_POST['locality'];
//echo $locality;
$area=$_POST['area'];
$city=$_POST['city'];
$pin=$_POST['pin'];
$ssn=$_POST['ssn'];
$state=$_POST['state'];
$person_type="patient";

if(!empty($email)&&!empty($name)&&!empty($ssn)&&!empty($mobile)&&!empty($gender)&&!empty($username)&&!empty($password)&&!empty($repassword)&&!empty($locality)&&!empty($area)&&!empty($city)&&!empty($state)&&!empty($pin))

{
$sql2 = "INSERT INTO address(locality,area,city,state,pincode)VALUES('$locality','$area','$city','$state','$pin')";
$sql3 = "SELECT a_id FROM address WHERE locality='$locality'&& area='$area'&&city='$city'&&state='$state'&&pincode='$pin'";

mysql_query($sql2);
//mysql_query($sql3);
$a_id = mysql_query($sql3);

$a_id=mysql_fetch_array($a_id);

$a_id=$a_id['a_id'];
//echo $a_id;
//echo $name;
//echo $email;
//echo $username;
//echo $password;
//echo $gender;
//echo $ssn;
//echo $dob;
//echo $a_id;
//echo $address;


$sql = "INSERT INTO person(name,email_id,username,password,gender,ssn,dob,a_id,person_type)VALUES('$name','$email','$username','$password','$gender','$ssn','$dob','$a_id','$person_type')";

 mysql_query($sql);

mysql_query("INSERT INTO person_mobile_number(ssn,mob)VALUES('$ssn','$mobile')");
echo "<script>alert('You Have Been Successfully Registered! Please Login To Continue...')</script>";
header("location:home.php");
}
else
{
echo "<script>alert('please fill the empty field.')</script>";
}
}

?>

