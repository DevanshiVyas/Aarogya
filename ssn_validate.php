<?php
include('connect.php');

$sql=mysql_query("SELECT ssn FROM person");
$sum=mysql_num_rows($sql);
$n=$_POST['ssn'];
for($i=0;$i<$sum;$i++)
{
$users=mysql_fetch_array($sql);
if($n==$users['ssn'])
{echo "!! SSN Already Exists PLEASE ENTER YOUR OWN SSN!!"; break;}
}

?>