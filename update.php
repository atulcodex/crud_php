<?php
	include ("connection.php");
	error_reporting(0);

	 $_GET['rn'];  //we get this value from display.php on line 34 rn=$result[rollno]
	 $_GET['na'];
	 $_GET['cl'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>update form</title>
</head>
<body>
	<form action="" method="GET">
		roll no: <input type="text" name="rollno" value="<?php echo $_GET['rn']; ?>"/>   
		<br><br>
		name: <input type="text" name="name" value="<?php echo $_GET['na']; ?>"/>
		<br><br>
		class :<input type="text" name="class" value="<?php echo $_GET['cl']; ?>"/>
		<br><br>
		<input type="submit" name="submit" value="update"/>
	</form>

	<?php

	if ($_GET['submit']) 
	{
		$rollno = $_GET['rollno'];
		$name = $_GET['name'];
		$class = $_GET['class'];

		$query = "UPDATE SCHOOL SET NAME='$name', CLASS='$class' WHERE ROLLNO='$rollno' ";
		$data = mysqli_query($conn , $query);

		if ($data) 
		{
			echo "<font color='green'>Record updated successfully.<a href='display.php'>check updated data</a>";
		}
		else
		{
			echo "<font color='red'>Record not updated.<a href='display.php'>check updated data</a>";
		}
	}	

	else
	{
		echo "<font color='blue'>Click on update button to save the changes</font>";
	}
	?>
</body>
</html>