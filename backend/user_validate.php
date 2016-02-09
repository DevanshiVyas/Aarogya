<?php
include('connect.php');

$sql=mysql_query("SELECT username FROM person");
$sum=mysql_num_rows($sql);
$n=$_POST['username'];
for($i=0;$i<$sum;$i++)
{
$users=mysql_fetch_array($sql);
if($n==$users['username'])
{echo "Username has already been taken"; break;}
}

?>