<?php
session_start();
/*include('connect.php');
		$flag=0;
		$id=$_SESSION['ssn'];
		
		$sql = "select url from image where ssn='$id'";
		$result=mysql_query($sql);
		$r=mysql_fetch_array($result);
		$count= mysql_num_rows($result);
		foreach (glob("image/*") as $filename) {
		if($filename==$r[0]){
    	$path_parts = pathinfo($filename);
		//echo $filename;
    	if($path_parts['extension'] == "jpg")
	{
        echo "<img src='".$filename."' class='img-circle profile-pic'>";

    }
	$flag=1;
		}
}
if($flag==0){
	echo "<img src='image/images.jpg' class='img-circle profile-pic'>";
}



*/
?>

<?php
$id = $_SESSION['ssn'];
//include_once("show_image.php");
if(isset($_POST['submeet']))
{
   $name       = $_FILES["image"]["name"];  
   $temp_name  = $_FILES["image"]["tmp_name"];  
   $folder = "E:\\softwares\\xampp\\htdocs\\Aarogya\\image\\";
   if (is_uploaded_file($temp_name))
   {   
       if(move_uploaded_file($temp_name, $folder.$name))
	   {
         
		$sql="select ssn from image where ssn='$id'";
		$result=mysql_query($sql);
		$count= mysql_num_rows($result);
		$full_name="image/".$name;
		$_SESSION['img']=$full_name;
		if($count)
		{
		$sql="update image set url='$full_name' where ssn='$id'";
		//echo $folder.$name;
		}
		else{
		$sql="insert into image(ssn,url) values('$id','$full_name')";
		//echo $folder.$name." ".$count." ";
		}
		   $result=mysql_query($sql);
		   
		   //header("Location: ".$_SERVER['PHP_SELF']);
		   //print_r ($_FILES["image"]); 
		 header('location:patient.php');
       }
	   else
	   {
           echo "File not moved to destination folder. Check permissions";
       }
    }
	else
	{
     echo "File is not uploaded.";
    } 
}
?>
