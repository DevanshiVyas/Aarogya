<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "aarogya1";
$bd = mysql_connect($hostname, $username, $password) or die("Could not connect to the database");
mysql_select_db($database, $bd) or die("Could not select the database");
?>