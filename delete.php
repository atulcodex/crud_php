<?php

	include("connection.php");

	$rollno = $_GET['rn'];

	$query = "DELETE FROM SCHOOL WHERE ROLLNO='$rollno'";
	$data = mysqli_query($conn , $query);

	if ($data) 
	{
		echo "<font color='green'/>Data deleted successfully";
	}
	else
	{
		echo "<font color=red/>Not deleted data";
	}

?>