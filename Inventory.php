<?php 

$bd = mysql_connect("localhost", "root", "") or die("Could not connect to the database");
mysql_select_db("aarogya", $bd) or die("Could not select the database");
?>

<html>
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
<title>REGISTRATION FORM</title>
 <script type="text/javascript" src="allJS/jquery.min.js"></script>
<script type="text/javascript" src="allJS/multizoom.js"></script>

    <script type="text/javascript">

        jQuery(document).ready(function($) {

            $('#image1').addimagezoom({ // single image zoom
                zoomrange: [3, 10],
                magnifiersize: [300, 300],
                magnifierpos: 'right',
                cursorshade: true
                //<-- No comma after last option!
            })
        })
    </script>
</head>

<body>

<!--<div style="margin-top:140px; display: block; float:right; margin-right:550px;"> 
<h2> Mother and Baby </h2>
<h3>Product Description</h3>
<img id='image1' src="/media/AC8EF60B8EF5CDB8/Aarogya/ekg.jpg" align="center" > <br><br><br><br>

</div>-->
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
		  <li><a href="#">About Us</a></li>
		  <li><a href="#">Services</a></li>
		  <li><a href="#">Contact Us</a></li>
		  <li><a href="#">Help</a></li>
		  
		  
		  
            <form class="navbar-form navbar-right" role="login" action="login.php" method="POST" style="margin-left:300px;">
				<div class="form-group">
				
				<input type="text" name="user" id="user" class="form-control" placeholder="Username">
				<input type="password" name="pass" id="pass" class="form-control" placeholder="Password">
				</div>
				<button type="submit" class="btn btn-success">Login</button><br>
				<label class="checkbox">
				<input type="checkbox" value="remember-me" > Remember me
				</label>
				
			</form>
			
			
            
          </ul>
          
        </div>
			
      </div>
    </div>

		<div class="col-sm-3 col-md-2 sidebar" style="margin-top:120px; ">
          
		  <ul class="nav nav-sidebar">
           </ul>

		  
          <ul class="nav nav-sidebar">
          <!--  <li><a href="Prescription.html">Order Medicine</a></li>
            <li><a href="">OTC Drugs</a></li>
            <li><a href="">Personal Care</a></li>
            
            <li><a href="">Mother And Baby</a></li>
           <!--<li><a href="">Online Order Non-OTC Drugs</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">Daily Monitoring</a></li>-->
            <li><a href="">Ordered Medicine</a></li>
            <li><a href="">Inventory</a></li>
          </ul>
        </div>

    <div class="col-sm-3 col-md-5 sidebar" style="margin-top:120px; ">
          
            
    <form class="form-horizontal" method="post" action="postdata.php" >
<fieldset>

<!-- Form Name -->
<legend>Inventory OTC</legend>

<!-- Text input-->
<div class="form-group">
  <div class="col-md-5">
  <label class="col-md-4 control-label" for="textinput1">MS_ID</label>  
  <input id="textinput1" name="textinput1" type="text" placeholder="MS_ID" class="form-control input-md">
  <label class="col-md-4 control-label" for="textinput2">P_ID</label>  
  <input id="textinput2" name="textinput2" type="text" placeholder="P_ID" class="form-control input-md">
  <label class="col-md-4 control-label" for="textinput3">Price</label>  
  <input id="textinput3" name="textinput3" type="text" placeholder="Price" class="form-control input-md">
  <label class="col-md-4 control-label" for="textinput4">Quantity</label>  
  <input id="textinput4" name="textinput4" type="text" placeholder="Quantity" class="form-control input-md">
  </div>
</div>

<!-- Button -->
<div class="form-group">
  
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Submit</button>
  </div>
</div>

</fieldset>
</form>

    </div>
<div  style="margin-top:120px; display: block; float:right; margin-right:450px;">

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
			<li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Terms & Conditions</a></li>
          </ul>
          
        </div>
			
      </div>
    </div><br><br>
	

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
