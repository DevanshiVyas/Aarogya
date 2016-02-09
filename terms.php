<!DOCTYPE html>



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
          <a class="navbar-brand"  style="color:#6495ED; font-size:18pt" href="home.php">AAROGYA.com</a>
        </div>
		
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-left">
		  <li><a href="home.php">Home</a></li>
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
				
				
			</form>
			
			
            
          </ul>
          
        </div>
			
      </div>
    </div>
	
<div class="container" style="margin-top:-40px;">
<div class="row">
      <div class="col-md-6 col-md-offset-3">
<div class="well well-sm">        
<fieldset>
<legend class="text-center">Aarogya Terms & Conditions</legend>
<div class="widget-body" style="margin-top:140px;margin-left:20px;background-color:;width:%;" >
<div class="widget-main no-padding">


<div class="page-content single-col-elm">	
<div class="fluid">
	
<div class="report-content">

1.By accessing our site you are agreeing to comply with the Terms Of Use. In addition, when using services, you agree to abide by any applicable LISTING guidelines i.e. listing policy for all our services, which may change from time to time. Should you object to any term or condition of the Terms Of Use or any guidelines, or policy, or any subsequent modifications there to or become dissatisfied with our site in any way, your only recourse is to immediately discontinue use of our site.
<br><br>
2.We reserve the right, at our sole discretion, to change, modify or otherwise alter these terms and conditions at any time. Such modifications shall become effective immediately upon the posting thereof. You must review this agreement on a regular basis to keep yourself apprised of any changes.
<br><br>
3.Every eligible person accessing our website would be hereinafter referred to as the "user" and every eligible person registering on our website would be hereinafter referred to as the "member". Use of our site is available only to persons, who are Citizens of the Republic of India, persons who can enter into a legally binding contract, and who are not barred by any law for the time being in force. If you are registering with our site not as an individual but on behalf of a legal entity, then you should represent that you are fully authorized to do so and the listing, posting, opinion or information placed on the site on behalf of the legal entity is your sole responsibility and you agree to be accountable for the same.
<br><br>
4.Your registration as a member/user constitute acceptance of these terms of use/terms and conditions/agreement including the PRIVACY POLICY and the listing policy defined herein/which is to be read and treated as part and parcel of this agreement, incorporated into this agreement. Further, user/member agrees that the information furnished by you/him/her/others in the registration form is accurate, true and complete and the information will be maintained and updated during the subsistence of this agreement, so that it will remain true, accurate, current and complete.
<br><br>
5.Aarogya in its absolute discretion may block or deny access to any member who is in violation of any of the terms of this agreement.
<br><br>	
	</div>
<div class="clear"></div>
 </div> <!--fluid div end-->
 </div>
 
 </div>
	</div>
	</div>
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
            <li><a href="#">Terms & Conditions</a></li>
          </ul>
          
        </div>
			
      </div>
    </div>
	</fieldset>
	</body>
	</html>	