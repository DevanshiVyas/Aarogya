<!DOCTYPE html>
 
 <script src="js/docs.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.min.js"></script>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="" name="description">
	<meta content="" name="author">
	<link href="" rel="shortcut icon">
 
	<title>Sign Up page</title>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap-responsive.css" rel="stylesheet">
</head>

<script language="javascript" type="text/javascript">
	
function fname_validate()
   {
 if(document.getElementById('name').value.length==0)
 {document.getElementById('err_fname').innerHTML="!! PLEASE WRITE YOUR FULL NAME !!";}
 else if(!isNaN(document.getElementById('name').value))
 	  {document.getElementById('err_fname').innerHTML="!! ONLY ALPHABETS ARE ALLOWED !!";}
 else
 {document.getElementById('err_fname').innerHTML="";}
}

function phone_no_validate()
{
if(document.getElementById('mobile').value.length==0)
{document.getElementById('err_phno').innerHTML="!! PLEASE WRITE YOUR PHONE NUMBER !!";}
else if(isNaN(document.getElementById('mobile').value))
{document.getElementById('err_phno').innerHTML="!! ONLY NUMBERs ALLOWED !!";}
else if(document.getElementById('mobile').value.length!=10)
{document.getElementById('err_phno').innerHTML="!! PHONE NUMBER SHOULD BE OF 10 DIGIT  !!";}
else
   {document.getElementById('err_phno').innerHTML="";}	
}

function pincode_validate()
{
if(document.getElementById('pin').value.length==0)
{document.getElementById('err_pincode').innerHTML="!! PLEASE WRITE THE PINCODE !!";}
else if(isNaN(document.getElementById('pin').value))
{document.getElementById('err_pincode').innerHTML="!! ONLY NUMBERs ALLOWED !!";}
else if(document.getElementById('pin').value.length!=6)
{document.getElementById('err_pincode').innerHTML="!! PINCODE SHOULD BE OF 6 DIGITS  !!";}
else
   {document.getElementById('err_pincode').innerHTML="";}	
}

function ssn_validate()
{
if(document.getElementById('ssn').value.length==0)
{document.getElementById('err_ssn').innerHTML="!! PLEASE WRITE THE SOCIAL SECURITY NUMBER !!";}
else if(document.getElementById('ssn').value.length!=10)
{document.getElementById('err_ssn').innerHTML="!! SSN SHOULD BE OF 10 DIGITS !!";}
else
   {document.getElementById('err_ssn').innerHTML="";}	
}

function email_check()
{

      var x=document.getElementById('email').value;
      var atpos=x.indexOf("@");
      var dotpos=x.lastIndexOf(".");
      if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
      {
           document.getElementById('err_email').innerHTML="!! NOT A VALID E-MAIL  !!";
      }
	else
	{document.getElementById('err_email').innerHTML="";}
}

function username_validate()
   {
 // if(document.getElementById('username').value.length==0)
 // {document.getElementById('err_user').innerHTML="!! PLEASE WRITE YOUR USER NAME !!";}
 
// n=document.getElementById('username').value;      	
  // $.post('user_validate.php?n='+n,function(data){
     
      // console.log(data)
      // if(data=="1")
      // document.getElementById("err_user").innerHTML="!! THIS USERNAME IS ALREADY TAKEN !!"
      // if(data=="0")
      // document.getElementById("err_user").innerHTML=""})

}
$( document ).ready(function() {
  $("#username").blur(function(){
  $.post("user_validate.php",
  {
    username:document.getElementById('username').value
    
  },
  function(data){
  document.getElementById("err_user").innerHTML=data;
  });
});

$("#ssn").blur(function(){
if(document.getElementById('ssn').value.length==0)
{document.getElementById('err_ssn').innerHTML="!! PLEASE WRITE THE SOCIAL SECURITY NUMBER !!";}
else if(document.getElementById('ssn').value.length!=10)
{document.getElementById('err_ssn').innerHTML="!! SSN SHOULD BE OF 10 DIGITS  !!";}
else
   {document.getElementById('err_ssn').innerHTML="";}	

  $.post("ssn_validate.php",
  {
    ssn:document.getElementById('ssn').value
    
  },
  function(data){
  document.getElementById("err_ssn").innerHTML=data;
  });
});

});

function password_validate()
   {
 if(document.getElementById('password').value.length==0)
 {document.getElementById('err_pass').innerHTML="!! PLEASE ENTER YOUR PASSWORD !!";}
 
 else
 {document.getElementById('err_pass').innerHTML="";}
}

function repassword_validate()
   {
 if(document.getElementById('repassword').value.length==0)
 {document.getElementById('err_repass').innerHTML="!! PLEASE RE-ENTER YOUR PASSWORD !!";}
 else if(document.getElementById('password').value!=document.getElementById('repassword').value)
 {
 document.getElementById('err_repass').innerHTML="!! WRONG PASSWORD ENTERED !!";
 }
 else
 {document.getElementById('err_repass').innerHTML="";}
}

function locality_validate()
   {
 if(document.getElementById('locality').value.length==0)
 {document.getElementById('err_locality').innerHTML="!! PLEASE ENTER YOUR LOCALITY !!";}
 
 else
 {document.getElementById('err_locality').innerHTML="";}
}

function area_validate()
   {
 if(document.getElementById('area').value.length==0)
 {document.getElementById('err_area').innerHTML="!! PLEASE ENTER YOUR AREA !!";}
 
 else
 {document.getElementById('err_area').innerHTML="";}
}

function city_validate()
   {
 if(document.getElementById('city').value.length==0)
 {document.getElementById('err_city').innerHTML="!! PLEASE ENTER YOUR CITY !!";}
 
 else
 {document.getElementById('err_city').innerHTML="";}
}

function state_validate()
   {
 if(document.getElementById('state').value.length==0)
 {document.getElementById('err_state').innerHTML="!! PLEASE ENTER YOUR STATE !!";}
 
 else
 {document.getElementById('err_state').innerHTML="";}
}

</script>

<body>

<div class="container">
<div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="well well-sm">
<fieldset>
<legend class="text-center">Registration Form For Patient</legend>
			
<form  name="registration" action="registration.php" method="POST" >
   <div class="form-group">
              <label class="col-md-3 control-label" for="name">Full Name</label>
              <div class="col-md-9">
 
 <input name="name" id="name" type="text" value="" onBlur="fname_validate()" class="form-control" size="30" placeholder="Full Name" required/>
 <div id="err_fname" style="color:#F03"></div><br>
 </div>
  </div>
 
 <div class="form-group">
              <label class="col-md-3 control-label" for="name">Date Of Birth</label>
              <div class="col-md-9">
 <input name="dob" type="date" value="" class="form-control" size="10" required /> <br>
 </div>
 </div>
 
 <div class="form-group">
              <label class="col-md-3 control-label" for="name">E-Mail</label>
              <div class="col-md-9">
 
 <input name="email" id="email" type="text" value="" class="form-control" size="30" onBlur="email_check()" placeholder="Email ID" required/> 
<div id="err_email" style="color:#F03"></div><br>
 </div>
</div>

<div class="form-group">
              <label class="col-md-3 control-label" for="name">Mobile No.</label>
              <div class="col-md-9"> 
 
 <input name="mobile" id="mobile" type="text" value="" onBlur="phone_no_validate()" class="form-control" size="10" placeholder="Phone Number" required/> 
 <div id="err_phno" style="color:#F03"></div><br>
 </div>
 </div>
 
 <div class="form-group">
              <label class="col-md-3 control-label" for="name">Social Security Number</label>
              <div class="col-md-9">
 
 <input name="ssn" id="ssn" type="text" value="" onBlur="ssn_validate()" class="form-control" size="20" placeholder="Social Security Number" required/> 
 <div id="err_ssn" style="color:#F03"></div><br>
 </div>
 </div>
 
 <div class="form-group">
              <label class="col-md-3 control-label" for="name">Username</label>
              <div class="col-md-9">
 
 
 <input name="username" id="username" type="text" value="" onBlur="username_validate()" class="form-control" size="30" placeholder="Username" required/>  
 <div id="err_user" style="color:#F03"></div><br>
 </div>
 </div>
 
 <div class="form-group">
              <label class="col-md-3 control-label" for="name">Password</label>
              <div class="col-md-9">
 
 <input name="password" id="password" type="password" value="" onBlur="password_validate()" class="form-control" size="30" placeholder="Password" required/> 
 <div id="err_pass" style="color:#F03"></div><br>
 </div>
 </div>
 
 <div class="form-group">
              <label class="col-md-3 control-label" for="name">Confirm Password</label>
              <div class="col-md-9">

  <input name="repassword" id="repassword" type="password" value="" onBlur="repassword_validate()" class="form-control" size="30" placeholder="Re-Password" required/> 
 <div id="err_repass" style="color:#F03"></div><br>
 </div>
 </div>
 <!--
 <div class="form-group">
              <label class="col-md-3 control-label" for="name">Address</label>
              <div class="col-md-9">
<input name="address" type="text" value="" class="form-control" size="50"/> <br>
	</div>
	</div>
	-->
<div class="form-group">
              <label class="col-md-3 control-label" for="name">Gender</label>
              <div class="col-md-9">
	
	<label class="col-md-3 control-label" for="name">Male</label>
	<input type="radio" name="sex" class="form-control" value="male">
	<label class="col-md-3 control-label" for="name">Female</label>
	<input type="radio" name="sex" class="form-control"  value="female"><br>
	</div>
	</div>
	
<div class="form-group">
              <label class="col-md-3 control-label" for="name">Locality</label>
              <div class="col-md-9">
			  
	
	<input name="locality" id="locality" type="text" value="" onBlur="locality_validate()" class="form-control" size="30" placeholder="Locality" required />
	<div id="err_locality" style="color:#F03"></div><br>
	</div>
	</div>
	
	<div class="form-group">
              <label class="col-md-3 control-label" for="name">Area</label>
              <div class="col-md-9">
	
	<input name="area" id="area" type="text" value="" onBlur="area_validate()" class="form-control" size="30" placeholder="Area" required/> 
	<div id="err_area" style="color:#F03"></div><br>
	</div>
	</div>
	
	<div class="form-group">
              <label class="col-md-3 control-label" for="name">City</label>
              <div class="col-md-9">
	
	<input name="city" id="city" type="text" value="" onBlur="city_validate()" class="form-control" size="30" placeholder="City" required/> 
	<div id="err_city" style="color:#F03"></div><br>
	</div>
	</div>
	
	<div class="form-group">
              <label class="col-md-3 control-label" for="name">State</label>
              <div class="col-md-9">
	
	<input name="state" id="state" type="text" value="" onBlur="state_validate()" class="form-control" size="30" placeholder="State" required/> 
	<div id="err_state" style="color:#F03"></div><br>
	</div>
	</div>
	
	
	
	<div class="form-group">
              <label class="col-md-3 control-label" for="name">PinCode</label>
              <div class="col-md-9">
	
	<input name="pin" id="pin" type="text" value="" onBlur="pincode_validate()" class="form-control" size="6" placeholder="Pin Code" required/> 
	<div id="err_pincode" style="color:#F03"></div><br><br>
	</div>
	</div>
	
    <div class="form-group">
              <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-success btn-lg">Sign Up</button>
              </div>
            </div>
          </fieldset>
          </form>
        </div>
      </div>
	</div>
</div>
</body>
</html>