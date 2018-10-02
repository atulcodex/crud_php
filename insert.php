<?php
	include ("connection.php");
	error_reporting(0);
?>

<!DOCTYPE html>
<html>
<head>
	<title>insert form</title>
</head>
<body>
	<form action="" method="post" enctype="multipart/form-data">
		roll no: <input type="text" name="rollno" value=""/>
		<br><br>
		name: <input type="text" name="name" value=""/>
		<br><br>
		class :<input type="text" name="class" value=""/>
		<br><br>
		Choose image :<input type="file" name="uploadfile" value="" />
		<br><br>
		<input type="submit" name="submit" value="submit"/>
	</form>

	<?php

	if ($_POST['submit']) 
	{
		$rn = $_POST['rollno'];
		$na = $_POST['name'];
		$cl = $_POST['class'];
		$filename = $_FILES["uploadfile"]["name"];
		$tempname = $_FILES["uploadfile"]["tmp_name"];
		$folder = "student/".$filename;

		move_uploaded_file($tempname, $folder);

		if ($rn!="" && $na!="" && $cl!="" && $filename!="") 
		{
			$query = "INSERT INTO SCHOOL VALUES ('$rn','$na','$cl','$folder')";
			$data=mysqli_query($conn, $query);

			if ($data) 
			{
				echo "Data inserted into database";
			}
		}
		else
		{
			echo "All fields are required";
		}
	}	
	?>
</body>
</html>