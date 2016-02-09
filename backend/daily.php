<!DOCTYPE html>
<?php
session_start();
//session_destroy();
if(!isset($_SESSION['ssn'])){
        
	echo "You are not allowed"."<a href='home.php'>back to login page</a>";
      header('location:home.php');  
        //then abort the script
	exit();
}
  ?> 


<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AAROGYA</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  

	<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand"  style="color:#6495ED; font-size:18pt" href="#">AAROGYA.com</a>
        </div>
		
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-left">
		  <li><a href="patient.php">Home</a></li>
		  <li><a href="aboutus.php">About Us</a></li>
		  <li><a href="#">Services</a></li>
		  <li><a href="#">Contact Us</a></li>
		  <li><a href="#">Help</a></li>
		  <li style="margin-left:500px"><a href="profile.php">Profile</a></li>
		  <li style="margin-left:50px"><a href="logout.php">Signout</a></li>
         </ul>
          
        </div>
			
      </div>
    </div>
	
	
	
<div class="col-sm-3 col-md-2 sidebar" style="margin-top:100px;background-color:;width:20%;">
          <?php
//session_start();
include('connect.php');
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
        echo "<img class='img-circle profile-pic' data-src='holder.js/140x140' alt='150x150' src='".$filename."' style='margin-top:px; margin-left:20px; border-color:black; border:2px solid; width:180px; height:170px;box-shadow: 00px 00px 100px #ffffff';>";

    }
	$flag=1;
		}
}
if($flag==0){
	echo "<img class='img-circle profile-pic' data-src='holder.js/140x140' alt='150x150' src='image/patient.jpg' style='margin-top:px; margin-left:20px; border-color:black; border:2px solid; width:180px; height:170px;box-shadow: 00px 00px 100px #ffffff';>";
}

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
		   
		   header("Location: ".$_SERVER['PHP_SELF']);
		   //print_r ($_FILES["image"]); 
		 //header('location:patient.php');
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



				


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Edit Profile Pic</h4>
      </div>
      <div class="modal-body">
        <form method="post" enctype="multipart/form-data">
	  		    <input type="file" name="image" class="form-control image_input" accept="image/*">
				<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" name="submeet" class="btn btn-primary">Save changes</button>
      </div>
				</form>
      </div>
    
    </div>
  </div>
</div>
		  <ul class="nav nav-sidebar">
           </ul>
		  
          <ul class="nav nav-sidebar">
            <li><a href="prescription.php">Prescriptions</a></li>
            <li><a href="doctors.php">Doctors</a></li>
            
            <li><a href="">Online Order OTC Drugs</a></li>
            <li><a href="">Online Order Non-OTC Drugs</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="daily.php">Daily Monitoring</a></li>
            <li><a href="appointments.php">Appointments</a></li>
            <li><a href="history2.php">History</a></li>
          </ul>
        </div>
		
		
		
		<div class="navbar navbar-inverse navbar-fixed-bottom" role="navigation" style="margin-bottom:00px;">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        
        </div>
			  <div style="position:absolute;bottom:+15px;color:white;">
		  <script>

			var d=new Date();
			d.sub
			document.write(d);

			</script>
			
            </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
			
			<li style="margin-top:15px;margin-right:300px;color:white;">Copyright &#169 2014 Aarogya.com</li>
			<li><a href="privacy.php">Privacy Policy</a></li>
            <li><a href="terms.php">Terms & Conditions</a></li>
          </ul>
          
        </div>
			
      </div>
    </div>
	
	</body>
	</html>
<?php 
session_start();
include('connect.php');
//include('basic.php');

?>
<table>
<tr>
<th>
<p style="padding-bottom:px;padding-top:px; padding-left:px;"><a class="btn btn-primary " href="daily_monitoring.php" role="button" style="margin-left:200px;margin-top:150px;">Monitor Sugar Record</a></p>
</th>
<th>
<p style="padding-bottom:px;padding-top:px; padding-left:px;"><a class="btn btn-primary " href="daily_monitor.php" role="button" style="margin-left:100px;margin-top:150px;">Monitor Weight Record</a></p>
</th>
</tr>
</table>




</html>