<?php
//session_start();
include('connect.php');

		$id=$_SESSION['ssn'];
		
		$sql = "select path from prescription_upload where ssn='$id'";
		$result=mysql_query($sql);
		
		$count= mysql_num_rows($result);
		for($j=0;$j<$count;$j++)
		{
		$r=mysql_fetch_array($result);
		$i=0;
		foreach (glob("upload/*") as $filename) {
		$i++;
		if($filename==$r[0]){
    	$path_parts = pathinfo($filename);
			//echo $_SESSION['id'];
		echo "<script>function large(a){
	
		document.getElementById(a).style.width=300+'px';
		document.getElementById(a).style.height=300+'px';
		
		}
		function small(a){
		document.getElementById(a).style.width=150+'px';
		document.getElementById(a).style.height=150+'px';
		}
		</script>";
		//echo $filename;
    	if($path_parts['extension'] == "jpg")
	{	
        echo "<img onmouseover='large($i)' onmouseleave='small($i)' id=".$i." class='img-circle profile-pic' data-src='holder.js/140x140' alt='150x150' src='".$filename."' style='margin-top:px; margin-left:30px; border-color:black; border:2px solid; width:150px; height:150px;box-shadow: 00px 00px 100px #ffffff';>";

    }
	
		}
}
}



?>