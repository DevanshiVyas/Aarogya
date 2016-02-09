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
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
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
          <a class="navbar-brand"  style="color:#6495ED; font-size:18pt" href="patient.php">AAROGYA.com</a>
        </div>
		
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-left">
		  <li><a href="patient.php">Home</a></li>
		  <li><a href="aboutus.php">About Us</a></li>
		  <li><a href="#">Services</a></li>
		  <li><a href="contact.php">Contact Us</a></li>
		  <li><a href="#">Help</a></li>
		  <li style="margin-left:500px"><a href="profile.php">Profile</a></li>
		  <li style="margin-left:50px"><a href="logout.php">Signout</a></li>
         </ul>
          
        </div>
			
      </div>
    </div>
	
	
	
<div class="col-sm-3 col-md-2 sidebar" style="margin-top:10px;background-color:;width:20%;">
          
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



<button style="margin-left:30px;" class="btn btn-primary " data-toggle="modal" data-target="#myModal">
  Edit Profile Picture
</button>				


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
            <li><a href="">Doctors</a></li>
            <li><a href="">Online Order OTC Drugs</a></li>
            <li><a href="">Online Order Non-OTC Drugs</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="daily.php">Daily Monitoring</a></li>
            <li><a href="">Appointments</a></li>
            <li><a href="history2.php">History</a></li>
          </ul>
        </div>
		
<form  action="save.php" method="POST" id="form" >
<div class="widget-body" style="margin-top:70px;margin-left:400px;background-color:;width:50%;" >
<div class="widget-main no-padding">
<table class="table table-bordered table-striped">
<thead class="thin-border-bottom">

</thead>

<tbody>
<tr>
<td>Full Name</td>

<td>
<b class="green">

 <input name="names" type="text" value="<?php  include('connect.php');
echo $_SESSION['name']; ?>" size="30" class="form-control" placeholder="Full Name" required/>
</b>
</td>
</tr>

<tr>
<td>Email ID</td>

<td>

<b class="green">
 <input name="emails" type="text" value="<?php  include('connect.php');
echo $_SESSION['email_id']; ?>" size="30" class="form-control" placeholder="Email ID" required/>
</b>
</td>
</tr>

<tr>
<td>Locality</td>

<td>

<b class="green">
 <input name="locality" type="text" value="<?php  include('connect.php');
echo $_SESSION['locality']; ?>" size="30" class="form-control" placeholder="Locality" required/>
</b>
</td>
</tr>

<tr>
<td>Area</td>

<td>

<b class="green">
 <input name="area" type="text" value="<?php  include('connect.php');
echo $_SESSION['area']; ?>" size="30" class="form-control" placeholder="Area" required/>
</b>
</td>
</tr>

<tr>
<td>City</td>

<td>

<b class="green">
 <input name="city" type="text" value="<?php  include('connect.php');
echo $_SESSION['city']; ?>" size="30" class="form-control" placeholder="City" required/>
</b>
</td>
</tr>

<tr>
<td>State</td>

<td>

<b class="green">
 <input name="state" type="text" value="<?php  include('connect.php');
echo $_SESSION['state']; ?>" size="30" class="form-control" placeholder="State" required/>
</b>
</td>
</tr>

<tr>
<td>Pin Code</td>

<td>

<b class="green">
 <input name="pin" type="text" value="<?php  include('connect.php');
echo $_SESSION['pin']; ?>" size="30" class="form-control" placeholder="Pin Code" required/>
</b>
</td>
</tr>

<tr>
<td>Mobile No.</td>

<td>

<b class="green">

 <input name="mobiles" Id="mobiles" type="text" value="<?php  include('connect.php');
echo $_SESSION['mobile']; ?>" size="10" class="form-control" placeholder="Mobile Number" required />
</b>
</td>
</tr>
<tr>
<td>Username</td>

<td>

<b class="green"><?php  include('connect.php');
echo $_SESSION['username']; ?>
</b>
</td>
</tr>

<tr>
<td>Date Of Birth</td>

<td>

<b class="green"><?php  include('connect.php');
echo $_SESSION['dob']; ?>
</b>
</td>
</tr>

<tr>
<td>Social Security No.</td>

<td>

<b class="green"><?php  include('connect.php');
echo $_SESSION['ssn']; ?>
</b>
</td>
</tr>
<tr>
<td>Gender</td>

<td>

<b class="green">
  <?php  include('connect.php');
echo $_SESSION['gender']; ?>
 </b>
</td>
</tr>
<tr>
<td>
<p style="padding-bottom:;" ><input class="btn btn-primary" onclick="check()" type="button" value="Save" role="button"/>  </p>
<td>
</tr>

</tbody>
</table>
 </form>
</div>
</div>
 <script type="text/javascript" >
function check()
{


if(document.getElementById("mobiles").value>9999999999)
{
alert("Error");
}
else
{document.getElementById("form").submit();
}



}
</script>


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