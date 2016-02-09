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

<?php
//session_start();
include('connect.php');
include('basic.php');



?>
<script src="js/jquery.min.js"></script>
<link rel="stylesheet" href="css/TableBarChart.css" />
<script type="text/javascript" src="js/TableBarChart.js"></script>
<script type="text/javascript">
    $(function() {
        $('#source').tableBarChart('#target', '', false);
    });
</script>

<div class="widget-body" style="margin-top:100px;margin-left:400px;background-color:;width:50%;" >
<div class="widget-main no-padding">
<table class="table table-bordered table-striped" id="source">
<thead class="thin-border-bottom">
<tr>

<th>
<i class="icon-caret-right blue"></i>
Date
</th>
<th>
<i class="icon-caret-right blue"></i>
Weight
</th>


</tr>
</thead>


<tbody>

<?php
$sql15=("SELECT * FROM weight_record WHERE p_id=".$_SESSION['ssn']);
$reco=mysql_query($sql15);
$recor=mysql_num_rows($reco);
//echo $record;
for($i=0;$i<$recor;$i++)
{
$weight=mysql_fetch_array($reco);

echo "<tr><th>".$weight['date']."</th><td>".$weight['value']."</td></tr>";

}


?>

</tbody>
</table>

<p style="padding-bottom:"><a class="btn btn-primary " href="addition.php" role="button" style="margin-left:;">Add Entry</a></p>
<div id="target" style="width: 600px; height: 400px">
</div>

</div>
</div>