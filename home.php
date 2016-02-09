<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AAROGYA</title>
	<script src="js/jquery.min.js"></script>
<script src="js/docs.min.js"></script>
<script src="js/bootstrap.min.js"></script>
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
		  <li><a href="#">Home</a></li>
		  <li><a href="aboutus.php">About Us</a></li>
		  <li><a href="#">Services</a></li>
		  <li><a href="contact.php">Contact Us</a></li>
		  <li><a href="#">Help</a></li>
 
 <script>
 $(function(){
 $('#logini').on('click',function(){
 
$.post( "login.php", { user: $("#user").val(), pass: $("#pass").val() },function(data) {
console.log('ERGER')
   if(data == "Wrong Username or Password")
    alert(data);
	else
	$('#sub').trigger('click')
  });
 	})
 });
  </script>
		
            <form id= "log" class="navbar-form navbar-right" role="login" action="login.php" method="POST" style="margin-left:300px;">
				<div class="form-group">
				
				<input type="text" name="user" id="user" class="form-control" placeholder="Username">
				<input type="password" name="pass" id="pass" class="form-control" placeholder="Password">
				</div>
				<button type="button"  class="btn btn-success" id="logini">Login</button><br>
				<button type="submit"  style="display:none" id="sub">Login</button><br>
				<!--<label class="checkbox">
				<input type="checkbox" value="remember-me" > Remember me
				</label>
				-->
			</form>
			
			
            
          </ul>
          
        </div>
			
      </div>
    </div>
	<div style="background-image:url('ecg.jpg'); margin-top:35px;background-position:0% -40%;background-repeat:no-repeat;background-size:100% 120%;">

		<h2 style="padding-top:70px;padding-bottom:10px;padding-left:20px; color:white;">Sign Up As</h2>
	
	
		<table width="100%">
		<tr ><td>		
		
          <img class="img-circle" data-src="holder.js/140x140" alt="100x100" src="hospital.jpg" style="margin-top:40px; margin-left:30px; border-color:black; border:2px solid; width: 100px; height: 100px;box-shadow: 00px 00px 100px #ffffff;">
          
          <p style="padding-bottom:100px;"><a class="btn btn-success " href="#" role="button" style="margin-left:30px;">Hospital</a></p>
        </td>
		
		<td>
		<!-- div  style="position:absolute;top:150px;left:25%;width:20%;" -->
          <img class="img-circle" data-src="holder.js/140x140" alt="100x100" src="doctor.jpg" style="margin-top:40px; width: 100px;border-color:black; border:2px solid; height: 100px;box-shadow: 00px 00px 100px #ffffff;">
         
		  <p style="padding-bottom:100px;"><a class="btn btn-success" href="#" role="button">Doctor</a></p>
        </td>
		<td>
		<!--div  style="position:absolute;top:150px;left:50%;width:20%;"-->
          <img class="img-circle" data-src="holder.js/140x140" alt="100x100" src="patient.jpg" style="margin-top:40px; width: 100px; border-color:black; border:2px solid;height: 100px;box-shadow: 00px 00px 100px #ffffff;">
          
          <p style="padding-bottom:100px;"><a class="btn btn-success" href="signup.php" role="button">Patient</a></p>
       </td>
		<td>
		
		
		<!--div  style="position:absolute;top:150px;left:75%;width:20%;"-->
          <img class="img-circle" data-src="holder.js/140x140" alt="100x100" src="medicalstore.jpg" style="margin-top:40px; width: 100px;border-color:black; border:2px solid; height: 100px;box-shadow: 00px 00px 100px #ffffff;">
          
          <p style="padding-bottom:100px;"><a class="btn btn-success" href="#" role="button">Medical Store</a></p>
       </td></tr></table>
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
    </div><br><br>
	
	<div>
	<marquee behavior="scroll" direction="left">
	<a href="http://www.way2tutorial.com/html/html_marquee_image.php">
	<img src="ecg.jpg" width="120" height="80" alt="Natural" />
	</a>
	<a href="http://www.google.com">
	<img src="ekg.jpg" width="120" height="80" alt="Natural" />
	</a>
	<img src="lab.jpg" width="120" height="80" alt="Natural" />
	<img src="back.jpg" width="120" height="80" alt="Natural" />
	<img src="background.jpg" width="120" height="80" alt="Natural" />
	</marquee>
	</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>