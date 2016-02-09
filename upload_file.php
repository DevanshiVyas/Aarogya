<?php
session_start();
include('connect.php');

$id=$_SESSION['ssn'];
$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/x-png")
|| ($_FILES["file"]["type"] == "image/png"))
&& ($_FILES["file"]["size"] < 20000)
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
  else
    {
    echo "Upload: " . $_FILES["file"]["name"] . "<br>";
    echo "Type: " . $_FILES["file"]["type"] . "<br>";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";

    if (file_exists("upload/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
	  header('location:prescription.php');
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],"upload/" .$_FILES["file"]["name"]);
      echo "Stored in: " . "Aarogya/upload/" . $_FILES["file"]["name"];
	  $full_name=("upload/". $_FILES["file"]["name"]);
		$_SESSION['img']=$full_name;
	  $sql="insert into prescription_upload(ssn,path) values('$id','$full_name')";
		//echo $folder.$name." ".$count." ";
		
		   $result=mysql_query($sql);
	  header('location:prescription.php');
      }
    }
  }
else
  {
  echo "File Size should be less than 20kb";
  }
?>