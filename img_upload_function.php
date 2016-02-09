<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
<form action="image_upload.php" method="post" enctype="multipart/form-data">
  <input type="file" name="image">
  <input type="submit" name="submeet" value="Upload">
</form>

<?php
include_once("show_image.php");
if(isset($_POST['submeet']))
{
   $name       = $_FILES["image"]["name"];  
   $temp_name  = $_FILES["image"]["tmp_name"];  
   $folder = "E:\\softwares\\xampp\\htdocs\\Aarogya\\image\\";
   if (is_uploaded_file($temp_name))
   {   
       if(move_uploaded_file($temp_name, $folder.$name))
	   {
           echo "File uploaded";
		   print_r ($_FILES["image"]); 
		 
       }
	   else
	   {
           echo "File not moved to destination folder. Check permissions";
       };
    }
	else
	{
     echo "File is not uploaded.";
    }; 
}
?>
</body>
</html>
