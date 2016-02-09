<?php
session_start();
 


unset($_SESSION['login']);
	
unset($_SESSION['name']); 
  
unset($_SESSION['ssn']); 
 
unset($_SESSION['email_id']); 

unset($_SESSION['mobile']); 
 //session_destroy();
        //then redirect to login page
header('location:home.php');



?>
