<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php

foreach (glob("image/*") as $filename) {

    $path_parts = pathinfo($filename);
    if($path_parts['extension'] == "jpg")
	{
        echo '<img src="'.$filename.'">';
    }
}
?>
<body>
</body>
</html>