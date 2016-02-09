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
<legend class="text-center">Contact Us</legend>
	
<div class="widget-body" style="margin-top:150px;margin-left:130px;background-color:;width:30%;" >
<div class="widget-main no-padding">
<table class="table table-bordered table-striped">
<thead class="thin-border-bottom">

</thead>

<tbody>
<tr>
<td>Name</td>

<td>
<b class="green">
<?php echo "Pushkar Dwivedi" ;?>
 </b>
</td>
</tr>
<tr>
<td>Email</td>

<td>
<b class="green">
<?php echo "pushkardwivedi02@gmail.com" ;?>
 </b>
</td>
</tr>
<tr>
<td>Contact Number</td>

<td>
<b class="green">
<?php echo "+918460212455" ;?>
 </b>
</td>
</tr>
<tr>
<td>Address</td>

<td>
<b class="green">
<?php echo "D-202,Hor Men, DA-IICT, Gandhinagar,Gujarat,India" ;?>
 </b>
</td>
</tr>

<div class="widget-body" style="margin-top:10px;margin-left:130px;background-color:;width:30%;" >
<div class="widget-main no-padding">
<table class="table table-bordered table-striped">
<thead class="thin-border-bottom">

</thead>

<tbody>
<tr>
<td>Name</td>

<td>
<b class="green">
<?php echo "Keval Shah" ;?>
 </b>
</td>
</tr>
<tr>
<td>Email</td>

<td>
<b class="green">
<?php echo "keval@gmail.com" ;?>
 </b>
</td>
</tr>
<tr>
<td>Contact Number</td>

<td>
<b class="green">
<?php echo "+918460441891" ;?>
 </b>
</td>
</tr>
<tr>
<td>Address</td>

<td>
<b class="green">
<?php echo "D-211,Hor Men, DA-IICT, Gandhinagar,Gujarat,India" ;?>
 </b>
</td>
</tr>
	
	</tbody>
	</table>
	</div>
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
            <li><a href="terms.php">Terms & Conditions</a></li>
          </ul>
          
        </div>
			
      </div>
    </div>
	</fieldset>
	</body>
	</html>	