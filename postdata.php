<?php
$bd = mysql_connect("localhost", "root", "") or die("Could not connect to the database");
mysql_select_db("aarogya", $bd) or die("Could not select the database");

$a= $_POST['textinput1'];
//echo $a;
$b= $_POST['textinput2'];
//echo $b;
$c= $_POST['textinput3'];
//echo $c;
$d= $_POST['textinput4'];
//echo $d;

$sql25 = "INSERT INTO inventory_otc(ms_id,p_id,price,quantity) VALUES('$a','$b','$c','$d')";
$result=mysql_query($sql25);

//echo $result;
//print_r(mysql_fetch_array($result));

/* Redirect visitor to the inventory page */
//header('Location: inventory.php');

?>