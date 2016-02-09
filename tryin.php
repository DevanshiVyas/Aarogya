<?php

include ('connect.php');
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
<title>OTC INVENTORY</title>
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

<ul class="nav nav-sidebar">
            <li><a href="">Daily Monitoring</a></li>-->
            <li><a href="">Ordered medicine</a></li>
            <li><a href="">Inventory</a></li>
          </ul>


<img id='image1' src="/media/AC8EF60B8EF5CDB8/Aarogya/ekg.jpg" align="center" > 

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
	
	
	
<div >
    
	<script>
		jQuery(function(){
				var counter = 1;
				jQuery('input#addrow').click(function(event){
			
						event.preventDefault();
						counter++;
						var newRow = jQuery('<tr>'+
								'<td><button type="button" class="btn btn-default btn-lg removerow" style="position:relative; margin-left:5px">'+
								'<span class="glyphicon glyphicon-remove"></span> '+
								'</button></td>'+
								'<td>	<select placeholder="product_otc" name="med'+counter+'" class="form-control searchMed"  required>'+
								'<option>SELECT</option>'+
								'<?php 
								$req=mysql_query("select * from product_otc");
								while($data=mysql_fetch_array($req))
								{
								?>'+
									'<option><?php echo $data['name'];?></option>'+
								
								'<?php 
								} ?>'+
								'</select></td>'
								'<br /><input type="hidden" name="count" value="'+counter+'"/></td></tr>	');
						jQuery('table#product_otclist').append(newRow);
				});
		});
					
	</script>



            <form class="navbar-form navbar-right" role="login" action="login.php" method="POST" style="margin-left:300px;">
                
            </form>



          
        
    <div class="col-sm-3 col-md-5 sidebar" style="margin-top:120px; ">


    <form class="form-horizontal" method="post" action="postdata.php" >
<fieldset>

<!-- Form Name -->
<legend>Inventory OTC</legend>

<!-- Text input-->
<div class="form-group" >
  <div class="col-md-5">
  <tr>
						<td>
							<button type="button" class="btn btn-default btn-lg removerow" style="position:relative; margin-left:5px">
							  <span class="glyphicon glyphicon-remove"></span> 
							</button>
						</td>
						<td>
							<label  class="col-sm-2 control-label" style="text-align:center; width:200px">Product Name:</label>
				    
							<select placeholder="Product" name="med1" class="form-control searchMed"  required>
								<option>SELECT</option>
							<?php 
							$req=mysql_query("select * from product_otc");
							while($data=mysql_fetch_array($req))
							{
							?>
								<option><?php echo $data['name'];?></option>
							
							<?php 
							} ?>
							</select>
						</td>
					
  <label class="col-md-4 control-label" for="textinput2">Price</label>
  <input id="textinput2" name="textinput2" type="text" placeholder="Price" class="form-control input-md">
  <label class="col-md-4 control-label" for="textinput3">Quantity</label>
  <input id="textinput3" name="textinput3" type="text" placeholder="Quantity" class="form-control input-md">
  </div>
</div>

<!-- Button -->
<div class="form-group"> 

  <div class = "col-md-4" >
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Submit</button>
  </div>
</div>

</fieldset>
</form>
<div class = "col-md-4" style="margin-top:10px; display: block; float:right; margin-left:100px;" >
        <table>
        <?php
        include ('connect.php');
        
        $q = "SELECT * FROM inventory_otc";

        $res = mysql_query($q);
        
        while($row = mysql_fetch_assoc($res)) {
        
        $t = $row['p_id'];
		//$m = $row['mrp'];

        
        
        $qry1 = "SELECT * FROM product_otc WHERE p_id='$t'";
	$temp = mysql_query($qry1);

	
	        $row2 = mysql_fetch_array($temp);


		    echo "<tr>";
		    
            echo "<td>" . $row["p_id"] . "</td>";
            echo "<td>" . $row2["name"] . "</td>";
            echo "<td>" . $row["price"] . "</td>";
            echo "<td>" . $row2["mrp"] . "</td>";
            echo "<td>" . $row["quantity"] . "</td>";
            echo "</tr>";
        }
        ?>
        </table>
        </div>

<div class="widget-body" style="margin-top:100px;margin-left:400px;background-color:;width:50%;" >
<div class="widget-main no-padding">
<table class="table table-bordered table-striped">

<thead class="thin-border-bottom">
<tr>

<th class="hidden-480">
<i class="icon-caret-right blue"></i>
Name
</th>

<th>
<i class="icon-caret-right blue"></i>
Price
</th>

<th>
<i class="icon-caret-right blue"></i>
Quantity
</th>
<?php /*
<th class="hidden-480">
<i class="icon-caret-right blue"></i>
Duration
</th>

<th class="hidden-480">
<i class="icon-caret-right blue"></i>
Consumption Per Day
</th>
*/
?>
</tr>
</thead>

<tbody>
<?php
$s1=("SELECT * FROM inventory_otc");
$med=mysql_query($s1);
$row = mysql_fetch_assoc($med);
$t = $row['p_id'];

//echo "Pres".$med;
//$pres=(mysql_fetch_array($med));

$res=mysql_num_rows($med);

for($i=0;$i<$res;$i++)
{
$pres=(mysql_fetch_array($med));


//echo $pres['consumption_per_day'];
//print_r($pres);
$s2=("SELECT * FROM product_otc WHERE p_id='$t'");
$medi=mysql_query($s2);
$row2=(mysql_fetch_array($medi));

 echo "<tr>";
		    
            echo "<td>" . $row["p_id"] . "</td>";
            echo "<td>" . $row2["name"] . "</td>";
            echo "<td>" . $row["price"] . "</td>";
            echo "<td>" . $row2["mrp"] . "</td>";
            echo "<td>" . $row["quantity"] . "</td>";
            echo "</tr>";
      


}
?>

</tbody>
</table>
</div>
</div>

<div  style="margin-top:10px; display: block; float:right; margin-right:450px;">

    <div class="navbar navbar-inverse navbar-fixed-bottom" role="navigation" style="margin-bottom:00px;">
      <div class="container-fluid">
        <div class="navbar-header">
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

