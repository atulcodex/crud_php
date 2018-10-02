<?php

	error_reporting(0);

?>
<!DOCTYPE html>
<html>
<head>
	<title>upload images</title>
</head>
<body>
	<form action="" method="post" enctype="multipart/form-data">
		<input type="file" name="uploadfile" value="" />
		<input type="submit" name="submit" value="Upload"/>
	</form>
</body>
</html>
<?php
	
	$filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
	$type = $_FILES["uploadfile"]["type"];
	$folder = "student/".$filename;

	move_uploaded_file($tempname, $folder);

	echo "<img src='$folder' width='100' height='100' />";
?>
